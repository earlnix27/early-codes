			
			<div class="modal fade" id="logIn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">USER LOGIN</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				  </div>
				  <div class="modal-body" style="text-align:left;width:90%;margin-left:40px">
					
					<div class="row" style="margin-top:0px">
					<center>
					  <div class="col-sm-12" style="padding:20px;z-index:100;border-radius:0.3rem;height:200px">
								
						<form action="<?php echo base_url();?>c_phrms/login" method="POST">
							<div id="msg"><?php $msg=$this->session->flashdata('msg'); if($msg!=''){echo '<label style="color:red;margin:5px;padding:5px;font-weight:bold">'.$msg.'</label>';}?></div>
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
				</div>
			  </div>
			</div>




			
		<div class="container-fluid">
		
		
		
		<div class="row" style="margin-top:40px">
			<div class="col-sm-8">
			<div class="col-sm-8" style="width:600px">
				<h4>Program to Institutionalize Meritocracy and Excellence in Human Resource Management (PRIME-HRM)</h4> 
				<br>
				<p style="font-size:16px">PRIME-HRM integrates and enhances the Personnel Management Assessment and Assistance Program and the CSC Agency Accreditation Program. It is a mechanism that empowers government agencies by developing their human resource management competencies, systems, and practices toward HR excellence.</p>
			</div>
			</div>
			<div class="col-sm-4" style="padding-top:20px;border-left: 1px solid #ccc9c9">
			<div class="col-sm-6" style="font-size:11px;width:250px">
				<p>On September 30, 2020 the Civil Service Commission conferred the Bronze Award to DENR, Region 10 for managing and implementing its human resource management systems thereby achieving the Maturity Level 2 on all four core HRM Systems: Recruitment Selection and Placement; Performance Management; Learning and Development and Rewards and Recognition.</p>
				<p>With this award, DENR Region 10 is granted with several privileges such as authority to approve appointments subject to post audit and a 20% discount on trainings/conferences conducted by the Civil Service Institute.</p>
			
				<center><img src="<?php echo base_url();?>ext_lib/images/csc_prime_hrm.png" style="height:100px;width:200px;"></center>
			
			</div>
			</div>
		</div>
		
		
		
		
		
		<div class="footer">
		
		<div class="row" style="margin-top:70px">
		
			<div class="row">
			
				<div class="pillars col-sm-3" style="margin-left:0%">
					<h2>01</h2> 
					<h5>Recruitment, Selection <br>and Placement</h5>
				</div>
				<div class="pillars col-sm-3" style="border-left: 1px solid #fff">
					<h2>02</h2> 
					<h5>Performance <br> Management</h5>
				</div>
				<div class="pillars col-sm-3" style="border-left: 1px solid #fff">
					<h2>03</h2> 
					<h5>Learning and <br> Development</h5>
				</div>
				<div class="pillars col-sm-3" style="border-left: 1px solid #fff">
					<h2>04</h2> 
					<h5>Rewards and <br> Recognition</h5>
				</div>
				
			</div>
		
			
		</div>	
		
		
		</div>		
				
				
<script type="text/javascript">
		
$(document).ready(function(){
	
	$(document).on("click", ".pillars" , function(e){
		
		$('#logIn').modal('show');
	});
	
	
	
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

	h5{
		font-size:16px;
	}

	
	.pillars:hover {
		transform: scale(1.1);
		transition-duration: 0.5s;
		cursor:pointer;
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
	
	
	.footer {
	   position: fixed;
	   left: 0;
	   bottom: 0;
	   width: 100%;
	   background-color: #069e82;
	   color: white;
	   height:300px;
	}
	
	
</style>