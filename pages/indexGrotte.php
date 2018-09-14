<?php
require('../controller/grotte.php');
$teamScores = topTeams();
$topAllTeams = topPlayersAllTeams(10);

$topAsile = topPlayersByTeam(1, 10);
$topUsine = topPlayersByTeam(2, 10);
$topAbattoirs = topPlayersByTeam(3, 10);
$topCaserne = topPlayersByTeam(4, 10);
$topZombie = topPlayersByTeam(5, 10);

$messages = getActiveMessages();
$alerts = getActiveAlerts();


?>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>'tildawn</title>
    <!-- Carousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 100%;
        margin: auto;
    }
  </style>
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
<body style="background-color:#444;">
<?php require("nav.php");?>
<div id="wrapper">
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
	  <?php if(count($alerts) == 0){?>
	  <div class="item active">
		<h1 style="color: #f8f8f8"> Bienvenue à la salle de contrôle ! </h1>
		<br><br>
		<?php 
		    foreach($messages as $message){
				?>
				<div class="alert alert-warning">
				<a href="#" class="alert-link"><?php echo $message['title'];?></a><br><?php echo $message['text'];?>
				</div>
				<?php
			}
		
		?>
		
	  </div>
	  <div class="item">
        <div class="panel panel-default">
			<div class="panel-heading">
				Team Scoreboard
			</div>
			<div class="panel-body">
				                    
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
				
				<tbody>
					<?php 
						foreach ($teamScores as $team){
							echo '<tr >';
					
							echo '<td>'.$team['id'].'</td>';
							echo '<td>'.$team['score'].'</td>';
							echo '</tr>';
						}
					?>
					
				</tbody>
			</table>
            </div>   
		</div>
      </div>
      <div class="item">
        <div class="panel panel-default">
			<div class="panel-heading">
				Top 10 Players - All Teams
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
            </div>   
		</div>
      </div>

      <div class="item">
        <div class="panel panel-green">
			<div class="panel-heading">
				Top 10 Players - Asile
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
    
      <div class="item">
        <div class="panel panel-primary">
			<div class="panel-heading">
				Top 10 Players - Usine
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

      <div class="item">
        <div class="panel panel-red">
			<div class="panel-heading">
				Top 10 Players - Abattoirs
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
	  <div class="item">
	    <div class="panel panel-yellow">
			<div class="panel-heading">
				Top 10 Players - Caserne
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
		<div class="item">
		    <div class="panel panel-grey">
				<div class="panel-heading">
				Top 10 Players - Zombie
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
	  <?php
	  }else{
		  echo '<div class="item active">';
		  foreach($alerts as $alert){
				?>
				<div class="alert alert-danger">
				<h2 href="#" class="alert-link"><?php echo $alert['title'];?></h2><h3><?php echo $alert['text'];?></h3>
				</div>
				<?php
			};?>
		</div>
		  <?php
	  };?>


  </div>
</div>
</div>
</div>
</body>

 

<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel({interval: 10000});
});
</script>

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
</html>