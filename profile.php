<?php
   include 'session.php';
       // coonecting to database
 $con = mysqli_connect("Localhost","root","","profile");
 //username 
 $us = $_SESSION['uname'];
//previous data
    $sq = "select * from profile where uname LIKE '$us';";
    $result = mysqli_query($con,$sq);
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


// previous data is stored in $row 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resume</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet">


    <!--         for image modal            -->
    


  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"><?php echo $_SESSION['uname'];   ?></span>
        <span class="d-none d-lg-block">
          <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="profile.jpg" alt="">
        </span>
      </a>
      <div style="height: 50px;"></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
        <div style="margin-right: 20px;">
           <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
           
            <span class="nav-link-text">More</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li class="nav-item">

            <a class="nav-link js-scroll-trigger" href="editpro.php"><i class="fa fa-fw fa-wrench"></i> Edit-Profile</a>
          </li>
            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
          </li>
          </ul>
        </li>

</div>
         
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">

      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0"> <?php echo $_SESSION['uname'];   ?>
            <span class="text-primary"> <?php echo $_SESSION['lname']; ?> </span>
          </h1>
          <div class="mb-5"><?php echo $row['address']  ?> ·
            <a href="#"><?php echo $_SESSION['email'];  ?></a>
          </div>
          <p class="mb-5"><?php echo $row['about']  ?></p>
          <ul class="list-inline list-social-icons mb-0">
            <li class="list-inline-item">
              <a href="<?php $row['fb']  ?>">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div class="my-auto">
          <h2 class="mb-5">Experience</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo $row['role1']  ?></h3>
              <div class="subheading mb-3"><?php echo $row['com1']  ?></div>
              <p><?php echo $row['abw1']  ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $row['ye1']  ?></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo $row['role2']  ?></h3>
              <div class="subheading mb-3"><?php echo $row['com2']  ?></div>
              <p><?php echo $row['abw2']  ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $row['ye2']  ?></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo $row['role3']  ?></h3>
              <div class="subheading mb-3"><?php echo $row['com3']  ?></div>
              <p><?php echo $row['abw3']  ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $row['ye3']  ?></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo $row['role4']  ?></h3>
              <div class="subheading mb-3"><?php echo $row['com4']  ?></div>
              <p><?php echo $row['abw4']  ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $row['ye4']  ?></span>
            </div>
          </div>

        </div>

      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div class="my-auto">
          <h2 class="mb-5">Education</h2>

          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo $row['ins1']  ?></h3>
              <div class="subheading mb-3"><?php echo $row['deg1']  ?></div>
              <p>GPA: <?php echo $row['cgpa1']  ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $row['year1']  ?></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo $row['ins2']  ?></h3>
              <div class="subheading mb-3"><?php echo $row['deg2']  ?></div>
              <p>GPA: <?php echo $row['cgpa2']  ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $row['year2']  ?></span>
            </div>
          </div>

          <div class="resume-item d-flex flex-column flex-md-row">
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo $row['ins3']  ?></h3>
              <div class="subheading mb-3"><?php echo $row['deg3']  ?></div>
              <p>GPA: <?php echo $row['cgpa3']  ?></p>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary"><?php echo $row['year3']  ?></span>
            </div>
          </div>

        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="mb-5">Skills</h2>

          <div class="subheading mb-3"><?php echo $row['skillname']  ?></div>
          <ul class="list-inline list-icons">
            <li class="list-inline-item">
              <i class="devicons devicons-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-css3"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-javascript"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-jquery"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-sass"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-less"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-bootstrap"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-wordpress"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-grunt"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-gulp"></i>
            </li>
            <li class="list-inline-item">
              <i class="devicons devicons-npm"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              <?php echo $row['wf1']  ?></li>
            <li>
              <i class="fa-li fa fa-check"></i>
              <?php echo $row['wf2']  ?></li>
            <li>
              <i class="fa-li fa fa-check"></i>
              <?php echo $row['wf3']  ?></li>
            <li>
              <i class="fa-li fa fa-check"></i>
              <?php echo $row['wf4']  ?></li>
          </ul>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div class="my-auto">
          <h2 class="mb-5">Interests</h2>
        
          <p class="mb-0"><?php echo $row['interests']  ?></p>
        </div>
      </section>

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="awards">
        <div class="my-auto">
          <h2 class="mb-5">Awards &amp; Certifications</h2>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $row['aw1']  ?></li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $row['aw2']  ?></li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $row['aw3']  ?></li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $row['aw4']  ?></li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $row['aw5']  ?></li>
            <li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $row['aw6']  ?></li>
            <li>
              <i class="fa-li fa fa-trophy text-warning"></i>
              <?php echo $row['aw7']  ?></li>
          </ul>
        </div>
      </section>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

  </body>

</html>
