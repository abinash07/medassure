<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController{
    public function index(){
        $data = [];
        return $this->loadView('index',$data);
    }
}
