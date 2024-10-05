<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Store - Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

 
  <nav class="navbar">
    <div class="container">
        <div class="logo">
            <i class="fas fa-apple-alt"></i> Banana Store
        </div>
        <div class="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="nav-clock">
            <i class="fas fa-clock"></i>
            <span id="time">00:00:00 AM</span>
        </div>
        <ul class="nav-links">
            <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="#about"><i class="fas fa-info-circle"></i> About</a></li>
            <li><a href="#products"><i class="fas fa-box"></i> Products</a></li>
            <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
            <form action="logout.php" method="POST">
                <button type="submit" class="btn-logout"><i class="fas fa-sign-out-alt"></i> Logout</button>
            </form>

        </ul>
    </div>
</nav>


    <header class="hero" id="home">
        <div class="hero-content">
            <h1>Welcome to Banana Store</h1>
            <p>Fresh bananas and delicious banana products delivered right to your doorstep.</p>
           <a href="#products" class="btn-primary">
                <i class="fas fa-shopping-cart"></i> Shop Now
            </a>

        </div>
    </header>


<section class="about" id="about">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>About Us</h2>
                <p>At Banana Store, we offer the best quality bananas sourced from organic farms across the globe. We care about freshness and sustainability, bringing you top-quality products right to your door.</p>
                <div class="about-features">
                    <div class="feature-item">
                        <i class="fas fa-shipping-fast"></i>
                        <h4>Fast Delivery</h4>
                        <p>Get your orders delivered quickly to your doorstep.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-clock"></i>
                        <h4>24-hour Service</h4>
                        <p>We are available 24/7 to assist you with your needs.</p>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-check-circle"></i>
                        <h4>Guarantee</h4>
                        <p>Our products come with a quality guarantee for your satisfaction.</p>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <img src="pexels.jpg" alt="About Banana Store">
            </div>
        </div>
    </div>
</section>



<section class="reviews" id="reviews">
    <div class="container">
        <h2>Customer Reviews</h2>
        <div class="review-slider">
            <div class="review-slide">
                <div class="customer-profile">
                    <img src="sam.jpeg" alt="Customer 1">
                    <h4>Samuel Hutagalung</h4>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
                <div class="customer-review">
                    <p>"Banana Store has the best bananas I've ever tasted. The delivery is always fast, and the quality is exceptional."</p>
                </div>
            </div>
            <div class="review-slide">
                <div class="customer-profile">
                    <img src="sam.jpeg" alt="Customer 2">
                    <h4>Samuel Hutagalung</h4>
                    <p>⭐⭐⭐⭐</p>
                </div>
                <div class="customer-review">
                    <p>"Great variety of products. The banana chips are my favorite. Would recommend them to anyone!"</p>
                </div>
            </div>
            <div class="review-slide">
                <div class="customer-profile">
                    <img src="sam.jpeg" alt="Customer 3">
                    <h4>Samuel Hutagalung</h4>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
                <div class="customer-review">
                    <p>"The freshness of their bananas is unmatched. I'm a loyal customer and will keep ordering!"</p>
                </div>
            </div>
            <div class="review-slide">
                <div class="customer-profile">
                    <img src="sam.jpeg" alt="Customer 4">
                    <h4>Samuel Hutagalung</h4>
                    <p>⭐⭐⭐⭐</p>
                </div>
                <div class="customer-review">
                    <p>"I love the banana pancakes. They are delicious and always fresh. My kids can't get enough!"</p>
                </div>
            </div>
            <div class="review-slide">
                <div class="customer-profile">
                    <img src="sam.jpeg" alt="Customer 5">
                    <h4>Samuel Hutagalung</h4>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
                <div class="customer-review">
                    <p>"Banana smoothies from Banana Store are perfect! I've tried other stores, but they can't compare."</p>
                </div>
            </div>
            <div class="review-slide">
                <div class="customer-profile">
                    <img src="sam.jpeg" alt="Customer 6">
                    <h4>Samuel Hutagalung</h4>
                    <p>⭐⭐⭐⭐⭐</p>
                </div>
                <div class="customer-review">
                    <p>"Excellent service and amazing products. The dried bananas are my go-to snack now!"</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-promo" id="promo">
    <div class="container-section">
        <h2>Upcoming Products</h2>
        <div class="promo-grid">
            <div class="promo-card">
                <img src="sam.jpeg" alt="Banana Ice Cream">
                <div class="promo-info">
                    <h3>Banana Ice Cream</h3>
                    <p>Experience the creamy goodness of our new Banana Ice Cream, made with fresh organic bananas and premium ingredients.</p>
                    <div class="countdown" id="countdown1">
                        <div class="time-box">
                            <span class="number" id="days1">0</span>
                            <span class="label">Days</span>
                        </div>
                        <div class="time-box">
                            <span class="number" id="hours1">0</span>
                            <span class="label">Hours</span>
                        </div>
                        <div class="time-box">
                            <span class="number" id="minutes1">0</span>
                            <span class="label">Minutes</span>
                        </div>
                        <div class="time-box">
                            <span class="number" id="seconds1">0</span>
                            <span class="label">Seconds</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary">
                        <i class="fas fa-bell"></i> Notify Me
                    </a>
                </div>
            </div>
            
  
            <div class="promo-card">
                <img src="sam.jpeg" alt="Banana Protein Bars">
                <div class="promo-info">
                    <h3>Banana Protein Bars</h3>
                    <p>Fuel your day with our new Banana Protein Bars, packed with essential nutrients and the natural sweetness of bananas.</p>
                    <div class="countdown" id="countdown2">
                        <div class="time-box">
                            <span class="number" id="days2">0</span>
                            <span class="label">Days</span>
                        </div>
                        <div class="time-box">
                            <span class="number" id="hours2">0</span>
                            <span class="label">Hours</span>
                        </div>
                        <div class="time-box">
                            <span class="number" id="minutes2">0</span>
                            <span class="label">Minutes</span>
                        </div>
                        <div class="time-box">
                            <span class="number" id="seconds2">0</span>
                            <span class="label">Seconds</span>
                        </div>
                    </div>
                    <a href="#" class="btn-primary">
                        <i class="fas fa-bell"></i> Notify Me
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profile-owner" id="profile-owner">
        <h2>Meet Our Owners</h2>
        <div class="owner-profiles">
            <div class="owner-card">
                <div class="owner-image">
                    <img src="sam.jpeg" alt="Jane Doe">
                </div>
                <h3>Jane Doe</h3>
                <p class="owner-quote">"I started Banana Store to share my love for bananas with everyone! Our mission is to provide quality products with a personal touch."</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/janedoe" target="_blank" aria-label="Jane Doe on Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/janedoe" target="_blank" aria-label="Jane Doe on Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/janedoe" target="_blank" aria-label="Jane Doe on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="owner-card">
                <div class="owner-image">
                    <img src="sam.jpeg" alt="John Smith">
                </div>
                <h3>John Smith</h3>
                <p class="owner-quote">"Passionate about sustainable farming, I ensure that our bananas are sourced from organic farms. Freshness is our priority!"</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/johnsmith" target="_blank" aria-label="John Smith on Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/johnsmith" target="_blank" aria-label="John Smith on Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/johnsmith" target="_blank" aria-label="John Smith on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="owner-card">
                <div class="owner-image">
                    <img src="sam.jpeg" alt="Emily Johnson">
                </div>
                <h3>Emily Johnson</h3>
                <p class="owner-quote">"At Banana Store, we believe in healthy eating. I love creating recipes that showcase the versatility of bananas!"</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/emilyjohnson" target="_blank" aria-label="Emily Johnson on Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/emilyjohnson" target="_blank" aria-label="Emily Johnson on Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/emilyjohnson" target="_blank" aria-label="Emily Johnson on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
 <div class="call-us">
    <a href="tel:+6287760347478" class="btn-call">
        <div class="btn-content">
            <i class="fas fa-phone-alt"></i>
            <span>Call Us</span>
        </div>
        <small>+62 877 6034 7478</small>
    </a>
