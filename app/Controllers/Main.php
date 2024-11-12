<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        echo view('html_header');
        echo view('html_nav');
        echo view('html_content');
        echo view('html_footer');
    }

    public function about()
    {
        echo view('html_header');
        echo view('html_nav');
        echo view('html_about');
        echo view('html_footer');
    }

    public function services()
    {
        echo view('html_header');
        echo view('html_nav');
        echo view('html_services');
        echo view('html_footer');
    }

}
