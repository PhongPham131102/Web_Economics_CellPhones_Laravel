var imgFeture = document.querySelector('.img-feture')
var listImg = document.querySelectorAll('.lst-img img')
var prevBtn = document.querySelector('prev')
var nextBtn = document.querySelector('next')
var currentIndex = 0;

function updateImageByIndex(index){
    document.querySelectorAll('.lst-img div').forEach(item=>{
        item.classList.remove('active')
    })
    currentIndex =index
    imgFeture.src = listImg[index].getAttribute('src')
    listImg[index].parentElement.classList.add('active')
}

listImg.forEach((imgElement, index)=>{
    imgElement.addEventListener('click', e=>{
        updateImageByIndex(index)
    })
})