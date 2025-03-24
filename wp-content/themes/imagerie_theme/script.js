document.addEventListener('DOMContentLoaded', function () {

    const dates = document.querySelectorAll(".textdate");
    const sections = document.querySelectorAll(".module2");

    if (!dates || !sections) return;

    dates.forEach(date => {
        date.addEventListener("click", function (e) {
            const id = e.target.getAttribute("data-id");

            // Hide all sections
            sections.forEach(section => section.classList.add("hidden"));

            // Display the section with the same id as the clicked date
            document.getElementById(id).classList.remove("hidden");
        });
    });

});