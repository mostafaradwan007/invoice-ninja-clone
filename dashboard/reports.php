<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Report Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>

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

        .breadcrumb {
            background: none;
            padding: 0;
            margin: 0;
            font-size: 14px;
        }

        .breadcrumb-item {
            display: flex;
            align-items: center;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: ">";
            color: #6b7280;
            margin: 0 8px;
        }

        .breadcrumb-item a {
            color: #6b7280;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #1f2937;
            font-weight: 500;
        }


        .form-row {
            display: flex;
            align-items: center;
            margin-top: 10px;
            gap: 10px;
            margin-bottom: 20px;
            /* spacing between label and select */
        }

        .form-row label {
            width: 200px;
            /* fixed width */
            margin: 0;
            font-size: 14px;
        }

        .form-row select,
        .form-row input {
            flex: 1;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
width: 400px;
            color: black;

        }


        .container {
            background: #fff;
            padding: 20px;
            max-width: 900px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
        }

        .column {
            flex: 1 1 250px;
        }

        /* Toggle Switch */

        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: 0.4s;
            border-radius: 34px;
            width: 52px;

        }

        .slider:before {
            position: absolute;
            content: "";
            height: 20px;
            width: 20px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: 0.4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #ffcc00;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .right-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
            flex: 1;
            min-width: 300px;
        }
    </style>
</head>

<body class="bg-gray-100 p-6">

    <?php include_once './header.html'; ?>
    <?php include_once './sidebar.html'; ?>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="./index.php"><i class="bi bi-house-door"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Invoices</li>
                </ol>
            </nav>
        </div>

        <!-- Free Trial Banner -->
        <div class="bg-white p-4 flex justify-between items-center border border-yellow-300 mb-4 rounded">
            <div class="flex items-center gap-2">
                <span class="text-yellow-500 font-semibold">⚠</span>
                <span>Start your FREE 14 day trial of the Pro Plan.</span>
            </div>
            <a href="#" class="text-blue-600 hover:underline text-sm font-medium">Manage Plan</a>
        </div>

        <!-- Main-->

        <div class="container">
            <!-- Left Column -->
            <div class="column">
                <div class=" form-row">
                    <label for="report">Report</label>
                    <select id="report">
                        <option>Activity</option>
                        <option>Client</option>
                        <option>Contact</option>
                        <option>Credit</option>
                        <option>Document</option>
                        <option>Expense</option>
                        <option>Invoice</option>
                        <option>Invoice Item</option>
                        <option>Purchase Order</option>
                         <option>Purchase Order Item</option>
                        <option>Quote</option>
                        <option>Quote Item</option>
                         <option>Recurring Invoice</option>
                        <option>Recurring Invoice Item</option>
                        <option>Payment</option>
                        <option>Product</option>
                        <option>Product Sales</option>
                        <option>Task</option>
                        <option>Vendor</option>
                        <option>Profit and Loss</option>
                        <option>Aged Receivable Detailed Report</option>
                         <option>Aged Receivable Summary Report</option>
                          <option>Customer Balance Report</option>
                             <option>Tax Summary Report</option>
                                <option>User Sales Report</option>
                                <option>Project</option>
                    </select>
                </div>


                <div class="form-row" id="sendemail">
                    <label for="sendemail">Send Email</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row" id="attachdoc" style="display: none;">
                    <label for="attachdoc">Attach Documents</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

                <div class="form-row" id="attachpdf" style="display: none;">
                    <label for="attachpdf">Attach PDF</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="form-row" id="includedeleted" style="display: none;">
                    <label for="includedeleted">Include Deleted <BR><span style="color: lightgray;">Include Deleted records in reports</span></label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

                    <div class="form-row" id="expensedrepor" style="display: none;">
                    <label for="expensedrepor">Expensed Reporting</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

                    <div class="form-row" id="accuralacco" style="display: none;">
                    <label for="accuralacco">Accural Accounting</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>

                    <div class="form-row" id="includetax" style="display: none;">
                    <label for="includetax">Include tax</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>


                <div class="form-row " id="activity" style="display: none;">
                    <label for="activity">Activity</label>
                    <select id="activity">
                        <option>Select...</option>
                        <option>Login</option>
                        <option>Purchase</option>
                    </select>
                </div>

                <div class=" form-row" id="status" style="display: none;">
                    <label for="status">Status</label>
                    <select id="status" >
                        <option>Draft</option>
                        <option>Sent</option>
                        <option>Partial/Deposit</option>
                        <option>Applied</option>
                    </select>
                </div>

                <div class=" form-row" id="clients" style="display: none;">
                    <label for="clients">Clients</label>
                    <select id="clients" placeholder="Clients">
                        <option disabled selected>No clients</option>
                    </select>
                </div>

                <div class=" form-row" id="vendors" style="display: none;">
                    <label for="vendors">Vendors</label>
                    <select id="vendors" >
                        <option disabled selected>No vendors</option>

                    </select>
                </div>

                <div class=" form-row" id="projects" style="display: none;">
                    <label for="projects">Projects</label>
                    <select id="projects" aria-placeholder="Projects">
                        <option disabled selected>No projects</option>

                    </select>
                </div>
                <div class=" form-row" id="expensecat" style="display: none;">
                    <label for="expensecat">Expense Categories</label>
                    <select id="expensecat" aria-placeholder="Expense Categories">
                        <option disabled selected>No expense category</option>

                    </select>
                </div>
            </div>

            <!-- Right Column -->
            <div class="column">
                <div class="form-row">
                    <label for="range">Range</label>
                    <select id="range">
                        <option>All</option>
                        <option>Last 7 days</option>
                        <option>Last 30 days</option>
                        <option>This Month</option>
                            <option>Last Month</option>
                        <option>This Quarter</option>
                        <option>Last Quarter</option>
                        <option>This Year</option>
                            <option>Last year</option>
                        <option>Custom</option>
                    </select>
                </div>
                    <div class="form-row" id="startdate-row" style="display: none;">
                    <label for="startdate">Start Date</label>
                       <input type="date" id="startdate"/>
                </div>
                    <div class="form-row" id="enddate-row" style="display: none;">
                    <label for="enddate">End Date</label>
                    <input type="date" id="enddate"/>
                </div>

                <div class="form-row" id="custmoizecoloumns" style="display: none;">
                    <label for="custmoizecoloumns">Customize Coloumns</label>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
            </div>
        </div>
