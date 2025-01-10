	
	
	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:90%;margin-bottom:10px !important">
	
	  
	<br>
			
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>c_phrms/main_page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Selection</li>
				<li class="breadcrumb-item active" aria-current="page">Comprehensive Evaluation Results</li>
			  </ol>
			</nav>
			
			<div style="float:right"><a href="#" id="cer_btn" class="cer_btn btn btn-sm btn-outline-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Generate CER Result</a></div>
			
			<h3 style="text-align:left">Comprehensive Evaluation Results</h3>
			<hr>
			
		
				<div class="row" style="text-align:left;margin-bottom:20px">
					<div class="col-sm-6"></div>
					<div class="col-sm-6" style="padding-left:100px"><b>QUALIFICATION STANDARDS</b></div>
				</div>
				
			<form id="input_form" name="input_form" method="POST">
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
			</form>	
			
				<br>
			
				<table id="publish_position_record" class="display cell-border" cellspacing="0" data-page-length='20' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						
						<tr>
							<th rowspan="2">app_id</th>
							<th rowspan="2">NO.</th>
							<th rowspan="2">CODE</th>
							<th colspan="3">APPLICANT NAME</th>
							<th rowspan="2">PRESENT POSITION</th>
							<th>EDUCATION</th>
							<th>PERFORMANCE</th>
							<th>TRAINING</th>
							<th>EXPERIENCE</th>
							<th>WRITTEN/ SKILL EXAM</th>
							<th>PSYCHO-SOCIAL ATTRIBUTES/ PERSONALTY TRAITS</th>
							<th>POTENTIAL</th>
							<th>TOTAL</th>
							<th rowspan="2">AWARDS AND OUTSTANDING ACHIEVEMENTS</th>
							<th rowspan="2">REMARKS</th>
						</tr>
						<tr>
							<th>LAST NAME</th>
							<th>FIRST NAME</th>
							<th>MIDDLE NAME</th>
							<th>(12 Pts)</th>
							<th>(30 Pts)</th>
							<th>(8 Pts)</th>
							<th>(15 Pts)</th>
							<th>(15 Pts)</th>
							<th>(10 Pts)</th>
							<th>(10 Pts)</th>
							<th>(100 Pts)</th>
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
						"url": '<?php echo base_url();?>c_phrms/get_ces_data',
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
						 { data: 'present_pos' },
						 { data: 'educ_points' },
						 { data: 'performance_points' },
						 { data: 'training_points' },
						 { data: 'experience_points' },
						 { data: 'exam_points' },
						 { data: 'personality_points' },
						 { data: 'potential_points' },
						 { data: 'cer_total_points' },
						 { data: 'na_awards' },
						 { data: 'ces_remarks' },
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
					
					//{ "width": "10%", "targets": 14 },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [7,8,9,10,11,12,13,14,16],
						"searchable": false,
						"orderable": false,
					},
					{
						"targets": [1,7,8,9,10,11,12,13],
						"className": "text-center",
					},
					{
						"targets": [14],
						"className": "text-bold",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 14, 'desc' ] ).draw();
			
		
		
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
		
		
			$(document).on("keyup", ".performance_points, .educ_points, .training_points, .experience_points, .exam_points, .personality_points, .potential_points" , function(e){
			
				if (!( /^([0-9.])+$/.test( $(this).val()))){
					table.draw();
				}
				
			});
		
			$(document).on("change", ".performance_points, .educ_points, .training_points, .experience_points, .exam_points, .personality_points, .potential_points, .ces_remarks" , function(e){
				
				var data = table.row(e.target.closest('tr')).data();
				
				var error = '';
				var input_name = $(this).attr('class');
				var input_val = $(this).val();
				
				var cer_total_points = 0;
				var edp = parseFloat($('#edp_'+data['app_id']).val());
				var perfp = parseFloat($('#perfp_'+data['app_id']).val());
				var trp = parseFloat($('#trp_'+data['app_id']).val()); 
				var exp = parseFloat($('#exp_'+data['app_id']).val()); 
				var exm = parseFloat($('#exm_'+data['app_id']).val());
				var perp = parseFloat($('#perp_'+data['app_id']).val()); 
				var potp = parseFloat($('#potp_'+data['app_id']).val());
				
				
				if(isNaN(edp)){edp=0;}
				if(isNaN(perfp)){perfp=0;}
				if(isNaN(trp)){trp=0;}
				if(isNaN(exp)){exp=0;}
				if(isNaN(exm)){exm=0;}
				if(isNaN(perp)){perp=0;}
				if(isNaN(potp)){potp=0;}
				
				
				if(input_name=='performance_points' && input_val > 30){
						error = 'Input value exceeds maximum points!';
						//$(this).val('0');
				}
				
				if(input_name=='educ_points' && input_val > 12){
						error = 'Input value exceeds maximum points!';
						//$(this).val('0');
				}
				
				if(input_name=='training_points' && input_val > 8){
						error = 'Input value exceeds maximum points!';
						//$(this).val('0');
				}
				
				if(input_name=='experience_points' && input_val > 15){
						error = 'Input value exceeds maximum points!';
						//$(this).val('0');
				}
				
				if(input_name=='exam_points' && input_val > 15){
						error = 'Input value exceeds maximum points!';
						//$(this).val('0');
				}
				
				if(input_name=='personality_points' && input_val > 10){
						error = 'Input value exceeds maximum points!';
						//$(this).val('0');
				}
				
				if(input_name=='potential_points' && input_val > 10){
						error = 'Input value exceeds maximum points!';
						//$(this).val('0');
				}
				
				cer_total_points = parseFloat(edp+perfp+trp+exp+exm+perp+potp);
			
				
				if(error==''){
					$.ajax({
						url:"<?php echo base_url(); ?>c_phrms/update_ces_inputs",
						method:"POST",
						data:{'applicant_code': data['applicant_code'], 'input_val': $(this).val(), 'input_name': $(this).attr('class'), 'cer_total_points': cer_total_points},
						success: function(data) {
							
							table.draw();
							
						}
					});
				}else{
					Swal.fire({
						text: error,
						icon: "warning",
					});
					table.draw();
				}
				
				
				
			});
		
		
			
			$(document).on("click", "#cer_btn" , function(){
					
				var error = '';
				var isValid = true;
						

						$('#input_form select[name="vac_place"], select[name="vac_position"]').each(function() {
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
					$('#input_form').attr("target","_blank");
					$('#input_form').attr('action', "<?php echo base_url();?>c_phrms/cer").submit();
				  }
						
				
			});
		
			
			$('select[name="vac_place"], select[name="vac_position"]').on('change',function(){
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
			
			.text-bold{
				font-weight:bold !important;
				text-align:center;
			}
			
			.dataTables_filter input {
				border-width:0px 0px 1px 0px;
				margin-bottom: 20px;
				width:300px;
			}
					
			
			.performance_points, .educ_points, .training_points, .experience_points, .exam_points, .personality_points, .potential_points{
				border:1px solid #b3b3b3;
				width:50px;
				text-align:center;
			}	
			
			.ces_remarks{
				border:1px solid #b3b3b3;
				width:200px;
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