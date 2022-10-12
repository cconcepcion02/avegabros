<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Login'; 
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['signIn']= "Login/authenticate";
$route['islogout'] = "Login";
$route['logout'] = "Dashboard/logout";
// Admin Route

$route['users-dashboard'] = "dashboard/formAddUser";
$route['employees-dashboard'] = "dashboard/formAddEmployee";
$route['vehicles-dashboard'] = "dashboard/formAddVehicle";


//Insert
$route['add-employee'] = "dashboard/addEmployee";
$route['add-user'] = "dashboard/addUser";
$route['add-vehicle'] = "dashboard/addVehicle";


//Get
$route["editEmployee"] = "dashboard/getbyEmployee";
$route["editVehicle"] = "dashboard/getbyVehicle";
$route["editUser"] = "dashboard/getbyUser";
//Update
$route['update-employee'] = "dashboard/updateEmployee";
$route['update-vehicle'] = "dashboard/updateVehicle";
$route['update-user'] = "dashboard/updateUser";

//Delete
$route['delete-employee/(:num)'] = "dashboard/deleteEmployee/$1";
$route['delete-user/(:num)'] = "dashboard/deleteUser/$1";
$route['delete-vehicle/(:num)'] = "dashboard/deleteVehicle/$1";

//booking 
$route['booking_dashboard']="booking";
$route['add-booking'] = "booking/add_booking";
$route['update-bookingstatus/(:num)'] = "booking/updateBookingStatus/$1";

//trips
$route['add-trip']="booking/addtripTicket";
//$route['update-trip'] = "booking/updateTripStatus";
$route['enroute/(:num)']="booking/displayenroute/$1";
$route['arrived/(:num)']="booking/displayarrived/$1";
$route['update-enroute'] = "booking/updateEnroute";
$route['update-arrived'] = "booking/updateArrived";

//graph
$route['graph'] = "booking/getGraph";