</div>
        <script>
           
 const rangeSelect = document.getElementById('range');
 const startdaterow = document.getElementById('startdate-row');
 const enddaterow = document.getElementById('enddate-row');
 rangeSelect.addEventListener('change', function () {
    if (this.value === 'Custom') {
      startdaterow.style.display = 'block';
       enddaterow.style.display = 'block';
    } 
    else {
      startdaterow.style.display = 'none';
      enddaterow.style.display = 'none';
    }
}); 

const reportSelect = document.getElementById('report');
            const allFields = [
                'sendemail', 'attachdoc', 'includedeleted', 'activity',
                'custmoizecoloumns', 'attachpdf', 'status', 'clients',
                'vendors', 'projects', 'expensecat' ,'includetax' , 'accuralacco' ,'expensedrepor'
            ];

            const fieldRefs = {};
            allFields.forEach(id => {
                fieldRefs[id] = document.getElementById(id);
            });

            reportSelect.addEventListener('change', function() {
                // First: hide all optional fields
                allFields.forEach(id => {
                    if (fieldRefs[id]) fieldRefs[id].style.display = 'none';
                });

                // Then: selectively show based on report type
                const selected = this.value;

                if (selected === 'Activity') {
                    fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['activity'].style.display = 'block';
                } else if (selected === 'Client') {
                    fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                    fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                } else if (selected === 'Contact') {
                    fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                } else if (selected === 'Credit') {
                    fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                    fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                    fieldRefs['attachpdf'].style.display = 'block';
                    fieldRefs['status'].style.display = 'block';
                } else if (selected === 'Document'  || selected==='Product') {
                    fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                } else if (selected === 'Expense') {
                    fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                    fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                    fieldRefs['status'].style.display = 'block';
                    fieldRefs['clients'].style.display = 'block';
                    fieldRefs['vendors'].style.display = 'block';
                    fieldRefs['projects'].style.display = 'block';
                    fieldRefs['expensecat'].style.display = 'block';
                }
                 else if (selected === 'Invoice' || selected==='Quote') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                      fieldRefs['attachpdf'].style.display = 'block';
                           fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                      fieldRefs['status'].style.display = 'block';
                       fieldRefs['clients'].style.display = 'block';
                  }
                      else if (selected === 'Invoice Item'  || selected==='Quote Item'  || selected==='Recurring Invoice Item') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                           fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                      fieldRefs['status'].style.display = 'block';
                       fieldRefs['clients'].style.display = 'block';
                         fieldRefs['products'].style.display = 'block';
                  }
                      else if (selected === 'Purchase Order') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                      fieldRefs['attachpdf'].style.display = 'block';
                           fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                      fieldRefs['status'].style.display = 'block';
                  
                  }
                      else if (selected === 'Purchase Order Item') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                           fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                      fieldRefs['status'].style.display = 'block';
                       fieldRefs['products'].style.display = 'block';
                  }
              
                      else if (selected === 'Recurring Invoice') { 
                        fieldRefs['sendemail'].style.display = 'block';
              
                           fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                      fieldRefs['status'].style.display = 'block';
                       fieldRefs['clients'].style.display = 'block';
                  }

                      else if (selected === 'Payment') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';

                         
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                      fieldRefs['status'].style.display = 'block';
                       fieldRefs['clients'].style.display = 'block';
                  }
                      else if (selected === 'Product Sales') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    
                   
                       fieldRefs['products'].style.display = 'block';
                       fieldRefs['clients'].style.display = 'block';
                  }

                      else if (selected === 'Task') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                               fieldRefs['includedeleted'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                      fieldRefs['status'].style.display = 'block';
                       fieldRefs['clients'].style.display = 'block';
                  }
                  
                      else if (selected === 'Vendor') { 
                        fieldRefs['sendemail'].style.display = 'block';
                    fieldRefs['attachdoc'].style.display = 'block';
                    fieldRefs['custmoizecoloumns'].style.display = 'block';
                   
                  }
                     else if (selected === 'Profit and Loss') { 
                        fieldRefs['sendemail'].style.display = 'block';
 fieldRefs['includetax' ].style.display = 'block';
  fieldRefs['accuralacco' ].style.display = 'block';
   fieldRefs['expensedrepor'].style.display = 'block';
                      
               
                  }
                      else if (selected === 'Project') { 
                        fieldRefs['sendemail'].style.display = 'block';
 fieldRefs['clients' ].style.display = 'block';
  fieldRefs['projects' ].style.display = 'block';         
               
                  }

                     else { 
                        fieldRefs['sendemail'].style.display = 'block';
                 
                  }
                  

                  

            });
        </script>


</body>

</html>