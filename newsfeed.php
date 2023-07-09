<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/common.css">
  <title>Document</title>
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="newsfeed.html">Newsfeed</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="maps.html">Maps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.html">Profile</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!--Navbar-->
    </div>
  </div>
  <div class="clr"></div>



  <div class="container">
    <div class="row">
      <div class="col-4 sidebar">
        <div class="accordion newsfeed accordion-flush" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Item #1
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> 
                <ul>
                  <li><a href="">apple</a></li>
                  <li><a href="">ice Cream</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Item #2
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul>
                  <li><a href="">apple</a></li>
                  <li><a href="">ice Cream</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Item #3
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul>
                <li><a href="">apple</a></li>
                
                <li><a href="">ice Cream</a></li>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-8">
        <!-- post loop starts here-->
        <div class="post">
          <div class="row">
            <div class="post-profile">
              <img src="images/profile.jpg" alt="">
              <h5>profile name</h5>
            </div>
            <p>loremmmm</p>
    
            <div class="postpic ">
              <img src="images/OIP (1).jpg" alt="">
            </div>
            <div class="input-group mb-1">
    
              <input type="text" class="form-control" placeholder="Write a Comment" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default">
              <span class="btn btn-primary" id="">arrow</span>
            </div>
          </div>
        </div>
        <!-- post --> 
      </div>
    </div>
  </div>
 
  <div class="clr"></div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>l