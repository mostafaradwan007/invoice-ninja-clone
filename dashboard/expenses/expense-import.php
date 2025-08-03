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
  <title>Import Expenses - Bee Company</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- This is the same consistent styling from your other import pages -->
  <style>
    :root {
      --primary-blue: #3b82f6;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8fafc;
      margin: 0;
    }

    .main-content {
      margin-left: 280px;
      margin-top: 70px;
      padding: 0;
      min-height: calc(100vh - 70px);
    }

    .breadcrumb-container {
      padding: 16px 24px;
      background: white;
      border-bottom: 1px solid #e5e7eb;
    }

    .breadcrumb { background: none; padding: 0; margin: 0; font-size: 14px; }
    .breadcrumb-item { display: flex; align-items: center; }
    .breadcrumb-item + .breadcrumb-item::before { content: ">"; color: #6b7280; margin: 0 8px; }
    .breadcrumb-item a { color: #6b7280; text-decoration: none; }
    .breadcrumb-item.active { color: #1f2937; }

    .import-content { padding: 32px 24px; }
    .import-section { max-width: 800px; margin: 0 auto; }
    .section-title { font-size: 24px; font-weight: 600; color: #1f2937; margin-bottom: 32px; }

    /* File Upload Area */
    .file-upload-container { position: relative; }
    .file-upload-area {
      border: 2px dashed #d1d5db;
      border-radius: 12px;
      padding: 60px 40px;
      text-align: center;
      background-color: white;
      transition: all 0.3s ease;
      cursor: pointer;
    }
    .file-upload-area:hover, .file-upload-area.dragover {
      border-color: var(--primary-blue);
      background-color: #eff6ff;
    }
    .upload-icon {
      width: 64px; height: 64px; background-color: #f3f4f6;
      border-radius: 12px; display: flex; align-items: center;
      justify-content: center; margin: 0 auto 16px;
      font-size: 24px; color: #6b7280;
    }
    .upload-text { font-size: 16px; color: #374151; font-weight: 500; }
    .upload-subtext { font-size: 14px; color: #6b7280; margin-top: 4px; }
    .file-input { position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer; }

    /* Selected File Display */
    .selected-file {
      display: none; background-color: white; border: 1px solid #d1d5db;
      border-radius: 8px; padding: 16px; margin-top: 16px;
      align-items: center; gap: 12px;
    }
    .selected-file.show { display: flex; }
    .file-icon {
      width: 40px; height: 40px; background-color: #22c55e;
      border-radius: 8px; display: flex; align-items: center;
      justify-content: center; color: white; font-size: 18px;
    }
    .file-info { flex: 1; }
    .file-name { font-weight: 500; color: #374151; font-size: 14px; }
    .file-size { color: #6b7280; font-size: 12px; }
    .remove-file-btn { background: none; border: none; color: #dc2626; font-size: 18px; cursor: pointer; padding: 4px; }

    /* Action Buttons */
    .import-actions {
      display: flex; gap: 12px; justify-content: flex-end;
      margin-top: 32px; padding-top: 20px; border-top: 1px solid #e5e7eb;
    }
    .cancel-btn {
      background: none; border: 1px solid #d1d5db; color: #374151;
      padding: 10px 20px; border-radius: 6px; font-size: 14px;
      font-weight: 500; cursor: pointer; text-decoration: none;
    }
    .import-btn {
      background-color: var(--primary-blue); color: white; border: none;
      padding: 10px 20px; border-radius: 6px; font-size: 14px;
      font-weight: 500; cursor: pointer; opacity: 0.5; pointer-events: none;
    }
    .import-btn.active { opacity: 1; pointer-events: auto; }

    /* Help Text */
    .help-text { background-color: #eff6ff; border: 1px solid #bfdbfe; border-radius: 8px; padding: 16px; margin-top: 24px; }
    .help-title { font-weight: 600; color: #1e40af; margin-bottom: 8px; font-size: 14px; }
    .help-content { color: #1e40af; font-size: 14px; line-height: 1.5; }
    .help-content ul { margin: 8px 0 0 0; padding-left: 20px; }
    .help-content li { margin-bottom: 4px; }
    .download-template-btn { color: var(--primary-blue); text-decoration: none; font-weight: 500; }
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
          <li class="breadcrumb-item active" aria-current="page">Import</li>
        </ol>
      </nav>
    </div>

    <!-- Import Content -->
    <div class="import-content">
      <div class="import-section">
        <h1 class="section-title">Import Expenses</h1>
        
        <form id="importForm" action="#" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="file-upload-container">
              <div class="file-upload-area" id="fileUploadArea">
                <div class="upload-icon"><i class="bi bi-upload"></i></div>
                <div class="upload-text">Drop CSV file here or click to upload</div>
                <div class="upload-subtext">Supported format: .csv</div>
                <input type="file" class="file-input" id="csvFile" name="csvFile" accept=".csv" required>
              </div>
              
              <div class="selected-file" id="selectedFile">
                <div class="file-icon"><i class="bi bi-file-earmark-text"></i></div>
                <div class="file-info">
                  <div class="file-name" id="fileName"></div>
                  <div class="file-size" id="fileSize"></div>
                </div>
                <button type="button" class="remove-file-btn" id="removeFileBtn"><i class="bi bi-x"></i></button>
              </div>
            </div>
          </div>

          <div class="help-text">
            <div class="help-title">Import Guidelines:</div>
            <div class="help-content">
              Please ensure your CSV file includes columns for:
              <ul>
                <li>Expense Date (required, format YYYY-MM-DD)</li>
                <li>Amount (required)</li>
                <li>Category (required)</li>
                <li>Vendor Name (optional, must match an existing vendor)</li>
                <li>Client Name (optional, for billable expenses)</li>
                <li>Public Notes (optional)</li>
              </ul>
              <a href="#" class="download-template-btn" id="downloadTemplate">Download sample template</a>
            </div>
          </div>

          <div class="import-actions">
            <a href="expenses.php" class="cancel-btn">Cancel</a>
            <button type="submit" class="import-btn" id="importBtn">Import Expenses</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // This is the same consistent JS from your other import pages
    document.addEventListener('DOMContentLoaded', function() {
      const fileUploadArea = document.getElementById('fileUploadArea');
      const fileInput = document.getElementById('csvFile');
      const selectedFile = document.getElementById('selectedFile');
      const fileName = document.getElementById('fileName');
      const fileSize = document.getElementById('fileSize');
      const removeFileBtn = document.getElementById('removeFileBtn');
      const importBtn = document.getElementById('importBtn');

      fileUploadArea.addEventListener('dragover', (e) => { e.preventDefault(); fileUploadArea.classList.add('dragover'); });
      fileUploadArea.addEventListener('dragleave', (e) => { e.preventDefault(); fileUploadArea.classList.remove('dragover'); });
      fileUploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        fileUploadArea.classList.remove('dragover');
        if (e.dataTransfer.files.length > 0) handleFileSelection(e.dataTransfer.files[0]);
      });
      fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) handleFileSelection(e.target.files[0]);
      });
      removeFileBtn.addEventListener('click', resetFileSelection);

      function handleFileSelection(file) {
        if (!file.name.toLowerCase().endsWith('.csv')) {
          alert('Please select a CSV file.');
          return;
        }
        fileName.textContent = file.name;
        fileSize.textContent = formatFileSize(file.size);
        selectedFile.classList.add('show');
        fileUploadArea.style.display = 'none';
        importBtn.classList.add('active');
      }

      function resetFileSelection() {
        fileInput.value = '';
        selectedFile.classList.remove('show');
        fileUploadArea.style.display = 'block';
        importBtn.classList.remove('active');
      }

      function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
      }

      document.getElementById('downloadTemplate').addEventListener('click', function(e) {
        e.preventDefault();
        const csvContent = 'Expense Date,Amount,Category,Vendor Name,Client Name,Public Notes\n' +
                         '2025-08-01,49.00,Software,SaaS Provider Ltd.,Client A,"Monthly subscription"\n' +
                         '2025-07-20,115.50,Office Supplies,Office Supplies Inc.,,"Printer paper and ink"';
        
        const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'expenses-import-template.csv';
        a.click();
        window.URL.revokeObjectURL(url);
      });
    });
  </script>
</body>
</html>
