<?php
/**
 * Science & Technology Detail Section Template
 * 
 * This template displays the detailed "Science & Technology" section
 * with three development approaches and an angled laboratory image.
 */
?>

<section class="science-tech-detail-section">
    <div class="container-fluid p-0">
        <div class="science-tech-container">
            <div class="row g-0">
                <!-- Content Column -->
                <div class="col-lg-5 col-md-12 content-column">
                    <div class="content-wrapper">
                        <h2>Science &<br>Technology</h2>
                        
                        <p class="intro-text feature-text">
                            At Elemental Biologics, we apply precision immunology to develop innovative monoclonal antibody (mAb) therapies. Our drug discovery platform combines scientific expertise with advanced technologies to address complex immune-driven diseases.
                        </p>
                        
                        <div class="approach-item ">
                            <h3><span class="number">1.</span> Targeted Discovery</h3>
                            <p class="feature-text">We identify key immune pathways involved in multiple diseases, enabling cross-indication therapies with a single antibody.</p>
                            <div class="divider"></div>
                        </div>
                        
                        <div class="approach-item">
                            <h3><span class="number">2.</span> Advanced Antibody Engineering</h3>
                            <p class="feature-text">We use state-of-the-art techniques to design and optimize mAbs for maximum precision, potency, and safety.</p>
                            <div class="divider"></div>
                        </div>
                        
                        <div class="approach-item">
                            <h3><span class="number">3.</span> Translational Development</h3>
                            <p class="feature-text">We advance promising candidates through rigorous preclinical models ensuring strong efficacy and safety, advancing candidates with real-world impact.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Image Column with Angle -->
                <div class="col-lg-7 col-md-12 image-column">
                    <div class="image-container">
                        <img src="images/section-3-banner.png" alt="Scientist holding semiconductor wafer in laboratory" class="img-fluid">
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
    .science-tech-detail-section {
        position: relative;
        overflow: hidden;
        background-color: #fff;
    }
    
    .science-tech-container {
        position: relative;
    }
    
    /* Content Column Styling */
    .content-column {
        padding: 0;
    }
    
    .content-wrapper {
        padding: 4rem 3rem 4rem 4rem;
        max-width: 600px;
        margin-left: auto;
    }
    
    .content-wrapper h2 {
        color: #0a2240;
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.1;
    }
    
    .intro-text {
        color: #555;
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    
    /* Approach Items Styling */
    .approach-item {
        margin-bottom: 1.5rem;
    }
    
    .approach-item h3 {
        color: #0a2240;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }
    
    .approach-item .number {
        font-weight: 700;
        color: #0a2240;
        margin-right: 0.5rem;
    }
    
    .approach-item p {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 1rem;
    }
    
    .divider {
        height: 1px;
        background-color: #e0e0e0;
        margin: 1.5rem 0;
    }
    
    /* Image Column Styling */
    .image-column {
        position: relative;
        overflow: hidden;
    }
    
    .image-container {
        width: 100%;
        height: 100%;
        clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
    }
    
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    /* Responsive Styles */
    @media (max-width: 991px) {
        .content-wrapper {
            padding: 3rem 2rem;
            max-width: 100%;
        }
        
        .content-wrapper h2 {
            font-size: 2.3rem;
        }
        
        .image-container {
            clip-path: none;
            height: 450px;
        }
    }
    
    @media (max-width: 767px) {
        .content-wrapper {
            padding: 2.5rem 1.5rem;
        }
        
        .content-wrapper h2 {
            font-size: 2rem;
        }
        
        .approach-item h3 {
            font-size: 1rem;
        }
        
        .image-container {
            height: 350px;
        }
    }
</style>