<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .user-card {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border: 2px solid #000;
            border-radius: 50%;
        }

        .empty-profile {
            width: 100px;
            height: 100px;
            background-color: #000;
            border: 2px solid #000;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <?php $__currentLoopData = $myUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4 user-card">
                <div class="card">
                    <div class="card-body">
                        <?php if($user->PhotoProfil): ?>
                            <!-- Affiche la photo de profil si elle existe -->
                            <img src="<?php echo e($user->PhotoProfil); ?>" alt="<?php echo e($user->Name); ?>" class="img-fluid profile-image mb-3">
                        <?php else: ?>
                            <!-- Affiche un cercle vide si aucune photo de profil -->
                            <div class="empty-profile"></div>
                        <?php endif; ?>
                        <h5 class="card-title"><?php echo e($user->Name); ?></h5>
                        <form action="<?php echo e(route('update.profile', ['user' => $user->Id])); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <!-- Champ pour entrer la nouvelle URL de l'image -->
                            <label for="profile_image">Nouvelle URL de l'image :</label>
                            <input type="text" name="profile_image" id="profile_image" placeholder="Entrez l'URL de l'image">
                            <!-- Bouton de soumission du formulaire -->
                            <button type="submit" class="btn btn-primary">Modifier Photo</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
        </div>
    </div>

</body>
</html>
<?php /**PATH D:\BTSSIO\PartielFicheRéalisation\LaravelVitagora\Laravel\Php - Laravel\laravel\resources\views/AfficheUser.blade.php ENDPATH**/ ?>