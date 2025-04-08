<?php

namespace App\Controllers\Adminpanel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\adminpanel\ClientModel;
use App\Models\adminpanel\UserModel;
use App\Models\adminpanel\AuthModel;
use App\Models\CommonModel;

class Home extends BaseController{

    protected $clientModel;
    protected $userModel;
    protected $authModel;
    protected $CommonModel;

    public function __construct(){
        $this->isLoggedIn();
        $this->clientModel = new ClientModel();
        $this->userModel = new UserModel();
        $this->authModel = new AuthModel();
        $this->CommonModel = new CommonModel();
    }

    public function index(){
        $data = [];
        //$examStatusCount = $this->clientModel->getCompletedCounts();
        // if($examStatusCount['completed_count']){
        //     $data['completed'] = $examStatusCount['completed_count'];
        // }else{
        //     $data['completed'] = 0;
        // }
        $data['completed'] = 0;
        
        // if($examStatusCount['in_completed_count']){
        //     $data['incompleted'] = $examStatusCount['in_completed_count'];
        // }else{
        //     $data['incompleted'] = 0;
        // }
        $data['incompleted'] = 0;

        // $data['total_user'] = $this->clientModel->getTotalUser();
        // $data['total_question'] = $this->clientModel->getTotalQuestion();

        $data['total_user'] = 0;
        $data['total_question'] = 0;
        return $this->loadAdminView('home',$data);
    }

    
    public function client(){
        $data = [];
        return $this->loadAdminView('client',$data);
    }


    public function get_all_client(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_client($postData);
        return $this->response->setJSON($response);
    }

    public function examinee(){
        $data = [];
        return $this->loadAdminView('examinee',$data);
    }




    public function add_client(){
        $data = [];
        return $this->loadAdminView('addclient',$data); 
    }

    public function insert_client(){
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'shortname' => 'required|trim',
            'address'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'short_name'  => $this->request->getPost('shortname'),
            'address'     => $this->request->getPost('address'),
            'status'      => 1,
            'created_by'  => session()->get('id'),
            'created_on'  => time()
        ];

        ## ✅ Insert into Database
        //$inserted = $this->clientModel->insertClient($data);
        $inserted = $this->clientModel->insert($data);
        $client_id = $this->clientModel->insertID();


        ## ✅ Fetch Data from POST Request
        $data2 = [
            'name'        => $this->request->getPost('spoc_name'),
            'username'  => $this->request->getPost('spoc_username'),
            'email'     => $this->request->getPost('spoc_email'),
            'designation'     => $this->request->getPost('designation'),
            'phone'        => $this->request->getPost('spoc_phone'),
            'role_id'        => 2,
            'image' => 'noimg.png',
            'pass'  => $this->request->getPost('spoc_password'),
            'password' => password_hash($this->request->getPost('spoc_password'), PASSWORD_BCRYPT),
            'client_id' => $client_id,
            'client_name' => $this->request->getPost('name'),
            'status'      => 1,
            'created_by'  => session()->get('id'),
            'created_on'  => time()
        ];

        $created = $this->authModel->insertAdmin($data2);

