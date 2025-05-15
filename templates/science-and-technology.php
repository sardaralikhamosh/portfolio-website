<section class="science-technology-section">
    <!-- Top navigation strip -->
    <div class="page-header-strip">
        <div class="container">
            <div class="page-title">
                Science & Technology
            </div>
            <div class="breadcrumb">
                <a href="/index.php">Home</a> / <span>Science & Technology</span>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Introduction Section -->
        <div class="intro-section">
            <h1>At Elemental Biologics, we apply precision immunology to develop innovative monoclonal antibody (mAb) therapies. Our drug discovery platform combines scientific expertise with advanced technologies to address complex immune-driven diseases.</h1>
        </div>

        <!-- Drug Discovery Process -->
        <div class="discovery-process">
            <div class="process-item">
                <div class="process-header">
                    <h2>1. Targeted Discovery</h2>
                </div>
                <div class="process-content">
                    <p>We identify key immune pathways involved in multiple diseases, enabling cross-indication therapies with a single antibody.</p>
                </div>
            </div>
            
            <div class="process-item">
                <div class="process-header">
                    <h2>2. Advanced Antibody Engineering</h2>
                </div>
                <div class="process-content">
                    <p>We use state-of-the-art techniques to design and optimize mAbs for maximum precision, potency, and safety.</p>
                </div>
            </div>
            
            <div class="process-item">
                <div class="process-header">
                    <h2>3. Translational Development</h2>
                </div>
                <div class="process-content">
                    <p>We advance promising candidates through rigorous preclinical models ensuring strong efficacy and safety, advancing candidates with real-world impact.</p>
                </div>
            </div>
        </div>

        <!-- Main Image/Diagram Section -->
        <div class="science-diagram">
            <img src="./images/science-img1.png" alt="Elemental Biologics Science Diagram" class="img-fluid">
        </div>

        <!-- Strategic Focus -->
        <div class="strategic-focus">
            <p>With a strategic focus on discovering mAbs targeting the key Interleukins (ILs) which regulate immune responses by mediating inflammation, immune cell activation, and tissue repair.</p>
        </div>

        <!-- Second Diagram -->
        <div class="science-diagram">
            <img src="./images/science-img2.png" alt="Interleukins and Autoimmune Diseases" class="img-fluid">
        </div>

        <!-- Key Points Boxes -->
        <div class="key-points">
            <div class="key-point-box">
                <div class="key-point-content">
                    <p>Blocking or Enhancing IL signaling is a key strategy in treating inflammatory & autoimmune diseases</p>
                </div>
            </div>
            
            <div class="key-point-box">
                <div class="key-point-content">
                    <p>Over 60% of marketed monoclonal antibody (mAb) therapies for IBD and autoimmune diseases target ILs or their receptors</p>
                </div>
            </div>
            
            <div class="key-point-box">
                <div class="key-point-content">
                    <p>Crohn's and Ulcerative Colitis (IBD Market: $22.8Bn) represent the primary target designations for Elemental's pipeline of preclinical drugs</p>
                </div>
            </div>
        </div>

        <!-- Additional Images (Can be used as needed) -->
        <div class="science-diagram">
            <img src="./images/science-and-technology-3.png" class="img-fluid">
        </div>
    </div>
</section>

<style>
/* Base Styles */
.science-technology-section {
    font-family: Arial, sans-serif;
    color: #333;
    line-height: 1.6;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

img.img-fluid {
    max-width: 100%;
    height: auto;
    display: block;
}

/* Page Header Strip */
.page-header-strip {
    background-color: #124170;
    color: white;
    padding: 15px 0;
    margin-bottom: 40px;
}

.page-header-strip .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.breadcrumb {
    font-size: 14px;
}

.breadcrumb a {
    color: white;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.page-title {
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
}

/* Introduction Section */
.intro-section {
    margin-bottom: 50px;
}

.intro-section h1 {
    font-size: 24px;
    line-height: 1.5;
    font-weight: normal;
    color: #124170;
}

/* Discovery Process */
.discovery-process {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-bottom: 40px;
}

.process-item {
    flex: 0 0 30%;
    margin-bottom: 30px;
}

.process-header h2 {
    font-size: 22px;
    color: #124170;
    margin-bottom: 15px;
    font-weight: bold;
}

.process-content p {
    font-size: 16px;
    color: #333;
}

/* Science Diagram */
.science-diagram {
    margin: 40px 0;
    text-align: center;
}

/* Strategic Focus */
.strategic-focus {
    margin: 40px 0;
}

.strategic-focus p {
    font-size: 18px;
    color: #124170;
    line-height: 1.6;
}

/* Key Points Boxes */
.key-points {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 50px 0;
}

.key-point-box {
    flex: 0 0 32%;
    background-color: #124170;
    color: white;
    padding: 25px 20px;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    min-height: 150px;
}

.key-point-content p {
    font-size: 16px;
    margin: 0;
}

/* Additional Images */
.additional-images {
    margin: 50px 0;
}

.image-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.image-col {
    flex: 0 0 32%;
    margin-bottom: 20px;
}

/* Footer Section */
.section-footer {
    margin: 40px 0 20px;
    text-align: right;
    font-size: 12px;
    color: #666;
}

/* Responsive Styles */
@media (max-width: 992px) {
    .process-item {
        flex: 0 0 48%;
    }
    
    .key-point-box {
        flex: 0 0 48%;
    }
    
    .image-col {
        flex: 0 0 48%;
    }
}

@media (max-width: 768px) {
    .page-header-strip .container {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .page-title {
        margin-top: 5px;
    }
    
    .intro-section h1 {
        font-size: 20px;
    }
    
    .process-item {
        flex: 0 0 100%;
    }
    
    .key-point-box {
        flex: 0 0 100%;
    }
    
    .image-col {
        flex: 0 0 100%;
    }
}

@media (max-width: 576px) {
    .container {
        width: 95%;
        padding: 0 10px;
    }
    
    .intro-section h1 {
        font-size: 18px;
    }
    
    .process-header h2 {
        font-size: 20px;
    }
    
    .strategic-focus p {
        font-size: 16px;
    }
    
    .key-point-box {
        padding: 20px 15px;
    }
}
</style>