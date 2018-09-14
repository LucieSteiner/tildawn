<?php
require('../controller/grotte.php');

$topAllTeams = topPlayersAllTeams(5);

$topAsile = topPlayersByTeam(1, 5);
$topUsine = topPlayersByTeam(2, 5);
$topAbattoirs = topPlayersByTeam(3, 5);
$topCaserne = topPlayersByTeam(4, 5);
$topZombie = topPlayersByTeam(5, 5);

//TODO: carrousel (optionnel)

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
<div class="row">
    <div class="col-lg-12">
               
		<div class="alert alert-danger">
			<a href="#" class="alert-link">Titre </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		</div>
		<div class="alert alert-warning">
			<a href="#" class="alert-link">Titre </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		</div>
		<div class="alert alert-warning">
			<a href="#" class="alert-link">Titre </a>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		</div>
	</div>
                <!-- /.col-lg-12 -->
</div>
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				Top 5 Players - All Teams
			</div>
			<div class="panel-body">
				                    
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topAllTeams as $player){
							echo '<tr >';
					
							echo '<td>'.$player['firstname'].'</td>';
							echo '<td>'.$player['lastname'].'</td>';
							echo '<td>'.$player['team'].'</td>';
							echo '<td>'.$player['score'].'</td>';
							
							echo '</tr>';
						}
					?>
					
				</tbody>
			</table>
			<!-- /.table-responsive -->
            </div>   
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-green">
			<div class="panel-heading">
				Top 5 Players - Asile
			</div>
			<div class="panel-body">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topAsile as $player){
							echo '<tr >';
					
							echo '<td>'.$player['firstname'].'</td>';
							echo '<td>'.$player['lastname'].'</td>';
							echo '<td>'.$player['score'].'</td>';
							
							echo '</tr>';
						}
					?>
					
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Top 5 Players - Usine
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topUsine as $player){
							echo '<tr >';
					
							echo '<td>'.$player['firstname'].'</td>';
							echo '<td>'.$player['lastname'].'</td>';
							echo '<td>'.$player['score'].'</td>';
							
							echo '</tr>';
						}
					?>
					
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">
		<div class="panel panel-red">
			<div class="panel-heading">
				Top 5 Players - Abattoirs
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topAbattoirs as $player){
							echo '<tr >';
					
							echo '<td>'.$player['firstname'].'</td>';
							echo '<td>'.$player['lastname'].'</td>';
							echo '<td>'.$player['score'].'</td>';
							
							echo '</tr>';
						}
					?>
					
				</tbody>
			</table>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				Top 5 Players - Caserne
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topCaserne as $player){
							echo '<tr >';
					
							echo '<td>'.$player['firstname'].'</td>';
							echo '<td>'.$player['lastname'].'</td>';
							echo '<td>'.$player['score'].'</td>';
							echo '</tr>';
						}
					?>
					
				</tbody>
			</table>
		    </div>
	    </div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-grey">
			<div class="panel-heading">
				Top 5 Players - Zombie
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topZombie as $player){
							echo '<tr >';
					
							echo '<td>'.$player['firstname'].'</td>';
							echo '<td>'.$player['lastname'].'</td>';
							echo '<td>'.$player['score'].'</td>';
							
							echo '</tr>';
						}
					?>
					
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
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