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

        /* Top Header Bar */
        .page-header {
            background: white;
            border-bottom: 1px solid var(--bee-light-gray);
            padding: 16px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .page-title-section {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .page-title {
            font-size: 18px;
            font-weight: 600;
            color: #1f2937;
            margin: 0;
        }

        .add-icon {
            background-color: #f3f4f6;
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-size: 16px;
        }

        .search-section {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .search-input {
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 8px 12px;
            font-size: 14px;
            width: 300px;
        }

        .search-input::placeholder {
            color: #9ca3af;
        }

        .ctrl-k-badge {
            background-color: #f3f4f6;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            padding: 4px 8px;
            font-size: 12px;
            color: #6b7280;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .unlock-pro-btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
        }

        .save-btn {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
        }

        .notification-btn {
            background: none;
            border: none;
            font-size: 18px;
            color: #6b7280;
            padding: 8px;
        }

        /* Breadcrumb */
        .breadcrumb-container {
            padding: 16px 24px;
            background: white;
            border-bottom: 1px solid var(--bee-light-gray);
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

        .breadcrumb-item+.breadcrumb-item::before {
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
        }

    
        /* Form Content */
        .form-content {
            padding: 32px 24px;   
       width: 1000px;

    margin-left: auto;
    margin-right: auto;

        }

       

        .form-section {
            background: white;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            
        }

        .section-title {
            font-size: 16px;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #374151;
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 10px 12px;
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        .form-select {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 10px 12px;
            font-size: 14px;
            background-color: white;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 8px center;
            background-repeat: no-repeat;
            background-size: 16px;
            padding-right: 40px;
            appearance: none;
        }

        .form-select:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }


        /* Responsive */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
            }

            .form-row {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .page-header {
                flex-direction: column;
                gap: 16px;
                align-items: stretch;
            }

            .search-input {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Include your header and sidebar here -->
    <?php $pageTitle = "New Product"; ?>
    <?php include_once './header.html'; ?>
    <?php include_once './sidebar.html'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Page Header -->
        <div class="page-header">
            <div class="page-title-section">
                <h1 class="page-title">New Product</h1>
                <button class="add-icon" type="button">
                    <i class="bi bi-plus"></i>
                </button>
            </div>

            <div class="search-section">
                <input type="text" class="search-input" placeholder="Find invoices, clients, and more">
                <span class="ctrl-k-badge">Ctrl+K</span>
            </div>

            <div class="header-actions">
                <button class="notification-btn">
                    <i class="bi bi-bell"></i>
                </button>
                <button class="unlock-pro-btn">Unlock Pro</button>
                <button class="save-btn">Save</button>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="./index.php"><i class="bi bi-house-door"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="./products.php">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Product</li>
                </ol>
            </nav>
        </div>


        <!-- Form Content -->
        <div class="form-content">
            <div class="tab-content" id="productTabsContent">
                <div class="tab-pane fade show active" id="create" role="tabpanel">
                    <form id="newproductForm">
                       
                            <!-- Product Details -->
                            <div class="form-section">
                                <h3 class="section-title">New Product</h3>

                                <div class="form-group">
                                    <label class="form-label" for="name">Item</label>
                                    <input type="text" class="form-control" id="item" name="item">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control"></textarea>
                                </div>


                                <div class="form-group">
                                    <label class="form-label" for="price">Price</label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="Def Quantity">Default Quantity</label>
                                    <input type="number" class="form-control" id="vat_number" name="Def Quantity">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="Max Quantity">Max Quantity</label>
                                    <input type="number" class="form-control" id="Max Quantity" name="Max Quantity">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="Tax Category">Tax Category</label>
                                    <select class="form-select" id="Tax Category" name="Tax Category">
                                        <option value="physical Goods">Physical Goods</option>
                                        <option value="services">Services</option>
                                        <option value="digital products">Digital Products</option>
                                        <option value="shipping">Shipping</option>
                                        <option value="tax exempt">Tax Exempt</option>
                                        <option value="reduced tax">Reduced Tax</option>
                                        <option value="override tax">Override tax</option>
                                        <option value="zero rated">Zero rated</option>
                                        <option value="reduced tax">Reduced Tax</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="image">Image url</label>
                                    <input type="url" class="form-control" id="image" name="image">
                                </div>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>


  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form submission
        document.getElementById('newClientForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add form submission logic here
            console.log('Form submitted');
        });

        // Add contact functionality
        document.querySelector('.add-contact-link').addEventListener('click', function(e) {
            e.preventDefault();
            // Add logic to add new contact fields
            console.log('Add contact clicked');
        });

        // Copy billing to shipping address
        function copyBillingToShipping() {
            const billingFields = [
                'billing_street', 'apt_suite', 'city',
                'state_province', 'postal_code', 'country'
            ];
            const shippingFields = [
                'shipping_street', 'shipping_apt_suite', 'shipping_city',
                'shipping_state_province', 'shipping_postal_code', 'shipping_country'
            ];

            billingFields.forEach((field, index) => {
                const billingValue = document.getElementById(field).value;
                document.getElementById(shippingFields[index]).value = billingValue;
            });
        }
    </script>
</body>

</html>