var xhr = new XMLHttpRequest();
xhr.open('GET', 'http://localhost:3000/goods/', true);
xhr.send();

xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            console.log('1');
            window.onload = function () {
                response.forEach(function (item) {
                    document.getElementById('featured-items__list').appendChild(createGood(item));
                })
            }
        }
    }
};

function createGood(item) {
    var itemBlock = document.createElement('div');
    itemBlock.className = 'item';

    var itemLink = document.createElement('a');
    itemLink.className = 'item__link';
    itemLink.href = 'single_page.html';

    var itemImg = document.createElement('img');
    itemImg.className = 'item__img';
    itemImg.src = "img/" + item.img;
    itemLink.alt = 'item1';

    var descriptionBlock = document.createElement('div');
    descriptionBlock.className = 'item__description';

    var itemName = document.createElement('p');
    itemName.className = "item__name";
    itemName.textContent = item.name;

    var itemPrice = document.createElement('span');
    itemPrice.className = "item__cost";
    itemPrice.textContent = '$' + item.price;

    var addToCartBlock = document.createElement('div');
    addToCartBlock.className = "item__add-to-cart-block";

    var addToCartButton = document.createElement('button');
    addToCartButton.className = "item__add-to-cart";
    addToCartButton.innerHTML = 'Add to&nbsp;Cart';

    var addToCart = document.createElement('i');
    addToCart.className = "fa fa-shopping-cart item__arrow";
    addToCart.setAttribute('aria-hidden', 'true');

    addToCartButton.appendChild(addToCart);
    addToCartBlock.appendChild(addToCartButton);

    descriptionBlock.appendChild(itemName);
    descriptionBlock.appendChild(itemPrice);

    itemLink.appendChild(itemImg);
    itemLink.appendChild(descriptionBlock);

    itemBlock.appendChild(itemLink);
    itemBlock.appendChild(addToCartBlock);

    return itemBlock;
}
/*
                <div class="item">
                    <a class="item__link" href="single_page.html">
                        <img class="item__img" src="img/item1.png" alt="item1">
                        <div class="item__description">
                            <p class="item__name">Mango People T-shirt</p>
                            <span class="item__cost">$52.00</span>
                        </div>
                    </a>
                    <div class="item__add-to-cart-block">
                        <button class="item__add-to-cart"><i class="fa fa-shopping-cart item__arrow" aria-hidden="true"></i>Add to&nbsp;Cart</button>
                    </div>
                </div>
 */


/*
 <div class="container product-box">
                <div class="product">
                    <a href="single_page.html"><img class="prod_img" src="img/Item1.png"/>
                        <div class="product_text"><span>Mango People T-shirt</span> <p>$52.00</p></div>
                    </a>
                    <div class="box-center">
                        <a class="add-to-cart" href="#"><img src="img/cart.png">Add to&nbsp;Cart</a>
                    </div>
                </div>
 */

