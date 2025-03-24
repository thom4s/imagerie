
const init = () => {

    console.log('gello')


    const swiper = new Swiper('.swiper', {
        // Optional parameters
        loop: false,
    
        // If we need pagination
        pagination: {
        el: '.swiper-pagination',
        },
    
        // Navigation arrows
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    
        // And if we need scrollbar
        scrollbar: {
        el: '.swiper-scrollbar',
        },
    });




    const show_swiper_trigger = document.querySelector('#show_swiper')
    const swiper_el = document.querySelector('#swiper_container')
    const show_about_triggers = document.querySelectorAll('.about_trigger')
    const close_buttons = document.querySelectorAll('.close')
    const objects_triggers = document.querySelectorAll('.objet')
    const modals = document.querySelectorAll('.theme_modal')
    const abouts = document.querySelectorAll('.theme_about')



    const closeAllModals = () => {
        modals.forEach( el => el.classList.add('hidden') )
        abouts.forEach( el => el.classList.add('hidden') )
    }
    
    if( show_swiper_trigger ) {
        show_swiper_trigger.addEventListener('click', () => {
            swiper_el.classList.remove('hidden');
        })
    }

    if( show_about_triggers ) {
        show_about_triggers.forEach( el => {
            el.addEventListener('click', () => { 
                closeAllModals()
                el.nextElementSibling.classList.remove('hidden');
            })
        })
    }
    close_buttons.forEach( el => {
        el.addEventListener('click', () => {  
            //el.parentElement.classList.add('hidden');
            closeAllModals()
        })
    })

    objects_triggers.forEach( el => {
        el.addEventListener('click', () => {  
            closeAllModals()
            el.nextElementSibling.classList.remove('hidden');
        })
    })

    swiper.on('slideChange', () => closeAllModals() );



    // MODULE CHRONOLOGIE
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


}

document.addEventListener('DOMContentLoaded', () => init() )