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
                            <?php echo form_open_multipart('update-employee');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                                     <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >ID
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" value="<?php echo $profile->id;?>" name="id" hidden>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Full Name:
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" value="<?php echo $profile->fullname;?>" name="f_name">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Birthdate
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="date" value="<?php echo $profile->birthdate;?>" name="birthdate" class="form-control">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Address
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $profile->address;?>" class="form-control" name="address" >
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                                <div class="col-xl-6">
                                                     <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Contact Number:</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $profile->contact_no;?>" class="form-control" name="contact_no">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Emergency Contact Number</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $profile->emergency_contact_person;?>" class="form-control" name="e_contact_no">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Position</label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $profile->position;?>" class="form-control" name="position">
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
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

