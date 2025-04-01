<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController{
    public function index(){
        $data = [];
        return $this->loadView('index',$data);
    }

    public function about_us(){
        $data = [];
        return $this->loadView('aboutus',$data);
    }

    public function medassure_services(){
        $data = [];
        return $this->loadView('medassureservices',$data);
    }

    public function medassure_mission_vision_objective(){
        $data = [];
        return $this->loadView('medassuremissionvisionobjective',$data);
    }

    public function our_team(){
        $data = [];
        return $this->loadView('ourteam',$data);
    }

    public function frequently_asked_questions(){
        $data = [];
        return $this->loadView('faq',$data);
    }

    public function contact(){
        $data = [];
        return $this->loadView('contact',$data);
    }

    public function jobs_medassure(){
        $data = [];
        return $this->loadView('jobs',$data);
    }

    public function medassure_hospital_services(){
        $data = [];
        return $this->loadView('hospitalservices',$data);
    }

    public function opd_camps(){
        $data = [];
        return $this->loadView('opdcamps',$data);
    }

    public function medassure_doctor_services(){
        $data = [];
        return $this->loadView('doctorservices',$data);
    }

    public function partner_medassure(){
        $data = [];
        return $this->loadView('partnermedassure',$data);
    }

    public function privacy_policy(){
        $data = [];
        return $this->loadView('privacypolicy',$data);
    }

    public function editorial_policy(){
        $data = [];
        return $this->loadView('editorialpolicy',$data);
    }


    public function terms_use(){
        $data = [];
        return $this->loadView('termsuse',$data);
    }

    public function india(){
        $data = [];
        return $this->loadView('india',$data);
    }

    public function turkey(){
        $data = [];
        return $this->loadView('turkey',$data);
    }

    public function thailand(){
        $data = [];
        return $this->loadView('thailand',$data);
    }

    public function consult_online(){
        return view('consultonline');
    }
}
