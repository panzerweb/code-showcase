export async function deleteUser(id){
    if (!confirm("Are you sure you want to delete this user?")) {
        return;
    }

    try {
        const response = await axios.delete(`../admin/delete_user.php`, {
            data: { id: id } 
        });

        alert(response.data.message || "User deleted successfully.");
        fetchData(); // Refresh the table after deletion
    } catch (error) {
        console.error("Error deleting user:", error);
        alert("Failed to delete user.");
    }
}

