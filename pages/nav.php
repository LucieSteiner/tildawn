<?php
if(session_status() == PHP_SESSION_NONE){
	session_start();
}
?>

<html>
<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">'tildawn</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.php?role=azure"><i class="fa fa-user fa-fw"></i> AZURE</a>
                        </li>
                        <li><a href="index.php?role=grotte"><i class="fa fa-user fa-fw"></i> Grotte</a>
                        </li>
                        <li><a href="index.php?role=bureau"><i class="fa fa-user fa-fw"></i> Bureau</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <?php if($_SESSION['role'] == "azure"){  ?>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="../pages/players.php"><i class="fa fa-user fa-fw"></i> Players</a>
                           
                        </li>
                        <li>
                            <a href="../pages/teams.php"><i class="fa fa-sitemap fa-fw"></i> Teams</a>
                        </li>
                        <li>
                            <a href="../pages/causes.php"><i class="fa fa-edit fa-fw"></i> Causes</a>
                        </li>
                        <li>
                            <a href="../pages/objects.php"><i class="fa fa-wrench fa-fw"></i> Objects</span></a>
                        </li>
                        <li>
                            <a href="../pages/messages.php"><i class="fa fa-envelope fa-fw"></i> Messages</span></a>  
                        </li>
                        <li>
                            <a href="../pages/alerts.php"><i class="fa fa-bell fa-fw"></i> Alerts</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
			<?php
			;}
			else if($_SESSION['role'] == 'bureau'){
				?>
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="../pages/playersBureau.php"><i class="fa fa-user fa-fw"></i> Players</a>
                        </li>
                        <li>
                            <a href="../pages/objectsBureau.php"><i class="fa fa-wrench fa-fw"></i> Objects</span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->	
	    	<?php		
			;}
			?>
        </nav>
</html>