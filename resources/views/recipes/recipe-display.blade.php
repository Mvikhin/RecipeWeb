<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $recipe->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/recipe-display.blade.css') }}">
    <style>
        /* Layout adjustment */
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }

        .image-container {
            flex: 1;
            max-width: 40%;
            text-align: center;
        }

        .image-container img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.2);
        }

        .content {
            flex: 1;
            max-width: 60%;
            padding: 20px;
            text-align: left;
        }

        h1 {
            text-align: center;
            width: 100%;
            margin-bottom: 20px;
        }

        ul, ol {
            padding-left: 20px;
        }

        .caution {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            color: #856404;
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }

            .image-container,
            .content {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>{{ $recipe->title }}</h1>
        <div class="image-container">
            @if($recipe->image)
                <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}">
            @endif
        </div>
        <div class="content">
            <h2>About the Dish</h2>
            <p>{{ $recipe->description }}</p>
            
            <h2>Ingredients</h2>
            <ul>
                @foreach ($ingredients as $ingredient)
                <li>{{ $ingredient->quantity }} {{ $ingredient->unit }} {{ $ingredient->name }}</li>
                @endforeach
            </ul>

            <h2>Instructions</h2>
            <ol>
                @foreach ($steps as $step)
                    <li>{{ $step->step_description }}</li>
                @endforeach
            </ol>

            <!-- Caution Section -->
            @if(!empty($recipe->caution))
                <div class="caution">
                    <h3>Caution</h3>
                    <p style="color: red;">{{ $recipe->caution }}</p>
                </div>
            @endif

            <a href="{{ route('index') }}">Back to Home</a>
        </div>
    </div>

</body>
</html>
