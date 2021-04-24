<?php include_once('include/header.php') /*conecta con archibo header*/?>

<section class="vinos">
    
    <h1 class="col-sm-12 text-center titpaginasvarias">Barrica Wine</h1>

    <div class="container conten-center">
 
  
    <form action="#" method="get">
            <input class="form" type="text" name="nombre" placeholder="*Nombre" required>
            <br>
            <input class="form" type="text" name="apellido" placeholder="*Apellido" required>
            <br>
            <input class="form" type="email" name="email" placeholder="*Email" required>
            <br>
            <textarea class="form formm" name="mensaje" cols="30" rows="8" placeholder="*Dejanos tu cansulta:..."></textarea>
            <p class="conten-center cont">*Todos los campos son oblicatoros</p>
            
            <input type="image" src="img/enviar.png" alt="Enviar" width="54" height="54">
    </form> 
    
        
 </div>
</section>

<?php include_once('include/footer.php') /*conecta con archibo footer*/?>