//Lê Minh Thiên B2012144




let box = document.querySelector('.searching-result');
let searchInput = document.querySelector('.searchInput input')
searchInput.addEventListener('input',function(e){
let textSearch = e.target.value.trim().toLowerCase();
let listProductDOM = document.querySelectorAll('.product');

listProductDOM.forEach(item=>{

if(item.innerText.toLowerCase().includes(textSearch)){
    item.classList.remove('hide');
    box.classList.remove('hide');
}else{
    item.classList.add('hide');

}
})
})


searchInput.addEventListener('click', function (e) {
    box.classList.remove('hide');
})



// Bắt sự kiện click trên document để ẩn kết quả tìm kiếm khi click ra ngoài
document.addEventListener('click', function(event) {
    if (!event.target.closest('.searching-result') && !event.target.closest('.searchInput')) {
        box.classList.add('hide'); 
    }
});

