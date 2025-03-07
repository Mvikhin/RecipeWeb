<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;600&family=Lemon&family=Patua+One&family=Poppins:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/index.style.blade.css') }}">
    <title>Recipe Web: Lutong Pinoy!</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="wrapper">
            <div class="nav-container">
                <img src="{{ asset('img/Logo.png') }}" alt="">
                <div class="links">
                    <a href="">Menu</a>
                    <a href="">Lunch boxed</a>
                    <a href="">Platters</a>
                    <a href="">Specials</a>
                </div>
                <div class="search">
                    <input type="search" id="searchInput" placeholder="search foods" autocomplete="off">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <div id="searchSuggestions" class="search-suggestions"></div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Landing Page -->
    <section class="landingpage">
        <div class="content">
            <div class="heading" data-aos="fade-right" data-aos-duration="2000">
                <h3>Lutong Pinoy</h3>
                <h1>Kusina <br> ni Juan</h1>
                <button data-aos="fade-right" data-aos-duration="2000" data-aos-delay="00">Download Recipe</button>
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
                <h1 data-aos="fade-left" data-aos-duration="1000">About us</h1>
                <p data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">Welcome to our website, your ultimate guide to Filipino cuisine! We are passionate about sharing the rich flavors and traditions of the Philippines through authentic and easy-to-follow recipes. Whether you're a home cook looking to explore classic Filipino dishes or a food enthusiast eager to try something new, our recipe guide offers step-by-step instructions, cooking tips, and cultural insights. Join us on this delicious journey and discover the heart of Filipino cooking!</p>
            </div>
        </div>
    </section>

    <!-- Filipino Dish Ingredient Selector -->
    <section class="ingredient-selector">
        <div class="container mt-4">
            <h1 class="text-center" data-aos="fade-up" data-aos-duration="1000">Select Your Ingredients</h1>
            <div class="row row-equal-height">
                <div class="col-md-6">
                    <div class="card p-4 shadow-lg h-100">
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
                    <div class="card p-4 shadow-lg h-100">
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
        <div class="title"><h1 data-aos="fade-left" data-aos-duration="1000">Enjoy Some of the Most Beloved Filipino Dishes</h1></div>
        <div class="foods">
            <div class="card" data-aos="fade-up" data-aos-duration="1000">
                <img src="{{ asset('img/Adobo.png') }}" alt="Adobo">
                <div class="discription">
                    <h1>Adobo</h1>
                    <p>A classic Filipino dish made with meat marinated in vinegar, soy sauce, garlic, and spices. <br>
                    <strong>Health Benefits:</strong> Vinegar aids digestion, garlic supports heart health, and protein-rich meat helps build muscles.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('img/Sinigang.png') }}" alt="Sinigang">
                <div class="discription">
                    <h1>Sinigang</h1>
                    <p>A tangy and savory soup made with tamarind, vegetables, and meat or seafood. <br>
                    <strong>Health Benefits:</strong> Rich in vitamin C, fiber, and antioxidants, Sinigang boosts immunity and aids digestion.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <img src="{{ asset('img/Karekare.png') }}" alt="Kare-Kare">
                <div class="discription">
                    <h1>Kare-Kare</h1>
                    <p>A rich peanut stew with oxtail, tripe, and vegetables, often served with bagoong. <br>
                    <strong>Health Benefits:</strong> Peanuts provide healthy fats and protein, while vegetables supply fiber and vitamins.</p>
                </div>
            </div>
            <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <img src="{{ asset('img/Halohalo.png') }}" alt="Halo-Halo">
                <div class="discription">
                    <h1>Halo-Halo</h1>
                    <p>A colorful dessert with shaved ice, fruits, jellies, and milk. <br>
                    <strong>Health Benefits:</strong> Ube is rich in antioxidants, fruits provide vitamins, and dairy offers calcium.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/index.script.blade.js') }}"></script>

</body>
</html>
