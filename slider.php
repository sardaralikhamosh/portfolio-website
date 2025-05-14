<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemental Biologics</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            padding: 15px 0;
            background-color: #ffffff;
        }
        
        .navbar-brand img {
            height: 50px;
        }
        
        .navbar-nav .nav-link {
            color: #333;
            font-weight: 500;
            margin: 0 10px;
            text-transform: uppercase;
            font-size: 14px;
        }
        
        .navbar-nav .nav-link:hover {
            color: #666;
        }
        
        .consultation-btn {
            background-color: #0a2240;
            color: white;
            border-radius: 0;
            padding: 10px 20px;
            font-weight: 500;
        }
        
        .consultation-btn:hover {
            background-color: #051a30;
            color: white;
        }
        
        /* Hero Slider Styles */
        .hero-slide {
            height: 600px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #0a2240;
            position: relative;
            display: flex;
            align-items: center;
        }
        
        .hero-slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(10, 34, 64, 0.4);
        }
        
        .hero-content {
            color: white;
            padding: 50px 0;
            position: relative;
            z-index: 2;
            width: 70%;
            margin-left: 10%;
        }
        
        .hero-content h5 {
            font-size: 1.5rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            line-height: 1.1;
        }
        
        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .hero-content .btn {
            padding: 12px 25px;
            font-weight: 500;
            border-radius: 0;
            text-transform: uppercase;
            font-size: 0.9rem;
        }
        
        /* Custom carousel navigation */
        .carousel-control-prev, 
        .carousel-control-next {
            width: 5%;
        }
        
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 40px;
            height: 40px;
        }
        
        .carousel-indicators {
            margin-bottom: 2rem;
        }
        
        .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin: 0 5px;
            background-color: rgba(255, 255, 255, 0.5);
        }
        
        .carousel-indicators button.active {
            background-color: white;
        }
        
        @media (max-width: 992px) {
            .navbar-collapse {
                margin-top: 15px;
            }
            
            .consultation-btn {
                margin-top: 15px;
                width: 100%;
                text-align: center;
            }
            
            .hero-content {
                width: 90%;
                margin-left: 5%;
                text-align: center;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content h5 {
                font-size: 1.2rem;
            }
            
            .hero-slide {
                height: 500px;
            }
        }
        
        @media (max-width: 576px) {
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .hero-slide {
                height: 450px;
            }
        }
    </style>
</head>
<body>
  

    <!-- Hero Slider Section -->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="hero-slide" style="background-image: url('images/slider.png');">
                    <div class="container">
                        <div class="hero-content">
                            <h5>A Unique and Transformative</h5>
                            <h1>THERAPEUTIC ANTIBODY<br>PLATFORM</h1>
                            <p>Advancing next-generation monoclonal antibody (mAb) treatments for<br>autoimmune and gastrointestinal diseases.</p>
                            <a href="#" class="btn btn-light">Learn About Our Science</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 2 (placeholder) -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('images/slider.png');">
                    <div class="container">
                        <div class="hero-content">
                            <h5>Innovative Research</h5>
                            <h1>BREAKTHROUGH<br>DISCOVERIES</h1>
                            <p>Pioneering novel approaches to treating chronic inflammatory<br>conditions with targeted therapies.</p>
                            <a href="#" class="btn btn-light">Explore Our Pipeline</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slide 3 (placeholder) -->
            <div class="carousel-item">
                <div class="hero-slide" style="background-image: url('images/slider.png');">
                    <div class="container">
                        <div class="hero-content">
                            <h5>Excellence in Development</h5>
                            <h1>PRECISION<br>MEDICINE</h1>
                            <p>Creating tailored therapeutic solutions that address the root causes<br>of inflammatory disease mechanisms.</p>
                            <a href="#" class="btn btn-light">View Our Approach</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Arrows -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>