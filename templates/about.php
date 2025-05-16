<?php
// Initialize page variables
$pageTitle = "About Us | Biotech Company";
$metaDescription = "Learn about our biotech company focused on developing innovative monoclonal antibody therapies for autoimmune and inflammatory diseases.";
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
        }
    </style>
    

        <!-- About Us Section -->
        <section class="about-section">
            <h2 class="section-title">About us</h2>
            <div class="about-content">
                <div class="about-text">
                    <p class="feature-text">
                        We are a biotech company engaged in the discovery and development of monoclonal antibodies (mAbs) as next-generation treatments for autoimmune and other inflammatory diseases.
                    </p>
                    <p class="feature-text">
                        Our innovative monoclonal antibody (mAb) development approach focuses on targeting multiple disease areas where effective therapies are unavailable.
                    </p>
                </div>
                <div class="about-image">
                    <img src="./images/about-image.jpg" alt="Our laboratory facility with research equipment and scientists at work">
                </div>
            </div>
        </section>
        
        <!-- Mission Section -->
        <section class="mission-section">
            <h2 class="section-subtitle">Our Mission</h2>
            <p class="feature-text">
                To develop innovative monoclonal antibody therapies that target key immune pathways involved in autoimmune and gastrointestinal inflammatory diseases, addressing significant unmet medical needs.
            </p>
        </section>
        
        <!-- Vision Section -->
        <section class="vision-section">
            <h2 class="section-subtitle">Our Vision</h2>
            <p class="feature-text">
                To lead the next generation of precision immunology by developing transformative, science-driven therapies that redefine care and deliver lasting relief, renewed hope, and a healthier future for patients worldwide.
            </p>
        </section>
        
        <!-- Values Section -->
        <section class="values-section">
            <h2 class="section-subtitle">Our Values</h2>
            <p class="feature-text">
                We are driven by innovation to transform treatments, guided by a patient-centered approach to improve outcomes, and committed to excellence through the highest scientific standards. Our work is strengthened by collaboration, grounded in integrity, fueled by resilience, and inspired by a passion to deliver impactful healthcare solutions.
            </p>
        </section>
        
        <!-- Research Focus -->
        <section class="research-section">
            <h2 class="section-subtitle">Research Focus</h2>
            <p class="feature-text">
                Our research focuses on developing novel monoclonal antibodies that target specific immune pathways implicated in inflammatory diseases. By precisely targeting these pathways, our therapies aim to provide effective treatment options with fewer side effects than current treatments.
            </p>
            <p class="feature-text">
                Key areas of interest include:
            </p>
            <ul style="margin-left: 2rem; margin-top: 1rem; margin-bottom: 1.5rem;">
                <li class="feature-text">Autoimmune disorders (including rheumatoid arthritis, lupus, and multiple sclerosis)</li>
                <li class="feature-text">Inflammatory bowel diseases (Crohn's disease and ulcerative colitis)</li>
                <li class="feature-text">Inflammatory skin conditions (psoriasis and atopic dermatitis)</li>
                <li class="feature-text">Rare inflammatory disorders with limited treatment options</li>
            </ul>
        </section>
        
        <!-- Contact CTA -->
        <section class="contact-cta">
            <h2>Interested in Learning More?</h2>
            <p class="feature-text">Contact our team to discuss potential collaborations, investment opportunities, or career possibilities.</p>
            <a href="contact.php" class="cta-button">Get in Touch</a>
        </section>
   
    
    <!-- Footer -->