<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Comprehensive Evaluation Results</title>
</head>
	<style type="text/css">
		body{
			margin: -20px;
			font-family: 'sans-serif';
			
		}
				
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
			text-align:center;
		}
		#main_content table td{
			border: 1px solid black;
			padding:3px;
			
		}
		#main_content table th{
			border: 1px solid black;
			padding:3px;
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
		
		.correct{
			color:green;
		}
		
		.incorrect{
			color:red;
		}
		
		.review{
			color:blue;
		}
		
		.sub_table td{
			vertical-align:top;
		}
		
		.signatory_tbl td{
			font-size:11px;
			width:200px;
			padding:0px;
		}
		
		
		.page_break { page-break-after: always; }
		
	</style>

	<header>
	</header>
			
	<body>	
			
			<?php foreach($vacpos_info as $rec){} ?>
			
			
			<div id="main_content">
			
				<center><h2>COMPREHENSIVE EVALUATION RESULTS</h2></center>
				
				
					<table style="width:100%;text-align:left;font-size:11px">
						
						<tr>
							<td style="padding:0px;border-width:0px;width:100px">POSITION</td>
							<td style="padding:0px;border-width:0px;">: <?php echo $rec->position_title;?></td>
							<td style="padding:0px;border-width:0px;width:100px">EDUCATION</td>
							<td style="padding:0px;border-width:0px;">: <?php echo $rec->education;?></td>
						</tr>
						<tr>
							<td style="padding:0px;border-width:0px;width:100px">SALARY GRADE</td>
							<td style="padding:0px;border-width:0px;">: <?php echo $rec->sjp_grade;?></td>
							<td style="padding:0px;border-width:0px;width:100px">TRAINING</td>
							<td style="padding:0px;border-width:0px;">: <?php echo $rec->training;?></td>
						</tr>
						<tr>
							<td style="padding:0px;border-width:0px;width:100px">OFFICE</td>
							<td style="padding:0px;border-width:0px;">: <?php echo $rec->place_assignment;?></td>
							<td style="padding:0px;border-width:0px;width:100px">EXPERIENCE</td>
							<td style="padding:0px;border-width:0px;">: <?php echo $rec->experience;?></td>
						</tr>
						<tr>
							<td style="padding:0px;border-width:0px;width:100px">NO. OF VACANCY</td>
							<td style="padding:0px;border-width:0px;">: <?php $count_pos=$controller->get_no_vacpos($rec->position_title,$rec->place_assignment); echo $count_pos[0]->count_pos;?></td>
							<td style="padding:0px;border-width:0px;width:100px">ELIGIBILITY</td>
							<td style="padding:0px;border-width:0px;">: <?php echo $rec->eligibility;?></td>
						</tr>
					
					</table>
					
					<br>
					
					<table class="sub_table" style="width:100%;text-align:left;font-size:10px">
						
						 <thead>
							<tr>
								<th style="border-width: 1px 1px 0px 1px;width:150px;">NAME OF CANDIDATE</th>
								<th style="border-width: 1px 1px 0px 1px;width:150px">PRESENT POSITION</th>
								<th style="border-width: 1px 1px 0px 1px">EDUCATION</th>
								<th style="border-width: 1px 1px 0px 1px">PERFORMANCE</th>
								<th style="border-width: 1px 1px 0px 1px">TRAINING</th>
								<th style="border-width: 1px 1px 0px 1px">EXPERIENCE</th>
								<th style="border-width: 1px 1px 0px 1px">WRITTEN/ SKILL EXAM</th>
								<th style="border-width: 1px 1px 0px 1px">PSYCHO-SOCIAL ATTRIBUTES/ PERSONALTY TRAITS</th>
								<th style="border-width: 1px 1px 0px 1px">POTENTIAL</th>
								<th style="border-width: 1px 1px 0px 1px">TOTAL</th>
								<th style="border-width: 1px 1px 0px 1px;width:100px">AWARDS AND OUTSTANDING ACHIEVEMENTS</th>
								<th style="border-width: 1px 1px 0px 1px;width:100px">REMARKS</th>
							</tr>
							<tr style="text-align:center;font-style:italic">
								<td style="border-width: 0px 1px 0px 1px"></td>
								<td style="border-width: 0px 1px 0px 1px"></td>
								<td style="border-width: 0px 1px 0px 1px">(12 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px">(30 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px">(8 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px">(15 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px">(15 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px">(10 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px">(10 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px">(100 Pts)</td>
								<td style="border-width: 0px 1px 0px 1px"></td>
								<td style="border-width: 0px 1px 0px 1px"></td>
							</tr>
							<tr style="text-align:center">
								<td style="border-width: 0px 1px 1px 1px">(1)</td>
								<td style="border-width: 0px 1px 1px 1px">(2)</td>
								<td style="border-width: 0px 1px 1px 1px">(3)</td>
								<td style="border-width: 0px 1px 1px 1px">(4)</td>
								<td style="border-width: 0px 1px 1px 1px">(5)</td>
								<td style="border-width: 0px 1px 1px 1px">(6)</td>
								<td style="border-width: 0px 1px 1px 1px">(7)</td>
								<td style="border-width: 0px 1px 1px 1px">(8)</td>
								<td style="border-width: 0px 1px 1px 1px">(9)</td>
								<td style="border-width: 0px 1px 1px 1px">(10)</td>
								<td style="border-width: 0px 1px 1px 1px">(11)</td>
								<td style="border-width: 0px 1px 1px 1px">(12)</td>
							</tr>
						</thead>
						<tbody>
							<?php foreach($cer_list as $cer):?>
								<tr>
									<td><?php echo strtoupper($cer->surname.", ".$cer->firstname." ".$cer->middlename);?></td>
									<td><?php echo strtoupper($cer->ces_present_pos);?></td>
									<td style="text-align:center"><?php echo $cer->educ_points;?></td>
									<td style="text-align:center"><?php echo $cer->performance_points;?></td>
									<td style="text-align:center"><?php echo $cer->training_points;?></td>
									<td style="text-align:center"><?php echo $cer->experience_points;?></td>
									<td style="text-align:center"><?php echo $cer->exam_points;?></td>
									<td style="text-align:center"><?php echo $cer->personality_points;?></td>
									<td style="text-align:center"><?php echo $cer->potential_points;?></td>
									<td style="text-align:center;font-weight:bold"><?php echo $cer->cer_total_points;?></td>
									<td><?php $awards = json_decode($cer->na_awards); foreach($awards as $na){echo $na->award_title."<br><br>";}?></td>
									<td style="font-size:9px"><?php echo $cer->ces_remarks;?></td>
								</tr>
							<?php endforeach;?>	
						</tbody>
					
					</table>
					
					
					
					<table class="signatory_tbl" style="width:100%;font-size:11px">
						<tr style="">
							<td style="border-width:0px;text-align:left;padding:10px 0px 20px 0px">Prepared by:</td>
							<td style="border-width:0px;text-align:left;padding:10px 0px 20px 0px">Checked and Verified by:</td>
						</tr>
					
						<tr>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Secretariat'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px;"><b><?php $signatory = $controller->get_ces_signatories('Head Secretariat'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px;"><b></b></td>
						</tr>
						<tr>
							<td style="border-width:0px;padding:0px"><i>Secretariat</i></td>
							<td style="border-width:0px;padding:0px"><i>Head Secretariat</i></td>
							<td style="border-width:0px;padding:0px"><i></i></td>
						</tr>
					</table>
					
					<br>
					<p style="font-size:11px;">Approved by:</p>
				
				
					<br>
					<table class="signatory_tbl" style="width:100%;font-size:11px">
						<tr>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Chairperson'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Vice-Chairperson'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Member3'); echo strtoupper($signatory[0]->name); ?></b></td>
						</tr>
						<tr>
							<td style="border-width:0px;padding:0px"><i><?php $signatory = $controller->get_ces_signatories('Chairperson'); echo $signatory[0]->position."<br>Chairperson"; ?></i></td>
							<td style="border-width:0px;padding:0px"><i><?php $signatory = $controller->get_ces_signatories('Vice-Chairperson'); echo $signatory[0]->position."<br>Vice-Chairperson"; ?></i></td>
							<td style="border-width:0px;padding:0px"><i><?php $signatory = $controller->get_ces_signatories('Member3'); echo $signatory[0]->position."<br>Member"; ?></i></td>
						</tr>
					</table>
					<br><br>
					<table class="signatory_tbl" style="width:100%;font-size:11px">
						<tr>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Member1'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Member2'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_enduser_signatory($rec->place_assignment); echo strtoupper($signatory[0]->enduser_name); ?></b></td>
						</tr>
						<tr>
							<td style="border-width:0px;padding:0px"><i><?php $signatory = $controller->get_ces_signatories('Member1'); echo $signatory[0]->position."<br>Member"; ?></i></td>
							<td style="border-width:0px;padding:0px"><i><?php $signatory = $controller->get_ces_signatories('Member2'); echo $signatory[0]->position."<br>Member"; ?></i></td>
							<td style="border-width:0px;padding:0px"><i><?php $signatory = $controller->get_enduser_signatory($rec->place_assignment); echo strtoupper($signatory[0]->eu_position); ?><br>End User</i></td>
						</tr>
					</table>
					
					
					
					
					
					
					
					
					
					
					
					
			</div>
			
	</body>	
										
				
				
				
				
				