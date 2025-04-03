<?php

namespace App\Models\Adminpanel;

use CodeIgniter\Model;

class ClientModel extends Model{
    
    protected $table = 'tbl_client';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'short_name', 'address', 'status', 'created_by', 'created_on'];

    public function insertClient($data){
        return $this->insert($data);
    }

    public function getTotalUser(){
        $db = \Config\Database::connect();
        $role_id = session()->get('role_id');
        if($role_id == 1){
            $query = $db->table('tbl_user')
            ->select('COUNT(id) AS total_user')
            ->get();
        }
        if($role_id == 2){
            $client_id = session()->get('client_id');

            $query = $db->table('tbl_user')
                ->select('COUNT(id) AS total_user')
                ->where('client_id',$client_id)
                ->get();
        }

        $result = $query->getRowArray();

        return $result ? $result['total_user'] : 0;
    }


    public function getTotalQuestion(){
        $db = \Config\Database::connect();


        $query = $db->table('tbl_question')
            ->select('COUNT(id) AS total_question')
            ->get();

        $result = $query->getRowArray();

        return $result ? $result['total_question'] : 0;
    }


    public function get_category() {
        $db = db_connect();
        return $db->table('tbl_category')
                  ->where('status', 1)
                  ->get()
                  ->getResult();
    }
    
    

    public function getCompletedCounts($completedThreshold = 93){
        $db = \Config\Database::connect();
        $role_id = session()->get('role_id');

        if($role_id == 1){

            $query = $db->query("
                SELECT 
                    SUM(IF(response_count = ?, 1, 0)) AS completed_count,
                    SUM(IF(response_count < ?, 1, 0)) AS in_completed_count
                FROM (
                    SELECT 
                        tu.id, 
                        COUNT(tr.id) AS response_count
                    FROM tbl_user AS tu
                    LEFT JOIN tbl_exam AS te ON te.user_id = tu.id
                    LEFT JOIN tbl_response AS tr ON tr.paper_id = te.id
                    GROUP BY tu.id
                ) AS user_responses
            ", [$completedThreshold, $completedThreshold]);
        }

        if($role_id == 2){
            $client_id = session()->get('client_id');

            // $query = $db->query("
            //     SELECT 
            //         SUM(IF(response_count = ?, 1, 0)) AS completed_count,
            //         SUM(IF(response_count < ?, 1, 0)) AS in_completed_count
            //     FROM (
            //         SELECT 
            //             tu.id, 
            //             COUNT(tr.id) AS response_count
            //         FROM tbl_user AS tu
            //         LEFT JOIN tbl_exam AS te ON te.user_id = tu.id
            //         LEFT JOIN tbl_response AS tr ON tr.paper_id = te.id
            //         WHERE tu.client_id = $client_id
            //         GROUP BY tu.id
            //     ) AS user_responses
            // ", [$completedThreshold, $completedThreshold]);

            $query = $db->query("
                SELECT 
                    SUM(CASE WHEN te.exam_status = 'completed' THEN 1 ELSE 0 END) AS completed_count,
                    SUM(CASE WHEN te.exam_status = 'inprogress' THEN 1 ELSE 0 END) AS in_completed_count
                FROM tbl_exam as te
                LEFT JOIN tbl_user AS tu ON tu.id = te.user_id
                WHERE tu.client_id = $client_id
            ");

        }
        return $query->getRowArray();
    }


    ## Get all client list 
    public function get_all_client($postData = null){
        $db = db_connect();

        ## Read values from DataTable request
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; 
        $columnIndex = $postData['order'][0]['column']; 
        $columnName = $postData['columns'][$columnIndex]['data']; 
        $columnSortOrder = $postData['order'][0]['dir']; 
        $searchValue = $postData['search']['value']; 

        ## Custom filter
        $status = isset($postData['status']) && $postData['status'] != '' ? "tp.status = ".$db->escape($postData['status']) : "tp.status = 1";

        ## Search Query
        $searchQuery = "";
        if (!empty($searchValue)) {
            $searchQuery = " AND (tp.name LIKE '%".$db->escapeLikeString($searchValue)."%' OR 
                                 tp.short_name LIKE '%".$db->escapeLikeString($searchValue)."%' OR 
                                 tp.address LIKE '%".$db->escapeLikeString($searchValue)."%')";
        }

        ## Total records without filtering
        $totalRecordsQuery = $db->query("SELECT COUNT(tp.id) as totalrecord FROM tbl_client tp WHERE $status");
        $totalRecords = $totalRecordsQuery->getRow()->totalrecord;

        ## Total records with filtering
        $filteredRecordsQuery = $db->query("SELECT COUNT(tp.id) as totalrecord FROM tbl_client tp WHERE $status $searchQuery");
        $totalRecordwithFilter = $filteredRecordsQuery->getRow()->totalrecord;

        ## Fetch records with pagination & sorting
        $query = $db->query(
            "SELECT tp.id as partner_id, tp.name as partner_name, tp.short_name, tp.created_on
            FROM tbl_client tp 
            WHERE $status $searchQuery 
            ORDER BY $columnName $columnSortOrder 
            LIMIT $start, $rowperpage");

        $records = $query->getResult();

        ## Formatting response data
        $data = [];
        $slno = $start + 1;
        foreach ($records as $record) {
            $data[] = [
                "id" => $slno,
                "partner_name" => '<a class="alink" href="'.base_url('partnerprofile/'.$record->partner_id).'">'.$record->partner_name.'</a>',
                "short_name"=> $record->short_name,
                "created_at" => date('d M, Y - H:i:s A', strtotime($record->created_on))
            ];
            $slno++;
        }

        ## JSON Response
        return [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        ];
    }


    ## Get all exmainee list 
    public function get_all_exminee($postData = null){
        $db = db_connect();

        ## Read values from DataTable request
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; 
        $columnIndex = $postData['order'][0]['column']; 
        $columnName = $postData['columns'][$columnIndex]['data']; 
        $columnSortOrder = $postData['order'][0]['dir']; 
        $searchValue = $postData['search']['value']; 

        ## Custom filter
        $status = isset($postData['status']) && $postData['status'] != '' ? "u.status = ".$db->escape($postData['status']) : "u.status = 1";

        if(isset($postData['exstatus']) && $postData['exstatus'] != ''){
            $ex_status = $postData['exstatus'];
            if($ex_status == 'pending'){
                $exstatus = " AND te.exam_status='inprogress'";
            }
            if($ex_status == 'completed'){
                $exstatus = " AND te.exam_status ='completed'";
            }
            
        }else{
            $exstatus = '';
        }

        $role_id = session()->get('role_id');
        if($role_id == 2){
            $client_id = session()->get('client_id');
            $status2 = " AND u.client_id = $client_id";
        }

        ## Search Query
        $searchQuery = "";
        if (!empty($searchValue)) {
            $searchQuery = " AND (u.name LIKE '%".$db->escapeLikeString($searchValue)."%' OR u.short_name LIKE '%".$db->escapeLikeString($searchValue)."%' OR 
            u.address LIKE '%".$db->escapeLikeString($searchValue)."%')";
        }

        // print_r("SELECT COUNT(u.id) as totalrecord FROM tbl_user u LEFT JOIN tbl_exam te ON te.user_id = u.id WHERE $status $exstatus");
        // exit;
        ## Total records without filtering
        $totalRecordsQuery = $db->query("SELECT COUNT(u.id) as totalrecord FROM tbl_user u LEFT JOIN tbl_exam te ON te.user_id = u.id WHERE $status $exstatus");
        $totalRecords = $totalRecordsQuery->getRow()->totalrecord;

        ## Total records with filtering
        $filteredRecordsQuery = $db->query("SELECT COUNT(u.id) as totalrecord FROM tbl_user u LEFT JOIN tbl_exam te ON te.user_id = u.id WHERE $status $exstatus $searchQuery");
        $totalRecordwithFilter = $filteredRecordsQuery->getRow()->totalrecord;

        ## Fetch records with pagination & sorting
        $query = $db->query("SELECT u.id, u.name, u.email, u.phone, u.age, u.since, u.director_type, u.is_chairperson, u.chairperson_of, u.member_of, u.date, tc.name as client_name, te.exam_status
        FROM tbl_user u 
        LEFT JOIN tbl_client tc ON tc.id = u.client_id
        LEFT JOIN tbl_exam te ON te.user_id = u.id
        WHERE $status $status2 $exstatus $searchQuery 
        ORDER BY $columnName $columnSortOrder 
        LIMIT $start, $rowperpage");

        $records = $query->getResult();

        $survey_status = '';
        $report_status = '';

        ## Formatting response data
        $data = [];
        $slno = $start + 1;
        foreach ($records as $record) {
            if(!empty($record->exam_status)){
                $survey_status = $record->exam_status;
            }else{
                $survey_status = 'Not Started';
            }
            if($record->exam_status == 'completed'){
                $report_status = '<a class="alink" href="'.base_url('admin/report?u='.$record->id).'">Report</a>';
                
            }else{
                $report_status = '';
            }

            $data[] = [
                "id" => $slno,
                "name" => $record->name,
                "email"=> $record->email,
                "phone"=> $record->phone,
                "age" => $record->age,
                "since" => $record->since,
                "director_type" => $record->director_type,
                "is_chairperson" => $record->is_chairperson,
                "chairperson_of" => $record->chairperson_of,
                "member_of" => $record->member_of,
                "client_name" => $record->client_name,
                "exam_status" => $survey_status,
                "report" => $report_status,
                "date" => date('d M, Y - H:i:s A', $record->date)
            ];
            $slno++;
        }

        ## JSON Response
        return [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        ];
    }


    ## Get all category
    public function get_all_category($postData = null){
        $db = db_connect();

        ## Read values from DataTable request
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; 
        $columnIndex = $postData['order'][0]['column']; 
        $columnName = $postData['columns'][$columnIndex]['data']; 
        $columnSortOrder = $postData['order'][0]['dir']; 
        $searchValue = $postData['search']['value']; 

        ## Custom filter
        $status = isset($postData['status']) && $postData['status'] != '' ? "tc.status = ".$db->escape($postData['status']) : "tc.status = 1";

        ## Search Query
        $searchQuery = "";
        if (!empty($searchValue)) {
            $searchQuery = " AND (tc.name LIKE '%".$db->escapeLikeString($searchValue)."%' OR tc.short_name LIKE '%".$db->escapeLikeString($searchValue)."%' OR 
            tc.address LIKE '%".$db->escapeLikeString($searchValue)."%')";
        }

        ## Total records without filtering
        $totalRecordsQuery = $db->query("SELECT COUNT(tc.id) as totalrecord FROM tbl_category tc WHERE $status");
        $totalRecords = $totalRecordsQuery->getRow()->totalrecord;

        ## Total records with filtering
        $filteredRecordsQuery = $db->query("SELECT COUNT(tc.id) as totalrecord FROM tbl_category tc WHERE $status $searchQuery");
        $totalRecordwithFilter = $filteredRecordsQuery->getRow()->totalrecord;

        ## Fetch records with pagination & sorting
        $query = $db->query("SELECT tc.id, tc.name, tc.description, tc.parent_category_id, tc.created_on
        FROM tbl_category tc 
        WHERE $status $searchQuery 
        ORDER BY $columnName $columnSortOrder 
        LIMIT $start, $rowperpage");

        $records = $query->getResult();

        ## Formatting response data
        $data = [];
        $slno = $start + 1;
        foreach ($records as $record) {
            $data[] = [
                "id" => $slno,
                "name" => '<a class="alink" href="'.base_url('partnerprofile/'.$record->name).'">'.$record->name.'</a>',
                "description"=> $record->description,
                "parent_category_id"=> $record->parent_category_id,
                "created_at" => date('d M, Y - H:i:s A', strtotime($record->created_on))
            ];
            $slno++;
        }

        ## JSON Response
        return [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        ];
    }

    ## Get all question
    public function get_all_question($postData = null){
        $db = db_connect();

        ## Read values from DataTable request
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; 
        $columnIndex = $postData['order'][0]['column']; 
        $columnName = $postData['columns'][$columnIndex]['data']; 
        $columnSortOrder = $postData['order'][0]['dir']; 
        $searchValue = $postData['search']['value']; 

        ## Custom filter
        $status = isset($postData['status']) && $postData['status'] != '' ? "tq.status = ".$db->escape($postData['status']) : "tq.status = 1";

        ## Search Query
        $searchQuery = "";
        if (!empty($searchValue)) {
            $searchQuery = " AND (tq.name LIKE '%".$db->escapeLikeString($searchValue)."%' OR tq.short_name LIKE '%".$db->escapeLikeString($searchValue)."%' OR 
            tq.address LIKE '%".$db->escapeLikeString($searchValue)."%')";
        }

        ## Total records without filtering
        $totalRecordsQuery = $db->query("SELECT COUNT(tq.id) as totalrecord FROM tbl_question tq WHERE $status");
        $totalRecords = $totalRecordsQuery->getRow()->totalrecord;

        ## Total records with filtering
        $filteredRecordsQuery = $db->query("SELECT COUNT(tq.id) as totalrecord FROM tbl_question tq WHERE $status $searchQuery");
        $totalRecordwithFilter = $filteredRecordsQuery->getRow()->totalrecord;

        ## Fetch records with pagination & sorting
        $query = $db->query("SELECT tq.id, tq.question, tq.type, tq.created_on, tc.name, GROUP_CONCAT(tos.option SEPARATOR ', ') AS option
        FROM tbl_question tq 
        LEFT JOIN tbl_category tc ON tc.id = tq.category_id
        LEFT JOIN tbl_options tos ON tos.question_id = tq.id
        WHERE $status $searchQuery 
        GROUP BY tq.id, tq.question, tq.type, tq.created_on, tc.name
        ORDER BY $columnName $columnSortOrder 
        LIMIT $start, $rowperpage");

        $records = $query->getResult();

        ## Formatting response data
        $data = [];
        $slno = $start + 1;
        foreach ($records as $record) {
            $data[] = [
                "id" => $slno,
                "question" => $record->question,
                "type"=> $record->type,
                "option" => $record->option,
                "name"=> $record->name,
                "created_at" => date('d M, Y - H:i:s A', strtotime($record->created_on))
            ];
            $slno++;
        }

        ## JSON Response
        return [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        ];
    }


    ## Get all admin user
    public function get_all_admin_user($postData = null){
        $db = db_connect();

        ## Read values from DataTable request
        $draw = $postData['draw'];
        $start = $postData['start'];
        $rowperpage = $postData['length']; 
        $columnIndex = $postData['order'][0]['column']; 
        $columnName = $postData['columns'][$columnIndex]['data']; 
        $columnSortOrder = $postData['order'][0]['dir']; 
        $searchValue = $postData['search']['value']; 

        ## Custom filter
        $status = isset($postData['status']) && $postData['status'] != '' ? "ta.status = ".$db->escape($postData['status']) : "ta.status = 1";

        ## Search Query
        $searchQuery = "";
        if (!empty($searchValue)) {
            $searchQuery = " AND (ta.name LIKE '%".$db->escapeLikeString($searchValue)."%' OR ta.email LIKE '%".$db->escapeLikeString($searchValue)."%' OR 
            ta.phone LIKE '%".$db->escapeLikeString($searchValue)."%')";
        }

        ## Total records without filtering
        $totalRecordsQuery = $db->query("SELECT COUNT(ta.id) as totalrecord FROM tbl_admin ta WHERE $status");
        $totalRecords = $totalRecordsQuery->getRow()->totalrecord;

        ## Total records with filtering
        $filteredRecordsQuery = $db->query("SELECT COUNT(ta.id) as totalrecord FROM tbl_admin ta WHERE $status $searchQuery");
        $totalRecordwithFilter = $filteredRecordsQuery->getRow()->totalrecord;

        ## Fetch records with pagination & sorting
        $query = $db->query("SELECT ta.id, ta.name, ta.username, ta.email, ta.phone, ta.role_id, ta.image, ta.created_by, ta.created_on
        FROM tbl_admin ta 
        WHERE $status $searchQuery 
        ORDER BY $columnName $columnSortOrder 
        LIMIT $start, $rowperpage");

        $records = $query->getResult();

        ## Formatting response data
        $data = [];
        $slno = $start + 1;
        foreach ($records as $record) {
            $data[] = [
                "id" => $slno,
                "name" => $record->name,
                "username"=> $record->username,
                "email"=> $record->email,
                "phone"=> $record->phone,
                "role_id"=> $record->role_id,
                "image"=> $record->image,
                "created_at" => date('d M, Y - H:i:s A', strtotime($record->created_on))
            ];
            $slno++;
        }

        ## JSON Response
        return [
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data
        ];
    }

    ## Get user report
    public function get_user_report($userId){
        $db = \Config\Database::connect();
        $query2 = $this->db->query("WITH RankedOptions AS (
            SELECT 
                o.id, 
                o.question_id, 
                o.option, 
                o.score, 
                ROW_NUMBER() OVER (PARTITION BY o.question_id ORDER BY o.id) - 1 AS option_index 
            FROM tbl_options o
        ), 
        QuestionMaxScore AS (
            -- Get the max score for each question
            SELECT 
                question_id, 
                MAX(score) AS max_score
            FROM RankedOptions
            GROUP BY question_id
        ), 
        CategoryMaxScore AS (
            -- Sum the max score of each question in a category
            SELECT 
                r.category_id, 
                c.name AS category_name, 
                SUM(qms.max_score) AS max_possible_score
            FROM tbl_response r
            JOIN QuestionMaxScore qms ON r.question_id = qms.question_id
            JOIN tbl_category c ON r.category_id = c.id  
            JOIN tbl_exam te ON r.paper_id = te.id  
            WHERE te.user_id = $userId  -- Filtering for user_id 7
            GROUP BY r.category_id, c.name
        )
        SELECT 
            r.id AS response_id, 
            r.paper_id, 
            r.question_id, 
            r.answer AS stored_index, 
            ro.option AS selected_option, 
            SUM(ro.score) AS total_score, 
            r.category_id, 
            cms.category_name,
            cms.max_possible_score,
            tu.name AS username,
            tu.email AS email,
            DATE_FORMAT(FROM_UNIXTIME(te.created_on), '%d %b, %Y %H:%i:%s') AS formatted_date
        FROM tbl_response r
        JOIN RankedOptions ro ON r.question_id = ro.question_id AND r.answer = ro.option_index
        JOIN CategoryMaxScore cms ON r.category_id = cms.category_id
        JOIN tbl_exam te ON r.paper_id = te.id
        JOIN tbl_user tu ON tu.id = te.user_id
        WHERE te.user_id = $userId
        GROUP BY r.category_id");
        return $result2 = $query2->getResultArray();
    }


    ## Get user feedback
    public function get_user_feedback($userId){
        $db = \Config\Database::connect();
        $query2 = $this->db->query("SELECT r.*, tq.question
        FROM tbl_response r
        JOIN tbl_exam te ON r.paper_id = te.id
        JOIN tbl_question tq ON tq.id = r.question_id
        WHERE te.user_id = $userId  and r.category_id = 8");
        return $result2 = $query2->getResultArray();
    }





    
    public function get_cumulative_report(){
        $db = \Config\Database::connect();
        $query2 = $this->db->query("WITH RankedOptions AS (
            SELECT 
                o.id, 
                o.question_id, 
                o.option, 
                o.score, 
                ROW_NUMBER() OVER (PARTITION BY o.question_id ORDER BY o.id) - 1 AS option_index 
            FROM tbl_options o
        ), 
        QuestionMaxScore AS (
            -- Get the max score for each question
            SELECT 
                question_id, 
                MAX(score) AS max_score
            FROM RankedOptions
            GROUP BY question_id
        ), 
        CategoryMaxScore AS (
            -- Sum the max score of each question in a category
            SELECT 
                r.category_id, 
                c.name AS category_name, 
                SUM(qms.max_score) AS max_possible_score
            FROM tbl_response r
            JOIN QuestionMaxScore qms ON r.question_id = qms.question_id
            JOIN tbl_category c ON r.category_id = c.id  
            JOIN tbl_exam te ON r.paper_id = te.id  
            GROUP BY r.category_id, c.name
        )
        SELECT 
            r.id AS response_id, 
            r.paper_id, 
            r.question_id, 
            r.answer AS stored_index, 
            ro.option AS selected_option, 
            SUM(ro.score) AS total_score, 
            r.category_id, 
            cms.category_name,
            cms.max_possible_score,
            tu.name AS username,
            tu.email AS email,
            DATE_FORMAT(FROM_UNIXTIME(te.created_on), '%d %b, %Y %H:%i:%s') AS formatted_date
        FROM tbl_response r
        JOIN RankedOptions ro ON r.question_id = ro.question_id AND r.answer = ro.option_index
        JOIN CategoryMaxScore cms ON r.category_id = cms.category_id
        JOIN tbl_exam te ON r.paper_id = te.id
        JOIN tbl_user tu ON tu.id = te.user_id
        GROUP BY r.category_id");
        return $result2 = $query2->getResultArray();
    }

}
