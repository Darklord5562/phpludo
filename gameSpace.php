<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
  <title>Game</title>
  <!-- <meta http-equiv="refresh" content="30" /> -->
  <link rel="stylesheet" href="css/all.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/fontawesome.css" type="text/css" media="all" />
  <link rel="stylesheet" href="css/dice.css" type="text/css" media="all" />
</head>

<body>
  <div class="app">
    <div class="board-container" id="game">
      <div class="player-card">
        <div class="player-profile">
          <div class="player-avtar"><img src="imgs/avtar.png" alt="" class="avtar"></div>
          <div class="playername">3794673248</div>
        </div>
        <div id="notice"></div>
        <div class="player-profile">
          <div class="player-avtar"><img src="imgs/avtar.png" alt="" class="avtar"></div>
          <div class="playername">3794673248</div>
        </div>
      </div>
      <div class="board">
        <div class="home-box bg-red">
          <div class="piece-container">
            <div class="piece-home bg-red"><img id="r4" class=" piece rpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-red"><img id="r3" class="piece rpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-red"><img id="r2" class="piece rpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-red"><img id="r1" class="piece rpiece" src="piece.svg" alt=""></div>
          </div>
        </div>
        <div class="path-zone-r1">
          <div class="path-box astep" id="box1"></div>
          <div class="path-box astep" id="box2"><i class="fa green fa-arrow-down star"></i></div>
          <div class="path-box astep" id="box3"></div>
          <div class="path-box astep" id="box4"></div>
          <div class="path-box astep bg-green" id="box5"></div>
          <div class="path-box astep bg-green" id="box6"> <i class="fa star fa-star"></i></div>
          <div class="path-box bg-red astep" id="box7"> <i class="fa star fa-star"></i>
          </div>
          <div class="path-box astep bg-green" id="box8"></div>
          <div class="path-box astep" id="box9"></div>
          <div class="path-box astep" id="box10"></div>
          <div class="path-box astep bg-green" id="box11"></div>
          <div class="path-box astep" id="box12"></div>
          <div class="path-box astep" id="box13"></div>
          <div class="path-box astep bg-green" id="box14"></div>
          <div class="path-box astep" id="box15"></div>
          <div class="path-box astep" id="box16"></div>
          <div class="path-box astep bg-green" id="box17"></div>
          <div class="path-box astep" id="box18"></div>
        </div>
        <div class="home-box bg-green">
          <div class="piece-container">
            <div class="piece-home bg-green"><img id="g4" class="piece gpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-green"><img id="g3" class="piece gpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-green"><img id="g2" class="piece gpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-green"><img id="g1" class="piece gpiece" src="piece.svg" alt=""></div>
          </div>
        </div>
        <div class="path-zone-r2">
          <div class="path-box astep" id="box19"></div>
          <div class="path-box astep bg-red" id="box20"><i class="fa fa-star star"></i></div>
          <div class="path-box astep" id="box21"></div>
          <div class="path-box astep" id="box22"></div>
          <div class="path-box astep" id="box23"></div>
          <div class="path-box astep" id="box24"></div>
          <div class="path-box astep" id="box25"><i class="fa fa-arrow-right star red"></i></div>
          <div class="path-box astep bg-red" id="box26"></div>
          <div class="path-box astep bg-red" id="box27"></div>
          <div class="path-box astep bg-red" id="box28"></div>
          <div class="path-box astep bg-red" id="box29"></div>
          <div class="path-box astep bg-red" id="box30"></div>
          <div class="path-box astep" id="box31"></div>
          <div class="path-box astep" id="box32"></div>
          <div class="path-box bg-blue astep" id="box33"><i class="star fa fa-star"></i></div>
          <div class="path-box astep" id="box34"></div>
          <div class="path-box astep" id="box35"></div>
          <div class="path-box astep" id="box36"></div>
        </div>
        <div class="center"></div>
        <div class="path-zone-r2">
          <div class="path-box astep" id="box37"></div>
          <div class="path-box astep" id="box38"></div>
          <div class="path-box astep" id="box39"></div>
          <div class="path-box bg-green astep" id="box40"><i class="fa fa-star star"></i></div>
          <div class="path-box astep" id="box41"></div>
          <div class="path-box astep" id="box42"></div>
          <div class="path-box astep bg-yellow" id="box43"></div>
          <div class="path-box astep bg-yellow" id="box44"></div>
          <div class="path-box astep bg-yellow" id="box45"></div>
          <div class="path-box astep bg-yellow" id="box46"></div>
          <div class="path-box astep bg-yellow" id="box47"></div>
          <div class="path-box astep" id="box48"> <i class="fa fa-arrow-left yellow star"></i>
          </div>
          <div class="path-box astep" id="box49">
          </div>
          <div class="path-box astep" id="box50"></div>
          <div class="path-box astep" id="box51"></div>
          <div class="path-box astep" id="box52"></div>
          <div class="path-box astep bg-yellow" id="box53"><i class="star fa fa-star"></i></div>
          <div class="path-box astep" id="box54"></div>
        </div>
        <!--   
  </div>
  <div class="row3">
     -->
        <div class="home-box bg-blue">
          <div class="piece-container">
            <div class="piece-home bg-blue"><img id="b4" class="piece bpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-blue"><img id="b3" class="piece bpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-blue"><img id="b2" class="piece bpiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-blue"><img id="b1" class="piece bpiece" src="piece.svg" alt=""></div>
          </div>
        </div>
        <div class="path-zone-r1">
          <div class="path-box astep" id="box55"></div>
          <div class="path-box astep bg-blue" id="box56"></div>
          <div class="path-box astep" id="box57"></div>
          <div class="path-box astep" id="box58"></div>
          <div class="path-box astep bg-blue" id="box59"></div>
          <div class="path-box astep" id="box60"></div>
          <div class="path-box astep" id="box61"></div>
          <div class="path-box astep bg-blue" id="box62"></div>
          <div class="path-box astep" id="box63"></div>
          <div class="path-box astep" id="box64"></div>
          <div class="path-box astep bg-blue" id="box65"></div>
          <div class="path-box bg-yellow  astep" id="box66"><i class="star fa fa-star"></i></div>
          <div class="path-box astep bg-blue" id="box67"><i class="fa fa-star star"></i></div>
          <div class="path-box astep bg-blue" id="box68"></div>
          <div class="path-box astep" id="box69"></div>
          <div class="path-box astep" id="box70"></div>
          <div class="path-box blue astep" id="box71"><i class="fa fa-arrow-up star blue"></i></div>
          <div class="path-box astep" id="box72"></div>
        </div>
        <div class="home-box bg-yellow">
          <div class="piece-container">
            <div class="piece-home bg-yellow"><img id="b4" class="piece ypiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-yellow"><img id="b3" class="piece ypiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-yellow"><img id="b2" class="piece ypiece" src="piece.svg" alt=""></div>
            <div class="piece-home bg-yellow"><img id="b1" class="piece ypiece" src="piece.svg" alt=""></div>
          </div>
        </div>
      </div>
      <div class="player-card">
        <div class="player-profile">
          <div class="player-avtar"><img src="imgs/avtar.png" alt="" class="avtar"></div>
          <div class="playername">3794673248</div>
        </div>
        <div class="player-profile">
          <div class="player-avtar"><img src="imgs/avtar.png" alt="" class="avtar"></div>
          <div class="playername">3794673248</div>
        </div>
      </div>
      <div class="dice-box">
        <div id="dice" class="dice">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>
    </div>
  </div>
  <style>
  </style>
  <script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/dice.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>