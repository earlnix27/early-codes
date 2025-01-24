	<button type="button" class="btn btn-primary mb-3" id="add_emp_btn">Add Employee</button>
			<button type="button" class="btn btn-primary mb-3" id="exp_btn">Export Table</button>

			<div class="row">
			<div class="modal fade" id="add_emp">
			  <div class="modal-dialog modal-dialog-scrollable">
				<div class="modal-content">

				 
				  <div class="modal-header">
					<h4 class="modal-title" id="act_header">Add Employee</h4>
					<button type="button" class="close" data-dismiss="modal" id="mod_cls">&times;</button>
				  </div>

				
				<div class="modal-body">
				
				
				<ul class="nav nav-tabs">
				  <li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#individual" id="indi">Individual</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#batch" id="bimp">Batch Import</a>
				  </li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane container active" id="individual">
						<form id="add_emp_form" name="add_emp_form" action="" method="POST">
							<div class="form-group">
								<label>Employee No.</label>
								<input type="input" class="form-control" name="emp_no" id="emp_no" />
							</div>
							<div class="form-group">
								<label>First Name</label>
								<input type="input" class="form-control" name="f_name" id="f_name" />
							</div>
							<div class="form-group">
								<label>Middle Name</label>
								<input type="input" class="form-control" name="m_name" id="m_name" />
							</div>
							<div class="form-group">
								<label>Last Name</label>
								<input type="input" class="form-control" name="l_name" id="l_name" />
							</div>
							<div class="form-group">
								<label>Position</label>
								<input type="input" class="form-control" name="emp_position" id="emp_position" />
							</div>
							<div class="form-group">
								<label>Division</label>
								<select class="form-control" name="division" id="division">
									<option value="">-Select Division-</option>
									<option value="MSD">Management Services</option>
									<option value="TSD">Technical Services</option>
								</select>
							</div>
							
							<button type="button" id="add_btn" class="btn btn-success">Add</button>
							<button type="button" id="up_btn" class="btn btn-primary">Update</button>
						</form>
					</div>
					<div class="tab-pane container fade" id="batch">
						<form method="post" id="import_emp_form" enctype="multipart/form-data">
							   <label>Import Excel File</label>
							   <input type="file" name="file" id="file" required accept=".xls" class="form-control-file border mb-3" />
							   <input type="submit" name="import" value="Import" class="btn btn-success" />
						</form>
					</div>
				</div>
				</div>
				</div>
				</div>
			  </div>
			  
			  <div class="modal fade" id="emp_details">
			  <div class="modal-dialog modal-dialog-scrollable modal-lg">
				<div class="modal-content">

				  <div class="modal-header">
					<h4 class="modal-title">Employee Details</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				<div class="modal-body">
				
					<div id="emp_content"></div>
				
				</div>
				</div>
				</div>
			  </div>
			  
			</div>
				
				<table id="emp_tbl" class="cell-border display" cellspacing="0">
					<thead style="text-align:left;font-size:15px">
						<tr>
								<th>emp_id</th>
								<th>Employee No.</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>Position</th>
								<th>Division</th>
								<th>Status</th>
								<th>Action</th>
						</tr>
					</thead>
					<?php foreach ($employee as $row):?>
					<tr>
						<td><?php echo $row['emp_id'];?></td>
						<td><?php echo $row['emp_no'];?></td>
						<td><?php echo $row['f_name'];?></td>
						<td><?php echo $row['m_name'];?></td>
						<td><?php echo $row['l_name'];?></td>
						<td><?php echo $row['emp_position'];?></td>
						<td><?php echo $row['division'];?></td>
						
						<td>
						<strong>
								<?php 
								date_default_timezone_set('Asia/Manila');
								$app_type = '';
								$current_dt = date('Y-m-d');
								$query = $this->db->query('SELECT * FROM ets_db.record INNER JOIN ets_db.emp ON (record.emp_id = emp.emp_id) WHERE record.emp_id = '.$row['emp_id'].';');
									
								if($query->result_array()!=null){
									foreach ($query->result_array() as $rec){	
										$start_dt = date('Y-m-d', strtotime($rec['start_dt']));
										$end_dt = date('Y-m-d', strtotime($rec['end_dt']));
										
										if($current_dt>=$start_dt && $current_dt<=$end_dt){
											if($rec['app_type']==1){$app_type = '<span class="text-success">On Travel</span>';}
											elseif($rec['app_type']==2){{$app_type = '<span class="text-warning">On Leave</span>';}}
										}
										else{$app_type = '<span class="text-primary">On Duty</span>';}
									}
									echo $app_type;
								}
								else{echo '<span class="text-primary">On Duty</span>';}
								?>
						</strong>
						</td>
						<td></td>
					</tr>	
					<?php endforeach;?>
				</table>

			  
	<script type="text/javascript">
	$(document).ready(function(){	
	
		$('#s_dt, #e_dt').datepicker();
		
		$('#emp_rec_tbl').DataTable({
					"bLengthChange": true,
					"dom": 'frtip',
					"language": {
					"sSearch": "Search Keywords:",
					"loadingRecords": "Please wait - loading...",
					"zeroRecords": "No records found",
					"infoEmpty": "No records available",
					"infoFiltered": "(filtered from _MAX_ total records)"
					},
					
					/* "columnDefs": [
						{
							"targets": [0],
							"visible": false,
							"searchable": false
						},
						
					], */
					
					
				}).order( [ 0, 'desc' ] ).draw();
			
		$('#emp_tbl').DataTable({
					"bLengthChange": true,
					"dom": 'frtip',
					"lengthMenu": [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
					"language": {
					"sSearch": "Search Keywords:",
					"loadingRecords": "Please wait - loading...",
					"zeroRecords": "No records found",
					"infoEmpty": "No records available",
					"infoFiltered": "(filtered from _MAX_ total records)"
					},
					
					"columnDefs": [
						{
							"targets": [0],
							"visible": false,
							"searchable": false
						},
						{
							"targets": -1,
							"data": null,
							"defaultContent": "<div class='btn-group btn-group-sm'><input type='button' class='v_btn btn btn-info btn-sm' value='View' />"+"<input type='button' class='e_btn btn btn-primary btn-sm' value='Edit' />"+"<input type='button' class='d_btn btn btn-danger btn-sm' value='Delete' /></div>"
						}
					],
					
					buttons: [
						{
								extend: 'excel',
								text: 'Export Table',
								title: '',
								filename: 'Employee Record',
								exportOptions: {
									//modifier: {selected: true},
									columns: [1,2,3,4,5,6]
								},
						}
					],
					
				}).order( [ 0, 'desc' ] ).draw();
				
				var table = $('#emp_tbl').DataTable();
				var emp_id = 0;
				$('#exp_btn').button().on('click', function(){
					table.button( '.buttons-excel' ).trigger();
				});
				
				$('#emp_tbl tbody').on('click', '.v_btn', function (e) {
						
						var datas = table.row( $(this).parents('tr') ).data();
						
						emp_id = datas[0];
						
						$.ajax({ 
							type: "POST", 
							url: "<?php echo base_url();?>c_ets/get_emp_content?emp_id="+emp_id+"",
							success: function(data){
								
									$('#emp_content').html(data);
									
							}
						});
						
						$('#emp_details').modal('show');
				});
				
				$('#emp_tbl tbody').on('click', '.e_btn', function (e) {
						
						var datas = table.row( $(this).parents('tr') ).data();
						
						$('#add_btn').hide();
						$('#up_btn').show();
						$('#act_header').text('Edit Employee');
						$('#add_emp_form input, select, textarea').css({
									"border": "",
									"background": ""
						});
						emp_id = datas[0];
						$('#emp_no').val(datas[1]);
						$('#f_name').val(datas[2]);
						$('#m_name').val(datas[3]);
						$('#l_name').val(datas[4]);
						$('#emp_position').val(datas[5]);
						$('#division').val(datas[6]);
						
						$('#add_emp').modal('show');
				});
				
				$('#up_btn').button().on('click', function(e) {
										
						e.preventDefault()
						var isValid = true;

						$('#add_emp_form input[type="input"], select, textarea').each(function() {
							if ($.trim($(this).val()) == '') {
								isValid = false;
								$(this).css({
									"border": "1px solid red",
									"background": "#feebeb"
								});
							}
							else {
								$(this).css({
									"border": "",
									"background": ""
								});
							}
						});
						
						if (isValid == true){
							$('#add_emp_form').attr('action', "<?php echo base_url();?>c_ets/update_emp_record?emp_id="+emp_id+"").submit();
						}
						
				});
				
				$('#emp_tbl tbody').on('click', '.d_btn', function (e) {
						
						var datas = table.row( $(this).parents('tr') ).data();
						
						emp_id = datas[0];
						
						$('#add_emp_form').attr('action', "<?php echo base_url();?>c_ets/delete_emp_record?emp_id="+emp_id+"").submit();
				});
				
				$('#add_emp_btn').on('click',function(){
					$('#act_header').text('Add Employee');
					$('#add_btn').show();
					$('#up_btn').hide();
					$('#add_emp_form input[type="input"], select, textarea').each(function() {
							$(this).val('');
					});
					$('#add_emp').modal('show');
				});
				
				$('#add_btn').button().on('click', function(e) {
					
								var error = '';
								var isValid = true;
								
										$('#add_emp_form input[type="input"], select, textarea').each(function() {
											if ($.trim($(this).val()) == '') {
												isValid = false;
												$(this).css({
													"border": "1px solid red",
													"background": "#feebeb"
												});
											}
											else {
												$(this).css({
													"border": "",
													"background": ""
												});
											}
										});
										
										if (isValid == false){
											error = "Please fill out all required (*) fields.";
										}
										
								  if(error == '')
										  {
											  $.ajax({ 
													type: "POST", 
													url: "<?php echo base_url();?>c_ets/put_employee",
													data: $("#add_emp_form").serialize(),
													success: function(data){
														
															$(location).attr('href',"<?php echo base_url();?>c_ets/emp_list");
															
													}
											  });
											  
											   
											   
											   
										  }
								  else
								  {
									$('#up_msg').html('<label style="color:red;border: 1px solid red;padding:5px;"><b>'+error+'</b></label>').show().delay(2000).fadeOut('slow');
								  }	  
				
			});
			
			$('#import_emp_form').on('submit', function(event){
			  event.preventDefault();
				  $.ajax({
				   url:"<?php echo base_url();?>c_ets/import_emp",
				   method:"POST",
				   data:new FormData(this),
				   contentType:false,
				   cache:false,
				   processData:false,
				   success:function(data){
					$('#file').val('');
					//load_data();
					$(location).attr('href',"<?php echo base_url();?>c_ets/emp_list");
				   }
				 });
			 });
			
			$('input, select, textarea').on('input change',function(){
				$(this).css({
					"border": "",
					"background": ""
				});
			});
			
			
	});
	</script>
