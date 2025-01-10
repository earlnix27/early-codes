			<button type="button" class="btn btn-primary mb-3" id="add_rec_btn">Add Record</button>

			<div class="row">
			<div class="modal fade" id="add_rec">
			  <div class="modal-dialog modal-dialog-scrollable modal-lg">
				<div class="modal-content">

				 
				  <div class="modal-header">
					<h4 class="modal-title" id="act_header">Add Record</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				
				<div class="modal-body">
				<form id="add_rec_form" name="add_rec_form" action="" method="POST">
				<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="ty" style="font-weight:bold">Application Type</label>
						<select class="form-control" name="app_type" id="app_type">
							<option value="">-Select Application Type-</option>
							<option value="1">Travel Order</option>
							<option value="2">Leave</option>
						</select>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="form-group" id="tol_sec">
						<label style="font-weight:bold">Type of Leave</label>
						<select class="form-control" name="tol" id="tol">
							<option value="">-Select Type of Leave-</option>
							<option value="Vacation">Vacation</option>
							<option value="Sick">Sick</option>
							<option value="Maternity">Maternity</option>
							<option value="Force">Force</option>
							<option value="Employment">Employment</option>
						</select>
					</div>
				</div>
				</div>
				
				<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label for="sel1" style="font-weight:bold">Employee Name</label>
						<select class="form-control" name="emp_id" id="emp_id">
							<option value="">-Select Employee-</option>
							<?php foreach ($employee as $row):?>
								<option value="<?php echo $row['emp_id']; ?>"><?php echo $row['f_name']." ".substr($row['m_name'],0,1).". ".$row['l_name'];?></option>
							<?php endforeach;?>
						</select>
					</div>
				</div>	
				<div class="col-sm-6">
					<div class="form-group">
						<label style="font-weight:bold">Position</label>
						<input type="input" class="form-control" name="position" id="position" />
					</div>
				</div>
				</div>
					
				<div class="row">
				<div class="col-sm-6">
					<div class="form-group">
						<label style="font-weight:bold">Station</label>
						<input type="input" class="form-control" name="station" id="station" />
					</div>
				</div>
				<div class="col-sm-6">	
					<div class="form-group">
						<label style="font-weight:bold">Destination</label>
						<input type="input" class="form-control" name="destination" id="destination" />
					</div>
				</div>
				</div>
					
				<div class="row">
				<div class="col-sm-6">	
					<div class="form-group">
						<label style="font-weight:bold">Start Date</label>
						<input type="input" class="form-control" name="s_dt" id="s_dt" />
					</div>
				</div>
				<div class="col-sm-6">		
					<div class="form-group">
						<label style="font-weight:bold">End Date</label>
						<input type="input" class="form-control" name="e_dt" id="e_dt" />
					</div>
				</div>
				</div>
					
					<div class="form-group" id="purp_sec">
						<label style="font-weight:bold">Purpose of Travel</label>
						<textarea class="form-control" rows="5" name="trav_purpose" id="trav_purpose"></textarea>
					</div>
					  
				  <button type="button" id="submit_btn" class="btn btn-success">Submit</button>
				  <button type="button" id="update_btn" class="btn btn-primary">Update</button>
				 
				</div>
				</form>
				</div>
				
				  
				</div>
			  </div>
			</div>
			
			
				<table id="records_tbl" class="cell-border display" cellspacing="0">
					<thead style="text-align:left;font-size:15px">
						<tr>
								<th>rec_id</th>
								<th>emp_id</th>
								<th>Employee</th>
								<th>Position</th>
								<th>Division</th>
								<th>Purpose</th>
								<th>Station</th>
								<th>Destination</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Type</th>
								<th>Type</th>
								<th>Action</th>
						</tr>
					</thead>
					<?php foreach ($record as $row):?>
					<tr>
						<td><?php echo $row['rec_id'];?></td>
						<td><?php echo $row['emp_id'];?></td>
						<td><?php echo $row['f_name']." ".substr($row['m_name'],0,1).". ".$row['l_name'];?></td>
						<td><?php echo $row['position'];?></td>
						<td><?php echo $row['division'];?></td>
						<td><?php echo $row['trav_purpose'];?></td>
						<td><?php echo $row['station'];?></td>
						<td><?php echo $row['destination'];?></td>
						<td><?php echo $row['start_dt'];?></td>
						<td><?php echo $row['end_dt'];?></td>
						<td><?php echo $row['app_type'];?></td>
						<td>
						<strong>
							<?php 
								if($row['app_type']==1){echo '<span class="text-success">Travel</span>';}
								elseif($row['app_type']==2){{echo '<span class="text-warning">Leave</span>';}}
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
		$('#update_btn').hide();
	
		$('#records_tbl').DataTable({
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
							"targets": [0,1,6,10],
							"visible": false,
							"searchable": false
						},
						{
							"targets": -1,
							"data": null,
							"defaultContent": "<div class='btn-group btn-group-sm'><input type='button' class='v_btn btn btn-info btn-sm' value='View' />"+"<input type='button' class='e_btn btn btn-primary btn-sm' value='Edit' />"+"<input type='button' class='d_btn btn btn-danger btn-sm' value='Delete' /></div>"
						}
					]
					
				}).order( [ 0, 'desc' ] ).draw();
				
				var table = $('#records_tbl').DataTable();
				var rec_id = 0;
				
				$('#records_tbl tbody').on('click', '.v_btn', function (e) {
						
						var datas = table.row( $(this).parents('tr') ).data();
						
						var purpose = datas[5];
						
						
						if(datas[10]==1){
							$('#tol_sec').hide();
							$('#purp_sec').show();
							$('#tol').val('');
						}
						else{
							$('#tol_sec').show();
							$('#purp_sec').hide();
							
							if(purpose=='Vacation'){$('#tol').val(purpose);}
							else if(purpose=='Sick'){$('#tol').val(purpose);}
							else if(purpose=='Maternity'){$('#tol').val(purpose);}
							else if(purpose=='Force'){$('#tol').val(purpose);}
							else if(purpose=='Employment'){$('#tol').val(purpose);}
							else {$('#tol').val('');}
							
						}
						
						$('#submit_btn').hide();
						$('#update_btn').hide();
						$('#act_header').text('View Record');
						$('#add_rec_form input, select, textarea').css({
									"border": "",
									"background": ""
						});
						rec_id = datas[0];
						$('#app_type').val(datas[10]);
						$('#emp_id').val(datas[1]);
						$('#position').val(datas[3]);
						$('#trav_purpose').val(datas[5]);
						$('#station').val(datas[6]);
						$('#destination').val(datas[7]);
						$('#s_dt').val(datas[8]);
						$('#e_dt').val(datas[9]);
						
						$('#add_rec').modal('show');
						$('#add_rec_form input, select, textarea').prop('disabled', true);
				});
				
				$('#records_tbl tbody').on('click', '.e_btn', function (e) {
						
						var datas = table.row( $(this).parents('tr') ).data();
						
								
						
						$('#submit_btn').hide();
						$('#update_btn').show();
						$('#act_header').text('Edit Record');
						$('#add_rec_form input, select, textarea').prop('disabled', false);
						$('#add_rec_form input, select, textarea').css({
									"border": "",
									"background": ""
						});
						rec_id = datas[0];
						$('#app_type').val(datas[10]);
						$('#emp_id').val(datas[1]);
						$('#position').val(datas[3]);
						$('#trav_purpose').val(datas[5]);
						$('#station').val(datas[6]);
						$('#destination').val(datas[7]);
						$('#s_dt').val(datas[8]);
						$('#e_dt').val(datas[9]);
						
						$('#add_rec').modal('show');
				});
				
				$('#update_btn').button().on('click', function(e) {
										
								e.preventDefault()
								var isValid = true;
								
								var x = '';
								
								if($('#app_type').val()==1){
									x = '#add_rec_form input[type="input"], select[name="app_type"], select[name="emp_id"], textarea';
								}
								else{
									x = '#add_rec_form input[type="input"], select';
								}

								$(x).each(function() {
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
									$('#add_rec_form').attr('action', "<?php echo base_url();?>c_ets/update_record?rec_id="+rec_id+"").submit();
								}
						
				});
				
				$('#records_tbl tbody').on('click', '.d_btn', function (e) {
						
						var datas = table.row( $(this).parents('tr') ).data();
						
						rec_id = datas[0];
						
						$('#add_rec_form').attr('action', "<?php echo base_url();?>c_ets/delete_record?rec_id="+rec_id+"").submit();
				});
				
				$('#add_rec_btn').on('click',function(){
					$('#submit_btn').show();
					$('#update_btn').hide();
					$('#act_header').text('Add Record');
					$('#add_rec_form input, select, textarea').prop('disabled', false);
					$('#add_rec_form input[type="input"], select, textarea').each(function() {
							$(this).val('');
					});
					$('#add_rec').modal('show');
				});
				
				$('#submit_btn').button().on('click', function(e) {
					
					
								var error = '';
								/* var files = $('#files')[0].files;
								var form_data = new FormData(); */
								var isValid = true;
								var x = '';
								
								if($('#app_type').val()==1){
									x = '#add_rec_form input[type="input"], select[name="app_type"], select[name="emp_id"], textarea';
								}
								else{
									x = '#add_rec_form input[type="input"], select';
								}
										$(x).each(function() {
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
										else
										{
										 /*  if(files.length!=''){
											  for(var count = 0; count<files.length; count++)
													  {
														   var name = files[count].name;
														   var extension = name.split('.').pop().toLowerCase();
														   if(jQuery.inArray(extension, ['pdf']) == -1)
															   {
																if(count!=0){error = count+" invalid file attached. Please attach PDF file(s) only."}
																else{error = "Invalid file attached. Please attach PDF file(s) only."}
															   }
															else
																{
																form_data.append("files[]", files[count]);
															   }
													  }
										  }else {error = "No PDF file(s) attached.";} */
										}	
										
								  if(error == '')
										  {
											  $.ajax({ 
													type: "POST", 
													url: "<?php echo base_url();?>c_ets/put_record",
													data: $("#add_rec_form").serialize(),
													success: function(data){
														
															$(location).attr('href',"<?php echo base_url();?>c_ets/rec_list");
															
															/* $.ajax({
																url:"<?php echo base_url(); ?>c_dts/upload?doc_no="+doc_no+"",
																method:"POST",
																data:form_data,
																contentType:false,
																cache:false,
																processData:false,
																beforeSend:function(){
																 $('#up_msg').html('<center><table><tr><td><label style="color:#009999;">Uploading file</label></td> <td><img src="<?php echo base_url();?>ext_lib/images/load_logo.gif" alt="" style="height:50px;margin:0" /></td></tr></table></center>').dialog({
																		title: 'Please wait',
																		resizable: false,
																		width: 500,
																		modal: true,
																		open: function(event, ui) {$(".ui-dialog-titlebar-close", ui.dialog | ui).hide();},
																	});
																},
																success:function(data)
																{
																	$('#up_msg').dialog('close');
																	$(location).attr('href',"<?php echo base_url();?>c_dts/record_page?trigg=4");
																	
																} 
														   });*/
															
													}
											  });
											  
											   
											   
											   
										  }
								  else
								  {
									$('#up_msg').html('<label style="color:red;border: 1px solid red;padding:5px;"><b>'+error+'</b></label>').show().delay(2000).fadeOut('slow');
								  }	  
				
			});
			
			$('input, select, textarea').on('input change',function(){
				$(this).css({
					"border": "",
					"background": ""
				});
			});
			
			$('#emp_id').on('change',function(){
				var emp_id = $(this).val();
				$.ajax({ 
						type: "POST", 
						url: "<?php echo base_url();?>c_ets/get_pos?emp_id="+emp_id+"",
						success: function(data){
								$('#position').val(data);
						}
				  });
			});
			
			$('#app_type').on('change',function(){
				if($(this).val()==2){
					$('#tol_sec').show();
					$('#purp_sec').hide();
				}
				else{
					$('#tol_sec').hide();
					$('#purp_sec').show();
					$('#tol').val('');
				}
			});
			
			
			
	});
	</script>
