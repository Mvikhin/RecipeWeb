document.getElementById("ingredientInput").addEventListener("input", function() {
    let query = this.value.trim();
    const suggestionsList = document.getElementById("ingredientSuggestions");

    // Hide suggestions if input is empty or less than 2 characters
    if (query.length < 2) {
        suggestionsList.style.display = 'none';
        return;
    }

    fetchIngredientSuggestions(query);
});

function fetchIngredientSuggestions(query) {
    fetch(`/ingredient-suggestions?query=${query}`)
        .then(response => response.json())
        .then(data => {
            displaySuggestions(data);
        })
        .catch(error => console.error("Error:", error));
}

function displaySuggestions(suggestions) {
    const suggestionsList = document.getElementById("ingredientSuggestions");
    suggestionsList.innerHTML = "";

    // Hide if suggestion box is empty
    if (suggestions.length === 0) {
        suggestionsList.style.display = 'none';
        return;
    }

    // Show suggestions if we have a matching ingredient
    suggestionsList.style.display = 'block';

    suggestions.forEach(ingredient => {
        let li = document.createElement("div");
        li.classList.add("suggestion-item");
        li.innerHTML = `
            <i class="fa-solid fa-pepper-hot"></i>
            <span>${ingredient.name}</span>
        `;
        
        // Hide suggestions after selection
        li.onclick = function() {
            document.getElementById("ingredientInput").value = ingredient.name;
            suggestionsList.style.display = 'none';
        };
        
        suggestionsList.appendChild(li);
    });
}

// Hide suggestions when clicking outside
document.addEventListener('click', function(e) {
    const suggestionsList = document.getElementById("ingredientSuggestions");
    const ingredientInput = document.getElementById("ingredientInput");

    if (!ingredientInput.contains(e.target) && !suggestionsList.contains(e.target)) {
        suggestionsList.style.display = 'none';
    }
});

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
    removeBtn.className = "btn btn-dark btn-sm";
    removeBtn.innerHTML = '<i class="fas fa-times"></i>';
    removeBtn.onclick = function () {
        list.removeChild(li);
    };

    li.appendChild(removeBtn);
    list.appendChild(li);
    inputField.value = "";
}

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const searchSuggestions = document.getElementById('searchSuggestions');
    let debounceTimer;

    searchInput.addEventListener('input', function() {
        clearTimeout(debounceTimer);
        const query = this.value.trim();

        if (query.length < 2) {
            searchSuggestions.style.display = 'none';
            return;
        }

        debounceTimer = setTimeout(() => {
            fetchSearchSuggestions(query);
        }, 300);
    });

    // Close suggestions when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target) && !searchSuggestions.contains(e.target)) {
            searchSuggestions.style.display = 'none';
        }
    });

    function fetchSearchSuggestions(query) {
        fetch(`/search-suggestions?query=${encodeURIComponent(query)}`)
            .then(response => response.json())
            .then(data => {
                displaySearchSuggestions(data, query);
            })
            .catch(error => console.error('Error:', error));
    }

    function displaySearchSuggestions(results, query) {
        searchSuggestions.innerHTML = '';

        if (results.length === 0) {
            searchSuggestions.style.display = 'none';
            return;
        }

        results.forEach(result => {
            const div = document.createElement('div');
            div.className = 'suggestion-item';

            div.innerHTML = `
                <i class="fa-solid fa-utensils"></i>
                <span>${result.title || result.name}</span>
            `;

            div.addEventListener('click', () => {
                searchInput.value = result.title || result.name;
                searchSuggestions.style.display = 'none';
                // Navigate to recipe page, will update soon
                window.location.href = `/recipe/${result.id}`;
            });

            searchSuggestions.appendChild(div);
        });

        searchSuggestions.style.display = 'block';
    }
});

// Initialize AOS animations
AOS.init();