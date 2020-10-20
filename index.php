<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="manifest" href="manifest.json">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="materialize_0_100_2/css/materialize.css"/>
	<!-- <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"/> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Condoágil Comunicação Condominial</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!--<script type="text/javascript" src="materialize-v1.0.0/js/materialize.min.js"></script>-->
<script src="materialize_0_100_2/js/materialize.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> -->


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.6.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
 https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
	  // Your web app's Firebase configuration
	  var firebaseConfig = {
		apiKey: "AIzaSyBA6WX0MSW-BZz78FNwwx1-X8uNV5cYMbc",
		authDomain: "condoagil2019.firebaseapp.com",
		databaseURL: "https://condoagil2019.firebaseio.com",
		projectId: "condoagil2019",
		storageBucket: "",
		messagingSenderId: "439076319483",
		appId: "1:439076319483:web:3f8c1b24afd5360738805e"
	  };

	  // Initialize Firebase
	 firebase.initializeApp(firebaseConfig);

	  firebase.auth().currentUser.getIdToken(true).then(function(idToken) {
		  window.alert("Tokennnnnnnnn");
  // Send token to your backend via HTTPS
  // ...
}).catch(function(error) {
	window.alert(error);
  // Handle error
});

	  // Retrieve Firebase Messaging object.
	  const messaging = firebase.messaging();

</script>

<!--<img class="responsive-img no-margin" src="cais1.jpg">-->
<?php
	include "menu.php";
////////////////////////////////////////////////////////
	include "./models/fcm.php";
	//Chave do Servidor para o envio de Push Notificação
$chaveServidor = 'AAAAZjr88Ps:APA91bG-QDMHGKjMET2iU9LFRoIaZESOU6A2Xn_YpCDebJ8V7XewfT2lbD3_Ook3DwfV-a4q2CF2Q3EgP4WPtv9zDczeHsO-9X6lF_3KPK5ceIE7Pw2RfHkIlWaUAkZcL2cUaJqswoFU';

$tokenDispositivo = '';

//Classe para o envio
$fcm = new FCM($chaveServidor);

try {
    $resultado = $fcm->setTitulo('Título - Dispositívo')
                        ->setTexto('Textoo - Dispositívo')
                        ->enviarPara($tokenDispositivo);

    echo "Enviado com sucesso.";
    echo $resultado;
    
} catch(Exception $e) {
	echo "Erro: " . $e->getMessage();
}
/////////////////////////////////////////////////////////////////////////////

?>

<script>
    $(function(){
        $(".button-collapse").sideNav();
    });
</script>
	

<script>

if ('serviceWorker' in navigator && 'PushManager' in window) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('service-worker.js').then(function(registration) {
      // Registration was successful
     // window.alert('ServiceWorker registrado com escopo: ' + registration.scope);
    }, function(err) {
      // registration failed :(
      window.alert('Erro no registro do ServiceWorker: ' + err);
    });
  });
} else window.alert("O navegador não suport Service Worker.");
</script>

<?php
  include "rodape.php";
?>
	
</body>
</html>