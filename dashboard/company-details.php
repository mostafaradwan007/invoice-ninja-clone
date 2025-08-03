

<!-- Tabs -->
<div class="tabs">
    <div class="tab-list">
        <div class="tab active" onclick="showCompanyTab('details')">Details</div>
        <div class="tab" onclick="showCompanyTab('address')">Address</div>
        <div class="tab" onclick="showCompanyTab('logo')">Logo</div>
        <div class="tab" onclick="showCompanyTab('defaults')">Defaults</div>
    </div>
</div>

<!-- Form Content -->
<div class="form-content">


    <!-- Details Tab Content -->
    <div id="company-details-tab" class="tab-content active">
        <h4>Company Details</h4>
        <div class="form-row">
            <label for="company-name">Company Name</label>
            <input type="text" id="company-name" placeholder="Enter company name">
        </div>
        <div class="form-row">
            <label for="id-number">ID Number</label>
            <input type="text" id="id-number" placeholder="Enter ID number">
        </div>
        <div class="form-row">
            <label for="vat-number">VAT Number</label>
            <input type="text" id="vat-number" placeholder="Enter VAT number">
        </div>
        <div class="form-row">
            <label for="website">Website</label>
            <input type="url" id="website" placeholder="Enter website URL">
        </div>
        <div class="form-row">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter email address">
        </div>
        <div class="form-row">
            <label for="company-phone">Company Phone</label>
            <input type="tel" id="company-phone" placeholder="Enter phone number">
        </div>
        <div class="form-row">
            <label for="company-size">Company Size</label>
            <select id="company-size">
                <option value="1-3">1 - 3</option>
                <option value="4-10">4 - 10</option>
                <option value="11-50">11 - 50</option>
                <option value="51-200">51 - 200</option>
                <option value="201-500">201 - 500</option>
                <option value="500+">500+</option>
            </select>
        </div>
        <div class="form-row">
            <label for="industry">Industry</label>
            <select id="industry">
                <option>Accounting & Legal</option>
                <option>Advertising</option>
                <option>AeroSpace</option>
                <option>Agriculture</option>
                <option>Automotive</option>
                <option>Banking & Finance</option>
                <option>Biotechnology</option>
                <option>BroadCasting</option>
                <option>Business Services</option>
                <option>Commodities & Chemicals</option>
                <option>Communications</option>
                <option>Computers & Hightech</option>
                <option>Construction</option>
                <option>Defense</option>
                <option>Energy</option>
                <option>Entertainment</option>
                <option>Government</option>
                <option>HealthCare & Life Sciences</option>
                <option>Insurance</option>
                <option>Manufacturing</option>
                <option>Marketing</option>
                <option>Media</option>
                <option>Non-Profit & Higher ED</option>
                <option>Other</option>
                <option>Pharmaceuticals</option>
                <option>Photography</option>
                <option>Professional Services & Consulting</option>
                <option>Real State</option>
                <option>Restaurant & Catering</option>
                <option>Retail & Wholesale</option>
                <option>Sports</option>
                <option>Transportation</option>
                <option>Travel & Luxury</option>
            </select>
        </div>
        <div class="form-row">
            <label for="classification">Classification</label>
            <select id="classification">
                <option>Individual</option>
                <option>Business</option>
                <option>Company</option>
                <option>PartnerShip</option>
                <option>Trust</option>
                <option>Charity</option>
                <option>Government</option>
                <option>Other</option>
            </select>
        </div>
    </div>

    <!-- Address Tab Content -->
    <div id="company-address-tab" class="tab-content">
        <h4>Address</h4>
        <div class="form-row">
            <label for="street-address">Street Address</label>
            <input type="text" id="street-address" placeholder="Enter street address">
        </div>
        <div class="form-row">
            <label for="apt">Apt/Suite</label>
            <input type="text" id="apt" placeholder="Enter apartment or suite number">
        </div>
        <div class="form-row">
            <label for="city">City</label>
            <input type="text" id="city" placeholder="Enter city">
        </div>
        <div class="form-row">
            <label for="state">State/Province</label>
            <input type="text" id="state" placeholder="Enter state or province">
        </div>
        <div class="form-row">
            <label for="postal-code">Postal Code</label>
            <input type="text" id="postal-code" placeholder="Enter postal code">
        </div>
    </div>

    <!-- Logo Tab Content -->
    <div id="company-logo-tab" class="tab-content">
        <h4>Logo</h4>
        <div class="form-group">
            <label>Upload Logo</label>
            <form>
                <input type="file" id="logoUpload" name="logoUpload" accept="image/*">
                <br>
                <input type="reset" value="Remove Logo">
            </form>
        </div>
    </div>

    <!-- Defaults Tab Content -->
    <div id="company-defaults-tab" class="tab-content">
        <h4>Defaults</h4>
        <div class="form-row">
            <label for="invoiceterms">Invoice Terms</label>
            <textarea id="invoiceterms" rows="3" placeholder="Enter invoice terms"></textarea>
        </div>
        <div class="form-row">
            <label for="invoicefooter">Invoice Footer</label>
            <textarea id="invoicefooter" rows="3" placeholder="Enter invoice footer"></textarea>
        </div>
        <div class="form-row">
            <label for="quoteterms">Quote Terms</label>
            <textarea id="quoteterms" rows="3" placeholder="Enter quote terms"></textarea>
        </div>
        <div class="form-row">
            <label for="quotefooter">Quote Footer</label>
            <textarea id="quotefooter" rows="3" placeholder="Enter quote footer"></textarea>
        </div>
        <div class="form-row">
            <label for="creditterms">Credit Terms</label>
            <textarea id="creditterms" rows="3" placeholder="Enter credit terms"></textarea>
        </div>
        <div class="form-row">
            <label for="creditfooter">Credit Footer</label>
            <textarea id="creditfooter" rows="3" placeholder="Enter credit footer"></textarea>
        </div>
        <div class="form-row">
            <label for="purchaseorderterms">Purchase Order Terms</label>
            <textarea id="purchaseorderterms" rows="3" placeholder="Enter purchase order terms"></textarea>
        </div>
        <div class="form-row">
            <label for="purchaseorderfooter">Purchase Order Footer</label>
            <textarea id="purchaseorderfooter" rows="3" placeholder="Enter purchase order footer"></textarea>
        </div>
    </div>

    <div class="form-actions">
        <a href="./company-details.php" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn-save">Save</button>
    </div>
    
</div>
<script src="../buttonchange.js"></script>
<script>
function showCompanyTab(tabName) {
    // Hide all tab content
    const allTabContent = document.querySelectorAll('.tab-content');
    allTabContent.forEach(content => content.classList.remove('active'));

    // Show selected tab content
    const targetTab = document.getElementById('company-' + tabName + '-tab');
    if (targetTab) {
        targetTab.classList.add('active');
    }

    // Update tab active state
    const allTabs = document.querySelectorAll('.tab');
    allTabs.forEach(tab => tab.classList.remove('active'));
    event.target.classList.add('active');
}
</script>
