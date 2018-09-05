<?php

$topAllTeams = array(
    array("Dark", "Vador", "Usine", 12537),
	array("Jon", "Snow", "Zombie", 9872),
	array("Michael", "Jackson", "Zombie", 8800),
	array("Super", "Mario", "Caserne", 6500),
	array("Bob", "Leponge", "Asile", 3200)
);

$topEachTeam = array(
    array(
	    array("Peter", "Pan", 2700),
	    array("Bat", "Man", 2150),
	    array("Johnny", "Depp", 1230),
	    array("Maya", "Labeille", 520),
	    array("Frodon", "Sacquet", 472) 
    ),
	array(
	    array("Bob", "Leponge", 3200),
	    array("Fifi", "Brindacier", 2800),
	    array("Fée", "Clochette", 2510),
	    array("Maitre", "Yoda", 1970),
	    array("Fred", "Astaire", 1500)
	),
	array(
	    array("Super", "Mario", 6500),
	    array("René", "Rentsch", 3100),
	    array("Albus", "Dumbledore", 2900),
	    array("Brad", "Pitt", 2100),
	    array("Twilight", "Sparkle", 1800)
	),
	array(
	    array("Dark", "Vador", 12537),
	    array("Rainbow", "Dash", 3170),
	    array("Daenerys", "Targaryen", 2910),
	    array("Mister", "Darcy", 1600),
	    array("Gollum", "Gollum", 1400)
	),
	array(
	    array("Jon", "Snow", 9872),
	    array("Michael", "Jackson", 8800),
	    array("Pinkie", "Pie", 3000),
	    array("Ta", "Mère", 1300),
	    array("Vladimir", "Poutine", 750)
	)
);

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
					
							echo '<td>'.$player[0].'</td>';
							echo '<td>'.$player[1].'</td>';
							echo '<td>'.$player[2].'</td>';
							echo '<td>'.$player[3].'</td>';
							
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
				Top 5 Players - Abattoirs
			</div>
			<div class="panel-body">
			<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topEachTeam[0] as $player){
							echo '<tr >';
					
							echo '<td>'.$player[0].'</td>';
							echo '<td>'.$player[1].'</td>';
							echo '<td>'.$player[2].'</td>';
							
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
				Top 5 Players - Asile
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topEachTeam[1] as $player){
							echo '<tr >';
					
							echo '<td>'.$player[0].'</td>';
							echo '<td>'.$player[1].'</td>';
							echo '<td>'.$player[2].'</td>';
							
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
				Top 5 Players - Caserne
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topEachTeam[2] as $player){
							echo '<tr >';
					
							echo '<td>'.$player[0].'</td>';
							echo '<td>'.$player[1].'</td>';
							echo '<td>'.$player[2].'</td>';
							
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
				Top 5 Players - Usine
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topEachTeam[3] as $player){
							echo '<tr >';
					
							echo '<td>'.$player[0].'</td>';
							echo '<td>'.$player[1].'</td>';
							echo '<td>'.$player[2].'</td>';
							
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
				Top 5 Players - Zombies
			</div>
			<div class="panel-body">
			    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($topEachTeam[4] as $player){
							echo '<tr >';
					
							echo '<td>'.$player[0].'</td>';
							echo '<td>'.$player[1].'</td>';
							echo '<td>'.$player[2].'</td>';
							
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