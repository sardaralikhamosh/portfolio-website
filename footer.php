<!-- Footer Section -->
<footer class="text-white py-5">
    <div class="container">
        <div class="row">
            <!-- Logo and Contact Information -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <div class="mb-4">
                    <a href="index.php">
                        <img src="images/logo.png" alt="Elemental Biologics Logo" class="img-fluid" style="max-width: 200px;">
                    </a>
                </div>
                <div class="contact-info">
                    <p><img src="images/call.svg" alt="Phone" class="icon me-2"> (760) 814-2087</p>
                    <p><img src="images/email.svg" alt="Email" class="icon me-2"> contact@elementalbiologics.com</p>
                    <p><img src="images/location.svg" alt="Location" class="icon me-2"> Elemental Biologics<br>
                        <span class="ms-4">6084 Corte del Cedro, Suite 100</span><br>
                        <span class="ms-4">Carlsbad, CA 92011</span>
                    </p>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-4">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Our Services</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Mission</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Pharmacore Market Tracker</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Pharmaceutical Market Directory</a>
                    </li>
                </ul>
            </div>

            <!-- Useful Links Column -->
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h5 class="text-uppercase mb-4">Useful Links</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">New Market Analysis</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Process Development</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Drug Certification</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Market Development</a>
                    </li>
                </ul>
            </div>

            <!-- Preparation Tips Column -->
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase mb-4">Preparation Tips</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Before Your Blood Test</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">What to Expect During the Draw</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">After Your Blood Test</a>
                    </li>
                    <li class="mb-2">
                        <a href="/about" class="text-white text-decoration-none hover-underline">Where do I Go for a Blood Draw?</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Social Media Icons -->
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <ul class="list-inline social-icons">
                    <li class="list-inline-item">
                        <a href="/about" class="text-white">
                            <div class="social-icon-circle">
                                <img src="images/facebook-icon.svg" alt="Facebook" class="social-icon">
                            </div>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/about" class="text-white">
                            <div class="social-icon-circle">
                                <img src="images/x-icon.svg" alt="X" class="social-icon">
                            </div>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/about" class="text-white">
                            <div class="social-icon-circle">
                                <img src="images/youtube-icon.svg" alt="YouTube" class="social-icon">
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-4">
            <div class="col text-center">
                <p>&copy; <?php echo date('Y'); ?> Elemental. All rights reserved</p>
            </div>
        </div>
    </div>
</footer>

<!-- Custom CSS for footer -->
<style>
    footer {
        background-color: #02204A !important; /* Exact dark blue color as specified */
    }
    
    .hover-underline:hover {
        text-decoration: underline !important;
    }
    
    .social-icon-circle {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 2px solid white;
        transition: all 0.3s ease;
    }
    
    .social-icon-circle:hover {
        background-color: rgba(255, 255, 255, 0.2);
    }
    
    .icon {
        width: 18px;
        height: 18px;
        display: inline-block;
        vertical-align: middle;
    }
    
    .social-icon {
        width: 20px;
        height: 20px;
    }
    
    @media (max-width: 767px) {
        .col-md-6 {
            text-align: center;
        }
        
        .contact-info {
            margin-bottom: 2rem;
        }
    }
</style>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>