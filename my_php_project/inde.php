<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/assets/css/style.css" />
    <title>FIFA25</title>
  </head>
  <script
    src="https://kit.fontawesome.com/e9ee48a8e3.js"
    crossorigin="anonymous"
  ></script>
  <body class="hero">
    <div  class="top">
      <h1 class="fifaheader">EA FC 25 Tactics & Formations</h1>
      <h3 class="fifaheader-two">Build Custom Tactics & Formations</h3>
    </div>

    <?php

    include('db.php');
    ?>

    <div class="section">
      <div class="formation">
        <h1 style="color: white; background-color: rgba(0, 0, 0, 0.546); width: fit-content; border-radius: 10px; padding: 2%; ">FORMATION : 4-3-3 (classic)</h1 >
        <img
          class="img-formation"
          src="./src/assets/img/formation.png"
          alt="formation"
        />
        <div class="player-card LW" id="LW">
        </div>
        <div class="player-card RW" id="RW">
        </div>
        <div class="player-card ST" id="ST">
        </div>
        <div class="player-card CDM" id="CDM">
        </div>
        <div class="player-card CM1" id="CM1">
        </div>
        <div class="player-card CM2" id="CM2">
        </div>
        <div class="player-card CB1" id="CB1">
        </div>
        <div class="player-card CB2" id="CB2">
        </div>
        <div class="player-card RB" id="RB">
        </div>
        <div class="player-card LB" id="LB">
        </div>
        <div class="player-card GK" id="GK">
        </div>
      </div>
      <div class="formular">
        <form id="playerinfo">
          <h2 class="cardheader">Add Player Card</h2>

          <div class="input">
            <label for="name">name :</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="input">
            <label for="image ">image :</label>
            <input type="text" name="image" id="image" />
          </div>

          <div class="input">
            <select name="position" class="position" id="position">
              
              <option value="CB1">CB1</option>
              <option value="CB2">CB2</option>
              <option value="RB">RB</option>
              <option value="LB">LB</option>
              <option value="CDM">CDM</option>
              <option value="CM1">CM1</option>
              <option value="CM2">CM2</option>
              <option value="RW">RW</option>
              <option value="ST">ST</option>
              <option value="LW">LW</option>
              <option  value="GK">GK</option>
            </select>
          </div>

          <div class="input">
            <label for="flag">flag :</label>
            <input type="text" name="flag" id="flags" />
          </div>

          <div class="input">
            <label for="logo">logo :</label>
            <input type="text" name="logo" id="logo" />
          </div>

          <div class="player-inputs">
            <div class="input">
              <label for="rating">rating :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="rating"
                id="ratings"
              />
            </div>

            <div class="input">
              <label for="pace">pace :</label>
              <input min="10" max="99" type="number" name="pace" id="pace" />
            </div>

            <div class="input">
              <label for="shooting">shooting :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="shooting"
                id="shooting"
              />
            </div>

            <div class="input">
              <label for="passing">passing :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="passing"
                id="passing"
              />
            </div>

            <div class="input">
              <label for="dribbling">dribbling :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="dribbling"
                id="dribbling"
              />
            </div>

            <div class="input">
              <label for="defending">defending :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="defending"
                id="defending"
              />
            </div>

            <div class="input">
              <label for="physical">physical :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="physical"
                id="physical"
              />
            </div>
          </div>
          <div class="gk-inputs">
            <div class="input">
              <label for="rating2">rating :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="rating2"
                id="rating2"
              />
            </div>

            <div class="input">
              <label for="diving">diving :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="diving"
                id="diving"
              />
            </div>

            <div class="input">
              <label for="handling">handling :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="handling"
                id="handling"
              />
            </div>

            <div class="input">
              <label for="kicking">kicking :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="kicking"
                id="kicking"
              />
            </div>

            <div class="input">
              <label for="reflexes">reflexes :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="reflexes"
                id="reflexes"
              />
            </div>

            <div class="input">
              <label for="speed">speed :</label>
              <input min="10" max="99" type="number" name="speed" id="speed" />
            </div>

            <div class="input">
              <label for="positioning">positioning :</label>
              <input
                min="10"
                max="99"
                type="number"
                name="positioning"
                id="positioning"
              />
            </div>
          </div>

          <button type="button" class="add" id="add">Add player</button>
        </form>
      </div>

      <div id="bensh"></div>
    </div>

    <script src="./src/assets/js/main.js"></script>
  </body>
  
</html>
