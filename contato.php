<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="manifest" href="manifest.json">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"/> -->
	<link type="text/css" rel="stylesheet" href="materialize_0_100_2/css/materialize.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Condoágil - Contato</title>
</head>
<body>  
 
<?php
  include "menu.php";
?>
          
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->
    <script src="materialize_0_100_2/js/materialize.js"></script>
    <script>
    $(function(){
        $(".button-collapse").sideNav();
    });
    </script>
	
  <div id="divContainerFormContato" class="container center" style="max-width:600px;">
  <img class="responsive-img" src="images/icons/icon-152x152.png">
  <h4>Contato</h5>
    <form class="col m6 offset-m3 s12 z-depth-2 padtop10">
	<input name="recipient" value="everaldodearaujo@gmail.com" type="hidden">
      <div class="row">
        <div class="input-field col s12">
		  <i class="material-icons prefix">account_box</i>
          <input id="name" type="text" class="validate" required>
          <label for="name">Nome</label>
        </div>
      </div>
	  
      <div class="row">
        <div class="input-field col s12">
		  <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate" required>
          <label for="email">E-mail</label>
        </div>
      </div>
      <div class="row">	  
	  <div class="input-field col s12">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telefone</label>
        </div>
	  </div>
	     
      <div class="row">
        <div class="input-field col s12">
		<i class="material-icons prefix">edit</i>
          <textarea id="textarea1" class="materialize-textarea" required></textarea>
          <label for="textarea1">Mensagem</label>
        </div>
      </div>
   	  		<button class="btn waves-effect waves-light" type="submit" name="action">Enviar
			<i class="material-icons right">send</i>			
		</button><br><br>
    </form>
  </div>
  
<?php
  include "rodape.php";
?>     
   
	
</body>
</html>