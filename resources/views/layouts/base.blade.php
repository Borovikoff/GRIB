<!doctype html>
<html lang="en">
  
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content>
    <meta name="author" content>

    <title>Сервис GRIB</title>

   
    <link href="{{asset('media/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('media/carousel.css')}}" rel="stylesheet">
  </head>
  <body>

    <nav id="menu" class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<img src="media/image/logo.png" class="logo" />
      <a class="navbar-brand" href="grib">GRIB</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
		 <li class="nav-item">
            <a class="nav-link" href="#shops">Магазины</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#best">Преимущества</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="#aboutUs">О нас</a>
          </li>
        </ul>
      </div>
    </nav>
@yield("content")
      <footer>
        <p class="float-right"><a href="#">Наверх</a></p>
        <p style="margin-top: 150px">&copy; 2018 GRIB</p>
      </footer>

    </div>
    <script src="media/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="media/js/popper00.js"></script>
    <script src="media/js/bootstrap.js"></script>
    <script src="media/js/holder00.js"></script>
    <script src="media/js/ie10-vie.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script type="text/javascript"> 
	$(document).ready(function(){ 
		$("#menu").on("click","a", function (event) { 
			event.preventDefault(); 
			var id = $(this).attr('href'), 
				top = $(id).offset().top; 
			$('body,html').animate({scrollTop: top}, 1500); 
		}); 
	}); 
	</script>
  </body>
</html>