        ## ✅ Return JSON Response
        if ($inserted) {
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Data inserted successfully'
            ]);
        } else {
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Data not inserted'
            ]);
        }
    }


    public function get_all_exminee(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_exminee($postData);
        return $this->response->setJSON($response);
    }


    public function add_examniee(){
        $data = [];
        $data['category'] = $this->clientModel->get_category();
        return $this->loadAdminView('addexaminee',$data); 
    }
    

    public function insert_examinee(){
        $session = session();
        

        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'email' => 'required|trim',
            'phone'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        $auto_gen_pass = generateRandomPassword();
        //$auto_gen_pass = 'Password#123';

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'email'       => $this->request->getPost('email'),
            'phone'       => $this->request->getPost('phone'),
            'age'         => $this->request->getPost('age'),
            'since'       => $this->request->getPost('since'),
            'director_type' => $this->request->getPost('director_type'),
            'is_chairperson' => $this->request->getPost('is_chairperson'),
            'chairperson_of' => $this->request->getPost('chairperson_of'),
            'member_of'   => $this->request->getPost('member_of'),
            'section'     => implode(',', $this->request->getPost('section')),
            'userlink'    => $auto_gen_pass,
            'password'    => password_hash($auto_gen_pass, PASSWORD_BCRYPT),
            'image'       => 'noimg.png',
            'date'        => time() + 12600,
            'token'       => bin2hex(random_bytes(35)),
            'client_id'   => session()->get('client_id'),
            'status'      => 1,
        ];

        ## ✅ Insert into Database
        $inserted = $this->userModel->insertUser($data);

        $to = $this->request->getPost('email');
        $from = 'support@cnkonline.in';
        $cc = 'abinashnayak60@gmail.com';
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        //$updatedMessage = str_replace("[name]", $this->request->getPost('name'), $message);

        $sender_name = $session->get('name');
        $designation = $session->get('designation');
        $client_name = $session->get('client_name');
        $sender_phone = $session->get('phone');

        //$subject2 = 'Your Login Credentials for Board Evaluation Survey';
        // $emailBody = '<p>Dear '.$this->request->getPost('name').',</p>
        //     <p>Below are the login credentials to complete the Board Evaluation</p>
        //     <p><b>URL: </b><a href="'.base_url('/login').'">'.base_url('/login').'</a><br />
        //     <b>Email ID: </b>'.$to.'<br />
        //     <b>Password: </b>'.$auto_gen_pass.'</p>
        //     <p>We sincerely appreciate your time and participation in this important assessment. Please feel free to reach out if you have any questions.</p>
        //     <p>Best regards,</p>
        //     <p>'.$sender_name.' <br> '.$designation.' <br> '.$client_name.' <br> '.$sender_phone.'</p>
        // ';
        $emailBody = '<p>Below are the login credentials to complete the Board Evaluation</p>
            <p><b>URL: </b><a href="'.base_url('/login').'">'.base_url('/login').'</a><br />
            <b>Email ID: </b>'.$to.'<br />
            <b>Password: </b>'.$auto_gen_pass.'</p>';
            
        $message = $message.'<hr>'.$emailBody;
        ## ✅ Return JSON Response
        if ($inserted) {
            send_email($to, $subject, $message, $cc, $from);
            //send_email($to, $subject2, $emailBody, $cc, $from);
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        } else {
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }




    public function question(){
        $data = [];
        return $this->loadAdminView('question',$data); 
    }

    public function get_all_question(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_question($postData);
        return $this->response->setJSON($response);
    }


    public function adminuser(){
        $data = [];
        return $this->loadAdminView('adminuser',$data); 
    }

    public function get_all_admin_user(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_admin_user($postData);
        return $this->response->setJSON($response);
    }


    public function report(){
        $data = [];
        return $this->loadAdminView('report',$data); 
    }


    public function get_user_report(){
        $userId = $this->request->getPost('userId');
        $data = $this->clientModel->get_user_report($userId);
        $data2 = $this->clientModel->get_user_feedback($userId);

        if ($data) {
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Record found',
                'result' => $data,
                'feedback' => $data2
            ]);
        } else {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Record not found'
            ]);
        }
    }


    public function get_cumulative_report(){
        $data = $this->clientModel->get_cumulative_report();

        if ($data) {
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Record found',
                'result' => $data,
            ]);
        } else {
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Record not found'
            ]);
        }
    }


    public function faq(){
        $data = [];
        return $this->loadAdminView('faq',$data);
    }

    public function get_all_faq(){
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_faq($postData);
        return $this->response->setJSON($response);
    }

    public function add_faq(){
        $data = [];
        return $this->loadAdminView('addfaq',$data); 
    }


    public function insert_faq(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'page'      => 'required|trim',
            'title' => 'required|trim',
            'content'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'page'        => $this->request->getPost('page'),
            'title'       => $this->request->getPost('title'),
            'content'       => $this->request->getPost('content'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_faq',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }


    /*********************************News Sction***************************/


    public function news(){
        $data = [];
        return $this->loadAdminView('news',$data);
    }

    public function get_all_news(){
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_news($postData);
        return $this->response->setJSON($response);
    }

    public function add_news(){
        $data = [];
        return $this->loadAdminView('addnews',$data); 
    }


    function createSlug($productName) {
        // Convert to lowercase
        $slug = strtolower($productName);
    
        // Replace special character '&' with 'and'
        $slug = preg_replace('/&/', 'and', $slug);
    
        // Replace non-alphanumeric characters with a hyphen
        $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    
        // Reduce multiple hyphens to a single hyphen
        $slug = preg_replace('/-+/', '-', $slug);
    
        // Trim hyphens from the beginning and end
        $slug = trim($slug, '-');
        
        return $slug;
    }


    public function insert_news(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/news/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'link'   => 'required|trim',
            'description'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/news/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'link'       => $this->request->getPost('link'),
            'slug' =>$this->createSlug($this->request->getPost('title')),
            'image' =>$image,
            'description'       => $this->request->getPost('description'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_news',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

    /******************************************Author Section****************************/

    public function author(){
        $data = [];
        return $this->loadAdminView('authors',$data);
    }

    public function get_all_author(){
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_author($postData);
        return $this->response->setJSON($response);
    }

    public function add_author(){
        $data = [];
        return $this->loadAdminView('addauthor',$data); 
    }

    public function insert_author(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/author/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'bio'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/author/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'bio'       => $this->request->getPost('bio'),
            'image' =>$image,
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_author',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }


    /**********************************Google Rating*****************************/


    public function google_rating(){
        $data = [];
        return $this->loadAdminView('googlerating',$data);
    }

    public function get_all_google_rating(){
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_google_rating($postData);
        return $this->response->setJSON($response);
    }

    public function add_google_rating(){
        $data = [];
        return $this->loadAdminView('addgooglerating',$data); 
    }



    public function insert_google_rating(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/googlerating/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'review'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/googlerating/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'review'       => $this->request->getPost('review'),
            'image' =>$image,
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_google_rating',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }


    /**********************Category Section************************/
    public function category(){
        $data = [];
        return $this->loadAdminView('category',$data); 
    }

    public function get_all_category(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_category($postData);
        return $this->response->setJSON($response);
    }


    public function add_category(){
        $data = [];
        return $this->loadAdminView('addcategory',$data); 
    }


    public function insert_category(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'section' => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'slug'       => $this->createSlug($this->request->getPost('name')),
            'section'       => $this->request->getPost('section'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_category_master',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

    /******************************************Video Section*********************/

    public function video(){
        $data = [];
        return $this->loadAdminView('video',$data); 
    }

    public function get_all_video(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_video($postData);
        return $this->response->setJSON($response);
    }


    public function add_video(){
        $data = [];
        $data['category'] = $this->CommonModel->getGenericData('tbl_category_master');
        return $this->loadAdminView('addvideo',$data); 
    }


    public function insert_video(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'url' => 'required|trim',
            'cat_id' => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'url'       => $this->request->getPost('url'),
            'cat_id'       => $this->request->getPost('cat_id'),
            'home_page'       => $this->request->getPost('home_page'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_youtube_videos',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

    /******************************Patient Testimonials********************/

    public function patient_testimonial(){
        $data = [];
        return $this->loadAdminView('patienttestimonial',$data); 
    }

    public function get_all_patient_testimonial(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_patient_testimonial($postData);
        return $this->response->setJSON($response);
    }


    public function add_patient_testimonial(){
        $data = [];
        $data['author'] = $this->CommonModel->getGenericData('tbl_author');
        return $this->loadAdminView('addpatienttestimonial',$data); 
    }


    public function insert_patient_testimonial(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/testimonial/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'description'   => 'required|trim',
            'content'   => 'required|trim',
            'author_id'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/testimonial/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'slug' =>$this->createSlug($this->request->getPost('title')),
            'description'       => $this->request->getPost('description'),
            'image' =>$image,
            'content'       => $this->request->getPost('content'),
            'author_id'       => $this->request->getPost('author_id'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_patient_testimonial',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

    /************************************lowest Qoutes******************/

    public function lowest_quote(){
        $data = [];
        return $this->loadAdminView('lowestquote',$data); 
    }

    public function get_all_lowest_quote(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_lowest_quote($postData);
        return $this->response->setJSON($response);
    }


    public function add_lowest_quote(){
        $data = [];
        return $this->loadAdminView('addlowestquote',$data); 
    }


    public function insert_lowest_quote(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/qoute/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'price'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/qoute/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'price'       => $this->request->getPost('price'),
            'image' =>$image,
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_lowest_quote',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }


    /********************************Multi Specialty***************/

    public function multi_specialty(){
        $data = [];
        return $this->loadAdminView('multispecialty',$data); 
    }

    public function get_all_multi_specialty(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_multi_specialty($postData);
        return $this->response->setJSON($response);
    }

    public function add_multi_specialty(){
        $data = [];
        return $this->loadAdminView('addmultispecialty',$data); 
    }

    public function insert_multi_specialty(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/specialty/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'description'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/specialty/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'description'  => $this->request->getPost('description'),
            'image'        => $image,
            'status'       => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_multi_specialty',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }


    /********************************Travel Visa***************/

    public function travel_visa(){
        $data = [];
        return $this->loadAdminView('travelvisa',$data); 
    }

    public function get_all_travel_visa(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_travel_visa($postData);
        return $this->response->setJSON($response);
    }

    public function add_travel_visa(){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        return $this->loadAdminView('addtravelvisa',$data); 
    }


    public function insert_travel_visa(){
        $session = session();

        ## ✅ Validation Rules
        $validationRules = [
            'country_from'      => 'required|trim',
            'country_to'   => 'required|trim',
            'visa_requirement'      => 'required|trim',
            'visa_invitation'   => 'required|trim',
            'remark'      => 'required|trim',
            'eligible_for_evisa'   => 'required|trim',
            'evisa_fees'      => 'required|trim',
            'visa_duration'   => 'required|trim',
            'visa_application'      => 'required|trim',
            'evisa_application'   => 'required|trim',
            'resource'      => 'required|trim',
        ];


        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }



        ## ✅ Fetch Data from POST Request
        $data = [
            'slug'         => $this->createSlug($this->request->getPost('country_from').'-'.$this->request->getPost('country_to')),
            'country_from'  => $this->request->getPost('country_from'),
            'country_to'  => $this->request->getPost('country_to'),
            'visa_requirement'  => $this->request->getPost('visa_requirement'),
            'visa_invitation'  => $this->request->getPost('visa_invitation'),
            'remark'  => $this->request->getPost('remark'),
            'eligible_for_evisa'  => $this->request->getPost('eligible_for_evisa'),
            'evisa_fees'  => $this->request->getPost('evisa_fees'),
            'regular_visa_fee'  => $this->request->getPost('regular_visa_fee'),
            'visa_duration'  => $this->request->getPost('visa_duration'),
            'visa_application'  => $this->request->getPost('visa_application'),
            'evisa_application'  => $this->request->getPost('evisa_application'),
            'resource'  => $this->request->getPost('resource'),
            'status'       => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_travel_visa',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }


    /******************************Blog Testimonials********************/

    public function blog(){
        $data = [];
        return $this->loadAdminView('blog',$data); 
    }

    public function get_all_blog(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_blog($postData);
        return $this->response->setJSON($response);
    }


    public function add_blog(){
        $data = [];
        $data['author'] = $this->CommonModel->getGenericData('tbl_author');

        $where_conditions = array(
            'status' => 1,
            'section' => 'blog'
        );
        $columnArray = ['id','name'];
        $data['category'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_category_master',$where_conditions);

        return $this->loadAdminView('addblog',$data); 
    }


    public function insert_blog(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/blog/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'cat_id'   => 'required|trim',
            'content'   => 'required|trim',
            'author_id'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/blog/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'slug' =>$this->createSlug($this->request->getPost('title')),
            'author_id'       => $this->request->getPost('author_id'),
            'cat_id'       => $this->request->getPost('cat_id'),
            'title'        => $this->request->getPost('title'),
            'image' =>$image,
            'content'       => $this->request->getPost('content'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_blog',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }






    /**********************Department Section************************/
    public function department(){
        $data = [];
        return $this->loadAdminView('department',$data); 
    }

    public function get_all_department(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_department($postData);
        return $this->response->setJSON($response);
    }


    public function add_department(){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        return $this->loadAdminView('adddepartment',$data); 
    }


    public function insert_department(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'country' => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'slug'       => $this->createSlug($this->request->getPost('name')),
            'country_id'     => $this->request->getPost('country'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_department_master',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }



    /******************************Cost Section********************/

    public function cost(){
        $data = [];
        return $this->loadAdminView('cost',$data); 
    }

    public function get_all_cost(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_cost($postData);
        return $this->response->setJSON($response);
    }


    public function add_cost(){
        $data = [];
        $data['author'] = $this->CommonModel->getGenericData('tbl_author');

        $where_conditions = array(
            'status' => 1,
            'section' => 'blog'
        );
        $columnArray = ['id','name'];
        $data['category'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_category_master',$where_conditions);

        return $this->loadAdminView('addcost',$data); 
    }


    public function insert_cost(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/blog/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'cat_id'   => 'required|trim',
            'content'   => 'required|trim',
            'author_id'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image = '/docs/blog/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'slug' =>$this->createSlug($this->request->getPost('title')),
            'author_id'       => $this->request->getPost('author_id'),
            'cat_id'       => $this->request->getPost('cat_id'),
            'title'        => $this->request->getPost('title'),
            'image' =>$image,
            'content'       => $this->request->getPost('content'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_blog',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }



    /**********************Treatment Section************************/
    public function treatment(){
        $data = [];
        return $this->loadAdminView('treatment',$data); 
    }

    public function get_all_treatment(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_treatment($postData);
        return $this->response->setJSON($response);
    }


    public function add_treatment(){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        return $this->loadAdminView('addtreatment',$data); 
    }


    public function insert_treatment(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'country' => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'slug'       => $this->createSlug($this->request->getPost('name')),
            'country_id'     => $this->request->getPost('country'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_department_master',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'New Member Registered successfully'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }
}
