
    <style>
   
        .container {
            max-width: 1600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            color: #1e293b;
            font-size: 24px;
            margin-bottom: 8px;
        }

        .header p {
            color: #64748b;
            font-size: 14px;
        }

       

        .settings-panel {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .preview-panel {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            padding: 20px;
            position: sticky;
            top: 20px;
            height: fit-content;
            max-height: calc(100vh - 40px);
            overflow-y: auto;
        }

        .preview-panel h3 {
            color: #1e293b;
            margin-bottom: 20px;
            font-size: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }

        /* Tabs */
        .tabs {
            border-bottom: 1px solid #e2e8f0;
        }

        .tab-list {
            display: flex;
            background: #f8fafc;
        }

        .tab {
            padding: 15px 20px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            font-weight: 500;
            color: #64748b;
            transition: all 0.2s;
        }

        .tab:hover {
            background: #e2e8f0;
            color: #334155;
        }

        .tab.active {
            background: white;
            color: #3b82f6;
            border-bottom-color: #3b82f6;
        }

        /* Form Content */
        .form-content {
            padding: 30px;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .tab-content h4 {
            color: #1e293b;
            margin-bottom: 25px;
            font-size: 20px;
        }

    
   
        /* Color and field sections */
        .color-section, .font-section, .field-section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e5e7eb;
        }

        .color-section h5, .font-section h5, .field-section h5 {
            margin: 0 0 15px 0;
            color: #374151;
            font-size: 16px;
            font-weight: 600;
        }

        .color-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .color-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .color-item label {
            font-size: 14px;
            color: #374151;
            font-weight: 500;
        }

        .color-item input[type="color"] {
            width: 60px;
            height: 40px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            cursor: pointer;
        }

        .field-list {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .field-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: #f8fafc;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
        }

        .field-item label {
            min-width: 150px;
            font-size: 14px;
            color: #374151;
            margin: 0;
        }

        .field-item input[type="text"] {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid #d1d5db;
            border-radius: 4px;
            font-size: 14px;
        }

        .field-item .switch {
            margin-left: auto;
        }

        /* Invoice Preview */
        .preview-container {
            background: #f1f5f9;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            max-height: 700px;
            overflow-y: auto;
        }

        .invoice-preview {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            font-family: var(--preview-font-family, 'Segoe UI');
            font-size: var(--preview-font-size, 12px);
            transform: scale(0.8);
            transform-origin: top left;
            width: 125%;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary-color, #3b82f6);
        }

        .company-info {
            display: flex;
            gap: 15px;
            align-items: flex-start;
        }

        .logo-placeholder {
            width: var(--logo-size, 60px);
            height: var(--logo-size, 60px);
            background: #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            color: #6b7280;
            font-size: 10px;
            font-weight: bold;
        }

        .company-details h3 {
            margin: 0 0 8px 0;
            color: var(--primary-color, #3b82f6);
            font-size: calc(var(--preview-font-size, 12px) + 4px);
        }

        .company-details p {
            margin: 0;
            color: var(--secondary-color, #64748b);
            font-size: var(--preview-font-size, 12px);
            line-height: 1.4;
        }

        .invoice-title h2 {
            margin: 0;
            color: var(--primary-color, #3b82f6);
            font-size: var(--header-font-size, 20px);
            font-weight: bold;
        }

        .invoice-details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .client-info h4 {
            margin: 0 0 8px 0;
            color: #374151;
            font-size: calc(var(--preview-font-size, 12px) + 1px);
            font-weight: 600;
        }

        .client-info p {
            margin: 0;
            color: var(--secondary-color, #64748b);
            font-size: var(--preview-font-size, 12px);
            line-height: 1.4;
        }

        .invoice-meta table {
            border-collapse: collapse;
        }

        .invoice-meta table td {
            padding: 3px 6px;
            font-size: var(--preview-font-size, 12px);
        }

        .invoice-meta table td:first-child {
            color: var(--secondary-color, #64748b);
            text-align: right;
            padding-right: 12px;
        }

        .invoice-table {
            margin-bottom: 25px;
        }

        .invoice-table table {
            width: 100%;
            border-collapse: collapse;
            font-size: var(--preview-font-size, 12px);
        }

        .invoice-table thead th {
            background: var(--table-header-color, #f1f5f9);
            padding: 10px;
            text-align: left;
            font-weight: 600;
            color: #374151;
            border-bottom: 1px solid #e2e8f0;
            font-size: var(--preview-font-size, 12px);
        }

        .invoice-table tbody td {
            padding: 10px;
            border-bottom: 1px solid #f1f5f9;
            color: #374151;
            font-size: var(--preview-font-size, 12px);
        }

        .invoice-totals {
            margin-left: auto;
            width: 250px;
        }

        .invoice-totals table {
            width: 100%;
            border-collapse: collapse;
            font-size: var(--preview-font-size, 12px);
        }

        .invoice-totals table td {
            padding: 6px 10px;
            text-align: right;
        }

        .invoice-totals table td:first-child {
            color: var(--secondary-color, #64748b);
        }

        .invoice-totals .total-row {
            border-top: 2px solid #e2e8f0;
            background: var(--header-bg-color, #f8fafc);
        }

        .invoice-totals .total-row td {
            color: var(--primary-color, #3b82f6);
            font-size: calc(var(--preview-font-size, 12px) + 2px);
        }

        .invoice-footer {
            margin-top: 25px;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
        }

        .invoice-footer p {
            margin: 6px 0;
            color: var(--secondary-color, #64748b);
            font-size: var(--preview-font-size, 12px);
        }


        .preview-actions {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-secondary {
            background-color: #f3f4f6;
            color: #374151;
            border: 1px solid #d1d5db;
            padding: 8px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 12px;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            background-color: #e5e7eb;
        }

        @media (max-width: 1200px) {
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .preview-panel {
                position: static;
                max-height: none;
                order: -1;
            }
        }
    </style>

    <div class="container">
        <div class="header">
            <h1>Invoice Design Settings</h1>
            <p>Customize your invoice template design and see live preview changes</p>
        </div>

        <div class="main-content">
            <!-- Settings Panel -->
            <div class="settings-panel">
                <!-- Tabs -->
                <div class="tabs">
                    <div class="tab-list">
                        <div class="tab active" onclick="showDesignTab('general')">General</div>
                        <div class="tab" onclick="showDesignTab('headers')">Headers & Footers</div>
                        <div class="tab" onclick="showDesignTab('colors')">Colors & Fonts</div>
                        <div class="tab" onclick="showDesignTab('fields')">Fields</div>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="form-content">
                    <!-- General Tab Content -->
                    <div id="design-general-tab" class="tab-content active">
                        <h4>General Settings</h4>
                        
                        <div class="form-row">
                            <label for="design-template">Invoice Template</label>
                            <select id="design-template">
                                <option value="modern">Modern (Default)</option>
                                <option value="classic">Classic</option>
                                <option value="minimal">Minimal</option>
                                <option value="bold">Bold</option>
                                <option value="elegant">Elegant</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label for="page-size">Page Size</label>
                            <select id="page-size">
                                <option value="A4">A4</option>
                                <option value="Letter">Letter</option>
                                <option value="Legal">Legal</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label for="page-layout">Page Layout</label>
                            <select id="page-layout">
                                <option value="portrait">Portrait</option>
                                <option value="landscape">Landscape</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label>Show Company Logo</label>
                            <label class="switch">
                                <input type="checkbox" id="show-logo" checked onchange="updatePreview()">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label for="logo-size">Logo Size</label>
                            <select id="logo-size" onchange="updatePreview()">
                                <option value="small">Small</option>
                                <option value="medium" selected>Medium</option>
                                <option value="large">Large</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label for="logo-position">Logo Position</label>
                            <select id="logo-position">
                                <option value="left" selected>Left</option>
                                <option value="center">Center</option>
                                <option value="right">Right</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <label>Show Invoice Number</label>
                            <label class="switch">
                                <input type="checkbox" id="show-invoice-number" checked onchange="updatePreview()">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>Show Date</label>
                            <label class="switch">
                                <input type="checkbox" id="show-date" checked onchange="updatePreview()">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div class="form-row">
                            <label>Show Due Date</label>
                            <label class="switch">
                                <input type="checkbox" id="show-due-date" checked onchange="updatePreview()">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <!-- Headers & Footers Tab Content -->
                    <div id="design-headers-tab" class="tab-content">
                        <h4>Headers & Footers</h4>
                        
                        <div class="form-row">
                            <label for="invoice-title">Invoice Title</label>
                            <input type="text" id="invoice-title" value="INVOICE" placeholder="Enter invoice title" oninput="updatePreview()">
                        </div>

                        <div class="form-row">
                            <label for="header-text">Header Text</label>
                            <textarea id="header-text" rows="3" placeholder="Additional header text (optional)" oninput="updatePreview()"></textarea>
                        </div>

                        <div class="form-row">
                            <label for="footer-text">Footer Text</label>
                            <textarea id="footer-text" rows="3" placeholder="Thank you for your business!" oninput="updatePreview()">Thank you for your business!</textarea>
                        </div>

                        <div class="form-row">
                            <label for="payment-terms">Payment Terms</label>
                            <textarea id="payment-terms" rows="3" placeholder="Payment is due within 30 days" oninput="updatePreview()">Payment is due within 30 days</textarea>
                        </div>

                        <div class="form-row">
                            <label for="notes-label">Notes Label</label>
                            <input type="text" id="notes-label" value="Notes" placeholder="Enter notes label" oninput="updatePreview()">
                        </div>

                        <div class="form-row">
                            <label for="terms-label">Terms Label</label>
                            <input type="text" id="terms-label" value="Terms" placeholder="Enter terms label" oninput="updatePreview()">
                        </div>

                        <div class="form-row">
                            <label>Show Page Numbers</label>
                            <label class="switch">
                                <input type="checkbox" id="show-page-numbers" onchange="updatePreview()">
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    <!-- Colors & Fonts Tab Content -->
                    <div id="design-colors-tab" class="tab-content">
                        <h4>Colors & Fonts</h4>
                        
                        <div class="color-section">
                            <h5>Colors</h5>
                            <div class="color-grid">
                                <div class="color-item">
                                    <label for="primary-color">Primary Color</label>
                                    <input type="color" id="primary-color" value="#3b82f6" onchange="updatePreview()">
                                </div>
                                <div class="color-item">
                                    <label for="secondary-color">Secondary Color</label>
                                    <input type="color" id="secondary-color" value="#64748b" onchange="updatePreview()">
                                </div>
                                <div class="color-item">
                                    <label for="header-bg-color">Header Background</label>
                                    <input type="color" id="header-bg-color" value="#f8fafc" onchange="updatePreview()">
                                </div>
                                <div class="color-item">
                                    <label for="table-header-color">Table Header</label>
                                    <input type="color" id="table-header-color" value="#f1f5f9" onchange="updatePreview()">
                                </div>
                            </div>
                        </div>

                        <div class="font-section">
                            <h5>Typography</h5>
                            <div class="form-row">
                                <label for="font-family">Font Family</label>
                                <select id="font-family" onchange="updatePreview()">
                                    <option value="Helvetica">Helvetica</option>
                                    <option value="Arial">Arial</option>
                                    <option value="Times New Roman">Times New Roman</option>
                                    <option value="Courier">Courier</option>
                                    <option value="Georgia">Georgia</option>
                                </select>
                            </div>

                            <div class="form-row">
                                <label for="font-size">Base Font Size</label>
                                <select id="font-size" onchange="updatePreview()">
                                    <option value="10">10px</option>
                                    <option value="11">11px</option>
                                    <option value="12" selected>12px (Default)</option>
                                    <option value="13">13px</option>
                                    <option value="14">14px</option>
                                </select>
                            </div>

                            <div class="form-row">
                                <label for="header-font-size">Header Font Size</label>
                                <select id="header-font-size" onchange="updatePreview()">
                                    <option value="16">16px</option>
                                    <option value="18">18px</option>
                                    <option value="20" selected>20px (Default)</option>
                                    <option value="22">22px</option>
                                    <option value="24">24px</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Fields Tab Content -->
                    <div id="design-fields-tab" class="tab-content">
                        <h4>Field Settings</h4>
                        
                        <div class="field-section">
                            <h5>Client Information</h5>
                            <div class="field-list">
                                <div class="field-item">
                                    <label>Bill To Label</label>
                                    <input type="text" id="bill-to-label" value="Bill To" placeholder="Bill To" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" id="show-bill-to" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Ship To Label</label>
                                    <input type="text" id="ship-to-label" value="Ship To" placeholder="Ship To" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" id="show-ship-to" onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field-section">
                            <h5>Invoice Details</h5>
                            <div class="field-list">
                                <div class="field-item">
                                    <label>Invoice Number Label</label>
                                    <input type="text" id="invoice-number-label" value="Invoice #" placeholder="Invoice #" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Date Label</label>
                                    <input type="text" id="date-label" value="Date" placeholder="Date" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Due Date Label</label>
                                    <input type="text" id="due-date-label" value="Due Date" placeholder="Due Date" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field-section">
                            <h5>Table Columns</h5>
                            <div class="field-list">
                                <div class="field-item">
                                    <label>Item Label</label>
                                    <input type="text" id="item-label" value="Item" placeholder="Item" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Description Label</label>
                                    <input type="text" id="description-label" value="Description" placeholder="Description" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Quantity Label</label>
                                    <input type="text" id="quantity-label" value="Qty" placeholder="Qty" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Rate Label</label>
                                    <input type="text" id="rate-label" value="Rate" placeholder="Rate" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Amount Label</label>
                                    <input type="text" id="amount-label" value="Amount" placeholder="Amount" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="field-section">
                            <h5>Totals</h5>
                            <div class="field-list">
                                <div class="field-item">
                                    <label>Subtotal Label</label>
                                    <input type="text" id="subtotal-label" value="Subtotal" placeholder="Subtotal" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Tax Label</label>
                                    <input type="text" id="tax-label" value="Tax" placeholder="Tax" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                                <div class="field-item">
                                    <label>Total Label</label>
                                    <input type="text" id="total-label" value="Total" placeholder="Total" oninput="updatePreview()">
                                    <label class="switch">
                                        <input type="checkbox" checked onchange="updatePreview()">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                        <a href="./settings.php" class="btn-cancel">Cancel</a>
                        <button type="submit" class="btn-save">Save Design</button>
                    </div>
                </div>
            </div>

            <!-- Preview Panel -->
            <div class="preview-panel">
                <h3>Live Preview</h3>
                <div class="preview-container">
                    <div class="invoice-preview">
                        <div class="invoice-header">
                            <div class="company-info">
                                <div class="logo-placeholder" id="preview-logo">LOGO</div>
                                <div class="company-details">
                                    <h3>Your Company Name</h3>
                                    <p>123 Business Street<br>
                                    City, State 12345<br>
                                    Email: info@company.com</p>
                                </div>
                            </div>
                            <div class="invoice-title">
                                <h2 id="preview-invoice-title">INVOICE</h2>
                            </div>
                        </div>

                        <div class="invoice-details">
                            <div class="client-info">
                                <h4 id="preview-bill-to">Bill To:</h4>
                                <p><strong>Client Name</strong><br>
                                456 Client Avenue<br>
                                Client City, State 67890</p>
                            </div>
                            <div class="invoice-meta">
                                <table>
                                    <tr id="invoice-number-row"><td><strong id="preview-invoice-number-label">Invoice #:</strong></td><td>INV-001</td></tr>
                                    <tr id="date-row"><td><strong id="preview-date-label">Date:</strong></td><td>January 15, 2024</td></tr>
                                    <tr id="due-date-row"><td><strong id="preview-due-date-label">Due Date:</strong></td><td>February 14, 2024</td></tr>
                                </table>
                            </div>
                        </div>

                        <div class="invoice-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th id="preview-item-header">Item</th>
                                        <th id="preview-description-header">Description</th>
                                        <th id="preview-quantity-header">Qty</th>
                                        <th id="preview-rate-header">Rate</th>
                                        <th id="preview-amount-header">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Web Design</td>
                                        <td>Custom website design and development</td>
                                        <td>1</td>
                                        <td>$2,500.00</td>
                                        <td>$2,500.00</td>
                                    </tr>
                                    <tr>
                                        <td>SEO Setup</td>
                                        <td>Search engine optimization configuration</td>
                                        <td>1</td>
                                        <td>$500.00</td>
                                        <td>$500.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="invoice-totals">
                            <table>
                                <tr><td id="preview-subtotal-label">Subtotal:</td><td>$3,000.00</td></tr>
                                <tr><td id="preview-tax-label">Tax (10%):</td><td>$300.00</td></tr>
                                <tr class="total-row"><td><strong id="preview-total-label">Total:</strong></td><td><strong>$3,300.00</strong></td></tr>
                            </table>
                        </div>

                        <div class="invoice-footer">
                            <p><strong>Payment Terms:</strong> <span id="preview-payment-terms">Payment is due within 30 days</span></p>
                            <p id="preview-footer-text">Thank you for your business!</p>
                        </div>
                    </div>
                </div>
                
                <div class="preview-actions">
                    <button type="button" class="btn-secondary" onclick="downloadPDF()">Download PDF</button>
                    <button type="button" class="btn-secondary" onclick="sendTestEmail()">Send Test Email</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script>
        function showDesignTab(tabName) {
            // Hide all tab content
            const allTabContent = document.querySelectorAll('.tab-content');
            allTabContent.forEach(content => content.classList.remove('active'));

            // Show selected tab content
            const targetTab = document.getElementById('design-' + tabName + '-tab');
            if (targetTab) {
                targetTab.classList.add('active');
            }

            // Update tab active state
            const allTabs = document.querySelectorAll('.tab');
            allTabs.forEach(tab => tab.classList.remove('active'));
            event.target.classList.add('active');
        }

        function updatePreview() {
            // Get the preview element
            const preview = document.querySelector('.invoice-preview');
            if (!preview) return;

            // Update colors
            const primaryColor = document.getElementById('primary-color').value;
            const secondaryColor = document.getElementById('secondary-color').value;
            const headerBgColor = document.getElementById('header-bg-color').value;
            const tableHeaderColor = document.getElementById('table-header-color').value;

            preview.style.setProperty('--primary-color', primaryColor);
            preview.style.setProperty('--secondary-color', secondaryColor);
            preview.style.setProperty('--header-bg-color', headerBgColor);
            preview.style.setProperty('--table-header-color', tableHeaderColor);

            // Update fonts
            const fontFamily = document.getElementById('font-family').value;
            const fontSize = document.getElementById('font-size').value + 'px';
            const headerFontSize = document.getElementById('header-font-size').value + 'px';

            preview.style.setProperty('--preview-font-family', fontFamily);
            preview.style.setProperty('--preview-font-size', fontSize);
            preview.style.setProperty('--header-font-size', headerFontSize);

            // Update logo size
            const logoSize = document.getElementById('logo-size').value;
            let logoSizePx;
            switch(logoSize) {
                case 'small': logoSizePx = '50px'; break;
                case 'large': logoSizePx = '80px'; break;
                default: logoSizePx = '60px'; break;
            }
            preview.style.setProperty('--logo-size', logoSizePx);

            // Update text content
            const invoiceTitle = document.getElementById('invoice-title').value;
            const billToLabel = document.getElementById('bill-to-label').value;
            const invoiceNumberLabel = document.getElementById('invoice-number-label').value;
            const dateLabel = document.getElementById('date-label').value;
            const dueDateLabel = document.getElementById('due-date-label').value;
            const footerText = document.getElementById('footer-text').value;
            const paymentTerms = document.getElementById('payment-terms').value;

            // Update preview elements
            const previewInvoiceTitle = document.getElementById('preview-invoice-title');
            if (previewInvoiceTitle) previewInvoiceTitle.textContent = invoiceTitle;

            const previewBillTo = document.getElementById('preview-bill-to');
            if (previewBillTo) previewBillTo.textContent = billToLabel + ':';

            const previewInvoiceNumberLabel = document.getElementById('preview-invoice-number-label');
            if (previewInvoiceNumberLabel) previewInvoiceNumberLabel.textContent = invoiceNumberLabel + ':';

            const previewDateLabel = document.getElementById('preview-date-label');
            if (previewDateLabel) previewDateLabel.textContent = dateLabel + ':';

            const previewDueDateLabel = document.getElementById('preview-due-date-label');
            if (previewDueDateLabel) previewDueDateLabel.textContent = dueDateLabel + ':';

            const previewFooterText = document.getElementById('preview-footer-text');
            if (previewFooterText) previewFooterText.textContent = footerText;

            const previewPaymentTerms = document.getElementById('preview-payment-terms');
            if (previewPaymentTerms) previewPaymentTerms.textContent = paymentTerms;

            // Update table headers
            const itemLabel = document.getElementById('item-label').value;
            const descriptionLabel = document.getElementById('description-label').value;
            const quantityLabel = document.getElementById('quantity-label').value;
            const rateLabel = document.getElementById('rate-label').value;
            const amountLabel = document.getElementById('amount-label').value;

            const previewItemHeader = document.getElementById('preview-item-header');
            if (previewItemHeader) previewItemHeader.textContent = itemLabel;

            const previewDescriptionHeader = document.getElementById('preview-description-header');
            if (previewDescriptionHeader) previewDescriptionHeader.textContent = descriptionLabel;

            const previewQuantityHeader = document.getElementById('preview-quantity-header');
            if (previewQuantityHeader) previewQuantityHeader.textContent = quantityLabel;

            const previewRateHeader = document.getElementById('preview-rate-header');
            if (previewRateHeader) previewRateHeader.textContent = rateLabel;

            const previewAmountHeader = document.getElementById('preview-amount-header');
            if (previewAmountHeader) previewAmountHeader.textContent = amountLabel;

            // Update totals labels
            const subtotalLabel = document.getElementById('subtotal-label').value;
            const taxLabel = document.getElementById('tax-label').value;
            const totalLabel = document.getElementById('total-label').value;

            const previewSubtotalLabel = document.getElementById('preview-subtotal-label');
            if (previewSubtotalLabel) previewSubtotalLabel.textContent = subtotalLabel + ':';

            const previewTaxLabel = document.getElementById('preview-tax-label');
            if (previewTaxLabel) previewTaxLabel.textContent = taxLabel + ' (10%):';

            const previewTotalLabel = document.getElementById('preview-total-label');
            if (previewTotalLabel) previewTotalLabel.textContent = totalLabel + ':';

            // Handle visibility toggles
            const showLogo = document.getElementById('show-logo').checked;
            const logoElement = document.getElementById('preview-logo');
            if (logoElement) {
                logoElement.style.display = showLogo ? 'flex' : 'none';
            }

            const showInvoiceNumber = document.getElementById('show-invoice-number').checked;
            const invoiceNumberRow = document.getElementById('invoice-number-row');
            if (invoiceNumberRow) {
                invoiceNumberRow.style.display = showInvoiceNumber ? 'table-row' : 'none';
            }

            const showDate = document.getElementById('show-date').checked;
            const dateRow = document.getElementById('date-row');
            if (dateRow) {
                dateRow.style.display = showDate ? 'table-row' : 'none';
            }

            const showDueDate = document.getElementById('show-due-date').checked;
            const dueDateRow = document.getElementById('due-date-row');
            if (dueDateRow) {
                dueDateRow.style.display = showDueDate ? 'table-row' : 'none';
            }
        }

        // Initialize preview on page load
        document.addEventListener('DOMContentLoaded', function() {
            updatePreview();
        });

        // PDF Download functionality
        async function downloadPDF() {
            try {
                // Show loading state
                const downloadBtn = event.target;
                const originalText = downloadBtn.textContent;
                downloadBtn.textContent = 'Generating PDF...';
                downloadBtn.disabled = true;

                // Get the invoice preview element
                const invoicePreview = document.querySelector('.invoice-preview');
                if (!invoicePreview) {
                    throw new Error('Preview element not found');
                }

                // Create a clone for PDF generation
                const clone = invoicePreview.cloneNode(true);
                
                // Prepare clone for PDF generation
                clone.style.transform = 'scale(1)';
                clone.style.transformOrigin = 'top left';
                clone.style.width = '210mm';
                clone.style.maxWidth = '210mm';
                clone.style.padding = '15mm';
                clone.style.margin = '0';
                clone.style.position = 'absolute';
                clone.style.top = '-9999px';
                clone.style.left = '0';
                clone.style.background = 'white';
                clone.style.fontFamily = 'Arial, sans-serif';
                clone.style.fontSize = '12px';
                clone.style.lineHeight = '1.4';
                clone.style.color = '#000';
                clone.style.boxShadow = 'none';
                
                // Add clone to body temporarily
                document.body.appendChild(clone);

                // PDF generation options
                const opt = {
                    margin: 0,
                    filename: `invoice-preview-${new Date().toISOString().split('T')[0]}.pdf`,
                    image: { type: 'jpeg', quality: 0.98 },
                    html2canvas: { 
                        scale: 2,
                        useCORS: true,
                        letterRendering: true,
                        allowTaint: false
                    },
                    jsPDF: { 
                        unit: 'mm', 
                        format: 'a4', 
                        orientation: 'portrait' 
                    }
                };

                // Generate PDF
                await html2pdf().set(opt).from(clone).save();

                // Clean up
                document.body.removeChild(clone);

                // Reset button state
                downloadBtn.textContent = originalText;
                downloadBtn.disabled = false;

            } catch (error) {
                console.error('PDF generation error:', error);
                
                // Fallback: try window.print()
                const shouldTryPrint = confirm('PDF generation failed. Would you like to use browser print instead? (You can save as PDF from print dialog)');
                
                if (shouldTryPrint) {
                    // Create a new window with just the invoice
                    const printWindow = window.open('', '_blank');
                    const invoicePreview = document.querySelector('.invoice-preview');
                    
                    printWindow.document.write(`
                        <!DOCTYPE html>
                        <html>
                        <head>
                            <title>Invoice Preview</title>
                            <style>
                                body { 
                                    margin: 0; 
                                    padding: 20mm; 
                                    font-family: Arial, sans-serif;
                                    font-size: 12px;
                                    line-height: 1.4;
                                }
                                * { box-sizing: border-box; }
                                .invoice-preview { 
                                    max-width: none; 
                                    margin: 0; 
                                    padding: 0;
                                    transform: none;
                                    box-shadow: none;
                                }
                                .invoice-header {
                                    display: flex;
                                    justify-content: space-between;
                                    align-items: flex-start;
                                    margin-bottom: 30px;
                                    padding-bottom: 15px;
                                    border-bottom: 2px solid ${document.getElementById('primary-color').value};
                                }
                                .company-info { display: flex; gap: 15px; align-items: flex-start; }
                                .logo-placeholder {
                                    width: 60px; height: 60px; background: #e5e7eb;
                                    display: flex; align-items: center; justify-content: center;
                                    border-radius: 4px; color: #6b7280; font-size: 10px; font-weight: bold;
                                }
                                .company-details h3 { 
                                    margin: 0 0 8px 0; color: ${document.getElementById('primary-color').value}; 
                                    font-size: 16px; 
                                }
                                .company-details p { 
                                    margin: 0; color: ${document.getElementById('secondary-color').value}; 
                                    font-size: 12px; line-height: 1.4; 
                                }
                                .invoice-title h2 { 
                                    margin: 0; color: ${document.getElementById('primary-color').value}; 
                                    font-size: ${document.getElementById('header-font-size').value}px; font-weight: bold; 
                                }
                                .invoice-details { display: flex; justify-content: space-between; margin-bottom: 25px; }
                                .client-info h4 { margin: 0 0 8px 0; color: #374151; font-size: 13px; font-weight: 600; }
                                .client-info p { margin: 0; color: ${document.getElementById('secondary-color').value}; font-size: 12px; line-height: 1.4; }
                                .invoice-meta table { border-collapse: collapse; }
                                .invoice-meta table td { padding: 3px 6px; font-size: 12px; }
                                .invoice-meta table td:first-child { 
                                    color: ${document.getElementById('secondary-color').value}; 
                                    text-align: right; padding-right: 12px; 
                                }
                                .invoice-table { margin-bottom: 25px; }
                                .invoice-table table { width: 100%; border-collapse: collapse; font-size: 12px; }
                                .invoice-table thead th {
                                    background: ${document.getElementById('table-header-color').value};
                                    padding: 10px; text-align: left; font-weight: 600;
                                    color: #374151; border-bottom: 1px solid #e2e8f0;
                                }
                                .invoice-table tbody td { 
                                    padding: 10px; border-bottom: 1px solid #f1f5f9; color: #374151; 
                                }
                                .invoice-totals { margin-left: auto; width: 250px; }
                                .invoice-totals table { width: 100%; border-collapse: collapse; font-size: 12px; }
                                .invoice-totals table td { padding: 6px 10px; text-align: right; }
                                .invoice-totals table td:first-child { color: ${document.getElementById('secondary-color').value}; }
                                .invoice-totals .total-row { 
                                    border-top: 2px solid #e2e8f0; 
                                    background: ${document.getElementById('header-bg-color').value}; 
                                }
                                .invoice-totals .total-row td { 
                                    color: ${document.getElementById('primary-color').value}; font-size: 14px; 
                                }
                                .invoice-footer { 
                                    margin-top: 25px; padding-top: 15px; border-top: 1px solid #e2e8f0; 
                                }
                                .invoice-footer p { 
                                    margin: 6px 0; color: ${document.getElementById('secondary-color').value}; font-size: 12px; 
                                }
                                @media print { 
                                    body { margin: 0; padding: 15mm; } 
                                    .invoice-preview { page-break-inside: avoid; }
                                }
                            </style>
                        </head>
                        <body>
                            ${invoicePreview.outerHTML}
                        </body>
                        </html>
                    `);
                    
                    printWindow.document.close();
                    
                    // Wait a moment for content to load, then print
                    setTimeout(() => {
                        printWindow.print();
                    }, 500);
                }
                
                // Reset button state
                const downloadBtn = event.target;
                downloadBtn.textContent = 'Download PDF';
                downloadBtn.disabled = false;
            }
        }

        // Send test email functionality
        function sendTestEmail() {
            alert('Test email functionality would be implemented here. This would typically send the invoice preview to a specified email address.');
        }
    </script>
