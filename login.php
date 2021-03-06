<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">    
    <title>Conta</title>        
    <style>
        .tabs .indicator{
            background-color: #0d47a1;
        }
        body{
            align-items: center;
            
        }
      </style>
  </head>    
    <body>
<?php
	include "menu.php";
?>	
<div class="row container padtop80" style="min-height:100vh">
				<div class="col m6 offset-m3 s12">
					<div class="row">
						<div class="col s12">
							<ul class="tabs">
								<li class="tab col s3"><a href="#test1" class="active blue-text text-darken-4">Login</a></li>
							   <!-- <li class="tab col s3"><a href="#test2" class="blue-text text-darken-4">Register</a></li> -->
							</ul>
						</div>
					</div>
				</div>
   
                <div id="test1" class="col s12 padtop40">                    
                    <div class="col m6 offset-m3 s12 z-depth-1 padtop10" >
                        <div class="lid">
                <div class="input-field col s12 remx">
                  <input placeholder=" " id="first_name" type="text" class="validate">
                  <label for="first_name">Informe seu e-mail ou CPF</label>
                </div>
                <div class="input-field col s12 remx">
                  <input placeholder=" " id="password1" type="password" class="validate">
                  <label for="password1">Senha</label>
                </div>
                <p class="padleft10 remx">
                  <input type="checkbox" id="test5" />
                  <label for="test5">Remember Me</label>
                </p>
                <p class="padleft10 remx" >
                    <a href="#" class="blue darken-4 btn">Login</a>
                    <a href="#" class="blue-text text-darken-4" id="hider">&nbsp; Esqueceu a senha? Clique aqui.</a>
                </p>
                        </div>
                        <div class="hid">
                            <div class="input-field col s12 ">
                              <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                              <label for="first_name">Enter Email</label>
                            </div>
                            <div class="padleft10">
                                <a href="#" class="blue darken-4 btn">Submit</a>
                                <a href="#" class="grey btn" id="cancll">Cancel</a>
                            </div>
                        </div>
                       <!-- <div class="center">
                        <div class="preloader-wrapper active center">                
                            <div class="spinner-layer spinner-red-only">
                              <div class="circle-clipper left">
                                <div class="circle"></div>
                              </div><div class="gap-patch">
                                <div class="circle"></div>
                              </div><div class="circle-clipper right">
                                <div class="circle"></div>
                              </div>
                            </div>
                        </div>
                        </div> -->
            </div>
                    
                </div>
<!--    <div id="test2" class="col s12 padtop40">
                <div class="col m6 offset-m3 s12 z-depth-1 padtop10">
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name">Email ID* </label>
                </div>
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name"> Name* </label>
                </div>          
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                  <label for="first_name">Mobile* </label>
                </div>      
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="password1" type="password" class="validate">
                  <label for="password1">Password*</label>
                </div>
                <div class="input-field col s12 ">
                  <input placeholder="Placeholder" id="password1" type="password" class="validate">
                  <label for="password1">Confirm Password*</label>
                </div>
                
                 
                <p class="padleft10">
                  <input type="checkbox" id="test6" />
                    <label for="test6">I agree to the <a href-="#" class="blue-text text-darken-4">'EULA'</a> and <a href-="#" class="blue-text text-darken-4">'Privacy Policy'</a>.</label>
                </p>
                <p class="padleft10">
                    <a href="#" class="blue darken-4 btn">Register</a>                    
                </p>
            </div>
                
    </div> -->
</div>      
        

        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js">
        </script>
        <script>
    	   $( document ).ready(function(){
    	       $(".button-collapse").sideNav();
               $(".dropdown-button").dropdown();
    	       $('select').material_select(); 
               $('.slider').slider({full_width: true});
                   $(".button-collapse").sideNav();
           })
        </script>
        <script>
            $(document).ready(function(){
                $(".hid").hide();
                $("#hider").click(function(){
                    $(".remx").hide();
                    $(".hid").show();
                }); 
                $("#cancll").click(function(){
                    $(".remx").show();
                    $(".hid").hide();
                })
            });
        </script>
    </body>
</html>