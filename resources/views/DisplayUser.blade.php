<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Players</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .player-card {
            margin: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .player-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .player-name {
            font-size: 1.2em;
            font-weight: bold;
        }
        .player-id {
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h1>List of Players</h1>
            </div>
        </div>
        <div class="row">
            @foreach($quizPlayer as $player)
                <div class="col-md-4">
                    <div class="player-card">
                        <img src="{{ $player->PhotoProfil }}" alt="Profile Photo" class="player-photo">
                        <div class="player-name">{{ $player->Name }}</div>
                        <div class="player-id">ID: {{ $player->Id }}</div>

                        <!-- Form to update profile photo -->
                        <form action="{{ route('updateProfilePhoto', $player->Id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="photo_url">Update Profile Photo URL</label>
                                <input type="url" class="form-control" name="photo_url" id="photo_url" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Photo</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
