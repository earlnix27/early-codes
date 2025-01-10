<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>List of Takers</title>
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
					<h3>HUMAN RESOURCE MERIT PROMOTION AND SELECTION BOARD (HRMPSB)</h3>
					<h3>ADVISORY NO. <?php echo $advise_no;?></h3>
					<h3><?php echo strtoupper($descript);?></h3>
					
					<h3>LIST OF APPLICANTS FOR PRE-EMPLOYMENT AND PROMOTIONAL TEST</h3>
					
				</center>
				
				<p><?php echo date('F j, Y');?></p>
				<p style="text-align:justify"><?php echo $pre_state;?></p>
				
				
				<br>
				<h3>PROMOTIONAL TEST:</h3>
				<?php 
										
					$prom_takers = $controller->get_list_takers('Promotional Test');
					
					if(!empty($prom_takers)):
					
					
					$no=1;
					foreach ($prom_takers as $row): 
				?>
					
					<table style="width:100%;border-width:0px;margin-left:30px">
				
						<tr>
							<td style="padding:0px;border-width:0px;width:20px"><?php echo $no;?>.</td>
							<?php if($list_type==1):?>
								<td style="padding:0px;border-width:0px"><?php echo strtoupper($row->surname.", ".$row->firstname." ".$row->middlename." (".$row->applicant_code.")");?></td>
							<?php else:?>
								<td style="padding:0px;border-width:0px"><?php echo $row->applicant_code;?></td>
							<?php endif;?>
						</tr>
					
					</table>
					
				<?php $no++; endforeach; endif; ?>	
				
				
				<br>
				<h3>PRE-EMPLOYMENT TEST:</h3>
				<?php 
					
					$prem_takers = $controller->get_list_takers('Pre-Employment Test');
					
					if(!empty($prem_takers)):
					
					
					$no=1;
					foreach ($prem_takers as $row): 
				?>
					
					<table style="width:100%;border-width:0px;margin-left:30px">
				
						<tr>
							<td style="padding:0px;border-width:0px;width:20px"><?php echo $no;?>.</td>
							<?php if($list_type==1):?>
								<td style="padding:0px;border-width:0px"><?php echo strtoupper($row->surname.", ".$row->firstname." ".$row->middlename." (".$row->applicant_code.")");?></td>
							<?php else:?>
								<td style="padding:0px;border-width:0px"><?php echo $row->applicant_code;?></td>
							<?php endif;?>
						</tr>
					
					</table>
					
				<?php $no++; endforeach; endif; ?>	
				
				
				<br>
				<p style="text-align:justify"><?php echo $post_state;?></p>
				
				
				<br>
				<br>
				<br>
				<div style="margin-left:400px;text-align:center">
					<div><b><?php $signatory = $controller->get_ces_signatories('Chairperson'); echo strtoupper($signatory[0]->name); ?></b></div>
					<div><i><?php $signatory = $controller->get_ces_signatories('Chairperson'); echo $signatory[0]->position."<br>Chairperson, HRMPSB"; ?></i></div>
				</div>
				
				
			  
	
		  </div>
		  		
				
	</div>
</body>
