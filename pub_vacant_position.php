		<div class="modal fade" id="addPublication" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered modal-md modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel2">Add Publication Title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;width:90%;margin-left:40px">
					<form id="publication_form" name="publication_form" method="POST">	
					
						<input type="hidden" name="pub_id" id="pub_id">
						<div class="row">
							<div class="col-sm-2">Title</div>
							<div class="col-sm-10"><input type="text" name="publication_title" id="publication_title" class="form-control form-control-sm"></div>
						</div><br>
						
					
					</form>
				 </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-success" id="save_publication">Add Publication</button>
				  </div>
				</div>
			  </div>
			</div>
		
		
		
		<div class="modal fade" id="addPosition" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Publication of Vacant Positions</h5>
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
							<div class="col-sm-4">Plantilla Item No.</div>
							<div class="col-sm-8">
								<select class="plantilla_item_no form-select form-select-sm" id="plantilla_item_no" name="plantilla_item_no">
									<option value="">-Select Office-</option>
								</select>
							</div>
						</div>	<br>
						<div class="row">
							<div class="col-sm-4">Salary/Job/Pay Grade</div>
							<div class="col-sm-2"><input type="text" name="sjp_grade" id="sjp_grade" class="form-control form-control-sm"></div>
							
							<div class="col-sm-3" style="text-align:right">Monthly Salary</div>
							<div class="col-sm-3"><input type="text" name="monthly_salary" id="monthly_salary" class="form-control form-control-sm" placeholder="0.00"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Place of Assignment</div>
							<div class="col-sm-8"><input type="text" name="place_assignment" id="place_assignment" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Chief, Personnel Section</div>
							<div class="col-sm-8"><input type="text" name="chief_persec" id="chief_persec" value="<?php $signatory = $controller->get_ces_signatories('Head Secretariat'); echo strtoupper($signatory[0]->name); ?>" class="form-control form-control-sm"></div>
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
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:90%;margin-bottom:10px !important">
	
	  
	<br>
			
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>c_phrms/main_page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Recruitment</li>
				<li class="breadcrumb-item active" aria-current="page">Publication of Vacant Positions</li>
			  </ol>
			</nav>
			<h3 style="text-align:left">Publish Vacant Positions</h3>
			<hr>
			<br>
				
				
				<div class="row" style="text-align:left">
					<div class="col-sm-2" style="padding-left:30px">Publication Title</div>
					<div class="col-sm-3">
						<select class="pub_title form-select form-select-sm" id="pub_title" name="pub_title">
							<option value="">-Select-</option>							
						</select>
					</div>
					<div class="col-sm-2"><button type="button" id="add_publication" class="btn btn-outline-success btn-sm" style="float:left"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></div>
				</div><br>
				<div class="row" style="text-align:left">
					<div class="col-sm-2" style="padding-left:30px">CSC Submission</div>
					<div class="col-sm-3"><input type="date" name="date_csc" id="date_csc" class="form-control form-control-sm"></div>
				</div><br>
				<div class="row" style="text-align:left">
					<div class="col-sm-2" style="padding-left:30px">Deadline of Application</div>
					<div class="col-sm-3"><input type="date" name="date_deadline_app" id="date_deadline_app" class="form-control form-control-sm"></div>
				</div><br>
				<div class="row" style="text-align:left">
					<div class="col-sm-2" style="padding-left:30px">Date Published</div>
					<div class="col-sm-3"><input type="date" name="date_published" id="date_published" class="form-control form-control-sm"></div>
				</div><br>
				<div class="row" style="text-align:left">
					<div class="col-sm-2" style="padding-left:30px">Civil Service Form No. 9</div>
					<div class="col-sm-3"><a href="#" class="cs_form_btn btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF Form</a> <a href="#" class="cs_excel_btn btn btn-sm btn-outline-success"><i class="fa fa-table" aria-hidden="true"></i> Excel Form</a></div>
				</div>
				<br>
				<br>
				<br>
			
				<button type="button" id="add_position" class="btn btn-outline-success" style="float:left"><i class="fa fa-plus" aria-hidden="true"></i> Add Position</button>

				<table id="publish_position_record" class="display cell-border" cellspacing="0" data-page-length='20' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						<tr>
								<th>vp_id</th>
								<th>Position Title</th>
								<th>Plantilla Item No.</th>
								<th>Salary/Job/Pay Grade</th>
								<th>Monthly Salary</th>
								<th>Place of Assignment</th>
								<!--<th>CSC Submission</th>
								<th>Application Deadline</th>-->
								<th>Action</th>
						</tr>
					</thead>
				
				</table>		  
	
	
	</div>	
		
		<script type="text/javascript">
		$(document).ready(function(){	
		
		
		
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_publication",
					method:"POST",
					dataType: 'json',
					success: function(data) {
						
						$.each(data,function(key, value){
							$('#pub_title').append('<option value="' + value['pub_id'] + '">' + value['pub_title'] + '</option>');
						});
						
					}
				});
				
				
				var table = $('#publish_position_record').DataTable({
				
					"processing":true,
					"serverSide":true,
					'serverMethod': 'post',
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_pubpos_data',
						"type": "POST",
						"data": function (d) {
							return $.extend({},d,{
								"pub_id":$('#pub_id').val(),
							});
						}
					 },
					
					'columns': [
						 { data: 'vp_id' },
						 { data: 'position_title' },
						 { data: 'plantilla_item_no' },
						 { data: 'sjp_grade' },
						 { data: 'monthly_salary' },
						 { data: 'place_assignment' },
						 //{ data: 'date_sub_csc' },
						 //{ data: 'date_app_deadline' },
						 { data: 'action' },
					 ],
					 
					//"bLengthChange": true,
					"dom": '<"toolbar">ftip',
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
					
					{ "width": "30%", "targets": 1 },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [3,6],
						"className": "text-center",
					},
					{
						"targets": [4],
						"className": "text-right",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 0, 'desc' ] ).draw();
			
			
			
			$("#save_position").click(function(){ 
							  
					var vp_id = '';
					var pub_id = $('#pub_title').val();	
					var error = '';
					var form_data = new FormData();
					var isValid = true;
							

							$('#position_form input[type="text"], select[name="plantilla_item_no"], textarea').each(function() {
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
										url: "<?php echo base_url();?>c_phrms/save_position/"+pub_id+"",
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
					  else
					  {
						Swal.fire({
							text: error,
							icon: "warning",
						});

					 }	  
				  
		});
			
			$("#save_publication").click(function(){ 
							  
					var pub_id = '';
					var error = '';
					var form_data = new FormData();
					var isValid = true;
							

							$('#publication_form input[type="text"]').each(function() {
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
										url: "<?php echo base_url();?>c_phrms/save_publication",
										data: $("#publication_form").serialize(),
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
											
											pub_id = data;
										
										setTimeout(function(){
											
											Swal.fire({
												title: "Record successfully saved", 
												icon: "success",
											}).then( ( value )  => {
												
												$('#pub_title').find('option').remove();
												$.ajax({
													url:"<?php echo base_url(); ?>c_phrms/get_publication",
													method:"POST",
													dataType: 'json',
													success: function(data) {
														
														$('#pub_title').append('<option value="">-Select-</option>');
														$.each(data,function(key, value){
															$('#pub_title').append('<option value="' + value['pub_id'] + '">' + value['pub_title'] + '</option>');
														});
														
													}
												});
												
												$('#addPublication').modal('hide');
											});
										},2000); 

										
										}
								  });
							  }
					  // else
					  // {
						// Swal.fire({
							// text: error,
							// icon: "warning",
						// });

					 // }	  
				  
		});
		
		
		$(document).on("change", "#pub_title" , function(e){
			
			if($(this).val()!=''){		
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_publication_info",
					method:"POST",
					dataType: 'json',
					data:{'pub_id': $(this).val()},
					success: function(data) {
						
						$('#pub_id').val(data[0]['pub_id']);
						$('#date_csc').val(data[0]['date_csc']);
						$('#date_deadline_app').val(data[0]['date_deadline_app']);
						$('#date_published').val(data[0]['date_published']);
						table.draw(); 	
						
					}
				});
			}else{
				$("#pub_id").val('');
				$("#date_csc").val('');
				$("#date_deadline_app").val('');
				table.draw(); 
			}
			
			
		});
		
		$(document).on("change", "#date_csc, #date_deadline_app, #date_published" , function(e){
				
			var pub_id = $('#pub_title').val();			
			if(pub_id!=''){	
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/update_pub_dates",
					method:"POST",
					data:{'pub_id': pub_id, 'input_val': $(this).val(), 'input_name': $(this).attr('id')},
					success: function(data) {
						
					}
				});
			}else
			  {
				Swal.fire({
					text: "No publication title selected",
					icon: "error",
				});
			  }
		});
		
		
		
		$('text, select, textarea').on('input change',function(){
			$(this).css({
					"border": "",
					"background": ""
				});
		});
		
		$(document).on("change", "#monthly_salary" , function(){
			if (!( /^([0-9.,])+$/.test( $(this).val()))){
				$(this).val('');
			}
			$(this).formatCurrency({symbol:'', roundToDecimalPlace: 2 }); 
		});
		
		
		
		$(document).on("click", "#add_position" , function(e){
			var pub_id = $('#pub_title').val();			
			if(pub_id!=''){	
				$("#position_form").trigger('reset');
				$('#btn_label').text('Add Data');
				$('#addPosition').modal('show');
			}else
			  {
				Swal.fire({
					text: "No publication title selected",
					icon: "error",
				});
			  }
			
			
		});
		
		
		$(document).on("click", "#add_publication" , function(e){
			
			//$("#publication_form").trigger('reset');
			$('#addPublication').modal('show');
			
		});
		
		
		$(document).on("click", "a.edit_vp" , function(e){
				var vp_id = '';
				var data = table.row(e.target.closest('tr')).data();
				
				vp_id = data['vp_id'];
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_vacant_pos/"+vp_id+"",
					method:"GET",
					dataType: 'json',
					success: function(data) {
						
						//console.log(data[0]['position_title']);
						
						
						$('#vp_id').val(data[0]['vp_id']);
						$('#position_title').val(data[0]['position_title']);
						$('#plantilla_item_no').val(data[0]['plantilla_item_no']);
						$('#sjp_grade').val(data[0]['sjp_grade']);
						$('#monthly_salary').val(data[0]['monthly_salary']);
						$('#place_assignment').val(data[0]['place_assignment']);
						$('#chief_persec').val(data[0]['chief_persec']);
						$('#education').val(data[0]['education']);
						$('#training').val(data[0]['training']);
						$('#experience').val(data[0]['experience']);
						$('#eligibility').val(data[0]['eligibility']);
						$('#competency').val(data[0]['competency']);
						//$('#date_sub_csc').val(data[0]['date_sub_csc']);
						//$('#date_app_deadline').val(data[0]['date_app_deadline']);
						
						$('#btn_label').text('Update Data');
						$('#addPosition').modal('show');
					
					   
					}
				});
		
				
				
		});
		
		
		
		
		
		$(document).on("click", "a.delete_vp" , function(e){
				var vp_id = '';
				var data = table.row(e.target.closest('tr')).data();
				
				//console.log(data['application_no']);
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
							url:"<?php echo base_url(); ?>c_phrms/delete_vacant_pos/"+vp_id+"",
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
		
		
		
		
		$(document).on("keyup", "#position_title,#plantilla_item_no,#chief_persec" , function(e){
			
				$(this).val($(this).val().toUpperCase());
		});
		
		
		$(document).on("keyup", "#position_title" , function(e){
			
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_vacant_pos_db",
					method:"POST",
					dataType: 'json',
					data:{'position_title': $(this).val()},
					success: function(data) {
						
						var title_arr = data;
						var vac_pos = [];
						for (var i = 0; i < title_arr.length; i++) {
							vac_pos[i] = title_arr[i]['position_title'];
						}
						
						
						var auto_sub = vac_pos;
						$('#position_title').autocomplete({
							source: auto_sub,
							minLength: 4,
							select: function(event, ui){ 
								$.ajax({
									url:"<?php echo base_url(); ?>c_phrms/get_vacant_pos_details",
									method:"POST",
									dataType: 'json',
									data:{'position_title': ui['item']['value']},
									success: function(data) {
										console.log(data);
										
										$('#sjp_grade').val(data[0]['sjp_grade']);
										$('#monthly_salary').val(data[0]['monthly_salary']);
										$('#education').val(data[0]['education']);
										$('#training').val(data[0]['training']);
										$('#experience').val(data[0]['experience']);
										$('#eligibility').val(data[0]['eligibility']);
										$('#competency').val(data[0]['competency']);
										$('#place_assignment').val('');
										
									}
								});
								
								$('#plantilla_item_no').find('option').remove();
								$.ajax({
									url:"<?php echo base_url(); ?>c_phrms/get_plantilla_no",
									method:"POST",
									dataType: 'json',
									data:{'position_title': ui['item']['value']},
									success: function(data) {
										
										$('#plantilla_item_no').append('<option value="">-Select-</option>');
										$.each(data,function(key, value){
											
											$('#plantilla_item_no').append('<option value="' + value['item_number'] + '" class="' + value['place_vacancy'] + '">' + value['item_number'] + '</option>');
										});
										
									}
								});
								
								
							},
						});
						
					}
				});
		});
		
		
		$(document).on("click", "a.cs_form_btn" , function(e){
			
			var pub_id = $('#pub_title').val();			
			if(pub_id!=''){	
				window.open("<?php echo base_url();?>c_phrms/cs_form/"+pub_id+"",'_blank');
			}else
			  {
				Swal.fire({
					text: "No publication title selected",
					icon: "error",
				});
			  }
			
			
			//$(location).attr('href',"<?php echo base_url();?>c_phrms/view_examinee/"+data['u_id']+"");
			
		});
		
		$(document).on("click", "a.cs_excel_btn" , function(e){
			
			var pub_id = $('#pub_title').val();			
			if(pub_id!=''){	
				window.open("<?php echo base_url();?>c_phrms/cs_form_excel/"+pub_id+"",'_blank');
			}else
			  {
				Swal.fire({
					text: "No publication title selected",
					icon: "error",
				});
			  }
			
			
			//$(location).attr('href',"<?php echo base_url();?>c_phrms/view_examinee/"+data['u_id']+"");
			
		});
		
		$(document).on("change", "#plantilla_item_no" , function(e){
		
			
			$.ajax({
				url:"<?php echo base_url(); ?>c_phrms/get_plantilla_place",
				method:"POST",
				dataType: 'json',
				data:{'plantilla_item_no': $(this).val()},
				success: function(data) {
					
					$('#place_assignment').val(data[0]['place_vacancy'].toUpperCase());
					
				}
			});
			
				
		});
		
		
		});
		</script>
		
		<style>
			table th{
				border:1px solid #fff;
				font-size:14px;
				text-align: center !important;
			}
			
			a{
				text-decoration:none;
				color: black;
			}
		
			.ui-autocomplete {
			  z-index: 215000000 !important;
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
						
			.text-right{
				text-align:right;
			}
			
			.dataTables_filter input {
				border-width:0px 0px 1px 0px;
				margin-bottom: 20px;
				width:500px;
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