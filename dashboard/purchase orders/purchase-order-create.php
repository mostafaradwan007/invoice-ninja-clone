<?php
include_once '../header.php';
include_once '../sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Purchase Order - Bee Company</title>
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

    /* Form Layout */
    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
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
    }

    .btn-cancel:hover {
      background-color: #e5e7eb;
      color: #374151;
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

    /* Responsive */
    @media (max-width: 768px) {
      .main-content {
        margin-left: 0;
      }

      .form-container,
      .breadcrumb-container {
        padding: 16px;
      }

      .form-card {
        padding: 24px 20px;
      }

      .form-row {
        grid-template-columns: 1fr;
        gap: 20px;
      }
    }

    :root {
      --primary-blue: #3b82f6;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8fafc;
    }

    .main-content {
      margin-left: 280px;
      margin-top: 70px;
      padding: 24px;
    }

    .form-container {
      max-width: 1100px;
      margin: 0 auto;
    }

    .form-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
    }

    .form-card {
      background: white;
      border-radius: 12px;
      padding: 32px;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .form-label {
      font-weight: 500;
      font-size: 14px;
      color: #374151;
    }

    .form-control,
    .form-select {
      font-size: 14px;
    }

    .line-items-table th {
      background-color: #f8f9fa;
      font-weight: 600;
      font-size: 13px;
      text-transform: uppercase;
    }

    .line-items-table input {
      border: 1px solid #f0f0f0;
      border-radius: 6px;
      padding: 6px 10px;
    }

    .line-items-table input:focus {
      box-shadow: 0 0 0 2px var(--primary-blue-light);
      border-color: var(--primary-blue);
      outline: none;
    }

    .line-items-table .line-total {
      font-weight: 500;
    }

    .totals-section {
      text-align: right;
    }

    .totals-section td {
      padding: 0.75rem 0;
    }

    .totals-section td:first-child {
      font-weight: 500;
      border-top: 1px solid #dee2e6;
    }

    .totals-section .grand-total td {
      font-size: 1.2rem;
      font-weight: bold;
      border-top: 2px solid #333;
    }

    .remove-row-btn {
      background: none;
      border: none;
      color: #dc3545;
      font-size: 1.2rem;
    }
  </style>
</head>

<body>
  <div class="main-content">
    <div class="form-container">
      <!-- Page Header -->
      <div class="form-header">
        <div>
          <h1 class="h4 mb-0">New Purchase Order</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0 m-0">
              <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?> "><i class="bi bi-house-door"></i></a></li>
              <li class="breadcrumb-item"><a href="./purchase-orders.php">Purchase Orders</a></li>
              <li class="breadcrumb-item active" aria-current="page">New</li>
            </ol>
          </nav>
        </div>
        <div>
          <a href="purchase-orders.php" class="btn btn-secondary">Cancel</a>
          <button type="submit" form="po-form" class="btn btn-primary">Save Purchase Order</button>
        </div>
      </div>

      <!-- Main Form Card -->
      <div class="form-card">
        <form id="po-form" action="#" method="POST">
          <!-- Top Section: Vendor, Dates, etc. -->
          <div class="row mb-4">
            <div class="col-md-5">
              <label for="vendor" class="form-label required">Vendor</label>
              <select id="vendor" name="vendor" class="form-select" required>
                <option selected disabled>Select a vendor...</option>
                <option value="1">Office Supplies Inc.</option>
                <option value="2">Marketing Solutions Ltd.</option>
              </select>
            </div>
            <div class="col-md-7">
              <div class="row">
                <div class="col-md-4">
                  <label for="po_number" class="form-label">PO Number</label>
                  <input type="text" id="po_number" name="po_number" class="form-control" placeholder="Auto-generated">
                </div>
                <div class="col-md-4">
                  <label for="po_date" class="form-label">Date</label>
                  <input type="date" id="po_date" name="po_date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                </div>
                <div class="col-md-4">
                  <label for="due_date" class="form-label">Due Date</label>
                  <input type="date" id="due_date" name="due_date" class="form-control">
                </div>
              </div>
            </div>
          </div>

          <!-- Line Items Section -->
          <h5 class="mb-3">Items</h5>
          <table class="table line-items-table">
            <thead>
              <tr>
                <th style="width: 35%;">Item</th>
                <th style="width: 25%;">Description</th>
                <th style="width: 12%;">Unit Cost</th>
                <th style="width: 10%;">Qty</th>
                <th style="width: 13%;" class="text-end">Line Total</th>
                <th style="width: 5%;"></th>
              </tr>
            </thead>
            <tbody id="line-items-body">
              <!-- Rows will be added here by JavaScript -->
            </tbody>
          </table>
          <button type="button" id="add-line-btn" class="btn btn-sm btn-outline-primary"><i class="bi bi-plus"></i> Add New Line</button>

          <!-- Bottom Section: Notes & Totals -->
          <div class="row mt-5">
            <div class="col-md-6">
              <div class="mb-3">
                <label for="notes" class="form-label">Public Notes</label>
                <textarea id="notes" name="notes" class="form-control" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="terms" class="form-label">Terms</label>
                <textarea id="terms" name="terms" class="form-control" rows="3"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <table class="table border-0 totals-section">
                <tbody>
                  <tr>
                    <td>Subtotal</td>
                    <td id="subtotal" class="text-end">$0.00</td>
                  </tr>
                  <tr>
                    <td>Tax (10%)</td>
                    <td id="tax" class="text-end">$0.00</td>
                  </tr>
                  <tr class="grand-total">
                    <td>Total</td>
                    <td id="grand-total" class="text-end">$0.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const addLineBtn = document.getElementById('add-line-btn');
      const lineItemsBody = document.getElementById('line-items-body');

      // Function to add a new line item row
      function addNewLine() {
        const row = document.createElement('tr');
        row.innerHTML = `
                <td><input type="text" class="form-control item-name" placeholder="Item name"></td>
                <td><input type="text" class="form-control item-desc" placeholder="Description"></td>
                <td><input type="number" class="form-control item-cost" placeholder="0.00" min="0" step="0.01"></td>
                <td><input type="number" class="form-control item-qty" value="1" min="1"></td>
                <td class="text-end line-total">$0.00</td>
                <td class="text-center"><button type="button" class="remove-row-btn"><i class="bi bi-trash"></i></button></td>
            `;
        lineItemsBody.appendChild(row);
      }

      // Add first line on page load
      addNewLine();

      // Event listener for "Add New Line" button
      addLineBtn.addEventListener('click', addNewLine);

      // Event listener for removing a row and calculating totals
      lineItemsBody.addEventListener('click', function(e) {
        if (e.target.closest('.remove-row-btn')) {
          e.target.closest('tr').remove();
          updateTotals();
        }
      });

      // Event listener for input changes to calculate totals
      lineItemsBody.addEventListener('input', function(e) {
        const row = e.target.closest('tr');
        if (row) {
          const costInput = row.querySelector('.item-cost');
          const qtyInput = row.querySelector('.item-qty');
          const lineTotalEl = row.querySelector('.line-total');

          const cost = parseFloat(costInput.value) || 0;
          const qty = parseInt(qtyInput.value) || 0;

          const lineTotal = cost * qty;
          lineTotalEl.textContent = '$' + lineTotal.toFixed(2);

          updateTotals();
        }
      });

      // Function to update all totals
      function updateTotals() {
        let subtotal = 0;
        const rows = lineItemsBody.querySelectorAll('tr');
        rows.forEach(row => {
          const lineTotalText = row.querySelector('.line-total').textContent;
          subtotal += parseFloat(lineTotalText.replace('$', '')) || 0;
        });

        const taxRate = 0.10; // 10% tax
        const tax = subtotal * taxRate;
        const grandTotal = subtotal + tax;

        document.getElementById('subtotal').textContent = '$' + subtotal.toFixed(2);
        document.getElementById('tax').textContent = '$' + tax.toFixed(2);
        document.getElementById('grand-total').textContent = '$' + grandTotal.toFixed(2);
      }
    });
  </script>
</body>

</html>