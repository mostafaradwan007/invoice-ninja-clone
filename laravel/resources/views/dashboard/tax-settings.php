
<!-- Tabs -->
<div class="tabs">
    <div class="tab-list">
        <div class="tab active" onclick="showTaxTab('rates')">Tax Rates</div>
     
    </div>
</div>

<!-- Form Content -->
<div class="form-content">

    <!-- Tax Rates Tab Content -->
    <div id="tax-rates-tab" class="tab-content active">
        <h4>Tax Rates Management</h4>

        <div class="tax-rates-header">
            <button type="button" class="btn-add-tax" onclick="addNewTaxRate()">
                <i class="bi bi-plus-circle"></i> Add New Tax Rate
            </button>
        </div>

        <div class="tax-rates-list">
            <div class="form-row">
                <label for="invoicetaxrates">Invoice Tax Rates</label>
                <select class="form-select" id="invoicetaxrates">
                    <option>Disabled</option>
                    <option>1 tax rate</option>
                    <option>2 tax rates</option>
                    <option>3 tax rates</option>
                </select>
            </div>

            <div class="form-row">
                <label for="lineitemtaxrates">Line Item Tax Rates</label>
                <select class="form-select" id="lineitemtaxrate">
                    <option>Disabled</option>
                    <option>1 tax rate</option>
                    <option>2 tax rates</option>
                    <option>3 tax rates</option>
                </select>
            </div>

            <div class="form-row">
                <label for="expensetaxrates">Expense Tax Rates</label>
                <select class="form-select" id="expensetaxrates">
                    <option>Disabled</option>
                    <option>1 tax rate</option>
                    <option>2 tax rates</option>
                    <option>3 tax rates</option>
                </select>
            </div>
            <div class="form-row">
                <label>Inclusive Taxes</label>
                <label class="switch">
                    <input type="checkbox" id="calculationToggle">
                    <span class="slider round"></span>
                </label>
                <div class="right-column">
                    <div class="calculation-display" id="calculationDisplay">
                        Exclusive: 100 + 10% = 100 + 10
                    </div>
                </div>
            </div>


        </div>

    </div>


    <!-- Add/Edit Tax Rate Modal Content -->
    <div id="tax-rate-form" class="tax-form-section" style="display: none;">
        <h5>Add New Tax Rate</h5>
        <div class="form-row">
            <label for="tax-name">Tax Name</label>
            <input type="text" id="tax-name" placeholder="Enter tax name (e.g., Sales Tax)">
        </div>

        <div class="form-row">
            <label for="tax-percentage">Tax Rate (%)</label>
            <input type="number" id="tax-percentage" step="0.01" min="0" max="100" placeholder="0.00">
        </div>

        <div class="tax-form-actions">
            <button type="button" class="btn-cancel" onclick="cancelTaxForm()">Cancel</button>
            <button type="button" class="btn-save" onclick="saveTaxRate()">Save Tax Rate</button>
        </div>
    </div>


    <div class="form-actions">
        <a href="./settings.php" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn-save">Save Tax Settings</button>
    </div>
</div>

<style>
    .btn-add-tax,
    .btn-add-region {
        background-color: #22c55e;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        font-weight: 500;
    }

    .btn-add-tax:hover,
    .btn-add-region:hover {
        background-color: #16a34a;
    }

    .tax-rates-list,
    .tax-regions-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .tax-rate-item,
    .tax-region-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
    }

    .tax-rate-info,
    .region-info {
        flex: 1;
    }

    .tax-rate-info h5,
    .region-info h5 {
        margin: 0 0 5px 0;
        color: #374151;
        font-size: 16px;
    }

    .tax-rate-info p,
    .region-info p {
        margin: 0 0 10px 0;
        color: #6b7280;
        font-size: 14px;
    }

    .tax-rate-percentage {
        background: #4d431bff;
        color: white;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 14px;
        font-weight: 600;
    }


    .tax-rate-actions {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .tax-form-section {
        margin-top: 30px;
        padding: 25px;
        background: #fff4c7ff;
        border: 1px solid #edd262ff;
        border-radius: 8px;
    }

    .tax-form-section h5 {
        margin: 0 0 20px 0;
        color: #000000ff;
        font-size: 18px;
    }

    .tax-form-actions {
        display: flex;
        gap: 10px;
        margin-top: 20px;
        justify-content: flex-end;
    }

    .tax-form-actions .btn-cancel {
        background-color: #f3f4f6;
        color: #374151;
        border: 1px solid #d1d5db;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        cursor: pointer;
    }

    .tax-form-actions {
        background-color: #fff4c7ff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
    }
</style>


<script>
    function showTaxTab(tabName) {
        // Hide all tab content
        const allTabContent = document.querySelectorAll('.tab-content');
        allTabContent.forEach(content => content.classList.remove('active'));

        // Show selected tab content
        const targetTab = document.getElementById('tax-' + tabName + '-tab');
        if (targetTab) {
            targetTab.classList.add('active');
        }

        // Update tab active state
        const allTabs = document.querySelectorAll('.tab');
        allTabs.forEach(tab => tab.classList.remove('active'));
        event.target.classList.add('active');
    }

    function addNewTaxRate() {
        const form = document.getElementById('tax-rate-form');
        const formTitle = form.querySelector('h5');

        // Reset form
        document.getElementById('tax-name').value = '';

        document.getElementById('tax-percentage').value = '';

        formTitle.textContent = 'Add New Tax Rate';
        form.style.display = 'block';
        form.scrollIntoView({
            behavior: 'smooth'
        });
    }

    function editTaxRate(id) {
        const form = document.getElementById('tax-rate-form');
        const formTitle = form.querySelector('h5');

        // Load existing data (this would come from database in real implementation)
        if (id === 1) {
            document.getElementById('tax-name').value = 'Sales Tax';

            document.getElementById('tax-percentage').value = '10.0';

        }

        formTitle.textContent = 'Edit Tax Rate';
        form.style.display = 'block';
        form.scrollIntoView({
            behavior: 'smooth'
        });
    }



    function cancelTaxForm() {
        document.getElementById('tax-rate-form').style.display = 'none';
    }

    function saveTaxRate() {
        const name = document.getElementById('tax-name').value;

        const percentage = document.getElementById('tax-percentage').value;

        if (!name || !percentage) {
            alert('Please fill in all required fields');
            return;
        }

        // Save logic here
        console.log('Saving tax rate:', {
            name,

            percentage
        });

        // Hide form
        cancelTaxForm();

        // Show success message
        alert('Tax rate saved successfully!');
    }
</script>

<!--for toggle switch-->
<script>
    const toggle = document.getElementById('calculationToggle');
    const display = document.getElementById('calculationDisplay');

    toggle.addEventListener('change', function() {
        if (this.checked) {
            // When switch is ON - show just the calculation
            display.textContent = 'Inclusive: 100 + 10% = 90.91 + 9.09';
        } else {
            // When switch is OFF - show the full exclusive text
            display.textContent = 'Exclusive: 100 + 10% = 100 + 10';
        }
    });
</script>
