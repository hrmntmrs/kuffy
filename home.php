<?php
  require_once('init.php');
?>
<html lang="it_IT" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calendario</title>
    <link rel="stylesheet" type="text/css" href="materialize.min.css">
    <link rel="stylesheet" type="text/css" href="cal.css">
    <link type="text/css" rel="stylesheet" href="fogliodistile.css"/>
    <script type="text/javascript" src="calendarScript.js"></script>
  </head>
  <body onload="initDate(); getReservations();">
    <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Logo</a>
      </div>
    </nav>
    <div class="row" class="container">
      <div class="col s4 content">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Choose your option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
          <label>Seleziona una struttura</label>
  </div>
      </div>
      <div class="col s4 content">
        <div class="calendar row" align="center">
          <div class="valign-wrapper">
            <div class="col s3 right-align">
              <p class="arrowButton" onclick="initDate('prev');"> < </p>
            </div>
            <div class="col s6">
              <p id="month">Gennaio</p>
            </div>
            <div class="col s3 left-align">
              <p class="arrowButton" onclick="initDate('next');"> > </p>
            </div>
          </div>
          <table id="calTable" class="striped" border="0">
            <tr class="dayRow">
              <th class="dayNames">Lun</th>
              <th class="dayNames">Mar</th>
              <th class="dayNames">Mer</th>
              <th class="dayNames">Gio</th>
              <th class="dayNames">Ven</th>
              <th class="dayNames">Sab</th>
              <th class="dayNames">Dom</th>
            </tr>
            <tr>
              <td id="1" class="day" onclick="selectDate(1)">1</td>
              <td id="2" class="day" onclick="selectDate(2)">2</td>
              <td id="3" class="day" onclick="selectDate(3)">3</td>
              <td id="4" class="day" onclick="selectDate(4)">4</td>
              <td id="5" class="day" onclick="selectDate(5)">5</td>
              <td id="6" class="day" onclick="selectDate(6)">6</td>
              <td id="7" class="day" onclick="selectDate(7)">7</td>
            </tr>
            <tr>
              <td id="8" class="day" onclick="selectDate(8)">8</td>
              <td id="9" class="day" onclick="selectDate(9)">9</td>
              <td id="10" class="day" onclick="selectDate(10)">10</td>
              <td id="11" class="day" onclick="selectDate(11)">11</td>
              <td id="12" class="day" onclick="selectDate(12)">12</td>
              <td id="13" class="day" onclick="selectDate(13)">13</td>
              <td id="14" class="day" onclick="selectDate(14)">14</td>
            </tr>
            <tr>
              <td id="15" class="day" onclick="selectDate(15)">15</td>
              <td id="16" class="day" onclick="selectDate(16)">16</td>
              <td id="17" class="day" onclick="selectDate(17)">17</td>
              <td id="18" class="day" onclick="selectDate(18)">18</td>
              <td id="19" class="day" onclick="selectDate(19)">19</td>
              <td id="20" class="day" onclick="selectDate(20)">20</td>
              <td id="21" class="day" onclick="selectDate(21)">21</td>
            </tr>
            <tr>
              <td id="22" class="day" onclick="selectDate(22)">22</td>
              <td id="23" class="day" onclick="selectDate(23)">23</td>
              <td id="24" class="day" onclick="selectDate(24)">24</td>
              <td id="25" class="day" onclick="selectDate(25)">25</td>
              <td id="26" class="day" onclick="selectDate(26)">26</td>
              <td id="27" class="day" onclick="selectDate(27)">27</td>
              <td id="28" class="day" onclick="selectDate(28)">28</td>
            </tr>
            <tr>
              <td id="29" class="day" onclick="selectDate(29)">29</td>
              <td id="30" class="day" onclick="selectDate(30)">30</td>
              <td id="31" class="day" onclick="selectDate(31)">31</td>
              <td id="32" class="day" onclick="selectDate(32)"></td>
              <td id="33" class="day" onclick="selectDate(33)"></td>
              <td id="34" class="day" onclick="selectDate(34)"></td>
              <td id="35" class="day" onclick="selectDate(35)"></td>
            </tr>
            <tr>
              <td id="36" class="day" onclick="selectDate(36)"></td>
              <td id="37" class="day" onclick="selectDate(37)"></td>
              <td id="38" class="day" onclick="selectDate(38)"></td>
              <td id="39" class="day" onclick="selectDate(39)"></td>
              <td id="40" class="day" onclick="selectDate(40)"></td>
              <td id="41" class="day" onclick="selectDate(41)"></td>
              <td id="42" class="day" onclick="selectDate(42)"></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col s4 content">
        <table id="resTable" class="striped" border="1">
        <thead>
          <tr id="tableTitle">
            <th colspan="5">
              Ultime prenotazioni
            </th>
          </tr>
          <div id="tHeader">
            <tr id="tHeader">
              <th>Struttura</th>
              <th>Stanza</th>
              <th>Cliente</th>
              <th>Dal</th>
              <th>Al</th>
            </tr>
          </div>
        </thead>
        <tbody id="bodyTable">
        <!--  Table will be filled by Javascript -->
        </tbody>
        </table>
      </div>
  </div>
  <footer class="page-footer" style="position:fixed;bottom:0;left:0;width:100%;" align="center">
    <div class="container">
      <h6 class="white-text" style = "position:relative; left:auto;; top:-20px;">Creato da ______ - <a class="grey-text text-lighten-3" href="#!">Versione Mobile</a></h6>
      <h7 class="grey-text text-lighten-4" style = "position:relative; left:auto;; top:-15px;">Seguici su:</h7>
      <br /><a href="#!"><img src="internet.ico" style = "position:relative; left:auto;; top:-12px;" width="28" height="28" title="Facebook" alt="Facebook"></a>
      <a href="#!"><img src="Twitter-icon.png" style = "position:relative; left:auto;; top:-10px;" width="30" height="30" title="Twitter" alt="Twitter"></a>
      <a href="#!"><img src="1491580658-yumminkysocialmedia06_83104.png" style = "position:relative; left:auto;; top:-12px;" width="27" height="27" title="Instagram" alt="Instagram"></a>
    </div>
  </footer>
  </body>
</html>