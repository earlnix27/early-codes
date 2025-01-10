<head>
	<link rel="icon" href="./ext_lib/images/denr.png" type="image/png">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Application Form</title>
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
			margin-top:10px;
		}
		#main_content ul{
			list-style-type: none;
		}
		#main_content table{
			border-collapse:collapse;
			margin: 0px;
			border: 1px solid black;
			font-size:13px;
			width: 730px;
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
			text	align:center;
		}
		
		
		.title_td{
			background-color:#dedede;
			font-weight:bold;
		}
		
		
		.page_break { page-break-after: always; }
		
		
		#footer {
                position: fixed; 
                bottom: -40px; 
                left: 0px; 
                right: 0px;
                height: 50px; 
				font-size:11px;
				font-weight:normal;
        }
		
		#page_num {
                position: fixed; 
                top: -20px; 
                left: 0px; 
                right: 0px;
                height: 50px; 
				font-size:14px;
				font-weight:normal;
				margin-left:1230px;
        }
		
	</style>






	<div id="page_num"></div>

	<div id="footer">
		*Housing Typology: Type 1 (Shanties), Type 2 (Pure Wooden, single floor), Type 3 (Pure Wooden, 2 floors and above), Type 4 (Mixed Concrete and Wood, single floor), Type 5 (Mixed Concrete and wood, 2 floors and above), Type 6 (Pure Concrete, Single floor), Type 7 (Concrete Medium-Rise and High-End Housing/Building, 2 floors and above)
	</div>
	
	
	
	
	<div id="main_content">
						
				<?php foreach ($strctpop_info as $strctpop)?>
				
				<table style="width:100%;text-align:center">
					<tr>
						<td colspan="11" style="background-color:#99cb89;padding:10px"><div style="text-align:left;"><b>II. STRUCTURAL PROPERTIES <i style="margin-left:10px">continuation...</i></b></div></td>
					</tr>
					<tr>
						<td colspan="8" style="text-align:left;">
							<div>
								<table style="border:0px;width:400px;text-align:left">
								<tr>
									<td style="border:0px;padding:0px">Received permanent housing? </td>
									<td style="border:0px;padding:0px" width="30px"><input type="checkbox" <?php if($strctpop->rec_perm_house=="Yes"){echo "checked";}?>></td>
									<td style="border:0px;padding:0px">Yes</td>
								</tr>
								</table>
							
							</div>
							<div style="margin-left:100px">From what government agency? <?php if($strctpop->rec_perm_house=="Yes"){echo "<u>".$strctpop->gov_agency."</u>";}else{echo "_________________________________";}?></div>
							<br>
						</td>
						<td colspan="3">
							<table style="border:0px;width:200px;text-align:left;margin-left:100px">
							<tr>
								<td style="border:0px;padding:0px" width="30px"><input type="checkbox" <?php if($strctpop->rec_perm_house=="No"){echo "checked";}?>></td>
								<td style="border:0px;padding:0px">No</td>
							</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="8" style="text-align:left;">
							<table style="border:0px;width:400px;text-align:left">
							<tr>
								<td style="border:0px;padding:0px">Received any Insurance? </td>
								<td style="border:0px;padding:0px" width="30px"><input type="checkbox" <?php if($strctpop->rec_ins_pay=="Yes"){echo "checked";}?>></td>
								<td style="border:0px;padding:0px">Yes</td>
							</tr>
							</table>
							<div style="margin-left:100px">From what insurance company? <?php if($strctpop->rec_ins_pay=="Yes"){echo "<u>".$strctpop->ins_company."</u>";}else{echo "_________________________________";}?></div>
							<div style="margin-left:100px">Amount received: <?php if($strctpop->rec_ins_pay=="Yes"){echo "<u>P ".number_format($strctpop->rec_amnt,2)."</u>";}else{echo "_________________________________";}?></div>
							<br>
						</td>
						<td colspan="3">
							<table style="border:0px;width:200px;text-align:left;margin-left:100px">
							<tr>
								<td style="border:0px;padding:0px" width="30px"><input type="checkbox" <?php if($strctpop->rec_ins_pay=="No"){echo "checked";}?>></td>
								<td style="border:0px;padding:0px">No</td>
							</tr>
							</table>
						</td>
					</tr>
					<tr style="background-color:#d4e6c6;font-weight:bold">
						<td>Housetag or Address of the Property in MAA</td>
						<td>Area (sq. m)</td>
						<td>No. of Floors</td>
						<td>No. of Rooms</td>
						<td>Typology</td>
						<td>Type of Structure</td>
						<td>Primary Use of Structure</td>
						<td>Type of Ownership</td>
						<td>Form of Acquisition</td>
						<td>Proof of Ownership</td>
						<td>Declared Value</td>
					</tr>
					
					
					
					
					
					<?php 
						$strct_info = json_decode($strctpop->strct_info);
						$str = 0;
						
						if(isset($strct_info)):
						foreach($strct_info as $strct_row):
					?>
					<tr>
						<td rowspan="3"><?php echo $strct_row->maa_housetag_add;?></td>
						<td><?php echo $strct_row->prop_area;?></td>
						<td><?php echo $strct_row->no_floor;?></td>
						<td><?php echo $strct_row->no_room;?></td>
						<td rowspan="3" style="padding:0px 0px 0px 3px" valign="top">
							
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if($strct_row->house_typology=="Type 1"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Type 1</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->house_typology=="Type 2"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Type 2</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->house_typology=="Type 3"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Type 3</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->house_typology=="Type 4"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Type 4</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->house_typology=="Type 5"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Type 5</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->house_typology=="Type 6"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Type 6</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->house_typology=="Type 7"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Type 7</td>
									</tr>
								</table>
						
						</td>
						<td rowspan="3" style="padding:0px 0px 0px 3px" valign="top">
								
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if($strct_row->type_strct=="House"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">House</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->type_strct=="Room/Stall"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Room/Stall</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->type_strct=="Office Space"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Office Space</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->type_strct=="Mosque"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Mosque</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->type_strct=="Madrasah"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Madrasah</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->type_strct=="Others"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Others:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px"><?php if($strct_row->type_strct=="Others"){echo "<u>".$strct_row->type_strct_ot."</u>";}else{echo "__________";}?></td>
									</tr>
								</table>
						
						</td>
						<td rowspan="3" style="padding:0px 0px 0px 3px" valign="top">
								
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if($strct_row->prim_use_strct=="Residential"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Residential</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->prim_use_strct=="Commercial"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Commercial</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->prim_use_strct=="Cultural"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Cultural</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->prim_use_strct=="Others"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Others:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px"><?php if($strct_row->prim_use_strct=="Others"){echo "<u>".$strct_row->prim_use_strct_ot."</u>";}else{echo "__________";}?></td>
									</tr>
								</table>
						
						</td>
						<td rowspan="3" style="padding:0px 0px 0px 3px" valign="top">
								
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if($strct_row->type_own=="Solely-Owned"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Solely owned</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px" valign="top"><input type="checkbox" <?php if($strct_row->type_own=="Co-Owned with Others"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Co-owned with Others</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px" valign="top"><input type="checkbox" <?php if($strct_row->type_own=="Co-Owned with Others"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">No. of co-owners: <?php if($strct_row->type_own=="Co-Owned with Others"){echo "<u>".$strct_row->type_own_ot."</u>";}else{echo "__________";}?></td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->type_own=="Others"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Others:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px"><?php if($strct_row->type_own=="Others"){echo "<u>".$strct_row->type_own_ot."</u>";}else{echo "__________";}?></td>
									</tr>
								</table>
						
						</td>
						<td rowspan="3" style="padding:0px 0px 0px 3px" valign="top">
								
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if($strct_row->form_acq=="Actual Occupancy"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Actual Occupancy</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->form_acq=="Deed of Sale"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Deed of Sale</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->form_acq=="Deed of Donation"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Deed of Donation</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->form_acq=="Inheritance"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Inheritance</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if($strct_row->form_acq=="Others"){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Others:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px"><?php if($strct_row->form_acq=="Others"){echo "<u>".$strct_row->form_acq_ot."</u>";}else{echo "__________";}?></td>
									</tr>
								</table>
						
						</td>
						<?php $prime_proof_os = json_decode($strctpop->prime_proof_os);if(empty($prime_proof_os)){$prime_proof_os=array();}?>
						<td rowspan="3" style="padding:0px 0px 0px 3px;text-align:left">
						
							<?php 
							
								if(in_array("cot",$prime_proof_os)){echo "Certificate of Title";}
								if(in_array("tax_dec",$prime_proof_os)){echo ", Tax Declaration";}
								if(in_array("saln",$prime_proof_os)){echo ", Sworn Statement of Assets, Liabilities and Net Worth";}
								if(in_array("doc",$prime_proof_os)){echo ", Deed of Conveyance";}
								if(in_array("trad_mode",$prime_proof_os)){echo ", Kapasadan or other traditional mode of transfer of ownership executed before Marawi Siege";}
								if(in_array("brgy_cert",$prime_proof_os)){echo ", Certification from barangay concerned that the person has by himself/herself or through his/her predecessor in interest";}
								
							?>
						
						</td>
						<td rowspan="3" style="padding:0px 0px 0px 3px"><?php echo "P ".number_format($strct_row->declare_val,2);?></td>
					</tr>
					<tr style="background-color:#d4e6c6;font-weight:bold">
						<td>Year Constructed</td>
						<td>Year Owned or Acquired</td>
						<td>Years of Residency</td>
					</tr>
					<tr>
						<td><?php echo $strct_row->yr_construct;?></td>
						<td><?php echo $strct_row->yr_own_acq;?></td>
						<td><?php echo $strct_row->yr_residence;?></td>
					</tr>
					
					<?php $str++; endforeach; endif;?>

				</table>
	
				
				<br>

				<?php foreach ($deathclaim_info as $deathclaim)?>
				<table style="width:100%;text-align:center">
					<tr>
						<td colspan="4" style="background-color:#99cb89;padding:10px"><div style="text-align:left;"><b>III. DEATH CLAIMS</b></div></td>
					</tr>
					<tr style="font-weight:bold">
						<td>Name of The Deceased</td>
						<td>Proof of Identity of the Deceased</td>
						<td>Proof of Filiation or Relationship</td>
						<td>Other Proof of Death</td>
					</tr>
					
					
					
					<?php 
						$death_info = json_decode($deathclaim->death_info);
						$dc = 1;
						
						if(empty($death_info)){$death_info=array();}
						
						if(isset($death_info)):
						foreach($death_info as $dc_row):
					?>
					<tr>
						<td width="20%"><?php echo $dc_row->dth_name;?></td>
						<td style="padding:0px 0px 0px 3px" valign="top">
								<?php $proof_id_dec = json_decode($dc_row->proof_id_dec);if(empty($proof_id_dec)){$proof_id_dec=array();}?>
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if(in_array("psa_birth",$proof_id_dec)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">PSA Birth Certificate</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("vot_id",$proof_id_dec)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Voter’s ID</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox"<?php if(in_array("drv_lic",$proof_id_dec)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Driver’s License</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox"<?php if(in_array("passport",$proof_id_dec)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Passport</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("ot_id",$proof_id_dec)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Other Government Issued ID:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px"><?php if(in_array("ot_id",$proof_id_dec)){echo "<u>".$dc_row->dth_ot_id_doc."</u>";}else{echo "______________________________";}?></td>
									</tr>
								</table>
						<br>
						</td>
						
						<?php $proof_fil_rel = json_decode($dc_row->proof_fil_rel);if(empty($proof_fil_rel)){$proof_fil_rel=array();}?>
						<td style="padding:0px 0px 0px 3px" valign="top" width="30%">
								
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if(in_array("psa_doc",$proof_fil_rel)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Document Issued by the PSA:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px">______________________________</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("lcr_doc",$proof_fil_rel)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Document Issued by the LCR:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px">______________________________</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("aff_indv",$proof_fil_rel)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Affidavit of at least two (2) disinterested individuals::</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px">______________________________</td>
									</tr>
								</table>
						<br>
						</td>
						
						<?php $proof_death = json_decode($dc_row->proof_death);if(empty($proof_death)){$proof_death=array();}?>
						<td style="padding:0px 0px 0px 3px" valign="top" width="30%">
								
								<table style="width:100%;border:0px">
									<tr>
										<td style="border:0px;padding:0px;width:20px"><input type="checkbox" <?php if(in_array("death_cert",$proof_death)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Death Certificate</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("cert_lp",$proof_death)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Certification from the Licensed Physician</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("ss_fapd",$proof_death)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Sworn Statement of the Fact of Actual or Presumptive Death</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("miss_pers",$proof_death)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Missing Person Report Filed with PNP</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"><input type="checkbox" <?php if(in_array("ot_doc",$proof_death)){echo "checked";}?>></td>
										<td style="border:0px;padding:0px">Others Documents:</td>
									</tr>
									<tr>
										<td style="border:0px;padding:0px"></td>
										<td style="border:0px;padding:0px"><?php if(in_array("ot_doc",$proof_death)){echo "<u>".$dc_row->dth_ot_doc_inp."</u>";}else{echo "______________________________";}?></td>
									</tr>
								</table>
						<br>
						</td>
					</tr>
					
					<?php $dc++; endforeach; endif;?>

				</table>
				
				
				<br>

				<?php foreach ($vc_op_amoi_info as $vc_op_amoi)?>
				<table style="width:100%;text-align:center">
					<tr>
						<td colspan="6" style="background-color:#99cb89;padding:10px"><div style="text-align:left;"><b>IV. VEHICLE INFORMATION <i style="font-size:10px">(if applicable)</i></b></div></td>
					</tr>
					<tr style="font-weight:bold">
						<td>Name/Type</td>
						<td>Brand</td>
						<td>Year Model</td>
						<td>Color</td>
						<td>Plate Number</td>
						<td>Proof of Ownership</td>
					</tr>
					
					
					<?php 
						$vehicle_info = json_decode($vc_op_amoi->vehicle_info);
						$vhc = 0;
						
						if(isset($vehicle_info)):
						foreach($vehicle_info as $vc_row):
					?>
					<tr>
						<td width="20%"><?php if($vc_row->vc_type=="Others"){echo $vc_row->vc_type_ot;}else{echo $vc_row->vc_type;}?></td>
						<td width="10%"><?php echo $vc_row->vc_model;?></td>
						<td width="10%"><?php echo $vc_row->vc_year;?></td>
						<td width="10%"><?php echo $vc_row->vc_color;?></td>
						<td width="10%"><?php echo $vc_row->vc_plate_no;?></td>
						<td width="20%"><?php echo $vc_row->vc_proof_own;?></td>
					</tr>
					<?php $vhc++; endforeach; endif;?>
					
					
				</table>
	
				
				<br>

				
				<table style="width:100%;text-align:center">
					<tr>
						<td colspan="6" style="background-color:#99cb89;padding:10px"><div style="text-align:left;"><b>V. OTHER PROPERTIES <i style="font-size:10px">(Jewelries, Furnitures, House Appliances, Machineries, Equipments, and Personal Properties)You may use separate sheet.</i></b></div></td>
					</tr>
					<tr style="font-weight:bold">
						<td>Type</td>
						<td>Quantity</td>
						<td>Amount Acquired</td>
						<td>Market Value</td>
						<td>Total</td>
						<td>Proof of Ownership</td>
					</tr>
					
					<?php 
						$other_property = json_decode($vc_op_amoi->other_property);
						$ops = 0;
						
						if(isset($other_property)):
						foreach($other_property as $op_row):
					?>
					<tr>
						<td width="20%"><?php if($op_row->op_type=="Others"){echo $op_row->op_type_ot;}else{echo $op_row->op_type;}?></td>
						<td width="10%"><?php echo $op_row->op_qty;?></td>
						<td width="10%"><?php echo number_format($op_row->op_am_acq,2);?></td>
						<td width="10%"><?php echo number_format($op_row->op_mar_val,2);?></td>
						<td width="10%"><?php echo number_format($op_row->op_total,2);?></td>
						<td width="20%"><?php echo $op_row->op_proof_own;?></td>
					</tr>
					<?php $ops++; endforeach; endif;?>
					
				</table>
				
				
				
				<table style="background-color:#99cb89;width:100%;text-align:left">

					<tr>
						<td style="border-width:0px;padding-top:30px"><b>TOTAL AMOUNT OF CLAIMS:</b></td>
						<td style="border-width:0px;padding-top:30px;text-align:center">(Amount in Words)</td>
						<td style="border-width:0px;"></td>
						<td style="border-width:0px;padding-top:30px;text-align:center">(Amount in Numbers)</td>
						<td style="border-width:0px;"></td>
					</tr>
					<tr>
						<td width="30%" style="border-width:0px;"><b style="margin-left:100px">Structure:</b></td>
						<td width="40%" style="border-width:0px 0px 1px 0px;"><?php echo $vc_op_amoi->strct_wamount;?></td>
						<td width="2%" style="border-width:0px;"></td>
						<td width="20%" style="border-width:0px 0px 1px 0px;text-align:right;padding-right:70px">P <?php echo number_format($vc_op_amoi->strct_tamount,2);?></td>
						<td width="2%" style="border-width:0px;"></td>
					</tr>
					<tr>
						<td width="30%" style="border-width:0px;"><b style="margin-left:100px">Personal and Other Properties:</b></td>
						<td width="40%" style="border-width:0px 0px 1px 0px;"><?php echo $vc_op_amoi->pop_wamount;?></td>
						<td style="border-width:0px;"></td>
						<td width="20%" style="border-width:0px 0px 1px 0px;text-align:right;padding-right:70px">P <?php echo number_format($vc_op_amoi->pop_tamount,2);?></td>
						<td style="border-width:0px;"></td>
					</tr>
					<tr>
						<td width="30%" style="border-width:0px;"><b style="margin-left:100px">Loss of Life:</b></td>
						<td width="40%" style="border-width:0px 0px 1px 0px;"><?php echo $vc_op_amoi->lol_wamount;?></td>
						<td style="border-width:0px;"></td>
						<td width="20%" style="border-width:0px 0px 1px 0px;text-align:right;padding-right:70px">P <?php echo number_format($vc_op_amoi->lol_tamount,2);?></td>
						<td style="border-width:0px;"></td>
					</tr>
					<tr>
						<td width="30%" style="border-width:0px;"></td>
						<td width="20%" style="border-width:0px;"></td>
						<td style="border-width:0px;"></td>
						<td width="20%" style="border-width:0px;"></td>
						<td style="border-width:0px;"></td>
					</tr>
					<tr>
						<td colspan="5"><b>VI. OTHER INFORMATION</b></td>
					</tr>
					<tr>
						<td colspan="5" style="background-color:#fff;padding-left:30px"><b>Sultanate which the property is situated:</b> <?php echo $vc_op_amoi->sultanate_loc;?></td>
					</tr>
					<tr>
						<td colspan="5" style="background-color:#fff;padding-left:30px"><b>Name of Sultanate in Marawi City you are affiliated with:</b> <?php echo $vc_op_amoi->sultanate_affil;?></td>
					</tr>

				</table>
				
				<br>
				<br>
	
				<table style="border:0px;width:100%;text-align:left;margin-left:50px">
					<tr>
						<td width="40%" style="border-width:0px;">Name and Signature of Intake Officer: <?php if($vc_op_amoi->intake_officer!=""){echo "<u>".$vc_op_amoi->intake_officer."</u>";}else{echo "____________________________________";}?></td>
						<td style="border-width:0px;">Date of Completion: <?php if($vc_op_amoi->date_completed!="" AND $vc_op_amoi->date_completed!="0000-00-00"){echo "<u>".date_format(date_create($vc_op_amoi->date_completed),"m/d/Y")."</u>";}else{echo "______________________";}?></td>
					</tr>
				</table>
				
				<br>
				<br>
				<hr style="border: dotted 1px;">
				<br>
	
				<div style="width:250px;float:right;">
					<div>Validated by/Date: <?php if($vc_op_amoi->date_vaidated!="" AND $vc_op_amoi->date_vaidated!="0000-00-00"){echo "<u>".date_format(date_create($vc_op_amoi->date_vaidated),"m/d/Y")."</u>";}?></div><br><br><br>
						<div style="text-align:center">
							<div style="border-bottom:1px solid"><?php if($vc_op_amoi->validator!=""){echo $vc_op_amoi->validator;}?></div>
							<div>Name & Signature</div>
						</div>
				</div>
	
	</div>


	
	
			