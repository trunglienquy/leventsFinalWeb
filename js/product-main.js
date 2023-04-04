var showInformation = document.getElementById('information-product-detail');
var showInfoSize = document.getElementById('information-product-size');
var showInfoRefund = document.getElementById('information-product-refund');
var display = 0;


function showInfo(){
    if (display == 1){
        showInformation.style.display = 'block';
        display = 0;
    }
    else{
        showInformation.style.display = 'none';
        display = 1;
    }
}
function showSize(){
    if (display == 1){
        showInfoSize.style.display = 'block';
        display = 0;
    }
    else{
        showInfoSize.style.display = 'none';
        display = 1;
    }
}
function showRefund(){
    if (display == 1){
        showInfoRefund.style.display = 'block';
        display = 0;
    }
    else{
        showInfoRefund.style.display = 'none';
        display = 1;
    }
}


