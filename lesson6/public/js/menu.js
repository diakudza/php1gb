let menuVertical = document.getElementById('menu__vertical');
function menuVerticalShow(){
	menuVertical.classList.toggle('display-block');
}

let ctlMenu = document.getElementById('ctlMenu');
function ctlMenuClose(){
	ctlMenu.classList.toggle('display-block');
}

// let count = document.getElementById('count');
// let itCount = parseInt(count.innerText);
// let productButtons = document.querySelectorAll('.productAddBtn');
// productButtons.forEach(button => button.addEventListener('click', () => {count.innerText = ++itCount;}));
//
// let clearCartBtn = document.getElementById('clearCartBtn');
// let cardColumn  = document.getElementById('cardColumn');
// clearCartBtn.addEventListener('click', function () {
//   cardColumn.innerText="Корзина пуста";
//   count.innerText = '0';
// });
// let close = document.querySelector('#imgClose');
// let closeSecond = document.querySelector('#imgClose2');
// let div = document.getElementById('cardFirst');
// let divSecond = document.getElementById('cardSecond');
//
// close.addEventListener('click', function () {
//   div.remove();
//   count.innerText = --itCount;
// });
// closeSecond.addEventListener('click', function () {
//   divSecond.remove();
//   count.innerText = --itCount;
// });

function save(id){
    let price = document.getElementById("product"+id).id;
    //alert(price)
    location.href = "index.php?action=addToCart&idForAction="+id;
};

function remove(id,idEl){

    let price = document.getElementById("imgClose"+idEl).parentNode.childNodes[1].innerHTML;
    alert('Удаляю '+price)
    location.href = "index.php?action=removeFromBAsket&idForAction="+id;
};
