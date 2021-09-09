<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
    crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Tracker</title>
  </head>
   
  <?php

  require_once("../App/Controller/check_session.php");
  require_once("../App/Controller/login_control.php");
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
                <li class="nav-item">
                  <a class="nav-link text-white" href="#"><i class="fas fa-pen-square"></i>Register</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="#"><i class="fas fa-sign-in-alt"></i>Login</a>
                </li>
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
                  Board index / Category One / Topic Icon Demos
                </li>
              </ol>
            </nav>
          </div>
            <div class="row">
              <div class="col-md-9 col-sm col-lg-9 ">
                <h1 class="mx-5">Topic Icon Demos</h1>
<div class="container-fluid p-5">
  <div class="row">
      <div id="forum-rules" class="col-12 border-left  border-danger p-3"><h4 class="text-danger">Forum rules</h4></div>
  </div>
  <div class="row">
      <div  class="col-12 d-flex align-items-center justify-content-start m-4">
          <a id="new-topic" class="h4 mr-5 text-white bg-primary p-3" href="#">New Topic <i class="fas fa-pencil-alt ml-2 h4"></i></a>
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
      </div>
  </div>

  <div id="announcement" class="row table-responsive">
      <table class="table">
          <thead>
              <tr>
                  <td class="h3">Announcements</td>
                  <td class="h3"></td>
                  <td class="h3"><i class="fas fa-comments"></i></td>
                  <td class="h3"><i class="fas fa-eye"></i></td>
                  <td class="h3"><i class="fas fa-clock"></i></td>
              </tr>
          </thead>
          <tbody class="bg-light">
              <tr class="">
                  <td class="d-flex h2 align-items-center">
                    <i class="fas fa-bullhorn mr-5 p-3 border rounded-circle"></i>
                    <div class="text flex-column">
                        <h4>This is a global announcement!</h3>
                        <h5>by Carla > in Unread Forum</h4>
                    </div>
                      
                  </td>

                  <td class=" h4">
                    <i class="fas fa-bullhorn"></i>  
                  </td>

                  <td class="m-3">
                    <h4 class="text-muted">203</h4>
                  </td>

                  <td class="m-3">
                    <h4 class="text-muted">5078</h4>
                  </td>

                  <td class="d-flex h4 flex-column">
                        <h4>by Carla <i class="fas fa-external-link-square-alt ml-3"></i></h4>
                        <h5>Sun Oct 09, 2016 5:58 pm</h4>
                      
                  </td>
              </tr>
          </tbody>

      </table>
  </div>

  <div id="topics" class="row table-responsive mt-5">
    <table class="table">
        <thead>
            <tr>
                <td class="h3">Topics</td>
                <td class="h3"></td>
                <td class="h3"><i class="fas fa-comments"></i></td>
                <td class="h3"><i class="fas fa-eye"></i></td>
                <td class="h3"><i class="fas fa-clock"></i></td>
            </tr>
        </thead>
        <tbody class="bg-light">
            <tr class="">
                <td class="d-flex h2 align-items-center">
                  <i class="fas fa-check mr-5 p-3 text-success border border-success rounded-circle"></i>
                  <div class="text flex-column">
                      <h4>Topics Unread (Mine)</h3>
                      <h5>by PlanetStyles</h4>
                  </div>
                    
                </td>

                <td class=" h4">
             
                </td>

                <td class="m-3">
                  <h4 class="text-muted">716</h4>
                </td>

                <td class="m-3">
                  <h4 class="text-muted">1951</h4>
                </td>

                <td class="d-flex h4 flex-column">
                      <h4>by PlanetStyles <i class="fas fa-external-link-square-alt ml-3"></i></h4>
                      <h5>Sun Oct 09, 2016 6:27 pm</h4>
                    
                </td>
            </tr>
            <tr class="">
                <td class="d-flex h2 align-items-center">
                  <i class="fas fa-times border-danger text-danger mr-5 p-3 border rounded-circle"></i>
                  <div class="text flex-column">
                      <h4>Topics Unread (Mine)</h3>
                      <h5>by PlanetStyles</h4>
                  </div>
                    
                </td>

                <td class=" h4">
                    <i class="fas fa-lock"></i>
                </td>

                <td class="m-3">
                  <h4 class="text-muted">716</h4>
                </td>

                <td class="m-3">
                  <h4 class="text-muted">1951</h4>
                </td>

                <td class="d-flex h4 flex-column">
                      <h4>by PlanetStyles <i class="fas fa-external-link-square-alt ml-3"></i></h4>
                      <h5>Sun Oct 09, 2016 6:27 pm</h4>
                    
                </td>
            </tr>
        </tbody>

    </table>
</div>
    <div class="row">
        <div class="col-12 mt-5 d-flex">
            <a id="new-topic" class="h4 mr-5 text-white bg-primary p-3" href="#">New Topic <i class="fas fa-pencil-alt ml-2 h4"></i></a>
            <a id="topic-filter" class="h4 mr-5 text-dark rounded border border-dark bg-light p-3" href="#"><i class="fas fa-filter h4"></i></a>
            <ul class="d-flex align-items-center h3 ml-auto">
                <li class="list-unstyled">12 topics</li>
                <li class="ml-5">Page 1 of 1</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mt-5 d-flex">
            <a id="return-board" class="h4 mr-5 text-dark p-3" href="#"> < Return to Board Index</a>
            <a id="jump-to" class="h4 mr-5 text-dark bg-light p-3 ml-auto" href="#"> Jump to ^</a>
        </div>
    </div>
