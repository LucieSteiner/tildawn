<!DOCTYPE html>
<?php
require("../controller/bureau.php");
$playerInfo = getPlayer($_GET['id']);
$player = $playerInfo[0];
$teams = getTeams();
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>'tildawn - Players</title>

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
                        <h1 class="page-header">Player information</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				
	        <div class="row">
					<div class="col-lg-3">
						<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#arrest"> Get Arrested </button>
					</div>
					<div class="col-lg-3">
						<button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#team"> Change Team </button>
					</div>
					<div class="col-lg-3">
						<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#lives"> Buy Lives</button>	
					</div>
					<div class="col-lg-3">
						<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#amulet"> Get Amulet Back</button>
					</div>
			</div>
			<br>
            <div class="row">
			    
                <div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Personal Data
						</div>
						<div class="panel-body">
						    <table width="100%" class="table table-striped table-bordered table-hover">
                                
                                <tbody>
								    <tr>
									    <th> Amulet </th>
										<td> <?php echo $player['amulet']; ?> </td>
									</tr>
									<tr>
									    <th> First name </th>
										<td> <?php echo $player['firstname']; ?> </td>
									</tr>
									<tr>
									    <th> Last name </th>
										<td> <?php echo $player['lastname']; ?> </td>
									</tr>
									<tr>
									    <th> Gender </th>
										<td> <?php echo $player['gender']; ?> </td>
									</tr>
									<tr>
									    <th> Group </th>
										<td> <?php echo $player['group']; ?> </td>
									</tr>
								 
                                </tbody>
                            </table>
						</div>
					</div>
                </div>
				<div class="col-lg-6">
				    <div class="panel panel-default">
						<div class="panel-heading">
							Statistics
						</div>
						<div class="panel-body">
						    <table width="100%" class="table table-striped table-bordered table-hover">
                                
                                <tbody>
								    <tr>
									    <th> Current Team </th>
										<td> <?php echo $player['team']; ?> </td>
									</tr>
									<tr>
									    <th> Current Score </th>
										<td> <?php $specialPlayerScore =  getPlayerScoreWithSpecial($player); echo $specialPlayerScore;?> </td>
									</tr>
									<tr>
									    <th> Current Weighted Score </th>
										<td> <?php echo calculateWeightedScore($specialPlayerScore, getTeamScoreWithSpecial($teams[$player['teamId']-1]); ?> </td>
									</tr>
									<tr>
									    <th> # of Deaths </th>
										<td> <?php echo $player['nbDeaths']; ?> </td>
									</tr>
									<tr>
									    <th> # of Kills </th>
										<td> <?php echo $player['nbKills']; ?> </td>
									</tr>
									<tr>
									    <th> # of Lives Bought </th>
										<td> <?php echo $player['nbOwnLivesTaken']; ?> </td>
									</tr>
									<tr>
									    <th> # of Enemy Lives Won </th>
										<td> <?php echo $player['nbEnemyLivesGiven']; ?> </td>
									</tr>
									<tr>
									    <th> # of Times Arrested </th>
										<td> <?php echo $player['nbTimesArrested']; ?> </td>
									</tr>
									<tr>
									    <th> # of Cheaters Caught </th>
										<td> <?php echo $player['nbCheatersCaught']; ?> </td>
									</tr>
								 
                                </tbody>
                            </table>
						
						</div>
					</div>
				</div>
			</div>
			<!-- Modal buy-lives -->
			<div class="modal fade" id="lives" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Buy Lives</h4>
						</div>
						<form name="lives" role="form" method="post" action="../controller/points.php">

							<div class="modal-body">
									<div class="form-group">
										<label for="nbLives">Number of Lives</label>
										<input type="number" name="nbLives" autofocus class="form-control">
									</div>
									<input type="hidden" name="id" value="<?php echo $player['id']; ?>">
									<input type="hidden" name="src" value="buy-lives">
								
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
			<!-- Modal get-arrested -->
			<div class="modal fade" id="arrest" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Get arrested</h4>
						</div>
						<form name="lives" role="form" method="post" action="../controller/points.php">

							<div class="modal-body">
									<div class="form-group">
										<label for="winner">Arrested By</label>
										<input type="text" name="id2" autofocus class="form-control">
									</div>
									<input type="hidden" name="id" value="<?php echo $player['id']; ?>">
									<input type="hidden" name="src" value="get-arrested">
								
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
			<!-- Modal get-amulet -->
			<div class="modal fade" id="amulet" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Get Amulet Back</h4>
						</div>
						<form name="lives" role="form" method="post" action="../controller/points.php">

							<div class="modal-body">
									<p> Click Ok to continue.
									<input type="hidden" name="id" value="<?php echo $player['id']; ?>">
									<input type="hidden" name="src" value="get-amulet">
								
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
			<!-- Modal change-team -->
			<div class="modal fade" id="team" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Change Team</h4>
						</div>
						<form name="lives" role="form" method="post" action="../controller/points.php">

							<div class="modal-body">
									<div class="form-group">
										<label for="winner">Transformed By</label>
										<input type="text" name="id2" autofocus class="form-control">
									</div>
									<input type="hidden" name="id" value="<?php echo $player['id']; ?>">
									<input type="hidden" name="src" value="change-team">
								
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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
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
			order: [[2, 'asc']]
        });
    });
    </script>
	<script>
    $(window).on('load',function(){
		<?php if(isset($_GET['src'])){
			if($_GET['src'] == 'give-lives'){?>
				 $('#lives').modal('show');
			<?php
			} 
			else if($_GET['src'] == 'arrest'){?>
				$('#arrest').modal('show');
			<?php
			}
			else if($_GET['src'] == 'give-amulet'){?>
				$('#amulet').modal('show');
			<?php
			}
			else if($_GET['src'] == 'change-team'){?>
				$('#team').modal('show');
			<?php
			}
		}?>
       
    });
	</script>

</body>

</html>
