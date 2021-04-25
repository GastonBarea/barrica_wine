<!DOCTYPE html>
<html lang="es">
<head>
   
    <meta charset="UTF-8">
   

   <meta name="keywords" content="barrica, wine, vino, tinto, blanco, varietal, rosado, cabernet sauvignon, malbec, merlot, tempranillo">
   <meta name="description" content="Barrica Wine donde encontrmos vinos con gran bariedad y calidad para su comercializacion. Eventos de cata de vino y cursos">
   <meta name="author" content="Gaston Alan Barea">
   
   <link rel="short icon" type="imagen/pmg" href="img/nosotros.png">
 
     <title>BarricaWine</title>
    

    <!--Bootstrap libreria-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <!--mi css-->
    <link rel="stylesheet" href="css/estilo.css">
    <!--Google Fonts y Icons https://fonts.google.com/icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

     
</head>

<body>
  
    <header>  

        <?php include_once('user.php')?>

        <nav class="navbar navbar-expand-lg">
        
            <div class="container-fluid barranprincipal">
            
                <a href="index.php"><img src="img/bwmin.png" alt="logo" width="59" height="50"></a>
            
                <button class="navbar-toggler hamburger hamburger--spin" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="hamburger-box"><span class="hamburger-inner"></span></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    
                
                    <ul class="navbar-nav ml-auto">   
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">
                            <span class="material-icons">home</span>Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="vinos.php">
                            <span class="material-icons">wine_bar</span>Nuestros Vinos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">
                            <span class="material-icons">apartment</span>Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eventos.php">
                            <span class="material-icons">event</span>Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">
                            <span class="material-icons">contact_page</span>Contacto</a>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>

       
    </header> 