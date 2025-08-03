<?php 
    // These includes are for structure and should be kept.
    // They pull in the visual header and sidebar for the page.
    include_once '../header.php'; 
    include_once '../sidebar.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendors - Bee Company</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- =================================================================== -->
  <!-- This is the exact same CSS from your products.php file for consistency -->
  <!-- =================================================================== -->
  <style>
    :root {
      --bee-yellow: #ffcc00;
      --bee-black: #1a1a1a;
      --bee-light-gray: #e5e7eb;
      --primary-blue: #3b82f6;
      --success-green: #22c55e;
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
      background-color: #f8fafc;
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

    /* Page Controls */
    .page-controls {
      padding: 0 24px 24px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }

    .left-controls, .right-controls {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    /* Action Buttons */
    .actions-btn {
      background-color: #60a5fa;
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      cursor: pointer;
    }

    .actions-btn:hover { background-color: #3b82f6; }

    .status-filter {
      background-color: #e5e7eb;
      color: #374151;
      border: none;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 14px;
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
    }

    .status-filter.active { background-color: #dbeafe; color: #1d4ed8; }

    .status-dropdown {
      background-color: #f3f4f6;
      color: #374151;
      border: 1px solid #d1d5db;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
    }

    .filter-input {
      border: 1px solid #d1d5db;
      border-radius: 6px;
      padding: 8px 12px;
      font-size: 14px;
      width: 200px;
    }

    .import-btn, .new-vendor-btn {
      color: white;
      border: none;
      padding: 8px 16px;
      border-radius: 6px;
      font-size: 14px;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .import-btn { background-color: var(--success-green); }
    .import-btn:hover { background-color: #16a34a; }

    .new-vendor-btn { background-color: var(--primary-blue); }
    .new-vendor-btn:hover { background-color: #2563eb; }

    /* Data Table */
    .table-container {
      background: white;
      margin: 0 24px;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .data-table {
      width: 100%;
      margin: 0;
      border-collapse: collapse;
    }

    .data-table thead { background-color: var(--primary-blue); }

    .data-table thead th {
      color: white;
      font-weight: 600;
      font-size: 14px;
      padding: 16px;
      text-align: left;
      border: none;
    }
    
    .data-table thead th:first-child { width: 50px; text-align: center; }
    
    .data-table tbody tr { border-bottom: 1px solid #f3f4f6; }
    .data-table tbody tr:hover { background-color: #f9fafb; }

    .data-table tbody td {
      padding: 16px;
      font-size: 14px;
      color: #374151;
      border: none;
    }
    .data-table tbody td:first-child { text-align: center; }

    .checkbox-input { width: 16px; height: 16px; cursor: pointer; }

    /* Empty State */
    .empty-state-text {
      text-align: center;
      padding: 60px 20px;
      color: #6b7280;
      font-size: 16px;
      font-weight: 500;
    }

    /* Pagination */
    .pagination-container {
      padding: 20px 24px;
      background: white;
      border-top: 1px solid #f3f4f6;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .pagination-info, .page-info, .pagination-controls {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 14px;
      color: #6b7280;
    }

    .rows-select {
      border: 1px solid #d1d5db;
      border-radius: 6px;
      padding: 6px 8px;
    }

    .columns-btn, .pagination-btn {
      background-color: #f3f4f6;
      color: #374151;
      border: 1px solid #d1d5db;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
    }
    
    .pagination-nav { display: flex; gap: 4px; }
    .pagination-btn:disabled { opacity: 0.5; cursor: not-allowed; }
  </style>
</head>
<body>
  <!-- Main Content -->
  <div class="main-content">
    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?> "><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page">Vendors</li>
        </ol>
      </nav>
    </div>

    <!-- Page Controls -->
    <div class="page-controls">
      <div class="left-controls">
        <div class="dropdown">
          <button class="actions-btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Actions</button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Archive Selected</a></li>
            <li><a class="dropdown-item" href="#">Delete Selected</a></li>
          </ul>
        </div>
        <button class="status-filter active" type="button">Active <i class="bi bi-x"></i></button>
        <div class="dropdown">
          <button class="status-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown">Status</button>
           <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">All Statuses</a></li>
            <li><a class="dropdown-item" href="#">Archived</a></li>
            <li><a class="dropdown-item" href="#">Deleted</a></li>
          </ul>
        </div>
      </div>
      <div class="right-controls">
        <input type="text" class="filter-input" placeholder="Filter">
        <button class="import-btn" type="button" onclick="window.location.href='vendor-import.php'">
          <i class="bi bi-download"></i> Import
        </button>
        <button class="new-vendor-btn" type="button" onclick="window.location.href='vendor-create.php'">
          New Vendor
        </button>
      </div>
    </div>

    <!-- Data Table -->
    <div class="table-container">
      <table class="data-table">
        <thead>
          <tr>
            <th><input type="checkbox" class="checkbox-input"></th>
            <th>NUMBER</th>
            <th>NAME</th>
            <th>CITY</th>
            <th>PHONE</th>
            <th>STATE</th>
            <th>DATE CREATED</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="7">
              <div class="empty-state-text">No records found</div>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="pagination-container">
        <div class="pagination-info">
          <select class="rows-select">
            <option>10</option><option>25</option><option>50</option>
          </select>
          <span>rows</span>
        </div>
        <div class="page-info">Page 1 of 1</div>
        <div class="pagination-controls">
          <button class="columns-btn" type="button">Columns</button>
          <div class="pagination-nav">
            <button class="pagination-btn" disabled><i class="bi bi-chevron-double-left"></i></button>
            <button class="pagination-btn" disabled><i class="bi bi-chevron-left"></i></button>
            <button class="pagination-btn" disabled><i class="bi bi-chevron-right"></i></button>
            <button class="pagination-btn" disabled><i class="bi bi-chevron-double-right"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
