<!DOCTYPE html>
<html lang="en">
  <!-- Navigation -->
  <?php include 'vues/header.php' ?>
  <body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <?php include 'vues/navigation.php' ?>
      </div>
    </div>
    <div class="row mb-4 mt-4">
      <div class="col-4">
        <div class="btn btn-success" onClick="redirectTo('vues/formCreate.php')">Ajouter</div>
      </div>
    </div>
    <div class="row">
        <div class="card col-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Date</th>
                    <th scope="col">Sujet</th>
                    <th scope="col">Synthèse</th>
                    <th scope="col">Commentaire</th>
                    <th scope="col">Source</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="content">
            </tbody>
        </table>
        </div>
    </div>
    <div class="row">
      <?php include 'vues/footer.php' ?>
    </div>
  </div>

  <?php include 'vues/imports.php' ?>
  <script src="components/table.js"></script>
  <script src="components/script.js"></script>

  </body>
</html>