<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create Payment - Bee Company</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #f8f9fa;
    }

    .main-content {
      margin-left: 280px;
      margin-top: 70px;
      padding: 20px 30px;
      min-height: calc(100vh - 70px);
      background-color: #f8fafc;
    }

    @media (max-width: 992px) {
      .main-content {
        margin-left: 0;
        padding: 15px 15px;
      }
    }

    /* Breadcrumb */
    .breadcrumb-container {
      margin-bottom: 25px;
      background-color: #f8fafc;
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

    .breadcrumb i {
      font-size: 16px;
    }

    /* Form */
    .form-container {
      background: #fff;
      padding: 20px 25px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
      max-width: 800px;
      width: 100%;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php include 'sidebar.html'; ?>
  <?php include 'header.html'; ?>

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
            <a href="./payments.php">Payments</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Create Payment</li>
        </ol>
      </nav>
    </div>

    <!-- Form Container -->
    <div class="d-flex justify-content-center">
      <div class="form-container">
        <h4 class="mb-4">Enter Payment</h4>
        <form>
          <div class="mb-3">
            <label class="form-label">Client</label>
            <select class="form-select">
              <option selected disabled>Select client</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Amount received</label>
            <input type="text" class="form-control" placeholder="Leave blank unless overpaid or no invoice">
            <small class="form-text text-muted">
              Enter a value here if the total amount received was MORE than the invoice amount, or when recording a payment with no invoices.
            </small>
          </div>

          <div class="mb-3">
            <label class="form-label">Payment Date</label>
            <input type="date" class="form-control" value="<?= date('Y-m-d') ?>">
          </div>

          <div class="mb-3">
            <label class="form-label">Payment Type</label>
            <select class="form-select">
              <option selected disabled>Select payment type</option>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Transaction Reference</label>
            <input type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label class="form-label">Private Notes</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>

          <div class="form-check form-switch mb-3">
            <input class="form-check-input" type="checkbox" id="sendEmail" checked>
            <label class="form-check-label" for="sendEmail">Send Email</label>
          </div>

          <div class="form-check form-switch mb-4">
            <input class="form-check-input" type="checkbox" id="convertCurrency">
            <label class="form-check-label" for="convertCurrency">Convert currency</label>
          </div>

          <button type="submit" class="btn btn-primary">Save Payment</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
