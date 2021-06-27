<?php 
$seccion = 'Contacto';
include_once('config/config.php');
include_once(DIR_BASE.'include/header.php');
include_once(DIR_BASE.'business/contactBusiness.php');

	if(!empty($_POST['email'])){
		//var_dump($_POST);
		sendMail($_POST);
	}


?>
<section class="vinos">
    
    <h1 class="col-sm-12 text-center titpaginasvarias">Barrica Wine</h1>

    <div class="container conten-center">
 
  
    <form action="" method="post">
           <input class="form" type="text" name="name" placeholder="*Nombre" required>
            <br>
            <input class="form" type="text" name="surname" placeholder="*Apellido" required>
            <br>
            <input class="form" type="email" name="email" placeholder="*Email" required>
            <br>
            <br>
            <input class="form" type="text" name="tel" placeholder="*Teléfono">
            <br>
            <textarea class="form formm" name="message" cols="30" rows="8" placeholder="*Dejanos tu consulta:..."></textarea>
            <p class="conten-center cont">*Todos los campos son oblicatoros</p>


            <input class="btn btn-success" type="submit" name="submitCom" value="Enviar">
    </form> 

        
 </div>
</section>

<?php 


include_once(DIR_BASE.'include/footer.php')?>