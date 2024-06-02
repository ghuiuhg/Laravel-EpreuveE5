<!-- resources/views/AfficheStat.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistiques</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"> <!-- Ajout du fichier de style externe -->
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de Quizz</h5>
                        <p class="card-text"><?php echo e($quizCount[0]->NumberOfQuizzes); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nombre de Questions</h5>
                        <p class="card-text"><?php echo e($questionCount[0]->NumberOfQuestions); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\BTSSIO\AtelierS3S4\Laravel\Php - Laravel\laravel\resources\views/AfficheStat.blade.php ENDPATH**/ ?>