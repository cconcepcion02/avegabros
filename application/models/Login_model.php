<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {



    // authenticate check user
    public function auth($username,$password){
        $sql = sprintf("
        SELECT *
        FROM users_tbl
        WHERE username = '%s' AND password = '%s'
        ",$username,$password);
        return $this->db->query($sql)->row(); 

    }

    // display user details
    public function get_account($emp_id){
        $sql = sprintf("
        select *
        from users_tbl a
        left join employees_tbl b on b.id = a.employee_id
        where employee_id = %d",$emp_id);

        return $this->db->query($sql)->row(); 
    }

    public function getEmployeeById($id){
        $sql = sprintf("
        select *
        from employees_tbl 
        where employee_id = %d",$id);

        return $this->db->query($sql)->row(); 
    }



}