/**
 * Ratings and Reviews
 */

const reviewContainer = document.querySelector('.js-review');
const ratingBtn = document.querySelector('#rating-more');
let isPressed = false

// overflow-hidden h-rating
ratingBtn.addEventListener('click', ()=>{
    if(!isPressed){
        reviewContainer.classList.remove('overflow-hidden')
        reviewContainer.classList.remove('h-rating')
        ratingBtn.innerHTML = 'Show Less'
        isPressed = !isPressed
    }else{
        reviewContainer.classList.add('overflow-hidden')
        reviewContainer.classList.add('h-rating')
        ratingBtn.innerHTML = 'Show More'
        isPressed = !isPressed
    }
})

/**
 * Rate this material
 */

const rateThis = document.querySelector('#rate-this')
const rateMe = document.querySelector('#rate-me')
const stars = document.querySelectorAll('.js-stars')
const ratingNum = document.querySelector('#rating-number')

rateThis.addEventListener('click', ()=>{
    rateMe.classList.toggle('hidden')
})

stars.forEach((star)=>{
    star.addEventListener('click',(e)=>{
        for(let i=0; i<stars.length; i++){
                stars[i].id = null;
                stars[i].src = '/images/hollow-start.png'
        }
        e.target.id = 'clicked'
        for(let i=0; i<stars.length; i++){
            if(stars[i].id === 'clicked'){
                stars[i].src = '/images/hollow-star.png'
                ratingNum.value = i+1;
                return;
            } else {
                stars[i].src = '/images/hollow-star.png'
            }
        }
        console.log(ratingNum.value)
    })
})