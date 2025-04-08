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
}