<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel = "stylesheet" href = "css/utility.css">
    <link rel = "stylesheet" href = "css/responsive.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">TravelBooking</div>
            <ul>
                <li><a href="#packages">Packages</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <div class="hero">
            <h1>Explore the World with Us</h1>
            <p>Your adventure starts here!</p>
            <a href="#packages" class="btn">View Packages</a>
        </div>
    </header>

    <main>
        <section id="packages">
            <h2>Recommended Packages</h2>
            <div class="package-container">
                <div class="package">
                    <img src="" alt="Cultural Tourism">
                    <h3>Cultural Tourism</h3>
                    <p>Experience the rich culture of various regions.</p>
                    <button class="btn" onclick="bookPackage('Cultural Tourism')">Book Now</button>
                </div>
                <div class="package">
                    <img src="heritage-sights.jpg" alt="Heritage Sights">
                    <h3>Heritage Sights</h3>
                    <p>Visit UNESCO World Heritage Sites.</p>
                    <button class="btn" onclick="bookPackage('Heritage Sights')">Book Now</button>
                </div>
                <div class="package">
                    <img src="img/religious.jpg" alt="Religious Tours">
                    <h3>Religious Tours</h3>
                    <p>Explore sacred places and spiritual journeys.</p>
                    <button class="btn" onclick="bookPackage('Religious Tours')">Book Now</button>
                </div>
                <div class="package">
                    <img src="img/wildlife.jpg" alt="Wildlife Adventures">
                    <h3>Wildlife Adventures</h3>
                    <p>Discover the beauty of nature and wildlife.</p>
                    <button class="btn" onclick="bookPackage('Wildlife Adventures')">Book Now</button>
                </div>
            </div>
        </section>

        
     <!-- footer -->
     <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        Travel<span>Partner</span>
                    </a>
                    <p class = "text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptates maiores nam vitae iusto. Placeat rem sint voluptas natus exercitationem autem quod neque, odit laudantium reiciendis ipsa suscipit veritatis voluptate.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Thailand</a></li>
                        <li><a href = "#">Australia</a></li>
                        <li><a href = "#">Maldives</a></li>
                        <li><a href = "#">Switzerland</a></li>
                        <li><a href = "#">Germany</a></li>
                    </ul>
                </div>

                <div class = "subscribe-form footer-item">
                    <h2>Subscribe for Newsletter!</h2>
                    <form class = "flex">
                        <input type = "email" placeholder="Enter Email" class = "form-control">
                        <input type = "submit" class = "btn" value = "Subscribe">
                    </form>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

    <script src="script.js"></script>
</body>
</html>