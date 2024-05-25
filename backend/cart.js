document.addEventListener('DOMContentLoaded', () => {
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Function to display the cart
    function displaycart() {
        let j = 0;
        const cartList = document.getElementsByClassName('Cartlist')[0];
        if (cart.length === 0) {
            cartList.innerHTML = "<div class='empty'><h1>Your cart is empty</h1></div>";
        } else {
            cartList.innerHTML = cart.map(items => {
                var { image, name, price } = items;
                return `
                    <div class="cartcontainer">
                        <div id="cartimage"><img src="backend/product images/${image}" alt=""></div>
                        <div class="prodinfo">
                            <h3>${name}</h3>
                            <p>&#8369;${price}</p>
                        </div>
                        <div>
                            <button onclick="delElement(${j++})" id="close">x</button>
                        </div>
                    </div>
                `;
            }).join('');
        }
    }

    
    displaycart();

    
    window.delElement = function(index) {
        cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cart)); 
        displaycart();
    };
});
