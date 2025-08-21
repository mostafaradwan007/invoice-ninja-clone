<!-- Form Content -->
<div class="form-content">

    <div id="product-settings-tab" class="tab-content active">
        <h4>Settings</h4>
        <hr style="color:lightgray;">


           <div class="form-row">
            <label for="trackinventory">Track Inventory<br><span style="color: gray;">Display a product stock field and update when invoices are sent</span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="form-row">
            <label for="stocknotifications">Stock Notifications<br><span style="color: gray;">Send an email when the stock reaches the threshold
                </span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>

          <div class="form-row">
            <label for="Notification Threshold">Notification Threshold
               </label>
        
            <input type="text" id="Notification Threshold" class="form-control"/> 
       
        </div>

        <hr style="color: gray;">


        <div class="form-row">
            <label for="showproducts">Show Products<br><span style="color: gray;">Display a line item discount field</span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="form-row">
            <label for="productcost">Show Products Cost<br><span style="color: gray;">Display a product cost field to track the markup/profit</span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="form-row">
            <label for="productquantity">Show Products Quantity<br><span style="color: gray;">Display a product quantity field, otherwise default to one</span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>
        <div class="form-row">
            <label for="defaultquantity">Default Quantity<br><span style="color: gray;">Automatically set the line item quantity to one

                </span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>
        <hr style="color: gray;">
        <div class="form-row">
            <label for="Auto-fillproducts">Auto-fill products<br><span style="color: gray;">Selecting a product will automatically fill in the description and cost</span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>


        <div class="form-row">
            <label for="Auto-updateproducts">Auto-update products<br><span style="color: gray;">Updating an invoice will automatically update the product library</span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>


        <div class="form-row">
            <label for="ConvertProducts">Convert Products<br><span style="color: gray;">Automatically convert product prices to the client's currency</span></label>
            <label class="switch">
                <input type="checkbox" id="calculationToggle">
                <span class="slider round"></span>
            </label>
        </div>


    </div>

    <div class="form-actions">
        <a href="./settings.php" class="btn-cancel">Cancel</a>
        <button type="submit" class="btn-save">Save Changes</button>
    </div>
</div>

