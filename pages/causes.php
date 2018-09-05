<!DOCTYPE html>
<?php
//getCauses()-> name, category, value
$causes = array(
    array('Tricherie', 'Malus', 1000),
	array('Manque bénévolat', 'Malus', 500),
	array('Sourire sympatique', 'Bonus', 200),
	array('Déguisement', 'Bonus', 500),
	array('Violence', 'Malus', 1000),
	array('Fairplay', 'Bonus', 500)


);
//edit ->dialog
//delete -> dialog
//new -> dialog
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'tildawn - Causes</title>

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
                        <h1 class="page-header">Causes</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
				
                <!-- /.row -->
				
				<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
						    <button type="button" class="btn btn-success">New Cause</button>
						</div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
										<th>Default value</th>
										<th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
								    <?php 
									    $parity = 1;
									    foreach ($causes as $cause){
										    if($parity == 1){
												echo '<tr class="odd">';
											}
                                            else{
												echo '<tr class="even">';
											}
                                            echo '<td>'.$cause[0].'</td>';
                               				echo '<td>'.$cause[1].'</td>';
											echo '<td>'.$cause[2].'</td>';
                                            echo '<td style="text-align: center;"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-edit"></i></button>   <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button>';							
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
			],
			searching: false,
			paging: false,
			info: false
        });
    });
    </script>

</body>

</html>
