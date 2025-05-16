<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enomondia - Therapeutic Antibody Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- header -->
<header>
    <?php include "header.php"; ?>
</header>

<!-- strip -->
<div class="page-header-strip">
        <div class="container">
            <div class="page-title">
                Contact
            </div>
            <div class="breadcrumb">
                <a href="/index.php">Home</a> / <span>contact</span>
            </div>
        </div>
    </div>

<!-- Main Content -->
    <main class="container-fluid margin-top-5">
        <section class="container">
            <?php include('templates/contact.php'); ?>
        </section>
    </main>

    <!-- Footer -->
    <footer class=" container-fluid bg-light">
     <?php include "footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>