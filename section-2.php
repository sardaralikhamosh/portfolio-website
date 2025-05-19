<?php
/**
 * About Us Section Template
 * 
 * This template displays the "About Us" section with an angled image
 * and company description.
 */
?>

<section class="about-section">
    <div class="container-fluid p-0">
        <div class="about-container">
            <div class="row g-0">
                <!-- Image Column with Angle -->
                <div class="col-lg-7 col-md-12 about-image-container">
                    <div class="about-image">
                        <img src="images/section-2-banner.png" alt="Elemental Biologics Laboratory" class="img-fluid">
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="col-lg-5 col-md-12 about-content-wrapper">
                    <div class="about-content">
                        <h2>About Us</h2>
                        <p class="mb-4 feature-text">
                            We are a biotech company engaged in the discovery and development of monoclonal antibodies (mAbs) as next-generation treatments for autoimmune and other inflammatory diseases.
                        </p>
                        <p class="mb-5 feature-text">
                            Our innovative monoclonal antibody (mAb) development approach focuses on targeting multiple disease areas where effective therapies are unavailable.
                        </p>
                        <a href="/about.php" class="btn btn-primary learn-more-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    section.container-fluid{
        padding: 0;
    }
    .about-section {
        overflow: hidden;
        position: relative;
        background-color: #fff;
    }
    
    .about-container {
        position: relative;
    }
    
    .about-image-container {
        position: relative;
        overflow: hidden;
        height: 100%;
    }
    
    .about-image {
        width: 100%;
        height: 100%;
        clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%);
        position: relative;
    }
    
    .about-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    .about-content-wrapper {
        display: flex;
        align-items: center;
    }
    
    .about-content {
        padding: 4rem 3rem 4rem 4rem;
    }
    
    .about-content h2 {
        color: #0a2240;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 2rem;
    }
    
    .about-content p {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
    }
    
    .learn-more-btn {
        background-color: #0a2240;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        font-weight: 500;
        border-radius: 0;
        text-transform: uppercase;
        transition: background-color 0.3s ease;
    }
    
    .learn-more-btn:hover {
        background-color: #051830;
    }
    
    @media (max-width: 991px) {
        .about-image {
            clip-path: none;
            height: 400px;
        }
        
        .about-content {
            padding: 3rem 2rem;
        }
        
        .about-content h2 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
        }
    }
    
    @media (max-width: 767px) {
        .about-image {
            height: 300px;
        }
        
        .about-content {
            padding: 2rem 1.5rem;
        }
        
        .about-content h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
    }
</style>