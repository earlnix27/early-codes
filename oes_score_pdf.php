<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Examination Result</title>
</head>
	<style type="text/css">
		
		#header{
			width: 100%;
			height: 50px;
			margin:0px;
			font-family: arial;
		}
		
		#header img{
			height: 75px;
			margin-top:50px;
		}
		
		#header ul{
			list-style-type: none;
		}
		#header {
			font-size:14px;
		}

		#header h2{
			font-size:25px;
			margin: 0px;
		}	
				
		
		#main_content{
			width: 100%;
			font-size: 14px;
		}
		
		#main_content table{
			border-collapse:collapse;
			margin: 0px;
			border: 0px solid black;
			font-size:13px;
			width: 730px;
		}
		#main_content table td{
			border: 0px solid black;
			padding:3px;
			
		}
		#chk_box{
			border: 1px solid black;
			height: 10px;
			width: 10px;
			margin: 0px 5px 0px 0px;
		}
		#chk_box2{
			background-color:black;
			border: 1px solid black;
			height: 10px;
			width: 10px;
			margin: 0px 5px 0px 0px;
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
		}
		
		
		.title_td{
			background-color:#dedede;
			font-weight:bold;
		}
		
		.correct{
			color:green;
		}
		
		.incorrect{
			color:red;
		}
		
		.review{
			color:blue;
		}
		
		
		.page_break { page-break-after: always; }
		
	</style>

	
	
	<div id="main_content">
		
	<?php foreach ($exam_ans_info as $exam)?>
	<?php 
	
			$exam_ans = json_decode($exam->exam_ans);
			$exam_questions = json_decode($exam->exam_ques);
			
			$total_score= 0;
			
			if(isset($exam_questions)){
			foreach($exam_questions as $ex_row){
			
				$score = 0;
				$examinee_answers = '';
				$exam_answers = '';
				$que_points = '';
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
				
				if($que_points==''){$total_score+=$score;}else{$total_score+=$que_points;}
				
			}
			}
	
	?>
	
	
			<div style="position:absolute;padding:5px;width:150px;height:90px;margin:-20px 0px 0px 520px;">
				<h3>
				<?php 
				if(!empty($exam->exam_ques)){
					$exam_questions = json_decode($exam->exam_ques); 
					echo "Score: ".$total_score."/".array_sum(array_column($exam_questions,'que_points'))." (".(int)(($total_score/array_sum(array_column($exam_questions,'que_points')))*100)."%)";
					echo "<br>";
					
					echo "Result: ";
					if((int)(($total_score/array_sum(array_column($exam_questions,'que_points')))*100)>=$exam->pass_rate){
						echo "<span style='color:green'>PASSED</span>";
					}else{
						echo "<span style='color:red'>FAILED</span>";
					}
				}
				?>
				</h3>
			</div>
	
	
	
	<br>
	<br>
	<div style="width:90%;margin-left:30px;">	
		
				<table style="width:100%">
						
						<tr>
							<td style="font-weight:bold;width:150px;border-width:0px">Examination Type</td>
							<td style="border-width:0px"><?php echo $exam->exam_type;?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;width:150px;border-width:0px">Category</td>
							<td style="border-width:0px"><?php echo $exam->exam_category;?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;width:150px;border-width:0px">Salary Grade Bracket</td>
							<td style="border-width:0px"><?php echo $exam->exam_bracket;?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;width:150px">Examinee</td>
							<td><?php echo $exam->f_name." ".$exam->m_name." ".$exam->l_name." (".$exam->applicant_code.")";?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;width:150px">Examination Title</td>
							<td><?php echo $exam->exam_title;?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold">Date of Examination</td>
							<td><?php echo date_format(date_create($exam->exam_date),"F j, Y")."; (".date_format(date_create($exam->time_start),"g:i A")." - ".date_format(date_create($exam->time_end),"g:i A").")";?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;width:150px">Passing Rate</td>
							<td><?php echo $exam->pass_rate;?>%</td>
						</tr>
						
						<tr>
							<td style="font-weight:bold">No. of Questions</td>
							<td><label id="no_ques"><?php if(!empty($exam->exam_ques)){$exam_questions = json_decode($exam->exam_ques); echo count($exam_questions);}?></label></td>
						</tr>
						<tr>
							<td class="col-sm-2" style="font-weight:bold">Total Points</td>
							<td><label id="no_points"><?php if(!empty($exam->exam_ques)){$exam_questions = json_decode($exam->exam_ques); echo array_sum(array_column($exam_questions,'que_points'));}?></label></td>
						</tr>
						
				</table>
				
				
				
				<br>
				<br>
				
			

				<ol style="padding:0px">
				
				<?php 
				
					$exam_ans = json_decode($exam->exam_ans);
					$exam_questions = json_decode($exam->exam_ques);
					$ex = 0;
					
					
					if(isset($exam_questions)):
					foreach($exam_questions as $ex_row):
					
					$answers = '';
					$answer=json_decode($ex_row->answer); 
						
						
						
						$score = 0;
						$examinee_answers = '';
						$exam_answers = '';
						$que_points = '';
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
				?>
				
							<li style="margin-left:20px">
								
								<div style="padding:0px 2px;text-align:justify">
									
									<?php echo ") ".$ex_row->question;?>
									
									<span style="border:1px solid; font-weight:bold;margin-left:10px" class="<?php if($que_points==''){$pref="$score";}else{$pref="$que_points";} if($pref>0){echo "correct";}else{if(($ex_row->que_type=="Enumeration" OR $ex_row->que_type=="Essay") AND $que_points==''){echo "review";}else{echo "incorrect";}}?>" >
										<?php if($pref>0):?>
											Correct	
										<?php else:?>
									
										<?php if(($ex_row->que_type=="Enumeration" OR $ex_row->que_type=="Essay") AND $que_points==''):?>
											For Review
										<?php else:?>
											Incorrect	
										<?php endif;?>
									
										<?php endif;?>
									</span>

									<b style='margin-left:10px'>Point(s): <?php if($que_points==''){echo $score; $total_score+=$score;}else{echo $que_points; $total_score+=$que_points;} echo "/".$ex_row->que_points;?></b>
								</div>
							
							</li>
							
							
							<br>
							<br>
							
							<ol style="list-style: none;padding:0px">
							<?php 
							
							$que_opt = json_decode($ex_row->que_opt);
							$opt = 0;
							
							if(isset($que_opt)):
							foreach($que_opt as $opt_row):
							
						
							?>
							
								
								<?php if($ex_row->que_type=="True or False"):?>
										
										<li style="margin-left:30px">
											<input type="radio" value="" style="margin-top:4px" <?php if(!empty($examinee_answers)){if(in_array($opt_row->opt_no, $examinee_answers)){echo "checked";}} ?> > <?php echo $opt_row->option;?>
											<?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option;}} ?>
										</li>
									
									
									
								<?php elseif($ex_row->que_type=="Multiple Choice"):?>
									
									<li style="margin-left:30px">
										<input type="radio" value="" style="margin-top:4px" <?php if(!empty($examinee_answers)){if(in_array($opt_row->opt_no, $examinee_answers)){echo "checked";}} ?>> <?php echo $opt_row->option;?>
										<?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option;}} ?>
									</li>
									
								
								<?php elseif($ex_row->que_type=="Check Box"):?>
								
										<li style="margin-left:30px">
											<input type="checkbox" value="" style="margin-top:6px" <?php if(!empty($examinee_answers)){if(in_array($opt_row->opt_no, $examinee_answers)){echo "checked";}}  ?>>	<?php echo $opt_row->option;?>
											<?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option."<br>";}} ?>
										</li>
								
									
								<?php elseif($ex_row->que_type=="Enumeration"):?>
									<!--
										<li style="margin-left:30px">
											<input type="text" value=".">
											<?php $answers.=$opt_row->option."<br>";?>
										</li>
									-->	
								
								
								<?php elseif($ex_row->que_type=="Essay"):?>
										<li style="margin-left:30px">
											<?php $answers.=$opt_row->option; echo $examinee_answers[0]; ?>
										</li>
								
								
								<?php endif;?>
								
								
								
							<?php $opt++; endforeach; endif;?>
							
							
							
								<?php if($ex_row->que_type=="Enumeration"){
										$cnt=0;
										if(!empty($examinee_answers)){
									
										foreach($examinee_answers as $enum_ans){
											
											echo "<li style='margin-left:30px'>".$enum_ans."</li>";
								
								$cnt++; }}}?>
							
							
							
							
							</ol>
							
							
							
							
							<div class="row alert alert-success" style="margin-top:30px">
								<div><b>Correct Answer(s):</b></div> 						
								<div style="margin:10px 0px 0px 50px"><?php echo $answers;?></div>  
							</div>	
							<br>
							<hr>
							<br>
					
				
				<?php $ex++; endforeach; endif;?>
				</ol>
				
	
		  </div>
		  		
				
	</div>
	
				
				
				
				
				
				