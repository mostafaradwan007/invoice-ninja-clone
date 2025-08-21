<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Product - Bee Company</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    :root {
      --bee-yellow: #ffcc00;
      --bee-black: #1a1a1a;
      --bee-light-gray: #e5e7eb;
      --primary-blue: #3b82f6;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8fafc;
      margin: 0;
    }

    /* Main Content Area */
    .main-content {
      margin-left: 280px;
      margin-top: 70px;
      padding: 0;
      min-height: calc(100vh - 70px);
    }

    /* Breadcrumb */
    .breadcrumb-container {
      padding: 16px 24px;
      background: #f8fafc;
    }

    .breadcrumb {
      background: none;
      padding: 0;
      margin: 0;
      font-size: 14px;
    }

    .breadcrumb-item {
      display: flex;
      align-items: center;
    }

    .breadcrumb-item + .breadcrumb-item::before {
      content: ">";
      color: #6b7280;
      margin: 0 8px;
    }

    .breadcrumb-item a {
      color: #6b7280;
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #1f2937;
      font-weight: 500;
    }

    /* Form Container */
    .form-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 24px;
    }

    .form-card {
      background: white;
      border-radius: 12px;
      padding: 32px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .form-title {
      font-size: 24px;
      font-weight: 600;
      color: #1f2937;
      margin-bottom: 32px;
      text-align: left;
    }

    /* Form Fields */
    .form-group {
      margin-bottom: 24px;
    }

    .form-label {
      display: block;
      font-size: 14px;
      font-weight: 500;
      color: #374151;
      margin-bottom: 8px;
    }

    .form-label.required::after {
      content: " *";
      color: #ef4444;
    }

    .form-control {
      width: 100%;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      padding: 12px 16px;
      font-size: 14px;
      transition: border-color 0.2s, box-shadow 0.2s;
      background-color: white;
    }

    .form-control:focus {
      outline: none;
      border-color: var(--primary-blue);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .form-control::placeholder {
      color: #9ca3af;
    }

    /* Textarea */
    .form-textarea {
      min-height: 120px;
      resize: vertical;
    }

    /* Select Dropdown */
    .form-select {
      width: 100%;
      border: 1px solid #d1d5db;
      border-radius: 8px;
      padding: 12px 16px;
      font-size: 14px;
      background-color: white;
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
      background-position: right 12px center;
      background-repeat: no-repeat;
      background-size: 16px;
      padding-right: 44px;
      appearance: none;
      cursor: pointer;
    }

    .form-select:focus {
      outline: none;
      border-color: var(--primary-blue);
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    /* Form Layout */
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
    }

    .form-row.single {
      grid-template-columns: 1fr;
    }

    /* Input Groups */
    .input-group {
      position: relative;
    }

    .input-group-text {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: #6b7280;
      font-size: 14px;
      pointer-events: none;
    }

    .input-group .form-control {
      padding-left: 40px;
    }

    /* Number Input Styling */
    .form-control[type="number"] {
      -moz-appearance: textfield;
    }

    .form-control[type="number"]::-webkit-outer-spin-button,
    .form-control[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Form Actions */
    .form-actions {
      margin-top: 40px;
      padding-top: 24px;
      border-top: 1px solid #e5e7eb;
      display: flex;
      justify-content: flex-end;
      gap: 12px;
    }

    .btn-cancel {
      background-color: #f3f4f6;
      color: #374151;
      border: 1px solid #d1d5db;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
    }

    .btn-cancel:hover {
      background-color: #e5e7eb;
      color: #374151;
      text-decoration: none;
    }

    .btn-save {
      background-color: var(--primary-blue);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
    }

    .btn-save:hover {
      background-color: #2563eb;
    }

    /* Validation Styles */
    .form-control.is-invalid {
      border-color: #ef4444;
    }

    .form-control.is-invalid:focus {
      border-color: #ef4444;
      box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
    }

    .invalid-feedback {
      display: block;
      width: 100%;
      margin-top: 6px;
      font-size: 12px;
      color: #ef4444;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .main-content {
        margin-left: 0;
      }
      
      .form-container {
        padding: 16px;
      }
      
      .form-card {
        padding: 24px 20px;
      }
      
      .form-row {
        grid-template-columns: 1fr;
        gap: 20px;
      }
      
      .breadcrumb-container {
        padding: 16px;
      }
    }

    @media (max-width: 480px) {
      .form-title {
        font-size: 20px;
        margin-bottom: 24px;
      }
      
      .form-card {
        padding: 20px 16px;
      }
      
      .form-control,
      .form-select {
        padding: 10px 12px;
      }
      
      .input-group .form-control {
        padding-left: 36px;
      }
    }
  </style>
</head>
<body>
  <!-- Include header and sidebar -->
  <?php include_once './header.html'; ?>
  <?php include_once './sidebar.html'; ?>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="./index.php"><i class="bi bi-house-door"></i></a>
          </li>
          <li class="breadcrumb-item">
            <a href="./products.php">Products</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">New Product</li>
        </ol>
      </nav>
    </div>

    <!-- Form Container -->
    <div class="form-container">
      <div class="form-card">
        <h1 class="form-title">New Product</h1>
        
        <form id="newProductForm" novalidate>
          <!-- Item Name (Required) -->
          <div class="form-group">
            <label class="form-label required" for="item">Item</label>
            <input type="text" class="form-control" id="item" name="item" required>
            <div class="invalid-feedback">
              Please provide a valid item name.
            </div>
          </div>

          <!-- Description -->
          <div class="form-group">
            <label class="form-label" for="description">Description</label>
            <textarea class="form-control form-textarea" id="description" name="description" placeholder="Enter product description..."></textarea>
          </div>

          <!-- Price and Default Quantity Row -->
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="price">Price</label>
              <div class="input-group">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" id="price" name="price" min="0" step="0.01" placeholder="0.00">
              </div>
            </div>

            <div class="form-group">
              <label class="form-label" for="default_quantity">Default Quantity</label>
              <input type="number" class="form-control" id="default_quantity" name="default_quantity" min="1" value="1">
            </div>
          </div>

          <!-- Max Quantity -->
          <div class="form-group">
            <label class="form-label" for="max_quantity">Max Quantity</label>
            <input type="number" class="form-control" id="max_quantity" name="max_quantity" min="1" placeholder="Enter maximum quantity">
          </div>

          <!-- Tax Category -->
          <div class="form-group">
            <label class="form-label" for="tax_category">Tax Category</label>
            <select class="form-select" id="tax_category" name="tax_category">
              <option value="">Select tax category...</option>
              <option value="physical_goods" selected>Physical Goods</option>
              <option value="digital_goods">Digital Goods</option>
              <option value="services">Services</option>
              <option value="tax_exempt">Tax Exempt</option>
            </select>
          </div>

          <!-- Image URL -->
          <div class="form-group">
            <label class="form-label" for="image_url">Image URL</label>
            <input type="url" class="form-control" id="image_url" name="image_url" placeholder="https://example.com/image.jpg">
          </div>

          <!-- Form Actions -->
          <div class="form-actions">
            <a href="./products.php" class="btn-cancel">Cancel</a>
            <button type="submit" class="btn-save">Save Product</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Form validation
    document.getElementById('newProductForm').addEventListener('submit', function(event) {
      event.preventDefault();
      event.stopPropagation();

      const form = this;
      const itemInput = document.getElementById('item');
      
      // Reset validation states
      form.querySelectorAll('.form-control').forEach(input => {
        input.classList.remove('is-invalid');
      });

      let isValid = true;

      // Validate required item field
      if (!itemInput.value.trim()) {
        itemInput.classList.add('is-invalid');
        isValid = false;
      }

      // Validate price if provided
      const priceInput = document.getElementById('price');
      if (priceInput.value && parseFloat(priceInput.value) < 0) {
        priceInput.classList.add('is-invalid');
        isValid = false;
      }

      // Validate quantities
      const defaultQtyInput = document.getElementById('default_quantity');
      const maxQtyInput = document.getElementById('max_quantity');
      
      if (defaultQtyInput.value && parseInt(defaultQtyInput.value) < 1) {
        defaultQtyInput.classList.add('is-invalid');
        isValid = false;
      }

      if (maxQtyInput.value && parseInt(maxQtyInput.value) < 1) {
        maxQtyInput.classList.add('is-invalid');
        isValid = false;
      }

      // Check if max quantity is less than default quantity
      if (defaultQtyInput.value && maxQtyInput.value) {
        if (parseInt(maxQtyInput.value) < parseInt(defaultQtyInput.value)) {
          maxQtyInput.classList.add('is-invalid');
          isValid = false;
        }
      }

      if (isValid) {
        // Form is valid, you can submit the data here
        console.log('Form is valid, submitting...');
        
        // Collect form data
        const formData = new FormData(form);
        const productData = Object.fromEntries(formData);
        
        console.log('Product Data:', productData);
        
        // Here you would typically send the data to your server
        // For now, just show a success message
        alert('Product created successfully!');
        
        // Optionally redirect to products page
        // window.location.href = './products.php';
      } else {
        // Focus on first invalid field
        const firstInvalid = form.querySelector('.is-invalid');
        if (firstInvalid) {
          firstInvalid.focus();
        }
      }
    });

    // Real-time validation for item field
    document.getElementById('item').addEventListener('input', function() {
      if (this.value.trim()) {
        this.classList.remove('is-invalid');
      }
    });

    // Format price input
    document.getElementById('price').addEventListener('input', function() {
      if (this.value && parseFloat(this.value) >= 0) {
        this.classList.remove('is-invalid');
      }
    });

    // Quantity validation
    document.getElementById('default_quantity').addEventListener('input', function() {
      if (this.value && parseInt(this.value) >= 1) {
        this.classList.remove('is-invalid');
      }
    });

    document.getElementById('max_quantity').addEventListener('input', function() {
      if (this.value && parseInt(this.value) >= 1) {
        this.classList.remove('is-invalid');
      }
    });
  </script>
</body>
</html>

