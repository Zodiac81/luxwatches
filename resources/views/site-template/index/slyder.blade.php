<!-- слайдер -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel"data-interval="3000">
  <!-- Указатели -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Контент слайда (slider wrap)-->
  <div class="carousel-inner" >
    <div class="item active">
      <img class ="img_width" src="{{asset('assets/images/bnr-1.jpg')}}" alt="banner1">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img class ="img_width" src="{{asset('assets/images/bnr-2.jpg')}}" alt="banner2">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img class ="img_width" src="{{asset('assets/images/bnr-3.jpg')}}" alt="banner3">
      <div class="carousel-caption">
        <h3>Выбор редакции</h3>
      </div>
    </div>
    
  </div>
  <!-- Элементы управления -->
  <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a> -->
</div>

<!-- /слайдер -->

<!--about-starts-->
  <div class="about"> 
    <div class="container">
      <div class="about-top grid-1">
        <div class="col-md-4 about-left">
          <figure class="effect-bubba">
            <img class="img-responsive" src="{{asset('assets/images/abt-1.jpg')}}" alt=""/>
            <figcaption>
              <h2>Nulla maximus nunc</h2>
              <p>In sit amet sapien eros Integer dolore magna aliqua</p>  
            </figcaption>     
          </figure>
        </div>
        <div class="col-md-4 about-left">
          <figure class="effect-bubba">
            <img class="img-responsive" src="{{asset('assets/images/abt-2.jpg')}}" alt=""/>
            <figcaption>
              <h4>Mauris erat augue</h4>
              <p>In sit amet sapien eros Integer dolore magna aliqua</p>  
            </figcaption>     
          </figure>
        </div>
        <div class="col-md-4 about-left">
          <figure class="effect-bubba">
            <img class="img-responsive" src="{{asset('assets/images/abt-3.jpg')}}" alt=""/>
            <figcaption>
              <h4>Cras elit mauris</h4>
              <p>In sit amet sapien eros Integer dolore magna aliqua</p>  
            </figcaption>     
          </figure>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--about-end-->