<?php

class User_model extends CI_Model
{
    public function getUser()
    {
        $query = "SELECT * FROM users";
        $users = $this->db->query($query);
        return $users;
    }
 

    public function getUserByID($userId)
    {
        $query = "SELECT * FROM users WHERE user_id = '$userId'";
        return $this->db->query($query);
    }



    public function insertUser($data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $age = $data['age'];
        $query = "INSERT INTO users (fullname, email, age) VALUES ('$fullname', '$email', '$age')";
        return $this->db->query($query);
    }
 
    public function update($userId, $data)
    {
        $fullname = $data['fullname'];
        $email = $data['email'];
        $age = $data['age'];
        $query = "UPDATE users SET fullname = '$fullname', email = '$email', age = '$age' WHERE user_id = '$userId'";
        return $this->db->query($query);
    }
    public function delete($userId)
    {
        $query = "DELETE FROM users WHERE user_id = '$userId'";
        return $this->db->query($query);
    }
}




