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
                            <?php echo form_open_multipart('update-enroute');?>
                                        <div class="row">
                                        <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Trip ID
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $trips->id;?>" class="form-control" name="id" hidden>
                                                        </div>
                                                    </div> 
                                                </div>                                    
                                            <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Odometer Start Reading
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="odometer_start">
                                                        </div>
                                                    </div> 
                                                </div>

                                            
                                                <div class="col-xl-6">
                                                <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Actual Date Time
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="date" name="date_time" class="form-control">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Status
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" name="status" class="form-control" value="En-Route">
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

