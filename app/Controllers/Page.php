<?php

use uFrame\Controller;

class Page extends Controller
{

    public function index()
     {
        $this->show();
    }

    public function show($page_name = "Home")
    {
        //echo "This is PAGE/" . $page_name;
        // Should we need some data from the database..

        $pageModel = $this->model("PageModel");
        $data['page'] = $pageModel->getPage($page_name);
        $this->view("page", $data);
    }

}
