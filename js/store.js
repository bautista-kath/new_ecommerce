let cart1total = 0;
let cart1quant = 0;
let cart2total = 0;
let cart2quant = 0;
let cart3total = 0;
let cart3quant = 0;
let cart4total = 0;
let cart4quant = 0;
let cart5total = 0;
let cart5quant = 0;
let cart6total = 0;
let cart6quant = 0;


let prodprice = 0;
let prodquantity = 0;
let prodname = '';
let sum = cart1quant + cart2total + cart3total + cart4total + cart5total + cart6total;
let sumquant = cart1quant + cart2quant + cart3quant + cart4quant + cart5quant + cart6quant;


function addToCart1() {
    prodprice = 1599;
    prodquantity++;
    prodname = 'Crusader Sword';

    const item = document.querySelector('#item');
    const item_text = document.createElement('h3');
    const price = document.querySelector('#price');
    const price_text = document.createElement('h3');
    const quantity = document.querySelector('#quantity');
    const quantity_text = document.createElement('p');
    item.append(item_text)
    price.append(price_text)
    quantity.append(quantity_text)
    item_text.innerText = prodname;
    price_text.innerText = prodprice;

    cart1quant = prodquantity;
    cart1total += prodprice;
}

function addToCart2() {
    prodprice = 2799;
    prodquantity++;
    prodname = 'Crusader Armour';

    const item = document.querySelector('#item');
    const item_text = document.createElement('h3');
    const price = document.querySelector('#price');
    const price_text = document.createElement('h3');
    const quantity = document.querySelector('#quantity');
    const quantity_text = document.createElement('p');
    item.append(item_text)
    price.append(price_text)
    quantity.append(quantity_text)
    item_text.innerText = prodname;
    price_text.innerText = prodprice;

    cart2quant = prodquantity;
    cart2total += prodprice;
}

function addToCart3() {
    prodprice = 10999;
    prodname = 'Charlemagne Sword';
    prodquantity++;
    
    const item = document.querySelector('#item');
    const item_text = document.createElement('h3');
    const price = document.querySelector('#price');
    const price_text = document.createElement('h3');
    const quantity = document.querySelector('#quantity');
    const quantity_text = document.createElement('p');
    item.append(item_text)
    price.append(price_text)
    quantity.append(quantity_text)
    item_text.innerText = prodname;
    price_text.innerText = prodprice;
    
    cart3quant = prodquantity;
    cart3total += prodprice;
    }
function addToCart4() {
    prodprice = 1099;
    prodname = 'Crusader Flag';
    prodquantity++;
    
    const item = document.querySelector('#item');
    const item_text = document.createElement('h3');
    const price = document.querySelector('#price');
    const price_text = document.createElement('h3');
    const quantity = document.querySelector('#quantity');
    const quantity_text = document.createElement('p');
    item.append(item_text)
    price.append(price_text)
    quantity.append(quantity_text)
    item_text.innerText = prodname;
    price_text.innerText = prodprice;
    
    cart4quant = prodquantity;
    cart4total += prodprice;
    }
function addToCart5() {
    prodprice = 599;
    prodname = 'Crusader History Book';
    prodquantity++;
    
    const item = document.querySelector('#item');
    const item_text = document.createElement('h3');
    const price = document.querySelector('#price');
    const price_text = document.createElement('h3');
    const quantity = document.querySelector('#quantity');
    const quantity_text = document.createElement('p');
    item.append(item_text)
    price.append(price_text)
    quantity.append(quantity_text)
    item_text.innerText = prodname;
    price_text.innerText = prodprice;
    
    cart5quant = prodquantity;
    cart5total += prodprice;
    }
function addToCart6() {
    prodprice = 8599;
    prodname = 'Crusader Gauntlet';
    prodquantity++;
    
    const item = document.querySelector('#item');
    const item_text = document.createElement('h3');
    const price = document.querySelector('#price');
    const price_text = document.createElement('h3');
    const quantity = document.querySelector('#quantity');
    const quantity_text = document.createElement('p');
    item.append(item_text)
    price.append(price_text)
    quantity.append(quantity_text)
    item_text.innerText = prodname;
    price_text.innerText = prodprice;
    
    cart6quant = prodquantity;
    cart6total += prodprice;
    }

function placeorder() {
    const quantity = document.querySelector('#quantity');
    const quantity_text = document.createElement('p');
    quantity.append(quantity_text)
    quantity_text.innerText = prodquantity;

    const total = document.querySelector('#total');
    const total_text = document.createElement('p');
    total.append(total_text)
    sum = cart1quant + cart2total + cart3total + cart4total + cart5total + cart6total;
    sumquant = cart1quant + cart2quant + cart3quant + cart4quant + cart5quant + cart6quant;
    total_text.innerHTML = sum;
}




function checkout() {
    window.location.href = "checkout.html";
    document.getElementByClassName("enter-add").value
    document.getElementByClassName("enter-name").value
}