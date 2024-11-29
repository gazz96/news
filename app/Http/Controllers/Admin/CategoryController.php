<?php

namespace App\Http\Controllers\Admin;

use App\Components\Backend\Table;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $resource;

    public function __construct()
    {
        $this->resource = (object)[
            'slug' => 'categories',
            'singular' => 'Category',
            'plurals' => 'Categories'
        ];

        view()->share('resource', $this->resource);
    }


    public function index()
    {
    
        return view("backend.{$this->resource->slug}.index", [
            'table' => $this->table()
        ]);
    }


    public function create()
    {
        return view("backend.{$this->resource->slug}.form", [
            'row' => new Category
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'nullable',
            'name' => 'required|max:200',
            'description' => 'nullable|max:200'
        ]);

        $id = $validated['id'] ?? '';


        
        $category = $id 
            ? Category::find($id)
                ->update($validated)
            : Category::create($validated);
            
        return $this->table();
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return $this->table();
    }

    public function table()
    {
        $table = (new Table)
        ->baseUrl(url("admin/{$this->resource->slug}"))
        ->model(Category::class)
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

            'name' => [
                'label' => 'NAME',
                'sort' => true
            ],
            
            'slug' => [
                'label' => 'SLUG',
            ],
            
            'description' => [
                'label' => 'DESCRIPTION'
            ],

            'actions' => [
                'label' => '',
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
                    'width' => '150px',
                    'text-align' => 'center'
                ],
            ]
        ])
        ->build();

        return $table;
    }

    public function form(Request $request)
    {
        $category = $request->id 
            ? Category::find($request->id)
            : new Category;

        return view("backend.{$this->resource->slug}.form", [
            'category' => $category
        ]);
    }
}
