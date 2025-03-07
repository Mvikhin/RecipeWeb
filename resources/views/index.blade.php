<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/index.style.blade.css') }}">
    <title>food website</title>
</head>
<body>
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
                    <input type="search" placeholder="search foods">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </nav>
        </div>

<!-- Landing Page -->
<section class="landingpage">
    <div class="content">
        <div class="heading" data-aos="fade-right" data-aos-duration="2000">
            <h3>Lutong Pinoy</h3>
            <h1>Kusina <br> ni Juan</h1>
            <button  data-aos="fade-right" data-aos-duration="2000" data-aos-delay="00">Download Recipe</button>
        </div>           
        <div class="image">
            <img src="{{ asset('img/Main.png') }}" data-aos="zoom-in" data-aos-duration="2000">
        </div>
    </div>
</section>
<section class="aboutus">
    <div class="container">
        <img src="{{ asset('img/AboutUs.png') }}" data-aos="zoom-in" data-aos-duration="1000">
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
        <div class="row">
            <div class="col-md-6">
                <div class="card p-4 shadow-lg">
                    <h2 class="text-dark">Enter Ingredient</h2>
                    <input type="text" id="ingredientInput" class="form-control mb-3 w-100" placeholder="Enter an ingredient..." list="ingredientSuggestions">
                    <datalist id="ingredientSuggestions">
                        <option value="Chicken">
                        <option value="Pork">
                        <option value="Beef">
                        <option value="Bangus (Milkfish)">
                        <option value="Tilapia">
                        <option value="Galunggong (Mackerel Scad)">
                        <option value="Hipon (Shrimp)">
                        <option value="Alimango (Crab)">
                        <option value="Tahong (Mussels)">
                        <option value="Talong (Eggplant)">
                        <option value="Sitaw (String Beans)">
                        <option value="Ampalaya (Bitter Gourd)">
                        <option value="Malunggay (Moringa)">
                        <option value="Pechay (Bok Choy)">
                        <option value="Kalabasa (Squash)">
                        <option value="Kamote (Sweet Potato)">
                        <option value="Sayote (Chayote)">
                        <option value="Labanos (Radish)">
                        <option value="Gabi (Taro)">
                        <option value="Bawang (Garlic)">
                        <option value="Sibuyas (Onion)">
                        <option value="Luya (Ginger)">
                        <option value="Dahon ng Laurel (Bay Leaf)">
                        <option value="Siling Labuyo (Bird’s Eye Chili)">
                        <option value="Siling Haba (Long Chili)">
                        <option value="Toyo (Soy Sauce)">
                        <option value="Suka (Vinegar)">
                        <option value="Patis (Fish Sauce)">
                        <option value="Asukal (Sugar)">
                        <option value="Asin (Salt)">
                        <option value="Paminta (Pepper)">
                        <option value="Gata (Coconut Milk)">
                        <option value="Bagoong (Fermented Shrimp/Fish Paste)">
                        <option value="Calamansi">
                        <option value="Itlog (Egg)">
                        <option value="Bigas (Rice)">
                        <option value="Togue (Bean Sprouts)">
                        <option value="Tokwa (Tofu)">
                        <option value="Langka (Jackfruit)">
                        <option value="Ube (Purple Yam)">
                        <option value="Mais (Corn)">
                    </datalist>
                    <button type="button" class="btn btn-primary w-100" onclick="addIngredient()">Add Ingredient</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card p-4 shadow-lg">
                    <h2 class="text-dark">Your Ingredients</h2>
                    <ul class="list-group" id="ingredientList"></ul>
                    <button class="btn btn-primary mt-3 w-100">Find Dish</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="details-foods">
    <div class="title"><h1 data-aos="fade-left" data-aos-duration="1000">Enjoy Some of the Most Beloved Filipino Dishes</h1></div>
    <div class="foods">
        <div class="card" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('img/Adobo.png') }}" alt="">
            <div class="discription">
                <h1>Adobo</h1>
                <p>A classic Filipino dish made with meat marinated in vinegar, soy sauce, garlic, and spices. <br>
                <strong>Health Benefits:</strong> Vinegar aids digestion, garlic supports heart health, and protein-rich meat helps build muscles.</p>
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="{{ asset('img/Sinigang.png') }}" alt="">
            <div class="discription">
                <h1>Sinigang</h1>
                <p>A tangy and savory soup made with tamarind, vegetables, and meat or seafood. <br>
                <strong>Health Benefits:</strong> Rich in vitamin C, fiber, and antioxidants, Sinigang boosts immunity and aids digestion.</p>
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="{{ asset('img/KareKare.png') }}" alt="">
            <div class="discription">
                <h1>Kare-Kare</h1>
                <p>A rich peanut stew with oxtail, tripe, and vegetables, often served with bagoong. <br>
                <strong>Health Benefits:</strong> Peanuts provide healthy fats and protein, while vegetables supply fiber and vitamins.</p>
            </div>
        </div>
        <div class="card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <img src="{{ asset('img/HaloHalo.png') }}" alt="">
            <div class="discription">
                <h1>Halo-Halo</h1>
                <p>A colorful dessert with shaved ice, fruits, jellies, and milk. <br>
                <strong>Health Benefits:</strong> Ube is rich in antioxidants, fruits provide vitamins, and dairy offers calcium.</p>
            </div>
        </div>
    </div>
</section>

<script>
    function addIngredient() {
        let inputField = document.getElementById("ingredientInput");
        let ingredient = inputField.value.trim();
        let list = document.getElementById("ingredientList");

        if (ingredient === "") {
            alert("Please enter a valid ingredient!");
            return;
        }

        let existingItems = list.getElementsByTagName("li");
        for (let item of existingItems) {
            if (item.textContent === ingredient) {
                alert("Ingredient already added!");
                return;
            }
        }

        let li = document.createElement("li");
        li.className = "list-group-item d-flex justify-content-between align-items-center";
        li.textContent = ingredient;

        let removeBtn = document.createElement("button");
        removeBtn.className = "btn btn-danger btn-sm";
        removeBtn.textContent = "X";
        removeBtn.onclick = function () {
            list.removeChild(li);
        };

        li.appendChild(removeBtn);
        list.appendChild(li);

        inputField.value = "";
    }
</script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>