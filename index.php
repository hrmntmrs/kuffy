<html>
<head>
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="fogliodistile.css"/>
  <script type="text/javascript" src="materialize.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
  <script language="javascript" type="text/javascript" src="Scripts/header.js"></script>
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
<script language="javascript" type="text/javascript" src="Scripts/footer.js"></script>
</body>
</html>
