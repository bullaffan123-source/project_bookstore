// Shopping cart functionality
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartCount = document.querySelector('.cart-count');
        let cartItems = 3; // Starting with 3 items already in cart
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                cartItems++;
                cartCount.textContent = cartItems;
                
                // Visual feedback
                const originalText = this.textContent;
                this.textContent = 'Added!';
                this.style.backgroundColor = '#2ecc71';
                
                setTimeout(() => {
                    this.textContent = originalText;
                    this.style.backgroundColor = '#3498db';
                }, 1000);
            });
        });
        
        // Newsletter form submission
        const newsletterForm = document.querySelector('.newsletter-form');
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            
            if(emailInput.value && emailInput.value.includes('@')) {
                alert('Thank you for subscribing to our newsletter!');
                emailInput.value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });
        
        // Search functionality
        const searchButton = document.querySelector('.search-box button');
        const searchInput = document.querySelector('.search-box input');
        
        searchButton.addEventListener('click', function() {
            if(searchInput.value.trim()) {
                alert(`Searching for: "${searchInput.value}"`);
                searchInput.value = '';
            } else {
                alert('Please enter a search term.');
            }
        });
        
        // Allow pressing Enter in search field
        searchInput.addEventListener('keypress', function(e) {
            if(e.key === 'Enter') {
                searchButton.click();
            }
        });