<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CommonModel;

class Home extends BaseController{

    protected $CommonModel;

    public function __construct(){
        $this->CommonModel = new CommonModel();
    }

    public function index(){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['faq'] = $this->CommonModel->getFaqData('home');
        $data['news'] = $this->CommonModel->getGenericData('tbl_news');
        $data['googlerating'] = $this->CommonModel->getGenericData('tbl_google_rating');
        // echo '<pre>';
        // print_r($data['news']);
        // exit;
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

    public function test_data(){
        $examStatusCount = $this->CommonModel->getMasterData();
        echo '<pre>';
        print_r($examStatusCount);
    }



    public function generic_form(){
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $country = $this->request->getPost('country');
        $other = $this->request->getPost('other');
        $phone = $this->request->getPost('phone_number');
        $medical_problem = $this->request->getPost('medical_problem');
        $age = $this->request->getPost('age');

        $data = array(
            'name' => $name,
            'email' => $email,
            'country_id' => $country,
            'mobile' => $phone,
            'other' => $other,
            'description' => $medical_problem,
            'age' => $age,
            'status' => 1,
            'created_by' => 1,
            'created_on' => time()
        );

        $result = $this->CommonModel->add_record('tbl_enquiry',$data);
        if($result){
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Record found',
                'result' => $data
            ]);
        }else{
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Record not found'
            ]);
        }
    }
}
