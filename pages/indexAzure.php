<?php
require("../controller/azure.php");
error_reporting(E_ALL ^ E_NOTICE); 
//getBestTeamScore()
//getBestPlayerScore()
//getNbActiveAlerts()
//getNbActiveMessages()
//getNbFoundObjects()
//getNbCauses()
//getNbPlayersByTeam()
$nbPlayersByTeam = getNbPlayersByTeam();
$specialTeam = getAllTeamSpecial();
$teams = getAllTeams();
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
						<i class="fa fa-bar-chart-o fa-fw"></i> Team Scores 
					</div>
					<!-- /.panel-heading -->
					<div class="panel-body">
						<div id="bar-chart"></div>
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
				{label: "Caserne", value: <?php echo $nbPlayersByTeam[3]['nb'];?>, color: "#337ab7"},
				{label: "Usine", value: <?php echo $nbPlayersByTeam[1]['nb'];?>, color: "#f0ad4e"},
				{label: "Zombie", value: <?php echo $nbPlayersByTeam[4]['nb'];?>, color: "#a8b4bd"},
				{label: "Abattoirs", value: <?php echo $nbPlayersByTeam[2]['nb'];?>, color: "#5cb85c"},
				{label: "Asile", value: <?php echo $nbPlayersByTeam[0]['nb'];?>, color: "#d9534f"}
			],
			resize: true,
			redraw: true
        });
		Morris.Bar({
			element: 'bar-chart',
			data: [
			  { y: '', 
			  a: <?php echo $specialTeam[3]['total'] + $teams[3]['score'];?>, 
			  b: <?php echo $specialTeam[1]['total'] + $teams[1]['score'];?>, 
			  c: <?php echo $specialTeam[4]['total'] + $teams[4]['score'];?>, 
			  d: <?php echo $specialTeam[2]['total'] + $teams[2]['score'];?>, 
			  e: <?php echo $specialTeam[0]['total'] + $teams[0]['score'];?>, }
			],
			xkey: 'y',
			ykeys: ['a', 'b', 'c', 'd', 'e'],
			labels: ['Caserne', 'Usine', 'Zombie', 'Abattoirs', 'Asile'],
			barColors: ['#337ab7','#f0ad4e', '#a8b4bd', '#5cb85c', '#d9534f'],
			resize: true,
			redraw: true,
			hideHover: true
		  });

		
    });
    </script>
</html>