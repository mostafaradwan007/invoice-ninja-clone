        <div class="modal hidden" id="clientModal">
                        <div class="modal-content">
                            <span class="close" onclick="closeclientModal()">×</span>
                            <h3>New Client</h3>
                            <label>Name</label>
                            <input type="text" id="clientName">
                            <label>Contact First Name</label>
                            <input type="text" id="clientfirstname">
                            <label>Contact Last Name</label>
                            <input type="text" id="clientlastname">
                            <label>Contact Email</label>
                            <input type="email" id="clientEmail">
                            <label>Contact Phone</label>
                            <input type="tel" id="clientphone">
                            <div class="button-row">
                                <button type="button" onclick="openMoreFields(this)" data-url="./client-create.php">More Info</button>

                                <button type="button" id="save" onclick="saveclient()">Save</button>
                            </div>
                        </div>
                    </div>
                    <!--More info -->
                    <div class="modal hidden" id="moreFieldsModal">
                        <div class="modal-content1">
                            <span class="close" onclick="closeMoreFields()">×</span>

                            <button type="button" onclick="closeMoreFields()">Done</button>
                        </div>
                    </div>
                    <!--end of client part-->


                    </body>
                      <script>
         
            const clientSelect = document.getElementById("clientSelect");
            const clientModal = document.getElementById("clientModal");
           
            const moreFieldsModal = document.getElementById("moreFieldsModal");

          
            clientSelect.addEventListener("change", function() {
                if (clientSelect.value === "new") {
                    clientModal.classList.remove("hidden");
                    clientModal.style.display = "flex";
                }
            });
         


         
            function closeclientModal() {
                clientModal.classList.add("hidden");
                clientModal.style.display = "none";
                clientSelect.value = "";
            }
         

            function saveclient() {
                const name = document.getElementById("clientName").value;
                const email = document.getElementById("clientEmail").value;

                if (name === "") {
                    alert("Please enter a name.");
                    return;
                }

                const option = document.createElement("option");
                option.value = name.toLowerCase().replace(/\s+/g, '-');
                option.textContent = name;
                clientSelect.insertBefore(option, clientSelect.lastElementChild); // Add before "New vendor"
                clientSelect.value = option.value;

                closeModal();

                // Clear form fields
                document.getElementById("clientName").value = "";
                document.getElementById("clientEmail").value = "";
                document.getElementById("clientfirstname").value = "";
                document.getElementById("clientlastname").value = "";
                document.getElementById("clientphone").value = "";
            }

            

            function saveproject() {
                // Add saving logic here
                alert("Project saved.");
            }


            function openMoreFields(button) {
                const url = button.getAttribute("data-url");
                if (url) {
                    window.location.href = url;
                }
            }


            function closeMoreFields() {
                moreFieldsModal.classList.add("hidden");
                moreFieldsModal.style.display = "none";
            }

            // Close modal when clicking outside of it
            window.addEventListener('click', function(event) {
              
                if (event.target === clientModal) {
                    closeclientModal();
                }
               
          
                if (event.target === moreFieldsModal) {
                    closeMoreFields();
                }
            });
           
        </script>
        <body>