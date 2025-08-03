
<?php 
    // This assumes your edit file is inside the 'tasks' folder
    include_once '../header.php'; 
    include_once '../sidebar.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task - Bee Company</title>
    <!-- We assume Bootstrap is already loaded via header.php -->
    <style>
        /* Re-using your established styles for consistency */
        .main-content { margin-left: 280px; margin-top: 70px; padding: 24px; background-color: #f8fafc; }
        .form-container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); }
        .form-header { margin-bottom: 24px; padding-bottom: 16px; border-bottom: 1px solid #e5e7eb; }
        .form-actions { margin-top: 30px; text-align: right; }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="main-content">
        <div class="form-container">
            <div class="form-header">
                <h2 class="h4">Edit Task #<?php echo htmlspecialchars($task['id']); ?></h2>
                <p class="text-muted">Update the details for this task.</p>
            </div>

            <form action="task-edit.php?id=<?php echo htmlspecialchars($task['id']); ?>" method="POST">
                
                <!-- Client and Project Selection -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="client_id" class="form-label">Client</label>
                        <select class="form-select" id="client_id" name="client_id" required>
                            <option value="" disabled>Select a client...</option>
                            <?php foreach ($clients as $client): ?>
                                <option value="<?php echo $client['id']; ?>" <?php if ($client['id'] == $task['client_id']) echo 'selected'; ?>>
                                    <?php echo htmlspecialchars($client['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="project_id" class="form-label">Project (Optional)</label>
                        <select class="form-select" id="project_id" name="project_id">
                            <option value="" disabled>Select a project...</option>
                             <?php foreach ($projects as $project): ?>
                                <option value="<?php echo $project['id']; ?>" <?php if ($project['id'] == $task['project_id']) echo 'selected'; ?>>
                                    <?php echo htmlspecialchars($project['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Task Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required><?php echo htmlspecialchars($task['description']); ?></textarea>
                </div>

                <!-- Duration and State -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration" value="<?php echo htmlspecialchars($task['duration']); ?>">
                    </div>
                    <div class="col-md-6">
                         <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" name="state">
                            <option value="logged" <?php if ($task['state'] == 'logged') echo 'selected'; ?>>Logged</option>
                            <option value="running" <?php if ($task['state'] == 'running') echo 'selected'; ?>>Running</option>
                        </select>
                    </div>
                </div>

                <!-- Form Action Buttons -->
                <div class="form-actions">
                    <a href="tasks.php" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Task</button>
                </div>

            </form>
        </div>
    </div>

</body>
</html>
