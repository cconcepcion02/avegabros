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
                            <?php echo form_open_multipart('add-vehicle');?>
                                        <div class="row">                                     
                                            <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Brand
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="brand">
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Model
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="model" >
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Plate No.
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="plate_no" >
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >VIN
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="vin" >
                                                        </div>
                                                    </div>
                                                </div>

                                            
                                                <div class="col-xl-6">
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Engine Chassis No.
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="e_c_n" >
                                                        </div>
                                                    </div>   
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Fuel Tank Capacity
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="f_t_c" >
                                                        </div>
                                                    </div> 
                                                    <div class="mb-3 row">
                                                        <label class="col-lg-4 col-form-label" >Fuel Consumption Per Liter
                                                        </label>
                                                        <div class="col-lg-6">
                                                            <input type="text"  class="form-control" name="f_c_p_l" >
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
                                                <th>Brand</th>
                                                <th>Model</th>
                                                <th>Plate No.</th>
                                                <th>VIN</th>
                                                <th>Engine Chasiss</th>
                                                <th>Fuel Tank Capacity</th>
                                                <th>Fuel Consumption</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($vehicles as $vehicle){ ?> 
                                            <tr>
											
                                                <td><?php echo $vehicle->brand;?></td>
                                                <td><?php echo $vehicle->model;?></td>
                                                <td><?php echo $vehicle->plate_no;?></td>
												<td><?php echo $vehicle->vin;?></td>
                                                <td><?php echo $vehicle->engine_chassis_no;?></td>
                                                <td><?php echo $vehicle->fuel_tank_capacity;?></td>
                                                <td><?php echo $vehicle->fuel_consumption_per_liter;?></td>
                                                <td>
													<div class="d-flex">
														<a href="<?php echo base_url().'editVehicle?vehicle_id='.$vehicle->id;?>" id="edit" class="editClass btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="<?php echo base_url().'delete-vehicle/'.$vehicle->id;?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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

