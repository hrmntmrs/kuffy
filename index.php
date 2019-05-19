<html>
<head>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="fogliodistile.css"/>
  <script type="text/javascript" src="materialize.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
    </div>
  </nav>
  <div class="row">
    <div class="col s6" align="center">
      <div id="login-buttons">
        <h3>Benvenuto nel tuo gestore di Bed&Breakfast</h3>
        <br /><button class="waves-effect waves-light btn-large" onclick="loginOn();" style="width: 20%">LOGIN</button>
        <br /><br /><button class="waves-effect waves-light btn-large" onclick="location.href = 'registrazione.html'"style="width: 20%">REGISTRATI</button>
      </div>
      <br />
      <div id="login-fields">
        <h3>Effettua il log-in</h3>
        <div class="input-field col offset-s3 s6">
              <form action="checkLogin.php" method="post" id="login">
                <div class="input-field">
                  <input type="text" name="email" id="email">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="password" name="password" id="pass">
                  <label for="pass">Password</label>
                </div>
                <button type="submit" class="btn waves-effect waves-light">Login</button>
              </form>
        </div>
      </div>

    </div>
    <div class="col s5,5" align="center">
      <div id="right-text">
        <h3>Gestisci il tuo b&b ovunque ti trovi!</h3>
        <h4>Cosa puoi fare con Kuffy:</h4>
      </div>
    </div>
  </div>
<footer class="page-footer" style="position:fixed;bottom:0;left:0;width:100%;" align="center">
    <div class="container">
      <h6 class="white-text" style = "position:relative; left:auto;; top:-20px;">Creato da ______ - <a class="grey-text text-lighten-3" href="#!">Versione Mobile</a></h6>
      <h7 class="grey-text text-lighten-4" style = "position:relative; left:auto;; top:-15px;">Seguici su:</h7>
      <br /><a href="#!"><img src="Icone/internet.ico" style = "position:relative; left:auto;; top:-12px;" width="28" height="28" title="Facebook" alt="Facebook"></a>
      <a href="#!"><img src="Icone/Twitter-icon.png" style = "position:relative; left:auto;; top:-10px;" width="30" height="30" title="Twitter" alt="Twitter"></a>
      <a href="#!"><img src="Icone/1491580658-yumminkysocialmedia06_83104.png" style = "position:relative; left:auto;; top:-12px;" width="27" height="27" title="Instagram" alt="Instagram"></a>
    </div>
  </footer>
</body>
</html>
