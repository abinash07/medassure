<?php

namespace App\Models\Adminpanel;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'tbl_admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','username','email','role','pass','password','status','created_by','created_on'];

    public function insertAdmin($data){
        return $this->insert($data);
    }


    public function checkEmail($username){
        $query = $this->where('username', $username)->countAllResults();

        // $db = \Config\Database::connect();
        // echo $db->getLastQuery();
        
        return $query;
    }

    public function getUserData($username){
        return $this->select('ta.id, ta.name, ta.username, ta.role, ta.password')
            ->from('tbl_admin ta')
            ->where('ta.username', $username)
            ->first();
    }
}
