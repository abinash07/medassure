<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CommonModel;
use App\Models\HomeModel;

class Home extends BaseController{

    protected $CommonModel;
    protected $HomeModel;

    public function __construct(){
        $this->CommonModel = new CommonModel();
        $this->HomeModel = new HomeModel();
    }

    public function index(){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['faq'] = $this->CommonModel->getFaqData('home');
        $data['news'] = $this->CommonModel->getGenericData('tbl_news');
        $data['googlerating'] = $this->CommonModel->getGenericData('tbl_google_rating');
        $where_conditions = array(
            'home_page' => 1,
            'status' => 1,
        );
        $columnArray = ['title','url'];
        $data['video'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_youtube_videos',$where_conditions);
        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','title','slug','description','image'];
        $data['testimonial'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_patient_testimonial',$where_conditions);
        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','title','price','image'];
        $data['qoute'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_lowest_quote',$where_conditions);
        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','title','description','image'];
        $data['specialty'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_multi_specialty',$where_conditions);
        $data['delhitophospital'] = $this->HomeModel->getTopHospitalData(15);
        $data['gurugramtophospital'] = $this->HomeModel->getTopHospitalData(6);
        $data['faridabadtophospital'] = $this->HomeModel->getTopHospitalData(5);
        $data['noidatophospital'] = $this->HomeModel->getTopHospitalData(16);
        $data['channaitophospital'] = $this->HomeModel->getTopHospitalData(4);
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
        $data['countryList'] = $this->CommonModel->getMasterData();
        return view('consultonline',$data);
    }

    public function videos($slug = ''){
        $data = [];
        $data['category'] = $this->HomeModel->getCategoryData();
        $data['video'] = $this->HomeModel->getVideoData($slug);
        // echo '<pre>';
        // print_r($data['video']);
        // exit;
        return $this->loadView('videos',$data);
    }


    public function knowledge_center($slug = ''){
        $data = [];
        $data['blogs'] = $this->HomeModel->getBlogsData(0,2);
        $data['blogsmore'] = $this->HomeModel->getBlogsData(0,5);
        return $this->loadView('knowledgecenter',$data);
    }

    public function knowledge_center_page($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['blog'] = $this->HomeModel->getBlogData($slug);
        // echo '<pre>';
        // print_r($data['blog']);
        // exit;
        return $this->loadView('blog',$data);
    }

    public function cost($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['cost'] = $this->HomeModel->getCostData($slug);
        //$data['blog'] = $this->HomeModel->getBlogData($slug);
        // echo '<pre>';
        // print_r($data['cost']);
        // exit;
        return $this->loadView('cost',$data);
    }

    

    public function patient_testimonials($slug = ''){
        $data = [];
        $data['testimonials'] = $this->HomeModel->getTestimonialsData(0,2);
        $data['testimonialsmore'] = $this->HomeModel->getTestimonialsData(0,2);
        // echo '<pre>';
        // echo "-----------";
        // print_r($data['testimonials']);
        // exit;
        return $this->loadView('testimonials',$data);
    }

    public function patient_testimonial($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['testimonial'] = $this->HomeModel->getTestimonialData($slug);
        // echo '<pre>';
        // print_r($data['testimonial']);
        // exit;
        return $this->loadView('testimonial',$data);
    }


    public function travel_visa($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['countryList'] = $this->CommonModel->getMasterData();
        // echo '<pre>';
        // print_r($data['testimonial']);
        // exit;
        return $this->loadView('travelvisa',$data);
    }

    public function travel_visa_page($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['countryList'] = $this->CommonModel->getMasterData();

        $where_conditions = array(
            'slug' => $slug,
            'status' => 1,
        );
        $columnArray = ['*'];
        $data['visa'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_travel_visa',$where_conditions);

        // echo '<pre>';
        // print_r($data['testimonial']);
        // exit;
        return $this->loadView('visa',$data);
    }


    public function hospital($city = ''){
        $data = [];
        $data['slug'] = $city;
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['faq'] = $this->CommonModel->getFaqData('hospital');
        $data['citymenu'] = $city;

        $where_conditions = array(
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name','slug'];
        $data['city'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_city_master',$where_conditions);

        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','name','slug'];
        $data['department'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_department_master',$where_conditions);

        return $this->loadView('hospital',$data);
    }


    public function hospital_page($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['hospital'] = $this->HomeModel->getHospitalData($slug);

        // echo '<pre>';
        // print_r($data['hospital']);
        // exit;
        return $this->loadView('hospitalpage',$data);
    }


    
    public function get_hospital_data(){
        $country = $this->request->getPost('country');
        $city = $this->request->getPost('city');
        $department = $this->request->getPost('department');
        $page = $this->request->getPost('page') ? intval($this->request->getPost('page')) : 1;
        $limit = 9;
        $offset = ($page - 1) * $limit;

        $result = $this->HomeModel->get_hospital_data($offset,$limit,$country,$city,$department);
        $countdata = $this->HomeModel->get_hospital_data_count();


        $count = ceil($countdata->total/$limit);

        if ($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Success',
                'result' => $result,
                'count' => $count
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Error'
            ]);
        }
    }


    public function get_doctor_data(){
        $country = $this->request->getPost('country');
        $city = $this->request->getPost('city');
        $department = $this->request->getPost('department');
        $treatment = $this->request->getPost('treatment');
        $hospital = $this->request->getPost('hospital');
        $page = $this->request->getPost('page') ? intval($this->request->getPost('page')) : 1;
        $limit = 9;
        $offset = ($page - 1) * $limit;

        $result = $this->HomeModel->get_doctor_data($offset,$limit,$country,$city,$department,$treatment,$hospital);
        $countdata = $this->HomeModel->get_doctor_data_count();
        $count = ceil($countdata->total/$limit);

        if ($result) {
            echo json_encode([
                'status' => true,
                'message' => 'Success',
                'result' => $result,
                'count' => $count
            ]);
        } else {
            echo json_encode([
                'status' => false,
                'message' => 'Error'
            ]);
        }
    }

    public function doctor($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['faq'] = $this->CommonModel->getFaqData('doctor');

        $where_conditions = array(
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name','slug'];
        $data['city'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_city_master',$where_conditions);

        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','name','slug'];
        $data['department'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_department_master',$where_conditions);

        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','name','slug'];
        $data['treatment'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_treatment',$where_conditions);

        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','name','slug'];
        $data['hospital'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_hospital',$where_conditions);

        return $this->loadView('doctor',$data);
    }


    public function doctor_page($slug = ''){
        $data = [];
        $data['slug'] = $slug;
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['doctor'] = $this->HomeModel->getDoctorlData($slug);
        // echo '<pre>';
        // print_r($data['doctor']);
        // exit;
        return $this->loadView('doctorpage',$data);
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
