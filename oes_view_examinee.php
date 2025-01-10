	
	<?php if(!empty($exam_ans_info)):?>
	<?php foreach ($exam_ans_info as $exam)?>
	
	
	
			<div class="modal fade" id="SameApp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-xl">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">List of Identical Qualified Applicant(s)</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;overflow: auto;">
					
					
					
					
					<table id="list_same_app" class="display cell-border" cellspacing="0" data-page-length='2000' width="100%">
				
						<thead style="text-align:center;background-color:#069e82;color:#fff">
							
							<tr>
								<th width="20px">Select All<br><input style="height:15px;" type="checkbox" name="selec_box" id="selec_box"/></th>
								<th>CODE</th>
								<th>LAST NAME</th>
								<th>FIRST NAME</th>
								<th>MIDDLE NAME</th>
								<th>EXAM TO TAKE</th>
								<th>APPLIED POSITION</th>
								<th>OFFICE</th>
							</tr>
					
						</thead>		
					
					</table>		
					
					
					
					
				 </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-success" id="apply_result">Apply Result</button>
				  </div>
				</div>
			  </div>
			</div>
	
	
	<br>
	<br>
	<div class="shadow p-3 mb-5 bg-body rounded" style="width:80%;text-align:left;padding:20px">	
	<form id="exam_form" name="exam_form" method="POST">		
			
			<?php if($exam->exam_result!=''):?>
				<a href="<?php echo base_url();?>c_phrms/score_pdf/<?php echo $exam->u_id;?>" target="_blank" class="btn btn-warning" style="float:right;font-weight:bold"><i class="fa fa-print" aria-hidden="true"></i> Print Result</a>
			<?php endif;?>
			
			<div class="dropdown" style="margin-right:20px;float:right;">
			  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa fa-envelope-o" aria-hidden="true"></i> <b>Email</b>
			  </a>

			  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				<li><a href="#" id="email_account_btn" class="dropdown-item">User Account</a></li>
				<?php if($exam->exam_result!=''):?><li><a href="#" id="email_btn" class="dropdown-item">Exam Result</a></li><?php endif;?>
			  </ul>
			</div>
			
			
			
			
			
			<!--<a href="#" id="email_btn" class="btn btn-primary" style="float:right;font-weight:bold;margin-right:20px"><i class="fa fa-print" aria-hidden="true"></i> Email Result</a>
			<a href="#" id="sms_btn" class="btn btn-primary" style="float:right;font-weight:bold;margin-right:20px"><i class="fa fa-print" aria-hidden="true"></i> Send SMS</a>-->
				
			  <h4><?php echo strtoupper($exam->f_name." ".$exam->m_name." ".$exam->l_name);?> (<?php echo $exam->applicant_code;?>)</h4>
			  <span id="emp_email"><?php echo $exam->e_mail;?></span>
				<hr>
				<br>
				<div class="row">
				
					<div class="col-sm-12">
						
						<input type="hidden" name="exam_id" value="<?php echo $exam->exam_id;?>">
						
						<input type="hidden" id="app_code" name="app_code" value="<?php echo $exam->applicant_code;?>">
						<input type="hidden" id="pass_rate" name="pass_rate" value="<?php echo $exam->pass_rate;?>">
						<input type="hidden" id="exam_status" name="exam_status" value="">
						
						<input type="hidden" id="firstname" name="firstname" value="<?php echo $exam->f_name;?>">
						<input type="hidden" id="surname" name="surname" value="<?php echo $exam->l_name;?>">
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Examination Type</div>
							<div class="col-sm-6">: <?php echo $exam->exam_type;?></div>
						</div>
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Category</div>
							<div class="col-sm-6">: <?php echo $exam->exam_category;?></div>
						</div>
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Salary Grade Bracket</div>
							<div class="col-sm-6">: <?php echo $exam->exam_bracket;?></div>
						</div>
						<input type="hidden" id="u_id" name="u_id" value="<?php echo $exam->u_id;?>">
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Examination Title</div>
							<div class="col-sm-6">: <?php echo $exam->exam_title;?></div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Date of Examination</div>
							<div class="col-sm-6">: <?php echo date_format(date_create($exam->exam_date),"F j, Y")."; (".date_format(date_create($exam->time_start),"g:i A")." - ".date_format(date_create($exam->time_end),"g:i A").")";?></div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Passing Rate</div>
							<div class="col-sm-1">: <?php echo $exam->pass_rate;?>%</div>
						</div>
						
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">No. of Questions</div>
							<div class="col-sm-2">: <label id="no_ques"><?php	if(!empty($exam->exam_ques)){$exam_questions = json_decode($exam->exam_ques); echo count($exam_questions);}?></label></div>
						</div>
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Score</div>
							<div class="col-sm-2">: <label id="no_points"></label><?php if(!empty($exam->exam_ques)){$exam_questions = json_decode($exam->exam_ques); echo " out of ".array_sum(array_column($exam_questions,'que_points'));}?> (<label id="points_percent"></label>%)</div>
						</div>
						<div class="row">
							<div class="col-sm-2" style="font-weight:bold">Result</div>
							<div class="col-sm-2">: <?php if($exam->exam_result!=''):?><label id="exam_result" style="font-weight:bold"></label><?php else:?><label style="color:blue;font-weight:bold">FOR REVIEW</label><?php endif;?></div>
						</div><br>
						
						
					</div>	
					
					
				</div>
				
				
				
				<hr>
				
				<div class="row" style="font-weight:bold">
					<div class="col-sm-12 alert alert-primary">NOTE: Kindly double check the answers and supply scores for Enumation & Essay questions.</div>
				</div>
				<br>
				
				<div id="add_que_sec">
			

				<ol style="padding:0px">
				<?php 
					
					$exam_ans = json_decode($exam->exam_ans);
					$exam_questions = json_decode($exam->exam_ques);
					$ex = 0;
					
					
					if(!empty($exam_questions)):
					foreach($exam_questions as $ex_row):
					
						
					
					
						$answers = '';
						$answer=json_decode($ex_row->answer); 
						
						
						
						$score = '';
						$examinee_answers = '';
						$que_points = '';
						
						if(!empty($exam_ans)){
						foreach($exam_ans as $row){
							
							if($row->q_no==$ex_row->q_no){
								$examinee_answers = json_decode($row->answer);
								$exam_answers = json_decode($ex_row->answer);
								
								if(!empty($examinee_answers)){
									foreach($examinee_answers as $pers_ans){
										
										foreach($exam_answers as $correct_ans){
											
											//echo $pers_ans." = ".$correct_ans."<br>";
											if($pers_ans==$correct_ans){
												$score++;
												
												
											}
											
										}
										
									}
								}
								
								$que_points = $row->que_points;
							
							}
							
						}
						}
						
						
						if($score=='' AND $ex_row->que_type!='Essay' AND $ex_row->que_type!='Enumeration'){$score=0;}
					
					
				?>
				
					
					
					<div class="row <?php if($que_points==''){$pref="$score";}else{$pref="$que_points";} if($pref>0){echo "alert alert-success";}else{if(($ex_row->que_type=="Enumeration" OR $ex_row->que_type=="Essay") AND $que_points==''){echo "alert alert-primary";}else{echo "alert alert-danger";}}?>" id="que<?php echo $ex_row->q_no;?>" style="margin-bottom:30px;padding:20px;border-radius:0.5em;background-color:#f1f1f1">
							
							<input type="hidden" name="tmp_qno[]" value="<?php echo $ex_row->q_no;?>" class="form-control form-control-sm">
							<li class="que_list" style="padding:0px"> 
							<div class="row">
							
								<input type="hidden" name="exam_questions[]" value="<?php echo $ex_row->question;?>">
								<input type="hidden" name="que_type[]" value="<?php echo $ex_row->que_type;?>">
									
								<div class="col-sm-8"><div style="padding:6px 2px;text-align:justify"><?php echo ") ".$ex_row->question;?></div></div>
								
								<div class="col-sm-2" style="text-align:right;padding-top:6px">
									<?php if($pref>0):?>
									<i class="fa fa-check-circle" aria-hidden="true"></i> Correct	
									<?php else:?>
									
										<?php if(($ex_row->que_type=="Enumeration" OR $ex_row->que_type=="Essay") AND $que_points==''):?>
											<i class="fa fa-info-circle" aria-hidden="true"></i> For Review
										<?php else:?>
											<i class="fa fa-times-circle" aria-hidden="true"></i> Incorrect	
										<?php endif;?>
									
									<?php endif;?>
								</div>
								<div class="col-sm-2" >
								
									<div class="input-group input-group-sm mb-3">
									  <div class="input-group-prepend"><span class="input-group-text" id="inputGroup-sizing-sm" style="font-weight:bold">Score:</span> </div>
									  <input type="text" id="que<?php echo $ex_row->q_no;?>_points" name="que_points[]" placeholder="No." value="<?php if($que_points==''){echo $score;}else{echo $que_points;}?>" class="qpoint form-control form-control-sm" style="text-align:center" <?php if($ex_row->que_type=="True or False" OR $ex_row->que_type=="Multiple Choice" OR $ex_row->que_type=="Check Box"){echo "readonly";}?> >
									 
										<?php echo "<span style='margin:6px'> of ".$ex_row->que_points."</span>";?>
										<?php echo "<div id='que".$ex_row->q_no."_points_notif' style='font-size:14px;color:red'></div>";?>
									 <input type="hidden" id="que<?php echo $ex_row->q_no;?>_point" value="<?php echo $ex_row->que_points;?>" />
									</div>
								
								</div>
								
							</div>
							</li>
							
							<ol type="a" style="padding:0px">
							<?php 
							
							$que_opt = json_decode($ex_row->que_opt);
							$opt = 0;
							
							if(isset($que_opt)):
							foreach($que_opt as $opt_row):
							
							if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option."<br>";}}
							
							
							//echo $opt_row->opt_no;
							//echo $opt_row->opt_no." = ".$ex_ans." = ".$opt_row->opt_no;
							?>
							
								
								<?php if($ex_row->que_type=="True or False"):?>
									
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" id="que<?php echo $ex_row->q_no."_tf".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_ans[]" value="<?php echo $opt_row->opt_no;?>" <?php if(!empty($examinee_answers)){if(in_array($opt_row->opt_no, $examinee_answers)){echo "checked";}} ?> onclick="return false;" ></div>
										<div class="col-sm-2">
											<input type="hidden" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="<?php echo $opt_row->opt_no;?>">
											<input type="hidden" id="que<?php echo $ex_row->q_no."_opt".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter option" value="<?php echo $opt_row->option;?>" class="que_choice form-control form-control-sm">
											<label class="form-check-label" for="que<?php echo $ex_row->q_no."_tf".$opt_row->opt_no;?>"><?php echo $opt_row->option;?></label>
										</div>
										
									</div>
									
									
								<?php elseif($ex_row->que_type=="Multiple Choice"):?>
									
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-1" style="margin-top:8px;width:30px"><input type="radio" id="que<?php echo $ex_row->q_no."_rd".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_ans[]" value="<?php echo $opt_row->opt_no;?>" <?php if(!empty($examinee_answers)){if(in_array($opt_row->opt_no, $examinee_answers)){echo "checked";}} ?> onclick="return false;" ></div>
										<div class="col-sm-6">
											<input type="hidden" class="que<?php echo $ex_row->q_no;?>_opt_no" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="<?php echo $opt_row->opt_no;?>">
											<input type="hidden" id="que<?php echo $ex_row->q_no."_opt".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter option" value="<?php echo $opt_row->option;?>" class="que_choice form-control form-control-sm">
											<li style="margin-left:10px">)
											<label class="form-check-label" for="que<?php echo $ex_row->q_no."_rd".$opt_row->opt_no;?>">
												<?php echo $opt_row->option;?>
											</label>
											</li>
										</div>
									</div>
									
								
								<?php elseif($ex_row->que_type=="Check Box"):?>
								
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-1" style="margin-top:8px;width:30px"><input type="checkbox" id="que<?php echo $ex_row->q_no."_cb".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_ans[]" value="<?php echo $opt_row->opt_no;?>" <?php if(!empty($examinee_answers)){if(in_array($opt_row->opt_no, $examinee_answers)){echo "checked";}}  ?> onclick="return false;"  ></div>
										<div class="col-sm-6">
											<input type="hidden" class="que<?php echo $ex_row->q_no;?>_opt_no" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="">
											<input type="hidden" id="que<?php echo $ex_row->q_no."_opt".$opt_row->opt_no;?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter option" value="<?php echo $opt_row->option;?>" class="que_choice form-control form-control-sm">
											<label class="form-check-label" for="que<?php echo $ex_row->q_no."_cb".$opt_row->opt_no;?>">
												<?php echo $opt_row->option;?>
											</label>
										</div>
										
									</div>
									
									
								<?php elseif($ex_row->que_type=="Enumeration"):?>
								
									<?php $answers.=$opt_row->option."<br>";?>
									<!--
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-6">
											<input type="hidden" class="que<?php echo $ex_row->q_no;?>_opt_no" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="<?php echo $opt_row->opt_no;?>">
											<input type="input" id="que<?php echo $ex_row->q_no."_opt".($opt+1);?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter answer" value="" class="que_choice form-control form-control-sm"  >
										</div>
									</div>
									-->

								
								<?php elseif($ex_row->que_type=="Essay"):?>
								
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-8">
											<textarea readonly class="form-control-plaintext" rows="5" id="que<?php echo $ex_row->q_no."_opt".($opt+1);?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter answer" class="que_choice form-control form-control-sm"  ><?php $answers.=$opt_row->option; if(!empty($examinee_answers[0])){echo $examinee_answers[0];} ?></textarea>
										</div>
									</div>
								
								
								<?php endif;?>
								
								
								
							<?php $opt++; endforeach; endif;?>
							
							
								<?php if($ex_row->que_type=="Enumeration"): 
									$cnt=0;
										if(!empty($examinee_answers)):
									
										foreach($examinee_answers as $enum_ans):
								?>
									
									<div class="que<?php echo $ex_row->q_no;?>_row row" id="que<?php echo $ex_row->q_no."_row".$opt_row->opt_no;?>" style="margin:20px 20px 0px 20px">
										<div class="col-sm-6">
											<input type="hidden" class="que<?php echo $ex_row->q_no;?>_opt_no" name="que<?php echo $ex_row->q_no;?>_opt_no[]" value="<?php echo $opt_row->opt_no;?>">
											<input type="<?php if($enum_ans!=''){echo "input";}else{echo "hidden";} ?>" id="que<?php echo $ex_row->q_no."_opt".($cnt+1);?>" name="que<?php echo $ex_row->q_no;?>_opt[]" placeholder="Enter answer" value="<?php echo $enum_ans; ?>" class="que_choice form-control form-control-sm form-control-plaintext" readonly >
											
										</div>
									</div>
								<?php $cnt++; endforeach; endif; endif;?>
							
							</ol>
							
							
							
							
							<div class="row alert alert-warning" style="margin-top:30px">
								<div class="col-sm-1" style="width:15%"><b>Correct Answer(s):</b></div>  
								<div class="col-sm-8"><?php echo $answers;?></div>  
							</div>	
					</div>
					
				
				
				<?php $ex++; endforeach; endif;?>
				</ol>
				
					
				</div>
				
				
			  
		</form>
		  </div>
	
	
	
			<br>	
				<button type="button" id="submit_btn" class="btn btn-success btn-lg"><i class="fa fa-floppy-o" aria-hidden="true"></i> <b>Update Final Score</b></button>	
			<br>	
			<br>	
			<br>	
			<br>	
			
	<?php else:?>
				<br>	
				<br>	
				<br>	
				<br>
				<br>
				<br>
				<br>
				<div class="card" style="width: 40rem;">
				  <div class="card-body">
					
					
					<h2 class="card-title alert alert-warning">NOTICE</h2>
					<h4 class="card-text">No assigned examination set. <br><br>Thank you</h4>
					
					
				  </div>
				</div>
	
	<?php endif;?>			
					
								
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
			
			
			
			$('#no_points').text(sum_points);
			
			
			var points_percent = parseFloat(<?php if(!empty($exam_questions)){echo array_sum(array_column($exam_questions,'que_points'));}else{echo 1000;}?>);
			var perc = (parseFloat($('#no_points').text())/points_percent)*100;
			var pass_rate = $('#pass_rate').val();
			$('#points_percent').text(perc.toFixed());
			
			if(perc.toFixed()>=pass_rate){
				$('#exam_status').val('Passed').css({"color":"green",});
				$('#exam_result').text('PASSED').css({"color":"green",});
			}else{
				$('#exam_status').val('Failed').css({"color":"red",});
				$('#exam_result').text('FAILED').css({"color":"red",});
			}
			
			
			$(document).on("change", ".qpoint" , function(){
				
				var que_parent = $('#'+$(this).parent().parent().parent().parent().parent().attr('id'))['selector'].replace('#', '');
				var num_points = parseInt($("#"+que_parent+"_point").val());
				
				var pass_rate = $('#pass_rate').val();
				
				
					if($(this).val() > num_points){
						//console.log('oops');
						Swal.fire({
							title: 'Error!',
							text: 'Score entered exceeds the maximum points for this question.',
							icon: 'error',
							
						}).then( ( value )  => {
							$(this).val('');
						});
						
					}
				
				$('#no_points').text(sum_points);
				var points_percent = parseFloat(<?php if(!empty($exam_questions)){echo array_sum(array_column($exam_questions,'que_points'));}else{echo 1000;}?>);
				var perc = (parseFloat($('#no_points').text())/points_percent)*100;
				$('#points_percent').text(perc.toFixed());
				
				if(perc.toFixed()>=pass_rate){
					$('#exam_status').val('Passed').css({"color":"green",});
					$('#exam_result').text('PASSED').css({"color":"green",});
				}else{
					$('#exam_status').val('Failed').css({"color":"red",});
					$('#exam_result').text('FAILED').css({"color":"red",});
				}
				
				
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
			
			
			var que_row = <?php  if(!empty($exam_questions)){echo max(array_column($exam_questions, 'q_no'))+1;}else{echo 0;}?>;
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
				
				//console.log(opt_row);
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
			
			


			$("#submit_btn").click(function(){ 
							  
					var exam_no = '';
					var error = '';
					var count_same_app = 0;
					var form_data = new FormData();
					var isValid = true;
					
					
					
					$('#exam_form input[type="text"]').each(function() {
						
						
						
						if ($.trim($(this).val()) == '') {
							
							var que_parent = $('#'+$(this).attr('id'))['selector'].replace('#', '');
							
							isValid = false;
							$(this).css({
								"border": "1px solid red",
								"background": "#feebeb"
							});
							
							$('#'+que_parent+'_notif').append('<span>Provide score here!</span>');
							setTimeout(function(){$('#'+que_parent+'_notif').children().remove('span');}, 5000);
							
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
					
					
					if (isValid == false){error = "Please provide score for this question.";}
					
					
							
					  if(error == '')
							  {
								  
								$.ajax({
									url:"<?php echo base_url(); ?>c_phrms/get_no_same_app",
									method:"POST",
									dataType: 'json',
									data:{'firstname': $('#firstname').val(), 'surname': $('#surname').val()},
									success: function(data) {
										
										count_same_app = data[0]['count_app'];
										console.log(count_same_app);
										
										
										if(count_same_app>1){
											$('#SameApp').modal('show');
										}else{
											$.ajax({ 
												type: "POST", 
												url: "<?php echo base_url();?>c_phrms/update_exam_score",
												data: $("#exam_form").serialize(),
												beforeSend:function(){
																	
													Swal.fire({
														title: "Updating score...", 
														icon: "warning",
														showConfirmButton: false,
														didOpen: () => {Swal.showLoading()},
													});
														
												},
												success: function(data){
													
													setTimeout(function(){location.reload();},3000); 											
															
												}
											});
										}
										
										
									}
								});
								

								 
							  }
					  else
					  {
						
						/* Swal.fire({
							text: error,
							icon: "warning",
						}); */

					 }	  
				  
		});
		
			
			$('#email_btn').on('click',function(){
			
				var emp_email=$('#emp_email').text();
				var u_id=$('#u_id').val();
				
				
				if(emp_email.indexOf('@')!=-1){
				  $.ajax({ 
						type: "GET", 
						url: "<?php echo base_url();?>c_phrms/send_mail/"+u_id+"",
						beforeSend:function(){
							Swal.fire({
								title: "Sending result to "+emp_email, 
								icon: "warning",
								showConfirmButton: false,
								didOpen: () => {Swal.showLoading()},
							});
						},
						success: function(data){
							
							//if(data=='Sent'){
								
								Swal.fire({
									title: "Email sent!", 
									icon: "success",
									showConfirmButton: true,
								});
							
							/* }else{
								Swal.fire({
									title: "Sending failed!", 
									icon: "error",
									showConfirmButton: true,
								});
							} */
								
						}
				  });
				}else{
					Swal.fire({
						title: "Invalid email address!", 
						icon: "error",
						showConfirmButton: true,
					});
				} 
				
			});
			
			
			$('#email_account_btn').on('click',function(){
			
				var emp_email=$('#emp_email').text();
				var u_id=$('#u_id').val();
				
				
				if(emp_email.indexOf('@')!=-1){
				  $.ajax({ 
						type: "GET", 
						url: "<?php echo base_url();?>c_phrms/email_account/"+u_id+"",
						beforeSend:function(){
							Swal.fire({
								title: "Sending user credentials to "+emp_email, 
								icon: "warning",
								showConfirmButton: false,
								didOpen: () => {Swal.showLoading()},
							});
						},
						success: function(data){
							
							//if(data=='Sent'){
								
								Swal.fire({
									title: "Email sent!", 
									icon: "success",
									showConfirmButton: true,
								});
							
							/* }else{
								Swal.fire({
									title: "Sending failed!", 
									icon: "error",
									showConfirmButton: true,
								});
							} */
								
						}
				  });
				}else{
					Swal.fire({
						title: "Invalid email address!", 
						icon: "error",
						showConfirmButton: true,
					});
				} 
				
			});
			
			$('#sms_btn').on('click',function(){
			
				
				
				  $.ajax({ 
						type: "GET", 
						url: "<?php echo base_url();?>c_phrms/send_sms",
						beforeSend:function(){
							Swal.fire({
								title: "Sending SMS", 
								icon: "warning",
								showConfirmButton: false,
								didOpen: () => {Swal.showLoading()},
							});
						},
						success: function(data){
							
							//if(data=='Sent'){
								
								Swal.fire({
									title: "SMS sent!", 
									icon: "success",
									showConfirmButton: true,
								});
							
							/* }else{
								Swal.fire({
									title: "Sending failed!", 
									icon: "error",
									showConfirmButton: true,
								});
							} */
								
						}
				  });
				
				
			});
			
			
			var lsa_tbl = $('#list_same_app').DataTable({
					
					"bSortClasses": false,
					"processing":true,
					"serverSide":true,
					"ajax": {
						"url": '<?php echo base_url();?>c_phrms/get_samelist_app_data',
						"type": "POST",
						"data": function (d) {
							return $.extend({},d,{
								"app_code":$('#app_code').val(),
								"surname":$('#surname').val(),
								"firstname":$('#firstname').val(),
							});
						}
					},
					
					'columns': [
						 { data: 'select_box' },
						 { data: 'applicant_code' },
						 { data: 'surname' },
						 { data: 'firstname' },
						 { data: 'middlename' },
						 { data: 'exam_take' },
						 { data: 'vac_position' },
						 { data: 'vac_place' },
					 ],
					 
					//"bLengthChange": true,
					"dom": '<"toolbar">rt',
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
					lsa_tbl.rows( {search: 'applied'} ).select();        
				} else {
					lsa_tbl.rows(  ).deselect(); 
					lsa_tbl.columns('').search('').draw();
				}
			});
			
			$("#apply_result").click(function(e){ 
			
			
					var tbl_data = lsa_tbl.rows({selected : true}).data().toArray();
					var sel_count= lsa_tbl.rows({selected : true}).count();
					if(sel_count==0){
						alert('No selected record(s). Please select atleast one record. Thank you');
					}
					else{
						
						$.ajax({ 
							type: "POST", 
							url: "<?php echo base_url();?>c_phrms/update_exam_score",
							data: $("#exam_form").serialize(),
							success: function(data){
								
								$.ajax({
									url:"<?php echo base_url(); ?>c_phrms/update_same_score",
									method:"POST",
									dataType: 'json',
									data: {"tbl_data":tbl_data, "exam_status":$('#exam_status').val()},
									beforeSend:function(){
										
										$('#SameApp').modal('hide');
														
										Swal.fire({
											title: "Updating score...", 
											icon: "warning",
											showConfirmButton: false,
											didOpen: () => {Swal.showLoading()},
										});
											
									},
									success: function(data) {
									
										setTimeout(function(){location.reload();},3000); 	
										
									}
								});
										
							}
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