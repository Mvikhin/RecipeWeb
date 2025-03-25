<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/index.style.blade.css') }}">
    <title>Download Recipe</title>
</head>
<body>
    <!-- Navbar -->
    @include('partials.navbar')
    
    <section class="download-page">
        <div class="container text-center mt-5">
            <h1 class="mb-4" style="font-weight: bold">Download Your Favorite Recipes</h1>
            <p style="font-weight: 300">Click the button below to download a collection of our best Filipino recipes.</p>
            <a href="{{ asset('recipes/filipino_recipes.pdf') }}" class="btn btn-dark mt-3">Download Now</a>
        </div>
    </section>
</body>
</html>
