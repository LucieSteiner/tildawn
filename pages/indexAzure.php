<?php
require("../controller/azure.php");
//getBestTeamScore()
//getBestPlayerScore()
//getNbActiveAlerts()
//getNbActiveMessages()
//getNbFoundObjects()
//getNbCauses()
//getNbPlayersByTeam()
$nbPlayersByTeam = getNbPlayersByTeam();
//getTeamScoreOverTime -> a voir plus tard


?>
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
		<div class="col-lg-2 col-md-3">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-bell fa-3x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo getBestTeamScore(); ?></div>
								<div>Meilleure team</div>
							</div>
						</div>
					</div>
					<a href="teams.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-sitemap fa-3x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo getBestPlayerScore(); ?></div>
								<div>Meilleur joueur</div>
							</div>
						</div>
					</div>
					<a href="players.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="panel panel-red">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-bell fa-4x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo getNbActiveAlerts(); ?></div>
								<div>Alerts</div>
							</div>
						</div>
					</div>
					<a href="alerts.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="panel panel-yellow">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-envelope fa-4x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo getNbActiveMessages(); ?></div>
								<div>Messages</div>
							</div>
						</div>
					</div>
					<a href="messages.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-wrench fa-4x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo getNbFoundObjects(); ?></div>
								<div>Objects Found</div>
							</div>
						</div>
					</div>
					<a href="objects.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-edit fa-4x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge"><?php echo getNbCauses(); ?></div>
								<div>Causes</div>
							</div>
						</div>
					</div>
					<a href="causes.php">
						<div class="panel-footer">
							<span class="pull-left">View Details</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
							<div class="clearfix"></div>
						</div>
					</a>
				</div>
			</div>
		
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-bar-chart-o fa-fw"></i> Team Scores Over Time
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="line-chart"></div>
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->
			</div>
			<div class="col-lg-4">				
				<div class="panel panel-default">
					<div class="panel-heading">
						<i class="fa fa-bar-chart-o fa-fw"></i> Number of Players by Team
					</div>
					<div class="panel-body">
						<div id="donut-chart"></div>
					</div>
					<!-- /.panel-body -->
				</div>
			   
			</div>
			<!-- /.col-lg-4 -->
		</div>
		<!-- /.row -->
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
	
	$(document).ready(function() {
        Morris.Donut({
			element: 'donut-chart',
			data: [
				{label: "Caserne", value: <?php echo $nbPlayersByTeam["Caserne"];?>, color: "#d9534f"},
				{label: "Usine", value: <?php echo $nbPlayersByTeam["Usine"];?>, color: "#f0ad4e"},
				{label: "Zombie", value: <?php echo $nbPlayersByTeam["Zombie"];?>, color: "#a8b4bd"},
				{label: "Abattoirs", value: <?php echo $nbPlayersByTeam["Abattoirs"];?>, color: "#5cb85c"},
				{label: "Asile", value: <?php echo $nbPlayersByTeam["Asile"];?>, color: "#337ab7"}
			],
			resize: true,
			redraw: true
        });
	
		Morris.Line({
			element: 'line-chart',
			data: [
			    { y: '2018-09-15 18:00', a: 0, b: 0, c: 0, d: 0, e: 0 },
				{ y: '2018-09-15 19:00', a: 100, b: 0, c: 50, d: 20, e: 100 },
				{ y: '2018-09-15 20:00', a: 200, b: 200, c: 70, d: 40, e: 400 },
				{ y: '2018-09-15 21:00', a: 300, b: 200, c: 130, d: 80, e: 700 },
				{ y: '2018-09-15 22:00', a: 400, b: 200, c: 250, d: 160, e: 400 },
				{ y: '2018-09-15 23:00', a: 200, b: 200, c: 261, d: 320, e: 400 },
				{ y: '2018-09-16 00:00', a: 220, b: 700, c: 430, d: 640, e: 600 },
				{ y: '2018-09-16 01:00', a: 210, b: 700, c: 620, d: 1280, e: 600 },
				{ y: '2018-09-16 02:00', a: 470, b: 500, c: 892, d: 800, e: 600 }
			],
			xkey: 'y',
			ykeys: ['a', 'b', 'c', 'd', 'e'],
			labels: ['Caserne', 'Usine', 'Zombie', 'Abattoirs', 'Asile'],
			lineColors: ['#d9534f','#f0ad4e', '#a8b4bd', '#5cb85c', '#337ab7'],
			lineWidth: '3px',
			resize: true,
			redraw: true
			
		});
    });
    </script>
</html>