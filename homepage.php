<?php 

include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ElderCare - Senior Connect</title>
    <meta name="description" content="Connecting seniors with care and community" />
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  </head>

  <body>
    <!-- Header -->
    <header>
      <div class="container">
        <div class="header-content">
          <div class="logo">
            <h1>Elder<span>Care</span></h1>
          </div>
          <nav id="main-nav">
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#Review">Review</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
          <div class="auth-buttons">
            <a href="Volunteer.html"> <!-- Replace "profile.html" with the desired page URL -->
                <div class="profile-pic">
                  <img src="userhp.jpg" alt="User Profile">
                </div>
              </a>
          <button class="mobile-menu-btn" id="mobile-menu-toggle">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
      <div class="container">
        <div class="hero-content">
          <div class="hero-text">
            <h1>Connecting Seniors With Care and Community</h1>
            <p>Our platform helps elderly individuals stay connected, receive care, and maintain independence.</p>
            <div class="hero-buttons">
              
            </div>
          </div>
          <div class="hero-image">
            <img src="images.jpeg" alt="Senior using technology">
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
      <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="service-cards">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-home"></i>
            </div>
            <h3>Home Care</h3>
            <p>Caregivers providing assistance with daily activities in the comfort of home.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-heartbeat"></i>
            </div>
            <h3>Health Monitoring</h3>
            <p>Regular health check-ups and remote monitoring to ensure well-being.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-users"></i>
            </div>
            <h3>Social Activities</h3>
            <p>Community events and activities designed to promote social connections.</p>
          </div>
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-hands-helping"></i>
            </div>
            <h3>Family Support</h3>
            <p>Resources and support for family members caring for elderly loved ones.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
      <div class="container">
        <div class="about-content">
          <div class="about-image">
            <img src="p.jpg" alt="Caring environment">
          </div>
          <div class="about-text">
            <h2 class="section-title">About ElderCare</h2>
            <p>"ElderCare is dedicated to enhancing the lives of seniors by fostering meaningful connections with compassionate caregivers and bright, enthusiastic students.</p>
            <p>We create opportunities for intergenerational bonding, where seniors receive personalized care, companionship, and intellectual engagement. Our mission is to ensure that every senior feels valued, heard, and connected to a vibrant community, reducing loneliness and enriching their daily lives."</p>
            <div class="stats">
              <div class="stat-item">
                <h3>5000+</h3>
                <p>Seniors Helped</p>
              </div>
              <div class="stat-item">
                <h3>200+</h3>
                <p>Caregivers</p>
              </div>
              <div class="stat-item">
                <h3>50+</h3>
                <p>Communities</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="Review" class="Review">
      <div class="container">
        <h2 class="section-title">What Our Clients Say</h2>
        <div class="testimonial-carousel" id="testimonial-carousel">
          <div class="testimonial-slides">
            <div class="testimonial">
              <div class="testimonial-content">
                <p>"ElderCare has been a blessing for my mother. The caregivers are compassionate and professional, and the social activities have really improved her mood and outlook."</p>
                <div class="testimonial-author">
                  <h4>Sarah Johnson</h4>
                  <p>Daughter of Client</p>
                </div>
              </div>
            </div>
            <div class="testimonial">
              <div class="testimonial-content">
                <p>"I've been using ElderCare services for over a year now. The health monitoring program gives me peace of mind and the community events have helped me make new friends."</p>
                <div class="testimonial-author">
                  <h4>Robert Thompson</h4>
                  <p>Client, 78</p>
                </div>
              </div>
            </div>
            <div class="testimonial">
              <div class="testimonial-content">
                <p>"The team at ElderCare truly understands the needs of seniors. Their holistic approach to care has made all the difference for my father's wellbeing."</p>
                <div class="testimonial-author">
                  <h4>Michael Davis</h4>
                  <p>Son of Client</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-controls">
            <button id="prev-slide"><i class="fas fa-arrow-left"></i></button>
            <div class="carousel-dots">
              <span class="dot active" data-index="0"></span>
              <span class="dot" data-index="1"></span>
              <span class="dot" data-index="2"></span>
            </div>
            <button id="next-slide"><i class="fas fa-arrow-right"></i></button>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
      <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-content">
          <div class="contact-form">
            <form id="contact-form">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
              </div>
              <button type="submit" class="primary-btn">Send Message</button>
            </form>
          </div>
          <div class="contact-info">
            <div class="info-item">
              <i class="fas fa-map-marker-alt"></i>
              <div>
                <h3>Address</h3>
                <p>123 Colony, Wellness City 123456, India </p>
              </div>
            </div>
            <div class="info-item">
              <i class="fas fa-phone"></i>
              <div>
                <h3>Phone</h3>
                <p>(+91) 123-4567-789</p>
              </div>
            </div>
            <div class="info-item">
              <i class="fas fa-envelope"></i>
              <div>
                <h3>Email</h3>
                <p>info@eldercare.com</p>
              </div>
            </div>
            <div class="info-item">
              <i class="fas fa-clock"></i>
              <div>
                <h3>Hours</h3>
                <p>Monday - Friday: 8am - 6pm</p>
                <p>Saturday: 9am - 2pm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Chat Bot -->
    <div class="chat-bot" id="chat-bot">
      <div class="chat-bot-toggle" id="chat-bot-toggle">
        <i class="fas fa-comments"></i>
      </div>
      <div class="chat-bot-container" id="chat-bot-container">
        <div class="chat-bot-header">
          <h3>ElderCare Support</h3>
          <button id="close-chat"><i class="fas fa-times"></i></button>
        </div>
        <div class="chat-bot-messages" id="chat-messages">
          <div class="message bot">
            <p>Hello! How can I help you today?</p>
          </div>
        </div>
        <div class="chat-bot-input">
          <input type="text" id="chat-input" placeholder="Type your message...">
          <button id="send-message"><i class="fas fa-paper-plane"></i></button>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="footer-content">
          <div class="footer-logo">
            <h2>Elder<span>Care</span></h2>
            <p>Connecting seniors with care and community</p>
          </div>
          <div class="footer-links">
            <div class="footer-section">
              <h3>Quick Links</h3>
              <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h3>Services</h3>
              <ul>
                <li><a href="#services">Home Care</a></li>
                <li><a href="#services">Health Monitoring</a></li>
                <li><a href="#services">Social Activities</a></li>
                <li><a href="#services">Family Support</a></li>
              </ul>
            </div>
            <div class="footer-section">
              <h3>Connect</h3>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
              </div>
              <div class="contact-info-footer">
                <p><i class="fas fa-phone"></i> (555) 123-4567</p>
                <p><i class="fas fa-envelope"></i> info@eldercare.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; 2023 ElderCare. All rights reserved.</p>
          <div class="footer-bottom-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>

    <script src="script.js"></script>
  </body>
</html>