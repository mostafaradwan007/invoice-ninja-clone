  <!-- Email Settings -->

  <div class="form-content" style="text-transform: capitalize;">
      <div class="form-title">Email Settings</div>
      <div class="form-row">
          <label>Show Email Footer</label>
          <label class="switch">
              <input type="checkbox" checked>
              <span class="slider round"></span>
          </label>
</div>

          <div class="form-row">
              <label>attach PDF</label>
              <label class="switch">
                  <input type="checkbox" >
                  <span class="slider round"></span>
              </label>
          </div>
          <div class="form-row">
              <label>Attach DOC</label>
              <label class="switch">
                  <input type="checkbox" >
                  <span class="slider round"></span>
              </label>
          </div>
          <div class="form-row">
              <label>attach UBL/E-Invoice<br><span style="color: gray;">For more e-invoice settings please navigate<a href="./E-invoicing.php" style="color:blue;"> here.</a></span></label>
              <label class="switch">
                  <input type="checkbox" >
                  <span class="slider round"></span>
              </label>
          </div>

          <div class="form-row">
              <label>From Name:</label>
              <input type="text" placeholder="Your Company Name">
          </div>
          <div class="form-row">
              <label>Replay-To Name:</label>
              <input type="text">
          </div>
          <div class="form-row">
              <label>From Email:</label>
              <input type="email" placeholder="noreply@yourcompany.com">
          </div>
          <div class="form-row">
              <label>Reply-To Email:</label>
              <input type="email" placeholder="support@yourcompany.com">
          </div>
          <div class="form-row">
              <label>BCC Email<br><span style="color: gray;">Comma separated list</span></label>
              <input type="email" placeholder="admin@yourcompany.com">
          </div>
          <div class="form-row">
              <label>Email Style:</label>
              <select>
                  <option value="light" selected>Light</option>
                  <option value="dark">Dark</option>
                  <option value="plain">Plain</option>
              </select>
          </div>
      </div>


      <div class="form-actions">
          <button class="btn-cancel">Cancel</button>
          <button class="btn-save">Save</button>
      </div>
  </div>