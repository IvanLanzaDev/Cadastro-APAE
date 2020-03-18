
<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Default Font -->
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <!-- <div class="container-fluid d-md-none d-lg-none"> -->
      <div class="container-fluid d-block d-sm-none">
      <div class="row">
        <div class="col-6 col-md-2 mx-auto mt-3">
          <img src="imgs/logo.png" class="img-fluid">
        </div>
      </div>
      <div class="row">
        
        <div class="col-12 col-md-12 mt-3 ">
          <p class="">
            <small><strong>Parabéns!!!</strong><br><br>

Se você chegou aqui é porque tem a vontade de saber mais sobre nosso evento no dia 9 de agosto, às 20:00 horas no salão da APAE de Santo André.<br>
Agora, para confirmar sua presença, é essencial deixar seus dados para seu lugar estar reservado.<br>
Agora, é só clicar em CONFIRMAR PRESENÇA e já estará reservado.<br>
Aguardamos com alegria sua participação.<br>
Até lá!!!</small>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-3">
          <form method="post" action="#">
            <div class="form-group">
              <label class="custom-label">Nome Completo</label>
              <input type="text" name="name_presents" class="form-control custom-field">
            </div>
            <div class="form-group">
              <label class="custom-label">Nome da Escola</label>
              <input type="text" name="school_presents" class="form-control custom-field">
            </div>
            <div class="form-group">
              <label class="custom-label">Telefone</label>
              <input type="tel" name="phone_presents" class="form-control custom-field">
            </div>
            <div class="form-group">
              <label class="custom-label">Email</label>
              <input type="email" name="email_presents" class="form-control custom-field">
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg mb-3" name="btn_send">Confirmar Presença</button>
          </form>
        </div>
      </div>
    </div>
    <!-- DESKTOP -->
    <!-- <div class="container d-none d-md-block d-lg-none"> -->
    <!-- <div class="container d-xs-none"> -->
      <div class="container d-none d-md-block d-lg-block d-xl-block">
      <div class="row">
        <div class="col-md-6 text-center container-content">
          <div class="row">
            <div class="col-md-12">
              <img src="imgs/logo.png" class="col-md-6">
            </div>
          </div>
          <div class="row">

            <p class="txt-desktop"><strong>Parabéns!!!</strong><br><br>

<strong> Você chegou aqui é porque tem a vontade de saber mais sobre nosso evento no dia 9 de agosto, às 20:00 horas no salão da APAE de Santo André.<br>
Agora, para confirmar sua presença, é essencial deixar seus dados para seu lugar estar reservado.<br>
Agora, é só clicar em CONFIRMAR PRESENÇA e já estará reservado.<br>
Aguardamos com alegria sua participação.<br>
Até lá!!!</strong>
          </div>
        </div>
        <div class="col-md-6">
          <div class="container-form">
            <form method="post" action="#"">
            <div class="form-group">
              <label class="custom-label">Nome Completo</label>
              <input type="text" name="name_presents" class="form-control custom-field">
            </div>
            <div class="form-group">
              <label class="custom-label">Nome da Escola</label>
              <input type="text" name="school_presents" class="form-control custom-field">
            </div>
            <div class="form-group">
              <label class="custom-label">Telefone</label>
              
              <input type="text" name="phone_presents" class="form-control sp_celphones custom-field" id="sp_celphones">
            </div>
            <div class="form-group">
              <label class="custom-label">Email</label>
              <input type="email" name="email_presents" class="form-control custom-field">
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-lg mt-5" name="btn_send">Confirmar Presença</button>
          </form>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mask.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  </body>
</html>