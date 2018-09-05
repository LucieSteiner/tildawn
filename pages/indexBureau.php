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
					<a href="#"><!-- TODO: add popup -->
						<button type="button" style="padding:10%;" class="btn btn-success btn-block btn-lg ">Receive Enemy Lives</button>
					</a>	
				</div>
				<div class="col-lg-4">
				    <a href="#"><!-- TODO: add popup -->
						<button type="button" style="padding:10%;" class="btn btn-primary btn-block btn-lg">Receive Amulet</button>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="objectsBureau.php">
						<button type="button" style="padding:10%;" class="btn btn-block btn-lg btn-warning">Receive Object</button>
					</a>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-4">
					<a href="#"><!-- TODO: add popup to ask for amulet then redirect to player -->
						<button type="button" style="padding:10%;" class="btn btn-block btn-lg btn-success">Give Lives</button>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#"><!-- TODO: add popup to ask for amulet then redirect to player -->
						<button type="button" style="padding:10%;" class="btn btn-block btn-lg btn-primary">Give Amulet Back</button>
					</a>
				</div>
				<div class="col-lg-4">
					<a href="#"><!-- TODO: add popup to ask for amulet then redirect to player -->
						<button type="button" style="padding:2%;" class="btn btn-block btn-lg btn-info">Change Team</button>
					</a><br>
					
					
					<a href="#"><!-- TODO: add popup to ask for amulet then redirect to player -->
						<button type="button" style="padding:2%;" class="btn btn-block btn-lg btn-danger">Arrest</button>
					</a>
				</div>
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