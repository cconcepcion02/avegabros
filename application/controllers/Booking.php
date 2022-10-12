<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			if(!$this->session->userdata('is_Login')){
				redirect('login-error');
			}
            $this->load->model('form_model');
            $this->load->model('login_model');

        
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
        $data['trips'] = $this->form_model->get_all_trips();
        $data['approves'] = $this->form_model->get_all_Approved();
        $data['vehicles'] = $this->form_model->get_all_vehicles();
	    $data['pagetitle']="Booking Dashboard";
        $data['employees'] = $this->form_model->get_all_employee();
        $data['bookings'] = $this->form_model->getBooking(); 
        // echo"<pre>";
        // print_r( $data);
        // echo"</pre>";
        // exit;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/header-start');
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('booking/booking_view');
		$this->load->view('includes/footer');

	}

    public function add_booking(){
        // echo"<pre>";
        // print_r($this->input->post());
        // echo"</pre>";
        // exit;
        $tbl = "booking_tbl";
        $data = array(
            'requesting_employee' => $this->input->post('employee_id'),
            'book_date_time' => $this->input->post('book_date_time'),
            'destination_from' => $this->input->post('destination'),
            'destination_to' => $this->input->post('to'),
            'vehicle_count' => $this->input->post('vehicle_count'),
            'estimated_kilometers_and_hours' => $this->input->post('estimated_kilometers_hours'),
            'purpose_of_travel' => $this->input->post('purpose_travel'),
            'status' => "For Approval"
        );
        $this->form_model->insert($tbl,$data);	

        redirect('dashboard');
    }
    public function updateBookingStatus($id){
        
        $data = array(
            'status'=>$this->input->post('selectedText')
        );
        $this->form_model->update('booking_tbl',$id,$data);
		echo json_encode(array( 'data' => "SUCCESS"));
    }


public function addtripTicket(){

    $data = array(
        'booking_id' => $this->input->post('booked_id'),
        'assigned_vehicle' => $this->input->post('vehicle_id'),
        'assigned_driver' => $this->input->post('driver'),
        'status' => "Pending"
    );
        $this->form_model->insert('trip_tickets',$data);
        redirect('dashboard');

    }
    
    public function updateTripStatus(){
        echo"<pre>";
        print_r($this->input->post());
        echo"</pre>";
        exit;
        $data = array(
            'status'=>$this->input->post('selectedText'),
            'status'=>$this->input->post('selectedText'),
            'status'=>$this->input->post('selectedText'),
        );
        // $this->form_model->update('booking_tbl',$id,$data);
	
    }

    public function displayenroute($tripid){
		$data['pagetitle']="Form Enroute";
       $data['trips'] = $this->form_model->getById('trip_tickets',$tripid);
        // echo"<pre>";
        // print_r($data);
        // echo"</pre>";
        // exit;
		$this->load->view('includes/header',$data);
		$this->load->view('includes/header-start');
		$this->load->view('includes/nav-header');
		$this->load->view('includes/sidebar-start');
		$this->load->view('form/formEnroute');
		$this->load->view('includes/footer');
    }

    public function displayarrived($tripid){
        $data['pagetitle']="Form Update to Arrived";
        // $data['employees'] = $this->form_model->get_all_employee();
        //  $data['users'] = $this->form_model->fetchUserData(); 
        $data['trips'] = $this->form_model->getById('trip_tickets',$tripid);
         // echo"<pre>";
         // print_r($data);
         // echo"</pre>";
         // exit;
         $this->load->view('includes/header',$data);
         $this->load->view('includes/header-start');
         $this->load->view('includes/nav-header');
         $this->load->view('includes/sidebar-start');
         $this->load->view('form/formArrived');
         $this->load->view('includes/footer');
    }

    public function updateEnroute(){
        $data = array(
            'oddometer_start_reading'=>$this->input->post('odometer_start'),
            'actual_date_time'=>$this->input->post('date_time'),
            'status'=>$this->input->post('status'),
        );
        $this->form_model->update('trip_tickets',$this->input->post('id'),$data);
         redirect('dashboard');
    }
    public function updateArrived(){
        //  echo"<pre>";
        //  print_r($this->input->post());
        //  echo"</pre>";
        //  exit;

        $data = array(
            'odometer_end_reading'=>$this->input->post('odometer_end'),
            'status'=>$this->input->post('status'),
            
        );
        $this->form_model->update('trip_tickets',$this->input->post('id'),$data);
        redirect('dashboard');
    }

    public function getGraph(){
       echo json_encode(array('results' => $this->form_model->get_graph()

   ));
    }


}
