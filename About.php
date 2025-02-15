<?php

?>

<html>
  <head>
  <title>Nigerian Census Portal - About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<style>
:root {
  --primary-green: #008751;
  --secondary-white: #ffffff;
  --accent-black: #000000;
}

body {
  font-family: 'Segoe UI', sans-serif;
  color: var(--accent-black);
  transition: background-color 0.3s, color 0.3s;
}

body.dark-mode {
  background-color: #1a1a1a;
  color: #ffffff;
}

body.dark-mode .feature-card,
body.dark-mode .timeline-item {
  background-color: #2d2d2d;
  color: #ffffff;
}

body.dark-mode .navbar:not(.hero-section .navbar) {
  background-color: #006b41;
}

body.dark-mode .accessibility-controls {
  background-color: #2d2d2d !important;
}

body.dark-mode .btn-outline-dark {
  color: #ffffff;
  border-color: #ffffff;
}

body.dark-mode .btn-outline-dark:hover {
  background-color: #ffffff;
  color: #1a1a1a;
}

.navbar {
  background-color: var(--primary-green);
}

.hero-section {
  background-color: var(--primary-green);
  color: var(--secondary-white);
  padding: 60px 0;
  margin-bottom: 40px;
}

.timeline-item {
  border-left: 4px solid var(--primary-green);
  padding: 20px;
  margin-bottom: 30px;
  background-color: #f8f9fa;
  border-radius: 0 10px 10px 0;
  transition: transform 0.3s, background-color 0.3s;
}

.timeline-item:hover {
  transform: translateX(10px);
}

.timeline-date {
  color: var(--primary-green);
  font-weight: bold;
}

.mission-card {
  border-radius: 10px;
  transition: transform 0.3s;
  margin-bottom: 30px;
}

.mission-card:hover {
  transform: translateY(-5px);
}

.accessibility-controls {
  position: fixed;
  top: 100px;
  right: 20px;
  z-index: 1000;
}

@media (max-width: 768px) {
  .accessibility-controls {
    position: static;
    margin: 20px 0;
  }
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="Home.php">
      <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23fff'/%3E%3Ctext x='50' y='50' font-family='Arial' font-size='14' text-anchor='middle' fill='%23008751'%3ENCB%3C/text%3E%3C/svg%3E" alt="Nigerian Census Bureau Logo" width="40" height="40">
      Nigerian Census Bureau
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Login.php">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="hero-section">
  <div class="container">
    <h1 class="display-4">About Us</h1>
    <p class="lead">Pioneering Digital Census Solutions for Nigeria's Future</p>
  </div>
</div>

<div class="container">
  <div class="row mb-5">
    <div class="col-md-6">
      <h2 class="mb-4">Our Mission</h2>
      <p class="lead">To provide accurate, comprehensive demographic data that enables informed decision-making and supports Nigeria's development.</p>
      <p>The Nigerian Census Bureau is committed to conducting regular, reliable population counts using cutting-edge digital technologies while ensuring data privacy and security.</p>
    </div>
    <div class="col-md-6">
      <div class="mission-card p-4 bg-light">
        <h3 class="text-success mb-3">Key Objectives</h3>
        <ul>
          <li>Conduct regular digital censuses</li>
          <li>Maintain accurate population records</li>
          <li>Provide reliable demographic data</li>
          <li>Support national planning</li>
          <li>Ensure data accessibility</li>
        </ul>
      </div>
    </div>
  </div>

  <h2 class="mb-4">Our History</h2>
  <div class="timeline">
    <div class="timeline-item">
      <div class="timeline-date">1866</div>
      <h4>First Census</h4>
      <p>First population count conducted in Lagos Colony</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">1963</div>
      <h4>Post-Independence Census</h4>
      <p>First national census after independence</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">2006</div>
      <h4>Modern Census</h4>
      <p>Implementation of modern counting methods</p>
    </div>
    <div class="timeline-item">
      <div class="timeline-date">2023</div>
      <h4>Digital Transformation</h4>
      <p>Launch of the digital census portal</p>
    </div>
  </div>
</div>

<div class="accessibility-controls bg-light p-3 rounded">
  <button class="btn btn-sm btn-outline-dark mb-2" onclick="toggleDarkMode()">
    <i class="fas fa-moon"></i> Dark Mode
  </button>
  <button class="btn btn-sm btn-outline-dark mb-2" onclick="toggleHighContrast()">
    <i class="fas fa-adjust"></i> High Contrast
  </button>
  <button class="btn btn-sm btn-outline-dark mb-2" onclick="increaseFontSize()">
    <i class="fas fa-text-height"></i> Increase Text
  </button>
  <button class="btn btn-sm btn-outline-dark" onclick="toggleScreenReader()">
    <i class="fas fa-volume-up"></i> Screen Reader
  </button>
</div>

<footer class="bg-dark text-white py-4 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Contact Us</h5>
        <p>Email: support@nigeriancensus.gov.ng</p>
        <p>Phone: +234 (0) 123-456-7890</p>
      </div>
      <div class="col-md-6 text-md-end">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white">Privacy Policy</a></li>
          <li><a href="#" class="text-white">Terms of Service</a></li>
          <li><a href="#" class="text-white">FAQs</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
let highContrastMode = false;
let fontSize = 16;
let darkMode = false;

function toggleDarkMode() {
  darkMode = !darkMode;
  document.body.classList.toggle('dark-mode');
  
  const darkModeIcon = document.querySelector('button[onclick="toggleDarkMode()"] i');
  darkModeIcon.classList.toggle('fa-moon');
  darkModeIcon.classList.toggle('fa-sun');
}

function toggleHighContrast() {
  highContrastMode = !highContrastMode;
  if (highContrastMode) {
    document.body.style.backgroundColor = '#000';
    document.body.style.color = '#fff';
  } else {
    document.body.style.backgroundColor = '';
    document.body.style.color = '';
  }
}

function increaseFontSize() {
  fontSize += 2;
  document.body.style.fontSize = `${fontSize}px`;
}

function toggleScreenReader() {
  alert('Screen reader functionality would be implemented here');
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
</script>

</body></html>