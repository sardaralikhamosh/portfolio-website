<div class="page-header-strip">
        <div class="container">
            <div class="page-title">
                Pipeline
            </div>
            <div class="breadcrumb">
                <a href="/index.php">Home</a> / <span>pipeline</span>
            </div>
        </div>
    </div>

<section class="pipeline-section" id="pipeline">
    <div class="container">
        <h2 class="pipeline-title">Pipeline</h2>
        <p class="pipeline-subtitle">Elemental Biologics has five advanced therapeutic programs currently in development.</p>
        
       <section class="pipeline-image">
       	<img src="./images/pipeline-img.png">
       </section>
        
        <div class="pipeline-targets-section">
            <h3 class="targets-title">Our Targets Strategically Reflect:</h3>
            <ul class="targets-list">
                <li>
                    Assets being developed as <span class="highlight">Best-in-Class/First-in-Class</span> mAbs for Targets that are centerpieces of cellular and biochemical processes underlying diseases of interest.
                </li>
                <li>
                    Elemental Targets are involved in <span class="highlight">multiple associated diseases</span> with largely <span class="highlight">unmet medical needs.</span>
                </li>
            </ul>
        </div>
    </div>
</section>

<style>
.pipeline-section {
    padding: 60px 0;
    font-family: Arial, sans-serif;
    background-color: #fff;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
}

.pipeline-title {
    font-size: 36px;
    color: #000;
    margin-bottom: 10px;
    font-weight: bold;
}

.pipeline-subtitle {
    font-size: 18px;
    color: #004494;
    margin-bottom: 30px;
}

.header-main {
    background-color: #124170;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    width: 100%;
    text-transform: uppercase;
}

.table-row {
    display: flex;
    width: 100%;
}

.table-subheader {
    background-color: #1f5ea8;
    color: white;
}

.subheader-cell {
    padding: 10px 5px;
    text-align: center;
    font-weight: bold;
    font-size: 14px;
    border: 1px solid #fff;
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.subheader-cell:first-child {
    flex: 1.5;
}

.cell {
    border: 1px solid #fff;
    padding: 10px 5px;
    text-align: center;
    flex: 1;
    background-color: #1f5ea8;
    position: relative;
}

.cell.indications {
    flex: 1.5;
    font-size: 14px;
    color: white;
    text-align: center;
    background-color: #1f5ea8;
    display: flex;
    align-items: center;
    justify-content: center;
}

.cell.phase {
    background-color: #1f5ea8;
    position: relative;
}

.cell.phase-empty {
    background-color: #1f5ea8;
}

.arrow-box {
    background-color: #1f5ea8;
    color: white;
    font-weight: bold;
    padding: 5px;
    position: relative;
    text-align: center;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.arrow-box:after {
    content: '';
    position: absolute;
    right: -15px;
    top: 0;
    width: 0;
    height: 0;
    border-top: 24px solid transparent;
    border-bottom: 24px solid transparent;
    border-left: 15px solid #1f5ea8;
}

.pipeline-image {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.pipeline-image img {
    max-width: 100%;
    height: auto;
}

.pipeline-targets-section {
    margin-top: 40px;
}

.targets-title {
    font-size: 20px;
    color: #000;
    font-weight: bold;
    margin-bottom: 20px;
    text-decoration: underline;
}

.targets-list {
    list-style-type: none;
    padding: 0;
}

.targets-list li {
    margin-bottom: 20px;
    position: relative;
    padding-left: 20px;
    color: #333;
    font-size: 16px;
    line-height: 1.5;
}

.targets-list li:before {
    content: "•";
    color: #1f5ea8;
    position: absolute;
    left: 0;
    font-size: 20px;
}

.highlight {
    font-weight: bold;
    text-decoration: underline;
}

/* Responsive styles */
@media (max-width: 992px) {
    
    .pipeline-image {
        width: 100%;
        max-width: 300px;
        margin: 30px auto 0;
    }
    
    .subheader-cell {
        font-size: 12px;
        padding: 5px 2px;
    }
    
    .cell.indications {
        font-size: 12px;
    }
    
    .arrow-box:after {
        border-top: 20px solid transparent;
        border-bottom: 20px solid transparent;
    }
}

@media (max-width: 768px) {
    .pipeline-title {
        font-size: 28px;
    }
    
    .pipeline-subtitle {
        font-size: 16px;
    }
    
    .header-main {
        font-size: 16px;
        padding: 10px;
    }
    
    .subheader-cell {
        font-size: 10px;
        padding: 5px 2px;
    }
    
    .cell.indications {
        font-size: 10px;
    }
    
    .arrow-box {
        font-size: 12px;
    }
    
    .arrow-box:after {
        border-top: 18px solid transparent;
        border-bottom: 18px solid transparent;
        border-left: 10px solid #1f5ea8;
        right: -10px;
    }
    
    .targets-title {
        font-size: 18px;
    }
    
    .targets-list li {
        font-size: 14px;
    }
}

@media (max-width: 576px) {
    .container {
        width: 95%;
    }
    
    .pipeline-title {
        font-size: 24px;
    }
    
    .header-main {
        font-size: 14px;
    }
    
    /* For mobile devices, make table scrollable horizontally */
    .pipeline-table-container {
        overflow-x: auto;
    }
    
    .pipeline-table {
        min-width: 500px;
    }
    
    .targets-list li {
        padding-left: 15px;
    }
}
</style>