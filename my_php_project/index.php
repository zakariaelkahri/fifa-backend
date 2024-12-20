<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Dashboard for manipulate PLAYERS
  </title>
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />



  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />

  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.2.0" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/e9ee48a8e3.js" crossorigin="anonymous"></script>
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2"
    id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>

    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="">
            <i class="material-symbols-rounded opacity-5">person</i>
            <span class="nav-link-text ms-1">ALL PLAYERS</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="./stade.php">
            <i class="material-symbols-rounded opacity-5">add</i>
            <span class="nav-link-text ms-1">ADD PLAYER</span>
          </a>
        </li>


      </ul>
    </div>

    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <div class="container-fluid py-2">

      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 ">
              <!-- <button>click</button> -->
            </div>
          </div>
          <div  class="card-body px-0 pb-2">
            <div class="table-responsive p-0">


              <table id="all_players" class="table align-items-center mb-0 ">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PHOTO</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nationalitys</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">clubs</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">POSITION</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">RATING
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>


                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "./connction.php";
                  $query = "SELECT *,all_players.id as playersid from all_players 
                    INNER JOIN nationalitys on all_players.nationality_id = nationalitys.id
                    INNER JOIN clubs on all_players.clubs_id = clubs.id";
                  $query_run = mysqli_query($conn, $query);
                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {
                      ?>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="<?= $row["photo"] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="player1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?= $row["name"] ?></h6>

                            </div>
                          </div>
                        </td>
                        <td>
                          <div>
                            <img src="<?= $row["flag"] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="player1">
                          </div>
                        </td>
                        <td>
                          <div>
                            <img src="<?= $row["logo"] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="player1">
                          </div>
                        </td>
                        <td>

                          <p class="text-xs font-weight-bold mb-0"><?= $row["position"] ?></p>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold"><?= $row["rating"] ?></span>

                        </td>
                        <td class="align-middle text-center">
                          <div id="icons">
                          <a href="./delete.php?id=<?php echo $row["playersid"] ?>"><button  id="btnn"><i class="icon fa-solid fa-trash "></i></button></a>
                          <a href=""><button  id="btnn"><i class="icon1 fa-solid fa-pen-to-square "></i></button></a> 
                          </div>
                        </td>
                      </tr>
                      <?php
                    }

                  } else {

                    ?>
                    <tr>
                      <td colspan="4"> no data to catch</td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
              <!-- <table id="nationalitys" class="table align-items-center mb-0" >
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nationalitys</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "./connction.php";
                  $query = "SELECT*FROM nationalitys ";
                  $query_run = mysqli_query($conn, $query);
                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {
                      ?>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="<?= $row["flag"] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="player1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?= $row["country"] ?></h6>

                            </div>
                          </div>
                        </td>


                        <td class="align-middle">
                          <div id="icons">
                            <a href="./delete.php?id=<?php echo $row["id"] ?>"><button  id="btnn"><i class="icon fa-solid fa-trash "></i></button></a>
                            <a href=""><button  id="btnn"><i class="icon1 fa-solid fa-pen-to-square "></i></button></a> 
                            
                          </div>
                        </td>
                      </tr>
                      <?php
                    }

                  } else {

                    ?>
                    <tr>
                      <td colspan="4"> no data to catch</td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>
              <table id="clubs" class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">clubs</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include "./connction.php";
                  $query = "SELECT*FROM clubs ";
                  $query_run = mysqli_query($conn, $query);
                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {
                      ?>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="<?= $row["logo"] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="player1">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm"><?= $row["club"] ?></h6>

                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div id="icons">
                            <button onclick="removeCard(event)" id="btnn"><i class="icon fa-solid fa-trash "></i></button>
                            <button onclick="updatCard(event)" id="btnn"><i
                                class="icon1 fa-solid fa-pen-to-square "></i></button>
                          </div>
                        </td>
                      </tr>
                      <?php
                    }

                  } else {

                    ?>
                    <tr>
                      <td colspan="4"> no data to catch</td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

          </div>
        </div>
      </div>
    </div>

    </div>
  </main>


</body>

</html>