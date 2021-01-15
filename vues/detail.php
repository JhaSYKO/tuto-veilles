<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Veille Technologique</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../Styles/clean-blog.min.css" rel="stylesheet">
</head>
  <body>
  <div class="container-fluid">
    <div class="row">
    <div class="col-12">
    <?php include '../vues/navigation.php' ?>
    </div>
    </div>
    <div class="iconAction">
    <div class="d-flex flex-row-reverse">
        <div class="p-2 text-warning"><i class="fas fa-edit"></i></div>
        <div class="p-2 text-danger"><i class="fas fa-trash"></i></div>
    </div>
    </div>
    <div class="row" id="contentDetail">
    </div>
    <div class="row">
      <?php include '../vues/footer.php' ?>
    </div>
  </div>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../models/services/airtable.browser.js"></script>
    <script src="../models/services/airtable-service.js"></script>
    <script src="../components/table.js"></script>
    <script src="../components/detail.js"></script>

  </body>
</html>