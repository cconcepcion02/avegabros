<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model {



//inserting data
    public function insert($tbl,$data)		
    {
        return $query = $this->db->insert($tbl, $data);
    }


//get data by id
public function getBooking(){
    $sql = sprintf("
    select a.id,requesting_employee,book_date_time,destination_from,destination_to,vehicle_count,estimated_kilometers_and_hours,purpose_of_travel,status,fullname
    from booking_tbl a
    inner join employees_tbl b on b.id = a.requesting_employee   
    ");
    return $this->db->query($sql)->result(); 
}
public function getById($tbl,$id){
    $sql = sprintf("
    select *
    from %s 
    where id = %d",$tbl,$id);

    return $this->db->query($sql)->row(); 
}

public function getuserDetails($id){
    $sql = sprintf("
    select main.id,username,password,employee_id,role,fullname
    from (select * from users_tbl  where id = %d) as main
    left join employees_tbl a on a.id = main.employee_id",$id);

    return $this->db->query($sql)->row(); 
}
// update
public function update($tbl,$id,$data){
    $this->db->where('id', $id);
    $this->db->update($tbl, $data);
}
public function updateUser($tbl,$id,$data){
    $this->db->where('id', $id);
    $this->db->update($tbl, $data);
}
//delete
public function delete($tbl,$id){
    $this->db->where('id', $id);
    $this->db->delete($tbl);
}

public function get_all_employee(){
    $sql = sprintf("
    select *
    from employees_tbl
    ");
    return $this->db->query($sql)->result(); 
}

public function get_all_Approved(){
    $sql=sprintf("
        select *
        from booking_tbl
        where status='Approved'
    ");
    return $this->db->query($sql)->result(); 
}

public function get_all_users(){
    $sql = sprintf("
    select *
    from users_tbl
    ");
    return $this->db->query($sql)->result(); 
}

public function fetchUserData(){
    $sql = sprintf("
    select *, users_tbl.id as user_id
    from users_tbl
    left join employees_tbl on users_tbl.employee_id = employees_tbl.id
    ");
    return $this->db->query($sql)->result(); 
}

public function get_all_vehicles(){
    $sql = sprintf("
    select *
    from vehicle_tbl
    ");
    return $this->db->query($sql)->result(); 

}

public function get_all_trips(){
    $sql = sprintf("
    select a.id,a.assigned_driver,b.purpose_of_travel,c.model,a.status
    from trip_tickets a
    left join booking_tbl b on a.booking_id = b.id
    left join vehicle_tbl c on a.assigned_vehicle = c.id
    ");
    return $this->db->query($sql)->result(); 
}



public function get_graph(){
    $sql = sprintf("
    select main.id as tripID,a.model,(fuel_consumption_per_liter * estimated_kilometers_and_hours) as tripConsumption,b.purpose_of_travel,b.book_date_time
    from(select * from trip_tickets where status = 'Arrived') as main
    left join vehicle_tbl a on a.id = main.assigned_vehicle
    left join booking_tbl b on b.id = main.booking_id
    ");
    return $this->db->query($sql)->result(); 
}














}