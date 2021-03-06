<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pixel Squared</title>

        <link id="favi" rel="icon" type="img/favicon" href="#" />

        <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/css/hover.css" rel="stylesheet" type="text/css" media="screen">
    <link href="/css/particles.css" rel="stylesheet" type="text/css" media="screen">
    <script src="/js/src/minified/TweenMax.min.js"></script>
    <link rel="stylesheet" href="/css/foundation.css" />

       {{--BODY  --}}

       <header>
      <div class="nav-bg"></div>
      <nav class="row">
          {{-- <a href="index.html"><img class="nav-logo float-left" src="images/px_light.svg" alt="Navigation Logo"></a> --}}
          <a href="index.html"><img class="nav-logo float-left" src="{{URL::asset('/img/px_light.svg')}}" alt="Navigation Logo"></a>

          <ul class="float-right">
              <li><a class="navigation" id="home" href="#">home&sup2;</a></li>
              <li><a class="navigation" id="aboutus" href="#divide">about&sup2;</a></li>
              <li><a class="navigation" id="contact" href="#cntct">contact&sup2;</a></li>
          </ul>
      </nav>
  </header>
  <section class="banner">
      <img class="banner-logo float-center" src="{{URL::asset('/img/px_banner_stephen.svg')}}" alt="banner logo">
      <div class="banner-bg" id="particles-js"></div>
  </section>

  <section class="divider" id="divide">
    <div class="weare row">
    <h1 class="column">We are Pixel&sup2;</h1>
    <p class="column">
        A young team of developers driven by innovation and progression. In our modern day media landscape, being current just isn’t enough. You need to be ahead of the curve to earn the attention of your audience. Our methods of action and proven abilities allow us
        to stay ahead of that curve, and to drive the audience and the consumer to you. No project is too big or too small for our highly skilled team of designers and developers. From e-commerce to corporate representation and everything in between,
        we can accommodate you. What makes us better than other agencies? We provide more for our clients by creating a revolutionary service that will get your competition talking. “Adequate” is not in our vocabulary–but “fantastic” is. Not only
        does Pixel&sup2; design, develop, test, and maintain for our clients but we also pride ourselves in our market research and leading industry trends. With more than 10 years of experience, we ensure that our products look and function better
        than the rest.</p>
      </div>
  </section>

  <section class="portfolio">
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
  </section>

  <section class="row">

  </section>


  <section id="swapper">
      <div class="team row">
          <div class="small-12 medium-4 large-4 column">
              <div class="team-photo">
                  {{-- <img class="hvr-float" src="images/garett.jpg"> --}}
                  <img class="hvr-float" src="{{URL::asset('/img/garett.jpg')}}">
                  <div class="team-text">
                      <h3>Garett MacLaren</h3>
                      <p>Garett is our in house researcher, stratigest, designer and front-end developer. Using his experience in public relations and content creation, Garett works hand in hand with clients during the development process to ensure that your digital dreams become reality.</p>
                  </div>
              </div>
          </div>
          <div class="small-12 medium-4 large-4 column">
              <div class="team-photo">
                  <img class="hvr-float" src="{{URL::asset('/img/stephen.jpg')}}">
                  <div class="team-text">
                      <h3>Stephen DeGroote</h3>
                      <p>Stephen is our front end developer from the future. With his intuitive eye for design and an extensive knowledge of advanced coding techniques–he has the power to breathe life into your project.</p>
                  </div>
              </div>
          </div>
          <div class="small-12 medium-4 large-4 column">
              <div class="team-photo">
                  <img class="hvr-float" src="{{URL::asset('/img/jeremy.jpg')}}">
                  <div class="team-text">
                      <h3>Jeremy Tenjo</h3>
                      <p>Jeremy is our visionary. The man with the plan and professional perfectionist. He works with our developers every step of the way ensuring our clients digital experience exceeds their expectations.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section id="cntct" class="row">
      <div id="contactcontainer" class="column">
          <form method="post">
              <label for="">Name:</label>
              <input class="small-6" name="name" type="text">
              <label for="">Company:</label>
              <input name="company" type="text">
              <label for="">Email:</label>
              <input name="email" type="text">
              <label for="">Message</label>
              <textarea name="msg" cols="30" rows="10"></textarea>
              <input class="button column" id="button" type="submit" value="Send">
          </form>
      </div>
  </section>

  <footer class="divider">
      <div class="text-center copyright">&#xa9;2017 Pixel&sup2;</div>
  </footer>

    <script src="/js/particles.js"></script>
    <script src="/js/color-object.js"></script>
    <script src="/js/nav.js"></script>
    <script src="/js/vendor/jquery.min.js"></script>
    <script src="/js/vendor/what-input.min.js"></script>
    <script src="/js/foundation.min.js"></script>
       {{--BODY END --}}


    </head>
    <body>

    </body>
</html>
