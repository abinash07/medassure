<?php
namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model{

    public function getCategoryData(){
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM tbl_category_master WHERE status=1 and section='video' ORDER BY name ASC");
        return $result = $query->getResult();
    }

    public function getVideoData($slug){
        $db = \Config\Database::connect();
        if($slug == ''){
            $query = $db->query("SELECT * 
            FROM tbl_youtube_videos as tyv
            WHERE tyv.status=1");
        }else{
            $query = $db->query("SELECT * 
            FROM tbl_youtube_videos as tyv
            INNER JOIN tbl_category_master as tcm ON tcm.slug = '$slug'
            WHERE tyv.status=1");
        }
        return $result = $query->getResult();
    }


    public function getTestimonialsData($offset,$limit){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT tpt.title, tpt.slug, tpt.image, tpt.created_on
        FROM tbl_patient_testimonial as tpt
        WHERE tpt.status=1 ORDER BY tpt.id DESC LIMIT $offset, $limit");
        
        return $result = $query->getResult();
    }

    public function getTestimonialData($slug){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT tpt.*, ta.name as author_name, ta.image as author_image, ta.bio as author_description
        FROM tbl_patient_testimonial as tpt
        INNER JOIN tbl_author as ta ON ta.id = tpt.author_id
        WHERE tpt.slug='$slug'");
        
        return $result = $query->getResult();
    }


    public function getBlogsData($offset,$limit){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT tb.title, tb.slug, tb.image, tb.created_on, tcm.name as category_name
        FROM tbl_blog as tb
        INNER JOIN tbl_category_master as tcm ON tcm.id = tb.cat_id
        WHERE tb.status=1 ORDER BY tb.id DESC LIMIT $offset, $limit");
        
        return $result = $query->getResult();
    }


    public function getBlogData($slug){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT tb.*, ta.name as author_name, ta.image as author_image, ta.bio as author_description
        FROM tbl_blog as tb
        INNER JOIN tbl_author as ta ON ta.id = tb.author_id
        INNER JOIN tbl_category_master as tcm ON tcm.id = tb.cat_id
        WHERE tb.slug='$slug'");
        
        return $result = $query->getResult();
    }

    public function getHospitalData($slug){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT th.*, tc.name as city, tdm.name as department_name
        FROM tbl_hospital as th
        INNER JOIN tbl_city_master as tc ON tc.id = th.city
        INNER JOIN tbl_department_master as tdm ON tdm.id = th.department
        WHERE th.slug='$slug'");
        
        return $result = $query->getRow();
    }


    public function get_hospital_data($offset,$limit,$country,$city,$department){

        $searchQuery = "";
        $search_arr = array();

        if($city !='' && $city != 0){
            $search_arr[] = "(th.city = '$city')";
        }
        if($department !='' && $department != 0){
            $search_arr[] = "(th.department = '$department')";
        }

        if(count($search_arr) > 0){
            $searchQuery = ' and '.implode(" and ",$search_arr);
        }

        $query = $this->db->query("SELECT th.name, th.slug, th.primary_image, tc.name as city, th.established, th.specialty, th.number_of_bed, LEFT(th.about, 1000) as about
        FROM tbl_hospital as th 
        INNER JOIN tbl_city_master as tc ON tc.id = th.city
        WHERE th.status = 1 $searchQuery ORDER BY 1 DESC LIMIT $offset, $limit"
        );
        return $query->getResult();
    }

    public function get_hospital_data_count(){
        $query = $this->db->query("SELECT COUNT(*) as total FROM tbl_hospital WHERE status = 1");
        return $query->getRow();
    }


    public function get_doctor_data($offset,$limit,$country,$city,$department,$treatment,$hospital){

        $searchQuery = "";
        $search_arr = array();

        if($city !='' && $city != 0){
            $search_arr[] = "(th.city = '$city')";
        }
        if($department !='' && $department != 0){
            $search_arr[] = "(th.department = '$department')";
        }
        if($treatment !='' && $treatment != 0){
            $search_arr[] = "(th.treatment = '$treatment')";
        }
        if($hospital !='' && $hospital != 0){
            $search_arr[] = "(th.hospital = '$hospital')";
        }

        if(count($search_arr) > 0){
            $searchQuery = ' and '.implode(" and ",$search_arr);
        }

        $query = $this->db->query("SELECT td.name, td.slug, td.image, td.designation, td.experience, LEFT(td.about, 1000) as about, th.name as hospital_name, th.slug as hospital_slug, tc.name as city_name, tdm.name as department_name, ttm.name as treatment_name
        FROM tbl_doctor as td 
        INNER JOIN tbl_hospital as th ON th.id = td.hospital_id
        INNER JOIN tbl_city_master as tc ON tc.id = td.city_id
        INNER JOIN tbl_department_master as tdm ON tdm.id = td.department_id
        INNER JOIN tbl_treatment as ttm ON ttm.id = td.treatment_id
        WHERE td.status = 1 $searchQuery ORDER BY 1 DESC LIMIT $offset, $limit"
        );
        return $query->getResult();
    }


    public function get_doctor_data_count(){
        $query = $this->db->query("SELECT COUNT(*) as total FROM tbl_doctor WHERE status = 1");
        return $query->getRow();
    }


    public function getDoctorlData($slug){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT td.*, tc.name as city, tdm.name as department_name, th.name as hospital_name, th.primary_image, th.slug as hospital_slug
        FROM tbl_doctor as td
        INNER JOIN tbl_city_master as tc ON tc.id = td.city_id
        INNER JOIN tbl_department_master as tdm ON tdm.id = td.department_id
        INNER JOIN tbl_hospital as th ON th.id = td.hospital_id
        WHERE td.slug='$slug'");
        
        return $result = $query->getRow();
    }


    public function getCostData($slug){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT tc.*
        FROM tbl_cost as tc
        WHERE tc.slug='$slug'");
        
        return $result = $query->getRow();
    }

    public function getTopHospitalData($city_id){
        $db = \Config\Database::connect();

        $query = $db->query("SELECT th.*, tc.name as city, tho.name as hospital_name, tho.primary_image, tho.slug as hospital_slug
        FROM top_hospital as th
        INNER JOIN tbl_city_master as tc ON tc.id = th.city_id
        INNER JOIN tbl_hospital as tho ON tho.id = th.hospital_id
        WHERE th.city_id=$city_id");
        
        return $result = $query->getResult();
    }

    // public function getHospitalMenuData(){
    //     $db = \Config\Database::connect();

    //     $query = $db->query("SELECT tcm.name as country_name, tccm.name as city_name, th.name as hospital_name
    //     FROM tbl_country_master as tcm
    //     LEFT JOIN tbl_city_master as tccm ON (tccm.country_id = tcm.id and tccm.menu = 1)
    //     LEFT JOIN tbl_hospital as th ON th.city = tccm.id
    //     WHERE tcm.status = 1 and tcm.menu = 1");
        
    //     return $result = $query->getResult();
    // }


    public function getHospitalMenuData() {
        $db = \Config\Database::connect();
    
        $query = $db->query("SELECT 
            tcm.name as country_name, 
            tccm.name as city_name, 
            tccm.slug as city_slug,
            th.name as hospital_name,
            th.slug as hospital_slug
            FROM tbl_country_master as tcm
            INNER JOIN tbl_city_master as tccm ON (tccm.country_id = tcm.id AND tccm.menu = 1)
            INNER JOIN tbl_hospital as th ON th.city = tccm.id
            WHERE tcm.status = 1 AND tcm.menu = 1
            ORDER BY tcm.sequence, tccm.name, th.name
        ");
    
        $result = $query->getResultArray(); // get as array
    
        $finalData = [];
    
        foreach ($result as $row) {
            $country = $row['country_name'];
            $city = $row['city_name'];
            $city_slug = $row['city_slug'];
            $hospital = $row['hospital_name'];
            $hospital_slug = $row['hospital_slug'];
    
            if (!isset($finalData[$country])) {
                $finalData[$country] = [];
            }
    
            if (!isset($finalData[$country][$city])) {
                $finalData[$country][$city] = [
                    'slug' => $city_slug,
                    'hospitals' => []
                ];
            }
    
            if (!empty($hospital)) {
                $finalData[$country][$city]['hospitals'][] = [
                    'name' => $hospital,
                    'slug' => $hospital_slug
                ];
            }
        }
    
        return $finalData;
    }
    

    public function getCostMenuData() {
        $db = \Config\Database::connect();
    
        $query = $db->query("SELECT 
            tcm.name as country_name, 
            tdm.short_name as department_name, 
            tdm.slug as department_slug,
            tc.title as cost_name,
            tc.slug as cost_slug
            FROM tbl_country_master as tcm
            INNER JOIN tbl_department_master as tdm ON (tdm.country_id = tcm.id AND tdm.menu = 1)
            INNER JOIN tbl_cost as tc ON tc.department_id = tdm.id
            WHERE tcm.status = 1 AND tcm.menu = 1
            ORDER BY tcm.sequence, tdm.sequence, tc.title
        ");
    
        $result = $query->getResultArray();


        $finalData = [];
    
        foreach ($result as $row) {
            $country = $row['country_name'];
            $department = $row['department_name'];
            $department_slug = $row['department_slug'];
            $cost = $row['cost_name'];
            $cost_slug = $row['cost_slug'];
    
            if (!isset($finalData[$country])) {
                $finalData[$country] = [];
            }
    
            if (!isset($finalData[$country][$department])) {
                $finalData[$country][$department] = [
                    'slug' => $department_slug,
                    'cost' => []
                ];
            }
    
            if (!empty($cost)) {
                $finalData[$country][$department]['cost'][] = [
                    'name' => $cost,
                    'slug' => $cost_slug
                ];
            }
        }
    
        return $finalData;
    }
    

    public function getDoctorMenuData() {
        $db = \Config\Database::connect();
    
        $query = $db->query("SELECT 
            tcm.name as country_name, 
            tdm.short_name as department_name, 
            tdm.slug as department_slug
            FROM tbl_country_master as tcm
            INNER JOIN tbl_department_master as tdm ON (tdm.country_id = tcm.id AND tdm.menu = 1)
            WHERE tcm.status = 1 AND tcm.menu = 1
            ORDER BY tcm.sequence, tdm.sequence
        ");
    
        $result = $query->getResultArray();


        $finalData = [];
    
        foreach ($result as $row) {
            $country = $row['country_name'];
            $department = $row['department_name'];
            $department_slug = $row['department_slug'];

    
            if (!isset($finalData[$country])) {
                $finalData[$country] = [];
            }
    
            if (!isset($finalData[$country][$department])) {
                $finalData[$country][$department] = [
                    'slug' => $department_slug,
                ];
            }
        }
    
        return $finalData;
    }
}