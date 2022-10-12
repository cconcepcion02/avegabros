<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			if(!$this->session->userdata('is_Login')){
				redirect('login-error');
			}
            $this->load->model('form_model');
            $this->load->model('login_model');
            $list['emps'] = $this->form_model->get_all_employee();
            

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['pagetitle'] ="sample"; 
		$this->load->view('includes/header');
		$this->load->view('includes/header-start',$data);
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('dashboard/dashboard_view');
		$this->load->view('includes/footer');
	}


    public function formAddEmployee(){
        $data['employees'] = $this->form_model->get_all_employee();
		$data['pagetitle']="Form Add Employee";
		$this->load->view('includes/header',$data);
		$this->load->view('includes/header-start');
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('form/formAddEmployee');
		$this->load->view('includes/footer');
	}

    public function addEmployee(){
        $tbl = "employees_tbl";
        $data = array(
            'fullname' => $this->input->post('f_name'),
            'birthdate' => $this->input->post('birthdate'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact_no'),
            'emergency_contact_person' => $this->input->post('e_contact_no'),
            'position' => $this->input->post('position')
        );
         $this->form_model->insert($tbl,$data);
         redirect('dashboard');
    }


//update
     public function updateEmployee(){
        $tbl = 'employees_tbl';
        $data = array(
            'fullname' => $this->input->post('f_name'),
            'birthdate' => $this->input->post('birthdate'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('contact_no'),
            'emergency_contact_person' => $this->input->post('e_contact_no'),
            'position' => $this->input->post('position')
        );

        $this->form_model->update($tbl,$this->input->post('id'),$data);
        redirect('dashboard');
     }

     public function updateVehicle(){
        $tbl="vehicle_tbl";
        $data = array(
            'brand' => $this->input->post('brand'),
            'model' => $this->input->post('model'),
            'plate_no' => $this->input->post('plate_no'),
            'vin' => $this->input->post('vin'),
            'engine_chassis_no' => $this->input->post('e_c_n'),
            'fuel_tank_capacity' => $this->input->post('f_t_c'),
            'fuel_consumption_per_liter' => $this->input->post('f_c_p_l')
        );

        $this->form_model->update($tbl,$this->input->post('id'),$data);
        redirect('dashboard');
     }

     public function updateUser(){
        $tbl="users_tbl";
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'employee_id' => $this->input->post('employee_id'),
            'role' => $this->input->post('role')
        );

        $this->form_model->updateUser($tbl,$this->input->post('id'),$data);
        redirect('dashboard');
     }




    public function formAddVehicle(){

		$data['pagetitle']="Form Add Vehicle";
        $data['vehicles'] = $this->form_model->get_all_vehicles();
		$this->load->view('includes/header',$data);
		$this->load->view('includes/header-start');
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('form/formAddVehicle');
		$this->load->view('includes/footer');

	}

    public function addVehicle(){
        $tbl = "vehicle_tbl";
        $data = array(
            'brand' => $this->input->post('brand'),
            'model' => $this->input->post('model'),
            'plate_no' => $this->input->post('plate_no'),
            'vin' => $this->input->post('vin'),
            'engine_chassis_no' => $this->input->post('e_c_n'),
            'fuel_tank_capacity' => $this->input->post('f_t_c'),
            'fuel_consumption_per_liter' => $this->input->post('f_c_p_l')
        );
         $this->form_model->insert($tbl,$data);
         redirect('dashboard');

    }

    public function formAddUser(){

		$data['pagetitle']="Form Add User";
       $data['employees'] = $this->form_model->get_all_employee();
        $data['users'] = $this->form_model->fetchUserData(); 
        // echo"<pre>";
        // print_r($data);
        // echo"</pre>";
        // exit;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/header-start');
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('form/formAddUser');
		$this->load->view('includes/footer');


	}
    public function addUser(){
        $tbl = "users_tbl";
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'employee_id' => $this->input->post('employee_id'),
            'role' => $this->input->post('role')
        );
         $this->form_model->insert($tbl,$data);
         redirect('dashboard');

    }

    public function logout(){
		$this->session->unset_userdata('is_Login');
		$this->session->unset_userdata('login_cred');
		$this->session->sess_destroy();
		redirect('islogout');
	}



    //get by id 

    public function getbyEmployee(){
        //$this->form_model->getEmployeeById($id);
              $id = $this->input->get('emp_id');
              $tbl="employees_tbl";
              $data['pagetitle']="Form Update User";
              $data['profile'] = $this->form_model->getById($tbl,$id);
              $this->load->view('includes/header',$data);
              $this->load->view('includes/header-start');
              $this->load->view('includes/nav-header');
              $this->load->view('includes/sidebar-start');
              $this->load->view('form/formUpdateEmployee');
              $this->load->view('includes/footer');
     }  

    public function  getbyVehicle(){
        $id = $this->input->get('vehicle_id');
        $tbl="vehicle_tbl";
		$data['pagetitle']="Form Update Vehicle";
        $data['vehicle'] = $this->form_model->getById($tbl,$id);
		$this->load->view('includes/header',$data);
		$this->load->view('includes/header-start');
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('form/formUpdateVehicle');
		$this->load->view('includes/footer');
    }



    public function getbyUser(){
        $id = $this->input->get('user_id');
		$data['pagetitle']="Form Update User";
        $data['employees'] =  $this->form_model->get_all_employee();
        $data['user'] = $this->form_model->getuserDetails($id);
        // echo"<pre>";
        // print_r($data);
        // echo"</pre>";
        // exit;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/header-start');
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('form/formUpdateUser');
		$this->load->view('includes/footer');
    }













// DELETE 
    public function deleteEmployee($id){
        $tbl="employees_tbl";
        $this->form_model->delete($tbl,$id);
        redirect('dashboard');
    }
    public function deleteUser($id){
        $tbl="users_tbl";
        $this->form_model->delete($tbl,$id);
        redirect('dashboard');
    }
    public function deleteVehicle($id){
        $tbl="vehicle_tbl";
        $this->form_model->delete($tbl,$id);
        redirect('dashboard');
    }

}
