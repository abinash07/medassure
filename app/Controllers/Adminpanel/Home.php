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
        
        $data['total_hospial'] = $this->clientModel->getTotalHospital();
        $data['total_doctor'] = $this->clientModel->getTotalDoctor();
        $data['total_enquiry'] = $this->clientModel->getTotalEnquiry();
        $data['total_video'] = $this->clientModel->getTotalVideos();
        

        $data['total_faq'] = $this->clientModel->getTotalFaq();
        $data['total_author'] = $this->clientModel->getTotalAuthor();
        $data['total_rating'] = $this->clientModel->getTotalRating();
        $data['total_department'] = $this->clientModel->getTotalDepartment();
        $data['total_treatment'] = $this->clientModel->getTotalTreatment();

        return $this->loadAdminView('home',$data);
    }

    public function get_sells_data(){
        $result = $this->clientModel->getSellsCount();
        if($result){
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Record found',
                'result' => $result
            ]);
        }else{
            return $this->response->setJSON([
                'status' => false,
                'message' => 'Record not found'
            ]);
        }
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


    public function edit_faq($id){
        $data = [];
        $data['faq'] = $this->CommonModel->getSingleTableData('tbl_faq',$id);
        return $this->loadAdminView('editfaq',$data); 
    }

    public function update_faq(){
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
        $id = $this->request->getPost('id');

        ## ✅ Fetch Data from POST Request
        $data = [
            'page'        => $this->request->getPost('page'),
            'title'       => $this->request->getPost('title'),
            'content'       => $this->request->getPost('content'),            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_faq',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully updated'
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


    public function edit_author($id){
        $data = [];
        $data['author'] = $this->CommonModel->getSingleTableData('tbl_author',$id);
        return $this->loadAdminView('editauthor',$data); 
    }


    public function update_author(){
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

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $image = '';

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/author/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'bio'       => $this->request->getPost('bio'),
        ];
        if($image){$data['image'] = $image;}
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_author',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
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



    public function edit_google_rating($id){
        $data = [];
        $data['googlerating'] = $this->CommonModel->getSingleTableData('tbl_google_rating',$id);
        return $this->loadAdminView('editgooglerating',$data); 
    }


    public function update_google_rating(){
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

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $image = '';

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/googlerating/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'review'       => $this->request->getPost('review'),
        ];
        if($image){$data['image'] = $image;}
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_google_rating',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
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


    
    public function edit_category($id){
        $data = [];
        $data['category'] = $this->CommonModel->getSingleTableData('tbl_category_master',$id);
        return $this->loadAdminView('editcategory',$data); 
    }

    public function update_category(){
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
        $id = $this->request->getPost('id');

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'slug'        => $this->createSlug($this->request->getPost('name')),
            'section'     => $this->request->getPost('section'),
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_category_master',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully updated'
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


    public function edit_video($id){
        $data = [];
        $data['category'] = $this->CommonModel->getGenericData('tbl_category_master');
        $data['video'] = $this->CommonModel->getSingleTableData('tbl_youtube_videos',$id);
        return $this->loadAdminView('editvideo',$data); 
    }

    public function update_video(){
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
        $id = $this->request->getPost('id');

        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'url'       => $this->request->getPost('url'),
            'cat_id'       => $this->request->getPost('cat_id'),
            'home_page'       => $this->request->getPost('home_page'),
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_youtube_videos',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully updated'
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



    
    public function edit_patient_testimonial($id){
        $data = [];
        $data['author'] = $this->CommonModel->getGenericData('tbl_author');
        $data['testimonial'] = $this->CommonModel->getSingleTableData('tbl_patient_testimonial',$id);
        return $this->loadAdminView('editpatienttestimonial',$data); 
    }


    public function update_patient_testimonial(){
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

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $image = '';

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/testimonial/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'slug' =>$this->createSlug($this->request->getPost('title')),
            'description'       => $this->request->getPost('description'),
            'content'       => $this->request->getPost('content'),
            'author_id'       => $this->request->getPost('author_id'),
        ];
        if($image){$data['image'] = $image;}
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_patient_testimonial',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
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




    public function edit_lowest_quote($id){
        $data = [];
        $data['quote'] = $this->CommonModel->getSingleTableData('tbl_lowest_quote',$id);
        return $this->loadAdminView('editlowestquote',$data); 
    }


    public function update_lowest_quote(){
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

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $image = '';

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/qoute/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'price'       => $this->request->getPost('price'),
        ];
        if($image){$data['image'] = $image;}
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_lowest_quote',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
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


    public function edit_multi_specialty($id){
        $data = [];
        $data['specialty'] = $this->CommonModel->getSingleTableData('tbl_multi_specialty',$id);
        return $this->loadAdminView('editmultispecialty',$data); 
    }


    public function update_multi_specialty(){
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

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $image = '';

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/specialty/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'        => $this->request->getPost('title'),
            'description'  => $this->request->getPost('description'),
        ];
        if($image){$data['image'] = $image;}
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_multi_specialty',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
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
            'short_name'      => 'required|trim',
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
            'short_name'     => $this->request->getPost('short_name'),
            'menu' => 1,
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


    public function edit_department($id){
        $data = [];
        $data['department'] = $this->CommonModel->getSingleTableData('tbl_department_master',$id);
        $data['countryList'] = $this->CommonModel->getMasterData();
        return $this->loadAdminView('editdepartment',$data); 
    }


    public function update_department(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'short_name'      => 'required|trim',
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

        $id = $this->request->getPost('id');

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'slug'       => $this->createSlug($this->request->getPost('name')),
            'country_id'     => $this->request->getPost('country'),
            'short_name'     => $this->request->getPost('short_name'),
        ];

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_department_master',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
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
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['department'] = $this->CommonModel->getGenericData('tbl_department_master');
        return $this->loadAdminView('addcost',$data); 
    }


    public function insert_cost(){
        $session = session();

        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'country'      => 'required|trim',
            'department'      => 'required|trim',
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
            'title'      => $this->request->getPost('title'),
            'slug'       =>$this->createSlug($this->request->getPost('title')),
            'country_id' => $this->request->getPost('country'),
            'department_id' => $this->request->getPost('department'),
            'content'    => $this->request->getPost('content'),
            'status'     => 1,
            'created_by' => session()->get('id'),
            'created_on' => time() + 12600,
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_cost',$data);
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



    
    public function edit_cost($id){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['department'] = $this->CommonModel->getGenericData('tbl_department_master');
        $data['cost'] = $this->CommonModel->getSingleTableData('tbl_cost',$id);
        return $this->loadAdminView('editcost',$data); 
    }


    public function update_cost(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'title'      => 'required|trim',
            'country'      => 'required|trim',
            'department'      => 'required|trim',
            'content' => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        $id = $this->request->getPost('id');

        ## ✅ Fetch Data from POST Request
        $data = [
            'title'      => $this->request->getPost('title'),
            'slug'       =>$this->createSlug($this->request->getPost('title')),
            'country_id' => $this->request->getPost('country'),
            'department_id' => $this->request->getPost('department'),
            'content'    => $this->request->getPost('content'),
        ];

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_cost',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
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
        $data['department'] = $this->CommonModel->getGenericData('tbl_department_master');
        return $this->loadAdminView('addtreatment',$data); 
    }


    public function insert_treatment(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'department_id' => 'required|trim',
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
            'department_id'     => $this->request->getPost('department_id'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
            
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_treatment',$data);
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


    public function edit_treatment($id){
        $data = [];
        $data['treatment'] = $this->CommonModel->getSingleTableData('tbl_treatment',$id);
        $data['department'] = $this->CommonModel->getGenericData('tbl_department_master');
        return $this->loadAdminView('edittreatment',$data); 
    }


    public function update_treatment(){
        $session = session();
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'department_id' => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        $id = $this->request->getPost('id');

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'        => $this->request->getPost('name'),
            'slug'       => $this->createSlug($this->request->getPost('name')),
            'department_id'     => $this->request->getPost('department_id'),
        ];

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_treatment',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

    /**********************Hospital Section************************/
    public function hospital(){
        $data = [];
        return $this->loadAdminView('hospital',$data); 
    }

    public function get_all_hospital(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_hospital($postData);
        return $this->response->setJSON($response);
    }


    public function add_hospital(){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['department'] = $this->CommonModel->getGenericData('tbl_department_master');
        $where_conditions = array(
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['city'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_city_master',$where_conditions);
        return $this->loadAdminView('addhospital',$data); 
    }


    public function insert_hospital(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/hospital/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        $resizedsecondaryimg = $this->request->getPost('resizedsecondaryimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'city' => 'required|trim',
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
            $image = '/docs/hospital/'.$profile_uniqueFilename;
        }


        if(isset($resizedsecondaryimg) && !empty($resizedsecondaryimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedsecondaryimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            file_put_contents($profile_filepath, $profile_file_binary);
            $image2 = '/docs/hospital/'.$profile_uniqueFilename;
        }

        $accreditation = $this->request->getPost('accreditation');
        $comfort_during_stay = $this->request->getPost('comfort_during_stay');
        $money_matters = $this->request->getPost('money_matters');
        $food = $this->request->getPost('food');
        $treatment_related = $this->request->getPost('treatment_related');
        $language = $this->request->getPost('language');
        $transportation = $this->request->getPost('transportation');

        if(!empty($accreditation)){
            $accreditationdata = implode(',',$accreditation);
        }else{
            $accreditationdata = "";
        }
        if(!empty($comfort_during_stay)){
            $comfort_during_stay_data = implode(',',$comfort_during_stay);
        }else{
            $comfort_during_stay_data = "";
        }
        if(!empty($money_matters)){
            $money_matters_data = implode(',',$money_matters);
        }else{
            $money_matters_data = "";
        }
        if(!empty($food)){
            $fooddata = implode(',',$food);
        }else{
            $fooddata = "";
        }
        if(!empty($treatment_related)){
            $treatment_related_data = implode(',',$treatment_related);
        }else{
            $treatment_related_data = "";
        }
        if(!empty($language)){
            $languagedata = implode(',',$language);
        }else{
            $languagedata = "";
        }
        if(!empty($transportation)){
            $transportationdata = implode(',',$transportation);
        }else{
            $transportationdata = "";
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'name'  => $this->request->getPost('name'),
            'slug'  => $this->createSlug($this->request->getPost('name')),
            'primary_image'        =>$image,
            'secondary_img'        =>$image2,
            'city' => $this->request->getPost('city'),
            'department' => $this->request->getPost('department'),
            'established' => $this->request->getPost('established'),
            'accreditation' => $accreditationdata,
            'specialty' => $this->request->getPost('specialty'),
            'number_of_bed' => $this->request->getPost('number_of_bed'),
            'about' => $this->request->getPost('about'),
            'team_and_specialities' => $this->request->getPost('team_and_specialities'),
            'comfort_during_stay' => $comfort_during_stay_data,
            'money_matters' => $money_matters_data,
            'food' => $fooddata,
            'treatment_related' => $treatment_related_data,
            'language' => $languagedata,
            'transportation' => $transportationdata,
            'infrastructure' => $this->request->getPost('infrastructure'),
            'address' => $this->request->getPost('address'),
            'map' => $this->request->getPost('map'),
            'location' => $this->request->getPost('location'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_hospital',$data);
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

    public function edit_hospital($id){
        $data = [];
        $data['countryList'] = $this->CommonModel->getMasterData();
        $data['department'] = $this->CommonModel->getGenericData('tbl_department_master');
        $where_conditions = array(
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['city'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_city_master',$where_conditions);
        $data['hospital'] = $this->CommonModel->getSingleTableData('tbl_hospital',$id);
        return $this->loadAdminView('edithospital',$data); 
    }



    public function update_hospital(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/hospital/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        $resizedsecondaryimg = $this->request->getPost('resizedsecondaryimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'city'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $old_secondary_img = $this->request->getPost('oldSecondaryImg');
        $image = '';
        $image2 = '';

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/hospital/'.$profile_uniqueFilename;
        }

        if(isset($resizedsecondaryimg) && !empty($resizedsecondaryimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedsecondaryimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_secondary_img)){
                    $profile_filepath = PUBPATH.'/'.$old_secondary_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image2 = '/docs/hospital/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'name'  => $this->request->getPost('name'),
            'slug'  => $this->createSlug($this->request->getPost('name')),
            'city' => $this->request->getPost('city'),
            'department' => $this->request->getPost('department'),
            'established' => $this->request->getPost('established'),
            'specialty' => $this->request->getPost('specialty'),
            'number_of_bed' => $this->request->getPost('number_of_bed'),
            'about' => $this->request->getPost('about'),
            'team_and_specialities' => $this->request->getPost('team_and_specialities'),
            'infrastructure' => $this->request->getPost('infrastructure'),
            'address' => $this->request->getPost('address'),
            'map' => $this->request->getPost('map'),
            'location' => $this->request->getPost('location'),
        ];
        if($image){$data['primary_image'] = $image;}
        if($image2){$data['secondary_img'] = $image2;}
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_hospital',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

    /**********************Doctor Section************************/
    public function doctor(){
        $data = [];
        return $this->loadAdminView('doctor',$data); 
    }

    public function get_all_doctor(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_doctor($postData);
        return $this->response->setJSON($response);
    }


    public function add_doctor(){
        $data = [];
        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['hospital'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_hospital',$where_conditions);
        $where_conditions = array(
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name'];
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
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['city'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_city_master',$where_conditions);
        return $this->loadAdminView('adddoctor',$data); 
    }


    public function insert_doctor(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/doctor/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'designation' => 'required|trim',
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
            $image = '/docs/doctor/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'name'  => $this->request->getPost('name'),
            'slug'  => $this->createSlug($this->request->getPost('name')),
            'image'        =>$image,
            'designation' => $this->request->getPost('designation'),
            'qualification' => $this->request->getPost('qualification'),
            'experience' => $this->request->getPost('experience'),
            'about' => $this->request->getPost('about'),
            'monday' => $this->request->getPost('monday'),
            'tuesday' => $this->request->getPost('tuesday'),
            'wednesday' => $this->request->getPost('wednesday'),
            'thursday' => $this->request->getPost('thursday'),
            'friday' => $this->request->getPost('friday'),
            'saturday' => $this->request->getPost('saturday'),
            'medical_problems' => $this->request->getPost('medical_problems'),
            'medical_procedures' => $this->request->getPost('medical_procedures'),
            'hospital_id' => $this->request->getPost('hospital_id'),
            'city_id' => $this->request->getPost('city_id'),
            'department_id' => $this->request->getPost('department_id'),
            'treatment_id' => $this->request->getPost('treatment_id'),
            'education_training' => $this->request->getPost('education_training'),
            'honours_awards' => $this->request->getPost('honours_awards'),
            'work_experience' => $this->request->getPost('work_experience'),
            'status'      => 1,
            'created_by'   => session()->get('id'),
            'created_on'   => time() + 12600,
        ];

        ## ✅ Insert into Database
        $result = $this->CommonModel->add_record('tbl_doctor',$data);
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


    public function edit_doctor($id){
        $data = [];
        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['hospital'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_hospital',$where_conditions);
        $where_conditions = array(
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name'];
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
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['city'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_city_master',$where_conditions);
        $data['doctor'] = $this->CommonModel->getSingleTableData('tbl_doctor',$id);
        return $this->loadAdminView('editdoctor',$data); 
    }


    public function update_doctor(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/doctor/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'name'      => 'required|trim',
            'designation'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $image = '';

        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/doctor/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'name'  => $this->request->getPost('name'),
            'slug'  => $this->createSlug($this->request->getPost('name')),
            'designation' => $this->request->getPost('designation'),
            'qualification' => $this->request->getPost('qualification'),
            'experience' => $this->request->getPost('experience'),
            'about' => $this->request->getPost('about'),
            'monday' => $this->request->getPost('monday'),
            'tuesday' => $this->request->getPost('tuesday'),
            'wednesday' => $this->request->getPost('wednesday'),
            'thursday' => $this->request->getPost('thursday'),
            'friday' => $this->request->getPost('friday'),
            'saturday' => $this->request->getPost('saturday'),
            'medical_problems' => $this->request->getPost('medical_problems'),
            'medical_procedures' => $this->request->getPost('medical_procedures'),
            'hospital_id' => $this->request->getPost('hospital_id'),
            'city_id' => $this->request->getPost('city_id'),
            'department_id' => $this->request->getPost('department_id'),
            'treatment_id' => $this->request->getPost('treatment_id'),
            'education_training' => $this->request->getPost('education_training'),
            'honours_awards' => $this->request->getPost('honours_awards'),
            'work_experience' => $this->request->getPost('work_experience'),
        ];
        if($image){$data['primary_image'] = $image;}
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_doctor',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }


    /**********************Enquiry Section************************/
    public function enquiry(){
        $data = [];
        return $this->loadAdminView('enquiry',$data); 
    }

    public function get_all_enquiry(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_enquiry($postData);
        return $this->response->setJSON($response);
    }


    public function delete_me(){
        $id = $this->request->getPost('id');
        $table = $this->request->getPost('table');
        $data['status'] = 0;
        $result = $this->CommonModel->updateRecord('id',$id,$table,$data);
        if($result){
            echo json_encode(array('status'=>true, 'message' => 'Success'));
        }else{
            echo json_encode(array('status'=>false, 'message' => 'Error'));
        }
    }


    /**********************Top Hospital Section************************/

    public function top_hospital(){
        $data = [];
        return $this->loadAdminView('tophospital',$data); 
    }


    public function get_all_top_hospital(){
        $clientModel = new ClientModel();
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_top_hospital($postData);
        return $this->response->setJSON($response);
    }

    public function edit_top_hospital($id){
        $data = [];
        $where_conditions = array(
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['hospitallist'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_hospital',$where_conditions);
        $where_conditions = array(
            'country_id' => 96,
            'status' => 1,
        );
        $columnArray = ['id','name'];
        $data['city'] = $this->CommonModel->row_any_record_where($columnArray,'tbl_city_master',$where_conditions);

        $data['hospital'] = $this->CommonModel->getSingleTableData('top_hospital',$id);
        return $this->loadAdminView('edittophospital',$data); 
    }


    
    public function update_top_hospital(){
        $session = session();
 
        ## ✅ Validation Rules
        $validationRules = [
            'city_id'      => 'required|trim',
            'hospital_id'   => 'required|trim',
        ];

        ## ✅ Validate Input
        if (!$this->validate($validationRules)) {
            return $this->response->setJSON([
                'status'  => false,
                'message' => '*** Please fill the form correctly',
                'errors'  => $this->validator->getErrors()
            ]);
        }

        $id = $this->request->getPost('id');


        ## ✅ Fetch Data from POST Request
        $data = [
            'city_id'  => $this->request->getPost('city_id'),
            'hospital_id'  => $this->createSlug($this->request->getPost('hospital_id')),
        ];
        

        //echo '<pre>';print_r($data);die;

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'top_hospital',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully Updated'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

    /************************************Service Section*********************************/
    public function service(){
        $data = [];
        return $this->loadAdminView('service',$data);
    }
    public function get_all_service(){
        $postData = $this->request->getPost();
        $response = $this->clientModel->get_all_service($postData);
        return $this->response->setJSON($response);
    }
    public function add_service(){
        $data = [];
        return $this->loadAdminView('addservice',$data); 
    }
    public function insert_service(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/service/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title' => 'required|trim',
            'description' => 'required|trim',
        ];

        ## ✅ Validate Input
        if(!$this->validate($validationRules)){
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
            $image = '/docs/service/'.$profile_uniqueFilename;
        }

        ## ✅ Fetch Data from POST Request
        $data = [
            'title'       => $this->request->getPost('title'),
            'slug'        => $this->createSlug($this->request->getPost('title')),
            'image'       => $image,
            'description' => $this->request->getPost('description'),
            'content'     => $this->request->getPost('content'),
            'status'      => 1,
            'created_by'  => session()->get('id'),
            'created_on'  => time() + 12600,
        ];

        ## ✅ Insert into database
        $result = $this->CommonModel->add_record('tbl_service',$data);
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

    public function edit_service($id){
        $data = [];
        $data['service'] = $this->CommonModel->getSingleTableData('tbl_service',$id);
        return $this->loadAdminView('editservice',$data); 
    }

    public function update_service(){
        $session = session();
        $uploadDirectory = PUBPATH. '/docs/service/';
        $resizedprofileimg = $this->request->getPost('resizedprofileimg');
        
        ## ✅ Validation Rules
        $validationRules = [
            'title' => 'required|trim',
            'description' => 'required|trim',
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

        $id = $this->request->getPost('id');
        $old_profile_img = $this->request->getPost('oldProfileImg');
        $image = '';


        if(isset($resizedprofileimg) && !empty($resizedprofileimg)){
            $img = str_replace('data:image/jpeg;base64,', '', $resizedprofileimg);
            $img = str_replace(' ', '+', $img);
            $profile_file_binary = base64_decode($img);
            $profile_uniqueFilename = uniqid() . '.jpeg';
            $profile_filepath = $uploadDirectory .$profile_uniqueFilename;
            if(file_put_contents($profile_filepath, $profile_file_binary)){
                if(!empty($old_profile_img)){
                    $profile_filepath = PUBPATH.'/'.$old_profile_img;
                    if(file_exists($profile_filepath)){ unlink($profile_filepath); }
                }
            }
            $image = '/docs/service/'.$profile_uniqueFilename;
        }


        ## ✅ Fetch Data from POST Request
        $data = [
            'title'       => $this->request->getPost('title'),
            'slug'        => $this->createSlug($this->request->getPost('title')),
            'image'       => $image,
            'description' => $this->request->getPost('description'),
            'content'     => $this->request->getPost('content'),         
        ];

        if($image){$data['image'] = $image;}

        ## ✅ Insert into Database
        $result = $this->CommonModel->updateRecord('id',$id,'tbl_service',$data);
        if($result){
            return $this->response->setJSON([
                'status'  => true,
                'message' => 'Successfully updated'
            ]);
        }else{
            return $this->response->setJSON([
                'status'  => false,
                'message' => 'Something error, Try after sometime!'
            ]);
        }
    }

}