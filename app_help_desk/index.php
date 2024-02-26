<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk - SGBras</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      body {
    background-color: ghostwhite;
    color: white;
  }


      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
        color: black;
      }

      .card {
    background-color: #f0f0f0; /* Fundo da caixa de login em cinza claro */
  }


      .card-header {
        color: black;
        font-weight: bold;

      }

      .forgot-password {
      text-align: center;
      margin-top: 10px;
      font-style: italic; /* Define o estilo do texto como itálico */
    }

    </style>
  </head>

  <body>

    <nav class="navbar navbar-light" style="background-color: #28a745;">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk - SGBras
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
           <div class="forgot-password">
           <a href="#">Esqueceu sua senha?</a>
        </div>
        </div>
    </div>
  </body>
</html>