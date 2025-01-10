	
	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:90%;text-align:left;padding:20px">	
	<form id="exam_form" name="exam_form" method="POST">		
		
			  <h4>Create Examination</h4>
				<hr>
				<br>
				<div class="row">

					<div class="col-sm-12">
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Examination Type</div>
							<div class="col-sm-7">
								<select class="exam_type form-select form-select-sm" id="" name="exam_type">
									<option value="">-Select Type-</option>
									<option value="Pre-Employment">Pre-Employment</option>
									<option value="Promotional">Promotional</option>
								</select>
							</div>
						</div><br>
						
								<div class="row">
									<div class="col-sm-2" style="font-weight:bold">Category</div>
									<div class="col-sm-7">
										<select class="exam_category form-select form-select-sm" id="" name="exam_category">
											<option value="">-Select Catergory-</option>
											<option value="Management">Management</option>
											<option value="Technical">Technical</option>
										</select>
									</div>
								</div><br>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Salary Grade Bracket</div>
							<div class="col-sm-7">
								<select class="exam_bracket form-select form-select-sm" id="" name="exam_bracket">
									<option value="">-Select Salary Grade Bracket-</option>
									<option value="4-6">SG 4-6</option>
									<option value="7-9">SG 7-9</option>
									<option value="10-17">SG 10-17</option>
									<option value="18-22">SG 18-22</option>
									<option value="23">SG 23</option>
								</select>
							</div>
						</div><br>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Examination Title</div>
							<div class="col-sm-7"><input type="text" name="exam_title" id="exam_title" class="form-control form-control-sm"></div>
						</div><br>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Date/Time of Examination</div>
							<div class="col-sm-2"><input type="date" name="exam_date" id="exam_date" class="form-control form-control-sm"></div>
							From <div class="col-sm-2" style="font-weight:bold"><input type="time" name="time_start" id="time_start" class="form-control form-control-sm"></div> to <div class="col-sm-2"><input type="time" name="time_end" id="time_end" class="form-control form-control-sm"></div>
						</div><br>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Passing Rate (%)</div>
							<div class="col-sm-1"><input type="text" name="pass_rate" id="pass_rate" class="form-control form-control-sm" readonly></div>
						</div><br>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">No. of Questions</div>
							<div class="col-sm-2"><label id="no_ques">0</label></div>
						</div>
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Total Points</div>
							<div class="col-sm-2"><label id="no_points">0</label></div>
						</div><br>
						
					</div>	
					
					
				</div>
				
				
				
				<hr>
				<div class="row" style="font-weight:bold">
					<div class="col-sm-12 alert alert-primary">Instruction: Please read the questions carefully and answer accordingly.</div>
				</div>
				<br>
				
				
				<div id="add_que_sec">
					<!--
					<div class="row" id="que1" style="margin-bottom:30px;padding:20px;border-radius:0.5em;;background-color:#f1f1f1">
							
							<input type="hidden" name="tmp_qno[]" value="1" class="form-control form-control-sm">
							<div class="col-sm-7">
								<div class="row">
								<div style="padding:0px 2px"><input type="input" name="exam_questions[]" placeholder="Question" class="form-control form-control-sm"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<select class="que_type form-select form-select-sm" id="que1_type" name="que_type[]">
										<option value="">-Select Question Type-</option>
										<option value="True or False">True or False</option>
										<option value="Multiple Choice">Multiple Choice</option>
										<option value="Check Box">Check Box</option>
										<option value="Enumeration">Enumeration</option>
										<option value="Essay">Essay</option>
									</select>
								</div>
							</div>
							<div class="col-sm-1"><input type="text" id="que1_points" name="que_points[]" placeholder="No." class="qpoint form-control form-control-sm" style="text-align:center"></div>
							<div class="col-sm-1" style="padding:3px 0px"><i style="float:left">Point(s)</i></div>
							<a class="del_que btn btn-danger btn-sm" title="Delete Row" style="float:right;height:30px;width:30px;color:#fff;margin-left:14px">X</a>
							
					</div>
					-->
				</div>
				<div class="col-sm-2">
					<button type="button" id="que_addr" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Add Question</button>
				</div>
				
			  
		</form>
		  </div>
		  	
			<br>		
				
				<button type="button" id="save_btn" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> <b>Save Exam</b></button>
			
			<br>			
			<br>			
			<br>			
								
	<script type="text/javascript">
	
	
	
		
		function sum_points() {
			
				var no_points = 0;
				
				
				$('.qpoint').each(function() {
					
					if (!( /^([0-9.])+$/.test($(this).val()))){
						$(this).val('');
					}
					
					if($(this).val()!=''){
						no_points+=parseFloat($(this).val());
					}
				});
				
				return no_points;
				
		}
		

		$(document).ready(function(){
						
			$('#add_que_sec').sortable();
			
			
			$(document).on("change", ".qpoint" , function(){
				$('#no_points').text(sum_points);
			});
				
				
			$(document).on("change", "#exam_title" , function(){
				
				
				if (!( /^([a-zA-Z0-9ñÑ _-])+$/.test( $(this).val()))){
					$(this).val('');
				}
				
				$.ajax({ 
					type: "POST", 
					url:"<?php echo base_url(); ?>c_phrms/check_exam_name",
					data:{'exam_title': $(this).val()},
					success:function(data)
					{
						//console.log(data);
						
						if (data == 'exist') {
							$('#exam_title').css({
								"border": "1px solid red",
								"background": "#feebeb"
							});
							
							Swal.fire({
								title: 'Error!',
								text: 'Examination title already exist!',
								icon: 'error',
								
							}).then( ( value )  => {
								$("#exam_title").val('');
							});
						}
						else {
							$(this).css({
								"border": "",
								"background": ""
							});
						}
						
						
					}
				});
			
				
			});	
			
			
			$(document).on("change", "input[type='checkbox']" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
				
					var checkedbox = $("#"+que_parent+" input[type='checkbox']").filter(':checked').length;
					
					if(checkedbox > 0){
						$('#'+que_parent+'_points').val(checkedbox);
					}else{
						$('#'+que_parent+'_points').val('');
					}
					
			});

			/* $(document).on("change", "#rec_amnt,.declare_val,.op_am_acq,.op_mar_val,.op_total,#strct_tamount,#pop_tamount,#lol_tamount" , function(){
				if (!( /^([0-9.,])+$/.test( $(this).val()))){
					$(this).val('');
				}
				$(this).formatCurrency({symbol:'', roundToDecimalPlace: 2 }); 
			}); */

			
			
			$('#exam_date').on('change',function(){	
					
					dobDate = new Date($(this).val());
					nowDate = new Date();
					
					var diff = nowDate.getTime() - dobDate.getTime();
					
					var ageDate = new Date(diff); // miliseconds from epoch
					var age = Math.abs(ageDate.getUTCFullYear() - 1970);
					
					$('#age_yr').val(age);
					$('#age_text').text(age+' years old');
			});
			
			
			var que_row = 1;
			
			$('#que_addr').on('click', function() {
				
				var no_ques = $('#no_ques').text();
				
				$('#add_que_sec').append('<div class="row" id="que'+que_row+'" style="margin-bottom:30px;padding:20px;border-radius:0.5em;;background-color:#f1f1f1"><input type="hidden" name="tmp_qno[]" value="'+que_row+'" class="form-control form-control-sm"><div class="col-sm-7"><div class="row"><div style="padding:0px 2px"><input type="input" name="exam_questions[]" placeholder="Question" class="form-control form-control-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><select class="que_type form-select form-select-sm" id="que'+que_row+'_type" name="que_type[]"><option value="">-Select Question Type-</option><option value="True or False">True or False</option><option value="Multiple Choice">Multiple Choice</option><option value="Check Box">Check Box</option><option value="Enumeration">Enumeration</option><option value="Essay">Essay</option></select></div></div><div class="col-sm-1"><input type="text" id="que'+que_row+'_points" name="que_points[]" placeholder="No." class="qpoint form-control form-control-sm" style="text-align:center"></div><div class="col-sm-1" style="padding:3px 0px"><i style="float:left">Points</i></div><a class="del_que btn btn-danger btn-sm" title="Delete Row" style="float:right;height:30px;width:30px;color:#fff;margin-left:14px">X</a></div>');
				
				$('#no_ques').text(parseInt(no_ques)+1);
				que_row++;
			});
			
			$(document).on("click", "a.del_que" , function(){
				
				var no_ques = $('#no_ques').text();
				
				Swal.fire({
				  title: 'Delete this question?',
				  //text: "You are about to delete a record premanently, proceed?",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  cancelButtonText: 'Cancel',
				  confirmButtonText: 'Proceed',
				  reverseButtons: true,
				  
				}).then((result) => {
				  if (result.isConfirmed) {
					  
						$('#'+$(this).parent().attr('id')).remove();
						
						$('#no_ques').text(parseInt(no_ques)-1);
						$('#no_points').text(sum_points);
				
					}
				})
				
			});
			
			
			
				
			$(document).on("change", ".que_type" , function(){
				
			var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
					
					
					$('.'+que_parent+'_row').remove();
			
					if($(this).val()=='True or False'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" name="'+que_parent+'_ans[]" value="1"></div><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="1"><input type="hidden" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" value="True">True</div></div><div class="'+que_parent+'_row row" id="'+que_parent+'_row12" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" name="'+que_parent+'_ans[]" value="2"></div><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="2"><input type="hidden" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" value="False">False</div></div>');
						
						$('#'+que_parent+'_points').val(1);
												
							
					}
					else if($(this).val()=='Multiple Choice'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" name="'+que_parent+'_ans[]" value="1"></div><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="1"><input type="input" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><button type="button" id="add_opt" class="btn btn-success btn-sm" style="height:30px"><i class="fa fa-plus" aria-hidden="true"></i></button></div></div>');
						
						$('#'+que_parent+'_points').val(1);
						
					}
					else if($(this).val()=='Check Box'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="checkbox" name="'+que_parent+'_ans[]" value="1"></div><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="1"><input type="input" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><button type="button" id="add_sel" class="btn btn-success btn-sm" style="height:30px"><i class="fa fa-plus" aria-hidden="true"></i></button></div></div>');
						
						$('#'+que_parent+'_points').val('');
					}
					else if($(this).val()=='Enumeration'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="1"><input type="input" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><button type="button" id="add_enum" class="btn btn-success btn-sm" style="height:30px"><i class="fa fa-plus" aria-hidden="true"></i></button></div></div>');
						
						$('#'+que_parent+'_points').val(1);
					}
					else if($(this).val()=='Essay'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-6"><textarea rows="5" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"></textarea></div></div>');
						
						$('#'+que_parent+'_points').val('');
					}
					
					$('#no_points').text(sum_points);
					
			});
			
			
			
			var ch_row = 2;
			$(document).on("click", "#add_opt" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
				
				$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row'+ch_row+'" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" name="'+que_parent+'_ans[]" value="'+ch_row+'"></div><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="'+ch_row+'"><input type="input" id="'+que_parent+'_opt'+ch_row+'" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><a  class="del_option btn btn-danger btn-sm" title="Delete Row" style="height:30px;width:30px;color:#fff">X</a></div></div>');
				ch_row++;
			});
			
			
			
			var sel_row = 2;
			$(document).on("click", "#add_sel" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
				
				$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row'+sel_row+'" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="checkbox" name="'+que_parent+'_ans[]" value="'+sel_row+'"></div><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="'+sel_row+'"><input type="input" id="'+que_parent+'_opt'+sel_row+'" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><a  class="del_option btn btn-danger btn-sm" title="Delete Row" style="height:30px;width:30px;color:#fff">X</a></div></div>');
				sel_row++;
			});
			
			
			
			var enum_row = 2;
			$(document).on("click", "#add_enum" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
				
				$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row'+enum_row+'" style="margin:20px 20px 0px 20px"><div class="col-sm-6"><input type="hidden" name="'+que_parent+'_opt_no[]" value="'+enum_row+'"><input type="input" id="'+que_parent+'_opt'+enum_row+'" name="'+que_parent+'_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><a  class="del_option btn btn-danger btn-sm" title="Delete Row" style="height:30px;width:30px;color:#fff">X</a></div></div>');
				
				
				$('#'+que_parent+'_points').val(parseInt($('#'+que_parent+'_points').val())+1);
				enum_row++;
			});
			
			
			
			$(document).on("click", "a.del_option" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
					
					$('#'+$(this).parent().parent().attr('id')).remove();
				
				var checkedbox = $("#"+que_parent+" input[type='checkbox']").filter(':checked').length;
					if($('#'+que_parent+'_type').val()=="Check Box"){
						if(checkedbox > 0){
							$('#'+que_parent+'_points').val(checkedbox);
						}else{
							$('#'+que_parent+'_points').val('');
						}
					}
					
				
				var enum_cnt = $('#'+que_parent+'_points').val();
					if($('#'+que_parent+'_type').val()=="Enumeration"){
						if(enum_cnt > 0){
							$('#'+que_parent+'_points').val(enum_cnt-1);
						}else{
							$('#'+que_parent+'_points').val('');
						}
					}
					
					
					
			});
			
			
			
			
			
			
		/* 	$('input, select, textarea').on('input change',function(){
				$(this).css({
						"border": "",
						"background": ""
					});
			}); */
			
			


			$("#save_btn").click(function(){ 
							  
					var exam_no = '';
					var error = '';
					var form_data = new FormData();
					var isValid = true;
							

							$('#exam_form input[type="date"], input[type="time"], input[type="text"], select[name="exam_type"], select[name="exam_category"], select[name="exam_bracket"]').each(function() {
								if ($.trim($(this).val()) == '') {
									isValid = false;
									$(this).css({
										"border": "1px solid red",
										"background": "#feebeb"
									});
									
									
									$('html,body').animate({
										scrollTop: $(this).offset().top-200
									}, 10);
									
									
									
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
										url: "<?php echo base_url();?>c_phrms/save_exam",
										data: $("#exam_form").serialize(),
										beforeSend:function(){
															
											Swal.fire({
												title: "Please wait!",
												text: "Saving examination...",
												icon: "warning",
												showConfirmButton: false,
												didOpen: () => {Swal.showLoading()},
											});
												
										},
										success: function(data){
											
											//console.log(data);	
											exam_no = data;
										
										setTimeout(function(){
											
											Swal.fire({
												title: "Exam successfully saved", 
												icon: "success",
											}).then( ( value )  => {
												//$(location).attr('href',"<?php echo base_url();?>c_phrms/intake_up/"+exam_no+"");
											});
										},3000); 

										
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
		
		
			$(document).on("change", "select[name='exam_type'],select[name='exam_bracket']" , function(){
				 
				var exam_type = $("select[name='exam_type']").val();
				var exam_bracket = $("select[name='exam_bracket']").val();
				
				//console.log(exam_type+'='+exam_bracket);
				if(exam_type=='Pre-Employment' && exam_bracket=='4-6'){$('#pass_rate').val('40');}
				else if(exam_type=='Promotional' && exam_bracket=='4-6'){$('#pass_rate').val('40');}
				else if(exam_type=='Pre-Employment' && exam_bracket=='7-9'){$('#pass_rate').val('50');}
				else if(exam_type=='Promotional' && exam_bracket=='7-9'){$('#pass_rate').val('50');}
				else if(exam_type=='Pre-Employment' && exam_bracket=='10-17'){$('#pass_rate').val('60');}
				else if(exam_type=='Promotional' && exam_bracket=='10-17'){$('#pass_rate').val('50');}
				else if(exam_type=='Pre-Employment' && exam_bracket=='18-22'){$('#pass_rate').val('60');}
				else if(exam_type=='Promotional' && exam_bracket=='18-22'){$('#pass_rate').val('50');}
				else{$('#pass_rate').val('60');}
				
				 
				
			});
		
			
		});
	</script>
	
	<style>
		.text-center{
			text-align:center;
		}
		
		.report_table {
			border:1px solid black;
			border-collapse: collapse;
			width:100%;
			
		}
		.report_table td{
			border:1px solid black;
			padding:5px;
			text-align:center;
			width:100px;
		}
		
		
		.row{
			margin-bottom:5px;
		}
	</style>