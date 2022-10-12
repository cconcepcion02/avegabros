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
                                <h4 class="card-title">Choice 3</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name</th>
                                                <th>Company</th>
                                                <th>Contact Number</th>
                                                <th>Date Hired</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($reportTables as $reportTable){ ?>
                                            <tr>
												<td><img class="rounded-circle" width="35" src="<?php echo base_url()?><?php  echo $reportTable->profile_pic ? 'uploads/employee/profile_pic/'.$reportTable->profile_pic:"assets/images/avatar/1.png"; ?>" alt=""></td>
                                                <td><a href="<?php echo base_url().'display-employees-profile/'.$reportTable->emp_id?>"> <?php echo $reportTable->l_name.' '.$reportTable->f_name.' '.$reportTable->m_name;?></a></td>
                                                <td><?php echo $reportTable->company_name;?></td>
                                                <td><?php echo $reportTable->contact_number;?></td>  
												<td><?php echo $reportTable->date_hired;?></td>
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