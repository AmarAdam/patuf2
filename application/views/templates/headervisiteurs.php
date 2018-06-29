<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PATUF</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url().'/assets/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'/assets/css/simple-sidebar.css';?>" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              
                </li>
                <li>
                    <a href="<?php echo site_url()?>/">Accueil</a>
                </li>
                <li>
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listuser">Liste des Joueurs</a>
                </li>
                
                <li>
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listteam">Liste des Equipes</a>
                </li>
            
                <li>
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listfield">Liste des Terrains</a>
                </li>
                
                <li>
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listtype">Liste des Types d'Equipe</a>
                </li>
                
                <li>
                    <a href="<?php echo site_url()?>/VisiteursCtrl/listmatch">Liste des Matchs</a>
                </li>
                <li>
                    <a href="<?php echo base_url()?>/ContactCtrl/contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
      
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url().'/assets/vendor/jquery/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js';?>"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
