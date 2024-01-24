<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<?php $uri = $_SERVER['REQUEST_URI'];
$url[] = explode('/', $uri);
$highlighted = $url[0][2];
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
    <!-- SITE META -->
    <title>TRINITY COLLEGE OF ENGINEERING AND TECHNOLOGY </title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/colors.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style/index.css">
    <style>
        <?php if ($highlighted == 'ece.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/ece.jpg') !important;
        }

        <?php } else if ($highlighted == 'eee.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/eee.jpg') !important;
        }

        <?php } else if ($highlighted == 'cse.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/cse.jpg') !important;
        }

        <?php } else if ($highlighted == 'hs.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/hs.jpg') !important;
        }

        <?php } else if ($highlighted == 'selected.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/selected.jpg') !important;
        }

        <?php } else if ($highlighted == 'tpo.php' || $highlighted == 'founder.php' || $highlighted == 'chairman.php' || $highlighted == 'principal.php' || $highlighted == 'dean.php' || $highlighted == 'dean.php' || $highlighted == 'ao.php') { ?>.banner {
            background: url('images/management.jpg') #000 center no-repeat !important;
            padding: 30px;
        }

        <?php } else if ($highlighted == 'hostel.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/hektor-hostels.jpg') !important;
        }

        <?php } else if ($highlighted == 'transport.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/buses.jpg') !important;
        }

        <?php } else if ($highlighted == 'wifi.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/wifi1.jpg') !important;
        }

        <?php } else if ($highlighted == 'admission.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/admission.jpg') !important;
        }

        <?php } else if ($highlighted == 'mba.php') { ?>.fade-carousel .slides .slide-1 {
            background-image: url('images/mba2.jpg') !important;
        }

        <?php } ?>
    </style>
    <style>
        .newfont {
            font-size: larger;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
    </style>
</head>

<body>
    <!-- START SITE -->
    <div id="wrapper" style=" overflow: hidden;">
        <div class="row " style="background-color:beige;padding-top:-15px;padding-bottom:-10px">
                        <div class="col-sm-7"></div>
                        <div class="col-sm-5">
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <!-- <li class="dropdown has-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="color:#07294d;font-size:15px;padding-top:0px">Committees</span> <span class="fa fa-angle-down"></span></a>
                                        <ul class="dropdown-menu" style="line-height:2.5">
                                            <li><a href="osg.php">Online Student Grievance </a></li>
                                            <li><a href="osg.php">College Disciplinary </a></li>
                                            <li><a href="anti.php">Anti-Ragging </a></li>
                                            <li><a href="gri.php">Grievance Redressal </a></li>
                                            <li><a href="women.php">Women Protection Cell</a></li>
                                            <li><a href="scst.php">SC & ST Welfare</a></li>
                                            <li><a href="Grievance Redressal.php">Ombudsperson Details</a></li>
                                            <li><a href="gove body.php">Governing Body</a></li>
                                            <li><a href="Grievance Redressal.php">MANDATORY DISCLOSURE</a></li>
                                            <li><a href="Grievance Redressal.php">Alumni</a></li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="dropdown has-submenu <?= ($highlighted == 'admission.php') ? 'active' : ''; ?>">
                                        <a href="admission.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="color:#07294d;font-size:15px">Admissions</span><span class="fa fa-angle-down"></span></a>
                                    </li> -->
                                    <li class="dropdown <?= ($highlighted == 'admission.php') ? 'active' : ''; ?>"><a href="admission.php"><span style="color:#07294d;font-size:15px">Admissions</span></a></li>
                                    <li class="dropdown <?= ($highlighted == 'gallery.php') ? 'active' : ''; ?>"><a href="gallery.php"><span style="color:#07294d;font-size:15px">Gallery</span></a></li>
                                    
                                     <li class="dropdown has-submenu <?= ($highlighted == 'library.php' || $highlighted == 'hostel.php' || $highlighted == 'transport.php' || $highlighted == 'wifi.php' || $highlighted == 'key.php' || $highlighted == 'gallery.php') ? 'active' : ''; ?>">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><span style="color:#07294d;font-size:15px;">Facilities</span> <span class="fa fa-angle-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="library.php">Library</a></li>
                                                <li><a href="hostel.php">Hostel</a></li>
                                                <li><a href="transport.php">Transport</a></li>
                                                <!-- <li><a href="wifi.php">Wi-Fi</a></li>--> 
                                                <li><a href="key.php">Key-Facilities</a></li>
                                                <li><a href="e-learn.php">E-learning and Internet</a></li>
                                                <li><a href="sports.php">Sports </a></li>
                                                <li><a href="cultural.php">Cultural</a></li>
                                                <!-- <li><a href="gallery.php">Gallery </a></li> -->
                                            </ul>
                                        </li> 
                                        <li class="dropdown <?= ($highlighted == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php"><span style="color:#07294d;font-size:15px">Contact</span></a></li>
                                        
                                </ul>
                            </div>
                        </div>
        </div> <!--end .. row -->    

        <div class="header-style-2">
            <div class="container-fluid" >
                <div class="row" >    
                    <div class="col-md-12 col-sm-12 nopad" >
                        <header class="header">
                            <nav class="yamm navbar navbar-default" style="background-color:white;">
                                <div class="container-fluid" >
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="" href="index.php"><img src="images/logo1.png" class=" main-Img" alt="" style="width:300px;"></a>
                                    </div>
                                    <div id="navbar" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav" style="padding-left:50px;padding-top:20px">
                                            <li class="dropdown has-submenu <?= ($highlighted == 'index.php') ? 'active' : ''; ?>">
                                                <a href="index.php">Home</a>
                                            </li>
                                            <li class="dropdown has-submenu <?= ($highlighted == 'founder.php' || $highlighted == 'chairman.php' || $highlighted == 'principal.php' || $highlighted == 'dean.php' || $highlighted == 'vision&mission.php') ? 'active' : ''; ?>">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="fa fa-angle-down"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="founder.php">Founder</a></li>
                                                    <li><a href="chairman.php">Chairman</a></li>
                                                    <li><a href="principal.php">Principal</a></li>
                                                    <li><a href="dean.php">Director Academics</a></li>
                                                    <li><a href="ao.php">Administrative Officer</a></li>
                                                    <li><a href="vision&mission.php">Vision and Mission</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown has-submenu <?= ($highlighted == 'undergrad.php' || $highlighted == 'postgrad.php' || $highlighted == 'diploma.php') ? 'active' : ''; ?>">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academics <span class="fa fa-angle-down"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown has-submenu">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course offered<span class="fa fa-angle-down"></span></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="undergrad.php">Undergraduate Programmes</a></li>
                                                            <li><a href="postgrad.php">Post Graduate Programs</a></li>
                                                            <li><a href="diploma.php">Diploma</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="calendars.php">Academic Calendars</a></li>
                                                    <li><a href="regulation.php">Academic Regulations</a></li>
                                                    <!--  <li><a href="admission.php">Admissions </a></li>-->
                                            </li><!-- end li -->
                                        </ul><!-- end ul -->
                                        </li><!-- end megamenu -->
                                        <li class="dropdown has-submenu <?= ($highlighted == 'eee.php' || $highlighted == 'ece.php' || $highlighted == 'cse.php' || $highlighted == 'hs.php') ? 'active' : ''; ?>">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Departments <span class="fa fa-angle-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="eee.php">EEE</a></li>
                                                <li><a href="ece.php">ECE</a></li>
                                                <li><a href="cse.php">CSE</a></li>
                                                <li><a href="aiml.php">AIML</a></li>
                                                <li><a href="hs.php">H & S</a></li>
                                                <li><a href="mba.php">MBA</a></li>
                                                <li><a href="#">Diploma in EEE</a></li>
                                                <li><a href="#">Diploma in ECE</a></li>
                                                <li><a href="#">Diploma in CSE</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown has-submenu <?= ($highlighted == 'selected.php' || $highlighted == 'tpo.php') ? 'active' : ''; ?>">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Placement Cell <span class="fa fa-angle-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="placement.php">Placement Cell</a></li>
                                                <!-- <li><a href="#">Companies Visited</a></li>/s -->
                                                <li><a href="tpo.php">Contact TPO</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class="dropdown has-submenu <?= ($highlighted == 'selected.php' || $highlighted == 'tpo.php') ? 'active' : ''; ?>">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NAAC <span class="fa fa-angle-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">SELF STUDY REPORT-SSR </a></li>
                                                <li><a href="C-4.PHP">CRITERIA-1 </a></li>
                                                <li><a href="anti.php">CRITERIA-2 </a></li>
                                                <li><a href="c3.php">CRITERIA-3 </a></li>
                                                <li><a href="C-FOUR.PHP">CRITERIA-4 </a></li>
                                                <li><a href="C-5.PHP"> CRITERIA-5</a></li>
                                                <li><a href="C-6.PHP">CRITERIA-6</a></li>
                                                <li><a href="C-7.PHP">CRITERIA-7</a></li>
                                                <li><a href="IIQA7.php">IIQA</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown has-submenu <?= ($highlighted == 'selected.php' || $highlighted == 'tpo.php') ? 'active' : ''; ?>">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DVV <span class="fa fa-angle-down"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="ExtendedProfile.PHP">ExtendedProfile_DVV</a></li>
                                                <li><a href="C1DVV.PHP">CRITERIA-1</a></li>
                                                <li><a href="C2DVV.PHP">CRITERIA-2</a></li>
                                                <li><a href="C3DVV.PHP">CRITERIA-3</a></li>
                                                <li><a href="C4DVV.PHP">CRITERIA-4</a></li>
                                                <li><a href="C5DVV.PHP">CRITERIA-5</a></li>
                                                <li><a href="C6DVV.PHP">CRITERIA-6</a></li>
                                                <li><a href="C7DVV.PHP">CRITERIA-7</a></li>
                                            </ul>
                                        </li>
                                        <!-- <li class="dropdown <?= ($highlighted == 'contact.php') ? 'active' : ''; ?>"><a href="contact.php">Contact</a></li> -->
                                        </ul>
                                    </div>
                                </div><!--/.container-fluid -->
                            </nav>
                        </header><!-- end header -->
                    </div>
                    <div class="row">
                        <div class="col-sm-6" style="background-color: #07294d;margin-top:-20px">
                            <h4 class="text-center" style="color:white;font-weight:bold;font-family:calibri">EAMCET/ ICET/ ECET/ POLYCET CODE: TCEK</h4>
                        </div>
                        <div class="col-sm-6" style="background-color: #07294d;margin-top:-20px">
                            <h4 class="text-center" style="color:white;font-weight:bold;font-family:calibri">For Admissions Contact : 8522954369, 7396903383</h4>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 col-sm-12" style="background-color: #07294d;margin-top:-20px">
                        <h4 class="text-center" style="color:white;font-weight:bold;font-family:calibri">EAMCET/ ICET/ ECET/ POLYCET CODE: TCEK</h4>
                    </div> -->
                    <!-- end col -->
                </div><!-- end row --> 
            </div><!-- end container -->   
        </div><!-- end header-style-2 -->