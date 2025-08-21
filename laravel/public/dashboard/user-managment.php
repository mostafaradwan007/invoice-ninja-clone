<style>
    /* Breadcrumb Styles */
    .breadcrumb-container {
        display: none;
        margin-bottom: 20px;
        padding: 12px 0;
    }

    .breadcrumb-container.active {
        display: block;
    }

    .breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #6b7280;
    }

    .breadcrumb-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .breadcrumb-link {
        color: #3b82f6;
        text-decoration: none;
        cursor: pointer;
    }

    .breadcrumb-link:hover {
        text-decoration: underline;
    }

    .breadcrumb-separator {
        color: #d1d5db;
    }

    .breadcrumb-current {
        color: #374151;
        font-weight: 500;
    }

    /* Action Bar */
    .action-bar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 20px;
        gap: 16px;
    }

    .left-actions {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .right-actions {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .actions-dropdown {
        background-color: #3b82f6;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 14px;
    }

    .filter-badge {
        background-color: #f3f4f6;
        border: 1px solid #d1d5db;
        border-radius: 20px;
        padding: 6px 12px;
        font-size: 12px;
        color: #374151;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .filter-badge .close-btn {
        background: none;
        border: none;
        color: #6b7280;
        font-size: 14px;
        cursor: pointer;
        padding: 0;
        margin-left: 4px;
    }

    .filter-btn {
        background: none;
        border: 1px solid #d1d5db;
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 14px;
        color: #374151;
        cursor: pointer;
    }

    .filter-btn:hover {
        background-color: #f9fafb;
    }

    .import-btn {
        background-color: #10b981;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .new-usermanage-btn {
        background-color: #3b82f6;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 14px;
        cursor: pointer;
    }

    /* Table Styles */
    .usermanage-table-container {
        background: white;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .usermanage-table {
        width: 100%;
        margin: 0;
    }

    .usermanage-table thead {
        background-color: #3b82f6;
    }

    .usermanage-table thead th {
        color: white;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 16px 12px;
        border: none;
        position: relative;
    }

    .usermanage-table thead th:first-child {
        width: 40px;
        text-align: center;
    }

    .usermanage-table thead th.sortable {
        cursor: pointer;
        user-select: none;
    }

    .usermanage-table thead th.sortable:hover {
        background-color: #2563eb;
    }

    .usermanage-table thead th.sortable::after {
        content: "↕";
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.7;
        font-size: 10px;
    }

    .usermanage-table tbody tr {
        border-bottom: 1px solid #f3f4f6;
    }

    .usermanage-table tbody tr:hover {
        background-color: #f9fafb;
    }

    .usermanage-table tbody td {
        padding: 16px 12px;
        font-size: 14px;
        color: #374151;
        vertical-align: middle;
    }

    .usermanage-table tbody td:first-child {
        text-align: center;
    }

    .table-checkbox {
        width: 16px;
        height: 16px;
        accent-color: #f59e0b;
    }

    .no-records {
        text-align: center;
        padding: 60px 20px;
        color: #6b7280;
        font-size: 16px;
    }

    /* Pagination */
    .pagination-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 20px;
        background: white;
        border-top: 1px solid #f3f4f6;
    }

    .pagination-left {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        color: #6b7280;
    }

    .rows-select {
        border: 1px solid #d1d5db;
        border-radius: 4px;
        padding: 4px 8px;
        font-size: 14px;
    }

    .pagination-center {
        flex: 1;
        text-align: center;
        font-size: 14px;
        color: #6b7280;
    }

    .pagination-right {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .columns-btn {
        background: none;
        border: 1px solid #d1d5db;
        padding: 6px 12px;
        border-radius: 4px;
        font-size: 14px;
        color: #374151;
        cursor: pointer;
    }

    .pagination-btn {
        background: none;
        border: 1px solid #d1d5db;
        padding: 6px 8px;
        border-radius: 4px;
        font-size: 14px;
        color: #374151;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
    }

    .pagination-btn:hover {
        background-color: #f9fafb;
    }

    .pagination-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    /* Tab Content */
    .tab-content {
        display: none;
    }

    .tab-content.active {
        display: block;
    }



    /* User Management Specific Styles */
    .usermanage-table-container {
        background: white;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .usermanage-table {
        width: 100%;
        margin: 0;
    }

    .usermanage-table thead {
        background-color: #3b82f6;
    }

    .usermanage-table thead th {
        color: white;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 16px 12px;
        border: none;
        position: relative;
    }

    .usermanage-table thead th:first-child {
        width: 40px;
        text-align: center;
    }

    .usermanage-table tbody tr {
        border-bottom: 1px solid #f3f4f6;
    }

    .usermanage-table tbody tr:hover {
        background-color: #f9fafb;
    }

    .usermanage-table tbody td {
        padding: 16px 12px;
        font-size: 14px;
        color: #374151;
        vertical-align: middle;
    }

    .usermanage-table tbody td:first-child {
        text-align: center;
    }

    .new-usermanage-btn {
        background-color: #3b82f6;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 6px;
        font-weight: 500;
        font-size: 14px;
        cursor: pointer;
    }

    /* Permissions Table Styles */
    .permissions-table {
        border: none;
        width: 60%;
    }

    .permissions-table th,
    .permissions-table td {
        border: none;
        padding: 10px;
        text-align: center;
    }

    .permissions-table tr {
        background-color: #f2f2f2;
        border: none;
    }

    .permissions-table th {
        background-color: #f2f2f2;
    }

    .permissions-table td:first-child {
        text-align: left;
    }


    .tab-contentt {
        display: none;
    }

    .tab-contentt.active {
        display: block;
    }

 .check   table {
        border-collapse: collapse;
        width: 60%;
    }

   .check th,
   .check td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: center;
    }

    .check th {
        background-color: #f2f2f2;
    }

  .check  td:first-child {
        text-align: left;
    }


    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
            padding: 16px;
        }

        .action-bar {
            flex-direction: column;
            align-items: stretch;
        }

        .usermanage-table-container {
            overflow-x: auto;
        }

        .pagination-container {
            flex-direction: column;
            gap: 12px;
        }
    }
</style>


<body>

    <!-- Main Content -->
    <div class="main-content tab-content active" id="user-table-tab">
        <!-- Action Bar -->
        <div class="action-bar">
            <div class="left-actions">
                <div class="dropdown">
                    <button class="actions-dropdown dropdown-toggle" type="button">
                        Actions
                    </button>
                </div>

                <div class="filter-badge">
                    Active
                    <button class="close-btn" type="button">×</button>
                </div>
            </div>

            <div class="right-actions">
                <button class="filter-btn" type="button">
                    Filter
                </button>

                <button class="new-usermanage-btn" onclick="showuserTab('newuser')" type="button">
                    New User
                </button>
            </div>
        </div>

        <!-- usermanage Table -->
        <div class="usermanage-table-container">
            <table class="usermanage-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" class="table-checkbox" id="selectAll">
                        </th>
                        <th class="sortable">Status</th>
                        <th class="sortable">Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- No records message -->
                    <tr>
                        <td colspan="3" class="no-records">
                            No records found
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination-container">
                <div class="pagination-left">
                    <select class="rows-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>rows</span>
                </div>

                <div class="pagination-center">
                    Page 1 of 1.0
                </div>

                <div class="pagination-right">
                    <button class="columns-btn" type="button">Columns</button>
                    <button class="pagination-btn" disabled>‹‹</button>
                    <button class="pagination-btn" disabled>‹</button>
                    <button class="pagination-btn" disabled>›</button>
                    <button class="pagination-btn" disabled>››</button>
                </div>
            </div>
        </div>
    </div>



    <!-- New User Form -->
    <div id="user-newuser-tab" class="tab-content">


        <div class="tabs">
            <div class="tab-list">
                <div class="tab active" onclick="showuserTabb('details')">Details</div>
                <div class="tab" onclick="showuserTabb('notifications')">Notifications</div>
                <div class="tab" onclick="showuserTabb('permissions')">Permissions</div>
            </div>
        </div>

        <!-- Form Content -->
        <div class="form-content">
            <!-- Details Tab Content -->
            <div id="user-details-tab" class="tab-contentt active">
                <h4>Details</h4>
                <div class="form-row">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" placeholder="Enter First name">
                </div>
                <div class="form-row">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" placeholder="Enter Last name">
                </div>
                <div class="form-row">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-row">
                    <label for="phone">Phone</label>
                    <input type="number" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-row">
                    <label>Login Permission<br><span style="color: gray;">Sends an email notifying that a login has taken place.</span></label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <!-- Notifications Tab Content -->
            <div id="user-notifications-tab" class="tab-contentt">
                <h4>Notifications</h4>
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
                <!-- Add more Permission options as needed -->
            </div>

            <!-- Permissions Tab Content -->
            <div id="user-permissions-tab" class="tab-contentt">
                <h4>Permissions</h4>
                <div class="form-row">
                    <label>Administrator<br><span style="color: gray;">Allow user to manage users, change Permissions and modify all records</span></label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label>View Dashboard</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label>Reports<br><span style="color: gray;">Allow user to access the reports, data is limited to available permissions</span></label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
<div class="check">
                <table>
                    <tr>
                        <th> </th>
                        <th>Create</th>
                        <th>View</th>
                        <th>Edit</th>
                    </tr>
                    <!-- Rows -->
                    <!-- Use a loop in a backend framework to generate these if desired -->
                    <tr>
                        <td>All</td>
                        <td><input type="checkbox" id="all-create"><label for="all-create"></label></td>
                        <td><input type="checkbox" id="all-view"><label for="all-view"></label></td>
                        <td><input type="checkbox" id="all-edit"><label for="all-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Client</td>
                        <td><input type="checkbox" id="client-create"><label for="client-create"></label></td>
                        <td><input type="checkbox" id="client-view"><label for="client-view"></label></td>
                        <td><input type="checkbox" id="client-edit"><label for="client-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Product</td>
                        <td><input type="checkbox" id="product-create"><label for="product-create"></label></td>
                        <td><input type="checkbox" id="product-view"><label for="product-view"></label></td>
                        <td><input type="checkbox" id="product-edit"><label for="product-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Invoice</td>
                        <td><input type="checkbox" id="invoice-create"><label for="invoice-create"></label></td>
                        <td><input type="checkbox" id="invoice-view"><label for="invoice-view"></label></td>
                        <td><input type="checkbox" id="invoice-edit"><label for="invoice-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Payment</td>
                        <td><input type="checkbox" id="payment-create"><label for="payment-create"></label></td>
                        <td><input type="checkbox" id="payment-view"><label for="payment-view"></label></td>
                        <td><input type="checkbox" id="payment-edit"><label for="payment-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Recurring Invoice</td>
                        <td><input type="checkbox" id="recurring-create"><label for="recurring-create"></label></td>
                        <td><input type="checkbox" id="recurring-view"><label for="recurring-view"></label></td>
                        <td><input type="checkbox" id="recurring-edit"><label for="recurring-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Quote</td>
                        <td><input type="checkbox" id="quote-create"><label for="quote-create"></label></td>
                        <td><input type="checkbox" id="quote-view"><label for="quote-view"></label></td>
                        <td><input type="checkbox" id="quote-edit"><label for="quote-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Credit</td>
                        <td><input type="checkbox" id="credit-create"><label for="credit-create"></label></td>
                        <td><input type="checkbox" id="credit-view"><label for="credit-view"></label></td>
                        <td><input type="checkbox" id="credit-edit"><label for="credit-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Project</td>
                        <td><input type="checkbox" id="project-create"><label for="project-create"></label></td>
                        <td><input type="checkbox" id="project-view"><label for="project-view"></label></td>
                        <td><input type="checkbox" id="project-edit"><label for="project-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Task</td>
                        <td><input type="checkbox" id="task-create"><label for="task-create"></label></td>
                        <td><input type="checkbox" id="task-view"><label for="task-view"></label></td>
                        <td><input type="checkbox" id="task-edit"><label for="task-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Vendor</td>
                        <td><input type="checkbox" id="vendor-create"><label for="vendor-create"></label></td>
                        <td><input type="checkbox" id="vendor-view"><label for="vendor-view"></label></td>
                        <td><input type="checkbox" id="vendor-edit"><label for="vendor-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Expense</td>
                        <td><input type="checkbox" id="expense-create"><label for="expense-create"></label></td>
                        <td><input type="checkbox" id="expense-view"><label for="expense-view"></label></td>
                        <td><input type="checkbox" id="expense-edit"><label for="expense-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Transaction</td>
                        <td><input type="checkbox" id="transaction-create"><label for="transaction-create"></label></td>
                        <td><input type="checkbox" id="transaction-view"><label for="transaction-view"></label></td>
                        <td><input type="checkbox" id="transaction-edit"><label for="transaction-edit"></label></td>
                    </tr>
                    <tr>
                        <td>Purchase Order</td>
                        <td><input type="checkbox" id="purchase-create"><label for="purchase-create"></label></td>
                        <td><input type="checkbox" id="purchase-view"><label for="purchase-view"></label></td>
                        <td><input type="checkbox" id="purchase-edit"><label for="purchase-edit"></label></td>
                    </tr>
                </table>
                </div>
            </div>

            <div class="form-actions">
                <a href="./user-managment.php" class="btn-cancel" onclick="showuserTab('usermanage')">Cancel</a>
                <button type="submit" class="btn-save">Save</button>
            </div>
        </div>
    </div>
    <script>
        function showuserTabb(tabName) {
            // Hide all inner tab content
            const allTabContent = document.querySelectorAll('.tab-contentt');
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

        function showuserTab(tabName) {
            // Hide all main tab content
            const allTabContent = document.querySelectorAll('.tab-content');
            allTabContent.forEach(content => content.classList.remove('active'));

            // Show/hide breadcrumb based on tab
            const breadcrumb = document.getElementById('breadcrumb-nav');

            // Show selected tab content
            let targetTab;
            if (tabName === 'table') {
                targetTab = document.getElementById('user-table-tab');
                // Hide breadcrumb when returning to table
                breadcrumb.classList.remove('active');
            } else {
                targetTab = document.getElementById('user-' + tabName + '-tab');
                // Show breadcrumb when not in table
                if (tabName === 'usermanage') {
                    breadcrumb.classList.add('active');
                }
            }

            if (targetTab) {
                targetTab.classList.add('active');
            }



            // If showing new user form, ensure details tab is active by default
            if (tabName === 'newuser') {
                // Reset inner tabs to show details
                const allInnerTabs = document.querySelectorAll('.tab-contentt');
                allInnerTabs.forEach(content => content.classList.remove('active'));

                const detailsTab = document.getElementById('user-details-tab');
                if (detailsTab) {
                    detailsTab.classList.add('active');
                }

                // Reset tab buttons
                const allTabButtons = document.querySelectorAll('.tab');
                allTabButtons.forEach(tab => tab.classList.remove('active'));

                const detailsButton = document.querySelector('.tab[onclick="showuserTabb(\'details\')"]');
                if (detailsButton) {
                    detailsButton.classList.add('active');
                }
            }
        }


        function showNewUserForm() {
            showuserTab('newuser');
            // Reset to details tab
            const allInnerTabs = document.querySelectorAll('.tab-contentt');
            allInnerTabs.forEach(content => content.classList.remove('active'));

            const detailsTab = document.getElementById('user-details-tab');
            if (detailsTab) {
                detailsTab.classList.add('active');
            }

            // Reset tab buttons
            const allTabButtons = document.querySelectorAll('.tab');
            allTabButtons.forEach(tab => tab.classList.remove('active'));

            const detailsButton = document.querySelector('.tab[onclick="showuserTabb(\'details\')"]');
            if (detailsButton) {
                detailsButton.classList.add('active');
            }
        }
    </script>