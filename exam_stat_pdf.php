<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Statistical Report</title>
</head>
	<style type="text/css">
		
		#header{
			width: 100%;
			height: 50px;
			margin-left:-20px;
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
			width: 95%;
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

<body>	
	<div id="main_content">
		
	
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
									//echo "Region 10, Brgy. Puntod, Cagayan de Oro City <br>";
									//echo "Email Address: r10@denr.gov.ph; Landline No. (088)861-2593; Website: www.r10.denr.gov.ph";
									
								?>
								</li>
							</ul>
						</td>
						<td style="width:100px;text-align:center;border-width:0px"><img src="./ext_lib/images/bagong_pilipinas.jpg" alt=""/></td>
						</tr>
					</table>
					
				</div>
	
		<div style="width:90%;margin-left:50px;font-size:14px">	
	
				<br>
				<br>
				<br>
				<center>
					<h3>EXAMINATION STATISTICAL REPORT</h3>
				</center>
				
				
				<table style="width:100%">
					<thead>
						<tr>
							<th>Total No. of Qualified Applicants</th>
							<th>Total No. of Examinees <br><i style="font-weight:none">(% against No. of Qualified Applicants)</i></th>
							<th>Total No. of Passers <br><i style="font-weight:none">(% against No. of Examinees)</i></th>
						</tr>
					</thead>
					
					<tbody>
					
						<tr>
							<td style="text-align:center"><?php if(!empty($count_all_examinees[0]->count_examinee)){echo $count_all_examinees[0]->count_examinee;}?></td>
							<td style="text-align:center"><?php if(!empty($count_taken_examinees[0]->count_ex_take)){echo $count_taken_examinees[0]->count_ex_take." <i>(".number_format(($count_taken_examinees[0]->count_ex_take/$count_all_examinees[0]->count_examinee)*100,0)."%<i>)";} ?></td>
							<td style="text-align:center"><?php if(!empty($count_passer_examinees[0]->count_ex_pass)){echo $count_passer_examinees[0]->count_ex_pass." <i>(".number_format(($count_passer_examinees[0]->count_ex_pass/$count_taken_examinees[0]->count_ex_take)*100,0)."%<i>)";} ?></td>
						</tr>
					
					</tbody>
				</table>
				
				
			  
	
		  </div>
		  		
				
	</div>
</body>
