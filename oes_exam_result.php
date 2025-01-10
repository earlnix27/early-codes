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
		
		#header td{
			border:2px solid red;
		}
		#header img{
			height: 75px;
		}
		
		#header ul{
			list-style-type: none;
			margin-left: 0px;
			padding: 0;
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
			border: 1px solid black;
			padding:5px;
			text-align:left;
		}
		#main_content table th{
			border: 1px solid black;
			padding:5px;
			text-align:center;
			
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
	
	
				<div id="header">
					
					<table>
						<tr>
						<td style="width:100px;text-align:center;border-width:0px"><img src="./ext_lib/images/DENR_Logo2.jpg" alt=""/></td>
						<td style="text-align:center;font-size:12px;width:400px;border-width:0px">
							<ul>
								<li>
								<?php 
								
									echo "<p style='font-size:15px;font-weight:bold;margin:0px'>DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES</p>";
									echo "<p style='font-size:14px;margin:0px'>KAGAWARAN NG KAPALIGIRAN AT LIKAS YAMAN</p>";
									echo "Region 10, Brgy. Puntod, Cagayan de Oro City <br>";
									echo "Email Address: r10@denr.gov.ph; Landline No. (088)861-2593; Website: www.r10.denr.gov.ph";
									
								?>
								</li>
							</ul>
						</td>
						<td style="width:100px;text-align:center;border-width:0px"><img src="./ext_lib/images/bagong_pilipinas.jpg" alt=""/></td>
						</tr>
					</table>
					
				</div>
	
	<div style="width:90%;margin-left:30px;">	
	
				<br><br><br><br>
				
				<center><h3>EXAMINATION RESULT</h3></center>
				<br>
				
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
							<td style="font-weight:bold;width:150px;border-width:0px">Examination Title</td>
							<td style="border-width:0px"><?php echo $exam->exam_title;?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;border-width:0px">Date of Examination</td>
							<td style="border-width:0px"><?php echo date_format(date_create($exam->exam_date),"F j, Y")."; (".date_format(date_create($exam->time_start),"g:i A")." - ".date_format(date_create($exam->time_end),"g:i A").")";?></td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;border-width:0px">Passing Rate</td>
							<td style="border-width:0px"><?php echo $exam->pass_rate;?>%</td>
						</tr>
						
						<tr>
							<td style="font-weight:bold;border-width:0px">No. of Questions</td>
							<td style="border-width:0px"><label id="no_ques"><?php $exam_questions = json_decode($exam->exam_questions); echo count($exam_questions);?></label></td>
						</tr>
						<tr>
							<td class="col-sm-2" style="font-weight:bold;border-width:0px">Total Points</td>
							<td style="border-width:0px"><label id="no_points"><?php $exam_questions = json_decode($exam->exam_questions); echo array_sum(array_column($exam_questions,'que_points'));?></label></td>
						</tr>
						
				</table>
				
				<br>
				<br>
				<table style="width:100%;">
				
					 <thead>
						<tr>
							<th>NO.</th>
							<th>CODE</th>
							<th>EXAMINEE</th>
							<th>STATUS</th>
							<th>SCORE (%)</th>
							<th>RESULT</th>
						</tr>
					</thead>
					<tbody>
				
					
					<?php 
						
						
						$columns = array_column($examinee_info, 'l_name');
						array_multisort($columns, SORT_ASC, $examinee_info);
					
						$no=1;
						$exam_takers=0;
						$top_exminees = array();
						
						foreach ($examinee_info as $examinee):
					
					
						$examinee_result = $controller->get_examinee_result($examinee->u_id);
						foreach ($examinee_result as $er){}
					
						$exam_ans = json_decode($er->exam_ans);
						$exam_questions = json_decode($er->exam_ques);
						
						$total_score= 0;
						$check_points= 0;
						
						if(!empty($exam_questions)){
						foreach($exam_questions as $ex_row){
						
							$score = 0;
							$examinee_answers = '';
							$exam_answers = '';
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
									
									if($que_points=='' AND ($row->que_type=='Essay' OR $row->que_type=='Enumeration')){
										$check_points++;
									}
								
								}
								
							}
							
							if($que_points==''){$total_score+=$score;}else{$total_score+=$que_points;}
							
							
							}
						}
						}
						
						
						
					
					?>
					
						<tr>
							<td style="text-align:center"><?php echo $no;?></td>
							<td style="text-align:center"><?php echo $examinee->applicant_code;?></td>
							<td><?php echo strtoupper($examinee->l_name.", ".$examinee->f_name." ".$examinee->m_name);?></td>
							<td style="text-align:center">
							<?php
								if($check_points>0){
									echo "<span style='color:blue'>For review</span>";
								}
								else if($er->exam_ans==''){
									echo " ";
								}
								else{
									echo "<span style='color:green'>Final</span>";
								}
							?>
							</td>
							<td style="text-align:center"><?php if(!empty($er->exam_ques)){echo $total_score." <i>(".(int)(($total_score/array_sum(array_column($exam_questions,'que_points')))*100)."%)</i>";}?></td>
							<td style="text-align:center">
							<?php 
								if(!empty($er->exam_ques)){
									$exam_questions = json_decode($er->exam_ques); 
									if((int)(($total_score/array_sum(array_column($exam_questions,'que_points')))*100)>=$er->pass_rate){
										echo "<span style='color:green'>PASSED</span>";
										
										array_push($top_exminees,array("examinee"=>$examinee->l_name.", ".$examinee->f_name." ".$examinee->m_name,"score"=>$total_score));
										
									}else{
										if($check_points==0){
											echo "<span style='color:red'>FAILED</span>";
										}
									}
									
									$exam_takers++;
								}
							?>
							</td>
						</tr>
						
					<?php $no++; endforeach; ?>	
					
					
					</tbody>
				</table>
				
				
				<div class="page_break"></div>
				
				
				
				<br>
				<br>
				<br>
				<center><h3>TOP 10 EXAMINEES</h3></center>
				
				<table style="width:100%">
					<thead>
						<tr>
							<th>RANK</th>
							<th>EXAMINEE</th>
							<th>SCORE (%)</th>
						</tr>
					</thead>
					
					<tbody>
					
					<?php 
					
						$column = array_column($top_exminees, 'score');
						array_multisort($column, SORT_DESC, $top_exminees);
						$top_exminees = array_slice($top_exminees, 0, 10, true);
						
						/* echo "<pre>";
						echo var_dump($top_exminees);
						echo"</pre>";  */
					
						$rank=1;
					
						foreach($top_exminees as $tops):
					
					?>	
							<tr>
								
								<td style="text-align:center"><?php echo $rank;?></td>
								<td><?php echo $tops['examinee'];?></td>
								<td style="text-align:center"><?php $exam_questions = json_decode($exam->exam_questions); echo $tops['score']." <i>(".(int)(($tops['score']/array_sum(array_column($exam_questions,'que_points')))*100)."%)</i>";?></td>
								
							</tr>
					
					<?php $rank++; endforeach; ?>	
					
					</tbody>
				</table>
				
				
				
				
				<br>
				<br>
				<br>
				<center><h3>SUMMARY REPORT</h3></center>
				<table style="width:100%">
					<thead>
						<tr>
							<th>Total No. of Qualified Applicants</th>
							<th>Total No. of Examinees <br><i>(% against No. of Qualified Applicants)</i></th>
							<th>Total No. of Passers <br><i>(% against No. of Examinees)</i></th>
						</tr>
					</thead>
					
					<tbody>
					
						<tr>
							<td style="text-align:center"><?php if(count($examinee_info)>0){echo count($examinee_info);}?></td>
							<td style="text-align:center"><?php if($exam_takers>0){echo $exam_takers." <i>(".number_format(($exam_takers/count($examinee_info))*100,0)."%<i>)";}?></td>
							<td style="text-align:center"><?php if(count($column)>0){echo count($column)." <i>(".number_format((count($column)/$exam_takers)*100,0)."%<i>)";}?></td>
							
						</tr>
					
					</tbody>
				</table>
			  
	
		  </div>
		  		
				
	</div>