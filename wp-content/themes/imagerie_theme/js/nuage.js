
const nuageInit = () => {

    console.log('nuage')

    const keywords = document.querySelectorAll('.keyword_trigger')

    if(keywords) {
        keywords.forEach( item => {
            item.addEventListener('click', function() {
                const id = item.getAttribute('data-id');
                                console.log( id );

                const popin = document.querySelector(`.keyword[data-id="${id}"`)

                console.log( item );
                console.log( popin );
                
                if(popin) {
                    popin.classList.toggle('hidden')
                }
            })
        })
    }


    const close_my_parent = document.querySelectorAll('.close_my_parent');

    if(close_my_parent) {
        close_my_parent.forEach( el => {
            el.addEventListener('click', () => {
                el.closest(".parent").classList.add('hidden')
            })
        })
        
    }


}

document.addEventListener('DOMContentLoaded', () => nuageInit() )