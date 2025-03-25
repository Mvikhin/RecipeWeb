<nav class="fixed-top">
    <style>
        /* Nav Bar + Functions */
        nav .wrapper {
            position: relative;
            top: 0;
            height: 7vh;
            width: 100%;
            background-color: white;
            font-weight: bold;
        }

        nav .nav-container {
            width: 100%;
            height: 100%;
            margin: 0 60px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        nav .nav-container img {
            width: 60px;
        }

        nav .nav-container .links a {
            font-size: 1.3rem;
            color: black;
            text-decoration: none;
            margin: 0 20px;
            transition: 0.2s linear;
        }

        nav .nav-container .links a:hover {
            color: rgb(124, 123, 123);
        }

        /* Search Function */

        nav .nav-container .search {
            position: relative;
            width: 320px;
            box-shadow: 1px 1px 20px white;
            height: 5vh;
            display: flex;
            border-radius: 20px;
            overflow: visible;
            border: 1px solid white;
        }

        nav .nav-container .search input {
            width: 100%;
            padding: 8px 40px 8px 16px;
            border: 1px solid #ccc;
            border-radius: 20px;
            outline: none;
            color: #000;
            background: white;
        }

        nav .nav-container .search i {
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.4rem;
            width: 14%;
            cursor: pointer;
            height: 100%;
        }

        nav .nav-container .search input::placeholder {
            color: #666;
        }


        /* Search Function */
        nav .nav-container .search-suggestions {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 8px;
            width: 100%;
            z-index: 1000;
        }

        nav .nav-container .suggestion-item {
            padding: 12px 16px;
            color: #000;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid #eee;
        }

        nav .nav-container .suggestion-item:last-child {
            border-bottom: none;
        }

        nav .nav-container .suggestion-item:hover {
            background-color: #f8f9fa;
        }

        nav .nav-container .suggestion-item i {
            color: #666;
            font-size: 14px;
        }

        section {
            width: 100%;
            height: 100vh;  
            overflow: hidden;
        }
    </style>
    <div class="wrapper">
        <div class="nav-container">
            <a href="{{ route('index') }}">
                <img src="{{ asset('img/Logo.png') }}" alt="Logo">
            </a>
            <div class="links">
                <a href="">Menu</a>
                <a href="">Lunch boxed</a>
                <a href="">Platters</a>
                <a href="">Specials</a>
            </div>
            <div class="search">
                <input type="search" id="searchInput" placeholder="Look for delicacies" autocomplete="off">
                <i class="fa-solid fa-magnifying-glass"></i>
                <div id="searchSuggestions" class="search-suggestions"></div>
            </div>
            @auth
                <div class="auth-buttons">
                    <a href="{{ route('recipe.create') }}" class="btn btn-primary mx-2">Create Recipe</a>
                    <a href="{{ route('ingredient.create') }}" class="btn btn-secondary mx-2">Create Ingredient</a>
                </div>
            @endauth
        </div>
    </div>
</nav>

<script src="{{ asset('js/index.script.blade.js') }}"></script>
