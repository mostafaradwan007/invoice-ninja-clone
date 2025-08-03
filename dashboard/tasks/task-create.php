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
  <title>New Task - Bee Company</title>
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
          <li class="breadcrumb-item"><a href="tasks.php">Tasks</a></li>
          <li class="breadcrumb-item active" aria-current="page">New Task</li>
        </ol>
      </nav>
    </div>

    <!-- Form Container -->
    <div class="form-container">
      <div class="form-card">
        <h1 class="form-title">New Task</h1>
        
        <form id="newTaskForm" action="#" method="POST">
          <!-- Client and Project Row -->
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="client_id">Client</label>
              <select class="form-control" id="client_id" name="client_id">
                <option value="">Select a client (optional)</option>
                <option value="1">Client A</option>
                <option value="2">Client B</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="project_id">Project</label>
              <select class="form-control" id="project_id" name="project_id">
                <option value="">Select a project (optional)</option>
                <option value="1">Project X</option>
                <option value="2">Project Y</option>
              </select>
            </div>
          </div>

          <!-- Description -->
          <div class="form-group">
            <label class="form-label required" for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required placeholder="Describe the work done..."></textarea>
          </div>

          <!-- Date and Duration Row -->
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="task_date">Date</label>
              <input type="date" class="form-control" id="task_date" name="task_date" value="<?php echo date('Y-m-d'); ?>">
            </div>
            <div class="form-group">
              <label class="form-label" for="duration">Duration</label>
              <input type="text" class="form-control" id="duration" name="duration" placeholder="e.g., 1:30 for 1h 30m">
            </div>
          </div>
          
          <!-- Form Actions -->
          <div class="form-actions">
            <a href="tasks.php" class="btn-cancel">Cancel</a>
            <button type="submit" class="btn-save">Save Task</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
