document.addEventListener('DOMContentLoaded', () => {
    const renderProducts = (product, containerClass) => {
        const container = document.getElementsByClassName(containerClass)[0];
        if (!container) {
            console.error(`Container with class ${containerClass} not found`);
            return;
        }

        container.innerHTML = product.map((item, index) => {
            const { image, name, price } = item;
            return `
                <div class="prod">
                    <img src="../backend/product images/${image}" id="prod-img">
                    <div class="item-desc">
                        <p>${name}<br>&#8369;${price}</p>
                        <div></div>
                        <button type="button" onclick="addtocart(${index})">
                            <img src="Homepage assets/arrowbtn.png" id="product-arrow">
                        </button>
                    </div>
                </div>
            `;
        }).join('');
    };

    const renderEdits = (product, containerClass) => {
        const container = document.getElementsByClassName(containerClass)[0];
        if (!container) {
            console.error(`Container with class ${containerClass} not found`);
            return;
        }

        container.innerHTML = product.map((item, index) => {
            const { image, name, price } = item;
            return `
                <div class="prod">
                    <div class="editoption"><button class="edit-button" data-index="${index}">edit product</button></div>
                    <img src="../backend/product images/${image}" id="prod-img">
                    <div class="item-desc">
                        <p>${name}<br>&#8369;${price}</p>
                        <div></div>
                        <button type="button" onclick="addtocart(${index})">
                            <img src="Homepage assets/arrowbtn.png" id="product-arrow">
                        </button>
                    </div>
                </div>
            `;
        }).join('');

        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', function() {
                const index = this.getAttribute('data-index');
                console.log('Editing product:', product[index]);
            });
        });
    };

    fetch('../backend/fetch_products.php')
        .then(response => response.json())
        .then(product => {
            renderProducts(product, 'product_container');
            renderEdits(product, 'product_container_admin');
        })
        .catch(error => console.error('Error fetching products:', error));

    var cart = JSON.parse(localStorage.getItem('cart')) || [];

    window.addtocart = function(index) {
        console.log('Adding to cart:', product[index]);
        cart.push({ ...product[index] });
        localStorage.setItem('cart', JSON.stringify(cart)); 
    };
});
