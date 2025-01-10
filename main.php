<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="<?php echo base_url();?>ext_lib/images/denr.png" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DENR-10 PRIME-HRM SYSTEM</title>


<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/main.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/JQ/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/data_tables/datatables.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/bootstrap/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/leaflet/leaflet.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/font-awesome/css/font-awesome.min.css" />


<script type="text/javascript" src="<?php echo base_url();?>ext_lib/JQ/external/jquery/jquery.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/JQ/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/FormatCurrency.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/data_tables/datatables.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/bootstrap/js/bootstrap.bundle.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/sweetalert2.all.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/canvasjs.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/leaflet/leaflet.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/leaflet_omnivore/leaflet-omnivore.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/webcamjs/webcam.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/leaflet_kmz/dist/leaflet-kmz.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/jszip/dist/jszip.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/countdown/countdown-timer.js" ></script>

</head>


<body style="background-color:#f5f5f5">
	<?php if($this->session->userdata('valid') == true):?>
	<div id="menu_bar">
	 <span class="pull-left"><img src="<?php echo base_url();?>ext_lib/images/denr.png" alt="logo" style="height:80px;width:auto;margin:3px 0px 0px 20px"></span>
        <span style="font-size:26px;margin-left:25px;color:#fff">DENR-10 PRIME-HRM SYSTEM</span>        
		
                 
	
		<a href="<?php echo base_url();?>c_phrms/logout" id="" style="float:right;margin-right:20px;color:#fff" title="Logout"><i class="fa fa-lg fa-power-off" aria-hidden="true"></i> Logout</a>
		
		<div style="float:right;">	
		<?php
		if($this->session->userdata('role_log_id')==1){
			echo "<div class='dropdown' style='height:50px;'>
					<a href='#'><img src='".base_url()."ext_lib/images/icon/menu.png' alt='' title='User Group' style='margin-right:10px;' /><i style='color:#ffffff;vertical-align:top;font-size:17px'>Menu</i></a>
						<div class='dropdown-content' style='margin-top:43px;'>";
						if($this->session->userdata('role_log_id')==1){
							echo "<a href='".base_url()."c_phrms/db_buildup'><img src='".base_url()."ext_lib/images/icon/archive.png' alt='' /><span style='vertical-align:top'>DB Build-up</span></a>";
							echo "<a href='".base_url()."c_phrms/user_page'><img src='".base_url()."ext_lib/images/icon/ugroup.png' alt='' /><span style='vertical-align:top'>User Account</span></a>";
						}
						if($this->session->userdata('role_log_id')!=1){
							echo "<a href='".base_url()."c_phrms/cpwd_page' id=''><img src='".base_url()."ext_lib/images/icon/pwd.png' alt='' /><span style='vertical-align:top'>Change Password</span></a>";
						}
						
						if($this->session->userdata('role_log_id')==1){
							echo "<a href='".base_url()."c_phrms/sys_log_page' id=''><img src='".base_url()."ext_lib/images/icon/log.png' alt='' /><span style='vertical-align:top'>System Logs</span></a>";
						}
			echo "	</div> </div> ";
		}
		?>	
		

		
		</div>
		
		<div style="float:right;margin:5px 30px;color:#ffffff;font-style:italic">	
				<?php echo "<i class='fa fa-lg fa-user-o' aria-hidden='true'></i> <span style='vertical-align:top'>".$this->session->userdata('u_log_fname')." ".$this->session->userdata('u_log_mname')." ".$this->session->userdata('u_log_lname')."</span>";?>	
		</div>
		
		<?php if($this->session->userdata('role_log_id')==1 or $this->session->userdata('role_log_id')==3):?>
			<a href="<?php echo base_url();?>c_phrms/main_page" id="" style="float:right;"><img src="<?php echo base_url();?>ext_lib/images/icon/home.png" alt="Home" /></a>
		<?php endif;?>
		
		
		
	</div>
	<?php endif;?>
					<!--
				<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom" style="background-color:#069e82 !important;">
                    <div class="container-fluid">
                        
					
						<button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
						


					   <div class="collapse navbar-collapse" id="navbarSupportedContent">
					   
						<span style="color:#fff;font-size:26px;margin-left:30px;color:#f8ff31"><img src='<?php echo base_url();?>ext_lib/images/oes_logo.png' alt='' style="height:45px;margin-right:10px" /> MARAWI COMPENSATION DATABASE</span>
                          
						  <?php if($this->session->userdata('valid') == true):?> 
							<ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>c_phrms"><img src="<?php echo base_url();?>ext_lib/images/icon/home.png" height='20px' alt="Home" />Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!"><?php echo "<img src='".base_url()."ext_lib/images/icon/user.png' height='20px' alt='' title='User Group' style='margin-right:10px;' /><span style='vertical-align:top'>".$this->session->userdata('role_log_name')."</span>";?>	</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
										<?php
											if($this->session->userdata('role_log_id')==1){
												echo "<a class='dropdown-item' href='".base_url()."c_phrms/user_page'><img src='".base_url()."ext_lib/images/icon/ugroup.png' height='20px' alt='' /><span style='vertical-align:top;margin-left:10px'>User Account</span></a>";
											}
											if($this->session->userdata('role_log_id')!=1){
												echo "<a class='dropdown-item' href='".base_url()."c_phrms/cpwd_page' id=''><img src='".base_url()."ext_lib/images/icon/pwd.png' height='20px' alt='' /><span style='vertical-align:top;margin-left:10px'>Change Password</span></a>";
											}
											
											if($this->session->userdata('role_log_name')!="Viewer" AND $this->session->userdata('role_log_name')!="Encoder"){
												echo "<a class='dropdown-item' href='".base_url()."c_phrms/sys_log_page' id=''><img src='".base_url()."ext_lib/images/icon/report.png' height='20px' alt='' /><span style='vertical-align:top;margin-left:10px'>System Logs</span></a>";
											}
											
										?>	
                                        <div class="dropdown-divider"></div>
                                        <a class='dropdown-item' href="<?php echo base_url();?>c_phrms/logout" title="Logout"><img src="<?php echo base_url();?>ext_lib/images/icon/logout.png" height='20px' alt="Logout" /><span style='vertical-align:top;margin-left:10px'>Logout</span></a>
                                    </div>
                                </li>
                            </ul>
							<?php endif;?>
							
                        </div>
                    </div>
                </nav>
				-->
	<!--
	<div id="header">
		
		<ul class="nav justify-content-center">
		  <li class="nav-item" style="margin-right:50px">
			<h1 style="font-size:45px;">Transactions</h1>
		  </li>
		  <li class="nav-item">
			<a class="nav-link active" href="#">ONLINE<br>APPLICATION</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">DOCUMENT<br>TRACKING</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="<?php echo base_url();?>c_phrms/intake">INTAKE<br>DATA ENTRY</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">SECRETARIAT<br>REVIEW</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">BOARD<br>DIVISION</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="#">BOARD<br>EN BANC</a>
		  </li>
		</ul>
		
	</div>
	-->
	
	
	<center>
	<div id="main_content"><?php $this->load->view($page);?></div>
	</center>
	
	
	
	<?php if($this->session->userdata('valid') == TRUE):?>
	<div style="width: 30%; margin: 0 auto;font-size:10px">
		<center>
			<div style="color:red;">Powered By:</div> 
	        <div>Regional ICT Section</div> 
	        <div>Department of Environment and Natural Resources, Region 10</div> 
	        <div>Puntod, Cagayan de Oro City 9000</div> 
	        <div>VOIP No. 3418</div>
		</center>
	</div>
	<br>
	<?php endif;?>
<!--	
	<div id="footer">
		<center>
			<div>ICTen Network</div>
			<div>Department of Environment and Natural Resources, Region 10</div>
			<div>&copy; 2019 Version 1.0</div>
		</center>

	</div>
-->

	
	<script type="text/javascript">
	$(document).ready(function(){	
					
		
		
			
	});
	</script>
		
			
</body>
</html>