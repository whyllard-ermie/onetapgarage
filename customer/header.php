
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>One Tap Garage</title>
         <!-- myadd!! -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
	<!-- Demo CSS -->
	<link rel="stylesheet" href="css/demo.css">
  <!-- myadd!! -->
        <?php include '../bootstrap/styles.php'; ?> 
        <style>
          
            
            .card{
                background-color: #FF7B54;
                
            }
            .orange-section{
                background-color: #FF7B54;
                
            }
        </style>
    </head>
 
  

        <header>
            <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary py-2 fixed-top" data-bs-theme="dark" id="customernav">
                <div class="container" id="navcon">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <img class="" style="width: 100px;" src="../images/logo.png" alt="onetapgarage" />
                        <ul class="navbar-nav ms-auto gap-4 align-items-center gap-4">
                        <li class="nav-item">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info btn-round" data-toggle="modal" data-target="#loginModal">
                                    <span class="h5">Book Now</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#"><h6>Home</h6></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services"><h6>My book</h6></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about"><h6>Profile</h6></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"><h6>Logout</h6></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>