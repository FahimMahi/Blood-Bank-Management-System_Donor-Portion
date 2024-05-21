document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('profileForm');

    form.addEventListener('submit', function (event) {
        const email = document.getElementById('email').value;
        const phone = document.getElementById('phone').value;

        if (!validateEmail(email)) {
            alert('Please enter a valid email address.');
            event.preventDefault();
        }

        if (phone && !validatePhone(phone)) {
            alert('Please enter a valid phone number.');
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return re.test(String(email).toLowerCase());
    }

    function validatePhone(phone) {
        const re = /^[0-9]{10,15}$/;
        return re.test(String(phone));
    }
});
