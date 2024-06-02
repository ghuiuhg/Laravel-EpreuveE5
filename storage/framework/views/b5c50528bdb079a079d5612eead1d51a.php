<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Import File !</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="container">
        <form method="POST" action="<?php echo e(route("upload.post")); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div class="mb-3">
                <br><br>
                <label for="formFile" class="form-label">Choose a CSV file to import</label>
                <input class="form-control" name="file" type="file" id="formFile" accept=".csv">
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
  </body>
</html><?php /**PATH D:\BTSSIO\AtelierS3S4\Laravel\Php - Laravel\laravel\resources\views/fichierView.blade.php ENDPATH**/ ?>