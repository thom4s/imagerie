
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
    const close_buttons = document.querySelectorAll('.js-close')
    const objects_triggers = document.querySelectorAll('.objet')
    const modals = document.querySelectorAll('.theme_modal')
    const abouts = document.querySelectorAll('.theme_about')
    const theme_titles = document.querySelectorAll('.theme_title')
    


    const handle_theme_title = index => {

        const theme_title = document.querySelector(`#theme_${index} .theme_title`);

        if(theme_title) {
            setTimeout( () => {
                theme_title.classList.add('out')
            }, 5000)
        }
    }

    const closeAllModals = () => {
        modals.forEach( el => el.classList.add('hidden') )
        abouts.forEach( el => el.classList.add('hidden') )
    }
    
    if( show_swiper_trigger ) {
        show_swiper_trigger.addEventListener('click', () => {
            swiper_el.classList.remove('hidden');
            handle_theme_title(0);
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
    if( theme_titles ) {
        theme_titles.forEach( el => {
            el.addEventListener('click', () => { 
                el.classList.toggle('out');
                handle_theme_title(el.getAttribute('data-id'));
            })
        })
    }
    

    objects_triggers.forEach( el => {
        el.addEventListener('click', () => {  
            closeAllModals()
            el.nextElementSibling.classList.remove('hidden');
        })
    })

    swiper.on('slideChange', el =>  {
        console.log(el)
        closeAllModals()
        handle_theme_title(el.activeIndex)
    });


    

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

document.addEventListener('DOMContentLoaded', () => init() )