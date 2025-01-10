			<div class="modal fade" id="addInfos" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"  aria-labelledby="exampleModalLabel" aria-hidden="true" data-keyboard="false" data-backdrop="static">
			  <div class="modal-dialog modal-md modal-lg">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">List of Passers</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;width:90%;margin-left:40px">
					<form id="addinfo_form" name="addinfo_form" method="POST">	
						
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
							<div class="col-sm-8"><textarea class="form-control" name="pre_state" id="pre_state" rows="5">Listed below are the applicants who passed the Promotional and Pre-Employment Examination conducted last ____(Date)____ at ____(Location)____:</textarea></div>
						</div><br>
						<div class="row">
							<div class="col-sm-12" style="text-align:center;color:gray"><h4><i>(List of Passers Section)</i></h4></div>
						</div><br>
						<div class="row">
							<div class="col-sm-4">Post Statement</div>
							<div class="col-sm-8"><textarea class="form-control" name="post_state" id="post_state" rows="5">The above-listed names are included in the Competency-Based Interview and Job Knowledge Test to be conducted on ____(Date)____. The HRMO Designate and HRMO Focal Persons shall notify the above-listed names of the applicant's schedule based on the contact numbers indicated in their Personal Data Sheet. The Chief, MSD shall also oversee the preparation of the Candidate's Evaluation Sheet of the applicants</textarea></div>
						</div><br>
						
						
					</form>
				 </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-outline-danger" id="gen_list"><span id="btn_label"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Generate PDF</span></button>
				  </div>
				</div>
			  </div>
			</div>
			
			
			<div class="modal fade" id="addExaminee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-xl">
				<div class="modal-content" style="height:700px">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Examinee</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;overflow: auto;">
					
					
					
					
					<table id="list_qua_app" class="display cell-border" cellspacing="0" data-page-length='2000' width="100%">
				
						<thead style="text-align:center;background-color:#069e82;color:#fff">
							
							<tr>
								<th width="20px">Select All<br><input style="height:15px;" type="checkbox" name="selec_box" id="selec_box"/></th>
								<th>CODE</th>
								<th>LAST NAME</th>
								<th>FIRST NAME</th>
								<th>MIDDLE NAME</th>
								<th>EMAIL</th>
								<th>CLASS</th>
								<th>EXAM TYPE</th>
								<th>APPLIED POSITION</th>
								<th>OFFICE</th>
							</tr>
					
						</thead>		
					
					</table>		
					
					
					
					
				 </div>
				  <div class="modal-footer">
					<button type="button" class="cancel_examinee btn btn-danger" onClick="" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success" id="save_examinee">Add Examinee(s)</button>
				  </div>
				</div>
			  </div>
			</div>
			  
	
	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:90%;margin-bottom:10px !important">
	
	
	<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="<?php echo base_url();?>c_phrms/main_page"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Selection</li>
		<li class="breadcrumb-item active" aria-current="page">Online Examination</li>
	  </ol>
	</nav>
	<h3 style="text-align:left">Online Examination</h3>
	<hr>
	
	<br>
	
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	  <li class="nav-item" role="presentation">
		<button class="nav-link active" id="exam_info-tab" data-bs-toggle="pill" data-bs-target="#exam_info" type="button"  role="tab" aria-controls="exam_info" aria-selected="true">Examination Data</button >
	  </li>
	  <li class="nav-item" role="presentation">
		<button  class="nav-link" id="pills-examinee_info-tab" data-bs-toggle="pill" data-bs-target="#examinee_info" type="button"  role="tab" aria-controls="examinee_info" aria-selected="false">Examinee Data</button >
	  </li>
	  <li class="nav-item" role="presentation">
		<button  class="nav-link" id="pills-exam_summary-tab" data-bs-toggle="pill" data-bs-target="#exam_summary" type="button"  role="tab" aria-controls="exam_summary" aria-selected="false">Examination Report</button >
	  </li>
	</ul>
	<hr style="border:1px solid #cdcdcd">
	
	<div class="tab-content" id="pills-tabContent">
			  
		  <div class="tab-pane fade show active" id="exam_info" role="tabpanel" aria-labelledby="exam_info-tab" style="text-align:left">
			
			<br>
			<?php if($this->session->userdata('role_log_name')!='Viewer'):?>
				<a href="<?php echo base_url(); ?>c_phrms/intake" target="_blank" class="btn btn-outline-success" style="float:left"><i class="fa fa-plus" aria-hidden="true"></i> Create Examination</a>
			<?php endif;?>

				<table id="exam_record" class="display cell-border" cellspacing="0" data-page-length='20' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						<tr>
								<th>exam_id</th>
								<th>Type</th>
								<th>Category</th>
								<th>SG Bracket</th>
								<th>Passing Rate</th>
								<th>Examination Title</th>
								<th>Examination Date</th>
								<th>Time Start</th>
								<th>Time End</th>
								<th>Action</th>
						</tr>
					</thead>
					<!--<tfoot id="t_foot" style="text-align:left;font-size:14px;">
						<tr>
								<th>exam_id</th>
								<th>Examination Title</th>
								<th>Examination Date</th>
								<th>ACTION</th>
						</tr>
					</tfoot>-->
					
				</table>		  
		  
		  </div>
		  
		  
		  <div class="tab-pane fade show" id="examinee_info" role="tabpanel" aria-labelledby="examinee_info-tab" style="text-align:left">
			
			<br>
			<?php if($this->session->userdata('role_log_name')!='Viewer'):?>
				<button type="button" class="add_examinee btn btn-outline-success" style="float:left" data-bs-toggle="modal" data-bs-target="#addExaminee"><i class="fa fa-plus" aria-hidden="true"></i> Add Examinee(s)</button>
			<?php endif;?>
			
				<!--
				<a href="<?php echo base_url(); ?>c_phrms/export_examinees" target="_blank" class="btn btn-outline-primary" style="margin-left:20px;float:left"><i class="fa fa-download" aria-hidden="true"></i> Export List</a>
				
				<form id="import_form" name="import_form" method="POST" enctype="multipart/form-data">
					<input class="form-control form-control-lg" style="font-size:14px;margin-left:20px;float:left;width:20%" type="file" name="examinee_excel" id="examinee_excel" accept=".xlsx" />
				</form>
				-->
				
			<?php if($this->session->userdata('role_log_name')!='Viewer'):?>
				<!--<button type="button" id="clear_examinee" class="btn btn-danger" style="float:right; margin-left:20px"><i class="fa fa-trash-o fa-lg"></i> Clear Examinee Table</button>-->
				<button type="button" id="reload_tbl" class="btn btn-success" style="margin-left:20px"><i class="fa fa-refresh fa-lg"></i> Reload Table</button>
			<?php endif;?>	
				
				
				<br>
				
				<table id="examinee_record" class="display cell-border" cellspacing="0" data-page-length='20' width="100%">
				
					<thead style="text-align:center;background-color:#069e82;color:#fff">
						<tr>
								<th>u_id</th>
								<th>Code</th>
								<th>Examinee Name</th>
								<th>Username</th>
								<th>Password</th>
								<th>Applied Position</th>
								<th>Exam to Take</th>
								<th>Examination Title</th>
								<th>Account Status</th>
								<th>Exam Status</th>
								<th>Exam Result</th>
								<th>Action</th>
						</tr>
					</thead>
					<!--<tfoot id="t_foot" style="text-align:left;font-size:14px;">
						<tr>
								<th>exam_id</th>
								<th>Examination Title</th>
								<th>Examination Date</th>
								<th>ACTION</th>
						</tr>
					</tfoot>-->
					
				</table>	
		  
		  
		  </div>
		  
		  <div class="tab-pane fade show" id="exam_summary" role="tabpanel" aria-labelledby="exam_summary-tab" style="text-align:left">
			
			<br>
			<form id="report_form" name="report_form" method="POST">	
			<div class="row">
				<div class="col-sm-3" style="text-align:right"><b>Select Report</b></div>
				<div class="col-sm-5">
					<select class="report_type form-select form-select-sm" id="report_type" name="report_type">
						<option value="">-None-</option>
						<option value="1">List of Passers</option>
						<option value="2">Examination Statistics</option>
					</select>
				</div>
				<div class="col-sm-2"><button type="button" class="btn btn-sm btn-outline-danger" id="gen_report"><span id="btn_label"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Generate PDF</span></button></div>
			</div><br>	
			</form>
		  
		  </div>
		  
	 </div>
	
	
	
	</div>	
		
		<script type="text/javascript">
		$(document).ready(function(){	
		
		
		
		
		var lqa_tbl = $('#list_qua_app').DataTable({
					
					"bSortClasses": false,
					"processing":true,
					"serverSide":true,
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_qualist_exam_data',
						"type": "POST",
						"data": function (d) {
						
						}
					},
					"rowCallback": function( row, data, index ) {
						  var var1 = this.api().column(2).data().toArray();
						  var var2 = this.api().column(3).data().toArray();
						  var var3 = this.api().column(4).data().toArray();
						  console.log(var1+" : "+var2);
						  
						  if (var1[0] == var1[1] && var2[0] == var2[1] && var3[0] == var3[1]) {
							  $(row).addClass('duplicate');
						  }
					},
					
					'columns': [
						 { data: 'select_box' },
						 { data: 'applicant_code' },
						 { data: 'surname' },
						 { data: 'firstname' },
						 { data: 'middlename' },
						 { data: 'email_add' },
						 { data: 'examinee_class' },
						 { data: 'exam_take' },
						 { data: 'vac_position' },
						 { data: 'vac_place' },
					 ],
					 
					//"bLengthChange": true,
					"dom": '<"toolbar">frt',
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
						orderable: false,
						className: 'select-checkbox',
						targets:   0,
					},
					/* {
						"targets": [1,8,11,12,13,14,15,16,17],
						"className": "text-center",
					} */
					
				],
				
				select: {
					style: 'multi',
					selector: 'td:first-child'
				},
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 2, 'asc' ] ).draw();
			
		
		
			$("#selec_box").on( "click", function(e) {
				if ($(this).is( ":checked" )) {
					lqa_tbl.rows( {search: 'applied'} ).select();        
				} else {
					lqa_tbl.rows(  ).deselect(); 
					lqa_tbl.columns('').search('').draw();
				}
			});
		
				
				$('#exam_record').DataTable({
				
					"processing":true,
					"serverSide":true,
					'serverMethod': 'post',
					"ajax":"<?php echo base_url();?>c_phrms/get_exam_data",
					
					'columns': [
						 { data: 'exam_id' },
						 { data: 'exam_type' },
						 { data: 'exam_category' },
						 { data: 'exam_bracket' },
						 { data: 'pass_rate' },
						 { data: 'exam_title' },
						 { data: 'exam_date' },
						 { data: 'time_start' },
						 { data: 'time_end' },
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
					
					{ "width": "30%", "targets": 5 },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [2,3,4,6,7,8,9],
						"className": "text-center",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 0, 'desc' ] ).draw();
			
			
			var table = $('#exam_record').DataTable();
			$(document).on("click", "a.delete_exam" , function(e){
				var exam_id = '';
				var data = table.row(e.target.closest('tr')).data();
				
				//console.log(data['application_no']);
				exam_id = data['exam_id'];
				
				
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
							url:"<?php echo base_url(); ?>c_phrms/delete_oes_exam/"+exam_id+"",
							method:"POST",
							contentType:false,
							cache:false,
							processData:false,
							success: function(data) {
								
								Swal.fire({
									title: "Exam successfully deleted", 
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
			
			$(document).on("click", "a.duplicate_exam" , function(e){
				var exam_id = '';
				var data = table.row(e.target.closest('tr')).data();
				
				//console.log(data['application_no']);
				exam_id = data['exam_id'];
				
				
				Swal.fire({
				  title: 'Create a copy of this exam?',
				  //text: "You are about to create a copy of this examination, proceed?",
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
							url:"<?php echo base_url(); ?>c_phrms/duplicate_oes_exam/"+exam_id+"",
							method:"POST",
							contentType:false,
							cache:false,
							processData:false,
							success: function(data) {
								
								Swal.fire({
									title: "Exam successfully duplicated", 
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
			
			$('#examinee_record').DataTable({
				
					"processing":true,
					"serverSide":true,
					'serverMethod': 'post',
					"ajax":"<?php echo base_url();?>c_phrms/get_examinee_data",
					
					'columns': [
						 { data: 'u_id' },
						 { data: 'applicant_code' },
						 { data: 'l_name' },
						 { data: 'u_name' },
						 { data: 'u_password' },
						 { data: 'vac_position' },
						 { data: 'exam_take' },
						 { data: 'exam_id' },
						 { data: 'exam_stat' },
						 { data: 'examination_status' },
						 { data: 'exam_result' },
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
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false,
					},
					{
						"targets": [1,7,8,11],
						"searchable": false,
						"orderable": false,
					},
					{
						"targets": [3,4,7,8,9,10,11],
						"className": "text-center",
					}
					
				],
			
				
			}).order( [ 0, 'desc' ] ).draw();
			
			
			var table2 = $('#examinee_record').DataTable();
			$(document).on("click", "a.delete_examinee" , function(e){
				var app_code = '';
				var data = table2.row(e.target.closest('tr')).data();
				
				app_code = data['u_id'];
				
				
				Swal.fire({
				  title: 'Warning!',
				  text: "You are about to delete an examinee premanently, proceed?",
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
							url:"<?php echo base_url(); ?>c_phrms/delete_oes_examinee/"+app_code+"",
							method:"POST",
							contentType:false,
							cache:false,
							processData:false,
							success: function(data) {
								
								Swal.fire({
									title: "Examinee successfully deleted", 
									icon: "success",
								}).then( ( value )  => {
									//window.location.reload();
									 table2.draw(); 
									 lqa_tbl.draw(); 
								});
							   
							}
						})
				  }
				})
				
			
			
			});
			//setInterval(function(){table2.draw();},10000); 
			
			
			
			
			$(document).on("click", "#reload_tbl" , function(e){
				
				table2.draw();
				
			});
			
			
			/* $(document).on("click", ".add_examinee" , function(e){
				
				
				$('#examinee_form input[type="text"]').each(function() {
					$(this).val('');
				});
				$('#e_mail').val('');
				$('#examinee_id').val('');
				
				
				$('#exampleModalLabel').text('Add Examinee');
				
			}); */
			
			/* $(document).on("click", "a.update_examinee" , function(e){
				
				var data = table2.row(e.target.closest('tr')).data();
			
				$('#examinee_id').val(data['u_id']);
				$('#f_name').val(data['f_name']);
				$('#m_name').val(data['m_name']);
				$('#l_name').val(data['l_name']);
				$('#u_password').val(data['u_password']);
				$('#e_mail').val(data['e_mail']);
				
				if(data['examinee_class']=='Insider'){
					$('#Insider').prop('checked', true);
				}else{
					$('#Outsider').prop('checked', true);
				}
				
				
				$('#exampleModalLabel').text('Update Examinee');
				
			}); */
			
			
			$(document).on("click", "a.view_examinee" , function(e){
				
				var data = table2.row(e.target.closest('tr')).data();
				
				window.open("<?php echo base_url();?>c_phrms/view_examinee/"+data['u_id']+"",'_blank');
				//$(location).attr('href',"<?php echo base_url();?>c_phrms/view_examinee/"+data['u_id']+"");
				
			});
			
			
			$("#save_examinee").click(function(e){ 
			
			
					var tbl_data = lqa_tbl.rows({selected : true}).data().toArray();
					var sel_count= lqa_tbl.rows({selected : true}).count();
					if(sel_count==0){
						alert('No selected record(s). Please select atleast one record. Thank you');
					}
					else{
						$.ajax({
							url:"<?php echo base_url(); ?>c_phrms/insert_examinees",
							method:"POST",
							dataType: 'json',
							data: {"tbl_data":tbl_data},
							success: function(data) {
								//console.log(data);
								lqa_tbl.draw();
								table2.draw();
								$('#addExaminee').modal('hide');
								
							}
						});
					}	
				  
			});
		
		
			$(document).on("change", ".exam_group" , function(e){
				
				var data = table2.row(e.target.closest('tr')).data();
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/update_examgroup",
					method:"POST",
					data:{'u_id': data['u_id'], 'exam_id': $(this).val()},
					success: function(data) {
						
					}
				});
				
			});
		
			$(document).on("change", ".exam_stat" , function(e){
				
				var data = table2.row(e.target.closest('tr')).data();
				
				$.ajax({
					url:"<?php echo base_url(); ?>c_phrms/update_examstat",
					method:"POST",
					data:{'u_id': data['u_id'], 'exam_stat': $(this).val()},
					success: function(data) {
						
					}
				});
				
			});
			
			$(document).on("change", "#examinee_excel" , function(e){
				
				//console.log('upload');
				$('#import_form').attr('action', "<?php echo base_url();?>c_phrms/import_examinee").submit();
				
			});
			
			
			
			$(document).on("click", "#clear_examinee" , function(e){
				
				
				Swal.fire({
				  title: 'Warning!',
				  text: "You are about to clear examninee record table, proceed?",
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
							url:"<?php echo base_url(); ?>c_phrms/clear_oes_examinee",
							method:"POST",
							contentType:false,
							cache:false,
							processData:false,
							success: function(data) {
								
								Swal.fire({
									title: "Successfully cleared record table", 
									icon: "success",
								}).then( ( value )  => {
									//window.location.reload();
									 table2.draw(); 
								});
							   
							}
						})
				  }
				})
				
			
			
			});
			
			
			$(document).on("click", "#gen_report" , function(){
				
				
				var error = '';
				var isValid = true;
						

						$('#report_form select[name="report_type"] ').each(function() {
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
					 $('#report_form').attr("target","_blank");
					 $('#report_form').attr('action', "<?php echo base_url();?>c_phrms/exam_stat_report").submit();
				  }
							  
				
				
				
			});
			
			$('#report_form select[name="report_type"]').on('change',function(){
				$(this).css({
					"border": "",
					"background": ""
				});
			});
			
			$(document).on("change", "#report_type" , function(e){
				
				if($(this).val()==1){
					$('#addInfos').modal('show');
				}else{
					$('#addInfos').modal('hide');
				}
				
				
			});		
			
			$(document).on("click", ".btn-close" , function(e){
				
				$("#addinfo_form").trigger('reset');
				$("#report_type").val('');
				
				
			});		
			
			$(document).on("click", "#gen_list" , function(){
				
				
				var error = '';
				var isValid = true;
						

						$('#addinfo_form input[name="advise_no"], select[name="list_type"], textarea[name="descript"]').each(function() {
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
					  $('#addinfo_form').attr('action', "<?php echo base_url();?>c_phrms/exam_passers").submit();
				  }
							  
				
				
				
			});
			
			
			$('input[name="advise_no"], select[name="list_type"], textarea[name="descript"]').on('input change',function(){
				$(this).css({
					"border": "",
					"background": ""
				});
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
			
			.duplicate {
			  background-color: #fd969b !important;
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