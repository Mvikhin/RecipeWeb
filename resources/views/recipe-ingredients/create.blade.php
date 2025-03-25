<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Create New Recipe</title>
</head>
<body class="bg-light" style="padding-top: 56px;">
    
    <!-- Navbar -->
    @include('partials.navbar')
    
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Create New Recipe</h2>

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

                        <form action="{{ route('recipe-ingredients.store') }}" method="POST">
                            @csrf
                            <!-- Image Upload Section -->
                            <div class="mb-3">
                                <label for="image" class="form-label">Recipe Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
                                @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Basic Recipe Information -->
                            <div class="mb-4">
                                <h4>Recipe Information</h4>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Recipe Short Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                           id="name" name="name" required
                                           placeholder="Ex. Adobo"
                                           oninput="generateSlug(this.value)">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="slug" class="form-label">URL Preview</label>
                                    <div class="input-group">
                                        <span class="input-group-text text-muted">yoursite.com/recipe/</span>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" 
                                               id="slug" name="slug" required readonly
                                               style="background-color: #f8f9fa; border-left: none;">
                                    </div>
                                    <small class="text-muted">This is how your recipe URL will appear</small>
                                </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Recipe Name</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" required
                                           placeholder="Ex. Nanay's Special Adobo">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" name="description" rows="3" required></textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Caution Section (New) -->
                                <div class="mb-3">
                                    <label for="caution" class="form-label">Caution (optional)</label>
                                    <textarea class="form-control @error('caution') is-invalid @enderror" 
                                              id="caution" name="caution" rows="3"></textarea>
                                    @error('caution')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="text-muted">Optional: Add any cautionary notes related to the recipe</small>
                                </div>
                            </div>

                            <!-- Ingredients Section -->
                            <div class="mb-4">
                                <h4>Ingredients</h4>
                                <div id="ingredients-container">
                                    <div class="ingredient-entry border p-3 mb-3 rounded">
                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Select Ingredient</label>
                                                <select class="form-select" name="ingredients[]" required>
                                                    <option value="">Choose an ingredient...</option>
                                                    @foreach($ingredients as $ingredient)
                                                        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Quantity</label>
                                                <div class="input-group">
                                                    <input type="number" 
                                                           class="form-control quantity-whole" 
                                                           min="0"
                                                           step="1"
                                                           placeholder="1"
                                                           aria-label="Whole number"
                                                           required>
                                                    <span class="input-group-text text-muted">and</span>
                                                    <input type="text" 
                                                           class="form-control quantity-fraction"
                                                           placeholder="1/2 (optional)"
                                                           pattern="^\d+\/\d+$"
                                                           aria-label="Fraction (optional)">
                                                    <input type="hidden" name="quantities[]" class="quantity-decimal" value="0.00">
                                                </div>
                                                <small class="text-muted">Enter whole number, fraction is optional</small>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="form-label">Unit</label>
                                                <select class="form-select" name="units[]" required>
                                                    <option value="">Choose unit...</option>
                                                    @foreach($units as $unit)
                                                        <option value="{{ $unit }}">{{ ucfirst($unit) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary mb-3" onclick="addIngredientField()">
                                    <i class="fas fa-plus"></i> Add Another Ingredient
                                </button>
                            </div>

                            <!-- Recipe Steps Section -->
                            <div class="mb-4">
                                <h4>Recipe Steps</h4>
                                <div id="steps-container">
                                    <div class="step-entry border p-3 mb-3 rounded">
                                        <div class="row">
                                            <div class="col-md-2 mb-3">
                                                <label class="form-label">Step #</label>
                                                <input type="number" class="form-control" value="1" readonly>
                                            </div>
                                            <div class="col-md-10 mb-3">
                                                <label class="form-label">Step Description</label>
                                                <textarea class="form-control" name="steps[]" rows="2" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-secondary mb-3" onclick="addStepField()">
                                    <i class="fas fa-plus"></i> Add Another Step
                                </button>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark">Create Recipe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Replace all JavaScript code between the <script> tags with this:
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the first ingredient field
        initializeQuantityInputs(document);
        
        // Initialize slug if name exists
        const nameInput = document.getElementById('name');
        if (nameInput.value) {
            generateSlug(nameInput.value);
        }
    });

    function initializeQuantityInputs(context) {
        context.querySelectorAll('.input-group').forEach(container => {
            const wholeInput = container.querySelector('.quantity-whole');
            const fractionInput = container.querySelector('.quantity-fraction');
            const decimalInput = container.querySelector('.quantity-decimal');
            
            // Set initial values
            wholeInput.value = wholeInput.value || '0';
            decimalInput.value = decimalInput.value || '0.01';
            
            // Add event listeners
            wholeInput.addEventListener('input', () => updateQuantityValue(container));
            fractionInput.addEventListener('input', () => {
                validateFractionInput(fractionInput);
                updateQuantityValue(container);
            });
            
            // Initial update
            updateQuantityValue(container);
        });
    }

    function updateQuantityValue(container) {
        const wholeInput = container.querySelector('.quantity-whole');
        const fractionInput = container.querySelector('.quantity-fraction');
        const decimalInput = container.querySelector('.quantity-decimal');
        
        // Parse the whole number first
        let total = parseFloat(wholeInput.value) || 0;
        console.log('Whole number:', total);
        
        // Add fraction if it exists and is valid
        if (fractionInput.value && fractionInput.value.match(/^\d+\/\d+$/)) {
            const [numerator, denominator] = fractionInput.value.split('/');
            if (parseInt(denominator) !== 0) {
                const fractionValue = parseInt(numerator) / parseInt(denominator);
                total += fractionValue;
                console.log('Fraction value:', fractionValue);
            }
        }
        
        // Ensure minimum value and format to 2 decimal places
        total = Math.max(0.01, total);
        decimalInput.value = total.toFixed(2);
        console.log('Final decimal value:', decimalInput.value);
    }

    function validateFractionInput(input) {
        // Remove any non-digit and non-slash characters
        input.value = input.value.replace(/[^\d/]/g, '');
        
        // Ensure only one slash
        const slashCount = (input.value.match(/\//g) || []).length;
        if (slashCount > 1) {
            input.value = input.value.substring(0, input.value.lastIndexOf('/'));
        }
    }

    function addIngredientField() {
        const container = document.getElementById('ingredients-container');
        const newEntry = container.children[0].cloneNode(true);
        
        // Clear all input values
        newEntry.querySelectorAll('input, select').forEach(input => {
            input.value = '';
        });
        
        // Reset the decimal input to default value
        newEntry.querySelector('.quantity-decimal').value = '0.01';
        
        // Add remove button
        const removeBtn = document.createElement('button');
        removeBtn.className = 'btn btn-danger btn-sm mt-2';
        removeBtn.innerHTML = '<i class="fas fa-trash"></i> Remove';
        removeBtn.onclick = function() {
            this.parentElement.remove();
        };
        newEntry.appendChild(removeBtn);
        
        // Initialize the new field's quantity inputs
        container.appendChild(newEntry);
        initializeQuantityInputs(newEntry);
    }

    function generateSlug(value) {
        if (!value) {
            document.getElementById('slug').value = '';
            return;
        }
        
        const slug = value
            .toLowerCase()
            .trim()
            .replace(/[^\w\s-]/g, '')
            .replace(/[\s_-]+/g, '-')
            .replace(/^-+|-+$/g, '');
        
        document.getElementById('slug').value = slug;
    }

    function addStepField() {
        const container = document.getElementById('steps-container');
        const newEntry = container.children[0].cloneNode(true);
        
        // Update step number
        const stepNumber = container.children.length + 1;
        newEntry.querySelector('input[type="number"]').value = stepNumber;
        
        // Clear the textarea
        newEntry.querySelector('textarea').value = '';
        
        // Add remove button
        const removeBtn = document.createElement('button');
        removeBtn.className = 'btn btn-danger btn-sm mt-2';
        removeBtn.innerHTML = '<i class="fas fa-trash"></i> Remove';
        removeBtn.onclick = function() {
            this.parentElement.remove();
            updateStepNumbers();
        };
        newEntry.appendChild(removeBtn);
        
        container.appendChild(newEntry);
    }

    function updateStepNumbers() {
        const container = document.getElementById('steps-container');
        const steps = container.children;
        for(let i = 0; i < steps.length; i++) {
            steps[i].querySelector('input[type="number"]').value = i + 1;
        }
    }

    // Update form submission handler
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        let isValid = true;
        
        // Final update of all quantities
        document.querySelectorAll('.ingredient-entry').forEach((entry, index) => {
            const container = entry.querySelector('.input-group');
            const wholeInput = container.querySelector('.quantity-whole');
            const fractionInput = container.querySelector('.quantity-fraction');
            const decimalInput = container.querySelector('.quantity-decimal');
            
            // Log the values for debugging
            console.log(`Ingredient ${index + 1}:`);
            console.log('Whole:', wholeInput.value);
            console.log('Fraction:', fractionInput.value);
            
            // Update the decimal value
            updateQuantityValue(container);
            
            // Verify the final value
            const finalValue = parseFloat(decimalInput.value);
            console.log('Final decimal:', finalValue);
            
            if (finalValue < 0.01) {
                isValid = false;
                alert(`Please enter a valid quantity for ingredient ${index + 1}`);
            }
        });
        
        if (isValid) {
            console.log('Form is valid, submitting...');
            this.submit();
        }
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>