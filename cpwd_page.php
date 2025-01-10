				<form id="up_cpwd" action="<?php echo base_url();?>c_phrms/update_pwd" method="POST">
				<center>
				<div id="notify"><?php $msg=$this->session->flashdata('msg'); if($msg!=''){echo '<label style="color:red;border: 1px solid red;padding:5px;font-weight:bold">'.$msg.'</label>';}?></div>
				<table id="add_tbl">
					<h2 style="color:#0776be">Change Password</h2>
					<tr>
						<td>Old Password<span>*</span></td>
						<td><input type="password" name="o_pwd" id="o_pwd" /></td>
					</tr>
					<tr>
						<td>New Password<span>*</span></td>
						<td><input type="password" name="n_pwd" id="n_pwd" /></td>
					</tr>
					<tr>
						<td>Confirm New Password<span>*</span></td>
						<td><input type="password" name="cn_pwd" id="cn_pwd" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input id="ch_btn" type="button" value="Submit" style="height:auto;width:auto;float:right"/></td>
					</tr>					
				</table>	
							
				</center>
				</form>
								
				
		<script type="text/javascript">
			$(document).ready(function(){
				
				
				$('#n_pwd, #cn_pwd, #o_pwd').on('input',function(){
						if (!( /^([a-zA-Z0-9_!@#$%&])+$/.test( $(this).val()))){
							$(this).val('');
						}
				});
				
				$('input').on('input change',function(){
					$(this).css({
								"border": "",
								"background": ""
					});
				});
				
				$('#ch_btn').button().on('click', function(){
					var n_pwd = $('#n_pwd').val();
					var cn_pwd = $('#cn_pwd').val();
					var isValid = true;
					
					
					$('#up_cpwd input').each(function() {
							if ($.trim($(this).val()) == '') {
							isValid = false;
								$(this).css({
										"border": "1px solid red",
										"background": "#feebeb"
										});
							}
							else {
								$(this).css({
										"border": "",
										"background": ""
										});
							}
					});
					
					
					
					if (isValid == false){
											$('#notify').html('<label style="color:red;border: 1px solid red;padding:5px;"><b>Please fill out all required (*) fields.</b></label>').show().delay(2000).fadeOut('slow');
					}
					else {
							if(n_pwd.length >= 6){
								if(n_pwd == cn_pwd){
									$('#up_cpwd').submit();
								}else{
									$('#notify').html('<label style="color:red;border: 1px solid red;padding:5px;"><b>New password does not matched</b></label>').show().delay(2000).fadeOut('slow');
								}
							}else{
									$('#notify').html('<label style="color:red;border: 1px solid red;padding:5px;"><b>Password must contain atleast 6 characters.</b></label>').show().delay(2000).fadeOut('slow');
								}
					}
					
				}).css({'background-color':'#CA5F5F', 'color':'#ffffff'});
				
			});
		</script>		