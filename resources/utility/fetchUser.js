export function fetchData() {
    let tableElement = document.querySelector("tbody");
    let modalElement = document.getElementById("myModal");

    axios.get("../admin/fetch.php")
    .then(function (response) {
        const users = response.data;

        tableElement.innerHTML = ""; // Clear previous table content

        users.forEach(user => {
            let row = document.createElement('tr');

            row.innerHTML = 
            `
                <td>${user.id}</td>
                <td>${user.username}</td>
                <td>${user.email}</td>
                <td>${user.user_type}</td>
                <td>
                    <div class="d-flex justify-content-center align-items-center gap-3">
                        <button type="button" class="btn btn-primary view-btn" 
                        data-bs-toggle="modal" 
                        data-id="${user.id}" data-username = "${user.username}" data-email="${user.email}" data-type="${user.user_type}"
                        data-bs-target="#exampleModal">
                            View
                        </button>                        
                        <button type="button" class="btn btn-danger btn-xs">Delete</button>
                    </div>
                </td>
            `;

            tableElement.appendChild(row);
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
