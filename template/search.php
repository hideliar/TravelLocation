<!DOCTYPE html>
<html lang="vn">
    <head>
        <title>Search</title>
        <meta charset="UTF-8">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS -->
        <link href="css/search.style.css" rel="stylesheet">
        <!-- font -->
        <link href="https://fonts.googleapis.com/css?family=Cabin|Paytone+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,900|Poppins:100,200,300,300i,400,500,600,700,800,900" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark sticky" style="height: 9vh; background: rgba(0, 0, 0, 0.42);">
            <a class="navbar-brand logo-main" href="/TravelLocation/template/"><img src="img/logo.png"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
                <div class="dropdown text-center">
                   <a href="../login"><button class="btn btn-secondary dropdown-toggle" type="button">Login</button></a>
          <!--           <div class="dropdown-menu">
                        <form class="px-4 py-3">
                          <div class="form-group">
                            <label for="exampleDropdownFormEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                          </div>
                          <div class="form-group">
                            <label for="exampleDropdownFormPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                          </div>
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">
                              Remember me
                            </label>
                          </div>
                          <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                      </div> -->
            </div>
        </div></nav>
        <div class="body">
            <div class="row">
                <div class="col-lg-5 right">
                    <div class="search-back">
                        <h1>Tìm Địa Điểm Bạn Muốn Tới</h1>
                        <div class="search-form">
                            <div class="row justify-content-md-center m-0">
                             <?php
                             $key = isset($_GET['keyword']) ? $_GET['keyword'] : "";
                             $value = isset($_GET['value']) ? (int)$_GET['value'] : "";
                             $locationid = isset($_GET['locationid']) ? (int)$_GET['locationid'] : ""; 
                             ?>
                             <div class="col-lg-3 col-sm-10 col-md-3 col-xl-3 form-group p-0">
                             <form action="" method="GET">
                             <div class="select-option-location-citys">
                                <select class="form-control form-control-lg rounded-0" id="stage" value="<?php echo $value; ?>" locationid="<?php echo $locationid; ?>" name="value">
                                  </select>
                             </div>
                             </div>
                             <div class="col-lg-4 col-sm-10 col-md-4 col-xl-4 form-group p-0">
                             <div class="search">
                                 <input class="form-control form-control-lg rounded-0" type="text" placeholder="Bạn muốn đi đâu?" value="<?php echo $key; ?>" name="keyword">
                             </div>
                             </div>
                             <div class="col-lg-2 col-sm-4 col-md-2 col-xl-2 text-center p-0">
                             <div class="search-button">
                                 <button type="submit" class="btn btn-light rounded-0">Tìm Kiếm  </button>
                             </div>
                             </div>
                             </form>
                            </div>
                           </div>
                        <div class="search-data" id="search-data">
                            <!-- search data -->
                            </div>
                        </div>   
                      </div>
                <div class="col-lg-7 form-group left" style="background: rgba(0, 0, 0, 0.35); margin: inherit;padding-top: 12px;">
                    <div class="map" id="yourmapid">

                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="col-12 text-center text-white" style="height: 3vh; background: #3e4551">
                <p>© 2019 TravelLocation ®. All Rights Reserved.</p>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/map4dsdk@1.1.0.prod.js"></script>
        <script src="js/get.js"></script>
        <script src="js/map4d.js"></script>
        <script src="js/dot.js"></script>
        <script>
        function fun(x,y) {
            
           let marker = new map4d.Marker({
            position: {lat: x, lng:y},
            anchor: [0.5, 1.0],
            label: new map4d.MarkerLabel({text: "", color: "000000", fontSize: 12})
          })
          //thêm marker vào map 
     
          marker.setMap(map) 
         
         }
        </script>
    </body>
</html>