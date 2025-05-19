<?php
/**
 * Science & Technology Section Template
 * 
 * This template displays the "Our Science & Technology" section
 * with three feature boxes highlighting key aspects of Elemental Biologics technology
 */
?>

<section class="science-technology-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Our Science & Technology</h2>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <!-- Feature Box 1 -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="feature-box text-center">
                    <div class="icon-wrapper">
                        <img src="images/icon-1.svg" alt="Antibody Platform Icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">A Unique And Transformative<br>Therapeutic Antibody<br>Platform</h3>
                    <p class="feature-text">
                        Elemental is engaged in the discovery and development of mAbs as next-generation treatments for multiple autoimmune & gastrointestinal inflammatory diseases.
                    </p>
                </div>
            </div>
            
            <!-- Feature Box 2 -->
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="feature-box text-center">
                    <div class="icon-wrapper">
                        <img src="images/icon-2.svg" alt="Immune Pathways Icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">Transforming Immune<br>Pathways Into Multi-Disease<br>Solutions</h3>
                    <p class="feature-text">
                        Elemental Biologics creates innovative treatments that target shared immune pathways to address multiple diseases with unmet medical needs, helping more patients while reducing risk and improving development efficiency.
                    </p>
                </div>
            </div>
            
            <!-- Feature Box 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-box text-center">
                    <div class="icon-wrapper">
                        <img src="images/icon-3.svg" alt="Pipeline Icon" class="feature-icon">
                    </div>
                    <h3 class="feature-title">Extensive Pipeline Of Assets<br>Supported By Strong Data</h3>
                    <p class="feature-text">
                        Increasingly diversified pipeline of 5 advanced program assets with strategically commercially viable targets demonstrating the strength of our pre-clinical mAb discovery and development platform.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    section.container-fluid{
        padding: 0;
    }
    .science-technology-section {
        background-color: #f8f9fa;
        padding: 80px 0;
        position: relative;
        overflow: hidden;
    }
    
    /* Abstract squares in background */
    .science-technology-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            linear-gradient(rgba(248, 249, 250, 0.9), rgba(248, 249, 250, 0.9)),
            url('images/squares-pattern.png');
        background-size: cover;
        z-index: 0;
    }
    
    .science-technology-section .container {
        position: relative;
        z-index: 1;
    }
    
    .section-title {
        color: #0a2240;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 3rem;
    }
    
    .feature-box {
        padding: 1.5rem;
        height: 100%;
    }
    
    .icon-wrapper {
        display: inline-block;
        width: 120px;
        height: 120px;
        margin-bottom: 1.5rem;
    }
    
    .feature-icon {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    
    .feature-title {
        color: #0a2240;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 1rem;
        line-height: 1.4;
    }
    
    .feature-text {
        color: #666;
        font-size: 0.95rem;
        line-height: 1.6;
    }
    
    @media (max-width: 992px) {
        .section-title {
            font-size: 2rem;
        }
        
        .feature-box {
            margin-bottom: 2rem;
        }
    }
    
    @media (max-width: 768px) {
        .section-title {
            font-size: 1.8rem;
        }
        
        .icon-wrapper {
            width: 100px;
            height: 100px;
        }
        
        .feature-title {
            font-size: 1.1rem;
        }
    }
</style>