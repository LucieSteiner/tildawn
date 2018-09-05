<!DOCTYPE html>
<?php

$players = array (
    array(1,'ABCDE', 'John', 'Doe', 'Usine', 141),
	array(2,'JD38R', 'Harry', 'Potter', 'Asile', 567),
	array(3,'DH38J', 'Megan', 'Fox', 'Asile', 23456789),
	array(4,'NJ3H7', 'Nicolas', 'Rey', 'Abattoirs', 0),
	array(5, 'APOE8', 'Dark', 'Vador', 'Caserne', 2000),
	array(6,'NCE92', 'René', 'Rentsch', 'Zombie', 100),
	array(7,'BD378', 'Donald', 'Trump', 'Asile', 3004),
	array(8,'DN388', 'Baden', 'Powell', 'Zombie', 42),
	array(9,'3DJ31', 'John', 'Smith', 'Caserne', 788),
	array(10,'QWERT', 'Prince', 'Charmant', 'Abattoirs', 1000),
	array(11,'ND3U0', 'Johnny', 'Depp', 'Usine', 5000),
	array(12,'CNA92', 'Fée', 'Clochette', 'Asile', 18219),
	array(13,'DFGHJ', 'Peter', 'Pan', 'Zombie', 1212),
	array(14,'TZUET', 'Capitaine', 'Crochet', ' Caserne', 10293),
	array(15,'GED73', 'Schtroumpf', 'Costaud', 'Abattoirs', 10),
	array(16,'2EJ23', 'Castor', 'Baraqué', 'Usine', 1029),
	array(17,'EO231', 'Ta', 'Mère', 'Zombie', 20000),
	array(18,'XNEU1', 'Kylo', 'Ren', 'Caserne', 2049),
	array(19,'R3U9F', 'Frodon', 'Sacquet', 'Asile', 5000),
	array(20,'POS12', 'Darlene', 'Alderson', 'Zombie', 100000),
	array(21,'E3Z71', 'Bobby', 'Bobby', 'Abattoirs', 1927),
	array(22,'JE319', 'Père', 'Noël', 'Usine', 100),
	array(23,'DH382', 'Napoléon', 'Bonaparte', 'Zombie', 600),
	array(24,'2WD32', 'Mère', 'Grand', 'Caserne', 700),
	array(25,'DJ310', 'Mister', 'Darcy', 'Abattoirs', 2500),
	array(26,'DHA23', 'Elisabeth', 'Bennett', 'Usine', 6000),
	array(27,'00000', 'Alice', 'Alice', 'Zombie', 1500),
	array(28,'11111', 'Bob', 'Bob', 'Asile', 200)
); 

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
                        <h1 class="page-header">Players</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
				
				
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Amulet</th>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th>Team</th>
                                    </tr>
                                </thead>
                                <tbody>
								    <?php 
									    foreach ($players as $player){
										    echo '<tr>';
                                            echo '<td><a href="infoPlayer.php?id='.$player[0].'">'.$player[1].'</a></td>';
                               				echo '<td>'.$player[2].'</td>';
                                            echo '<td>'.$player[3].'</td>';
                                            echo '<td>'.$player[4].'</td>';
                   			                echo '</tr>';
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

</body>

</html>
