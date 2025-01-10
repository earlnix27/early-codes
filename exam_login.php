	<div id="menu_bar" style="text-align:left;border-radius:0.3rem">
		 <span class="pull-left"><img src="<?php echo base_url();?>ext_lib/images/denr.png" alt="logo" style="height:80px;width:auto;margin:3px 0px 0px 20px"></span>
		  <span style="font-size:26px;margin-left:25px;color:#fff">DENR-10 Online Examination System</span>        
	</div>


	
		<div class="container-fluid">
		<div class="row" style="margin-top:200px">
		<center>
		  <div class="col-sm-3" style="background-color:#e0e0e0;padding:20px;z-index:100;border-radius:0.3rem;height:250px">
					
			<h6>EXAMINEE LOGIN</h6>
			<br>
			<form action="<?php echo base_url();?>c_phrms/exam_login" method="POST">
				<div id="msg"><?php $msg=$this->session->flashdata('msg'); if($msg!=''){echo '<label style="color:red;margin-bottom:20px;font-weight:bold">'.$msg.'</label>';}?></div>
				<div class="input-group input-group-sm mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="inputGroup-sizing-sm"><img src="<?php echo base_url();?>ext_lib/images/icon/uin.png" style="height:20px;" /></span>
				  </div>
				  <input type="text" id="uname" name="uname" class="form-control" placeholder="Username" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
				</div>
				<div class="input-group input-group-sm mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><img src="<?php echo base_url();?>ext_lib/images/icon/pwd.png" style="height:20px" /></span>
				  </div>
				  <input type="password" id="upwd" name="upwd" class="form-control" placeholder="Password" aria-label="Small" aria-describedby="inputGroup-sizing-sm" required>
				   <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><a id="pass_peek" ><img src="<?php echo base_url();?>ext_lib/images/icon/peek.png" style="height:20px" /></a></span>
				  </div>
				</div>
				 <button type="submit" id="sub_btn" class="btn btn-sm btn-success" style="float:right">Login</button>
			</form>
		
			
		  </div>
		  
		  	</center>
		  
		</div>		
		</div>		
				
				
<script type="text/javascript">
		
$(document).ready(function(){
	
	
	
	$('#uname, #upwd').on('input',function(){
				if (!( /^([a-zA-Z0-9ñÑ_!@#$%&-])+$/.test( $(this).val()))){
					$(this).val('');
				}
	});
	
	$('#pass_peek').on('mousedown',function(){$('#upwd').attr('type', 'text');});
	$('#pass_peek').on('mouseleave',function(){$('#upwd').attr('type', 'password');});
	$('#pass_peek').on('mouseup',function(){$('#upwd').attr('type', 'password');});
	
	
			
});

</script>	

<style>

	a {
		color:black;
	}
	
	#map { height: 600px; }
	
	.canvasjs-chart-credit{
		display:none;
	}
	
	.leaflet-control-attribution{
		display:none
	}
	
	.row{
		margin-bottom:5px;
	}
</style>