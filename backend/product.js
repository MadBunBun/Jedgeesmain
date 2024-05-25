document.addEventListener('DOMContentLoaded', () => {
    const product = [
        { id: 0, image: '2x4poster.jpg', name: '2 by 4 Poster', price: 80 },
        { id: 1, image: 'bookbind.jpg', name: 'Bookbinded Print', price: 120 },
        { id: 2, image: 'researchmanuscripts.jpg', name: 'Research Manuscripts', price: 100 },
        { id: 3, image: 'Welcomingtarp.jpg', name: 'Welcoming Tarpaulin', price: 90 },
        { id: 4, image: 'rushedposters.jpg', name: 'Rushed Posters', price: 150 },
        { id: 5, image: 'tarpwithstand.jpg', name: 'Standing Tarpaulin', price: 220 },
        { id: 6, image: 'ringbind.jpg', name: 'Ring Binded Print', price: 80 },
        { id: 7, image: 'campaigntarps.jpg', name: 'Campaign Tarpaulin', price: 100 },
        { id: 8, image: 'ecofriendly.jpg', name: 'Environmental Posters', price: 50 },
        { id: 9, image: 'coloreddataprint.jpg', name: 'Data Prints', price: 60 },
        { id: 10, image: 'printadtarp.jpg', name: 'Casual Tarpaulins', price: 100 }
    ];

    const categories = [...new Set(product.map(item => item))];
    let i = 0;

    document.getElementsByClassName('product_container')[0].innerHTML = categories.map(item => {
        var { image, name, price } = item;
        return `
            <div class="prod">
                <img src="backend/product images/${image}" id="prod-img">
                <div class="item-desc">
                    <p>${name}<br>&#8369;${price}</p>
                    <div></div>
                    <button type="button" onclick="addtocart(${i})">
                        <img src="Homepage assets/arrowbtn.png" id="product-arrow">
                    </button>
                </div>
            </div>
        `;
    }).join('');

    
    var cart = JSON.parse(localStorage.getItem('cart')) || [];

   
    window.addtocart = function(a) {
        console.log('Adding to cart:', categories[a]);
        cart.push({ ...categories[a] });
        localStorage.setItem('cart', JSON.stringify(cart)); 
    };
});
