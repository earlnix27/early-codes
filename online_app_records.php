	
	
	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:90%;margin-bottom:10px !important">
	
	  
	<br>
			
			<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url();?>c_phrms/main_page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Recruitment</li>
				<li class="breadcrumb-item active" aria-current="page">Online Application</li>
			  </ol>
			</nav>
			<h3 style="text-align:left">Online Applications</h3>
			<hr>
			<br>
			
			
			
			
			
				<br>
				<div class="row" style="text-align:left">
					<div class="col-sm-2" style="padding-left:30px">Place of Vacancy</div>
					<div class="col-sm-3">
						<select class="vac_place form-select form-select-sm" id="vac_place" name="vac_place">
							<option value="">-Select-</option>
							<?php foreach($vac_place as $vp):?>
								<option value="<?php echo $vp->place_assignment;?>"><?php echo $vp->place_assignment;?></option>
							<?php endforeach;?>
						</select>
					</div>
					<div class="col-sm-2" style="text-align:right">Salary/Job/Pay Grade</div>
					<div class="col-sm-2"><input type="text" name="sjp_grade" id="sjp_grade" class="form-control form-control-sm"></div>
				</div><br>
				<div class="row" style="text-align:left">
					<div class="col-sm-2" style="padding-left:30px">Position Applied For</div>
					<div class="col-sm-3">
						<select class="vac_position form-select form-select-sm" id="vac_position" name="vac_position">
							<option value="">-Select-</option>							
						</select>
					</div>
					<div class="col-sm-2" style="text-align:right">Monthly Salary</div>
					<div class="col-sm-2"><input type="text" name="monthly_salary" id="monthly_salary" class="form-control form-control-sm" placeholder="0.00"></div>
				</div><br>
				<br>



				<table id="publish_position_record" class="display cell-border" cellspacing="0" data-page-length='500' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						<tr>
								<th>app_id</th>
								<th>Code</th>
								<th>Applicant Name</th>
								<th>Letter of Intent</th>
								<th>PDS</th>
								<th>Education</th>
								<th>Eligibility</th>
								<th>IPCR</th>
								<th>Awards</th>
								<th>L & D</th>
								<th>WES</th>
								<th>Service Record</th>
								<th>SOs</th>
								<th>DL All Files</th>
						</tr>
					</thead>
				
				</table>		  
	
	
	</div>	
		
		<script type="text/javascript">
		$(document).ready(function(){	
		
		
			var table = $('#publish_position_record').DataTable({
					"scrollY": '500px',
					"scrollCollapse": true,
					"processing":true,
					"serverSide":true,
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_olapp_data',
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
						 { data: 'applicant_code' },
						 { data: 'surname' },
						 { data: 'intletter_file' },
						 { data: 'pds_file' },
						 { data: 'educ_file' },
						 { data: 'elig_file' },
						 { data: 'ipcr_file' },
						 { data: 'award_file' },
						 { data: 'cert_file' },
						 { data: 'wes_file' },
						 { data: 'serec_file' },
						 { data: 'so_file' },
						 { data: 'dl_all_files' },
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
					
					{ "width": "10%", "targets": 1 },
					{ "width": "20%", "targets": 2 },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [3,4,5,6,7,8,9,10,11,12,13],
						"className": "text-center",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 2, 'asc' ] ).draw();
			
		
		
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
						
						$('#sjp_grade').val(data[0]['sjp_grade']);
						$('#monthly_salary').val(data[0]['monthly_salary']);
						
						 table.draw();
						
					}
				});
				
			});
		
		
		
		
		
		
		
		
		
		
				
				
		
		
		
		});
		</script>
		
		<style>
		
			
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