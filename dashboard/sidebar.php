<?php
// Include the configuration file to get the BASE_URL
// The path '../config.php' assumes sidebar.html is inside the 'dashboard' folder.
// Adjust the path if necessary (e.g., './config.php' or '../../config.php').
require_once __DIR__ . '/../config.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
  :root {
    --bee-yellow: #ffcc00;
    --bee-black: #1a1a1a;
    --bee-dark-gray: #333;
    --bee-light: #fff8e1;
  }

  body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f5f5f5;
  }

  /* Sidebar */
  .sidebar {
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    width: 280px;
    background-color: var(--bee-black);
    padding: 20px 16px;
    overflow-y: auto;
    box-shadow: 4px 0 10px rgba(0, 0, 0, 0.2);
  }

  .sidebar-item {
    display: flex;
    align-items: center;
    padding: 12px 14px;
    color: var(--bee-yellow);
    text-decoration: none;
    border-radius: 8px;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 600;
    transition: background-color 0.3s, color 0.3s;
  }


  .sidebar-item.active {
    background-color: var(--bee-yellow);
    color: var(--bee-black);
  }

  .sidebar-item i {
    width: 24px;
    margin-right: 14px;
    font-size: 18px;
  }

  .sidebar-item .plus-icon {
    margin-left: auto;
    font-size: 14px;
    opacity: 0.8;
  }

  .sidebar-bottom-icons {
    position: sticky;
    bottom: 0;
    background-color: var(--bee-black);
    padding: 16px 0;
    border-top: 1px solid #444;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: auto;
  }

  .sidebar-bottom-icons a {
    color: var(--bee-yellow);
    font-size: 20px;
    text-decoration: none;
  }

  .sidebar-bottom-icons a:hover {
    color: var(--bee-light);
  }

  .company-dropdown-container {
    padding-bottom: 16px;
    border-bottom: 1px solid #444;
    margin-bottom: 20px;
  }

  .company-dropdown-toggle {
    display: flex;
    align-items: center;
    background-color: var(--bee-black);
    color: var(--bee-yellow);
    padding: 10px 14px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;
    width: 100%;
    justify-content: space-between;
    transition: background-color 0.3s ease;
  }

  .company-dropdown-toggle:hover {
    background-color: #2a2a2a;
    color: var(--bee-light);
  }

  .company-dropdown-menu {
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    background-color: #fffbe6;
    font-size: 14px;
  }

  .company-dropdown-menu .dropdown-item {
    padding: 12px 16px;
    transition: background-color 0.2s;
    color: #222;
  }

  .company-dropdown-menu .dropdown-item:hover {
    background-color: #fff1a8;
  }

  .company-dropdown-menu .small {
    font-size: 12px;
    color: #555;
  }

  .company-dropdown-menu .fw-medium {
    font-weight: 600;
  }

  .company-dropdown-menu .text-truncate {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;

  }


.sidebar-item.active {
  background-color: var(--bee-yellow);
  color: var(--bee-black);
}


</style>

</head>
<body>
  <!-- Sidebar -->
  <nav class="sidebar">
    <div class="company-dropdown-container">
      <div class="dropdown">
        <a href="#" class="company-dropdown-toggle" id="companyDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <span>Bee Company</span>
          <i class="bi bi-chevron-expand ms-auto"></i>
        </a>
        <ul class="dropdown-menu company-dropdown-menu" aria-labelledby="companyDropdown">
          <li class="px-3 py-2 border-bottom">
            <div class="small">Signed in as</div>
            <div class="fw-medium text-truncate">mostafaradwan0155933@g...</div>
          </li>
          <li class="px-3 py-2 border-bottom">
            <div class="small">Company</div>
            <div class="d-flex align-items-center">
              <i class="bi bi-envelope me-2"></i>
              <span class="fw-medium">Untitled Company</span>
              <i class="bi bi-check ms-auto text-success"></i>
            </div>
          </li>
          <li><a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-person me-2"></i>
            Account Management
          </a></li>
          <li><a class="dropdown-item d-flex align-items-center" href="#">
            <i class="bi bi-box-arrow-right me-2"></i>
            Log Out
          </a></li>
        </ul>
      </div>
    </div>

    <a href="<?php echo BASE_URL; ?>index.php" class="sidebar-item">
      <i class="bi bi-house-door-fill"></i>
      Dashboard
    </a>
    <a href="<?php echo BASE_URL; ?>clients/clients.php" class="sidebar-item">
      <i class="bi bi-people"></i>
      Clients
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>products/products.php" class="sidebar-item">
      <i class="bi bi-bag"></i>
      Products
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>invoices/invoice.php" class="sidebar-item">
      <i class="bi bi-file-earmark-text"></i>
      Invoices
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>recurring-invoices/recurring-invoices.php" class="sidebar-item">
      <i class="bi bi-arrow-repeat"></i>
      Recurring Invoices
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>payments/payments.php" class="sidebar-item">
      <i class="bi bi-credit-card"></i>
      Payments
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>quotes/quote.php" class="sidebar-item">
      <i class="bi bi-file-text"></i>
      Quotes
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>credits/credits.php" class="sidebar-item">
      <i class="bi bi-journal-text"></i>
      Credits
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>projects/projects.php" class="sidebar-item">
      <i class="bi bi-briefcase"></i>
      Projects
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>tasks/tasks.php" class="sidebar-item">
      <i class="bi bi-check2-square"></i>
      Tasks
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>vendors/vendors.php" class="sidebar-item">
      <i class="bi bi-building"></i>
      Vendors
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>purchase orders/purchase-orders.php" class="sidebar-item">
      <i class="bi bi-clipboard-check"></i>
      Purchase Orders
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="<?php echo BASE_URL; ?>expenses/expenses.php" class="sidebar-item">
      <i class="bi bi-wallet2"></i>
      Expenses
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="#" class="sidebar-item">
      <i class="bi bi-arrow-repeat"></i>
      Recurring Expenses
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="#" class="sidebar-item">
      <i class="bi bi-arrow-up-arrow-down"></i>
      Transactions
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="#" class="sidebar-item">
      <i class="bi bi-graph-up"></i>
      Reports
      <i class="bi bi-plus plus-icon"></i>
    </a>
    <a href="#" class="sidebar-item">
      <i class="bi bi-gear"></i>
      Settings
    </a>

    <div class="sidebar-bottom-icons">
      <a href="#"><i class="bi bi-envelope"></i></a>
      <a href="#"><i class="bi bi-chat-dots"></i></a>
      <a href="#"><i class="bi bi-question-circle"></i></a>
      <a href="#"><i class="bi bi-info-circle"></i></a>
      <a href="#"><i class="bi bi-moon"></i></a>
      <a href="#"><i class="bi bi-box-arrow-in-right"></i></a>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const sidebarItems = document.querySelectorAll('.sidebar-item');

    // أولاً: فعل العنصر المحفوظ من قبل
    const lastActiveText = localStorage.getItem('activeSidebarText');
    if (lastActiveText) {
      const lastActiveItem = Array.from(sidebarItems).find(item =>
        item.textContent.trim() === lastActiveText
      );
      if (lastActiveItem) {
        lastActiveItem.classList.add('active');
      }
    }

    // ثانياً: لما يضغط المستخدم على أي عنصر، خزّن النص الداخلي بدل href
    sidebarItems.forEach(item => {
      item.addEventListener('click', () => {
        localStorage.setItem('activeSidebarText', item.textContent.trim());
      });
    });
  });
</script>




</body>
</html>

