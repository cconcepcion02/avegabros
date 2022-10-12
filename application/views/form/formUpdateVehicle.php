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
                            <?php echo form_open_multipart('update-vehicle');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                            <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >ID
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $vehicle->id;?>" class="form-control" name="id">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Brand
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $vehicle->brand;?>" class="form-control" name="brand">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Model
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $vehicle->model;?>" class="form-control" name="model" >
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Plate No.
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text" value="<?php echo $vehicle->plate_no;?>" class="form-control" name="plate_no" >
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >VIN
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $vehicle->vin;?>" class="form-control" name="vin" >
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                                <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Engine Chassis No.
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $vehicle->engine_chassis_no;?>" class="form-control" name="e_c_n" >
                                                        </div>
                                                    </div>   
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Fuel Tank Capacity
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $vehicle->fuel_tank_capacity;?>" class="form-control" name="f_t_c" >
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Fuel Consumption Per Liter
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  value="<?php echo $vehicle->fuel_consumption_per_liter;?>" class="form-control" name="f_c_p_l" >
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

