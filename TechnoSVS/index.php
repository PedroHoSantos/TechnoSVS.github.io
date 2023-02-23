<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Techno SVS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle bg-light" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar text-light"></span>
          <span class="icon-bar bg-light"></span>
          <span class="icon-bar bg-light"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#about">Sobre Nós</a></li>
          <li><a href="#portfolio">Serviços</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="jumbotron text-center">
    <a class="logo" href="#myPage"><img class='imagemLogo' src="img/icon.png"></a>
    <p>O Futuro Começa Agora</p>
  </div>

  <div class="container-fluid bg-grey">
    <div class="row">
      <div class="col-sm-4">
        <span class="glyphicon glyphicon-globe logo slideanim"></span>
      </div>
      <div class="col-sm-8">
        <h2>Sobre Nós</h2><br>
        <h4><strong>Missão:</strong>Temos o objetivo de criar produtos e serviços voltados para a área de tecnologia, prezando sempre a qualidade de nosso Software, a segurança de nossos usuários, e as inovações atuais do mercado.</h4><br>
      </div>
    </div>
  </div>



  <!-- Container (Portfolio Section) -->
  <div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Serviços</h2><br>
    <h4>Conheça nossos produtos</h4>
    <div class="row text-center slideanim">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/ShareTasty.png" alt="Share" width="200" height="100">
          <p><strong>Share Tasty</strong></p>
          <p>Um Site de receitas</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/Coming.jpg" alt="New York" width="400" height="300">
          <p><strong>Em Breve</strong></p>
          <p>Aguarde mais novidades</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/Coming.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>Em breve</strong></p>
          <p>Aguarde mais novidades</p>
        </div>
      </div>
    </div>


    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">CONTATE-NOS</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Entre em contato conosco!</p>
          <p><span class="glyphicon glyphicon-envelope"></span> technosvs2023@gmail.com</p>
        </div>
        <div class="col-sm-7 slideanim">
          <form name="contato" action="https://formsubmit.co/technosvs2023@gmail.com" method="POST">
            <input type="hidden" name="_next" value="https://localhost/TechnoSVS">
            <input type="hidden" name="_captcha" value="false">
            <div class="row">
              <div class="col-sm-6 form-group">
                <input class="form-control" id="Nome" name="Nome" placeholder="Nome" type="text" required>
              </div>
              <div class="col-sm-6 form-group">
                <input class="form-control" id="Email" name="Email" placeholder="E-mail" type="email" required>
              </div>
            </div>
            <textarea class="form-control" id="Mensagem" name="Mensagem" placeholder="Mensagem" rows="5"></textarea><br>
            <div class="row">
              <div class="col-sm-12 form-group">
                <button class="btn btn-default pull-right" type="submit">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Image of location/map -->

    <footer class="container-fluid text-center">
      <a href="#myPage" title="Para o topo">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
    </footer>

    <script>
      $(document).ready(function() {
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function() {

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });

        $(window).scroll(function() {
          $(".slideanim").each(function() {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
          });
        });
      })
    </script>

</body>

</html>