<?php

namespace App\Http\Controllers\Admin;

use App\Components\Backend\Table;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $resource;

    public function __construct()
    {
        $this->resource = (object)[
            'slug' => 'users',
            'singular' => 'User',
            'plurals' => 'Users',
            'model' => User::class
        ];

        view()->share('resource', $this->resource);
    }


    public function index()
    {
    
        return view("backend.{$this->resource->slug}.index", [
            'table' => $this->table(),
            'roles' => Role::all()
        ]);
    }


    public function create()
    {
        return view("backend.{$this->resource->slug}.form", [
            'row' => new $this->resource->model
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'id' => 'nullable',
            'role_id' => 'required',
            'name' => 'required|max:200',
            'email' => 'email|unique:users,email|max:100',
            'password' => 'required'
        ];

        if($request->id) {
            $rules['password'] = 'nullable';
            $rules['email'] = 'email|max:100|unique:users,email,' . $request->id;
        }

        $validated = $request->validate($rules);

        $id = $validated['id'] ?? '';

        if($validated['password'] ?? null) {
            $validated['password'] = Hash::make($validated['password']);
        }
        else {
            unset($validated['password']);
        }
        
        $save = $id 
            ? User::find($id)
                ->update($validated)
            : User::create($validated);
            
        return $this->table();
    }

    public function destroy(User $category)
    {
        $category->delete();
        return $this->table();
    }

    public function table()
    {
        $table = (new Table)
            ->baseUrl(url("admin/{$this->resource->slug}"))
            ->model(User::class)
            ->filters([
                's' => function($query, $value) {
                    return $query->where('name', 'LIKE', '%' . $value . '%');
                }
            ])
            ->apply([
                'sort', function($query){
                    if(!request('sortBy')) {
                        return $query->orderBy('id', 'DESC');
                    }
                }
            ])
            ->columns([
                'id' => [
                    'label' => 'ID',
                    'sort' => true,
                    'style' => [
                        'width' => '100px'
                    ]
                ],
                'role' => [
                    'label' => 'Role',
                    'callback' => function($row) {
                        return $row->role->name ?? '-';
                    }
                ],
                'name' => [
                    'label' => 'NAME',
                    'sort' => true
                ],
                
                'email' => [
                    'label' => 'EMAIL',
                ],


                '' => [
                    'label' => 'Actions',
                    'callback' => function($row) {
                        ?>
                        <a href="#offcanvasForm" 
                            hx-trigger="click"
                            hx-get="<?php echo url('admin/' . $this->resource->slug . '/form/?id=' . $row->id); ?>" 
                            hx-target="#formWrapper" class="btn btn-warning btn-edit" data-bs-toggle="offcanvas">
                                <span class="bi bi-pencil"></span>
                        </a>
                        <a href="" hx-delete="<?php echo url('admin/' . $this->resource->slug . '/' . $row->id); ?>" hx-trigger="click" hx-target="#table" class="btn btn-danger btn-delete">
                            <span class="bi bi-trash"></span>
                        </a>
                        <?php 
                    },
                    'style' => [
                        'width' => '100px',
                        'text-align' => 'center'
                    ],
                ]
            ])
            ->build();

        return view("backend.{$this->resource->slug}.table", [
            'table' => $table
        ])->render();
    }

    public function form(Request $request)
    {
        $row = $request->id 
            ? User::find($request->id)
            : new User();

        return view("backend.{$this->resource->slug}.form", [
            'row' => $row,
            'roles' => Role::all()
        ]);
    }
}
