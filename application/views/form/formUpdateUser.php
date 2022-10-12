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
                            <?php echo form_open_multipart('update-user');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >ID
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php echo $user->id;?>" class="form-control" name="id" hidden>
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Username
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php echo $user->username;?>" class="form-control" name="username">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Password
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $user->password;?>"class="form-control" name="password" >
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                                <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Employee Name
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select name="employee_id" class="selectEmpforStatus" id="single-select-status">
                                                            <option value="<?php echo $user->employee_id;?>" > <?php echo $user->fullname;?></option>
                                                         <?php foreach($employees as $employee){ ?>      
                                                            <option value="<?php echo $employee->id;?>"><?php echo $employee->fullname;?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-lg-4 col-form-label" for="validationCustom01">Role
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <select name="role" class="selectEmpforStatus multi-select" >
                                                         <option value="<?php echo $user->role;?>"> <?php echo $user->role;?></option>
                                                            <option value="Admin"> Admin</option>
                                                            <option value="User"> User</option>
                                                        </select>
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

