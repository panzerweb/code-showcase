//Admin Only --- Fetching data from database and render to the View

export function fetchData() {
    let tableElement = document.querySelector("tbody");

    axios.get("../admin/fetch.php")
    .then(function (response) {
        const users = response.data;

        tableElement.innerHTML = "";

        users.forEach(user => {
            let row = document.createElement('tr');

            row.innerHTML = 
            `
                <td>${user.username}</td>
                <td>${user.email}</td>
                <td>${user.user_type}</td>
            `;

            tableElement.appendChild(row);

        });

        console.log(users); // Check if data is returned
    })
    .catch(function (error) {
        console.error("Error fetching data:", error);
    });
}

