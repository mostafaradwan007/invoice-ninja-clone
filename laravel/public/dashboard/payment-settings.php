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


<div class="tabs">
    <div class="tab-list">

        <div class="tab active" onclick="showTab('payment-settings')">Payment Settings</div>

    </div>
</div>
<!-- Payment Settings Tab -->
<div id="payment-settings" class="form-content tab-content active">

    <h4>Auto Bill Settings</h4>
    <br>

    <div class="fomr-row">
        <label>Auto Bill Standard Invoices <br><span style="color: gray;">Auto bill standard invoices on the due date</span></label>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>
    <br>
    <div class="fomr-row">
        <label>Auto Bill Recurring Invoices<br><span style="color: gray;">Disabled (Option is not shown)</span></label>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>


    <div class="form-row">
        <label>Auto Bill On <br><span style="color: #6b7280; font-size: 13px;">Auto bill on send date OR due date (recurring invoices)</span></label>
        <select class="form-select">
            <option>Send Date</option>
            <option selected>Due Date</option>
        </select>
    </div>

    <div class="form-row">
        <label>Use Available Credits <br><span style="color: gray;">Apply any credit balances to payments prior to charging a payment method</span></label>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Use Unapplied Payments <br><span style="color: gray;">Apply any payment balances prior to charging a payment method</span></label>
        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>

    <hr style="color: gray;">

    <div class="form-row">
        <label>Payment Type <span style="color: gray;">The default payment type to be used for payments</span></label>
        <select class="form-select">
            <option>Cash</option>
            <option>Check</option>
            <option>Credit Card</option>
            <option>Bank Transfer</option>
            <option>PayPal</option>
            <option>Other</option>
        </select>

    </div>

    <div class="form-row">
        <label>Quote Valid Until <span style="color: gray;">The number of days that the quote is valid for</span></label>
        <input type="number" class="form-input" placeholder="30" min="1">

    </div>

    <div class="form-row">
        <label>Expense Payment Type <span style="color: gray;">The default expense payment type to be used</span></label>
        <select class="form-select">
            <option>Cash</option>
            <option>Check</option>
            <option>Credit Card</option>
            <option>Bank Transfer</option>
            <option>Other</option>
        </select>
    </div>


    <div class="form-row">

        <label>Manual Payment Email <span style="color: gray;">Send an email when manually entering a payment</span></label>
        <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Online Payment Email <span style="color: gray;">Send an email when an online payment is made</span></label>

        <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Mark Paid Payment Email <span style="color: gray;">Send an email when marking an invoice as paid</span></label>

        <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Payment Email To All Contacts <span style="color: gray;">Sends the payment email to all contacts when enabled</span></label>

        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>


    <div class="form-row">

        <label>Manual Overpayments <span style="color: gray;">Support adding an overpayment amount manually on a payment</span></label>


        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Allow Overpayment <span style="color: gray;">Support paying extra to accept tips</span></label>

        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Allow Underpayment <span style="color: gray;">Support paying at minimum the partial/deposit amount</span></label>

        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Client Initiated Payments <span style="color: gray;">Support making a payment in the client portal without an invoice</span></label>

        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>One-Page Checkout <span style="color: gray;">Enable the new single page payment flow</span></label>

        <label class="switch">
            <input type="checkbox" checked>
            <span class="slider round"></span>
        </label>
    </div>

    <div class="form-row">

        <label>Unlock Documents After Payment <span style="color: gray;">Allows client access to invoice documents when an invoice has been paid</span></label>

        <label class="switch">
            <input type="checkbox">
            <span class="slider round"></span>
        </label>
    </div>
</div>



<div class="form-actions">
    <a href="./payment-settings.php" class="btn-cancel" onclick="showuserTab('usermanage')">Cancel</a>
    <button type="submit" class="btn-save">Save</button>
</div>
</div>