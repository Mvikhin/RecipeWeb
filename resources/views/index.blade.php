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
    <title>Kusina ni Juan - Home</title>
</head>
<body style="padding-top: 56px;">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Landing Page -->
    <section class="landingpage">
        <div class="content">
            <div class="heading" data-aos="fade-right" data-aos-duration="2000">
            <h3 style="font-weight: bold">Lutong Pinoy</h3>
            <h1 style="font-weight: bold">Kusina <br> ni Juan</h1>
            <button data-aos="fade-right" data-aos-duration="2000" data-aos-delay="00" onclick="window.location.href='{{ route('recipe.download') }}'">Download Recipe</button>
            </div>           
            <div class="image">
            <img src="{{ asset('img/main.png') }}" data-aos="zoom-in" data-aos-duration="2000">
        </div>
    </div>
</section>

<section class="aboutus">
    <div class="container">
        <img src="{{ asset('img/aboutus.png') }}" data-aos="zoom-in" data-aos-duration="1000">
        <div class="aboutus-content">
            <h1 data-aos="fade-left" data-aos-duration="1000" style="font-weight: bold">About us</h1>
            <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" style="font-weight: 300">Welcome to our website, your ultimate guide to Filipino cuisine! We are passionate about sharing the rich flavors and traditions of the Philippines through authentic and easy-to-follow recipes. Whether you're a home cook looking to explore classic Filipino dishes or a food enthusiast eager to try something new, our recipe guide offers step-by-step instructions, cooking tips, and cultural insights. Join us on this delicious journey and discover the heart of Filipino cooking!</p>
            </div>
        </div>
    </section>

    <!-- Filipino Dish Ingredient Selector -->
    <section class="ingredient-selector">
        <div class="container mt-4">
        <h1 class="text-center" data-aos="fade-down" data-aos-duration="1000" style="font-weight: bold">Select Your Ingredients</h1>
        <div class="row row-equal-height">
                <div class="col-md-6">
                <div class="card p-4 shadow-lg h-100" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="400">
                    <div class="d-flex flex-column h-100">
                        <h2 class="text-dark">Enter Ingredient</h2>
                        <div class="ingredient-input-container flex-grow-1">
                            <div class="search-box">
                                <input type="text" id="ingredientInput" class="form-control" placeholder="Enter an ingredient...">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <div id="ingredientSuggestions" class="search-suggestions"></div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-dark w-100 mt-auto" onclick="addIngredient()">Add Ingredient</button>
                    </div>
                    </div>
                </div>

                <div class="col-md-6">
                <div class="card p-4 shadow-lg h-100" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400"> 
                    <div class="d-flex flex-column h-100">
                        <h2 class="text-dark">Your Ingredients</h2>
                        <div class="ingredient-list-container flex-grow-1">
                        <ul class="list-group" id="ingredientList"></ul>
                        </div>
                        <button class="btn btn-dark w-100 mt-auto">Find Dish</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Sample foods -->
    <section class="details-foods">
<div class="title"><h1 data-aos="fade-left" data-aos-duration="1000" style="font-weight: bold">Enjoy Some of the Most Beloved Filipino Dishes</h1></div>
        <div class="foods">
    @foreach ($recipes as $recipe)
        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <a href="{{ route('recipe.show', ['slug' => $recipe->slug]) }}" class="recipe-card-link">
                <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}">
                <div class="discription">
                    <h1>{{ $recipe->title }}</h1>
                    <p style="font-weight: 300">{{ $recipe->description }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>
    </section>

<!-- Dev Profiles -->
<section>
    <div>
        <h1 class="text-center mb-4" data-aos="fade-left" data-aos-duration="1000" style="font-weight: bold">The Devs</h1>
        <div class="container"> 
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card"  data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset("img/John Kenneth De Guzman.jpg") }}" class="card-img-top" alt="John Kenneth De Guzman">
                        <div class="card-body">
                            <p class="card-text">John Kenneth De Guzman</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"  data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset("img/Gerald Conde.jpg") }}" class="card-img-top" alt="Gerald Conde">
                        <div class="card-body">
                            <p class="card-text">Reister Gerald Conde</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"  data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset("img/Elijah Valencia.jpg") }}" class="card-img-top" alt="Elijah Jette Valencia">
                        <div class="card-body">
                            <p class="card-text">Elijah Jette Valencia</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card"  data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset("img/Mbenj Delos Santos.jpg") }}" class="card-img-top" alt="Mbenj Azieh Delos Santos">
                        <div class="card-body">
                            <p class="card-text">Mbenj Azieh Delos Santos</p>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="aboutus-content" style="width: 60%; margin: 50px auto 0;">
        <h1 class="text-center mb-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200" style="font-weight: bold">Why this Recipe Web?</h1>
        <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400" style="color: black; font-size: 1.4rem; text-align: center; font-weight: 300">
            This innovative web application is developed by COM242 students from National University Dasmariñas. 
            Our mission is to revolutionize home cooking by providing an intelligent recipe recommendation system that helps users 
            discover Filipino dishes based on their available ingredients.
            <br><br>
            The platform combines traditional Filipino cuisine with modern technology, featuring dynamic search capabilities, 
            ingredient-based recipe matching, and detailed cooking instructions. Our goal is to make cooking more accessible 
            while reducing food waste by helping users maximize their available ingredients.
        </p>
    </div>
</section>

<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ asset('js/index.script.blade.js') }}"></script>

</body>
</html>
