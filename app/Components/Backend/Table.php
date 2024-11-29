<?php 

namespace App\Components\Backend;

use Illuminate\Support\Facades\View;



class Table 
{

    private $rows = [];
    private $template = "backend.components.table";
    private $columns = [];
    private $filters = [];
    private $apply = [];
    private $model = null;
    private $postsPerPage = 20;
    private $baseUrl = "";

    public function __construct()
    {
        
    }

    public function baseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    public function model($model)
    {
        $this->model = new $model;
        return $this;
    }

    public function filters($filters)
    {
        $this->filters = $filters;
        return $this;
    }

    public function doFilters()
    {
        foreach($this->filters as $key => $filter)
        {
            $this->model = $this->model->when(request($key), $filter);
        }
        return $this;   
    }

    public function apply($apply)
    {
        $this->apply = $apply;
        return $this;
    }

    public function doApply()
    {
        foreach($this->apply as $key => $apply)
        {
            $this->model = $this->model->when($key, $apply);
        }
        return $this;   
    }

    public function doSort()
    {
        if(request('sortBy'))
        {
            $this->model = $this->model->orderBy(request('sortBy'), request('sort'));
        }
        return $this;
    }

    public function columns($columns)
    {
        $this->columns = $columns;
        return $this;
    }

    public function buildData()
    {
        $this->doFilters()
            ->doApply()
            ->doSort();
    }

    public function postsPerPage($postsPerPage)
    {
        $this->postsPerPage = $postsPerPage;
        return $this;
    }

    public function build()
    {
        
        $this->buildData();
        $this->rows = $this->model->paginate($this->postsPerPage)
            ->appends(request()->except('page'));
            

        return View::make($this->template, [
            'columns' => $this->columns,
            'rows' => $this->rows,
            'baseUrl' => $this->baseUrl
        ])->render();
    }

   




}