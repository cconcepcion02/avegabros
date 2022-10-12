        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $pagetitle;?></a></li>

					</ol>
                </div>
                <!-- row -->
                    <div class="row">
					<div class="col-12">
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".bookModal">Add Booking</button>
                    <?php if($this->session->userdata('login_cred')->role=="Admin"){ ?>  
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target=".tripModal">Add Trip Ticket</button>
                    <?php } ?>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bookings</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Requesting Employee</th>
                                                <th>Book Date</th>
                                                <th>From</th>
                                                <th>To</th>
                                                <th>Purpose Of Travel(Booking)</th>
                                                <th>Status</th>
                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($bookings as $booking){ ?> 
                                            <tr>
											
                                                <td><?php echo $booking->fullname;?></td>
                                                <td><?php echo $booking->book_date_time;?></td>
                                                <td><?php echo $booking->destination_from;?></td>
												<td><?php echo $booking->destination_to;?></td>
                                                <td><?php echo $booking->purpose_of_travel;?></td>


                                               <?php if($this->session->userdata('login_cred')->role=="Admin"){ ?> 
                                                <td>
                                                <select id="<?php echo $booking->id; ?>" name="<?php echo $booking->id; ?>"  class="form-control multi-select status">
                                                <option value="<?php echo $booking->status;?>" > <?php echo $booking->status;?></option>
                                                <option value="Cancelled">Cancelled</option>
                                                <option value="Approved">Approved</option>                                          
                                               </td>
                                                <?php }else{ ?>
                                                    <td><?php echo $booking->status;?></td>
                                                <?php } ?>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>                                             
                    

                <div class="row">
                    <hr/>
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Trips(Only Approved Booking is Displayed)</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Assigned Driver</th>
                                                <th>Purpose of Travel(Booking)</th>
                                                <th>Model(Vehicle)</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                              

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($trips as $trip){ ?> 
                                            <tr>
											
                                                <td><?php echo $trip->assigned_driver;?></td>
                                                <td><?php echo $trip->purpose_of_travel;?></td>
                                                <td><?php echo $trip->model;?></td>
												<td><?php echo $trip->status;?></td>
<?php if($this->session->userdata('login_cred')->role=="Admin"){ ?>                                                 
                                                <td>
													<div class="d-flex">
<?php if($trip->status=="Pending") { ?>
														<a href="<?php echo base_url().'enroute/'.$trip->id;?>" class="editClass btn btn-primary shadow btn-xs sharp me-1">En</a>	
<?php } ?>
<?php if($trip->status=="En-Route") { ?>
                                                        <a href="<?php echo base_url().'arrived/'.$trip->id;?>" class="editClass btn btn-primary shadow btn-xs sharp me-1">Ar</a>	
 <?php } ?>                                                      
                                                        
													</div>
												</td>
<?php } ?>                      
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>   
                </div>
            </div>
        </div>

     <!-- <script>
    
		function saveStatus(data) {
            //alert(data.id);
           let status =  document.getElementById("#status");
        console.log(status);
			
			// $.ajax({
			// 	url: "<?php echo base_url() . 'update/role'; ?>",
			// 	type: "post",
			// 	data: values,
			// 	dataType: 'json',
			// 	success: function (response) {
			// 		console.log(response);
			// 	},
			// 	error: function(jqXHR, textStatus, errorThrown) {
			// 		console.log(jqXHR);
			// 	   console.log(textStatus, errorThrown);
			// 	}
			// });
		}

 </script> -->
        <!--**********************************
            Content body end
        ***********************************-->


         <!--**********************************
           Modal
        ***********************************-->`
                        
                  <div class="modal fade bookModal"  role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Booking Form</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                     <?php echo form_open_multipart('add-booking');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                                 <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Requesting Employee
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select name="employee_id" class="selectEmpforStatus multi-select" >                                                        
                                                         <?php foreach($employees as $employee){ ?>      
                                                            <option value="<?php echo $employee->id;?>"><?php echo $employee->fullname;?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Book Date Time
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="date" name="book_date_time" class="form-control">
                                                        </div>
                                                  </div> 
                                                  <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Destination From</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="destination">
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >To</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="to">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Vehicle Count</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="vehicle_count">
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                                <div class="col-xl-6">
                                                     <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Estimated Kilometers and Hours</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="estimated_kilometers_hours">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" > Purpose of Travel</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="purpose_travel">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" > Status</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  name="status" class="form-control" value="For Approval" disabled>
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <div class="col-lg-8 ms-auto">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                     <?php echo form_close();?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

        <!--**********************************
           Modal addbooking
        ***********************************-->


        <div class="modal fade tripModal"  role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Trip Form</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                     <?php echo form_open_multipart('add-trip');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                                 <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Booking 
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select name="booked_id" class="selectEmpforStatus multi-select" >                                                        
                                                         <?php foreach($approves as $approve){ ?>      
                                                            <option value="<?php echo $approve->id;?>"><?php echo $approve->purpose_of_travel;?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Assigned Vehicle 
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select name="vehicle_id" class="selectEmpforStatus multi-select" >                                                        
                                                         <?php foreach($vehicles as $vehicle){ ?>      
                                                            <option value="<?php echo $vehicle->id;?>"><?php echo $vehicle->brand;?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                  <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Assigned Driver</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="driver">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" > Status</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  name="status" class="form-control" value="Pending" disabled>
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <div class="col-lg-8 ms-auto">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                     <?php echo form_close();?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
        <!--**********************************
           Modal addtrip
        ***********************************-->


        <div class="modal fade updateTrip"  role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Trip Form</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                     <?php echo form_open_multipart('update-trip');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                                 <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Status 
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select name="status" class="selectEmpforStatus multi-select" id="statusType">   
                                                             <option value="Pending">Pending</option>                                                         
                                                            <option value="En-Route">En-Route</option>
                                                            <option value="Arrived">Arrived</option>                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Actual  Date Time
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input id="book_date_time" type="date" name="actual_date_time" class="form-control">
                                                        </div>
                                                  </div> 
                                                  <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Odometer Start Reading</label>
                                                        <div class="col-lg-6">
                                                            <input id="odometer_start" type="text"  class="form-control" name="odometer_start">
                                                        </div>
                                                  </div>
                                                  <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Odometer End Reading</label>
                                                        <div class="col-lg-6">
                                                            <input id="odometer_end" type="text"  class="form-control" name="odometer_end">
                                                  </div>

                                                    <div class="mb-3 row">
                                                        <div class="col-lg-8 ms-auto">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                     <?php echo form_close();?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
        <!--**********************************
           Modal addtrip
        ***********************************-->



