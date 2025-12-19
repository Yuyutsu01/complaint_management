function validateForm() {
    let complaint = document.querySelector("textarea").value;
    if (complaint.length < 10) {
        alert("Complaint must be at least 10 characters long.");
        return false;
    }
    return true;
}
