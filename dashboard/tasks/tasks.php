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
  <title>Tasks - Bee Company</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- =================================================================== -->
  <!-- This is the exact same CSS from your previous style templates       -->
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

    .breadcrumb { background: none; padding: 0; margin: 0; font-size: 14px; }
    .breadcrumb-item { display: flex; align-items: center; }
    .breadcrumb-item + .breadcrumb-item::before { content: ">"; color: #6b7280; margin: 0 8px; }
    .breadcrumb-item a { color: #6b7280; text-decoration: none; }
    .breadcrumb-item.active { color: #1f2937; font-weight: 500; }

    /* Page Controls */
    .page-controls {
      padding: 0 24px 24px 24px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      flex-wrap: wrap;
    }

    .left-controls, .right-controls { display: flex; align-items: center; gap: 12px; flex-wrap: wrap; }

    /* Action Buttons & Filters */
    .actions-btn, .status-dropdown, .status-filter, .kanban-btn {
      background-color: #f3f4f6;
      color: #374151;
      border: 1px solid #d1d5db;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 14px;
      cursor: pointer;
    }
    .actions-btn { background-color: #60a5fa; color: white; border-color: #60a5fa; }
    .status-filter.active { background-color: #dbeafe; color: #1d4ed8; border-color: #93c5fd; }
    .filter-input { border: 1px solid #d1d5db; border-radius: 6px; padding: 8px 12px; font-size: 14px; width: 200px; }

    .import-btn, .new-task-btn {
      color: white; border: none; padding: 8px 16px; border-radius: 6px;
      font-size: 14px; font-weight: 500; display: flex; align-items: center; gap: 8px;
      text-decoration: none;
    }
    .import-btn { background-color: var(--success-green); }
    .new-task-btn { background-color: var(--primary-blue); }

    /* Data Table */
    .table-container { background: white; margin: 0 24px; border-radius: 8px; overflow: hidden; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); }
    .data-table { width: 100%; margin: 0; border-collapse: collapse; }
    .data-table thead { background-color: var(--primary-blue); }
    .data-table thead th { color: white; font-weight: 600; font-size: 14px; padding: 16px; text-align: left; border: none; }
    .data-table thead th:first-child { width: 50px; text-align: center; }
    .data-table tbody tr { border-bottom: 1px solid #f3f4f6; }
    .data-table tbody td { padding: 16px; font-size: 14px; color: #374151; border: none; vertical-align: middle; }
    .data-table tbody td:first-child { text-align: center; }
    .checkbox-input { width: 16px; height: 16px; cursor: pointer; }

    /* Status Badge */
    .status-badge { padding: 4px 10px; border-radius: 12px; font-size: 12px; font-weight: 500; text-transform: uppercase; }
    .status-logged { background-color: #e5e7eb; color: #4b5563; }
    .status-running { background-color: #dbeafe; color: #3b82f6; }
    .status-invoiced { background-color: #cffafe; color: #0891b2; }
    .status-paid { background-color: #d1fae5; color: #10b981; }

    /* Empty State */
    .empty-state-text { text-align: center; padding: 60px 20px; color: #6b7280; font-size: 16px; font-weight: 500; }

    /* Pagination */
    .pagination-container { padding: 20px 24px; background: white; border-top: 1px solid #f3f4f6; display: flex; align-items: center; justify-content: space-between; }
    .pagination-info, .page-info, .pagination-controls { display: flex; align-items: center; gap: 12px; font-size: 14px; color: #6b7280; }
    .rows-select { border: 1px solid #d1d5db; border-radius: 6px; padding: 6px 8px; }
    .columns-btn, .pagination-btn { background-color: #f3f4f6; color: #374151; border: 1px solid #d1d5db; padding: 8px 12px; border-radius: 6px; font-size: 14px; cursor: pointer; }
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
          <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>"><i class="bi bi-house-door"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page">Tasks</li>
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
            <li><a class="dropdown-item" href="#">Logged</a></li>
            <li><a class="dropdown-item" href="#">Running</a></li>
            <li><a class="dropdown-item" href="#">Invoiced</a></li>
            <li><a class="dropdown-item" href="#">Paid</a></li>
          </ul>
        </div>
      </div>
      <div class="right-controls">
        <button class="kanban-btn" type="button">Kanban</button>
        <input type="text" class="filter-input" placeholder="Filter">
        <a href="task-import.php" class="import-btn">
          <i class="bi bi-download"></i> Import
        </a>
        <a href="task-create.php" class="new-task-btn">
          New Task
        </a>
      </div>
    </div>

    <!-- Data Table -->
    <div class="table-container">
      <table class="data-table">
        <thead>
          <tr>
            <th><input type="checkbox" class="checkbox-input"></th>
            <th>STATUS</th>
            <th>NUMBER</th>
            <th>CLIENT</th>
            <th>DESCRIPTION</th>
            <th>DURATION</th>
            <th>STATE</th>
          </tr>
        </thead>
        <tbody>
          <!-- Example Row -->
          <tr>
              <td><input type="checkbox" class="checkbox-input"></td>
              <td><span class="status-badge status-running">Running</span></td>
              <td>TSK-0034</td>
              <td>Client A</td>
              <td>Design mockups for new website homepage</td>
              <td>2:45</td>
              <td>Active</td>
          </tr>
          <tr>
              <td><input type="checkbox" class="checkbox-input"></td>
              <td><span class="status-badge status-invoiced">Invoiced</span></td>
              <td>TSK-0033</td>
              <td>Client B</td>
              <td>Develop backend API for user authentication</td>
              <td>15:30</td>
              <td>Archived</td>
          </tr>
          <!-- Empty State -->
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
