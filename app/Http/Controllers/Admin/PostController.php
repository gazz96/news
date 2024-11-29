<?php

namespace App\Http\Controllers\Admin;

use App\Components\Backend\Table;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $resource;

    public function __construct()
    {
        $this->resource = (object)[
            'slug' => 'posts',
            'singular' => 'Post',
            'plurals' => 'Posts'
        ];

        view()->share('resource', $this->resource);
    }


    public function index()
    {
    
        return view("backend.{$this->resource->slug}.index", [
            'table' => $this->table(),
            'row' => new Post
        ]);
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'nullable',
            'title' => 'required|max:150',
            'content' => 'required',
            'publish_date' => 'required',
            'status' => 'required',
            'thumbnail_url' => 'nullable',
            'categories' => 'nullable'
        ]);

        $id = $validated['id'] ?? '';
        $categories = collect($validated['categories'] ?? []);
        if($id) 
        {
            $post = Post::find($id);
            $post->update($validated);

            if($categories->count())
            {
                $post->categories()->where('post_id', $post->id)
                ->whereNotIn('category_id', $categories->toArray())
                ->delete();

            
                $categories->map(function($category) use ($post){
                    $post->categories()->create([
                        'category_id' => $category
                    ]);
                });
            }
            

            return $this->table();
        }
        
        $post = Post::create($validated);

        $categories->map(function($category) use ($post){
            $post->categories()->create([
                'category_id' => $category
            ]);
        });
            
        return $this->table();
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return $this->table();
    }

    public function table()
    {
        $table = (new Table)
        ->baseUrl(url("admin/{$this->resource->slug}"))
        ->model(Post::class)
        ->filters([
            's' => function($query, $value) {
                return $query->where(function($query) use ($value){
                    $query->where('title', 'LIKE', '%' . $value . '%')
                        ->orWhere('post_content', 'LIKE', '%' . $value . '%');
                });
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

            'title' => [
                'label' => 'TITLE',
                'sort' => true
            ],

            'categories' => [
                'label' => 'CATEGORY',
                'callback' => function($row) {
                    foreach($row->categories as $category) {
                        $catName = $category->category->name ?? '';
                        echo "<span class='badge text-bg-primary px-3 rounded-pill me-1'>{$catName}</span>";
                    }
                }
            ],
            
            'publish_date' => [
                'label' => 'DATE',
                'callback' =>  function($row) {
                    return date('d F Y', strtotime($row->publish_date));
                }
            ],

            'status' => [
                'label' => 'STATUS'
            ],

            'actions' => [
                'label' => '',
                'callback' => function($row) {
                    ?>
                    <a href="#offcanvasForm" 
                        hx-trigger="click"
                        hx-get="<?php echo url('admin/' . $this->resource->slug . '/form/?id=' . $row->id); ?>"
                        hx-on::after-request="initForm()" 
                        hx-target="#formWrapper" class="btn btn-warning btn-edit" 
                        data-bs-toggle="offcanvas">
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
        $post = $request->id 
            ? Post::find($request->id)
            : new Post;

        return view("backend.{$this->resource->slug}.form", [
            'row' => $post,
            'categories' => Category::orderBy('name', 'ASC')->get()
        ]);
    }
}
