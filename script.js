// script.js

document.addEventListener('DOMContentLoaded', () => {
    const cartButtons = document.querySelectorAll('.add-to-cart');

    cartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productId = button.getAttribute('data-product-id');
            const productCard = button.closest('.card');
            const productTitle = productCard.querySelector('.card-title').textContent;
            const productPrice = productCard.querySelector('.card-text.fw-bold').textContent;
            const productImage = productCard.querySelector('.card-img-top').src;

            const product = {
                id: productId,
                title: productTitle,
                price: productPrice,
                image: productImage
            };

            addToCart(product);
        });
    });
});

function addToCart(product) {
    let cart = localStorage.getItem('cart');
    if (cart) {
        cart = JSON.parse(cart);
    } else {
        cart = [];
    }

    cart.push(product);
    localStorage.setItem('cart', JSON.stringify(cart));
    showAddToCartModal(product.title);
}

function showAddToCartModal(productName) {
    const modal = new bootstrap.Modal(document.getElementById('addToCartModal'));
    document.getElementById('addToCartMessage').textContent = `${productName} has been added to your cart.`;
    modal.show();
}
