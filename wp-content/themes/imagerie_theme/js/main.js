
const mainInit = () => {

    console.log('main')    

    /*
     * MODULE CHRONOLOGIE
     */

    const dates = document.querySelectorAll(".textdate");
    const sections = document.querySelectorAll(".module_chronologie");

    if (!dates || !sections) return;

    dates.forEach(date => {
        date.addEventListener("click", function (e) {
            const id = e.target.getAttribute("data-id");

            // Hide all sections
            sections.forEach(section => {
                section.classList.add("hidden")
                section.querySelector('.active')?.classList.remove('active');
            });

            // Display the section with the same id as the clicked date
            document.getElementById(id).classList.remove("hidden");
            document.getElementById(id).querySelector(`[data-id='${id}']`).classList.add("active");

        });
    });

}

document.addEventListener('DOMContentLoaded', () => mainInit() )