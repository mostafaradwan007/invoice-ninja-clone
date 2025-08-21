   <div class="tabs">
       <div class="tab-list">
           <div class="tab active" onclick="showuserTab('settings')">settings</div>
           <div class="tab" onclick="showuserTab('customization')">customization</div>
           <div class="tab" onclick="showuserTab('registeration')">registeration</div>
       </div>
   </div>
   <!-- Client Portal -->

   <div class="form-content">
       <div class="form-title">Client Portal</div>


       <div id="user-settings-tab" class="tab-content active">
           <div class="form-row">
               <label>Enable Client Portal:</label>
               <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Dashboard:</label>
               <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Tasks:</label>
               <label class="switch">
                   <input type="checkbox" checked>
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Enable Client Portal Password:</label>
               <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Show Accept Invoice Terms:</label>
               <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Show Accept Quote Terms:</label>
               <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Require Invoice Signature:</label>
               <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Require Quote Signature:</label>
               <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
               </label>
           </div>
       </div>

       <div id="user-customization-tab" class="tab-content">
           <div class="form-row">
               <label>Portal Mode:</label>
               <select>
                   <option value="subdomain">Subdomain</option>
                   <option value="iframe">iFrame</option>
                   <option value="domain" selected>Domain</option>
               </select>
           </div>
           <div class="form-row">
               <label>Subdomain:</label>
               <input type="text" placeholder="client" value="client">
           </div>
           <div class="form-row">
               <label>Portal Custom Head:</label>
               <textarea placeholder="Custom CSS/JS for portal header"></textarea>
           </div>
           <div class="form-row">
               <label>Portal Custom CSS:</label>
               <textarea placeholder="Custom CSS for portal styling"></textarea>
           </div>
           <div class="form-row">
               <label>Portal Custom Footer:</label>
               <textarea placeholder="Custom footer content"></textarea>
           </div>
           <div class="form-row">
               <label>Portal Custom JS:</label>
               <textarea placeholder="Custom JavaScript for portal"></textarea>
           </div>
       </div>

       <div id="user-registeration-tab" class="tab-content">
           <div class="form-row">
               <label>Enable Registration:</label>
               <label class="switch">
                   <input type="checkbox">
                   <span class="slider round"></span>
               </label>
           </div>
           <div class="form-row">
               <label>Registration Fields:</label>
               <select>
                   <option>First Name, Last Name, Email</option>
                   <option>Company Name, Contact Name, Email</option>
                   <option>Custom Fields Only</option>
               </select>
           </div>
       </div>

       <div class="form-actions">
           <button class="btn-cancel">Cancel</button>
           <button class="btn-save">Save</button>
       </div>
   </div>

   <script>
       function showuserTab(tabName) {
           // Hide all tab content
           const allTabContent = document.querySelectorAll('.tab-content');
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