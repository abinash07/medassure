<?php

namespace App\Models\Adminpanel;

use CodeIgniter\Model;

class UserModel extends Model{

    protected $table = 'tbl_user';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'userlink',
        'password',
        'image',
        'date',
        'token',
        'client_id',
        'status',
        'age',
        'since',
        'director_type',
        'is_chairperson',
        'chairperson_of',
        'member_of',
        'section'
    ];

    // Insert user into the database
    public function insertUser($data)
    {

        $existingUser = $this->where('email', $data['email'])->first();
    
        if ($existingUser) {
            return false;
        }

        // Insert if email is not found
        $this->insert($data);
        return true;

        //return $this->insert($data);
    }

    // Get user by email
    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first(); // Returns an object
    }

    // Get user by ID
    public function getUserById($id)
    {
        return $this->find($id); // Fetches user by ID
    }

    // Update user data
    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }

    // Delete user
    public function deleteUser($id)
    {
        return $this->delete($id);
    }
}
