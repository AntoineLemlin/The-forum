<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/style.css">
  <title>Tracker</title>
</head><?php

  require_once("../App/Controller/check_session.php");
  require_once("../App/Controller/login_control.php");
  require_once("../App/Controller/register.php");
 ?>
<body class="bg-light">
    <header id="header-id">
      <div
        class=""
        style="
          background: center/cover
            url('https://cdn.pixabay.com/photo/2016/07/29/19/19/railway-1555348_960_720.jpg');
        "
      >
        <div class="container-fluid p-5 text-center">
          <nav class="navbar navbar-expand-md navbar-light">
            <div
              class="
                navbar-collapse
                collapse
                w-100
                order-1 order-md-0
                dual-collapse2
              "
            >
            </div>
            <div class="mx-auto order-0">
              <button
                class="navbar-toggler bg-light"
                type="button"
                data-toggle="collapse"
                data-target=".dual-collapse2"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
              <ul class="navbar-nav ml-auto">
              <?php include("../App/View/header_display.php");?>
              <li class="nav-item"><?php require_once("../App/View/logout_message.php");?></li>
            </ul>
          </div>
        </nav>
        <h1 id="title" class="display-4">Tracker</h1>
      </div>
    </div>
    </header>

<main class="mx-5">


  <div class="container-fluid" id="main-container">
  <div class="container-fluid" id="breadcrumb">
  <nav class="" aria-label="breadcrumb">
    <ol class="breadcrumb bread-style align-text-bottom">
      <li class="breadcrumb-item bread-item">
        <a href="#" class="text-decoration-none text-dark"
          ><i class="fas fa-home"></i>Home</a
        >
      </li>
      <li class="breadcrumb-item bread-item active" aria-current="page">
        Board index
      </li>
    </ol>
  </nav>
      </div>
      <div class="row">
        <div class="col-md-9 col-sm col-lg-9">
          <h1 class="mx-5">Topic Icon Demos</h1>
          <div class="container-fluid p-5">
            <div class="row">
              <div id="forum-rules" class="col-12 border-left border-danger p-3">
                <h4 class="text-danger">Forum rules</h4>
              </div>
            </div>
            <div class="row">
    <div class="col-12">
      <h2 class="text-center mt-5 bg-info rounded border border-dark p-3 text-white">New Topic</h2>
    <form method="POST" id="add-topic">
      <div class="form-group">
        <label class="h3" for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title" required>
      </div>
      <div class="form-group">
        <label class="h3" for="content">Content</label>
        <textarea type="text" name="content" class="form-control" id="content" placeholder="Content" required></textarea>
      </div>
      <div class="form-check">
      <label class="h3 mr-5" for="pet-select">Choose a board:</label>
        <select class="form-select h3" aria-label=".form-select-lg example" name="board-name" id="board-name" required>
            <option value="">--Please choose a Board--</option>
            <?php require("../App/View/display_select_board.php");?>
        </select>  
    </div>
      <button id="submit" type="submit" name="add-topic" class="btn btn-primary mt-5 w-25 h2">Submit</button>
    </form>
    </div>
        

    </div>
  
            <div class="row">
              <div class="col-12 mt-5 d-flex">
                <a id="return-board" class="h4 mr-5 text-dark p-3" href="topics.php">&lt; Return to Board Index</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-lg-3 px-5">
          <?php include("../App/View/reduced_profile.php"); ?>
          <!-- Search Bar -->
          <form id="search-bar" class="form-inline flex-nowrap">
          <input class="form-control w-100" type="search"
          placeholder="Search" aria-label="Search">
          <button class="btn btn-
          info" type="submit"><i class="fas fa-search"></i>
        </button>
        <button class="btn btn-
          info" type="submit"><i class="fas fa-cog"></i>
        </button>
          </form> 
          <hr>
          <?php include("../App/View/form_display.php") ?>
          <div class="table-responsive mt-5">
            <table id="table-side" class="table">
              <thead class="thead">
                <tr>
                  <th scope="col" class="h3">Last posts</th>
                </tr>
              </thead>
              <tbody class="bg-light d-flex justify-content-center">
                <tr>
                  <td class="card m-4" style="width: 100%;">
                    <div>
                      <div class="card-body">
                        <div class="title d-flex align-items-center">
                          <h5 class="card-title">Post - Category</h5>
                          <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                        </div>
                        <p class="card-text">Writing your own post here. It gets displayed here.</p>
                        <p class="card-text">Tags: test, work, eat, repeat</p>
                      </div>
                    </div>
                  </td>
                  <td class="card m-4" style="width: 100%;">
                    <div>
                      <div class="card-body">
                        <div class="title d-flex align-items-center">
                          <h5 class="card-title">Post - Category</h5>
                          <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                        </div>
                        <p class="card-text">Writing your own post here. It gets displayed here.</p>
                        <p class="card-text">Tags: test, work, eat, repeat</p>
                      </div>
                    </div>
                  </td>
                  <td class="card m-4" style="width: 100%;">
                    <div>
                      <div class="card-body">
                        <div class="title d-flex align-items-center">
                          <h5 class="card-title">Post - Category</h5>
                          <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                        </div>
                        <p class="card-text">Writing your own post here. It gets displayed here.</p>
                        <p class="card-text">Tags: test, work, eat, repeat</p>
                      </div>
                    </div>
                  </td>
                  <td class="card m-4" style="width: 100%;">
                    <div>
                      <div class="card-body">
                        <div class="title d-flex align-items-center">
                          <h5 class="card-title">Post - Category</h5>
                          <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                        </div>
                        <p class="card-text">Writing your own post here. It gets displayed here.</p>
                        <p class="card-text">Tags: test, work, eat, repeat</p>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="table-responsive mt-5">
            <table id="table-side" class="table">
              <thead class="thead">
                <tr>
                  <th scope="col" class="h3">Last active user</th>
                </tr>
              </thead>
              <tbody class="bg-light">
                <tr class="d-flex justify-content-center flex-wrap">
                  <td id="last-active-card" class="card my-3 mx-1">
                    <div class="card-body d-flex flex-column">
                      <img src="https://cdn-icons-png.flaticon.com/512/147/147140.png" class="rounded-circle mb-1" alt="147140">
                      <h5 class="card-title text-center">#Ricky2103</h5>
                      <p class="card-text text-center">Here to help!</p>
                    </div>
                  </td>
                  <td id="last-active-card" class="card my-3 mx-1">
                    <div class="card-body d-flex justify-content-center flex-column">
                      <img src="https://cdn-icons-png.flaticon.com/512/147/147140.png" class="rounded-circle mb-1" alt="147140">
                      <h5 class="card-title text-center">#Ricky2103</h5>
                      <p class="card-text text-center">Here to help!</p>
                    </div>
                  </td>
                  <td id="last-active-card" class="card my-3 mx-1">
                    <div class="card-body d-flex justify-content-center flex-column">
                      <img src="https://cdn-icons-png.flaticon.com/512/147/147140.png" class="rounded-circle mb-1" alt="147140">
                      <h5 class="card-title text-center">#Ricky2103</h5>
                      <p class="card-text text-center">Here to help!</p>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="table-responsive mt-5">
            <table id="widget-side" class="table">
              <thead class="thead bg-dark text-white">
                <tr>
                  <th scope="col" class="h3">Blank Widget (ALT block)</th>
                </tr>
              </thead>
              <tbody class="bg-light">
                <tr class="d-flex justify-content-center flex-wrap">
                  <td id="last-active-card" class="bg-white w-75 my-3">
                    <h2>Some information goes here :)</h2>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer>
  <div class="container-fluid" id="social-media">
        <ul class="d-flex justify-content-center py-5 flex-wrap">
            <li class="p-3 mr-4"><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-facebook-f text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-apple text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-youtube text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-github text-white"></i></a></li>
        <li class="p-3 mr-4"><a href="#"><i class="fab fa-whatsapp text-white"></i></a></li>
       </ul>
    </div>
    <div class="container-fluid bg-dark my-n3">
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
          <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb bread-foot bg-dark align-text-bottom justify-content-xs-center">
              <li class="breadcrumb-item bread-foot__item">
                <a href="#" class="text-decoration-none">Home</a>
              </li>
              <li class="breadcrumb-item bread-foot__item" aria-current="page">Board index</li>
            </ol>
          </nav>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
          <ul class="list-bottom d-flex justify-content-end align-items-center mt-2 flex-wrap justify-content-xs-center">
            <li class="mr-3">
              <a href="#" class="text-nowrap">Contact us</a>
            </li>
            <li class="mr-3">
              <a href="#" class="text-nowrap">The team</a>
            </li>
            <li class="mr-3">
              <a href="#" class="text-nowrap">Terms</a>
            </li>
            <li class="mr-3">
              <a href="#" class="text-nowrap">Privacy</a>
            </li>
            <li class="mr-3">
              <a href="#" class="text-nowrap">Members</a>
            </li>
            <li class="mr-3">
              <a href="#" class="text-nowrap">Delete cookies</a>
            </li>
            <li class="">
              <a href="#" class="text-nowrap list-dark">All times are UTC</a>
            </li>
          </ul><a id="btn-back-to-top" class="btn btn-floating btn-lg" href="#header-id"></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>