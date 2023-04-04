const btn = document.querySelectorAll(".container-product .button-submit")
let selection = document.querySelector('size-shirt');
const hideInformationBag = document.querySelector('.notification-bag')
let flag = false;

btn.forEach(function(button,index){
    button.addEventListener("click",function(event){
        flag = true
        var btnItem = event.target
        var product = btnItem.parentElement
        var productImg = document.querySelector(".img-product img").src
        var productPrice = document.querySelector('.price-product').innerText
        var productName = document.querySelector('.name-product').innerText
        var sizeName = document.getElementById('size-shirt')
        var textSizeName = sizeName.options[sizeName.selectedIndex].text
        document.querySelector(".notification-buy").classList.remove("hide-notification-buy")
        document.querySelector(".container-add-to-cart").classList.remove("hide-add-to-card")
        addCart(productImg, productPrice, productName, textSizeName)
    })
})


function addCart(productImg, productPrice, productName, textSizeName){
    hideInformationBag.classList.add("hide")
    var addProduct = document.createElement("tr")
    var content ='<tr><td><img src="'+productImg+'"></td><td><h3>'+productName+'</h3></td><td><p class="atc-price-product">'+productPrice+'</p></td><td><p>SIZE: '+textSizeName+'</p></td><td><input type="number" value="1" min="1" max="999"></td></tr>'
    addProduct.innerHTML = content
    var atc = document.querySelector(".atc-bag")
    atc.append(addProduct);
    totalAtc()
}
function totalAtc(){
    var totalFinal = 0;
    var totalTmp = 0;
    var itemBag = document.querySelectorAll(".container-add-to-cart tr")
    for (var i = 0; i < itemBag.length; i++){
        var inputAmount = itemBag[i].querySelector("input").value
        var priceItem = itemBag[i].querySelector(".atc-price-product").innerText
        var price = priceItem.replace(' vnđ' , '');
        totalTmp = inputAmount * parseInt(price) * 1000;
        totalFinal = totalFinal + totalTmp
    }
    var atcPriceFinal = document.querySelector(".total-atc .needPay")
    atcPriceFinal.innerHTML = totalFinal.toLocaleString('de-DE')
}

const showItemBag = document.querySelector(".navbar-icon_bag")
const hideItemBag = document.querySelector(".close-atc")
showItemBag.addEventListener("click", function(){
    document.querySelector(".container-add-to-cart").classList.remove("hide-add-to-card")
})
hideItemBag.addEventListener("click", function(){
    document.querySelector(".container-add-to-cart").classList.add("hide-add-to-card")
})

// pay-product
const payProduct = document.querySelector(".pay-btn")
payProduct.addEventListener("click", function(){
    if (flag == false){
        document.querySelector(".notification-pay").classList.remove("hide-notification-pay")
    }
    else{
        document.querySelector(".notification-pay").classList.add("hide-notification-pay")
        location.href = "../pay-product/pay.html"
    }
})











