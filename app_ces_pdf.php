<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Candidates Evaluation Sheet</title>
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
			padding:0px;
			
		}
		#main_content table th{
			border: 1px solid black;
			padding:0px;
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
			font-size:10px;
			width:200px;
		}
		
		
		.page_break { page-break-after: always; }
		
	</style>

	<header>
	</header>
			
	<body>	
			
			<?php foreach($applicant_ces as $row){} ?>
			<?php foreach($vacpos_info as $rec){} ?>
			
			
			<div id="main_content">
			
				<div style="font-size:12px;position:absolute;right:0"><i>Annex A</i></div>
				
				
				<!-- Educational Attainment -->
				<div style="position:fixed;margin:160px 0px 0px 195px;font-size:10px">
					<table class="sub_table" style="width:220px;text-align:left;font-size:10px">
					<?php 
						$ed_attain = json_decode($row->education_attainment);
						
						foreach($ed_attain as $ea):
					?>
						<tr>
							<td style="padding:0px 0px 10px 3px;border-width:0px;width:145px"><?php echo strtoupper($ea->degree_course);?></td>
							<td style="border-width:0px;width:70px;text-align:center"><?php if($ea->earn_unit!='' AND strtoupper($ea->earn_unit)!='N/A'){echo $ea->earn_unit." UNITS";}else{echo $ea->year_grad;}?></td>
						</tr>
					<?php endforeach;?>	
					</table>
				</div>
				
				
				<!-- Work Experience -->
				<div style="position:fixed;margin:160px 0px 0px 430px;font-size:10px">
					<table class="sub_table" style="width:220px;text-align:left;font-size:10px">
					<?php foreach($workexp as $we):?>
						<tr>
							<td style="padding:0px 0px 10px 3px;border-width:0px;width:148px"><?php echo strtoupper($we->description);?></td>
							<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($we->date_from),"m/d/Y");?></td>
							<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($we->date_to),"m/d/Y");?></td>
							<td style="border-width:0px;width:50px;text-align:center"><?php echo $we->uom;?></td>
						</tr>
					<?php endforeach;?>	
					</table>
				</div>
				
				
				<!-- Trainings -->
				<div style="position:fixed;margin:160px 0px 0px 860px;font-size:10px">
					<table class="sub_table" style="width:220px;text-align:left;font-size:10px">
					
					<?php $limit=7; $cnt=0;?>
					
					<?php if(count($trainings)>$limit):?>
						<?php for($x=0;$x<$limit;$x++):?>
							<tr>
								<td style="padding:0px 0px 10px 3px;border-width:0px;width:148px"><?php echo $trainings[$x]->description;?></td>
								<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($trainings[$x]->date_from),"m/d/Y");?></td>
								<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($trainings[$x]->date_to),"m/d/Y");?></td>
								<td style="border-width:0px;width:50px;text-align:center"><?php echo $trainings[$x]->uom;?></td>
							</tr>
						<?php $cnt++;?>	
						<?php endfor;?>	
						
					<?php else:?>
						<?php foreach($trainings as $tr):?>
							<tr>
								<td style="padding:0px 0px 10px 3px;border-width:0px;width:148px"><?php echo strtoupper($tr->description);?></td>
								<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($tr->date_from),"m/d/Y");?></td>
								<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($tr->date_to),"m/d/Y");?></td>
								<td style="border-width:0px;width:50px;text-align:center"><?php echo $tr->uom;?></td>
							</tr>
						<?php endforeach;?>	
					<?php endif;?>	
						
				
					</table>
				</div>
				
				
				
				<center><h2>CANDIDATES EVALUATION SHEET</h2></center>
				
				
					<table style="width:100%;text-align:left;font-size:10px">
						
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
								<th rowspan="2" style="width:100px">Name of Applicant</th>
								<th rowspan="2" style="width:100px">Present Position</th>
								<th colspan="2">Educational Attainment</th>
								<th colspan="4">Professional/Work Experience</th>
								<th rowspan="2" style="width:100px">Eligibility</th>
								<th colspan="4">Training Programs Attended</th>
							</tr>
							<tr>
								<th style="width:150px">Degree</th>
								<th style="width:70px">Year Graduated/ No. of Units</th>
								<th style="width:150px">Position/ Designation</th>
								<th style="width:60px">From</th>
								<th style="width:60px">To</th>
								<th style="width:40px">No. of Yrs.</th>
								<th style="width:150px">Title</th>
								<th style="width:60px">From</th>
								<th style="width:60px">To</th>
								<th style="width:40px">No. of Hrs.</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<td style="height:400px;padding:3px">
										
										<b><?php echo strtoupper($row->surname.", ".$row->firstname." ".$row->middlename);?></b>
										<br><br><br>
										DATE OF BIRTH:<br>
										<?php echo date_format(date_create($row->birth_date),"F j, Y");?>
										<br><br><br>
										PLACE OF BIRTH:<br>
										<?php echo strtoupper($row->birth_place);?>
										<br><br><br>
										AGE: <?php echo $age = date_diff(date_create($row->birth_date), date_create(date('Y-m-d')))->y;;?>
										<br><br><br>
										CIVIL STATUS:<br>
										<?php echo strtoupper($row->civil_stat);?>
										<br><br><br>
										OTHER INFORMATION:<br>
										<?php echo $row->mobile_no;?>
									
									</td>
									<td style="padding:3px"><?php echo strtoupper($row->ces_present_pos);?></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td style="padding:3px">
										<?php 
										
											$elig = json_decode($row->eligibility); 
											
											foreach($elig as $el){
												echo strtoupper($el->eligibility_type).": <br>".strtoupper($el->eligibility)."<br><br>";
											}
										
										?>
									</td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
						</tbody>
					
					</table>
					
					
					
					<table class="signatory_tbl">
						<tr style="">
							<td style="border-width:0px;text-align:left;padding:10px 0px 20px 0px">Prepared by:</td>
							<td style="border-width:0px;text-align:left;padding:10px 0px 20px 420px">Checked and Verified by:</td>
						</tr>
					
						<tr>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Secretariat'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px;width:1200px"><b><?php $signatory = $controller->get_ces_signatories('Head Secretariat'); echo strtoupper($signatory[0]->name); ?></b></td>
						</tr>
						<tr>
							<td style="border-width:0px"><i>Secretariat</i></td>
							<td style="border-width:0px"><i>Head Secretariat</i></td>
						</tr>
					</table>
					
					
					<p style="font-size:10px;">We hereby certify that the candidate meet the minimum Qualification Standard for the position: <?php echo $rec->position_title;?></p>
				
				
					<br>
					<table class="signatory_tbl">
						<tr>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Member1'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Member2'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Member3'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Vice-Chairperson'); echo strtoupper($signatory[0]->name); ?></b></td>
							<td style="border-width:0px"><b><?php $signatory = $controller->get_ces_signatories('Chairperson'); echo strtoupper($signatory[0]->name); ?></b></td>
						</tr>
						<tr>
							<td style="border-width:0px"><i><?php $signatory = $controller->get_ces_signatories('Member1'); echo $signatory[0]->position."<br>Member"; ?></i></td>
							<td style="border-width:0px"><i><?php $signatory = $controller->get_ces_signatories('Member2'); echo $signatory[0]->position."<br>Member"; ?></i></td>
							<td style="border-width:0px"><i><?php $signatory = $controller->get_ces_signatories('Member3'); echo $signatory[0]->position."<br>Member"; ?></i></td>
							<td style="border-width:0px"><i><?php $signatory = $controller->get_ces_signatories('Vice-Chairperson'); echo $signatory[0]->position."<br>Vice-Chairperson"; ?></i></td>
							<td style="border-width:0px"><i><?php $signatory = $controller->get_ces_signatories('Chairperson'); echo $signatory[0]->position."<br>Chairperson"; ?></i></td>
						</tr>
					</table>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<?php if(count($trainings)>$limit):?>
					
						<div class="page_break"></div>
						
							<!-- Trainings Continuation-->
							<div style="position:absolute;margin:60px 0px 0px 880px;font-size:10px">
								<table class="sub_table" style="width:220px;text-align:left;font-size:10px">
							
							
							<?php for($x=$cnt;$x<count($trainings);$x++):?>
								<tr>
									<td style="padding:0px 0px 10px 3px;border-width:0px;width:148px"><?php echo $trainings[$x]->description;?></td>
									<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($trainings[$x]->date_from),"m/d/Y");?></td>
									<td style="border-width:0px;width:60px;text-align:center"><?php echo date_format(date_create($trainings[$x]->date_to),"m/d/Y");?></td>
									<td style="border-width:0px;width:50px;text-align:center"><?php echo $trainings[$x]->uom;?></td>
								</tr>
							<?php endfor;?>	
							
								</table>
							</div>
							
						<table class="sub_table" style="width:100%;text-align:left;font-size:10px;margin-top:-60px">
							
							 <thead>
								<tr>
									<th rowspan="2" style="width:100px">Name of Applicant</th>
									<th rowspan="2" style="width:100px">Present Position</th>
									<th colspan="2">Educational Attainment</th>
									<th colspan="4">Professional/Work Experience</th>
									<th rowspan="2" style="width:100px">Eligibility</th>
									<th colspan="4">Training Programs Attended</th>
								</tr>
								<tr>
									<th style="width:150px">Degree</th>
									<th style="width:70px">Year Graduated/ No. of Units</th>
									<th style="width:150px">Position/ Designation</th>
									<th style="width:60px">From</th>
									<th style="width:60px">To</th>
									<th style="width:40px">No. of Yrs.</th>
									<th style="width:150px">Title</th>
									<th style="width:60px">From</th>
									<th style="width:60px">To</th>
									<th style="width:40px">No. of Hrs.</th>
								</tr>
							</thead>
							<tbody>
									<tr>
										<td style="height:680px"></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
							</tbody>
						
						</table>
					
						
							
							
					<?php endif;?>
					
					
					
					
					
					
					
					
					
					
			</div>
			
	</body>	
										
				
				
				
				
				