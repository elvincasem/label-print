<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Console Label Generator</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
		.preview-body{
			text-align:center;
			font-size:18px;
			font-family: Times New Roman;
		}
		.project_name{
			font-size:24px;
		}
		.project_number{
			font-size:26px;
		}
	</style>
	
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;height:100px;">
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.html"><img src="images/evans-logo.png"></a>
            </div>
            <!-- /.navbar-header -->

            

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Generate Label</a>
                        </li>
						<li>
                            <a href="panel_label.php"><i class="fa fa-dashboard fa-fw"></i> Panel Labels</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

		
		
		<!-- Modal -->
				<div class="modal fade" id="addPanel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title" id="myModalLabel">Panel Label</h4>
							</div>
							<div class="modal-body">
							   
						<form role="form" id="form_item"> 
							<div class="form-group">
								
								<label>Label Name</label>
								<input id="labelname" class="form-control" value="" tabindex="0" autofocus>
								<label>Label Description</label>
								<input id="labeldescription" class="form-control" value="" tabindex="0"> <input type="hidden" id="labelid" value="">                                 
							</div>
							
						</form>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default simplemodal-close" data-dismiss="modal">Close</button>
								<button id="savelabel" type="button" class="btn btn-primary">Save and Close</button>
								<button id="updatelabel" type="button" class="btn btn-primary" disabled>Update</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>

			<!-- end modal-->
		
		
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    
							<div class="pull-right" style="padding:10px">
								<button id="addpanelbutton" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addPanel">
									<i class="fa fa-plus-circle"></i> Add Panel
								</button>
                            </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Console Label Options
                        </div>
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr>
											<th>Label</th>
											<th>Description</th>
											<th>Action</th>
										</tr>
									</thead>
					<?php
						include_once("include/functions.php");			
						$userlist = selectListSQL("SELECT * FROM panel_label");
						foreach ($userlist as $rows => $link) {
							$labelid = $link['labelid'];
							$labelname = $link['labelname'];
							$labeldescription = $link['labeldescription'];
							
							
							echo "<tr class='odd gradeX'>";
							echo "<td>$labelname</td>";
							echo "<td>$labeldescription</td>";
							//hidden edit button class
							echo "<td class='center'> 
								
								<button class='btn btn-success' onClick='editlabel($labelid)'  data-toggle='modal' data-target='#addPanel'><i class='fa fa-edit'></i></button>
								<button class='btn btn-danger notification' id='notification' onClick='deletelabel($labelid)'><i class='fa fa-times'></i></button>
							</td>";
							echo "</tr>";
						}
						?>
															
															
															
															
															

														</tbody>
													</table>
							
							
							
							
							
                        </div>
                       
                    </div>
                </div>
                <!-- /.col-lg-12 -->
                
                
            </div>
            <!-- /.row -->
            
							
			
			
	
			
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	<!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	
		<script type="text/javascript">
		
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
					responsive: true
			});
		});
		
		$('#addpanelbutton').click(function(){
			document.getElementById("labelid").value = "";
			document.getElementById("labelname").value = "";
			document.getElementById("labeldescription").value = "";
			$('#savelabel').prop("disabled", false);    
			$('#updatelabel').prop("disabled", true);  
			document.getElementById("labelname").attr += " autofocus";
			//document.getElementById("labelname").value = "t";
			console.log("focus");
			//$("#labelname").focus();
			
		});
		
		function editlabel(panelid){
			$('#savelabel').prop("disabled", true);    
			$('#updatelabel').prop("disabled", false);  
			//var labelname = document.getElementById("labelname").value;
			//var labeldescription = document.getElementById("labeldescription").value;
			$.ajax({
					url: 'include/functions.php',
					type: 'post',
					data: {action: "getlabel", labelid : panelid},
					success: function(response) {
						console.log(response);
						var data = JSON.parse(response);
						document.getElementById("labelid").value = panelid;
						document.getElementById("labelname").value = data.labelname;
						document.getElementById("labeldescription").value = data.labeldescription;
						
					
						
					}
				});
		}
		
		function deletelabel(panelid){
			//alert(panelid);
			var r = confirm("Are your sure you want to delete this Label?");
				if (r == true) {
					
					$.ajax({
								url: 'include/functions.php',
								type: 'post',
								data: {action: "deletelabel", labelid: panelid},
								success: function(response) {
									console.log(response);
									location.reload();
								}
							});
					
				} if(r == false) {
					//txt = "You pressed Cancel!";
					
				}
		}
		
		
		$('#savelabel').click(function(){
			//alert("saved");
			var labelname = document.getElementById("labelname").value;
			var labeldescription = document.getElementById("labeldescription").value;
			
			
			
			$.ajax({
					url: 'include/functions.php',
					type: 'post',
					data: {action: "savelabel", labelname : labelname, labeldescription:labeldescription},
					success: function(response) {
						console.log(response);
					/*	var data = JSON.parse(response);
						document.getElementById("supplierid").value = id;
						document.getElementById("suppliername").value = data.supName;
						document.getElementById("address").value = data.address;
						document.getElementById("contactno").value = data.contactNo;
						return "valid";*/
						$( ".simplemodal-close" ).trigger( "click" );
						location.reload();
						//setTimeout(function(){location.reload();},1000);
					}
				});
			
			
			
		});
		
		
		$('#updatelabel').click(function(){
			//alert("saved");
			var labelid = document.getElementById("labelid").value;
			var labelname = document.getElementById("labelname").value;
			var labeldescription = document.getElementById("labeldescription").value;

			$.ajax({
					url: 'include/functions.php',
					type: 'post',
					data: {action: "updatelabel", labelid:labelid, labelname : labelname, labeldescription:labeldescription},
					success: function(response) {
						console.log(response);
					
						$( ".simplemodal-close" ).trigger( "click" );
						location.reload();
					}
				});
			
			
			
		});
		
			
		
		
		</script>
		

</body>

</html>
