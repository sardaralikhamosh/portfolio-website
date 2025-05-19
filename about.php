<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enomondia - Therapeutic Antibody Platform</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- header -->
<section>
    <?php include "header.php"; ?>
</section>

<!-- Main Content -->
    <main class="container-fluid">
        <div class="page-header-strip">
        <div class="container">
            <div class="page-title">
                About Us
            </div>
            <div class="breadcrumb">
                <a href="/index.php">Home</a> / <span>about-us</span>
            </div>
        </div>
    </div>
        <section class="container">
            <?php include('templates/about.php'); ?>
        </section>
    </main>

    <!-- Footer -->
    <footer class=" container-fluid bg-light">
     <?php include "footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
    main.container-fluid {
    padding: 0 !important;
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

</style>