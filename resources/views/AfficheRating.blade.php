<!-- resources/views/afficheRating.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Ratings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Quiz Ratings</h1>

        <div class="row">
            @foreach ($quizRatings as $quiz)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $quiz->Content }}</h5>
                            <p class="card-text">{{ $quiz->Description }}</p>

                            <!-- Afficher la note moyenne -->
                            @if ($quiz->average_rating)
                                <p>Note moyenne : {{ $quiz->average_rating }}</p>
                            @else
                                <p>Aucune note pour le moment.</p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>Joueur</th>
                                <th>Note</th>
                                <th>Quiz</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach ($playerRatings as $playerRating)
                            <tr>
                                <td>{{ $playerRating->PlayerName }}</td>
                                <td>{{ $playerRating->rating }}</td>
                                <td>{{ $playerRating->QuizContent }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
