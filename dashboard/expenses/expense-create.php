<?php 
    // These includes are for structure and should be kept.
    include_once '../header.php'; 
    include_once '../sidebar.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Expense - Bee Company</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- =================================================================== -->
  <!-- This is the exact same CSS from your previous 'create' style        -->
  <!-- =================================================================== -->
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

    .breadcrumb { background: none; padding: 0; margin: 0; font-size: 14px; }
    .breadcrumb-item { display: flex; align-items: center; }
    .breadcrumb-item + .breadcrumb-item::before { content: ">"; color: #6b7280; margin: 0 8px; }
    .breadcrumb-item a { color: #6b7280; text-decoration: none; }
    .breadcrumb-item.active { color: #1f2937; font-weight: 500; }

    /* Form Container */
    .form-container { max-width: 800px; margin: 0 auto; padding: 24px; }
    .form-card { background: white; border-radius: 12px; padding: 32px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); }
    .form-title { font-size: 24px; font-weight: 600; color: #1f2937; margin-bottom: 32px; text-align: left; }

    /* Form Fields */
    .form-group { margin-bottom: 24px; }
    .form-label { display: block; font-size: 14px; font-weight: 500; color: #374151; margin-bottom: 8px; }
    .form-label.required::after { content: " *"; color: #ef4444; }
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
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 24px; }

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
      background-color: #f3f4f6; color: #374151; border: 1px solid #d1d5db;
      padding: 10px 20px; border-radius: 8px; font-size: 14px;
      font-weight: 500; cursor: pointer; text-decoration: none;
    }
    .btn-cancel:hover { background-color: #e5e7eb; color: #374151; }
    .btn-save {
      background-color: var(--primary-blue); color: white; border: none;
      padding: 10px 20px; border-radius: 8px; font-size: 14px;
      font-weight: 500; cursor: pointer;
    }
    .btn-save:hover { background-color: #2563eb; }

    /* Responsive */
    @media (max-width: 768px) {
      .main-content { margin-left: 0; }
      .form-container, .breadcrumb-container { padding: 16px; }
      .form-card { padding: 24px 20px; }
      .form-row { grid-template-columns: 1fr; gap: 20px; }
    }
  </style>
</head>
<body>
  <!-- Main Content -->
  <div class="main-content">
    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item"><a href="expenses.php">Expenses</a></li>
          <li class="breadcrumb-item active" aria-current="page">New Expense</li>
        </ol>
      </nav>
    </div>

    <!-- Form Container -->
    <div class="form-container">
      <div class="form-card">
        <h1 class="form-title">New Expense</h1>
        
        <form id="newExpenseForm" action="#" method="POST" enctype="multipart/form-data">
          <!-- Amount and Date Row -->
          <div class="form-row">
            <div class="form-group">
              <label class="form-label required" for="amount">Amount</label>
              <input type="number" class="form-control" id="amount" name="amount" required min="0" step="0.01" placeholder="0.00">
            </div>
            <div class="form-group">
              <label class="form-label required" for="expense_date">Date</label>
              <input type="date" class="form-control" id="expense_date" name="expense_date" required value="<?php echo date('Y-m-d'); ?>">
            </div>
          </div>

          <!-- Vendor and Client Row -->
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="vendor_id">Vendor</label>
              <select class="form-control" id="vendor_id" name="vendor_id">
                <option value="">Select a vendor (optional)</option>
                <option value="1">Office Supplies Inc.</option>
                <option value="2">Marketing Solutions Ltd.</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="client_id">Client</label>
              <select class="form-control" id="client_id" name="client_id">
                <option value="">Select a client (for billable expenses)</option>
                <option value="1">Client A</option>
                <option value="2">Client B</option>
              </select>
            </div>
          </div>

          <!-- Category -->
          <div class="form-group">
            <label class="form-label required" for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
              <option value="">Select a category...</option>
              <option value="1">Office Supplies</option>
              <option value="2">Software</option>
              <option value="3">Travel</option>
              <option value="4">Meals & Entertainment</option>
              <option value="5">Utilities</option>
            </select>
          </div>

          <!-- Public Notes -->
          <div class="form-group">
            <label class="form-label" for="public_notes">Public Notes</label>
            <textarea class="form-control" id="public_notes" name="public_notes" rows="3" placeholder="Visible on invoices..."></textarea>
          </div>

          <!-- Attach Receipt -->
          <div class="form-group">
            <label class="form-label" for="receipt">Attach Receipt</label>
            <input type="file" class="form-control" id="receipt" name="receipt">
          </div>

          <!-- Form Actions -->
          <div class="form-actions">
            <a href="expenses.php" class="btn-cancel">Cancel</a>
            <button type="submit" class="btn-save">Save Expense</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
