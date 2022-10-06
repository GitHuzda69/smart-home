<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Smart Home Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital@1&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- ke firebaseeeeeeeeeeeeee-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script>
    <!-- <script src="js/script.js"></script> -->
    <script src="js/lamppage.js"></script>
</head>

<body>
    <!-- otentiikasii-->
    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyA6fpWR8llpaafLcQENGQU9wZtZnIPnSpk",
            authDomain: "fathinlka.firebaseapp.com",
            databaseURL: "https://fathinlka-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "fathinlka",
            storageBucket: "fathinlka.appspot.com",
            messagingSenderId: "844286277057",
            appId: "1:844286277057:web:c655f1a35eb6e8676beb40",
            measurementId: "G-V1E030PSQR"
            };
        firebase.initializeApp(firebaseConfig);
    </script>

    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <div>
                        <h3 class="text-primary title1" style="margin-bottom:0">Smart Home</i></h3>
                        <h3 class="text-primary title1">Control Panel</h3>
                    </div>
                    
                </a>
                <div class="d-flex align-items-center ms-4">
                    <h4 style="margin-bottom:0.5rem">Menu</h4>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    
                    <a href="lightsw.php" class="nav-item nav-link active"><i class="fa fa-lightbulb me-2"></i>Light Switches</a>

                    <a href="temp.php" class="nav-item nav-link"><i class="fas fa-thermometer-half me-2"></i>Temperatures</a>

                    <a href="watertap.php" class="nav-item nav-link"><i class="fas fa-tint me-2"></i>Water Tap</a>
                    <a href="fan.php" class="nav-item nav-link "><i class="fas fa-fan me-2"></i>Fan Control</a>

                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fas fa-home"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0 shadow-sm">
                    <i class="fa fa-bars"></i>
                </a>

                <div class=" d-md-flex" style="padding: 20px;">
                    <h3 class="mb-0">Light Switches</h3>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">

                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded p-4 shadow">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="centered-element">
                                        <h6 class="mb-0">Teras Depan</h6>
                                        <p class="mb-0" id="sts-terasdepan">Loading...</p>
                                    </div>                                    
                                </div>
            
                                <div class="squaresm shadow-sm text-center" style="cursor: pointer;" onclick="globalUpdate('StatusRelay1');">
                                    <div class="centered-element">
                                        <i class="bi bi-lightbulb-off-fill lampico centered-element" id="ic-terasdepan"></i>
                                    </div>                                    
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded p-4 shadow">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="centered-element">
                                        <h6 class="mb-0">Ruang Tamu</h6>
                                        <p class="mb-0" id="sts-ruangtamu">Loading...</p>
                                    </div>                                    
                                </div>
            
                                <div class="squaresm shadow-sm text-center" style="cursor: pointer;" onclick="globalUpdate('StatusRelay2');">
                                    <div class="centered-element">
                                        <i class="bi bi-lightbulb-off-fill lampico centered-element" id="ic-ruangtamu"></i>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                </div>

                <div class="row g-4 pt-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded p-4 shadow">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="centered-element">
                                        <h6 class="mb-0">Kamar Depan</h6>
                                        <p class="mb-0" id="sts-kamardepan">Loading...</p>
                                    </div>                                    
                                </div>
            
                                <div class="squaresm shadow-sm text-center" style="cursor: pointer;" onclick="globalUpdate('StatusRelay3');">
                                    <div class="centered-element">
                                        <i class="bi bi-lightbulb-off-fill lampico centered-element" id="ic-kamardepan"></i>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded p-4 shadow">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="centered-element">
                                        <h6 class="mb-0">Ruang Tengah</h6>
                                        <p class="mb-0" id="sts-ruangtengah">Loading...</p>
                                    </div>                                    
                                </div>
            
                                <div class="squaresm shadow-sm text-center" style="cursor: pointer;" onclick="globalUpdate('StatusRelay4');">
                                    <div class="centered-element">
                                        <i class="bi bi-lightbulb-off-fill lampico centered-element" id="ic-ruangtengah"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 pt-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded p-4 shadow">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="centered-element">
                                        <h6 class="mb-0">Teras Samping</h6>
                                        <p class="mb-0" id="sts-terassamping">Loading...</p>
                                    </div>                                    
                                </div>
            
                                <div class="squaresm shadow-sm text-center" style="cursor: pointer;" onclick="globalUpdate('StatusRelay5');">
                                    <div class="centered-element">
                                        <i class="bi bi-lightbulb-off-fill lampico centered-element" id="ic-terassamping"></i>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded p-4 shadow">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="centered-element">
                                        <h6 class="mb-0">Kamar Belakang</h6>
                                        <p class="mb-0" id="sts-kamarbelakang">Loading...</p>
                                    </div>                                    
                                </div>
                                <div class="squaresm shadow-sm text-center" style="cursor: pointer;" onclick="globalUpdate('StatusRelay6');">
                                    <div class="centered-element">
                                        <i class="bi bi-lightbulb-off-fill lampico centered-element" id="ic-kamarbelakang"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <!-- <script src="js/main.js"></script> -->

</body>

</html>