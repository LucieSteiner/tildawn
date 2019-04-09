<!DOCTYPE html>
<?php
require("../controller/azure.php");
//getCauses()-> name, category, value
$causes = getCauses(null);

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
						    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createCause">New Cause</button>
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
									    
									    foreach ($causes as $cause){
										    echo '<tr>';
                                            echo '<td>'.$cause['name'].'</td>';
                               				echo '<td>'.$cause['category'].'</td>';
											echo '<td>'.$cause['value'].'</td>';
                                            echo '<td style="text-align: center;"><button type="button" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#editCause" data-id="'. $cause['id'] .'" data-name="'. $cause['name'].'" data-value="'. $cause['value'] .'"><i class="fa fa-edit"></i></button>   <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#deleteCause" data-id="'. $cause['id'] .'" data-name="'. $cause['name'].'"><i class="fa fa-trash-o"></i></button>';							
										    echo '</tr>';
										}
								    ?>
									
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                         <!-- Modal Create -->
                            <div class="modal fade" id="createCause" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">New Cause</h4>
                                        </div>
										<form name="create" role="form" method="post" action="../controller/causes.php">

											<div class="modal-body">
													<div class="form-group">
														<label for="name">Name</label>
														<input type="text" name="name" class="form-control">
													</div>
													<div class="form-group">
														<label for="category">Category</label>
														<select name="category" class="form-control">
															<option>Bonus</option>
															<option>Malus</option>
														</select>
													</div>
													<div class="form-group">
														<label for="value">Value</label>
														<input type="number" name="value" class="form-control">
													</div>
													<input type="hidden" name="action" value="create">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-primary">Create</button>
											</div>
										</form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
							</div>
								<!-- Modal Edit -->
                            <div class="modal fade" id="editCause" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Edit Cause</h4>
                                        </div>
										<form name="edit" role="form" method="post" action="../controller/causes.php">

											<div class="modal-body">
													<div class="form-group">
														<label for="name">Name</label>
														<input class="form-control name" type="text" name="name"  >
													</div>
													
													<div class="form-group">
														<label for="value">Value</label>
														<input type="number" name="value" class="form-control value" >
													</div>
													<input type="hidden" name="id" class="id">
													<input type="hidden" name="action" value="edit">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-primary">Save</button>
											</div>
										</form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div> 
							<div class="modal fade" id="deleteCause" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Delete Cause</h4>
                                        </div>
										<form name="delete" role="form" method="post" action="../controller/causes.php">

											<div class="modal-body">
													<p> Delete this cause? </p>
													<input disabled class="form-control name">
													<input type="hidden" name="id" class="id">
													<input type="hidden" name="action" value="delete">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-primary">Yes</button>
											</div>
										</form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div> 
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
	$('#editCause').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
		var id = button.data('id')
        var name = button.data('name')
		var value = button.data('value')
		var modal = $(this)
		modal.find('.modal-body .id').val(id)
		modal.find('.modal-body .name').val(name)
		modal.find('.modal-body .value').val(value)
	})
	$('#deleteCause').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
		var id = button.data('id')
        var name = button.data('name')
		var modal = $(this)
		modal.find('.modal-body .id').val(id)
		modal.find('.modal-body .name').val(name)
	})
    </script>

</body>

</html>
