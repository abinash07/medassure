<?php
namespace App\Models;
use CodeIgniter\Model;

class CommonModel extends Model{

    public function getMasterData(){
        $db = \Config\Database::connect();
        
        $query = $db->query("SELECT * FROM tbl_country_master WHERE status = 1");
        return $result = $query->getResult();
    }

    public function getFaqData($page){
        $db = \Config\Database::connect();
        
        $query = $db->query("SELECT * FROM tbl_faq WHERE status = 1 and page='$page'");
        return $result = $query->getResult();
    }


    public function getGenericData($table){
        $db = \Config\Database::connect();
        
        $query = $db->query("SELECT * FROM $table WHERE status = 1");
        return $result = $query->getResult();
    }

    public function add_record($table,$data){
        $db = \Config\Database::connect();
        $query = $db->table($table)->insert($data);
        if($query){
            return true;
        }else{
            return false;
        }
    }


    public function insert_record($table,$data){
        $db = \Config\Database::connect();

        $query = $this->db->insert($table, $data);
        if($query){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }


}