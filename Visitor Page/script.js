// Mobile Navigation
const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
const mainNav = document.getElementById('main-nav');

mobileMenuToggle.addEventListener('click', () => {
  mainNav.classList.toggle('active');
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
  if (!e.target.closest('#main-nav') && !e.target.closest('#mobile-menu-toggle') && mainNav.classList.contains('active')) {
    mainNav.classList.remove('active');
  }
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function(e) {
    e.preventDefault();
    
    // Close mobile menu if open
    if (mainNav.classList.contains('active')) {
      mainNav.classList.remove('active');
    }
    
    const targetId = this.getAttribute('href');
    const targetElement = document.querySelector(targetId);
    
    if (targetElement) {
      const headerOffset = 80;
      const elementPosition = targetElement.getBoundingClientRect().top;
      const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
      
      window.scrollTo({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  });
});

// Testimonial Carousel
const testimonialsContainer = document.getElementById('testimonial-carousel');
const testimonialSlides = document.querySelector('.testimonial-slides');
const testimonials = document.querySelectorAll('.testimonial');
const dots = document.querySelectorAll('.dot');
const prevBtn = document.getElementById('prev-slide');
const nextBtn = document.getElementById('next-slide');

let currentIndex = 0;
const totalSlides = testimonials.length;

// Update testimonial position
function updateSlidePosition() {
  testimonialSlides.style.transform = `translateX(-${currentIndex * 100}%)`;
  
  // Update active dot
  dots.forEach((dot, index) => {
    dot.classList.toggle('active', index === currentIndex);
  });
}

// Next slide
function nextSlide() {
  currentIndex = (currentIndex + 1) % totalSlides;
  updateSlidePosition();
}

// Previous slide
function prevSlide() {
  currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
  updateSlidePosition();
}

// Event listeners
prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);

// Dot navigation
dots.forEach(dot => {
  dot.addEventListener('click', function() {
    currentIndex = parseInt(this.dataset.index);
    updateSlidePosition();
  });
});

// Auto slide (optional)
let slideInterval = setInterval(nextSlide, 5000);

testimonialsContainer.addEventListener('mouseenter', () => {
  clearInterval(slideInterval);
});

testimonialsContainer.addEventListener('mouseleave', () => {
  slideInterval = setInterval(nextSlide, 5000);
});

// Chat Bot
const chatBotToggle = document.getElementById('chat-bot-toggle');
const chatBot = document.getElementById('chat-bot');
const closeChat = document.getElementById('close-chat');
const chatMessages = document.getElementById('chat-messages');
const chatInput = document.getElementById('chat-input');
const sendMessage = document.getElementById('send-message');

// Toggle chat bot
chatBotToggle.addEventListener('click', () => {
  chatBot.classList.toggle('active');
  
  // Focus input when chat is opened
  if (chatBot.classList.contains('active')) {
    chatInput.focus();
  }
});

// Close chat bot
closeChat.addEventListener('click', () => {
  chatBot.classList.remove('active');
});

// Send message function
function sendChatMessage() {
  const message = chatInput.value.trim();
  
  if (message !== '') {
    // Add user message
    addMessage('user', message);
    
    // Clear input
    chatInput.value = '';
    
    // Simulate bot response
    setTimeout(() => {
      let botResponse = "Thank you for your message. Our team will get back to you shortly.";
      
      // Simple response matching
      if (message.toLowerCase().includes('hello') || message.toLowerCase().includes('hi')) {
        botResponse = "Hello! How can I assist you today?";
      } else if (message.toLowerCase().includes('services')) {
        botResponse = "We offer home care, health monitoring, social activities, and family support services. Would you like more information on any of these?";
      } else if (message.toLowerCase().includes('contact')) {
        botResponse = "You can reach us at (555) 123-4567 or email us at info@eldercare.com. Our office hours are Monday to Friday from 8am to 6pm.";
      }
      
      addMessage('bot', botResponse);
    }, 1000);
  }
}

// Add message to chat
function addMessage(type, text) {
  const messageDiv = document.createElement('div');
  messageDiv.className = `message ${type}`;
  
  const messagePara = document.createElement('p');
  messagePara.textContent = text;
  
  messageDiv.appendChild(messagePara);
  chatMessages.appendChild(messageDiv);
  
  // Scroll to bottom
  chatMessages.scrollTop = chatMessages.scrollHeight;
}

// Send message on button click
sendMessage.addEventListener('click', sendChatMessage);

// Send message on Enter key
chatInput.addEventListener('keypress', (e) => {
  if (e.key === 'Enter') {
    sendChatMessage();
  }
});

// Contact Form
const contactForm = document.getElementById('contact-form');

contactForm.addEventListener('submit', function(e) {
  e.preventDefault();
  
  // Get form values
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;
  
  // Basic validation
  if (name && email && message) {
    // Simulate form submission
    alert('Thank you for your message. We will get back to you soon!');
    contactForm.reset();
  } else {
    alert('Please fill out all fields.');
  }
});

// Header scroll effect
window.addEventListener('scroll', function() {
  const header = document.querySelector('header');
  
  if (window.scrollY > 50) {
    header.style.padding = '0.5rem 0';
    header.style.boxShadow = '0 4px 10px rgba(0, 0, 0, 0.1)';
  } else {
    header.style.padding = '1rem 0';
    header.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
  }
});

// Initialize page
document.addEventListener('DOMContentLoaded', function() {
  // Set active nav link based on current section
  window.addEventListener('scroll', function() {
    const sections = document.querySelectorAll('section');
    const scrollPosition = window.scrollY + 200;
    
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      const sectionId = section.getAttribute('id');
      
      if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
        document.querySelectorAll('nav ul li a').forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${sectionId}`) {
            link.classList.add('active');
          }
        });
      }
    });
  });
});