function goToPage() {
    window.location.href = "cart.php";
}


// Function to update the cart indicator
        // // Function to update the cart indicator
        // function updateCartIndicator() {
        //     var cartIndicator = document.querySelector('.cart-indicator');
        //     var cartItemCount = getCartItemCount();

        //     console.log('Cart Item Count:', cartItemCount); // Debugging line

        //     if (cartItemCount > 0) {
        //         cartIndicator.classList.add('active');
        //     } else {
        //         cartIndicator.classList.remove('active');
        //     }
        // }

        // // Function to get the cart item count from local storage
        // function getCartItemCount() {
        //     var cart = JSON.parse(localStorage.getItem('cart')) || [];
        //     return cart.length;
        // }

        // // Call updateCartIndicator on page load
        // document.addEventListener('DOMContentLoaded', () => {
        //     console.log('Document loaded'); // Debugging line
        //     updateCartIndicator();
        // });




// JavaScript to handle item-card click and REDIRECT TO PAGE - to cart.php with item details
// document.addEventListener('DOMContentLoaded', () => {
//     const itemCards = document.querySelectorAll('.item-card');

//     itemCards.forEach(card => {
//         card.addEventListener('click', () => {
//             const imgSrc = card.querySelector('img').src;
//             const itemName = card.querySelector('.item-name').textContent;
//             const itemPrice = card.querySelector('.item-price').textContent;

//             window.location.href = `cart.php?imgSrc=${encodeURIComponent(imgSrc)}&itemName=${encodeURIComponent(itemName)}&itemPrice=${encodeURIComponent(itemPrice)}`;
//         });
//     });
// });


document.addEventListener('DOMContentLoaded', () => {
    const itemCards = document.querySelectorAll('.item-card');
    const modal = document.getElementById('item-modal');
    const modalImg = document.getElementById('modal-img');
    const modalName = document.getElementById('modal-name');
    const modalPrice = document.getElementById('modal-price');
    const modalMessage = document.getElementById('modal-message');
    const toppingChoices = document.getElementById('topping-choices');
    const quantityInput = document.getElementById('quantity');
    const addToCartBtn = document.getElementById('add-to-cart-btn');
    const span = document.getElementsByClassName('close')[0];

    itemCards.forEach(card => {
        card.addEventListener('click', () => {
            const imgSrc = card.querySelector('img').src;
            const itemName = card.querySelector('.item-name').textContent;
            const itemPrice = card.querySelector('.item-price').textContent;
            const itemType = card.getAttribute('data-type');
            const itemMessage = card.getAttribute('data-message');

            modalImg.src = imgSrc;
            modalName.textContent = itemName;
            modalPrice.textContent = itemPrice;
            modalMessage.textContent = itemMessage;

            toppingChoices.innerHTML = '';

            if (itemType === 'waffles' || itemType === 'pizza') {
                const toppings = ['Option 1', 'Option 2', 'Option 3']; // Replace with actual toppings
                toppings.forEach(topping => {
                    const toppingDiv = document.createElement('div');
                    toppingDiv.innerHTML = `
                        <label>
                            <input type="checkbox" name="topping" value="${topping}">
                            ${topping}
                        </label>
                    `;
                    toppingChoices.appendChild(toppingDiv);
                });
            }

            addToCartBtn.textContent = `Add to Cart - ${itemPrice}`;

            modal.style.display = 'block';
        });
    });

    span.onclick = () => {
        modal.style.display = 'none';
    }

    window.onclick = (event) => {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    addToCartBtn.addEventListener('click', () => {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const item = {
            imgSrc: modalImg.src,
            itemName: modalName.textContent,
            itemPrice: modalPrice.textContent,
            quantity: quantityInput.value
        };
        cart.push(item);
        localStorage.setItem('cart', JSON.stringify(cart));
        modal.style.display = 'none';
        updateCartIndicator();
    });

    function updateCartIndicator() {
        const cartIndicator = document.querySelector('.cart-indicator');
        const cartItemCount = getCartItemCount();
        cartIndicator.textContent = cartItemCount;
        if (cartItemCount > 0) {
            cartIndicator.classList.add('active');
        } else {
            cartIndicator.classList.remove('active');
        }
    }

    function getCartItemCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        return cart.length;
    }

    updateCartIndicator();
});
