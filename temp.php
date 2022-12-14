<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Smart Home Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta http-equiv="Pragma" content="no-cache">

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
    
    <!-- <script src="js/lamppage.js"></script> -->
    <script src="src/gauge.js"></script>
    <script src="src/gaugeHum.js"></script>
    <script src="js/temp.js"></script>

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
                    
                    <a href="lightsw.php" class="nav-item nav-link"><i class="fa fa-lightbulb me-2"></i>Light Switches</a>
                    
                    <a href="temp.php" class="nav-item nav-link active"><i class="fas fa-thermometer-half me-2"></i>Temperatures</a>

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
                    <h3 class="mb-0">Room Temperature</h3>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4 mt-0">

                    <!-- saklarr lampuuu -->
                    <div class="col-sm-12 col-md-6 col-xl-4 mt-0 mb-4">
                        <div class="h-100 bg-light rounded p-4 shadow">
                            <div class="d-flex mb-4 justify-content-center">
                                <h6 class="mb-0">Ruang Tamu</h6>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <div id="gauge1" class="gauge-container text-center"></div>
                                </div>

                                <div>
                                    <div id="gauge1hum" class="gauge-container text-center"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-xl-4 mt-0 mb-4">
                        <div class="h-100 bg-light rounded p-4 shadow">
                            <div class="d-flex mb-4 justify-content-center">
                                <h6 class="mb-0">Teras</h6>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <div id="gauge2" class="gauge-container text-center"></div>
                                </div>

                                <div>
                                    <div id="gauge2hum" class="gauge-container text-center"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4 mt-0 mb-4">
                        <div class="h-100 bg-light rounded p-4 shadow">
                            <div class="d-flex mb-4 justify-content-center">
                                <h6 class="mb-0">Kamar Depan</h6>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <div id="gauge3" class="gauge-container text-center"></div>
                                </div>

                                <div>
                                    <div id="gauge3hum" class="gauge-container text-center"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4 mt-0 mb-4">
                        <div class="h-100 bg-light rounded p-4 shadow">
                            <div class="d-flex mb-4 justify-content-center">
                                <h6 class="mb-0">Ruang Tengah</h6>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <div id="gauge4" class="gauge-container text-center"></div>
                                </div>

                                <div>
                                    <div id="gauge4hum" class="gauge-container text-center"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4 mt-0 mb-4">
                        <div class="h-100 bg-light rounded p-4 shadow">
                            <div class="d-flex mb-4 justify-content-center">
                                <h6 class="mb-0">Kamar Tengah</h6>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <div id="gauge5" class="gauge-container text-center"></div>
                                </div>

                                <div>
                                    <div id="gauge5hum" class="gauge-container text-center"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-xl-4 mt-0 mb-4">
                        <div class="h-100 bg-light rounded p-4 shadow">
                            <div class="d-flex mb-4 justify-content-center">
                                <h6 class="mb-0">Kamar Belakang</h6>
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <div id="gauge6" class="gauge-container text-center"></div>
                                </div>

                                <div>
                                    <div id="gauge6hum" class="gauge-container text-center"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blank End -->

        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var gauge1 = Gauge(
        document.getElementById("gauge1"), {
            max: 40,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge1hum = GaugeHum(document.getElementById("gauge1hum"), {
            max: 100,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge2 = Gauge(document.getElementById("gauge2"), {
            max: 40,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge2hum = GaugeHum(document.getElementById("gauge2hum"), {
            max: 100,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge3 = Gauge(document.getElementById("gauge3"), {
            max: 40,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge3hum = GaugeHum(document.getElementById("gauge3hum"), {
            max: 100,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge4 = Gauge(document.getElementById("gauge4"), {
            max: 40,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge4hum = GaugeHum(document.getElementById("gauge4hum"), {
            max: 100,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge5 = Gauge(document.getElementById("gauge5"), {
            max: 40,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge5hum = GaugeHum(document.getElementById("gauge5hum"), {
            max: 100,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge6 = Gauge(document.getElementById("gauge6"), {
            max: 40,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });

        var gauge6hum = GaugeHum(document.getElementById("gauge6hum"), {
            max: 100,
            value: 0,
            color: function(value) {
                if(value < 17) {
                    return "#80CEF8";
                } if(value < 25){
                    return "#97C0DB";
                } else { return "#FF8053"; }
            }
        });
    </script>

    <style>
        .gauge-container {
            width: 10rem;
            height: 10rem;
            display: block;
            margin: auto;
          }

        .gauge-container > .gauge > .dial {
            stroke: #7a858f;
            stroke-width: 3;
          }
          .gauge-container > .gauge > .value {
            stroke: rgb(47, 227, 255);
            stroke-width: 5;
          }
          .gauge-container > .three > .gauge > .value-text {
            fill: rgb(47, 227, 255);
            font-family: "Poppins", sans-serif;
            color: black;
            font-weight: bold;
            font-size: 0.6em;
          }
    </style>
</body>

</html>