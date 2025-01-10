				
					<h1 id="title_tbl" style="color:#ca3c62;font-family:arial;margin:20px 0px 0px 0px;text-align:center;font-size:24x;">
						System Logs
					</h1>
					<br>	
				
				
				<table id="logs_tbl" class="display" cellspacing="0" data-page-length='20' width="100%" style="font-size:14px">
					
						<thead  style="text-align:center;background-color:#069e82;color:#fff;text-align:center">
							
							<tr>
									<th>dl_id</th>
									<th>User</th>
									<th>Activity</th>
									<th>Date/Time</th>
							</tr>
						</thead>
						<tfoot id="t_foot" style="text-align:left;font-size:14px;">
							<tr>
									<th>dl_id</th>
									<th>User</th>
									<th>Activity</th>
									<th>Date/Time</th>
							</tr>
						</tfoot>
						
					</table>
				
		<script type="text/javascript">
		$(document).ready(function(){
			
			$('#logs_tbl').DataTable({
				
					"processing":true,
					"serverSide":true,
					'serverMethod': 'post',
					"ajax":"<?php echo base_url();?>c_phrms/get_logs_data",
					
					'columns': [
						 { data: 'dl_id' },
						 { data: 'u_name' },
						 { data: 'event' },
						 { data: 'e_dt' },
					 ],
					 
					//"bLengthChange": true,
					"dom": '<"toolbar">rtip',
					//"dom": 'Bfrtip',
					//"lengthMenu": [ [10, 20, 50, -1], [10, 20, 50, "All"] ],
					"language": {
					"processing": "Loading Data...",
					"sSearch": "Search Keywords:",
					"decimal": ".",
					"thousands": ",",
					"loadingRecords": "Please wait - loading...",
					"lengthMenu": "Display _MENU_ Records",
					"zeroRecords": "No records found",
					//"info": "Page _PAGE_ of _PAGES_",
					"infoEmpty": "No records available",
					"infoFiltered": "(filtered from _MAX_ total records)"
				},
				"columnDefs": [
					
					{ "width": "50%", "targets": [3] },
					
					{
						"targets": [0],
						"visible": false,
						"searchable": false
					},
					{
						"targets": [1,3],
						"className": "text-center",
					}
					
				],
				/* buttons: [
					'excel', 'pdf', 'print'
				] */
				
			}).order( [ 0, 'desc' ] ).draw();
			
			
			var table = $('#logs_tbl').DataTable();
			/* $('#logs_tbl tbody').on('click', 'tr', function() {
				var idx = table.row(this).data();
									
					$("#modal_content").load("<?php echo base_url();?>c_esk/get_prev_page?doc_no="+idx['doc_no']+"").dialog({
										title: 'Record Preview',
										resizable: false,
										width: '90%',
										show: 'fade',
										hide: 'fade',
										modal: true,
										closeOnEscape: false,
										//close: function() {window.location.reload();},
										position: {
											my: 'center',
											at: 'top',
										},
										
										
					});
					
										
			}); */
			
			//$('#t_foot').hide();
			$('#logs_tbl tfoot th').each( function (i) {
					var title = $(this).text();

					/* if(title!=''){
						if(title=='Type' || title=='Priority' || title=='Status'){
							var select = $("<select style='height:30px' placeholder='"+title+"'><option value=''></option></select>")
						.appendTo( $(this).empty() )
						.on( 'change', function () {
							table.column( i )
								.search( $(this).val() )
								.draw();
						});
			 
						table.column( i ).data().unique().sort().each( function ( d, j ) {
							select.append( "<option value='"+d+"'>"+d+"</option>" )
						} );
								
							}
							else{ */
								$(this).html( '<input type="text" id="'+title+'" placeholder="'+title+'" data-index="'+i+'" />' );
							/* 	}
						}
					else{$(this).html( '<span></span>' );} */
					
					$('#Date_From').datepicker({dateFormat: "yy-mm-dd"});
					$('#Date_To').datepicker({dateFormat: "yy-mm-dd"});
					$('#Date_Submitted').datepicker({dateFormat: "yy-mm-dd"});
	
			});
			$('#col_srch').button().on('click', function(){
						
				if($('#t_foot').is(':hidden')){
					$('#t_foot').show('medium');
					$('#col_srch').text('Hide Column Search');
				}
				else{
					$('#t_foot').hide('medium');
					$('#col_srch').text('Show Column Search');
				}
				
			});
			
			$( table.table().container() ).on( 'keyup change', 'tfoot input', function () {
				table
					.column( $(this).data('index')+1 )
					.search( this.value )
					.draw();
			} );
			
			
		});
	</script>
	
	<style>
		.text-center{
			text-align:center;
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
			width:100px;
		}
		
		
		.row{
			margin-bottom:10px;
		}
	</style>