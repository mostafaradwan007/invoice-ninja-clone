<!-- Tabs -->
<div class="tabs">
    <div class="tab-list">
        <div class="tab active" onclick="showuserTab('invoices')">invoices</div>
        <div class="tab" onclick="showuserTab('quotes')">quotes</div>

    </div>
</div>


<!-- Workflow Settings -->

<div class="form-content">

    <div id="user-invoices-tab" class="tab-content active">
        <div class="form-title">Workflow Settings</div>

        <div class="form-row">
            <label>Auto Email Invoice<br><span style="color: gray;">Automatically email recurring invoices when created.</span></label>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider round"></span>
            </label>
        </div>
        <div class="form-row">
            <label>Stop On Unpaid<br><span style="color: gray;">
                    Stop creating recurring invoices if the last invoice is unpaid.</span></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
        <hr style="color: gray;">
        <div class="form-row">
            <label>Auto Archive<br><span style="color: gray;">Automatically archive invoices when paid.</span></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="form-row">
            <label>Auto Archive Cancelled Invoice
                <br><span style="color:gray;">Automatically archive invoices when cancelled</span></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="form-row">
            <label>Lock Invoices:</label>
            <select>
                <option value="off" selected>Off</option>
                <option value="sent">When Sent</option>
                <option value="paid">When Paid</option>
            </select>
        </div>
    </div>
    <div id="user-quotes-tab" class="tab-content">
        <div class="form-row">
            <label>Auto Convert
                <br><span style="color:gray;">Automatically convert a quote to an invoice when approved.</span></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="form-row">
            <label>Auto Archive
                <br><span style="color:gray;">Automatically archive quotes when converted to invoice.</span></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="form-row">
            <label>Use Quote Terms
                <br><span style="color:gray;">When converting a quote to an invoice</span></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>

    </div>
</div>

<div class="form-actions">
    <button class="btn-cancel">Cancel</button>
    <button class="btn-save">Save</button>
</div>
<script>
    function showuserTab(tabName) {
        // Hide all tab content
        const allTabContent = document.querySelectorAll('.tab-content');
        allTabContent.forEach(content => content.classList.remove('active'));

        // Show selected tab content
        const targetTab = document.getElementById('user-' + tabName + '-tab');
        if (targetTab) {
            targetTab.classList.add('active');
        }

        // Update tab active state
        const allTabs = document.querySelectorAll('.tab');
        allTabs.forEach(tab => tab.classList.remove('active'));
        event.target.classList.add('active');
    }