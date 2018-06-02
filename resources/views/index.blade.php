@extends('layouts.base')

@section('content')
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="media/image/slide1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Никаких физических карт!</h1>
              <h1>Все в вашем смартфоне.</h1>
              
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="media/image/slide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left"> 
              <h1>Никаких поломок!</h1>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="media/image/slide4.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Карты не теряются!</h1>
			   <h1>Их нельзя забыть дома.</h1>
			   </div>
          </div>
        </div>
			 <div class="carousel-item" >
          <img class="third-slide" src="media/image/slide5.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption d-none d-md-block text-left">
              <h1>Выпускайте виртуальные карты!</h1>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Назад</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only" id="shops" >Вперед</span>
      </a>
    </div >
	

    <div class="container marketing">

      <div class="row" >
        <div class="col-lg-3 ">
          <img class="featurette-image" src="media/image/funtastik.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Funtastik</h2>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/mila.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Мила</h2> 
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/vitalur.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Виталюр</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/art_territjria.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Арт территория</h2>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/electrosila.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Электросила</h2> 
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/ostrov_chistoty.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Остров чистоты</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/bastion.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Рок бастион</h2>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/korona.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Корона</h2> 
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/xi_store.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Xistore</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/planeta.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Планета здоровья</h2>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/kari.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Кari</h2> 
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/green.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Green</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/evroopt.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Евроопт</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/yves_rocher.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Yves Rocher</h2>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/colins.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Colins</h2> 
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/sela.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Sela</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/perekr.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Перекресток</h2>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/oodji.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Oodji</h2> 
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/sportmasner.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Спортмастер</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/sisters.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Sisters</h2> 
        </div>
			<div class="col-lg-3">
          <img class="featurette-image" src="media/image/bigz.png" alt="Generic placeholder image" width="150" height="150">
          <h2>Bigz</h2>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/5element.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>5 элемент</h2> 
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/oz.jpg" alt="Generic placeholder image" width="150" height="150">
          <h2>Oz.by</h2> 
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/mothercare.png" alt="Generic placeholder image" width="150" height="150">
          <h2 id="best">Mothercare</h2> 
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading">Один код - все магазины!</h3>
          <p class="lead">Пользователь по своему уникальному коду имеет возможность получить скидку в любом магазине, подключенному к нашему сервису.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image" src="media/image/qr-code.gif" alt="Generic placeholder image" width="400" height="400">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h3 class="featurette-heading">Новости от магазинов!</h3>
          <p class="lead">Получайте уведомления об акциях и скидках различных магазинов.</p>
		  <p class="lead">При этом вы сами выбираете, от каких магазинов вы хотите получать уведомления.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image" src="media/image/news.png" alt="Generic placeholder image" width="400" height="400">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h3 class="featurette-heading">Удобство и мобильность!</h3>
          <p class="lead">Все ваши скидочные карты в вашем сматрфоне. Больше никаких сломанных и забытых карт.</p>
		  <p class="lead">Удобный интерфейс позволяет людям всех возрастов пользоваться приложением без особых усилий.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image" src="media/image/stopka.jpg" alt="Generic placeholder image" width="400" height="400">
        </div>
      </div>
	  
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h3 class="featurette-heading">Возможность выпускать виртуальные карты!</h3>
          <p class="lead">Приложение позволяет за которкое время создавать новые виртуальные карты по вашему дизайну.</p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="featurette-image" src="media/image/stokard.png" alt="Generic placeholder image" width="400" height="400">
        </div>
      </div>

      <hr class="featurette-divider">
	  
	   <div class="container marketing">

      <div class="row" id="aboutUs">
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/tema.jpg" alt="Generic placeholder image" width="170" height="170">
          <h4>Гилевич</h4>
		  <h4>Артем</h4>
          <h5 style="text-align: center">Backend разработчик</h5>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/ira.jpg" alt="Generic placeholder image" width="170" height="170">
          <h4>Разумович</h4>
		  <h4>Ирина</h4>
          <h5 style="text-align: center">Дизайнер</h5>
        </div>
        <div class="col-lg-3">
          <img class="featurette-image" src="media/image/ivan.jpg" alt="Generic placeholder image" width="170" height="170">
          <h4>Иванкин</h4>
		  <h4>Иван</h4>
          <h5 style="text-align: center">Дизайнер</h5>
        </div>
		<div class="col-lg-3">
          <img class="featurette-image" src="media/image/sahsa.jpg" alt="Generic placeholder image" width="170" height="170">
          <h4>Боровиков</h4>
		  <h4>Александр</h4>
          <h5 style="text-align: center">Frontend разработчик</h5>
        </div>
      </div>
@endsection
