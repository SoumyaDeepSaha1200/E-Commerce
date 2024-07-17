document.addEventListener('DOMContentLoaded', function () {
     const addToCartButtons = document.querySelectorAll('.add-to-cart');
 
     addToCartButtons.forEach(button => {
         button.addEventListener('click', function () {
             const productId = this.getAttribute('data-product-id');
             const productTitle = this.parentElement.querySelector('.card-title').innerText;
             const productPrice = this.parentElement.querySelector('.card-text.fw-bold').innerText;
 
             // Add product to cart (in localStorage or a global cart object)
             let cart = JSON.parse(localStorage.getItem('cart')) || [];
             cart.push({ id: productId, title: productTitle, price: productPrice });
             localStorage.setItem('cart', JSON.stringify(cart));
 
             // Update modal content
             document.getElementById('addToCartMessage').innerText = `${productTitle} has been added to your cart.`;
 
             // Show the modal
             $('#addToCartModal').modal('show');
         });
     });
 });
 