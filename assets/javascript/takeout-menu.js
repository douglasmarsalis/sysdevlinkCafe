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




// JavaScript to handle item-card click and redirect to cart.php with item details
document.addEventListener('DOMContentLoaded', () => {
    const itemCards = document.querySelectorAll('.item-card');

    itemCards.forEach(card => {
        card.addEventListener('click', () => {
            const imgSrc = card.querySelector('img').src;
            const itemName = card.querySelector('.item-name').textContent;
            const itemPrice = card.querySelector('.item-price').textContent;

            window.location.href = `cart.php?imgSrc=${encodeURIComponent(imgSrc)}&itemName=${encodeURIComponent(itemName)}&itemPrice=${encodeURIComponent(itemPrice)}`;
        });
    });
});





// Function for Pop-up window
// document.addEventListener('DOMContentLoaded', () => {
//     const itemCards = document.querySelectorAll('.item-card');

//     itemCards.forEach(card => {
//         card.addEventListener('click', () => {
//             // Get the image source, item name, and item price
//             const imgSrc = card.querySelector('img').src;
//             const itemName = card.querySelector('.item-name').textContent;
//             const itemPrice = card.querySelector('.item-price').textContent;

//             // Open a popup window with the item details
//             const popupWidth = 400;
//             const popupHeight = 400;
//             const left = (screen.width - popupWidth) / 2;
//             const top = (screen.height - popupHeight) / 2;
//             const popup = window.open('', '', `width=${popupWidth},height=${popupHeight},top=${top},left=${left}`);

//             // Write content to the popup window
//             popup.document.write(`
//                 <html>
//                 <head>
//                     <title>Item Details</title>
//                     <style>
//                         body {
//                             font-family: Arial, sans-serif;
//                             text-align: center;
//                             padding: 20px;
//                         }
//                         img {
//                             max-width: 100%;
//                             height: auto;
//                         }
//                         .item-name {
//                             font-size: 20px;
//                             margin-top: 10px;
//                         }
//                         .item-price {
//                             font-size: 18px;
//                             color: #7b3e19;
//                             margin-top: 5px;
//                         }
//                         button {
//                             margin-top: 20px;
//                             padding: 10px 20px;
//                             background-color: #7b3e19;
//                             color: white;
//                             border: none;
//                             border-radius: 5px;
//                             cursor: pointer;
//                         }
//                     </style>
//                 </head>
//                 <body>
//                     <img src="${imgSrc}" alt="${itemName}">
//                     <p class="item-name">${itemName}</p>
//                     <p class="item-price">${itemPrice}</p>
//                     <button onclick="window.close()">Close</button>
//                 </body>
//                 </html>
//             `);
//         });
//     });
// });
