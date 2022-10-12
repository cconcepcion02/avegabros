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
                            <?php echo form_open_multipart('add-user');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Username
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="username">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Password
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="password" >
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
                                                            <option> N/A</option>
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
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Fullname</th>
                                                <th>Role</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($users as $user){ ?> 
                                            <tr>
											
                                                <td><?php echo $user->username;?></td>
                                                <td><?php echo $user->password;?></td>
                                                <td><?php echo $user->fullname;?></td>
												<td><?php echo $user->role;?></td>
                                                <td>
													<div class="d-flex">
														<a href="<?php echo base_url().'editUser?user_id='.$user->user_id;?>" id="edit" class="editClass btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="<?php echo base_url().'delete-user/'.$user->user_id;?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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

