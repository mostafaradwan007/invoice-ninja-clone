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
         background-color: var(--bee-light-gray);
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

     .new-bank-btn {
         background-color: #3b82f6;
         color: white;
         border: none;
         padding: 8px 16px;
         border-radius: 6px;
         font-weight: 500;
         font-size: 14px;
     }

     /* Table Styles */
     .bank-table-container {
         background: white;
         border-radius: 8px;
         box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
         overflow: hidden;
     }

     .bank-table {
         width: 100%;
         margin: 0;
     }

     .bank-table thead {
         background-color: #3b82f6;
     }

     .bank-table thead th {
         color: white;
         font-weight: 600;
         font-size: 12px;
         text-transform: uppercase;
         letter-spacing: 0.5px;
         padding: 16px 12px;
         border: none;
         position: relative;
     }

     .bank-table thead th:first-child {
         width: 40px;
         text-align: center;
     }

     .bank-table thead th.sortable {
         cursor: pointer;
         user-select: none;
     }

     .bank-table thead th.sortable:hover {
         background-color: #2563eb;
     }

     .bank-table thead th.sortable::after {
         content: "↕";
         position: absolute;
         right: 8px;
         top: 50%;
         transform: translateY(-50%);
         opacity: 0.7;
         font-size: 10px;
     }

     .bank-table tbody tr {
         border-bottom: 1px solid #f3f4f6;
     }

     .bank-table tbody tr:hover {
         background-color: #f9fafb;
     }

     .bank-table tbody td {
         padding: 16px 12px;
         font-size: 14px;
         color: #374151;
         vertical-align: middle;
     }

     .bank-table tbody td:first-child {
         text-align: center;
     }

     .table-checkbox {
         width: 16px;
         height: 16px;
         accent-color: var(--bee-yellow);
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
         justify-content: between;
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

     .tab-content {
         display: none;
     }

     .tab-content.active {
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

         .bank-table-container {
             overflow-x: auto;
         }

         .pagination-container {
             flex-direction: column;
             gap: 12px;
         }
     }
 </style>



 <!-- Main Content -->
 <div class="main-content tab-content active" id="user-table-tab">


     <!-- Action Bar -->
     <div class="action-bar >
         <div class=" left-actions">
         <div class="dropdown">
             <button class="actions-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown">
                 Actions
             </button>
             <ul class="dropdown-menu">
                 <li><a class="dropdown-item" href="#">Bulk Edit</a></li>
                 <li><a class="dropdown-item" href="#">Export</a></li>
                 <li><a class="dropdown-item" href="#">Delete Selected</a></li>
             </ul>
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

         <button class="new-bank-btn tab" onclick="showuserTab('bankaccount')" type="button">
             Add Bank Account
         </button>

     </div>
 </div>

 <!-- bank Table -->
 <div class="bank-table-container tab-content active" id="bank-table-tab">
     <table class="bank-table">
         <thead>
             <tr>
                 <th>
                     <input type="checkbox" class="table-checkbox" id="selectAll">
                 </th>
                 <th class="sortable">Name</th>
                 <th class="sortable">Type</th>
                 <th class="sortable">Balance</th>

             </tr>
         </thead>
         <tbody>
             <!-- No records message -->
             <tr>
                 <td colspan="9" class="no-records">
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
             <button class="pagination-btn" disabled>
                 <i class="bi bi-chevron-double-left"></i>
             </button>
             <button class="pagination-btn" disabled>
                 <i class="bi bi-chevron-left"></i>
             </button>
             <button class="pagination-btn" disabled>
                 <i class="bi bi-chevron-right"></i>
             </button>
             <button class="pagination-btn" disabled>
                 <i class="bi bi-chevron-double-right"></i>
             </button>
         </div>
     </div>

 </div>

 <div id="user-bankaccount-tab" class="tab-content">
     <div class="form-content">
         <h3>Add Bank Account</h3>
         <div class="form-row">
             <label>Account Name</label>
             <input type="text" name="accountname" />
         </div>



     </div>
     <script>
         function showuserTab(tabName) {
             // Hide all tab content
             const allTabContent = document.querySelectorAll('.tab-content');
             allTabContent.forEach(content => content.classList.remove('active'));

             // Show selected tab content
             const targetTab = document.getElementById('user-' + tabName + '-tab');
             const tableTab = 'user-table-tab';
             const bankTab = 'bank-table-tab';
             if (targetTab) {

                 targetTab.classList.add('active');
                 tableTab.classList.remove('active');
                      bankTab.classList.remove('active');
             }

         }
     </script>