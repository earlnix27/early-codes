<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>CS Form No. 9</title>
</head>
	<style type="text/css">
		body{
			margin: -10px;
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

	<header>
	</header>
			
	<body>	
			
			<?php foreach($pub_info as $rec){} ?>
			
			<div id="main_content">
			
				<div style="font-size:12px"><i>CS Form No. 9</i></div>
				<div><i style="font-size:10px">Revised 2018</i></div>
				
				
				
				<div style="width:220px;height:30px;border:solid 1px black;padding:5px;text-align:center;font-style:italic;font-size:11px;position:absolute;margin-left:945px">Electronic copy to be submitted to the CSC FO  must be in MS Excel format</div>
				
				<br>
				<center>
					<div>Republic of the Philippines</div>
					<div style="font-weight:bold"><i>DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES, REGION 10</i></div>
					<div>Request for Publication of Vacant Positions</div>
				</center>
				
				<br>
				
				<p>To: CIVIL SERVICE COMMISSION (CSC)</p>
				
				<p style="text-indent:40px">We hereby request the publication of the following vacant positions, which are authorized to be filled, at the DEPARTMENT OF ENVIRONMENT AND NATURAL RESOURCES, REGION 10 in the CSC website:</p>
				
				
				<div style="float:right;width:250px;text-align:center">
					<div style="border-bottom:1px solid black">ESPERANZA M. DOMINGO</div>
					<div><b>Chief, Personnel Section<b></div><br>
					<div>Date: <span style="border-bottom:1px solid black;margin-left:30px"><?php echo date_format(date_create($rec->date_csc), "m/d/Y");?></span></div>
				</div>
				
						<table style="width:100%;margin-top:80px">	
							 <thead>
							 <tr>
								<td rowspan="2" style="width:30px">No.</td>
								<td rowspan="2" style="width:120px">Position Title <br><i>(Parenthetical Title, if applicable)</i></td>
								<td rowspan="2">Plantilla Item No.</td>
								<td rowspan="2" style="width:50px">Salary/ Job/ Pay Grade</td>
								<td rowspan="2" style="width:80px">Monthly Salary</td>
								<td colspan="5">Qualification Standards</td>
								<td rowspan="2">Place of Assignment</td>
							</tr>
							<tr>
								<td>Education</td>
								<td>Training</td>
								<td>Experience</td>
								<td>Eligibility</td>
								<td>Competency<br><i>(if applicable)</i></td>
							</tr>
							</thead>
							 
							<tbody style="text-align:left">
								<?php $x=1; foreach($pub_pos_info as $row): ?>
								<tr>
									<td style="text-align:center"><?php echo $x++;?></td>
									<td><?php echo $row->position_title;?></td>
									<td><?php echo $row->plantilla_item_no;?></td>
									<td style="text-align:center"><?php echo $row->sjp_grade;?></td>
									<td style="text-align:right"><?php echo $row->monthly_salary;?></td>
									<td><?php echo $row->education;?></td>
									<td><?php echo $row->training;?></td>
									<td><?php echo $row->experience;?></td>
									<td><?php echo $row->eligibility;?></td>
									<td><?php echo $row->competency;?></td>
									<td><?php echo $row->place_assignment;?></td>
								</tr>
								<?php endforeach; ?>
							</tbody>	
							 
						</table>
				
				<p>Interested and qualified applicants should signify their interest in writing. Attach the following documents to the application letter and send to the address below not later than <?php echo  strtoupper(date_format(date_create($rec->date_deadline_app), "F j, Y"));?>.</p>
				
				<div style="margin-left:50px">
					<div>1. Fully accomplished Personal Data Sheet (PDS) with recent passport-sized picture (CS Form No. 212, Revised 2017) which can be downloaded at www.csc.gov.ph;</div>
					<div>2. Performance rating <b>in the last rating period</b> (if applicable);</div>
					<div>3. Photocopy of certificate of eligibility/rating/license; and</div>
					<div>4. Photocopy of Transcript of Records.</div>
				</div>
				
				<p><b>QUALIFIED APPLICANTS</b> are advised to key in their information and upload the supporting documents in the link below:</p>
				
				<br>
				<br>
				<br>
				<div style="margin-left:50px;width:300px;text-align:center">
					<div style="border-bottom:1px solid black"><b>ESPERANZA M. DOMINGO<b></div>
					<div style="border-bottom:1px solid black">Chief, Personnel Section</div>
					<div style="border-bottom:1px solid black">Puntod, Cagayan de Oro City</div>
					<div style="border-bottom:1px solid black"><a href="#" target="_blank"><?php echo base_url();?>c_phrms/online_app</a></div>
				</div>
				
				<br>
				<p><b>APPLICATIONS WITH INCOMPLETE DOCUMENTS SHALL NOT BE ENTERTAINED.</b></p>
						
			</div>
			
	</body>	
				
				
				
				
				
				