<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Header - FatoraBee Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet"/>
  <style>
    :root {
      --bee-yellow: #ffcc00;
      --bee-light-gray: #f8f9fa;
      --bee-border: #e5e7eb;
      --bee-dark: #1a1a1a;
    }

    .top-nav {
      position: fixed;
      top: 0;
      left: 280px;
      width: calc(100% - 280px);
      height: 80px;
      background: rgba(255, 255, 255, 0.9);
      -webkit-backdrop-filter: blur(20px);
backdrop-filter: blur(20px);

      border-bottom: 1px solid var(--bee-border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 32px;
      z-index: 999;
      box-shadow: 0 1px 20px rgba(0,0,0,0.04);
    }

    .left-group {
      display: flex;
      align-items: center;
      gap: 24px;
    }

    .dashboard-text {
      font-weight: 700;
      font-size: 28px;
      color: var(--bee-dark);
      margin: 0;
    }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .add-btn {
      background: linear-gradient(135deg, var(--bee-yellow), #ffd700);
      color: var(--bee-dark);
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: 600;
      transition: all 0.2s ease;
      box-shadow: 0 2px 8px rgba(255, 204, 0, 0.3);
    }

    .add-btn:hover {
      transform: translateY(-1px);
      box-shadow: 0 4px 15px rgba(255, 204, 0, 0.4);
      color: var(--bee-dark);
    }

    .dropdown-menu.add-menu {
      width: 650px;
      padding: 24px;
      border-radius: 12px;
      border: none;
      box-shadow: 0 10px 40px rgba(0,0,0,0.15);
      -webkit-backdrop-filter: blur(20px);
backdrop-filter: blur(20px);

      background: rgba(255, 255, 255, 0.95);
    }

    .add-menu-wrapper {
      display: flex;
      gap: 32px;
    }

    .add-column {
      flex: 1;
    }

    .add-menu h6 {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 16px;
      display: flex;
      align-items: center;
      gap: 8px;
      color: var(--bee-dark);
      padding-bottom: 8px;
      border-bottom: 2px solid var(--bee-border);
    }

    .add-menu ul {
      list-style: none;
      padding-left: 0;
      margin: 0;
    }

    .add-menu li {
      font-size: 14px;
      margin-bottom: 8px;
      display: flex;
      align-items: center;
      gap: 10px;
      cursor: pointer;
      padding: 8px 12px;
      border-radius: 6px;
      transition: all 0.2s ease;
      color: #6b7280;
    }

    .add-menu li:hover {
      background: var(--bee-light-gray);
      color: var(--bee-dark);
      transform: translateX(4px);
    }

    .add-menu li i {
      width: 16px;
      text-align: center;
    }

    .search-container {
      flex: 1;
      max-width: 400px;
    }

    .search-input-group {
      display: flex;
      background: var(--bee-light-gray);
      border: 1px solid var(--bee-border);
      border-radius: 10px;
      overflow: hidden;
      transition: all 0.2s ease;
    }

    .search-input-group:focus-within {
      border-color: var(--bee-yellow);
      box-shadow: 0 0 0 3px rgba(255, 204, 0, 0.1);
    }

    .search-input {
      flex: 1;
      border: none;
      padding: 12px 16px;
      outline: none;
      background: transparent;
      font-size: 14px;
    }

    .ctrl-k-btn {
      background: var(--bee-border);
      border: none;
      padding: 8px 12px;
      font-size: 12px;
      color: #6b7280;
      font-weight: 500;
    }

    .notification-btn {
      background: var(--bee-light-gray);
      border: none;
      padding: 10px;
      border-radius: 8px;
      font-size: 18px;
      color: #6b7280;
      transition: all 0.2s ease;
      position: relative;
    }

    .notification-btn:hover {
      background: var(--bee-yellow);
      color: var(--bee-dark);
    }

    .notification-btn::after {
      content: '';
      position: absolute;
      top: 8px;
      right: 8px;
      width: 8px;
      height: 8px;
      background: #ef4444;
      border-radius: 50%;
      border: 2px solid white;
    }

    .profile-btn {
      display: flex;
      align-items: center;
      gap: 8px;
      background: var(--bee-light-gray);
      border: none;
      padding: 6px 12px;
      border-radius: 8px;
      transition: all 0.2s ease;
      text-decoration: none;
      color: var(--bee-dark);
    }

    .profile-btn:hover {
      background: var(--bee-yellow);
      color: var(--bee-dark);
    }

    .profile-avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      object-fit: cover;
      border: 2px solid var(--bee-yellow);
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
      .top-nav {
        left: 0;
        width: 100%;
        padding: 0 16px;
      }
      
      .left-group {
        gap: 12px;
      }
      
      .dashboard-text {
        font-size: 20px;
      }
      
      .search-container {
        max-width: 200px;
      }
      
      .add-menu {
        width: 90vw !important;
      }
      
      .add-menu-wrapper {
        flex-direction: column;
        gap: 20px;
      }
    }
  </style>
</head>
<body>

  <nav class="top-nav">
    <div class="left-group">
      <h1 class="dashboard-text">Dashboard</h1>

      <!-- Add Dropdown -->
      <div class="dropdown">
        <button class="add-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="bi bi-plus-lg me-2"></i>Add New
        </button>
        <div class="dropdown-menu add-menu">
          <div class="add-menu-wrapper">
            <div class="add-column">
              <h6><i class="bi bi-graph-up-arrow text-success"></i> Income & Sales</h6>
              <ul>
                <li><i class="bi bi-person-plus"></i> New Client</li>
                <li><i class="bi bi-receipt"></i> Create Invoice</li>
                <li><i class="bi bi-arrow-repeat"></i> Recurring Invoice</li>
                <li><i class="bi bi-file-text"></i> Quote/Estimate</li>
                <li><i class="bi bi-box2"></i> Add Product/Service</li>
                <li><i class="bi bi-credit-card-2-front"></i> Record Payment</li>
                <li><i class="bi bi-file-plus"></i> Credit Note</li>
              </ul>
            </div>

            <div class="add-column">
              <h6><i class="bi bi-wallet2 text-danger"></i> Expenses & Purchases</h6>
              <ul>
                <li><i class="bi bi-receipt-cutoff"></i> Add Expense</li>
                <li><i class="bi bi-cart3"></i> Purchase Order</li>
                <li><i class="bi bi-building"></i> Add Vendor/Supplier</li>
                <li><i class="bi bi-arrow-left-right"></i> Bank Transaction</li>
                <li><i class="bi bi-file-earmark-spreadsheet"></i> Import Expenses</li>
              </ul>
            </div>

            <div class="add-column">
              <h6><i class="bi bi-gear-fill text-secondary"></i> Settings & Tools</h6>
              <ul>
                <li><i class="bi bi-stripe"></i> Connect Stripe</li>
                <li><i class="bi bi-paypal"></i> Setup PayPal</li>
                <li><i class="bi bi-percent"></i> Tax Settings</li>
                <li><i class="bi bi-image"></i> Upload Company Logo</li>
                <li><i class="bi bi-envelope"></i> Email Templates</li>
                <li><i class="bi bi-download"></i> Backup Data</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Enhanced Search -->
      <div class="search-container">
        <div class="search-input-group">
          <input type="text" class="search-input" placeholder="Search invoices, clients, products..." id="globalSearch">
          <button class="ctrl-k-btn" title="Quick Search Shortcut">⌘K</button>
        </div>
      </div>
    </div>

    <div class="nav-right">
      <!-- Notifications -->
      <button class="notification-btn" title="Notifications" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
      </button>
      <div class="dropdown-menu dropdown-menu-end p-3" style="width: 300px;">
        <h6 class="dropdown-header">Recent Notifications</h6>
        <div class="notification-item p-2 border-bottom">
          <small class="text-muted">2 hours ago</small>
          <p class="mb-0 small">Invoice #INV-001 has been paid</p>
        </div>
        <div class="notification-item p-2 border-bottom">
          <small class="text-muted">1 day ago</small>
          <p class="mb-0 small">New client registration: Ahmed Corp</p>
        </div>
        <div class="notification-item p-2">
          <small class="text-muted">3 days ago</small>
          <p class="mb-0 small">Monthly report is ready</p>
        </div>
        <div class="text-center mt-2">
          <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
        </div>
      </div>

      <!-- Profile Dropdown -->
      <div class="dropdown">
        <a href="#" class="profile-btn dropdown-toggle" data-bs-toggle="dropdown" id="profileDropdown">
          <img src="https://ui-avatars.com/api/?name=User&background=ffcc00&color=1a1a1a" alt="Profile" class="profile-avatar">
          <span class="d-none d-md-inline">Account</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="../Login-sign_Pages/profile.php">
            <i class="bi bi-person-circle me-2"></i>My Profile
          </a></li>
          <li><a class="dropdown-item" href="./settings.php">
            <i class="bi bi-gear me-2"></i>Settings
          </a></li>
          <li><a class="dropdown-item" href="#">
            <i class="bi bi-question-circle me-2"></i>Help & Support
          </a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="../Login-sign_Pages/logout.php">
            <i class="bi bi-box-arrow-right me-2"></i>Sign Out
          </a></li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Enhanced search functionality
    document.getElementById('globalSearch').addEventListener('input', function(e) {
      const query = e.target.value.toLowerCase();
      if (query.length > 2) {
        // Here you would typically make an AJAX request to search
        console.log('Searching for:', query);
        // Show search suggestions dropdown
      }
    });

    // Keyboard shortcut for search (Cmd+K or Ctrl+K)
    document.addEventListener('keydown', function(e) {
      if ((e.metaKey || e.ctrlKey) && e.key === 'k') {
        e.preventDefault();
        document.getElementById('globalSearch').focus();
      }
    });

    // Add menu item click handlers
    document.querySelectorAll('.add-menu li').forEach(item => {
      item.addEventListener('click', function() {
        const action = this.textContent.trim();
        console.log('Creating:', action);
        // Here you would redirect to the appropriate page or open a modal
        // Example: window.location.href = '/create-invoice';
      });
    });

    // Auto-update profile avatar if user data is available
    document.addEventListener('DOMContentLoaded', function() {
      // This would typically get user data from PHP session or API
      const userAvatar = document.querySelector('.profile-avatar');
      const userName = 'Current User'; // This should come from PHP session
      
      if (userName) {
        userAvatar.src = `https://ui-avatars.com/api/?name=${encodeURIComponent(userName)}&background=ffcc00&color=1a1a1a`;
      }
    });

    // Real-time notifications (you could implement WebSocket or periodic polling)
    function updateNotifications() {
      // This would fetch new notifications from your backend
      console.log('Checking for new notifications...');
    }

    // Check for notifications every 30 seconds
    setInterval(updateNotifications, 30000);
  </script>

</body>
</html>