</div>

</div>
              
              <div class="col-md-3 col-lg-3 px-5 ">
                <?php echo "<h2>" . $_SESSION['username'] . "</h2>"; ?>
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
      
                <ul class="d-flex align-items-center">
                  <li class="h4 list-unstyled"><a class="h4 text-dark" href="#carousel-example" role="button" data-slide-to="0">Login</a></li>
                  <li class="h4 ml-5"><a class="h4 text-dark" href="#carousel-example" role="button" data-slide-to="1">Register</a></li>
                  <li class="h4 list-unstyled ml-5 ml-auto"><a class="h4 text-dark" href="#"><i class="fas fa-minus"></i></a></ul>li>
                </ul>
      
                <hr>
      
                <div id="carousel-example" class="carousel slide" data-interval="false">

             
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h3 class="mb-3">Login</h3>
                            <form id="login">
                                <div class="form-group">
                                  <label class="h4" for="username">Username</label>
                                  <input name="username" type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                  <label class="h4" for="exampleInputPassword1">Password</label>
                                  <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group form-check">
                                  <input name="remember" type="checkbox" class="form-check-input" id="remember">
                                  <label class="form-check-label ml-2 h4" for="remember">Remember me</label>
                                </div>
                                <button id="submit" type="submit" class="btn btn-primary w-100 rounded-5">Login</button>
                              </form>
                        </div>
                        <div class="carousel-item">
                            <h3 class="mb-3">Register</h3>
                            <form id="register">
                                <div class="form-group">
                                  <label class="h4" for="username">Username</label>
                                  <input name="username" type="text" class="form-control" id="username" aria-describedby="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label class="h4" for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
                                  </div>
                                <div class="form-group">
                                  <label class="h4" for="exampleInputPassword1">Password</label>
                                  <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label class="h4" for="signature">Signature</label>
                                    <input name="signature" type="text" maxlength="100" class="form-control" id="signature" aria-describedby="signature" placeholder="signature">
                                  </div>
                                <button id="submit" name="register" type="submit" class="btn btn-primary w-100 rounded-5">Register</button>
                              </form>
                        </div>
                    </div>
                </div>

                
      
                <hr>
      
                <a href="#" class="h4 text-dark">I forgot my password</a>
      
                <div class="table-responsive mt-5">
                  <table id="table-side" class="table">
                    <thead class="thead">
                      <tr>
                        <th scope="col" class="h3">
                          Last posts
                        </th>
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
                        </td>
      
                      </tr>
                    </tbody>
                  </table>
                </div>
      
                <div class="table-responsive mt-5">
                  <table id="table-side" class="table">
                    <thead class="thead">
                      <tr>
                        <th scope="col" class="h3">
                          Last active user
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-light">
                      <tr class="d-flex justify-content-center flex-wrap">
                          <td id="last-active-card" class="card my-3 mx-1">
                            <div class="card-body d-flex flex-column">
                              <img src="https://cdn-icons-png.flaticon.com/512/147/147140.png" class="rounded-circle mb-1" alt="">
                              <h5 class="card-title text-center">#Ricky2103</h5>
                              <p class="card-text text-center">Here to help!</p>
                            </div>
                          </td>
                          <td id="last-active-card" class="card my-3 mx-1">
                            <div class="card-body d-flex justify-content-center flex-column">
                              <img src="https://cdn-icons-png.flaticon.com/512/147/147140.png" class="rounded-circle mb-1" alt="">
                              <h5 class="card-title text-center">#Ricky2103</h5>
                              <p class="card-text text-center">Here to help!</p>
                            </div>
                          </td>
                          <td id="last-active-card" class="card my-3 mx-1">
                            <div class="card-body d-flex justify-content-center flex-column">
                              <img src="https://cdn-icons-png.flaticon.com/512/147/147140.png" class="rounded-circle mb-1" alt="">
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
                          <th scope="col" class="h3">
                            Blank Widget (ALT block)
                          </th>
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
        .      </ul>
    </div>
    
    <div class="container-fluid bg-dark my-n3">
      <div class="row">
          <div class="col-sm-12 col-md-3 col-lg-3">
              <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb bread-foot bg-dark align-text-bottom justify-content-xs-center">
                <li class="breadcrumb-item bread-foot__item">
                <a href="#" class="text-decoration-none"
                  ><i class="fas fa-home"></i>Home</a
                >
            </li>
              <li class="breadcrumb-item bread-foot__item" aria-current="page">
                  Board index
              </li>
            </ol>
        </nav>
        </div>
        <div class="col-sm-12 col-md-9 col-lg-9">
          <ul class="list-bottom d-flex justify-content-end align-items-center mt-2 flex-wrap justify-content-xs-center ">
              <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-envelope"></i>Contact us</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-shield-alt"></i>The team</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-check"></i>Terms</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-lock"></i>Privacy</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-users"></i>Members</a></li>
            <li class="mr-3"><a href="#" class="text-nowrap "><i class="p-2 fas fa-trash-alt"></i>Delete cookies</a></li>
            <li class=""><a href="#" class="text-nowrap list-dark">All times are UTC</a></li>
        </ul>
        
        <a id="btn-back-to-top" class="btn  btn-floating btn-lg" href="#header-id"> <i class="fas fa-arrow-up"btn-back-to-top ></i></a>
    </div>
</div>

</div>



</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

