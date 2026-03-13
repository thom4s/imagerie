
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


}

document.addEventListener('DOMContentLoaded', () => nuageInit() )