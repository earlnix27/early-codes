	
	
	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:90%;margin-bottom:10px !important">
	
	  
	<br>
			
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>c_phrms/main_page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Recruitment</li>
				<li class="breadcrumb-item active" aria-current="page">General List of Applicants</li>
			  </ol>
			</nav>
			
			<div style="float:right"><a href="<?php echo base_url();?>c_phrms/export_genlist" target="_blank" id="gen_btn" class="cer_btn btn btn-sm btn-outline-success"><i class="fa fa-table" aria-hidden="true"></i> Export General List (.xlsx)</a></div>
			
			
			<h3 style="text-align:left">General List of Applicants</h3>
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
							<th rowspan="2">REASONS FOR DISQUALIFICATION<br>(if applicable)</th>
							<th rowspan="2">REMARKS2</th>
							<th rowspan="2">DATE/TIME APPLIED</th>
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
					"bSortClasses": false,
					"fixedColumns": {
						leftColumns: 6,
					},
					"scrollY": '500px',
					"scrollCollapse": true,
					"scrollX": true,
					"processing":true,
					"serverSide":true,
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_genlist_data',
						"type": "POST",
						"data": function (d) {
							return $.extend({},d,{
								"vac_position":$('#vac_position').val(),
								"vac_place":$('#vac_place').val(),
							});
						}
					 },
					 "createdRow": function( row, data, dataIndex ) {
						if ( data['qua_remarks2'] == "Further Review of HRMPSB" ) {        
							 $(row).addClass('frh');
						}else if ( data['qua_remarks2'] == "Qualified" ) {        
							 $(row).addClass('qua');
						}else if ( data['qua_remarks2'] == "Not Qualified" ) {        
							 $(row).addClass('diqua');
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
						 { data: 'disqua_reason' },
						 { data: 'qua_remarks2' },
						 { data: 'date_applied' },
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
										
					{
						"targets": [0,18],
						"visible": false,
					},
					{
						"targets": [1,8,12,13,14,15,16,17],
						"className": "text-center",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 3, 'asc' ] ).draw();
			
			
			
			$( table.row(1).nodes() ).addClass( 'highlight' );
			
		
		
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
		
		
			$(document).on("keyup", ".rel_train_hrs" , function(e){
			
				if (!( /^([0-9.])+$/.test( $(this).val()))){
					$(this).val('');
				}
			});
		
			$(document).on("change", ".rel_train_hrs, .qua_remarks, .disqua_reason" , function(e){
				
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
		
		
		
		
			$(document).on("click", ".delete_relexp" , function(e){
				var app_id = '';
				var key_id = $(this).attr('title');
				var data = table.row(e.target.closest('tr')).data();
				
				app_id = data['app_id'];
				
				Swal.fire({
				  title: 'Warning!',
				  text: "Delete this relevant experience premanently?",
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
							url:"<?php echo base_url(); ?>c_phrms/get_app_info",
							method:"POST",
							data:{'app_id': data['app_id'], 'key_id': key_id},
							success: function(data) {
								table.draw(); 
							}
						});
					
				  }
				})
				
			});
				
		
		
		});
		</script>
		
		<style>
		
		
			
			.frh {
			  background-color: #76c8da !important;
			}
			
			.qua {
			  background-color: #79d19c !important;
			}
			
			.diqua {
			  background-color: #fd969b !important;
			}
		
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
			
			
			.rel_train_hrs{
				border:1px solid #b3b3b3;
				width:50px;
				text-align:center;
			}
			
			.qua_remarks{
				border:1px solid #b3b3b3;
				width:150px;
			}
			
			.disqua_reason{
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