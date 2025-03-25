<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add New Ingredient</title>
    <style>
        .suggestions {
            position: absolute;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            background: white;
            border: 1px solid #ddd;
            border-radius: 4px;
            z-index: 1000;
            display: none;
        }
        .suggestion-item {
            padding: 8px 12px;
            cursor: pointer;
        }
        .suggestion-item:hover {
            background-color: #f8f9fa;
        }
        .duplicate-warning {
            display: none;
            color: #dc3545;
            margin-top: 0.25rem;
        }
    </style>
</head>

<body class="bg-light" style="padding-top: 56px;">
    
    <!-- Navbar -->
    @include('partials.navbar')
    
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Add New Ingredient</h2>

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="ingredientForm" action="{{ route('ingredients.store') }}" method="POST">
                            @csrf
                            <div class="mb-3 position-relative">
                                <label for="name" class="form-label">Ingredient Name</label>
                                <input type="text" 
                                       class="form-control @error('name') is-invalid @enderror" 
                                       id="name" 
                                       name="name" 
                                       required 
                                       autocomplete="off"
                                       placeholder="Enter ingredient name">
                                <div id="suggestions" class="suggestions"></div>
                                <div id="duplicateWarning" class="duplicate-warning">
                                    This ingredient already exists in the database.
                                </div>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" id="submitBtn">Add Ingredient</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nameInput = document.getElementById('name');
            const suggestionsDiv = document.getElementById('suggestions');
            const duplicateWarning = document.getElementById('duplicateWarning');
            const submitBtn = document.getElementById('submitBtn');
            let debounceTimer;

            // Set up CSRF token for AJAX requests
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            nameInput.addEventListener('input', function() {
                clearTimeout(debounceTimer);
                const query = this.value.trim();

                if (query.length < 2) {
                    suggestionsDiv.style.display = 'none';
                    duplicateWarning.style.display = 'none';
                    submitBtn.disabled = false;
                    return;
                }

                // Debounce the API call
                debounceTimer = setTimeout(() => {
                    fetch(`/ingredients/suggestions?query=${encodeURIComponent(query)}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrfToken
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Clear previous suggestions
                        suggestionsDiv.innerHTML = '';
                        
                        if (data.length > 0) {
                            // Show duplicate warning and disable submit button if exact match found
                            const exactMatch = data.find(item => 
                                item.name.toLowerCase() === query.toLowerCase()
                            );
                            
                            if (exactMatch) {
                                duplicateWarning.style.display = 'block';
                                submitBtn.disabled = true;
                            } else {
                                duplicateWarning.style.display = 'none';
                                submitBtn.disabled = false;
                            }

                            // Display suggestions
                            data.forEach(item => {
                                const div = document.createElement('div');
                                div.className = 'suggestion-item';
                                div.textContent = item.name;
                                div.addEventListener('click', () => {
                                    nameInput.value = item.name;
                                    suggestionsDiv.style.display = 'none';
                                    duplicateWarning.style.display = 'block';
                                    submitBtn.disabled = true;
                                });
                                suggestionsDiv.appendChild(div);
                            });
                            suggestionsDiv.style.display = 'block';
                        } else {
                            suggestionsDiv.style.display = 'none';
                            duplicateWarning.style.display = 'none';
                            submitBtn.disabled = false;
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                }, 300); // 300ms delay
            });

            // Hide suggestions when clicking outside
            document.addEventListener('click', function(e) {
                if (!nameInput.contains(e.target) && !suggestionsDiv.contains(e.target)) {
                    suggestionsDiv.style.display = 'none';
                }
            });

            // Form submission handler
            document.getElementById('ingredientForm').addEventListener('submit', function(e) {
                if (submitBtn.disabled) {
                    e.preventDefault();
                    alert('This ingredient already exists in the database.');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
