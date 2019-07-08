<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'tildawn</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php require("nav.php");?>
	<div id="wrapper">
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Dashboard</h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-lg-4">
					<a href="#">
						<button type="button" style="padding:10%;" class="btn btn-success btn-block btn-lg" data-toggle="modal" data-target="#recv-lives">Receive Enemy Lives</button>
					</a>	
				</div>
				<div class="col-lg-4">
					<a href="#">
						<button type="button" style="padding:10%;" class="btn btn-primary btn-block btn-lg" data-toggle="modal" data-target="#recv-amulet">Receive Amulet</button>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="objectsBureau.php">
						<button type="button" style="padding:10%;" class="btn btn-block btn-lg btn-info">Receive Object</button>
					</a>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-4">
					<a href="#">
						<button type="button" style="padding:10%;" class="btn btn-block btn-lg btn-success" data-toggle="modal" data-src="give-lives" data-target="#amulet">Give Lives</button>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#">
						<button type="button" style="padding:10%;" class="btn btn-block btn-lg btn-primary" data-toggle="modal" data-src="give-amulet" data-target="#amulet">Give Amulet Back</button>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#">
						<button type="button" style="padding:2%;" class="btn btn-block btn-lg btn-warning" data-toggle="modal" data-src="change-team" data-target="#amulet">Change Team</button>
					</a><br>
					
					
					<a href="#">
						<button type="button" style="padding:2%;" class="btn btn-block btn-lg btn-danger"data-toggle="modal" data-src="arrest" data-target="#amulet">Arrest</button>
					</a>
				</div>
			</div>
					
			<!-- Modal Amulet -->
			<div class="modal fade" id="amulet" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Enter Amulet Number</h4>
						</div>
						<form name="amulet" role="form" method="post" action="../controller/amuletToId.php">

							<div class="modal-body">
									<div class="form-group">
										<input type="text" name="amulet" autofocus>
									</div>
									<input type="hidden" class="src" name="src" value="">
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Ok</button>
							</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>		
			<!-- Modal Receive Amulet -->
			<div class="modal fade" id="recv-amulet" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Receive Amulet</h4>
						</div>
						<form name="amulet" role="form" method="post" action="../controller/points.php">

							<div class="modal-body">
									<div class="form-group">
										<label for="amulet-found">Amulet Found</label>
										<input type="text" name="amulet" autofocus class="form-control">
									</div>
									<div class="form-group">
										<label for="foundby">Found By</label>
										<input type="text" name="id"  class="form-control">
									</div>
									<input type="hidden" class="src" name="src" value="bring-amulet">
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Ok</button>
							</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- Modal Receive Lives -->
			<div class="modal fade" id="recv-lives" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Receive Enemy Lives</h4>
						</div>
						<form name="amulet" role="form" method="post" action="../controller/points.php">

							<div class="modal-body">
							<div class="form-group">
										<label for="id">Amulet</label>
										<input type="text" name="id" autofocus class="form-control">
									</div>
									<div class="form-group">
										<label for="nbLives">Number of Lives</label>
										<input type="number" name="nbLives" class="form-control">
									</div>
									
									<input type="hidden" class="src" name="src" value="bring-lives">
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-primary">Ok</button>
							</div>
						</form>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>					
					
		</div>
			<!-- /#page-wrapper -->
	</div>
</body>
<!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
	<script>
	$('#amulet').on('show.bs.modal', function (event){
        var button = $(event.relatedTarget)
        var src = button.data('src')
		var modal = $(this)
        modal.find('.modal-body .src').val(src)
		modal.find('[autofocus]').focus();
	})
	</script>