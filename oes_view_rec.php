	
	<?php foreach ($exam_info as $exam)?>
	
	
	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:80%;text-align:left;padding:20px">	
	<form id="exam_form" name="exam_form" method="POST">		
			
			
				<div class="dropdown" style="margin:0px;float:right;">
				  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-print" aria-hidden="true"></i> <b>Print Examination</b>
				  </a>

				  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					<li><a href="<?php echo base_url();?>c_phrms/que_pdf/<?php echo $exam->exam_id;?>?que=1" target="_blank" class="dropdown-item">Questionnaire</a></li>
					<li><a href="<?php echo base_url();?>c_phrms/que_pdf/<?php echo $exam->exam_id;?>?que=2" target="_blank" class="dropdown-item">Answer Sheet</a></li>
					<li><a href="<?php echo base_url();?>c_phrms/exam_results/<?php echo $exam->exam_id;?>" target="_blank" class="dropdown-item">Exam Result</a></li>
				  </ul>
				</div>
				
			  <h4>Examination Details</h4>
				<hr>
				<br>
				<div class="row">

					<div class="col-sm-12">
					
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Examination Type</div>
							<div class="col-sm-6"><?php echo $exam->exam_type;?></div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Category</div>
							<div class="col-sm-6"><?php echo $exam->exam_category;?></div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Salary Grade Bracket</div>
							<div class="col-sm-6"><?php echo $exam->exam_bracket;?></div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Examination Title</div>
							<div class="col-sm-6"><?php echo $exam->exam_title;?></div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Date of Examination</div>
							<div class="col-sm-3"><?php echo date_format(date_create($exam->exam_date),"F j, Y")."; (".date_format(date_create($exam->time_start),"g:i A")." - ".date_format(date_create($exam->time_end),"g:i A").")";?></div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Passing Rate</div>
							<div class="col-sm-6"><?php echo $exam->pass_rate;?>%</div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">No. of Questions</div>
							<div class="col-sm-2"><label id="no_ques"><?php $exam_questions = json_decode($exam->exam_questions); echo count($exam_questions);?></label></div>
						</div>
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Total Points</div>
							<div class="col-sm-2"><label id="no_points"><?php $exam_questions = json_decode($exam->exam_questions); echo array_sum(array_column($exam_questions,'que_points'));?></label></div>
						</div><br>
						
					</div>	
					
					
				</div>
				
				
				
				<hr>
				
				
				
				<div class="row" style="font-weight:bold">
					<div class="col-sm-12 alert alert-primary">Instruction: Please read the questions carefully and answer accordingly.</div>
				</div>
				<br>
				
				<div id="add_que_sec">
			

				<ol style="padding:0px">
				<?php 
					$exam_questions = json_decode($exam->exam_questions);
					$ex = 0;
					
					
					if(isset($exam_questions)):
					foreach($exam_questions as $ex_row):
					$answers = '';
				?>
				
				
					
					<div class="row" id="que<?php echo $ex_row->q_no;?>" style="margin-bottom:30px;padding:20px;border-radius:0.5em;background-color:#f1f1f1">
							
							<input type="hidden" name="tmp_qno[]" value="<?php echo $ex_row->q_no;?>" class="form-control form-control-sm">
							<li class="que_list">
							<div class="col-sm-11">
								<div class="row">
									<div style="padding:0px 2px;text-align:justify"><?php    echo ") ".$ex_row->question." <i style='margin-left:20px'>".$ex_row->que_type.": </i>"; if($ex_row->que_points>1){echo "<i style='color:red'> (".$ex_row->que_points." Points)</i>";}else{echo "<i style='color:red'> (".$ex_row->que_points." Point)</i>";}?></div>
								</div>
							</div>
							</li>
							
							<ol type="a" style="padding:0px">
							<?php 
							
							$que_opt = json_decode($ex_row->que_opt);
							$opt = 0;
							
							if(isset($que_opt)):
							foreach($que_opt as $opt_row):
						
							?>
							
								
								<?php if($ex_row->que_type=="True or False"):?>
									
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" id="que<?php echo $ex_row->q_no."_tf".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_ans[]" value="<?php echo $opt_row->opt_no;?>" <?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option;}} ?>  ></div>
										<div class="col-sm-2">
											<input type="hidden" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="<?php echo $opt_row->opt_no;?>">
											<label class="form-check-label" for="que<?php echo $ex_row->q_no."_tf".$opt_row->opt_no;?>"><?php echo $opt_row->option;?></label>
										</div>
										
									</div>
									
									
								<?php elseif($ex_row->que_type=="Multiple Choice"):?>
									
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" id="que<?php echo $ex_row->q_no."_rd".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_ans[]" value="<?php echo $opt_row->opt_no;?>" <?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option;}} ?>  ></div>
										<div class="col-sm-6">
											<input type="hidden" class="que<?php echo $ex_row->q_no;?>_opt_no" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="<?php echo $opt_row->opt_no;?>">
											<li style="margin-left:10px">)
											<label class="form-check-label" for="que<?php echo $ex_row->q_no."_rd".$opt_row->opt_no;?>">
												<?php echo $opt_row->option;?>
											</label>
											</li>
										</div>
									</div>
									
								
								<?php elseif($ex_row->que_type=="Check Box"):?>
								
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-1" style="margin-top:8px;width:30px"><input type="checkbox" id="que<?php echo $ex_row->q_no."_cb".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_ans[]" value="<?php echo $opt_row->opt_no;?>" <?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option."<br>";}} ?>   ></div>
										<div class="col-sm-6">
											<input type="hidden" class="que<?php echo $ex_row->q_no;?>_opt_no" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="">
											<label class="form-check-label" for="que<?php echo $ex_row->q_no."_cb".$opt_row->opt_no;?>">
												<?php echo $opt_row->option;?>
											</label>
										</div>
										
									</div>
									
									
								<?php elseif($ex_row->que_type=="Enumeration"):?>
								
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-6">
											<input type="hidden" class="que<?php echo $ex_row->q_no;?>_opt_no" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="<?php echo $opt_row->opt_no;?>">
											<input type="input" id="que<?php echo $ex_row->q_no."_opt".($opt+1);?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter answer" value="<?php $answers.=$opt_row->option."<br>";?>" class="que_choice form-control form-control-sm"  >
										</div>
									</div>
								
								
								<?php elseif($ex_row->que_type=="Essay"):?>
								
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-8">
											<textarea rows="5" id="que<?php echo $ex_row->q_no."_opt".($opt+1);?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"  ><?php $answers.=$opt_row->option;?></textarea>
										</div>
									</div>
								
								
								<?php endif;?>
								
								
								
							<?php $opt++; endforeach; endif;?>
							</ol>
							
							
							
							
							<div class="row alert alert-success" style="margin-top:30px">
								<div class="col-sm-1" style="width:15%"><b><i class="fa fa-check" aria-hidden="true"></i> Answer(s):</b></div>  
								<div class="col-sm-8"><?php echo $answers;?></div>  
							</div>	
							
					</div>
					
				
				<?php $ex++; endforeach; endif;?>
				</ol>
				
					
				</div>
				
				
			  
		</form>
		  </div>
		  		
				
					
								
	<script type="text/javascript">
	
		

		$(document).ready(function(){
			
			
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
								text: 'Examination name already exist!',
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
			
			
			var que_row = <?php echo max(array_column($exam_questions, 'q_no'))+1;?>;
			$('#que_addr').on('click', function() {
				$('#add_que_sec').append('<div class="row" id="que'+que_row+'" style="margin-bottom:30px;padding:20px;border-radius:0.5em;;background-color:#f1f1f1"><input type="hidden" name="tmp_qno[]" value="'+que_row+'" class="form-control form-control-sm"><div class="col-sm-7"><div class="row"><div style="padding:0px 2px"><input type="input" name="exam_questions[]" placeholder="Question" class="form-control form-control-sm"></div></div></div><div class="col-sm-2"><div class="form-group"><select class="que_type form-select form-select-sm" id="que'+que_row+'_type" name="que_type[]"><option value="">-Select Question Type-</option><option value="True or False">True or False</option><option value="Multiple Choice">Multiple Choice</option><option value="Check Box">Check Box</option><option value="Enumeration">Enumeration</option><option value="Essay">Essay</option></select></div></div><div class="col-sm-1"><input type="text" id="que'+que_row+'_points" name="que_points[]" placeholder="No." class="form-control form-control-sm" style="text-align:center"></div><div class="col-sm-1" style="padding:3px 0px"><i style="float:left">Point(s)</i></div><a  class="del_que btn btn-danger btn-sm" title="Delete Row" style="float:right;height:30px;width:30px;color:#fff;margin-left:14px">X</a></div>');
				que_row++;
			});
			
			$(document).on("click", "a.del_que" , function(){
				
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
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" name="'+que_parent+'_ans[]" value="1"></div><div class="col-sm-6"><input type="hidden" class="'+que_parent+'_opt_no" name="'+que_parent+'_opt_no[]" value="1"><input type="input" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><button type="button" id="add_opt" class="btn btn-success btn-sm" style="height:30px"><i class="fa fa-plus" aria-hidden="true"></i></button></div></div>');
						
						$('#'+que_parent+'_points').val(1);
					}
					else if($(this).val()=='Check Box'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="checkbox" name="'+que_parent+'_ans[]" value="1"></div><div class="col-sm-6"><input type="hidden" class="'+que_parent+'_opt_no" name="'+que_parent+'_opt_no[]" value="1"><input type="input" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><button type="button" id="add_sel" class="btn btn-success btn-sm" style="height:30px"><i class="fa fa-plus" aria-hidden="true"></i></button></div></div>');
						
						$('#'+que_parent+'_points').val('');
					}
					else if($(this).val()=='Enumeration'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-6"><input type="hidden" class="'+que_parent+'_opt_no" name="'+que_parent+'_opt_no[]" value="1"><input type="input" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><button type="button" id="add_enum" class="btn btn-success btn-sm" style="height:30px"><i class="fa fa-plus" aria-hidden="true"></i></button></div></div>');
						
						$('#'+que_parent+'_points').val(1);
					}
					else if($(this).val()=='Essay'){
						
						$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row1" style="margin:20px 20px 0px 20px"><div class="col-sm-6"><textarea rows="5" id="'+que_parent+'_opt1" name="'+que_parent+'_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"></textarea></div></div>');
						
						$('#'+que_parent+'_points').val('');
					}
					
			});
			
			
			
			//var ch_row = 52;
			$(document).on("click", "#add_opt" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
				
				var opt_row=[];
				$('.'+que_parent+'_opt_no').each(function(){opt_row.push($(this).val());});
				var ch_row = Math.max.apply(Math,opt_row)+1;
				

				$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row'+ch_row+'" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" name="'+que_parent+'_ans[]" value="'+ch_row+'"></div><div class="col-sm-6"><input type="hidden" class="'+que_parent+'_opt_no" name="'+que_parent+'_opt_no[]" value="'+ch_row+'"><input type="input" id="'+que_parent+'_opt'+ch_row+'" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><a  class="del_option btn btn-danger btn-sm" title="Delete Row" style="height:30px;width:30px;color:#fff">X</a></div></div>');
				//ch_row++;
			});
			
			
			//var sel_row = 52;
			$(document).on("click", "#add_sel" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
				
				var opt_row=[];
				$('.'+que_parent+'_opt_no').each(function(){opt_row.push($(this).val());});
				var sel_row = Math.max.apply(Math,opt_row)+1;
				
				console.log(opt_row);
				$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row'+sel_row+'" style="margin:20px 20px 0px 20px"><div class="col-sm-1" style="margin-top:8px;width:30px"><input type="checkbox" name="'+que_parent+'_ans[]" value="'+sel_row+'"></div><div class="col-sm-6"><input type="hidden" class="'+que_parent+'_opt_no" name="'+que_parent+'_opt_no[]" value="'+sel_row+'"><input type="input" id="'+que_parent+'_opt'+sel_row+'" name="'+que_parent+'_opt[]" placeholder="Enter option" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><a  class="del_option btn btn-danger btn-sm" title="Delete Row" style="height:30px;width:30px;color:#fff">X</a></div></div>');
				//sel_row++;
			});
			
			
			
			//var enum_row = 52;
			$(document).on("click", "#add_enum" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().attr('id'))['selector'].replace('#', '');
				
				var opt_row=[];
				$('.'+que_parent+'_opt_no').each(function(){opt_row.push($(this).val());});
				var enum_row = Math.max.apply(Math,opt_row)+1;
				
				$('#'+$(this).parent().parent().parent().attr('id')).append('<div class="'+que_parent+'_row row" id="'+que_parent+'_row'+enum_row+'" style="margin:20px 20px 0px 20px"><div class="col-sm-6"><input type="hidden" class="'+que_parent+'_opt_no" name="'+que_parent+'_opt_no[]" value="'+enum_row+'"><input type="input" id="'+que_parent+'_opt'+enum_row+'" name="'+que_parent+'_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"></div><div class="col-sm-1"><a  class="del_option btn btn-danger btn-sm" title="Delete Row" style="height:30px;width:30px;color:#fff">X</a></div></div>');
				//enum_row++;
			});
			
			
			
			
			$(document).on("click", "a.del_option" , function(){
				$('#'+$(this).parent().parent().attr('id')).remove();
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
							

							$('#exam_form input[type="date"], input[type="text"]').each(function() {
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
										url: "<?php echo base_url();?>c_phrms/save_exam",
										data: $("#exam_form").serialize(),
										beforeSend:function(){
															
											Swal.fire({
												title: "Updating exam...", 
												icon: "warning",
												showConfirmButton: false,
												didOpen: () => {Swal.showLoading()},
											});
												
										},
										success: function(data){
											
											//console.log(data);	
											exam_no = data;
										
											setTimeout(function(){location.reload();},3000); 
													
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
		
		li.que_list {
			font-weight:bold;
		}
		
		/*
		ol.opt_col {
			display: flex;
			flex-flow: column wrap;
			height: 7em;
		}
		*/
	</style>