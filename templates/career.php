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
            <h3>Company Culture</h3><br>
            <div class="about-content">
                <div class="about-text">
                    <ul>
                        <li><p class="feature-text">
                        <b>Collaboration:</b> We value teamwork and diverse perspectives to drive innovation.
                    </p></li>
                    <li>
                    <p>
                        <b class="feature-text">Integrity:</b> We uphold transparency and ethical practices in all actions.
                    </p></li>
                    <li>
                    <p>
                        <b>Continuous Learning:</b> We prioritize ongoing education and skill development.
                    </p></li>
                    <li>
                    <p class="feature-text">
                        <b>Resilience:</b> We embrace challenges and adapt to change.
                    </p>
                    </li>
                    <li>
                    <p class="feature-text">
                        <b>Supportive Environment:</b> We foster a workplace where everyone can thrive. Every team member's input and ideas are encouraged.
                    </p></li>
                    </ul>
                </div>
            </div>
        </section>
         <section class="about-section">
            <h3>Job listings</h3><br>
            <div class="about-content">
                <div class="about-text">
                    <p class="feature-text">
                        At Elemental Biologics, we're driven by a passion for science and a mission to transform care. We're always looking for talented individuals to join our team. Explore our current opportunities below to learn more and apply.
                    </p>
                </div>
            </div>
        </section>

        