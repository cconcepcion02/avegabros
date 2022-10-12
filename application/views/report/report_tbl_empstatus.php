        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Table</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Datatable</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Employee Status Data</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr> 
                                                <th></th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Reason</th>
                                                <th>Effective Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($reportTables as $reportTable){ ?>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="<?php echo base_url()?><?php  echo $reportTable->profile_pic ? 'uploads/employee/profile_pic/'.$reportTable->profile_pic:"assets/images/avatar/1.png"; ?>" alt=""></td>
                                                <td><a href="<?php echo base_url().'display-employees-profile/'.$reportTable->emp_id?>"> <?php echo $reportTable->l_name.' '.$reportTable->f_name;?></a></td>
                                                <td><?php echo $reportTable->currentStatus;?></td>									
                                                <td><?php echo $reportTable->empstatus_reason;?></td>
                                                <td><?php echo $reportTable->effective_date;?></td>
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
        <!--**********************************
            Content body end
        ***********************************-->