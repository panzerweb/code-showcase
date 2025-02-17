export function fetchData() {
    let contentElement = document.querySelector(".user-content");
    let modalElement = document.getElementById("myModal");

    axios.get("../admin/fetch.php")
    .then(function (response) {
        const users = response.data;

        contentElement.innerHTML = ""; // Clear previous table content

        users.forEach(user => {
            let container = document.createElement('div');
            container.classList.add('my-3');

            container.innerHTML = 
            `
                <div class="user-card border border-1 d-flex align-items-center justify-content-between p-3 shadow-sm rounded">
                    <div class="user-info">
                        <h5 class="mb-1 fw-bold">${user.username}</h5>
                        <p class="text-muted mb-0">${user.email}</p>
                        <span class="badge bg-secondary">${user.user_type}</span>
                    </div>
                    
                    <div class="d-flex align-items-center gap-2">
                        <button type="button" class="btn btn-success btn-sm view-btn" 
                            data-bs-toggle="modal" 
                            data-id="${user.id}" data-username="${user.username}" 
                            data-email="${user.email}" data-type="${user.user_type}"
                            data-bs-target="#exampleModal">
                            View
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteUser(${user.id})">
                            Delete
                        </button>
                    </div>
                </div>
            `;

            contentElement.appendChild(container);
        });

        //Iterate through each view buttons
        document.querySelectorAll('.view-btn').forEach(button => {
            button.addEventListener('click', function(){
                let idData = this.getAttribute('data-id');
                let userNameData = this.getAttribute('data-username');
                let emailData = this.getAttribute('data-email');
                let userType = this.getAttribute('data-type');

                modalElement.innerHTML = 
                `
                    <p><strong>ID:</strong> ${idData}</p>
                    <p><strong>Username:</strong> ${userNameData}</p>
                    <p><strong>Email Address:</strong> ${emailData}</p>
                    <p><strong>Role:</strong> ${userType}</p>
                `

            })
        });

        console.log(users); // Check if data is returned
    })
    .catch(function (error) {
        console.error("Error fetching data:", error);
    });
}
