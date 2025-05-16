<section class="contact-section margin-top-5" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info">
                    <h2>Contact us</h2>
                    
                    <div class="contact-item">
                        <div class="icon-wrapper">
                            <img src="./images/letter-i.svg" alt="Info Icon" class="contact-icon">
                        </div>
                        <div class="contact-details">
                            <h3>Elemental Biologics</h3>
                            <p><a href="https://www.linkedin.com">LinkedIn link</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="icon-wrapper">
                            <img src="./images/call.svg" alt="Telephone Icon" class="contact-icon">
                        </div>
                        <div class="contact-details">
                            <h3>Telephone</h3>
                            <p><a href="tel:+17608142087">(760) 814-2087</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="icon-wrapper">
                            <img src="./images/email.svg" alt="Email Icon" class="contact-icon">
                        </div>
                        <div class="contact-details">
                            <h3>E-mail</h3>
                            <p><a href="mailto:contact@elementalbiologics.com">contact@elementalbiologics.com</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="icon-wrapper">
                            <img src="./images/location.svg" alt="Location Icon" class="contact-icon">
                        </div>
                        <div class="contact-details">
                            <h3>Address</h3>
                            <p>Elemental Biologics<br>
                            6084 Corte del Cedro, Suite 100<br>
                            Carlsbad, CA 92011</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="contact-image-wrapper">
                    <img src="./images/contact-image.png" alt="Elemental Biologics" class="contact-image">
                   <!--  <div class="logo-overlay">
                        <img src="./images/logo.png" alt="Elemental Biologics Logo" class="overlay-logo">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.contact-section {
    padding: 80px 0;
    background-color: #ffffff;
    overflow: hidden;
    position: relative;
}

.contact-section h2 {
    font-size: 38px;
    margin-bottom: 40px;
    font-weight: 700;
    color: #000;
    text-transform: uppercase;
}

.contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
}

.icon-wrapper {
    width: 80px;
    height: 80px;
    background-color: #004494;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 20px;
    flex-shrink: 0;
}

.contact-icon {
    width: 40px;
    height: 40px;
    filter: brightness(0) invert(1);
}

.contact-details h3 {
    font-size: 28px;
    color: #004494;
    margin-bottom: 5px;
    font-weight: 500;
}

.contact-details p {
    font-size: 16px;
    color: #333;
    margin: 0;
}

.contact-details a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-details a:hover {
    color: #004494;
}

.contact-image-wrapper {
    position: relative;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    clip-path: polygon(15% 0, 100% 0%, 100% 100%, 0% 100%);
    overflow: hidden;
}

.contact-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.logo-overlay {
    position: absolute;
    bottom: 30px;
    right: 30px;
    max-width: 200px;
}

.overlay-logo {
    width: 100%;
    height: auto;
}

@media (max-width: 991px) {
    .contact-image-wrapper {
        clip-path: none;
        margin-top: 40px;
        height: 400px;
    }
    
    .logo-overlay {
        right: 15px;
        bottom: 15px;
        max-width: 150px;
    }
}

@media (max-width: 767px) {
    .contact-section h2 {
        font-size: 32px;
    }
    
    .contact-details h3 {
        font-size: 22px;
    }
    
    .icon-wrapper {
        width: 60px;
        height: 60px;
    }
    
    .contact-icon {
        width: 30px;
        height: 30px;
    }
}
</style>