/**
 * Browse more 
 */

const browseBtn = document.querySelector('#browse-btn')

const cardContainer = document.querySelector('.js-container')
let isMore = false;

browseBtn.addEventListener('click', ()=>{
    if(!isMore){
        cardContainer.classList.remove('h-material')
        cardContainer.classList.remove('overflow-hidden')
        browseBtn.innerHTML = 'Less view'
        isMore = !isMore
    } else {
        cardContainer.classList.add('h-material')
        cardContainer.classList.add('overflow-hidden')
        browseBtn.innerHTML = 'Browse More'
        isMore = !isMore
    }
})

