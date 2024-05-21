document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('createDonationForm');

    form.addEventListener('submit', function (event) {
        const location = document.getElementById('location').value;
        const units_donated = document.getElementById('units_donated').value;

        if (location.length < 3) {
            alert('Location must be at least 3 characters long.');
            event.preventDefault();
        }

        if (units_donated <= 0) {
            alert('Units donated must be a positive number.');
            event.preventDefault();
        }
    });
});
