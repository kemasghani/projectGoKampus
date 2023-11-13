document.addEventListener('DOMContentLoaded', function () {
    var cardCourses = document.querySelectorAll('.cardCourse');

    cardCourses.forEach(function (cardCourse) {
        var dropdown = cardCourse.querySelector('.dropdown');
        var students = cardCourse.querySelector('.student');
        dropdown.addEventListener('click', function () {
            cardCourse.classList.toggle('expand');
            dropdown.classList.toggle('rotate');
            students.classList.toggle('show');
        });
    });
});
