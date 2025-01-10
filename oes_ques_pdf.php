<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php if($que==1):?>Questionnaire<?php else:?>Answer Sheet<?php endif;?></title>
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
		
		
		.page_break { page-break-after: always; }
		
	</style>

	
	
	<div id="main_content">
		
	<?php foreach ($exam_info as $exam)?>
	
	
	
	<br>
	<br>
	<div style="width:90%;margin-left:30px;">	
		
				<table style="width:100%">
						<?php if($que==1):?>
						<tr>
							<td style="font-weight:bold;width:150px">Name of Examinee</td>
							<td></td>
						</tr>
						<?php endif;?>
						
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
							<td><label id="no_ques"><?php $exam_questions = json_decode($exam->exam_questions); echo count($exam_questions);?></label></td>
						</tr>
						<tr>
							<td class="col-sm-2" style="font-weight:bold">Total Points</td>
							<td><label id="no_points"><?php $exam_questions = json_decode($exam->exam_questions); echo array_sum(array_column($exam_questions,'que_points'));?></label></td>
						</tr>
						
				</table>
				
				
				
				<br>
				<br>
				<div class="row" style="font-weight:bold">
					<div class="col-sm-12 alert alert-primary">Instruction: Please read the questions carefully and answer accordingly.</div>
				</div>
				<hr>
				
			

				<ol style="padding:0px">
				
				<?php 
					$exam_questions = json_decode($exam->exam_questions);
					$ex = 0;
					
					
					if(isset($exam_questions)):
					foreach($exam_questions as $ex_row):
					$answers = '';
				?>
				
							<li style="margin-left:20px">
								<div style="padding:0px 2px;text-align:justify"><?php echo ") ".$ex_row->question; if($ex_row->que_points>1){echo "<i style='color:red'> (".$ex_row->que_points." Points)</i>";}else{echo "<i style='color:red'> (".$ex_row->que_points." Point)</i>";}?></div>
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
											<input type="radio" value="" style="margin-top:4px"> <?php echo $opt_row->option;?>
											<?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option;}} ?>
										</li>
									
									
									
								<?php elseif($ex_row->que_type=="Multiple Choice"):?>
									
									<li style="margin-left:30px">
										<input type="radio" value="" style="margin-top:4px"> <?php echo $opt_row->option;?>
										<?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option;}} ?>
									</li>
									
								
								<?php elseif($ex_row->que_type=="Check Box"):?>
								
										<li style="margin-left:30px">
											<input type="checkbox" value="" style="margin-top:6px">	<?php echo $opt_row->option;?>
											<?php $answer=json_decode($ex_row->answer); if(!empty($answer)){if(in_array($opt_row->opt_no, $answer)){$answers.=$opt_row->option."<br>";}} ?>
										</li>
								
									
								<?php elseif($ex_row->que_type=="Enumeration"):?>
								
										<li style="margin-left:30px">
											-<br>
											<?php $answers.=$opt_row->option."<br>";?>
										</li>
										
								
								
								<?php elseif($ex_row->que_type=="Essay"):?>
								
										<textarea style="height:100px;border:0px"><?php $answers.=$opt_row->option;?></textarea>
								
								
								
								<?php endif;?>
								
								
								
							<?php $opt++; endforeach; endif;?>
							</ol>
							<br>
							
							
							<?php if($que!=1):?>
							<div class="row alert alert-success" style="margin-top:20px">
								<div><b>Correct Answer(s):</b></div> 						
								<div style="margin:10px 0px 0px 50px"><?php echo $answers;?></div>  
							</div>	
							
							
							<br>
							<hr>
							
							<?php endif;?>
							<br>
							
							
				
				<?php $ex++; endforeach; endif;?>
				</ol>
				
				
				
			  
	
		  </div>
		  		
				
	</div>