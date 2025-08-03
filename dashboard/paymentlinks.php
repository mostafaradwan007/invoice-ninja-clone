<style>
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

    .new-payment-btn {
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
    .payment-table-container {
        background: white;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .payment-table {
        width: 100%;
        margin: 0;
    }

    .payment-table thead {
        background-color: #3b82f6;
    }

    .payment-table thead th {
        color: white;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 16px 12px;
        border: none;
        position: relative;
    }

    .payment-table thead th:first-child {
        width: 40px;
        text-align: center;
    }

    .payment-table thead th.sortable {
        cursor: pointer;
        user-select: none;
    }

    .payment-table thead th.sortable:hover {
        background-color: #2563eb;
    }

    .payment-table thead th.sortable::after {
        content: "↕";
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        opacity: 0.7;
        font-size: 10px;
    }

    .payment-table tbody tr {
        border-bottom: 1px solid #f3f4f6;
    }

    .payment-table tbody tr:hover {
        background-color: #f9fafb;
    }

    .payment-table tbody td {
        padding: 16px 12px;
        font-size: 14px;
        color: #374151;
        vertical-align: middle;
    }

    .payment-table tbody td:first-child {
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


    .tab-contentt {
        display: none;
    }

    .tab-contentt.active {
        display: block;
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

        .payment-table-container {
            overflow-x: auto;
        }

        .pagination-container {
            flex-direction: column;
            gap: 12px;
        }
    }
</style>
</head>

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

                <button class="new-payment-btn" onclick="showuserTab('payment')" type="button">
                    Add payment
                </button>
            </div>
        </div>

        <!-- Payment Table -->
        <div class="payment-table-container">
            <table class="payment-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" class="table-checkbox" id="selectAll">
                        </th>
                        <th class="sortable">Status</th>
                        <th class="sortable">Name</th>
                        <th class="sortable">Price</th>
                        <th class="sortable">Purchase Page</th>
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

    <!-- Payment Form -->
    <div id="user-payment-tab" class="tab-content">
        <div class="tabs">
            <div class="tab-list">
                <div class="tab active" onclick="showuserTabb('overview')">Overview</div>
                <div class="tab" onclick="showuserTabb('settings')">Settings</div>
            </div>
        </div>

        <!-- Form Content -->
        <div class="form-content">
            <!-- Overview Tab Content -->
            <div id="user-overview-tab" class="tab-contentt active">
                <h4>Overview</h4>
                <div class="form-row">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter name">
                </div>
                <div class="form-row">
                    <label for="group">Group</label>
                    <select>
                        <option disabled>No Record Found</option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="user">Users</label>
                    <select id="user">
                        <option value=""></option>
                        <option value="new">+ New User</option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="products">Products</label>
                    <select>
                        <option></option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="recurringProducts">Recurring Products</label>
                    <select>
                        <option></option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="optionalProducts">Optional Products</label>
                    <select>
                        <option></option>
                    </select>
                </div>
                <div class="form-row">
                    <label for="optionalrecurringProducts">Optional Recurring Products</label>
                    <select>
                        <option></option>
                    </select>
                </div>
            </div>

            <!-- Settings Tab Content -->
            <div id="user-settings-tab" class="tab-contentt">
                <h4>Settings</h4>
                <div class="form-row">
                    <label for="frequency">Frequency</label>
                    <select style="text-transform: capitalize;">
                        <option>Once</option>
                        <option>daily</option>
                        <option>weekly</option>
                        <option>2 weeks</option>
                        <option>4 weeks</option>
                        <option>monthly</option>
                        <option>2 months</option>
                        <option>4 months</option>
                        <option>6 months</option>
                        <option>annually</option>
                        <option>2 years</option>
                        <option>3 years</option>
                    </select>
                </div>
                <div class="form-row">
                    <label>Remaining Cycles</label>
                    <select>
                        <option>Endless</option>
                    </select>
                </div>
                <div class="form-row">
                    <label>Promo Code</label>
                    <input type="text" name="promocode" />
                </div>
                <div class="form-row">
                    <label><b>Registration Required</b><br><span style="color:grey;">Require clients to register</span></label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label><b>Use Inventory Management</b><br><span style="color:grey;">Require products to be in stock</span></label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label><b>Allow Query Overrides</b></label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label>Allow Plan Changes</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label>Allow Cancellation</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label>Trial Enabled</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row">
                    <label>Per Seat Enabled</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>

            <div class="form-actions">
                <a href="#" class="btn-cancel" onclick="showuserTab('table')">Cancel</a>
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

            // Show selected tab content
            let targetTab;
            if (tabName === 'table') {
                targetTab = document.getElementById('user-table-tab');
            } else {
                targetTab = document.getElementById('user-' + tabName + '-tab');
            }

            if (targetTab) {
                targetTab.classList.add('active');
            }

            // If showing payment form, ensure overview tab is active by default
            if (tabName === 'payment') {
                // Reset inner tabs to show overview
                const allInnerTabs = document.querySelectorAll('.tab-contentt');
                allInnerTabs.forEach(content => content.classList.remove('active'));

                const overviewTab = document.getElementById('user-overview-tab');
                if (overviewTab) {
                    overviewTab.classList.add('active');
                }

                // Reset tab buttons
                const allTabButtons = document.querySelectorAll('.tab');
                allTabButtons.forEach(tab => tab.classList.remove('active'));

                const overviewButton = document.querySelector('.tab[onclick="showuserTabb(\'overview\')"]');
                if (overviewButton) {
                    overviewButton.classList.add('active');
                }
            }
        }
    </script>
</body>

</html>