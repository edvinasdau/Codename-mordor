<?php

use uFrame\Controller;

class Blog extends Controller
{

    public function index()
     {
        //shows all blog records
        $blogModel = $this->model("BlogModel");
        $data['postList'] = $blogModel->getAll();
        $this->view("blog/list", $data);
        //print_r($blogModel->getAll());
    }

    public function show($id)
    {
        //show single blog post by id

        $blogModel = $this->model("BlogModel");
        $data['post'] = $blogModel->getSingle($id);
        $this->view("blog/single", $data);
    }



}
