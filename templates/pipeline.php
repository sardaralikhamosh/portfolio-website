<?php
// Initialize page variables
$pageTitle = "Science & Technology | Biotech Company";
$metaDescription = "At Elemental Biologics, we apply precision immunology to develop innovative monoclonal antibody (mAb) therapies. Our drug discovery platform combines scientific expertise with advanced technologies to address complex immune-driven diseases.";
?>

    <style>
        /* CSS Reset and Base Styles */
        /* Main Content Styles */
      
        
        /* About Section Styles */
        
        .section-title {
            font-size: 2.2rem;
            color: #1f2937;
            margin-bottom: 1rem;
            font-weight: bold;
            color: #1a2c41;
        }
        
        .about-content {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            align-items: center;
        }
        
        .about-text {
            flex: 1;
            min-width: 300px;
        }
        
        .about-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }
        
        .about-image {
            flex: 1;
            min-width: 300px;
            max-width: 600px;
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* Mission, Vision, Values Styles */
        .mission-section,
        .vision-section,
        .values-section {
            margin-bottom: 3rem;
        }
        
        .section-subtitle {
            font-size: 1.8rem;
            color: #1f2937;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        
        /* Team Section */
        .team-section {
            margin-bottom: 3rem;
        }
        
        .team-members {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
        }
        
        .team-member {
            flex: 1;
            min-width: 250px;
            max-width: 300px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 1.5rem;
            text-align: center;
        }
        
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }
        
        .team-member h3 {
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        
        .team-member p.position {
            color: #4b5563;
            font-style: italic;
            margin-bottom: 1rem;
        }
        
        /* Contact CTA Section */
        .contact-cta {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 2rem;
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .cta-button {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-weight: 500;
            margin-top: 1rem;
            transition: background-color 0.3s;
        }
        
        .cta-button:hover {
            background-color: #1d4ed8;
        }
        
        /* Footer Styles */
        footer {
            background-color: #1f2937;
            color: white;
            padding: 2rem 0;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            text-align: center;
        }
        
        .footer-text {
            opacity: 0.8;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .about-content {
                flex-direction: column-reverse;
            }
            
            .site-title {
                font-size: 2rem;
            }
            
            .site-description {
                font-size: 1rem;
            }
            
            .nav-container {
                flex-direction: column;
            }
            
            .menu {
                margin-top: 1rem;
                justify-content: center;
            }
            
            .menu li:first-child {
                margin-left: 0;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .section-subtitle {
                font-size: 1.5rem;
            }
             .key-point-box {
                flex: 0 0 48%;
    }
        }

    .custom-paragraph{
        max-width: 900px;
    }
    .custom-bg-col {
        background-color: #124170 !important;
}
.custom-bg-col p{
    color: #fff;
}
    </style>
    

        <!-- About Us Section -->
        <section class="about-section">
            <h3>Elemental Biologics has five advanced therapeutic programs currently in development.</h3>
        </section>
        <!-- section 1 starts -->
        <section class="about-section">
            <div class="about-content">
                <div class="row">
                    <div class="col-12 py-3">  <!-- py-3 adds 1rem (16px) padding top and bottom -->
                        <div class="w-100">  <!-- w-100 makes container full width -->
                            <img src="./images/pipeline-img.png" class="img-fluid" alt="Science Diagram"><br><br>
                            
                                <p class="mb-0 custom-paragraph">With a strategic focus on discovering mAbs targeting the key Interleukins (ILs) which regulate immune responses by mediating inflammation, immune cell activation, and tissue repair.</p>
                        </div>
                    </div>
                </div>             
            </div>
        </section>
<!-- section 2 -->
         <section class="about-section">
            <div class="about-content">
                <div class="row">
                    <div class="col-12 py-3">  <!-- py-3 adds 1rem (16px) padding top and bottom -->
                        <div class="w-100">  <!-- w-100 makes container full width -->
                            <h3>Our Targets Strategically Reflect:</h3><br>
                            <ul>
                                <li>
                                     <p class="mb-0 custom-paragraph">Assets being developed as <b>Best-in-Class/First-in-Class</b> mAbs for Targets that are centerpieces of cellular and biochemical processes underlying diseases of interest.</p>
                                </li>
                                <li>
                                     <p class="mb-0 custom-paragraph">Elemental Targets are involved in <b>multiple associated diseases</b> with largely <b>unmet medical needs</b>.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>             
            </div>
        </section>