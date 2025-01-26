var btns = document.querySelectorAll('[title="add to cart"]');

btns.forEach((button) => {
    button.addEventListener('click', () => {
      const productCard = button.closest('.product-card');
      const price = productCard.querySelector('.card-price .price').textContent.trim();
      const title = productCard.querySelector('.card-title').textContent.trim();
    //   addToCart(title,price);
    console.log(price,title);
      const item = { title, price };
      const cart = JSON.parse(localStorage.getItem('cart')) || [];
      cart.push(item);
      localStorage.setItem('cart', JSON.stringify(cart));   
    });
  });
