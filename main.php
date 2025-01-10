<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="<?php echo base_url();?>ext_lib/images/denr.png" type="image/png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Employee Tracking System</title>


<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/main.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/JQ/jquery-ui.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/data_tables/datatables.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>ext_lib/bootstrap/css/bootstrap.min.css" />


<script type="text/javascript" src="<?php echo base_url();?>ext_lib/JQ/external/jquery/jquery.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/JQ/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/FormatCurrency.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/data_tables/datatables.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>ext_lib/bootstrap/js/bootstrap.min.js" ></script>

</head>


<body>

	<div class="row">
		<div class="col jumbotron" style="height:150px;padding:30px">
		<h1>Employee Transaction System</h1>
		<p>Provincial Environment and Natural Resources Office - <strong>BUKIDNON</strong></p>
		</div>
	</div>
	<div class="row">
		<div class="col-2">
			<div class="list-group list-group-flush">
			 <a href="<?php echo base_url().'c_ets/rec_list'; ?>" class="list-group-item list-group-item-action">Records</a>
			 <a href="<?php echo base_url().'c_ets/emp_list'; ?>" class="list-group-item list-group-item-action">Employees</a>
			</div>
		</div>
		
		<div class="col-10">
			<?php $this->load->view($page);?>
		</div>
		
	</div>



	
	<script type="text/javascript">
	$(document).ready(function(){	
			
			
			
	});
	</script>
		
			
</body>
</html>