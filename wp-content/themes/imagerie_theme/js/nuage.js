
const nuageInit = () => {

    console.log('nuage')

    const keywords = document.querySelectorAll('.keyword_trigger')

    if(keywords) {
        keywords.forEach( item => {
            item.addEventListener('click', function() {
                const popin = item.nextElementSibling
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