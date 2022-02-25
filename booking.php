

<!DOCTYPE html>
<html>


    <head>
    
        <title>Booking - Le Meridien</title>
        
        <meta charset="utf-8">       
        
         <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:500italic,600italic,600,700,700italic,300italic,300,400,400italic,800,900' rel='stylesheet' type='text/css'>
        
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,300italic,400italic,600italic,700,900' rel='stylesheet' type='text/css'>
        
        <!-- favicon -->
        <link rel="icon" type="image/png" href="images/favicon.jpg">
        
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
        
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        
             
    </head>
    
    
    <body>
    
        <!-- Header -->
        <header class="header" id="HOME">
            
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top">
                
                <div class="container">
                  
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#loso-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">
                        <img src="images/navlem.png" alt = "header img">

                        </a>
                    </div>

                <div class="collapse navbar-collapse" id="loso-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" class="nav-item">HOME</a></li>
                        <li><a href="#TABLE" class="nav-item">BOOK A TABLE</a></li>
                  </ul>
                 
                 
                </div>
              </div>
            </nav>
            
        </header>
        
        
        <!-- Book Now -->
        <section class="download-now" id="TABLE">
        
            <div class="container">
                
                <div class="row">

               
                
                    <div class="col-md-10 col-md-offset-1">

                    <!--<img src="images/lemeridien.jpg" id="bk-logo" alt = "header image">-->                    
                        <div class="section-title">

                            <h2> Book a table </h2>
                            <p>Enjoy the convenience of booking a table right from your home. Spend more time with your loved ones and cherish the moment at Le Meridien.  </p>
                            
                        </div>

                    </div>

                </div>
            
            </div>

            <div class="contact-us-form wow bounceIn">

                <div class="container">
                
                    <form role="form">
                    
                        <div class="row">
                        
                            <div class="col-md-12">
                                
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                                </div>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                            
                            </div>
                            
                            <div class="col-md-12">
                                <div class="col-md-4">                            
                                    
                                        <label class="bk-text" for="birthday">Date:</label>
                                        <input class="bk-box" type="date" name="date" id="date" name="birthday">
                                                               
                                </div>
                                <div class="col-md-4">
                                    
                                        <label class="bk-text" for="appt">Time:</label>
                                        <select name="slot" id="slot" class="bk-box">
                                            <option value="" disable selected hidden>Select a time slot</option>
                                            <option value="7">7 pm to 8 pm</option>
                                            <option value="8">8 pm to 9 pm</option>
                                            <option value="9">9 pm to 10 pm</option>
                                            <option value="10">10 pm to 11 pm</option>

                                        </select>
                                  
                                </div>
                                <div class="col-md-4">
                                 
                                        <label class="bk-text" for="counter-num">People:</label>
                                        <input class="bk-box" id="people" max=8  min=1 type="number">
                                    
                                </div>
                            </div>
                            <div id="bk-btn" class="col-md-offset-4 col-md-4 col-md-offset-4">
                                <button type="button" onclick="book();" class="btn btn-default submit-btn form_submit">BOOK</button>
                            </div>
                        
                        </div>

                    </form>

                </div>

            </div>

        </section>
        
        
        
        <!-- Contact Us -->
        <section class="contact-us" id="CONTACT">
            
            <div class="container">
                <div class="row">
                
                    <div class="col-md-12 wow bounceInLeft">
                    
                        <div class="social-icons">
                        
                            <ul>
                            
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            
                            </ul>
                        
                        </div>
                    
                    </div>
                
                </div>
            
            </div>

        </section>
        
        <!-- Footer -->
        <footer class="footer">
        
            <div class="container">
            
                <div class="row">
                
                    <div class="col-md-6">
                    
                        <div id="copyright">
                            <p>Copyright &copy; 2020 <a href="#"> - Le Meridien</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                    
                            <div class="scroll-top">
                                <a href="#HOME" id="scroll-to-top"><i class="fa fa-angle-up"></i></a>
                            </div>
                    </div>

                </div>
            
            </div>
        
        </footer>
        
        
        <!-- Bootstrap JavaScript -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <!-- Bx Slider JS -->
        <script src="js/jquery.bxslider.min.js"></script>
        
        <!-- Add JS counter lib -->
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        
        <!-- Add wow js lib -->
        <script src="js/wow.min.js"></script>
      
        <!-- Custom Js -->
        <script src="js/custom.js"></script>
        <script src="booking.js"></script>
        
    </body>

</html>