// filepath: c:\xampp\htdocs\tiembanhkeo\tiembanhkeo\js\admin-scripts.js

document.addEventListener('DOMContentLoaded', function() {
    // Function to handle form submissions with validation
    const validateForm = (form) => {
        let isValid = true;
        const inputs = form.querySelectorAll('input, textarea, select');

        inputs.forEach(input => {
            if (!input.checkValidity()) {
                isValid = false;
                input.classList.add('is-invalid');
            } else {
                input.classList.remove('is-invalid');
            }
        });

        return isValid;
    };

    // Example of handling product management form submission
    const productForm = document.getElementById('product-form');
    if (productForm) {
        productForm.addEventListener('submit', function(event) {
            if (!validateForm(productForm)) {
                event.preventDefault();
                alert('Please fill out all required fields correctly.');
            }
        });
    }

    // Function to dynamically update order status
    const orderStatusSelects = document.querySelectorAll('.order-status');
    orderStatusSelects.forEach(select => {
        select.addEventListener('change', function() {
            const orderId = this.dataset.orderId;
            const newStatus = this.value;

            // Simulate an AJAX request to update the order status
            console.log(`Updating order ${orderId} to status: ${newStatus}`);
            // Here you would typically make an AJAX call to update the status on the server
        });
    });

    // Function to confirm deletion of user accounts
    const deleteButtons = document.querySelectorAll('.delete-user');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            const confirmed = confirm('Are you sure you want to delete this user?');
            if (!confirmed) {
                event.preventDefault();
            }
        });
    });
});