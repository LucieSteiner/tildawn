<!DOCTYPE html>
<?php
//getObjects ->name, value, foundby 
$objects = array(
    array("Table", 200, "Usine"),
	array("Pantoufle", 450, "-"),
	array("Licorne", 10000, "Asile"),
	array("Drogue", 10, "Caserne"),
	array("Amour", 500, "Abattoirs"),
	array("Vocation", 2000, "Usine"),
	array("Amis", 150, "-"),
	array("Lampadaire", 250, "-"),
	array("Mort", 0, "Zombie"),
	array("Poussette", 471, "Asile"),
	array("Fleurs", 200, "Caserne"),
	array("Piège à loup", 1000, "-")

);
//export (format?)
//edit (value ou foundby) -> dialog

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'tildawn - Objects</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <?php include("nav.php");?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Objects</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <!-- add export buttons -->
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Value</th>
										<th>Found by</th>
										<th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
								    <?php 
									    $parity = 1;
									    foreach ($objects as $object){
										    if($parity == 1){
												echo '<tr class="odd">';
											}
                                            else{
												echo '<tr class="even">';
											}
                                            echo '<td>'.$object[0].'</td>';
                               				echo '<td>'.$object[1].'</td>';
											echo '<td>'.$object[2].'</td>';
                                            echo '<td style="text-align: center;"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></button></td>';							
										    $parity = $parity + 1 % 2;
										}
								    ?>
									
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	
	<!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>
	
	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
			order: [[0, 'asc']],
			"columnDefs": [
				{ "orderable": false, "targets": 3 },
				{ "width": "5%", "targets": 3 }
			]
        });
    });
    </script>

</body>

</html>
