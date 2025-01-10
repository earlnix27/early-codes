			<div class="modal fade" id="addWorkExp" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel2">Add Work Experience</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;width:90%;margin-left:40px">
					<form id="workexp_form" name="workexp_form" method="POST">	
					
						<input type="hidden" name="app_code" id="app_code">
						<input type="hidden" name="ces_id" id="ces_id">
						<div class="row">
							<div class="col-sm-3">Position/Designation</div>
							<div class="col-sm-9"><input type="text" name="pos_desig" id="pos_desig" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-3">Date From</div>
							<div class="col-sm-3"><input type="date" name="we_date_from" id="we_date_from" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-3">Date To</div>
							<div class="col-sm-3"><input type="date" name="we_date_to" id="we_date_to" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-3">No. of Years</div>
							<div class="col-sm-3"><input type="text" name="we_no_yrs" id="we_no_yrs" class="form-control form-control-sm"></div>
						</div><br>
						
					
					</form>
				 </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-warning" id="updt_workexp_data"><i class="fa fa-plus" aria-hidden="true"></i> Update data</button>
					<button type="button" class="btn btn-success" id="add_workexp_data"><i class="fa fa-plus" aria-hidden="true"></i> Add data</button>
				  </div>
				</div>
			  </div>
			</div>
			
			
			
			<div class="modal fade" id="addTrainProg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Training Programs</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;width:90%;margin-left:40px">
					<form id="trainprog_form" name="trainprog_form" method="POST">	
					
						<input type="hidden" name="app_code2" id="app_code2">
						<input type="hidden" name="ces_id2" id="ces_id2">
						<div class="row">
							<div class="col-sm-3">Training Title</div>
							<div class="col-sm-9"><input type="text" name="train_title" id="train_title" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-3">Date From</div>
							<div class="col-sm-3"><input type="date" name="tp_date_from" id="tp_date_from" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-3">Date To</div>
							<div class="col-sm-3"><input type="date" name="tp_date_to" id="tp_date_to" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-3">No. of Hours</div>
							<div class="col-sm-3"><input type="text" name="tp_no_hrs" id="tp_no_hrs" class="form-control form-control-sm"></div>
						</div><br>
						
					
					</form>
				 </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-warning" id="updt_trainprog_data"><i class="fa fa-plus" aria-hidden="true"></i> Update data</button>
					<button type="button" class="btn btn-success" id="add_trainprog_data"><i class="fa fa-plus" aria-hidden="true"></i> Add data</button>
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
				<li class="breadcrumb-item active" aria-current="page">Selection</li>
				<li class="breadcrumb-item active" aria-current="page">Candidates Evaluation Sheet</li>
			  </ol>
			</nav>
			<h3 style="text-align:left">Candidates Evaluation Sheet</h3>
			<hr>
			
			
			<div style="text-align:left;padding:20px;background-color:#f5f5f5;border-radius: 10px;">
				<div class="row" style="text-align:left;margin-bottom:20px">
					<div class="col-sm-6"></div>
					<div class="col-sm-6" style="padding-left:100px"><b>QUALIFICATION STANDARDS</b></div>
				</div>
				<div class="row" style="text-align:left;margin-bottom:20px">
					<div class="col-sm-2" style="padding-left:30px">Place of Vacancy</div>
					<div class="col-sm-4">
						<select class="vac_place form-select form-select-sm" id="vac_place" name="vac_place">
							<option value="">-Select-</option>
							<?php foreach($vac_place as $vp):?>
								<option value="<?php echo $vp->place_assignment;?>"><?php echo $vp->place_assignment;?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="col-sm-2" style="padding-left:100px">Education</div>
					<div class="col-sm-4"><p id="education"></p></div>
				</div>
				<div class="row" style="text-align:left;margin-bottom:20px">
					<div class="col-sm-2" style="padding-left:30px">Position/Salary Grade</div>
					<div class="col-sm-4">
						<select class="vac_position form-select form-select-sm" id="vac_position" name="vac_position">
							<option value="">-Select-</option>							
						</select>
					</div>
					<div class="col-sm-2" style="padding-left:100px">Training</div>
					<div class="col-sm-4"><p id="training"></p></div>
				</div>
				<div class="row" style="text-align:left;margin-bottom:20px">
					<div class="col-sm-2" style="padding-left:30px">Salary Grade</div>
					<div class="col-sm-4"><span id="sjp_grade"></span></div>
					<div class="col-sm-2" style="padding-left:100px">Experience</div>
					<div class="col-sm-4"><p id="experience"></p></div>
				</div>
				<div class="row" style="text-align:left;margin-bottom:20px">
					<div class="col-sm-2" style="padding-left:30px">No. of Vacant Positions</div>
					<div class="col-sm-4"><span id="count_pos"></span></div>
					<div class="col-sm-2" style="padding-left:100px">Eligibility</div>
					<div class="col-sm-4"><p id="eligibility"></p></div>
				</div>
				
			</div>	
				<hr>
				
				<div class="row" style="text-align:left;margin-bottom:20px">
					<div class="col-sm-2" style="padding-left:30px"><b>Name of Applicant</b></div>
					<div class="col-sm-4">
						<select class="applicant_code form-select form-select-sm" id="applicant_code" name="applicant_code">
							<option value="">-Select-</option>							
						</select>
					</div>
					<div class="col-sm-6"><button type="button" class="btn btn-sm btn-outline-danger" id="ces_form_btn" style="float:right"><span id="btn_label"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Generate CES Sheet</span></button></div>
				</div>
				
				<br>
				
				
			<div id="candidate_sec">	
				<div class="row" style="text-align:left;">
					
					<div class="row">
						<div class="col-sm-2" style="text-align:center;"><i>(<span id="app_no"></span>)</i></div>
						<div class="col-sm-5"><div style="float:left"><b>PERSONAL INFORMATION</b></div></div>
						<div class="col-sm-5"><div style="float:left"><b>OTHER INFORMATION</b></div></div>
					</div>
					<br>
					<br>
					
					<div class="row">
						<div class="col-sm-2">
							<div class="row" style="text-align:center">
								<div class="col-sm-12"><div id="app_photo"></div></div>
							</div>
						</div>
						<div class="col-sm-5">					
							<div class="row">
								<div class="col-sm-4" style="padding-left:30px"><b>Name</b></div><div class="col-sm-8">: <span id="app_name"></span></div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="padding-left:30px"><b>Date of Birth</b></div><div class="col-sm-8">: <span id="birth_date"></span></div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="padding-left:30px"><b>Place of Birth</b></div><div class="col-sm-8">: <span id="birth_place"></span></div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="padding-left:30px"><b>Age</b></div><div class="col-sm-8">: <span id="age"></span></div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="padding-left:30px"><b>Civil Status</b></div><div class="col-sm-8">: <span id="civil_stat"></span></div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="padding-left:30px"><b>Mobile No.</b></div><div class="col-sm-8">: <span id="mobile_no"></span></div>
							</div>
							<div class="row">
								<div class="col-sm-4" style="padding-left:30px"><b>Email Address</b></div><div class="col-sm-8">: <span id="email_add"></span></div>
							</div>
							
						</div>
					
					<div class="col-sm-5">
					
						<div class="row">
							<div class="col-sm-4" style="padding-left:30px"><b>Educational Attainment</b></div><div class="col-sm-8"><span id="education_attainment"></span></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4" style="padding-left:30px"><b>Eligibility</b></div><div class="col-sm-8"><span id="app_eligibility"></span></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4" style="padding-left:30px"><b>Award(s)</b></div><div class="col-sm-8"><span id="app_awards"></span></div>
						</div><br>
					
					</div>
				</div>
				</div>
				
				<br>
				<br>
				
				<div class="row" style="text-align:left">
					<div class="col-sm-5"><b>ADDITIONAL DETAILS</b></div>
				</div>
				<br>
				<div class="row" style="text-align:left">
					
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4" style="padding-left:30px"><b>Present Position</b></div><div class="col-sm-7"><input type="text"  id="ces_present_pos" name="ces_present_pos" class="ces_present_pos form-control form-control-sm"></div>
						</div>
						<!--
						<div class="row">	
							<div class="col-sm-4" style="padding-left:30px"><b>PES Rating</b></div><div class="col-sm-3"><input type="text"  id="ces_pes_rate" name="ces_pes_rate" class="ces_pes_rate form-control form-control-sm"></div>
						</div>
						-->
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4" style="padding-left:30px"><b>Other Information</b></div><div class="col-sm-8"><textarea class="ces_other_info form-control" name="ces_other_info"  id="ces_other_info" rows="4"></textarea></div>
						</div>
					</div>
				</div>
				
				<br>
				<br>
				
				<div style="float:left;margin-bottom:-100px;z-index:1000">
				<div style="float:left"><b>PROFESSIONAL/WORK EXPERIENCE</b></div>
				<div style="float:left;margin-left:20px"><button type="button" id="add_workexp" class="btn btn-outline-success btn-sm" style="float:left"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></div>
				</div>
				
				<table id="pwe_tbl" class="display cell-border" cellspacing="0" data-page-length='20' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						
						<tr>
							<th>ces_id</th>
							<th>Position/Designation</th>
							<th>From</th>
							<th>To</th>
							<th>No. of Years</th>
							<th>Action</th>
						</tr>
					</thead>
				
				</table>		  
				
				<br><br><br>
				
				<div style="float:left;margin-bottom:-100px;z-index:1000">
				<div style="float:left"><b>TRAINING PROGRAMS ATTENDED</b></div>
				<div style="float:left;margin-left:20px"><button type="button" id="add_trainprog" class="btn btn-outline-success btn-sm" style="float:left"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></div>
				</div>
				
				<table id="tpa_tbl" class="display cell-border" cellspacing="0" data-page-length='20' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						
						<tr>
							<th>ces_id</th>
							<th>Training Title</th>
							<th>From</th>
							<th>To</th>
							<th>No. of Hours</th>
							<th>Action</th>
						</tr>
					</thead>
				
				</table>		  
		</div>
	
	</div>	
		
		<script type="text/javascript">
		$(document).ready(function(){	
		
			
			$('#candidate_sec').hide();
			
			var pwe_tbl = $('#pwe_tbl').DataTable({
				
					"processing":true,
					"serverSide":true,
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_pwe_data',
						"type": "POST",
						"data": function (d) {
							return $.extend({},d,{
								"applicant_code":$('#applicant_code').val(),
							});
						}
					 },
					
					'columns': [
						 { data: 'ces_id' },
						 { data: 'description' },
						 { data: 'date_from' },
						 { data: 'date_to' },
						 { data: 'uom' },
						 { data: 'act_btn' },
					 ],
					 
					//"bLengthChange": true,
					"dom": 'ftip',
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
					
					{ "width": "15%", "targets": [2,3,4,5] },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [2,3,4,5],
						"className": "text-center",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 2, 'desc' ] ).draw();
			
			
			var tpa_tbl = $('#tpa_tbl').DataTable({
				
					"processing":true,
					"serverSide":true,
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_tpa_data',
						"type": "POST",
						"data": function (d) {
							return $.extend({},d,{
								"applicant_code":$('#applicant_code').val(),
							});
						}
					 },
					
					'columns': [
						 { data: 'ces_id' },
						 { data: 'description' },
						 { data: 'date_from' },
						 { data: 'date_to' },
						 { data: 'uom' },
						 { data: 'act_btn' },
					 ],
					 
					//"bLengthChange": true,
					"dom": 'ftip',
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
					
					{ "width": "15%", "targets": [2,3,4,5] },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [2,3,4,5],
						"className": "text-center",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 2, 'desc' ] ).draw();
			
		
		
			$(document).on("change", "#vac_place" , function(e){
				
				$('#vac_position').find('option').remove();
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_vac_positions",
					method:"POST",
					dataType: 'json',
					data:{'vac_place': $(this).val()},
					success: function(data) {
						
						$('#candidate_sec').hide();
						
						$('#vac_position').append('<option value="">-Select-</option>');
						$.each(data,function(key, value){
							$('#vac_position').append('<option value="' + value['position_title'] + '">' + value['position_title'] + '</option>');
						});
						
						$('#sjp_grade').text('');
						$('#count_pos').text('');
						$('#education').text('');
						$('#training').text('');
						$('#experience').text('');
						$('#eligibility').text('');
						pwe_tbl.draw();
						tpa_tbl.draw();
					}
				});
				
			});
		
		
		
		
		
			$(document).on("change", "#vac_position" , function(e){
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_vacant_pos_details",
					method:"POST",
					dataType: 'json',
					data:{'position_title': $(this).val()},
					success: function(data) {
						
						$('#candidate_sec').hide();
						
						$('#sjp_grade').text(data[0]['sjp_grade']);
						$('#education').text(data[0]['education']);
						$('#training').text(data[0]['training']);
						$('#experience').text(data[0]['experience']);
						$('#eligibility').text(data[0]['eligibility']);
						pwe_tbl.draw();
						tpa_tbl.draw();
					}
				});
				
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_no_posperoff",
					method:"POST",
					dataType: 'json',
					data:{'position_title': $(this).val(), 'place_assignment': $('#vac_place').val()},
					success: function(data) {
						$('#count_pos').text(data[0]['count_pos']);
						
					}
				});
				
				
				$('#applicant_code').find('option').remove();
					$.ajax({
						url:"<?php echo base_url(); ?>c_phrms/get_ces_candidate",
						method:"POST",
						dataType: 'json',
						data:{'vac_position': $('#vac_position').val(), 'vac_place': $('#vac_place').val()},
						success: function(data) {
							
							$('#applicant_code').append('<option value="">-Select-</option>');
							$.each(data,function(key, value){
								$('#applicant_code').append('<option value="' + value['applicant_code'] + '">' + value['surname'].toUpperCase()+', '+value['firstname'].toUpperCase()+' '+value['middlename'].toUpperCase() + '</option>');
							});
							
						}
					});
				
				
			});
			
			
			
			$(document).on("change", "#applicant_code" , function(e){
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_candidate_details",
					method:"POST",
					dataType: 'json',
					data:{'app_code': $(this).val()},
					success: function(data) {
											
						var dob = new Date(data[0]['birth_date']);
						var dateFormatted = new Intl.DateTimeFormat("en-US", {
						  year: "numeric",
						  month: "2-digit",
						  day: "2-digit"
						}).format(dob);
						
						
						$('#app_code').val(data[0]['applicant_code']);
						$('#app_code2').val(data[0]['applicant_code']);
						$('#app_no').text(data[0]['applicant_code']);
						$('#app_name').text(data[0]['surname'].toUpperCase()+', '+data[0]['firstname'].toUpperCase()+' '+data[0]['middlename'].toUpperCase());
						$('#birth_date').text(dateFormatted);
						$('#birth_place').text(data[0]['birth_place']);
						$('#age').text(data[0]['age']);
						$('#civil_stat').text(data[0]['civil_stat']);
						$('#mobile_no').text(data[0]['mobile_no']);
						$('#email_add').text(data[0]['email_add']);
						$('#ces_present_pos').val(data[0]['ces_present_pos']);
						//$('#ces_pes_rate').val(data[0]['ces_pes_rate']);
						$('#ces_other_info').val(data[0]['ces_other_info']);
						
						
						var app_educ_attain = $.parseJSON(data[0]['education_attainment']);
						var app_elig = $.parseJSON(data[0]['eligibility']);
						var app_awards = $.parseJSON(data[0]['na_awards']);
						
						$('#education_attainment').find('span, br').remove();
						$.each(app_educ_attain,function(key, value){
							$('#education_attainment').append('<span>: '+value['degree_course']+' ('+value['year_grad']+')</span><br>');
						});
						
						$('#app_eligibility').find('span, br').remove();
						$.each(app_elig,function(key, value){
							$('#app_eligibility').append('<span>: '+value['eligibility_type']+' ('+value['elig_profession'].toUpperCase()+')</span><br>');
						});
						
						$('#app_awards').find('span, br').remove();
						$.each(app_awards,function(key, value){
							
							if(value['date_conferm']!=''){	
								var dc = new Date(value['date_conferm']);
								var date_conferm = new Intl.DateTimeFormat("en-US", {
								  year: "numeric",
								  month: "2-digit",
								  day: "2-digit"
								}).format(dc);
								
								$('#app_awards').append('<span>: '+value['award_title']+' ('+date_conferm+')</span><br>');
							}else{
								$('#app_awards').append('<span>: None');
							}
							
						});
						
						
						$('#app_photo').find('img').remove();
						$('#app_photo').append('<img src="<?php echo base_url();?>uploads/app_docs/'+data[0]['applicant_code']+'/'+data[0]['photo_file']+'" style="width:5cm;height:5.5cm;object-fit:cover;background-size:cover;background-position:center;">');
						
						pwe_tbl.draw();
						tpa_tbl.draw();
						
						$('#candidate_sec').show();
					}
				});
				
			});
			
			
			$(document).on("change", "#we_date_from, #we_date_to" , function(e){
					
					fromDate = new Date($('#we_date_from').val());
					toDate = new Date($('#we_date_to').val());
					
					
					var diff = toDate.getTime() - fromDate.getTime();
					
					var yrDate = new Date(diff); 
					var years = Math.abs(yrDate.getUTCFullYear() - 1970);
					var months = Math.abs(yrDate.getUTCMonth());
					
					var ave_months = parseFloat(((years*12)+months)/12).toFixed(4);
					
					if(isNaN(ave_months)){	
						//console.log(parseFloat(((years*12)+months)/12).toFixed(4));
					}else{
						$('#we_no_yrs').val(ave_months);
					}
			});
			
			
			
		$(document).on("click", "#add_workexp" , function(e){
			
				if($('#applicant_code').val()==''){
					Swal.fire({
						text: "Please select an applicant. Thank you!",
						icon: "error",
					});
				}else{
					$('#pos_desig').val('');
					$('#we_date_from').val('');
					$('#we_date_to').val('');
					$('#we_no_yrs').val('');
					$('#exampleModalLabel2').text('Add Work Experience');
					$('#updt_workexp_data').hide();
					$('#add_workexp_data').show();
					$('#addWorkExp').modal('show');
				}
			
		});	
			
			
			
			$(document).on("change", "#tp_date_to" , function(e){
					
					fromDate = new Date($('#tp_date_from').val());
					toDate = new Date($('#tp_date_to').val());
					
					var diff = toDate.getTime() - fromDate.getTime();
					var days = Math.abs(diff/(1000 * 3600 * 24));
					
					$('#tp_no_hrs').val(days*8);
			});
			
		$(document).on("click", "#add_trainprog" , function(e){
			
				if($('#applicant_code').val()==''){
					Swal.fire({
						text: "Please select an applicant. Thank you!",
						icon: "error",
					});
				}else{
					$('#train_title').val('');
					$('#tp_date_from').val('');
					$('#tp_date_to').val('');
					$('#tp_no_hrs').val('');
					$('#exampleModalLabel').text('Add Training Program');
					$('#updt_trainprog_data').hide();
					$('#add_trainprog_data').show();
					$('#addTrainProg').modal('show');
				}
			
		});
			
			
		
		
		$(document).on("click", "#add_workexp_data" , function(e){
								  
					var app_code = '';
					var error = '';
					var form_data = new FormData();
					var isValid = true;
							

							$('#workexp_form input[name="pos_desig"], input[name="we_date_from"], input[name="we_date_to"], input[name="we_no_yrs"]').each(function() {
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
										url: "<?php echo base_url();?>c_phrms/save_workexp",
										data: $("#workexp_form").serialize(),
										success: function(data){
											
											$('#pos_desig').val('');
											$('#we_date_from').val('');
											$('#we_date_to').val('');
											$('#we_no_yrs').val('');
											pwe_tbl.draw();
										
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
			
			
			$(document).on("click", "#add_trainprog_data" , function(e){
								  
					var app_code = '';
					var error = '';
					var form_data = new FormData();
					var isValid = true;
							

							$('#trainprog_form input[name="train_title"], input[name="tp_date_from"], input[name="tp_date_to"], input[name="tp_no_hrs"]').each(function() {
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
										url: "<?php echo base_url();?>c_phrms/save_trainprog",
										data: $("#trainprog_form").serialize(),
										success: function(data){
											
											$('#train_title').val('');
											$('#tp_date_from').val('');
											$('#tp_date_to').val('');
											$('#tp_no_hrs').val('');
											tpa_tbl.draw();
										
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
				
				
			$(document).on("click", ".edit_workexp" , function(e){
					
					var ces_id = '';
					var data = pwe_tbl.row(e.target.closest('tr')).data();
					
					ces_id = data['ces_id'];
					
					$.ajax({
						url:"<?php echo base_url(); ?>c_phrms/get_ces_workexp/"+ces_id+"",
						method:"GET",
						dataType: 'json',
						success: function(data) {
							
							$('#ces_id').val(data[0]['ces_id']);
							$('#pos_desig').val(data[0]['description']);
							$('#we_date_from').val(data[0]['date_from']);
							$('#we_date_to').val(data[0]['date_to']);
							$('#we_no_yrs').val(data[0]['uom']);
							$('#exampleModalLabel2').text('Update Work Experience');
							$('#updt_workexp_data').show();
							$('#add_workexp_data').hide();
							$('#addWorkExp').modal('show');
						
						   
						}
					});
			
			});
				
				
			$(document).on("click", ".edit_trainprog" , function(e){
					
					var ces_id = '';
					var data = tpa_tbl.row(e.target.closest('tr')).data();
					
					ces_id = data['ces_id'];
					
					$.ajax({
						url:"<?php echo base_url(); ?>c_phrms/get_ces_workexp/"+ces_id+"",
						method:"GET",
						dataType: 'json',
						success: function(data) {
							
							$('#ces_id2').val(data[0]['ces_id']);
							$('#train_title').val(data[0]['description']);
							$('#tp_date_from').val(data[0]['date_from']);
							$('#tp_date_to').val(data[0]['date_to']);
							$('#tp_no_hrs').val(data[0]['uom']);
							$('#exampleModalLabel').text('Update Training Program');
							$('#updt_trainprog_data').show();
							$('#add_trainprog_data').hide();
							$('#addTrainProg').modal('show');
						
						   
						}
					});
			
			});
			
			$(document).on("click", "#updt_workexp_data" , function(e){
								  
					var ces_id = $('#ces_id').val();
					var error = '';
					var form_data = new FormData();
					var isValid = true;
							

							$('#workexp_form input[name="pos_desig"], input[name="we_date_from"], input[name="we_date_to"], input[name="we_no_yrs"]').each(function() {
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
										url: "<?php echo base_url();?>c_phrms/update_workexp/"+ces_id+"",
										data: $("#workexp_form").serialize(),
										success: function(data){
											
											$('#addWorkExp').modal('hide');
											pwe_tbl.draw();
										
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
			
			$(document).on("click", "#updt_trainprog_data" , function(e){
								  
					var ces_id = $('#ces_id2').val();
					var error = '';
					var form_data = new FormData();
					var isValid = true;
							

							$('#trainprog_form input[name="train_title"], input[name="tp_date_from"], input[name="tp_date_to"], input[name="tp_no_hrs"]').each(function() {
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
										url: "<?php echo base_url();?>c_phrms/update_trainprog/"+ces_id+"",
										data: $("#trainprog_form").serialize(),
										success: function(data){
											
											$('#addTrainProg').modal('hide');
											tpa_tbl.draw();
										
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
			
			

			$(document).on("click", ".delete_workexp" , function(e){
				var ces_id = '';
				var data = pwe_tbl.row(e.target.closest('tr')).data();
				
				//console.log(data['application_no']);
				ces_id = data['ces_id'];
				
				
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
							url:"<?php echo base_url(); ?>c_phrms/delete_workexp/"+ces_id+"",
							method:"POST",
							contentType:false,
							cache:false,
							processData:false,
							success: function(data) {
								
								pwe_tbl.draw();
							   
							}
						})
				  }
				})
				
			});

			$(document).on("click", ".delete_trainprog" , function(e){
				var ces_id = '';
				var data = tpa_tbl.row(e.target.closest('tr')).data();
				
				//console.log(data['application_no']);
				ces_id = data['ces_id'];
				
				
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
							url:"<?php echo base_url(); ?>c_phrms/delete_trainprog/"+ces_id+"",
							method:"POST",
							contentType:false,
							cache:false,
							processData:false,
							success: function(data) {
								
								tpa_tbl.draw();
							   
							}
						})
				  }
				})
				
			});
			
			
			$(document).on("change", "#ces_present_pos, #ces_other_info" , function(e){
				
				var ids = $(this).attr('id');
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/update_ces_inputs",
					method:"POST",
					data:{'applicant_code': $('#applicant_code').val(), 'input_val': $(this).val(), 'input_name': $(this).attr('id')},
					success: function(data) {
					
						$('#'+ids).after( "<i class='notif' style='color:green;font-size:12px;font-weight:bold'>Updated!</i>");
						$('.notif').delay(3000).fadeOut('slow');
						
					}
				});
				
			});
				
			$(document).on("click", "#ces_form_btn" , function(){
				
				var app_code = $('#applicant_code').val();
				
				if(app_code!=''){
					window.open("<?php echo base_url();?>c_phrms/ces/"+app_code, '_blank');
				}else{
					Swal.fire({
						text: "Please select Name of Applicant!",
						icon: "error",
					});
				}
				
				
					
			});
		
		
		});
		</script>
		
		<style>
			
			table th{
				border:1px solid #fff;
				font-size:14px;
			}
			
			table td{
				vertical-align:top !important;
			}
			
			tbody{
				font-size:14px;
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
			
			.dataTables_filter input {
				border-width:0px 0px 1px 0px;
				margin-bottom: 20px;
				width:300px;
			}
			
			.dataTables_wrapper{
				position: static;
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