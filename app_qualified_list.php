			<div class="modal fade" id="addInfos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-md modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Qualified Applicants</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;width:90%;margin-left:40px">
					<form id="addinfo_form" name="addinfo_form" method="POST">	
						
						<div class="row">
							<div class="col-sm-4">Type of Advisory</div>
							<div class="col-sm-8">
								<select class="advi_type form-select form-select-sm" id="advi_type" name="advi_type">
									<option value="">-Select Type of Advisory-</option>
									<option value="1">Qualified Applicants</option>
									<option value="2">Examinees</option>
								</select>
							</div>
						</div><br>	
						<div class="row">
							<div class="col-sm-4">Type of List</div>
							<div class="col-sm-8">
								<select class="list_type form-select form-select-sm" id="list_type" name="list_type">
									<option value="">-Select Type of List-</option>
									<option value="1">HRMPSB</option>
									<option value="2">Publication</option>
								</select>
							</div>
						</div><br>	
						<div class="row">
							<div class="col-sm-4">Advisory No.</div>
							<div class="col-sm-8"><input type="text" name="advise_no" id="advise_no" class="form-control form-control-sm"></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Subtitle</div>
							<div class="col-sm-8"><textarea class="form-control" name="descript" id="descript" rows="3"></textarea></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Pre Statement</div>
							<div class="col-sm-8"><textarea class="form-control" name="pre_state" id="pre_state" rows="5">After the pre-assessment conducted on ____(Date)____, listed below are the names of the applications who are qualified to proceed to the next step of the recruitment, selection and placement activities, i.e. Pre-employment or Promotional Test or the Competency-Based Interview:</textarea></div>
						</div><br>
						<div class="row">
							<div class="col-sm-12" style="text-align:center;color:gray"><h4><i>(List of Qualified Applicants Section)</i></h4></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Post Statement</div>
							<div class="col-sm-8"><textarea class="form-control" name="post_state" id="post_state" rows="5">The HRMO Designate and HRMO Focal Persons shall notify the qualified applicants on the schedule of the Pre-employment and Promotional Test using the contact number and email address indicated in the applicant's Personal Data Sheet. Applicants who already passed the Pre-employmnet and Promotional Test shall wait for the schedule of the Competency-Based Interview.</textarea></div>
						</div><br>
					
					</form>
				 </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-outline-danger" id="gen_list"><span id="btn_label"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Generate PDF</span></button>
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
				<li class="breadcrumb-item active" aria-current="page">List of Qualified Applicants</li>
			  </ol>
			</nav>
			
			<div style="float:right">
				<a class="btn btn-sm btn-outline-primary" href="#" id="print_list"><i class="fa fa-print" aria-hidden="true"></i> <b>Print Qualified Applicants List</b></a>
			</div>
			
			<h3 style="text-align:left">List of Qualified Applicants</h3>
					
			<hr>
			
			
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
					<div class="col-sm-2" style="padding-left:30px">Position</div>
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
				<br>
				
				
					  
				
				<table id="publish_position_record" class="display cell-border" cellspacing="0" data-page-length='500' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						
						<tr>
							<th rowspan="2">app_id</th>
							<th rowspan="2">NO.</th>
							<th rowspan="2">CODE</th>
							<th colspan="3">APPLICANT NAME</th>
							<th rowspan="2">DEGREE/COURSE</th>
							<th rowspan="2">ELIGIBILITY</th>
							<th rowspan="2">RELEVANT TRAINING (in number of hours)</th>
							<th colspan="6">RELEVANT EXPERIENCE</th>
							<th rowspan="2">IPCR RATING</th>
							<th rowspan="2">REMARKS</th>
							<th rowspan="2">EXAM TO TAKE</th>
							<th rowspan="2">STATUS OF EXAM</th>
						</tr>
						<tr>
							<th>LAST NAME</th>
							<th>FIRST NAME</th>
							<th>MIDDLE NAME</th>
							<th>POSITION</th>
							<th>OFFICE</th>
							<th>EMPLOYMENT STATUS</th>
							<th>FROM</th>
							<th>TO</th>
							<th>NO. OF YEARS</th>
						</tr>
					</thead>
				
				</table>		  
	
	
	</div>	
		
		<script type="text/javascript">
		$(document).ready(function(){	
		
		
			var table = $('#publish_position_record').DataTable({
					"fixedColumns": {
						leftColumns: 6,
					},
					"scrollY": '500px',
					"scrollCollapse": true,
					"scrollX": true,
					"processing":true,
					"serverSide":true,
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_qualist_data',
						"type": "POST",
						"data": function (d) {
							return $.extend({},d,{
								"vac_position":$('#vac_position').val(),
								"vac_place":$('#vac_place').val(),
							});
						}
					 },
					
					'columns': [
						 { data: 'app_id' },
						 { data: 'app_no' },
						 { data: 'applicant_code' },
						 { data: 'surname' },
						 { data: 'firstname' },
						 { data: 'middlename' },
						 { data: 'education_attainment' },
						 { data: 'eligibility' },
						 { data: 'rel_train_hrs' },
						 { data: 'rel_position' },
						 { data: 'rel_office' },
						 { data: 'rel_emp_stat' },
						 { data: 'rel_per_from' },
						 { data: 'rel_per_to' },
						 { data: 'rel_no_yrs' },
						 { data: 'ipcr_rate' },
						 { data: 'qua_remarks' },
						 { data: 'exam_take' },
						 { data: 'exam_status' },
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
					
					//{ "width": "20%", "targets": 2 },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [1,8,11,12,13,14,15,16,17,18],
						"className": "text-center",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 3, 'asc' ] ).draw();
			
		
		
			$(document).on("change", "#vac_place" , function(e){
				
				$('#vac_position').find('option').remove();
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_vac_positions",
					method:"POST",
					dataType: 'json',
					data:{'vac_place': $(this).val()},
					success: function(data) {
						
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
						table.draw();
					}
				});
				
			});
		
		
		
		
		
			$(document).on("change", "#vac_position" , function(e){
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/get_vacant_pos_details2",
					method:"POST",
					dataType: 'json',
					data:{'position_title': $(this).val()},
					success: function(data) {
						
						$('#sjp_grade').text(data[0]['sjp_grade']);
						$('#education').text(data[0]['education']);
						$('#training').text(data[0]['training']);
						$('#experience').text(data[0]['experience']);
						$('#eligibility').text(data[0]['eligibility']);
						
						table.draw();
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
				
				
				
				
				
			});
		
		
		
		
			$(document).on("change", ".exam_take" , function(e){
				
				
				//console.log($(this).attr('class')); 
				var data = table.row(e.target.closest('tr')).data();
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/update_tbl_inputs",
					method:"POST",
					data:{'applicant_code': data['applicant_code'], 'input_val': $(this).val(), 'input_name': $(this).attr('class')},
					success: function(data) {
						
						Swal.fire({
							title: "Table data updated!", 
							icon: "success",
						}).then( ( value )  => {
							table.draw();
						});
						
					}
				});
				
			});
		
		
			$(document).on("click", "#print_list" , function(e){
				
				$('#addInfos').modal('show');
				
			});		
			

			$(document).on("click", "#gen_list" , function(){
				
				
				var error = '';
				var isValid = true;
						

						$('#addinfo_form input[name="advise_no"], input[name="preass_date"], select[name="advi_type"], select[name="list_type"], textarea[name="descript"]').each(function() {
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
						
						
				  if(error == ''){
					 $('#addinfo_form').attr("target","_blank");
					$('#addinfo_form').attr('action', "<?php echo base_url();?>c_phrms/qualified_list").submit();
				  }
							  
				
				
				
			});
			
			$('input[name="advise_no"], input[name="preass_date"], select[name="list_type"], textarea[name="descript"]').on('input change',function(){
				$(this).css({
					"border": "",
					"background": ""
				});
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
				width:500px;
			}
					
			
			.exam_take{
				border:1px solid #b3b3b3;
				width:150px;
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