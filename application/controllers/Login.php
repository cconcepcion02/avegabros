<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	

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
	 public function __construct(){
		 parent::__construct();
 		if($this->session->userdata('is_Login')){
			redirect('dashboard');
		}

		$this->load->model('form_model');
		$this->load->model('login_model');
		

	 }
	 
	public function index()
	{
		$this->load->view('login_form');
		
	}

    public function authenticate(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');			
        $data = $this->login_model->auth($username,$password);
		
			// echo"<pre>";
			// print_r($data->employee_id);
			// echo"</pre>";
			// exit;

        $account = $this->login_model->get_account($data->employee_id);

        if(!$data){
            redirect('islogout');
        }else{
            $this->session->set_userdata('is_Login',1);
            $this->session->set_userdata('login_cred',$account);
    // echo"<pre>";
    // print_r($this->session->userdata('login_cred'));
    // echo"</pre>";
    // exit;
            redirect('dashboard');
        }

}
					

}
