<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<style>
    .address-bar {
        display: flex;
        align-items: center;
        background: #fff;
        border: 0.5px solid grey;
        border-radius: 6px;
        padding: 5px 10px;
        width: 52px;
        text-decoration: none;
        color: black;
        text-align: center;

    }

    .address-bar img {
        width: 30px;
        height: 30px;
        margin-right: 8px;

    }
</style>
<!-- Tabs -->
<div class="tabs">
    <div class="tab-list">
        <div class="tab active" onclick="showuserTab('details')">Details</div>
        <div class="tab" onclick="showuserTab('password')">password</div>
        <div class="tab" onclick="showuserTab('OAuth/Mail')">OAuth/Mail</div>
        <!-- <div class="tab" onclick="showuserTab('accentcolor')">accentcolor</div> -->
        <div class="tab" onclick="showuserTab('Notifications')">Notifications</div>
    </div>
</div>


<!-- Form Content -->
<div class="form-content">


    <!-- Details Tab Content -->
    <div id="user-details-tab" class="tab-content active">
        <h4>Details</h4>
        <div class="form-row">
            <label for="Firstname">First Name</label>
            <input type="text" id="Firstname" placeholder="Enter first name">
        </div>
        <div class="form-row">
            <label for="Lastname">Last Name</label>
            <input type="text" id="Lastname" placeholder="Enter last name">
        </div>
        <div class="form-row">
            <label for="email">Email</label>
            <input type="text" id="email" placeholder="Enter email">
        </div>
        <div class="form-row">
            <label for="phone">Phone</label>
            <input type="text" id="phone" placeholder="Enter phone">
        </div>

    </div>

    <!-- password Tab Content -->
    <div id="user-password-tab" class="tab-content">
        <h4>Password</h4>
        <div class="form-row">
            <label for="password">New Password</label>
            <input type="password" id="password" placeholder="Enter New Password">
            <i id="toggleIcon" class="fa-solid fa-eye" onclick="togglePassword()" style="cursor:pointer"></i>

        </div>

    </div>

    <!-- OAuth / Mail Tab Content -->
    <div id="user-OAuth/Mail-tab" class="tab-content">
        <h4>Connected Account</h4>
        <div class="form-row">
            <label>Google</label>
            <a href="https://www.google.com" target="_blank" class="address-bar">
                <img src="https://www.google.com/favicon.ico" alt="Google Icon">

            </a>
        </div>
        <div class="form-row">
            <label>Microsoft</label>
            <a href="https://www.microsofrcom" target="_blank" class="address-bar">
                <img src="https://www.microsoft.com/favicon.ico" alt="microsoft Icon">

            </a>
        </div>

    </div>

    <!-- <div id="user-accentcolor-tab" class="tab-content">
            <h4>Accent Color</h4>
            <label for="colorPicker">Choose Accent Color:</label>
            <input type="color" id="colorPicker" value="#3b82f6">
            <div class="current-color" id="currentColor">
                Current Color: <span id="colorValue">#3b82f6</span>
            </div>
        </div> -->

    <!-- Notifications Tab Content -->
    <div id="user-Notifications-tab" class="tab-content">
        <h4>Notifications</h4>

        <div class="form-row">
            <label>Login Notification <p style="color: gray;">Sends an email notifying that a login has taken place</p></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="form-row">
            <label>Task Assigned Notification <p style="color: gray;">Send an email when a task is assigned</p></label>
            <label class="switch">
                <input type="checkbox">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="form-row">
            <label for="AllEvents">All Events</label>
            <select id="AllEvents" class="form-select">
                <option>custom</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <hr style="color:gray;">
        <div class="form-row">
            <label for="Invoicecreated">Invoice Created</label>
            <select id="Invoicecreated" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="InvoiceSent">Invoice Sent</label>
            <select id="InvoiceSent" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="InvoiceLate">Invoice Late</label>
            <select id="InvoiceLate" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="Inventory Threshold">Inventory Threshold</label>
            <select id="Inventory Threshold" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="Payment Success">Payment Success</label>
            <select id="Payment Success" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Payment Failure">Payment Failure</label>
            <select id="Payment Failure" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Payment Manual">Payment Manual</label>
            <select id="Payment Manual" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Purchase Order Created">Purchase Order Created</label>
            <select id="Purchase Order Created" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Purchase Order Sent">Purchase Order Sent</label>
            <select id="Purchase Order Sent" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="Purchase Order Viewed">Purchase Order Viewed</label>
            <select id="Purchase Order Viewed" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="Purchase Order Accepted">Purchase Order Accepted</label>
            <select id="Purchase Order Accepted" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="Quote Created">Quote Created</label>
            <select id="Quote Created" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="Quote Sent">Quote Sent</label>
            <select id="Quote Sent" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Quote Viewed">Quote Viewed</label>
            <select id="Quote Viewed" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Quote  Approved">Quote Approved</label>
            <select id="Quote  Approved" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Quote Expired">Quote Expired</label>
            <select id="Quote Expired" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Credit Created">Credit Created</label>
            <select id="Credit Created" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>

        <div class="form-row">
            <label for="Credit Sent">Credit Sent</label>
            <select id="Credit Sent" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
        <div class="form-row">
            <label for="Credit Viewed">Credit Viewed</label>
            <select id="Credit Viewed" class="form-select">
                <option>None</option>
                <option>All Records</option>
                <option>Owned By user </option>
            </select>
        </div>
    </div>

    <div class="form-actions">
        <a href="./user-details.php" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn-save">Save</button>
    </div>
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

    //for eye password
    function togglePassword() {
        const password = document.getElementById("password");
        const icon = document.getElementById("toggleIcon");

        if (password.type === "password") {
            password.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            password.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>