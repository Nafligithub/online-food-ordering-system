let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeshopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listcard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');
let Totalamount=document.querySelector('.Totalpayment');



openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Burger',
        image: 'burger.jfif',
        price: 1000
    },
    {
        id: 2,
        name: 'FUll Pizza',
        image: '2.jpg',
        price: 2400
    },
    {
        id: 3,
        name: 'Half Pizza',
        image: '3.jpg',
        price: 1200
    },
    {
        id: 4,
        name: 'Rotti',
        image: '4.jpg',
        price: 800
    },
    {
        id: 5,
        name: 'Noodles',
        image: '5.jfif',
        price: 800
    },
    {
        id: 6,
        name: 'Pepsi',
        image: '6.jfif',
        price: 300
    }
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="image/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">${value.price.toLocaleString()}</div>
            <button onclick="addToCard(${key})">Add To Card</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;

    Totalamount.innerText ="Rs : "+ totalPrice.toLocaleString();
}

function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;

    }
    reloadCard();
}


let paybtn= document.querySelector('.pay');
let payform = document.querySelector('.paynow');
let closebtn=document.querySelector('.close');

paybtn.addEventListener('click',()=>{
    payform.classList.add("payment-active");

});
closebtn.addEventListener('click',()=>{
    payform.classList.remove('payment-active');
});