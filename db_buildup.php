			<div class="modal fade" id="addPosition" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Position</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;width:90%;margin-left:40px">
					<form id="position_form" name="position_form" method="POST">	
					
						<input type="hidden" name="vp_id" id="vp_id">
						
						<div class="row">
							<div class="col-sm-4">Position Title</div>
							<div class="col-sm-8"><input type="text" name="position_title" id="position_title" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Salary/Job/Pay Grade</div>
							<div class="col-sm-2"><input type="text" name="sjp_grade" id="sjp_grade" class="form-control form-control-sm"></div>
							
							<div class="col-sm-3" style="text-align:right">Monthly Salary</div>
							<div class="col-sm-3"><input type="text" name="monthly_salary" id="monthly_salary" class="form-control form-control-sm" placeholder="0.00"></div>
						</div><br>
						
						<br>
						<div class="row">
							<div class="col-sm-12"><b>QUALIFICATION STANDARDS</b></div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-4">Education</div>
							<div class="col-sm-8"><textarea class="form-control" name="education" id="education" rows="3"></textarea></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Training</div>
							<div class="col-sm-8"><textarea class="form-control" name="training" id="training" rows="3"></textarea></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Experience</div>
							<div class="col-sm-8"><textarea class="form-control" name="experience" id="experience" rows="3"></textarea></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Eligibility</div>
							<div class="col-sm-8"><textarea class="form-control" name="eligibility" id="eligibility" rows="3"></textarea></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Competency</div>
							<div class="col-sm-8"><textarea class="form-control" name="competency" id="competency" rows="3"></textarea></div>
						</div><br>
						<!--
						<div class="row">
							<div class="col-sm-4">Date <span>(for submission to CSC)</div>
							<div class="col-sm-4"><input type="date" name="date_sub_csc" id="date_sub_csc" class="form-control form-control-sm"></div>
						</div>
						<div class="row">
							<div class="col-sm-4">Date (deadline of application)</div>
							<div class="col-sm-4"><input type="date" name="date_app_deadline" id="date_app_deadline" class="form-control form-control-sm"></div>
						</div>
						-->
					
					</form>
				 </div>
				  <div class="modal-footer">
					<!--<button type="button" class="cancel_examinee btn btn-warning" onClick="" data-bs-dismiss="modal">Cancel</button>-->
					<button type="button" class="btn btn-success" id="save_position"><span id="btn_label">Add Position</span></button>
				  </div>
				</div>
			  </div>
			</div>
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:90%">
	
	
	<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>c_phrms/main_page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">DB Build-up</li>
	  </ol>
	</nav>
	<h3 style="text-align:left">Database Build-up</h3>
	<hr>
	
	<br>
	
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	  <li class="nav-item" role="presentation">
		<button class="nav-link active" id="signatories-tab" data-bs-toggle="pill" data-bs-target="#signatories" type="button"  role="tab" aria-controls="signatories" aria-selected="true">Signatories</button >
	  </li>
	  <li class="nav-item" role="presentation">
		<button  class="nav-link" id="pills-qualification_standards-tab" data-bs-toggle="pill" data-bs-target="#qualification_standards" type="button"  role="tab" aria-controls="qualification_standards" aria-selected="false">Qualification Standards</button >
	  </li>
	</ul>
	<hr style="border:1px solid #cdcdcd">
	
	<div class="tab-content" id="pills-tabContent">
			  
		  <div class="tab-pane fade show active" id="signatories" role="tabpanel" aria-labelledby="signatories-tab" style="text-align:left">
			
			<form id="signatory_form" name="signatory_form" method="POST">
			
					<table class="signatory_tbl" style="width:100%">
						<tr style="">
							<td style="border-width:0px;text-align:left;padding:10px 0px 40px 0px"><b>Prepared by:</b></td>
							<td style="border-width:0px;text-align:left;padding:10px 0px 40px 0px"><b>Checked and Verified by:</b></td>
						</tr>
					
						<tr>
							<td style="border-width:0px"><input type="text" name="secretariat" id="secretariat" value="<?php $signatory = $controller->get_ces_signatories('Secretariat'); echo $signatory[0]->name; ?>" class="sig_info" placeholder="Secretariat"></td>
							<td style="border-width:0px"><input type="text" name="head_sec" id="head_sec" value="<?php $signatory = $controller->get_ces_signatories('Head Secretariat'); echo $signatory[0]->name; ?>" class="sig_info" placeholder="Head Secretariat"></td>
							<td style="border-width:0px;"></td>
						</tr>
						<tr>
							<td style="border-width:0px"><input type="text" name="secretariat_pos" id="secretariat_pos" value="<?php $signatory = $controller->get_ces_signatories('Secretariat'); echo $signatory[0]->position; ?>" class="sig_info" placeholder="Secretariat"><br>Secretariat</td>
							<td style="border-width:0px"><input type="text" name="head_sec_pos" id="head_sec_pos" value="<?php $signatory = $controller->get_ces_signatories('Head Secretariat'); echo $signatory[0]->position; ?>" class="sig_info" placeholder="Head Secretariat"><br>Head Secretariat</td>
							<td style="border-width:0px;"></td>
						</tr>
					</table>
					
					
					<br>
					<br>
					<br>
					<p style="font-size:14px;"><b>Certified and Approved by:</b></p>
					<br>
					
					
					<table class="signatory_tbl" style="width:100%">
						<tr>
							<td style="border-width:0px"><input type="text" name="chairperson" id="chairperson" value="<?php $signatory = $controller->get_ces_signatories('Chairperson'); echo $signatory[0]->name; ?>" class="sig_info" placeholder="Chairperson"></td>
							<td style="border-width:0px"><input type="text" name="vice_chairperson" id="vice_chairperson" value="<?php $signatory = $controller->get_ces_signatories('Vice-Chairperson'); echo $signatory[0]->name; ?>" class="sig_info" placeholder="Vice-Chairperson"></td>
							<td style="border-width:0px"></td>
						</tr>
						<tr>
							<td style="border-width:0px"><input type="text" name="chairperson_pos" id="chairperson_pos" value="<?php $signatory = $controller->get_ces_signatories('Chairperson'); echo $signatory[0]->position; ?>" class="sig_info" placeholder="Chairperson"><br>Chairperson</td>
							<td style="border-width:0px"><input type="text" name="vice_chairperson_pos" id="vice_chairperson_pos" value="<?php $signatory = $controller->get_ces_signatories('Vice-Chairperson'); echo $signatory[0]->position; ?>" class="sig_info" placeholder="Vice-Chairperson"><br>Vice-Chairperson</td>
							<td style="border-width:0px"><i></i></td>
						</tr>
					</table>
					
					<br><br>
					
					<table class="signatory_tbl" style="width:100%">
						<tr>
							<td style="border-width:0px"><input type="text" name="member1" id="member1" value="<?php $signatory = $controller->get_ces_signatories('Member1'); echo $signatory[0]->name; ?>" class="sig_info" placeholder="Member1"></td>
							<td style="border-width:0px"><input type="text" name="member2" id="member2" value="<?php $signatory = $controller->get_ces_signatories('Member2'); echo $signatory[0]->name; ?>" class="sig_info" placeholder="Member2"></td>
							<td style="border-width:0px"><input type="text" name="member3" id="member3" value="<?php $signatory = $controller->get_ces_signatories('Member3'); echo $signatory[0]->name; ?>" class="sig_info" placeholder="Member3"></td>
						</tr>
						<tr>
							<td style="border-width:0px"><input type="text" name="member1_pos" id="member1_pos" value="<?php $signatory = $controller->get_ces_signatories('Member1'); echo $signatory[0]->position; ?>" class="sig_info" placeholder="Member1"><br>Member</td>
							<td style="border-width:0px"><input type="text" name="member2_pos" id="member2_pos" value="<?php $signatory = $controller->get_ces_signatories('Member2'); echo $signatory[0]->position; ?>" class="sig_info" placeholder="Member2"><br>Member</td>
							<td style="border-width:0px;"><input type="text" name="member3_pos" id="member3_pos" value="<?php $signatory = $controller->get_ces_signatories('Member3'); echo $signatory[0]->position; ?>" class="sig_info" placeholder="Member3"><br>Member</td>
						</tr>
					</table>
			</form>
			<br>
			
		  
		  </div>
		  
		  
		  <div class="tab-pane fade show" id="qualification_standards" role="tabpanel" aria-labelledby="qualification_standards-tab" style="text-align:left">
			
				<br>
				<?php if($this->session->userdata('role_log_name')!='Viewer'):?>
					<button type="button" id="add_position" class="btn btn-outline-success" style="float:left"><i class="fa fa-plus" aria-hidden="true"></i> Add Position</button>
				<?php endif;?>
				
				<table id="qs_tbl" class="display cell-border" cellspacing="0" data-page-length='20' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						
						<tr>
							<th>vp_id</th>
							<th>POSITION TITLE</th>
							<th>SALARY GRADE</th>
							<th>MONTHLY SALARY</th>
							<th>EDUCATION</th>
							<th>TRAINING</th>
							<th>EXPERIENCE</th>
							<th>ELIGIBILITY</th>
							<th>COMPETENCY</th>
							<th>ACTION</th>
						</tr>
				
					</thead>		
				
				</table>
		
		  
		  </div>
		  
	 </div>
	
	
	
	</div>	
		
		<script type="text/javascript">
		$(document).ready(function(){	
		
		
			var table = $('#qs_tbl').DataTable({
				
					"processing":true,
					"serverSide":true,
					'serverMethod': 'post',
					"ajax":"<?php echo base_url();?>c_phrms/get_qs_data",
					
					'columns': [
						 { data: 'vp_id' },
						 { data: 'position_title' },
						 { data: 'sjp_grade' },
						 { data: 'monthly_salary' },
						 { data: 'education' },
						 { data: 'training' },
						 { data: 'experience' },
						 { data: 'eligibility' },
						 { data: 'competency' },
						 { data: 'action' },
					 ],
					 
					//"bLengthChange": true,
					"dom": '<"toolbar">frtip',
					//"lengthMenu": [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
					"language": {
					"processing": '<div class="spinner"></div>',
					"sSearch": "",
					"searchPlaceholder": "Search record here . . . ",
					"decimal": ".",
					"thousands": ",",
					"loadingRecords": "Please wait - loading...",
					"lengthMenu": "Display _MENU_ Records",
					"zeroRecords": "No records found",
					//"info": "Page _PAGE_ of _PAGES_",
					"infoEmpty": "No records available",
					"infoFiltered": "(filtered from _MAX_ total records)"
				},
				"columnDefs": [
					
					//{ "width": "50%", "targets": 4 },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [9],
						"searchable": false,
						"orderable": false,
					},
					{
						"targets": [2,3,8,9],
						"className": "text-center",
					},
					
				],
			
				
			}).order( [ 0, 'asc' ] ).draw();
		
		
		
		
		
			$(document).on("change", "#signatory_form input" , function(e){
				
				var input_type = '';
				var input_id = $(this).attr('id');
				var input_name = $(this).attr('placeholder');
				var input_val = $(this).val();
				
				
				if(input_id=='secretariat' || input_id=='head_sec' || input_id=='chairperson' || input_id=='vice_chairperson' || input_id=='member1' || input_id=='member2' || input_id=='member3'){
					input_type = 'name';
				}else{
					input_type = 'position';
				}
				
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/update_signatory",
					method:"POST",
					data:{'input_type': input_type, 'input_val': input_val, 'input_name': input_name},
					success: function(data) {
						Swal.fire({
							title: "Signatories successfully updated", 
							icon: "success",
						}).then( ( value )  => {
							
						});
					}
				});
				
				
				
			});
			
			
			$(document).on("change", "#monthly_salary" , function(){
				if (!( /^([0-9.,])+$/.test( $(this).val()))){
					$(this).val('');
				}
				$(this).formatCurrency({symbol:'', roundToDecimalPlace: 2 }); 
			});
			
			
			$(document).on("click", "#add_position" , function(e){
				
					$("#position_form").trigger('reset');
					$('#btn_label').text('Add Data');
					$('#addPosition').modal('show');
				
			});
			
			
			$("#save_position").click(function(){ 
					  
				var vp_id = '';
				var error = '';
				var form_data = new FormData();
				var isValid = true;
						

						$('#position_form input[type="text"], textarea').each(function() {
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
						
						
						
						if (isValid == false){error = "Please fill out all required fields.";}
						
						
						
						
						
				  if(error == '')
						  {
							  $.ajax({ 
									type: "POST", 
									url: "<?php echo base_url();?>c_phrms/save_qs_position",
									data: $("#position_form").serialize(),
									beforeSend:function(){
														
										Swal.fire({
											title: "Please wait!",
											text: "Saving record...",
											icon: "warning",
											showConfirmButton: false,
											allowOutsideClick: false,
											allowEscapeKey: false,
											didOpen: () => {Swal.showLoading()},
										});
											
									},
									success: function(data){
										
										vp_id = data;
									
									setTimeout(function(){
										
										Swal.fire({
											title: "Record successfully saved", 
											icon: "success",
										}).then( ( value )  => {
											//location.reload();
											table.draw(); 
											
											$('#addPosition').modal('hide');
										});
									},2000); 

									
									}
							  });
						  }
				 
			  
			});
			
			$(document).on("click", "a.edit_vp" , function(e){
				var vp_id = '';
				var data = table.row(e.target.closest('tr')).data();
				
				vp_id = data['vp_id'];
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_qs_vacant_pos/"+vp_id+"",
					method:"GET",
					dataType: 'json',
					success: function(data) {
												
						$('#vp_id').val(data[0]['vp_id']);
						$('#position_title').val(data[0]['position_title']);
						$('#sjp_grade').val(data[0]['sjp_grade']);
						$('#monthly_salary').val(data[0]['monthly_salary']);
						$('#education').val(data[0]['education']);
						$('#training').val(data[0]['training']);
						$('#experience').val(data[0]['experience']);
						$('#eligibility').val(data[0]['eligibility']);
						$('#competency').val(data[0]['competency']);
						
						$('#btn_label').text('Update Data');
						$('#addPosition').modal('show');
					
					   
					}
				});
				
			});
			
			
			$(document).on("click", "a.delete_vp" , function(e){
				var vp_id = '';
				var data = table.row(e.target.closest('tr')).data();
				
				vp_id = data['vp_id'];
				
				Swal.fire({
				  title: 'Warning!',
				  text: "You are about to delete a record premanently, proceed?",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  cancelButtonText: 'Cancel',
				  confirmButtonText: 'Proceed',
				  reverseButtons: true,
				  
				}).then((result) => {
				  if (result.isConfirmed) {
					$.ajax({
							url:"<?php echo base_url(); ?>c_phrms/delete_qs_vacant_pos/"+vp_id+"",
							method:"POST",
							contentType:false,
							cache:false,
							processData:false,
							success: function(data) {
								
								Swal.fire({
									title: "Record successfully deleted", 
									icon: "success",
								}).then( ( value )  => {
									//window.location.reload();
									table.draw(); 
								});
							   
							}
						})
				  }
				})
				
			});
			
			
			
				
		});
		</script>
		
		<style>
			
			
			tbody{
				font-size:14px;
			}
			
			a{
				text-decoration:none;
				color: black;
			}
			
			.sig_info{
				text-align:center;
				width:250px;
				margin-top:5px;
			}
			
			.signatory_tbl td{
				font-size:14px;
				padding:0px;
				text-align:center;
			}
		
			.nav-pills .nav-link.active{
				background-color: #069e82;
			}
			
			.nav-link {
				color:black;
			}
						
			.text-center{
				text-align:center;
			}
			
			.dataTables_filter input {
				border-width:0px 0px 1px 0px;
				margin-bottom: 20px;
				width:300px;
			}
			
			
			.exam_group{
				width:200px
			}
			
			.row{
				margin-bottom:5px;
			}
			
			@keyframes spinner {
			  to {transform: rotate(360deg);}
			}
			 
			.spinner:before {
			  content: '';
			  box-sizing: border-box;
			  position: absolute;
			  top: 50%;
			  left: 50%;
			  width: 20px;
			  height: 20px;
			  margin-top: -10px;
			  margin-left: -10px;
			  border-radius: 50%;
			  border: 2px solid #ccc;
			  border-top-color: #333;
			  animation: spinner .6s linear infinite;
			}
			
		</style>