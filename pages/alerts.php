<!DOCTYPE html>
<?php

$alerts = array(
    array('Indice', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'Active'),
	array('Annonce', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'Inactive'),
	array('Météo', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'Active'),
	array('Nouvel indice', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'Active'),
	array('Fin du jeu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan aliquet tellus, semper euismod urna finibus placerat. Vestibulum hendrerit tellus.', 'Inactive')

)

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'tildawn - Alerts</title>

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
                        <h1 class="page-header">Alerts</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						    <button type="button" class="btn btn-success">New Alert</button>
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Title</th>
										<th>Text</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
								    <?php 
									    $parity = 1;
									    foreach ($alerts as $alert){
										    if($parity == 1){
												echo '<tr class="odd">';
											}
                                            else{
												echo '<tr class="even">';
											}
                                            echo '<td>'.$alert[0].'</td>';
                               				echo '<td>'.$alert[1].'</td>';
                                            echo '<td style="text-align: center;"><button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button></td>';							
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
			order: [[1, 'asc']],
			"columnDefs": [
				{ "orderable": false, "targets": 2 },
				{ "width": "5%", "targets": 2 },
				{ "width": "80%", "targets": 1}
			],
			paging: false,
			searching: false,
			info:false
        });
	});
    </script>
</body>

</html>
