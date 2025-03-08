<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/index.style.blade.css') }}">
    <title>food website</title>
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

    <!-- profiles -->
        <div>
        <h1 class="text-center mb-4">Meet the Devs</h1>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://scontent.fmnl8-2.fna.fbcdn.net/v/t39.30808-6/481205220_2445158115824408_113200709728376558_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=B7ioz-HT9LsQ7kNvgFLF5BD&_nc_oc=AdgEfCLVmak0FPmfWbO08UuWXiAeXgpI0Wq84TjFSMaFkuNHfAZ94T-oV2hE5b3udPk&_nc_zt=23&_nc_ht=scontent.fmnl8-2.fna&_nc_gid=Aowv2OAMAjTfNWb14tMShuj&oh=00_AYHHBPW3hMCcGmqAoF1SgeBD99yEwd7zRfkcp2rm2mWjrA&oe=67D1D009" class="card-img-top" alt="John Kenneth De Guzman">
                        <div class="card-body">
                            <p class="card-text">John Kenneth De Guzman</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://scontent.fmnl8-2.fna.fbcdn.net/v/t39.30808-6/477447071_1164311361854018_4026112173144777272_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=Xu9LgctolQEQ7kNvgHn9mh2&_nc_oc=AdiRH8dTr8_F1VR2XFjacn5igBSiuHIctN_1IZg1PCMtpTcvhAqjVKLQ0vJjUeaQmNQ&_nc_zt=23&_nc_ht=scontent.fmnl8-2.fna&_nc_gid=APC2Js31dOF07OMmRCUMGmB&oh=00_AYGUQjq87lIyfqA-OH7jayWKxyfEW2JVxI-P7lU9HJ1RBA&oe=67D1B104" class="card-img-top" alt="Gerald Conde">
                        <div class="card-body">
                            <p class="card-text">Gerald Conde</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://scontent.fmnl8-1.fna.fbcdn.net/v/t39.30808-1/480291685_3875003362829280_3152699232265031440_n.jpg?stp=c0.0.720.720a_dst-jpg_s200x200_tt6&_nc_cat=108&ccb=1-7&_nc_sid=e99d92&_nc_ohc=9r2W5OKy768Q7kNvgGnlZ9H&_nc_oc=Adh0RgoG3i-gqVxRw9aycZ0we5HrXx757ou7jWgPYvsPRa7N7OtEswy_EHpPDXxUBsI&_nc_zt=24&_nc_ht=scontent.fmnl8-1.fna&_nc_gid=AZE7_0tM20_kkuktAR6GHhV&oh=00_AYFV6PvuayzvTs4Byh3zA3-afcKzXBvyhbm9G9AYoxaFhg&oe=67D1C7DB" class="card-img-top" alt="Elijah Jette Valencia">
                        <div class="card-body">
                            <p class="card-text">Elijah Jette Valencia</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="https://scontent.fmnl8-6.fna.fbcdn.net/v/t39.30808-1/471192219_4040552886173258_8649644729753738593_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=100&ccb=1-7&_nc_sid=e99d92&_nc_ohc=j3ELo1EjdeAQ7kNvgE3zFt3&_nc_oc=AdisJhUeK0g_TRZZGp0riB7w4nyCNmsWAsMf6Wb4bLQzaObaNEacyjqLh7Fkf27wNm0&_nc_zt=24&_nc_ht=scontent.fmnl8-6.fna&_nc_gid=AxKJaN38VV9uSZJENCak_pg&oh=00_AYGBybQYTi5DSV2Bc4lx2hyeWPAnLI4qZoSTTYJV5xwM0A&oe=67D1ADDC" class="card-img-top" alt="Mbenj Azieh Delos Santos">
                        <div class="card-body">
                            <p class="card-text">Mbenj Azieh Delos Santos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="{{ asset('js/index.script.blade.js') }}"></script>

</body>
</html>
