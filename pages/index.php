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
                
                <a class="navbar-brand" href="index.php"><img src="images/evans-logo.png"></a>
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

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Console Label Options
                        </div>
                        <div class="panel-body">
                            
							<div class="form-group">
                                            <label>Project Name</label>
                                            <input id="project_name" class="form-control" maxlength="32" placeholder="Max 32 Characters">
                                            
                            </div>
							<div class="form-group">
                                            <label>Project Name Continued</label>
                                            <input id="project_name_continued" class="form-control" maxlength="32" placeholder="Max 32 Characters">
                                            
                            </div>
							<div class="form-group">
                                            <label>Project Number</label>
                                            <input id="project_number" class="form-control">
                                            
                            </div>
							<div class="form-group">
                                            <label>Starting Label Number</label>
                                            <input id="starting_label" class="form-control">
                                            
                            </div>
							<div class="form-group">
                                            <label>Ending Label Number</label>
                                            <input id="ending_label" class="form-control">
                                            
                            </div>
							<div class="form-group">
                                            <label>Option Text 1</label>
                                            <input id="option_1" class="form-control">
                                            
                            </div>
							<!-- <div class="form-group">
                                            <label>Option Text 2</label>
                                            <input id="option_2" class="form-control">
                                            
                            </div> -->
							
							
							
							
                        </div>
                       
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Console Label Options
                        </div>
                        <div class="panel-body">
									<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="structure_labels">Print Structure Labels? 
													
                                                </label>
												<input class="form-control" id="structure_copies" value="2">
                                    </div>
                            <div class="form-group">
                                            <label>Panel labels</label>
											
											
											
				<?php
								include_once("include/functions.php");			
								$userlist = selectListSQL("SELECT * FROM panel_label");
								foreach ($userlist as $rows => $link) {
									$labelid = $link['labelid'];
									$labelname = $link['labelname'];
									$labeldescription = $link['labeldescription'];
									$labelelementid = "label_".$labelid;
									
									echo "<div class='checkbox'>";
									echo "<strong>$labelname </strong>";
                                    echo "<label>";
                                    echo "<input id='$labelelementid' type='checkbox' value='$labelid'>$labeldescription</div>";
								}
				?>
											
											
											
											
											<!--
                                            
                                            <div class="checkbox">
											<strong>B</strong>
                                                <label>
                                                    <input id="labelb" checked type="checkbox" value="">Back Panel 
                                                </label>
                                            </div>
                                            <div class="checkbox">
											<strong>B1</strong>
                                                <label>
                                                    <input id="labelb1" type="checkbox" value="">DH Back Panel 
                                                </label>
                                            </div>
											<div class="checkbox">
											<strong>B2</strong>
                                                <label>
                                                    <input id="labelb2" type="checkbox" value="">TH Back Panel 
                                                </label>
                                            </div>
											<div class="checkbox">
											<strong>C</strong>
                                                <label>
                                                    <input id="labelc" checked type="checkbox" value="">Top Panel 
                                                </label>
                                            </div>
											<div class="checkbox">
											<strong>D</strong>
                                                <label>
                                                    <input id="labeld" checked type="checkbox" value="">Worksurface 
                                                </label>
                                            </div>
											<div class="checkbox">
											<strong>E</strong>
                                                <label>
                                                    <input id="labele" checked type="checkbox" value="">Front Panel
                                                </label>
                                            </div>
											<div class="checkbox">
											<strong>F</strong>
                                                <label>
                                                    <input id="labelf" checked type="checkbox" value="">Front Baseboard 
                                                </label>
                                            </div>
											<div class="checkbox">
											<strong>G</strong>
                                                <label>
                                                    <input id="labelg" type="checkbox" value="">Equipment Front 
                                                </label>
                                            </div> -->
                                        </div>
									
									<button type="button" class="btn btn-primary btn-lg" onclick="preview()">Preview</button>
									
									<button type="button" class="btn btn-warning btn-lg" onclick="printpdf()">Print to PDF</button>
                        </div>
                        
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                
            </div>
            <!-- /.row -->
            
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Label Preview
                        </div>
						
						<div class="panel-body">
						
							<div class="preview-wrapper">
								<p class="preview-body"><img src="images/preview-logo.png"></p>
								<br>
								<div class="preview-body project_name" id="project_name_label">Project Name</div>
								<div class="preview-body project_number" id="project_number_label">Project Number</div>
								<br>
								<div class="preview-body" id="option_text_1"><strong>Option Text 1</strong></div>
								<div class="preview-body" id="option_text_2"><strong><i>Made In Canada</i></strong></div>
								
							
							</div>
						
						
						</div>
					</div>
				</div>
			</div>
			<!--row-->
			
			
	
			
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
	
	
		<script type="text/javascript">
			
			function printpdf(){
			
			var panellabels = "";
			
				if (document.getElementById("structure_labels").checked==true){
					var structure_copies = document.getElementById("structure_copies").value;
					panellabels += "&structurelabels="+structure_copies;
					
					var projname = document.getElementById("project_name").value;
				var projnamecontinued = document.getElementById("project_name_continued").value;
				var projnumber = document.getElementById("project_number").value;
				var startinglabel = document.getElementById("starting_label").value;
				var endinglabel = document.getElementById("ending_label").value;
				var option1 = document.getElementById("option_1").value;
				
				window.open('pdf/print-grid.php?projname='+projname+'&projnamecontinued='+projnamecontinued+'&projnumber='+projnumber+'&start='+startinglabel+'&end='+endinglabel+panellabels+'&option1='+option1);
					
					
					
					
				}else{
					
					
					
					
					$.ajax({
						url: 'include/functions.php',
						type: 'post',
						data: {action: "getalllabels"},
						success: function(response) {
							//console.log(response);
							var data = JSON.parse(response);
							var divlabelid ="";
							for(var i=0; i<data.length; i++){
								//alert(data[i].labelname);
								divlabelid = "label_"+data[i].labelid;
								//console.log(divlabelid);
								if (document.getElementById(divlabelid).checked==true){
										panellabels += "&"+divlabelid+"=1";
													
									}else{
										
										panellabels += "&"+divlabelid+"=0";
									}
								
								
							}
							
							var projname = document.getElementById("project_name").value;
				var projnamecontinued = document.getElementById("project_name_continued").value;
				var projnumber = document.getElementById("project_number").value;
				var startinglabel = document.getElementById("starting_label").value;
				var endinglabel = document.getElementById("ending_label").value;
				var option1 = document.getElementById("option_1").value;
				
				
				window.open('pdf/print-grid.php?projname='+projname+'&projnamecontinued='+projnamecontinued+'&projnumber='+projnumber+'&start='+startinglabel+'&end='+endinglabel+'&option1='+option1+panellabels);
							
							
							//alert(panellabels);
							//alert(data.length);
							//alert(data);​
							//document.getElementById("labelid").value = panelid;
							//document.getElementById("labelname").value = data.labelname;
							//document.getElementById("labeldescription").value = data.labeldescription;
							
						
							
						}
					});
					//console.log(panellabels);
					
					
					
				
				}
			

				
				
			}
		
			function printbrowser(){
				window.open('printbrowser.php');
			}
			
			function preview(){
			
				//alert("ss");
				var projname = document.getElementById("project_name").value;
				var projnamecontinued = document.getElementById("project_name_continued").value;
				var projnumber = document.getElementById("project_number").value;
				var startinglabel = document.getElementById("starting_label").value;
				var endinglabel = document.getElementById("ending_label").value;
				var option1 = document.getElementById("option_1").value;
				
				
				var projectsequence = projnumber + "-" + "A-" + startinglabel;
				
				document.getElementById("project_name_label").innerHTML = projname + "<br />" + projnamecontinued;
				document.getElementById("project_number_label").innerHTML = projectsequence;
				document.getElementById("option_text_1").innerHTML = option1;
			
			}
		
		
		</script>

</body>

</html>
