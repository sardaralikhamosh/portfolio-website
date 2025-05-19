<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemental Biologics</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/dist/css/bootstrap.min.js" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        main.container-fluid {
    padding: 0 !important;
}
        .navbar {
            padding: 15px 0;
            background-color: white;
        }
        
        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            padding: 0 15px;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }
        
        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }
        
        .consultation-btn {
            background-color: #02204A;
            color: white;
            border-radius: 0;
            padding: 10px 20px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        
        .consultation-btn:hover {
            background-color: #003980;
            color: white;
        }
        
        header {
            box-shadow: 0 4px 6px -2px rgba(0, 0, 0, 0.2) !important;
        }
        
        /* Mobile menu styling */
        @media (max-width: 991px) {
            .navbar-collapse {
                padding: 20px 0;
                background-color: white;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                z-index: 1000;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            
            .navbar-nav {
                padding: 0 15px;
            }
            
            .navbar-nav .nav-link {
                padding: 10px 0;
                border-bottom: 1px solid #f0f0f0;
            }
            
            .consultation-btn {
                margin: 15px 0;
                display: block;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header/Navigation -->
    <header class="Header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="Elemental Biologics Logo">
                </a>
                
                <!-- Mobile Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="science-and-technology.php">SCIENCE & TECHNOLOGY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="career.php">CAREER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pipeline.php">PIPELINE</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="teams.php">TEAM & LEADERSHIP</a>
                        </li>
                        <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                            <a class="btn consultation-btn" href="contact.php">Schedule a Consultation</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Page Content Goes Below This -->