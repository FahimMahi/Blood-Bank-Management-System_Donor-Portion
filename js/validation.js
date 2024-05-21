document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function (event) {
        var firstName = document.getElementById('first_name').value.trim();
        var lastName = document.getElementById('last_name').value.trim();
        var dateOfBirth = document.getElementById('date_of_birth').value;
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const phone = document.getElementById('phone').value;
        const blood_group = document.getElementById('blood_group').value;

        if (firstName === '') {
            alert('First Name is required.');
            event.preventDefault();
        }

        if (lastName === '') {
            alert('Last Name is required.');
            event.preventDefault();
        }

        if (!validateEmail(email)) {
            alert('Please enter a valid email address.');
            event.preventDefault();
        }
        if (!validateEmail(blood_group)) {
            alert('Please enter a valid Blood Group');
            event.preventDefault();
        }

        if (password.length < 6) {
            alert('Password must be at least 6 characters long.');
            event.preventDefault();
        }

        if (phone && !validatePhone(phone)) {
            alert('Please enter a valid phone number.');
            event.preventDefault();
        }
        if (dateOfBirth === '') {
            alert('Date of Birth is required.');
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
