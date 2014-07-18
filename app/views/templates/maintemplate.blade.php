<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>LC Construye</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

     	{{ HTML::style('css/bootstrap.css') }}
     	{{ HTML::style('css/main.css') }}

       
       
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

      <header>
      	<section class="slidermain">
      		<div class="row">
      			<div class="col-md-3">
      				<img src="{{ asset('img/lclogo.png') }}" class="logo">
      			</div>
      			<div class="col-md-9">
      				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="{{ asset('img/ing.jpg') }}" alt="...">					     
					    </div>
					    <div class="item">
					      <img src="{{ asset('img/ing.jpg') }}" alt="...">					     
					    </div>
					    <div class="item">
					      <img src="{{ asset('img/ing.jpg') }}" alt="...">					     
					    </div>
					    <div class="item">
					      <img src="{{ asset('img/ing.jpg') }}" alt="...">					     
					    </div>
					    <div class="item">
					      <img src="{{ asset('img/ing.jpg') }}" alt="...">					     
					    </div>					   
					  </div>					 
					</div>
      			</div>
      		</div>
      		<!--end slider -->

      		<!--menu -->
      		<nav class="menumain navbar navbar-default" role="navigation">
      			<div class="container-fluid">
	      		 	<!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>			      
				    </div>
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      			<ul class="nav navbar-nav" style="width:100%">
		      				<li class="activemenu"><a href="{{ URL::to('/') }}">Inicio</a></li>
		      				<li><a href="">LC Construyen</a></li>
		      				<li><a href="">Documentacion</a></li>
		      				<li><a href="">Proyectos</a></li>
		      				<li><a href="">Equipos</a></li>
		      				<li><a href="">Contactenos</a></li>
		      			</ul>
		      		</div>
		      	</div>		
      		</nav>
      		<!--end menu -->
      	</section>
      </header>
      <!--informacion -->
      <section style="margin-top:-21px;" class="infomain">
      	<div class="row">
      		<div class="col-md-3 infoderecha">
      			<article class="info">
      				<div class="infoimg">
      					<img src="{{ asset('img/Babilonia.jpg') }}">      					
      				</div>
      				<div class="infocenter">
      					<img src="{{ asset('img/casco.png') }}"> 
      					<h2><a href="{{ URL::to('garantia') }}">Politicas De Garantia</a></h2> 	
      				</div>      				    				
      			</article>
      			<article class="info">
      				<div class="infoimg">
      					<img src="{{ asset('img/Babilonia.jpg') }}">      					
      				</div>
      				<div class="infocenter">
      					<img src="{{ asset('img/archivo.png') }}"> 
      					<h2><a href="">Archivos</a></h2> 	
      				</div>      				    				
      			</article>   
      			<article class="info">
      				<div class="infoimg">
      					<img src="{{ asset('img/Babilonia.jpg') }}">      					
      				</div>
      				<div class="infocenter">
      					<img src="{{ asset('img/manos.png') }}"> 
      					<h2><a href="">Rerefencias Comerciales</a></h2> 	
      				</div>      				    				
      			</article>   
      			<article class="info">
      				<div class="infoimg">
      					<img src="{{ asset('img/Babilonia.jpg') }}">      					
      				</div>
      				<div class="infocenter">
      					<img src="{{ asset('img/facebook.png') }}"> 
      					<h2><a href="">Resdes Sociales</a></h2> 	
      				</div>      				    				
      			</article>         			 
      		</div>
      		<div class="col-md-9">
      			@yield('contenido')
      		</div>
      	</div>
      </section>
      <!--end  informacion -->


       
       	{{ HTML::script('js/vendor/jquery-1.10.2.min.js') }}        
      	{{ HTML::script('js/main.js') }}
      	{{ HTML::script('js/plugins.js') }}

      	{{ HTML::script('js/bootstrap.min.js') }}
      	{{ HTML::script('js/vendor/modernizr-2.6.2.min.js') }}
       
       
    </body>
</html>