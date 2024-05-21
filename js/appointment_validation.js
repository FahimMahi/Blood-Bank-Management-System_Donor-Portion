document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('createAppointmentForm') || document.getElementById('editAppointmentForm');

    form.addEventListener('submit', function (event) {
        const location = document.getElementById('location').value;

        if (location.length < 3) {
            alert('Location must be at least 3 characters long.');
            event.preventDefault();
        }
    });
});
