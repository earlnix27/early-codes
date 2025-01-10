			<div class="modal fade" id="emp_rec_details">
				<div class="modal-dialog modal-dialog-scrollable modal-lg">
				<div class="modal-content">

				  <div class="modal-header">
					<h4 class="modal-title">Travel Details</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				  </div>

				<div class="modal-body">
				<div class="row">
					<div class="col-sm-4 m-3"> 
						<div id="emp_rec_content"></div>
					</div>
					<div class="col-sm-7"> 
						<div id="map_div"></div>
						<div id="g_map"></div>
					</div>
				</div>
				</div>
				</div>
				</div>
			 </div>
			
			
			
			  
				<div id="r_cont" class="row">
				
				<?php
				
				date_default_timezone_set('Asia/Manila');
				
				$current_dt = date('Y-m-d');

				foreach ($record as $row):
				
				$start_dt = date('Y-m-d', strtotime($row['start_dt']));
				$end_dt = date('Y-m-d', strtotime($row['end_dt']));
				?>
				
					<?php if($current_dt>=$start_dt && $current_dt<=$end_dt):?>
						<div class="col-sm-6 col-md-3 m-3"> 
						<div class="thumbnail"> 
							<img src="<?php echo base_url().'ext_lib/images/empty.jpg'; ?>" alt="" width="200"> 
						</div>
						<div class="caption"> 
							<h4><?php echo $row['f_name']." ".substr($row['m_name'],0,1).". ".$row['l_name'];?></h4>
							<label><?php echo $row['position'];?></label>
							<br>
							<label><?php echo $row['emp_no'];?></label> 
							<p>
							
							<?php 
								if($row['app_type']==1){echo '<strong class="alert alert-success mr-2">On-Travel</strong>';}
								elseif($row['app_type']==2){{echo '<strong class="alert alert-danger mr-2">On-Leave</strong>';}}
							?>
							
							<input type="button" value="More Info" id="<?php echo $row['rec_id'];?>" type="button" class="btn btn-primary" >
							</p> 
						</div>
						</div>
					<?php endif;?>
				
				<?php endforeach;?>
				
				</div>
			  
	
	<script type="text/javascript">
	$(document).ready(function(){	
			
			$('#s_dt, #e_dt').datepicker();
		
			$('#r_cont input').on('click', function(){
				var rec_id = $(this).attr('id');
				$.ajax({ 
							type: "POST", 
							url: "<?php echo base_url();?>c_ets/get_emp_rec_content?rec_id="+rec_id+"",
							success: function(data){
								
									$('#emp_rec_content').html(data[0]);
									$('#map_div').html(data[1]);
									var embed = "<iframe width='470' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?&amp;q="+encodeURIComponent(data[2])+"&amp;output=embed'></iframe>";  
									$('#g_map').html(embed);
							}
						});
				$('#emp_rec_details').modal('show');
			});
			
		
        

			
			
	});
	</script>
		
			
</body>
</html>