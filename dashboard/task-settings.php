<!-- Task Settings Tab -->
<div id="task-settings" class="form-content">
    <div class="settings-section">
        <h2 class="section-title">Task Settings</h2>

        <div class="form-grid">
            <div class="form-row">
                <label class="form-label">Default Task Rate</label>
                <input type="number" class="form-input" placeholder="0.00" step="0.01">
            </div>

            <div class="form-row">
                <label class="form-label">Currency</label>
                <select class="form-select">
                    <option>USD - US Dollar</option>
                    <option>EUR - Euro</option>
                    <option>GBP - British Pound</option>
                    <option>CAD - Canadian Dollar</option>
                </select>
            </div>
        </div>


        <div class="form-row">
            <label>Auto Start Tasks <br><span style="color: gray;">Automatically start timer when creating a new task</span></label>

            <label class="switch">
                <input type="checkbox">
                <br><span class="slider round"></span>
                <br><span style="color: gray;"></span></label>
        </div>


        <div class="form-row">
            <label>Show Task End Date <br><span style="color: gray;">Display end date field in task forms</span></label>

            <label class="switch">
                <input type="checkbox" checked>
                <br><span class="slider round"></span>
                <br><span style="color: gray;"></span></label>

        </div>

        <div class="form-row">
            <label>Task Documents <br><span style="color: gray;">Allow file uploads for tasks</span></label>

            <label class="switch">
                <input type="checkbox" checked>
                <br><span class="slider round"></span>
                <br><span style="color: gray;"></span></label>

        </div>
        <div class="form-row">
            <label>Show Project On Tasks <br><span style="color: gray;">Display project field in task forms</span></label>

            <label class="switch">
                <input type="checkbox" checked>
                <br><span class="slider round"></span>
                <br><span style="color: gray;"></span></label>
        </div>



        <div class="form-grid">
            <div class="form-row">
                <label class="form-label">Round To Nearest <br><span style="color: gray;"></span></label>
                <select class="form-select">
                    <option>No Rounding</option>
                    <option>5 Minutes</option>
                    <option>10 Minutes</option>
                    <option>15 Minutes</option>
                    <option>30 Minutes</option>
                    <option>1 Hour</option>
                </select>
            </div>

            <div class="form-row">
                <label class="form-label">Default Task Type <br><span style="color: gray;"></span></label>
                <select class="form-select">
                    <option>Development</option>
                    <option>Design</option>
                    <option>Testing</option>
                    <option>Meeting</option>
                    <option>Research</option>
                </select>
            </div>
        </div>


        <div class=form-row>
            <label>Lock Invoiced Tasks <br><span style="color: gray;">Prevent editing of tasks that have been invoiced</span></label>

            <label class="switch">
                <input type="checkbox" checked>
                <br><span class="slider round"></span>
                <br><span style="color: gray;"></span></label>
        </div>

        <div class="form-actions">
            <a href="./task-settings.php" class="btn-cancel">Cancel</a>
            <button type="submit" class="btn-save">Save</button>
        </div>
    </div>
    </div>