document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('eligibilityForm');

    form.addEventListener('submit', function (event) {
        const questionnaire = document.getElementById('questionnaire').value;

        if (questionnaire.length < 10) {
            alert('Questionnaire must be at least 10 characters long.');
            event.preventDefault();
        }
    });
});
