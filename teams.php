<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enomondia - Therapeutic Antibody Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
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
                Teams
            </div>
            <div class="breadcrumb">
                <a href="/index.php">Home</a> / <span>teams</span>
            </div>
        </div>
    </div>
        <section class="container">
            <?php include('templates/teams.php'); ?>
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
     