</div>
</section>



<section class="products" id="products">
        <h2>Our Products</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="pexels.jpg" alt="Organic Bananas">
                <div class="product-info">
                    <h3>Fresh Organic Bananas</h3>
                    <p>Our organically grown bananas are perfect for a healthy snack or as part of your daily diet, rich in vitamins and antioxidants.</p>
                    <a href="#" class="btn-shop"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
            <div class="product-card">
                <img src="pexels.jpg" alt="Banana Chips">
                <div class="product-info">
                    <h3>Banana Chips</h3>
                    <p>Crispy and delicious, our banana chips are lightly salted for the perfect balance of flavor and crunch.</p>
                    <a href="#" class="btn-shop"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
            <div class="product-card">
                <img src="pexels.jpg" alt="Banana Smoothies">
                <div class="product-info">
                    <h3>Banana Smoothies</h3>
                    <p>Enjoy the natural sweetness of our freshly blended banana smoothies, packed with nutrients and flavor.</p>
                    <a href="#" class="btn-shop"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
            <div class="product-card">
                <img src="pexels.jpg" alt="Banana Bread">
                <div class="product-info">
                    <h3>Banana Bread</h3>
                    <p>Our moist and fluffy banana bread is a crowd favorite, made with ripe bananas and baked to perfection.</p>
                    <a href="#" class="btn-shop"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
            <div class="product-card">
                <img src="pexels.jpg" alt="Dried Bananas">
                <div class="product-info">
                    <h3>Dried Bananas</h3>
                    <p>Our dried bananas make a fantastic snack that is both nutritious and delicious, perfect for any occasion.</p>
                    <a href="#" class="btn-shop"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
            <div class="product-card">
                <img src="pexels.jpg" alt="Banana Pancakes">
                <div class="product-info">
                    <h3>Banana Pancakes</h3>
                    <p>Our fluffy banana pancakes are made with real bananas, perfect for breakfast or a sweet snack.</p>
                    <a href="#" class="btn-shop"><i class="fas fa-shopping-cart"></i> Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-location" id="location">
    <div class="container-section">
        <h2>Our Location</h2>
        <p>Find us at Universitas Sumatera Utara (USU), Medan</p>
        
        <div class="location-content">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127640.10300762392!2d98.59239021400264!3d3.552915818698172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131bcfa0a45fb%3A0xf54da63ab241a09d!2sUniversitas%20Sumatera%20Utara!5e0!3m2!1sen!2sid!4v1696450834093!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="location-details">
                <h3>Visit Us</h3>
                <p>We are located in Medan, North Sumatra, Indonesia. Our office is at the Universitas Sumatera Utara (USU) campus.</p>
                
                <div class="location-info">
                    <div class="info-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jalan Dr. T. Mansur No. 9, Medan, North Sumatra</span>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-phone-alt"></i>
                        <span>+62 61 8211 234</span>
                    </div>
                    <div class="info-box">
                        <i class="fas fa-envelope"></i>
                        <span>info@usu.ac.id</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="our-blogs" id="our-blogs">
    <div class="container-section">
        <h2>Our Blogs</h2>
        <div class="blog-grid">
            <div class="blog-card">
                <img src="sam.jpeg" alt="Sustainable Farming Practices">
                <div class="blog-content">
                    <h3>Sustainable Farming Practices</h3>
                    <p>Discover how Banana Store is committed to sustainable farming practices to ensure the highest quality bananas while protecting the environment.</p>
                    <a href="#" class="btn-read-more">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="blog-card">
                <img src="sam.jpeg" alt="Health Benefits of Bananas">
                <div class="blog-content">
                    <h3>Health Benefits of Bananas</h3>
                    <p>Learn about the numerous health benefits of incorporating bananas into your daily diet, from boosting energy to improving digestion.</p>
                    <a href="#" class="btn-read-more">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="blog-card">
                <img src="sam.jpeg" alt="Innovative Banana Products">
                <div class="blog-content">
                    <h3>Innovative Banana Products</h3>
                    <p>Explore our range of innovative banana products that cater to various tastes and preferences, ensuring there's something for everyone.</p>
                    <a href="#" class="btn-read-more">
                        Read More <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-faq" id="faq">
    <div class="container-section">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What types of banana products do you offer?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>We offer a wide variety of banana products including fresh organic bananas, banana chips, banana smoothies, banana bread, dried bananas, and banana pancakes. Each product is crafted with care to ensure the highest quality and taste.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How can I place an order?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Placing an order is simple! Just browse our products in the "Products" section, click on "Shop Now" for the product you desire, add it to your cart, and proceed to checkout. You can also contact us directly via phone or email for assistance.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>Do you offer international shipping?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>Currently, we offer shipping within Indonesia. However, we are working on expanding our services to international locations in the near future. Stay tuned for updates!</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>What is your return policy?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>We offer a 30-day return policy for any defective or unsatisfactory products. Please contact our customer support within 30 days of receiving your order to initiate a return or exchange.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">
                    <h3>How can I contact customer support?</h3>
                    <i class="fas fa-plus"></i>
                </div>
                <div class="faq-answer">
                    <p>You can reach our customer support team via email at <a href="mailto:info@bananastore.com">info@bananastore.com</a> or call us at <a href="tel:+6287760347478">+62 877 6034 7478</a>. We are available 24/7 to assist you with any inquiries.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section" id="contact">
    <div class="container-section">
        <h2>Contact Us</h2>
        <div class="contact-content">
            <div class="contact-image">
                <img src="sam.jpeg" alt="Contact Us" class="responsive-image">
            </div>
            <div class="contact-form">
                <h3>Subscribe to Our Newsletter</h3>
                <p>Stay updated with the latest banana products, offers, and news by subscribing to our newsletter.</p>
                <form action="subscribe.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-submit"><i class="fas fa-envelope"></i> Subscribe Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


  <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <h3>About Banana Store</h3>
                <p>At Banana Store, we provide the freshest bananas and a variety of delicious banana products. Our commitment to quality and sustainability ensures you receive the best from farm to table.</p>
            </div>
            <div class="footer-section links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#our-blogs">Blogs</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section contact">
                <h3>Contact Us</h3>
                <p><i class="fas fa-envelope"></i> <a href="mailto:info@bananastore.com">info@bananastore.com</a></p>
                <p><i class="fas fa-phone-alt"></i> <a href="tel:+6287760347478">+62 877 6034 7478</a></p>
                <p><i class="fas fa-map-marker-alt"></i> Jakarta, Indonesia</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/bananastore" target="_blank" aria-label="Banana Store on Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/bananastore" target="_blank" aria-label="Banana Store on Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/bananastore" target="_blank" aria-label="Banana Store on LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.twitter.com/bananastore" target="_blank" aria-label="Banana Store on Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-section newsletter">
                <h3>Subscribe to Our Newsletter</h3>
                <form action="subscribe.php" method="POST" class="newsletter-form">
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i> Subscribe</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Banana Store. All rights reserved.</p>
        </div>
</footer>
<button onclick="scrollToTop()" id="scrollTopBtn" title="Go to top">&#8679;</button>
    <script src="script.js"></script>
</body>
</html>
