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
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo $pagetitle;?></h4>
                            </div>
                            <div class="card-body">
                            <?php echo form_open_multipart('add-employee');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Full Name:
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="f_name">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Birthdate
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="date" name="birthdate" class="form-control">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Address
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="address" >
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                                <div class="col-xl-6">
                                                     <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Contact Number:</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="contact_no">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Emergency Contact Number</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="e_contact_no">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Position</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="position">
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
                    <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Birthdate</th>
                                                <th>Address</th>
                                                <th>Contact No</th>
                                                <th>Emergency Contact Person</th>
                                                <th>Position</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($employees as $employee){ ?> 
                                            <tr>
											
                                                <td><?php echo $employee->fullname;?></td>
                                                <td><?php echo $employee->birthdate;?></td>
                                                <td><?php echo $employee->address;?></td>
												<td><?php echo $employee->contact_no;?></td>
                                                <td><?php echo $employee->emergency_contact_person;?></td>
                                                <td><?php echo $employee->position;?></td>
                                                <td>
													<div class="d-flex">
														<a href="<?php echo base_url().'editEmployee?emp_id='.$employee->id;?>" id="edit" class="editClass btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="<?php echo base_url().'delete-employee/'.$employee->id;?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
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
        <!--**********************************
            Content body end
        ***********************************-->

