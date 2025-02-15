<?php

?>

<html>
  <head>
<title>Login - Nigerian Census Portal</title>
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
  transition: background-color 0.3s, color 0.3s;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
}

/* Dark mode styles */
body.dark-mode {
  background-color: #1a1a1a;
  color: #ffffff;
}

body.dark-mode .card {
  background-color: #2d2d2d;
  color: #ffffff;
}

body.dark-mode .form-control,
body.dark-mode .form-select {
  background-color: #333;
  color: #fff;
  border-color: #444;
}

body.dark-mode .form-control:focus,
body.dark-mode .form-select:focus {
  background-color: #404040;
  color: #fff;
  border-color: var(--primary-green);
}

body.dark-mode .nav-tabs .nav-link {
  color: #fff;
  background-color: #2d2d2d;
  border-color: #444;
}

body.dark-mode .nav-tabs .nav-link.active {
  color: #fff;
  background-color: #404040;
  border-color: #444;
}

body.dark-mode .navbar {
  background-color: #006b41;
}

.navbar {
  background-color: var(--primary-green);
}

.nav-link {
  color: var(--secondary-white) !important;
}

.login-card {
  border: none;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  max-width: 500px;
  margin: auto;
}

.nav-tabs {
  border-bottom: none;
  margin-bottom: 20px;
}

.nav-tabs .nav-link {
  border: none;
  color: #666;
  font-weight: 600;
  padding: 15px 30px;
  border-radius: 10px;
  margin-right: 10px;
}

.nav-tabs .nav-link.active {
  background-color: var(--primary-green);
  color: white !important;
}

.google-btn {
  background-color: #ffffff;
  color: #757575;
  border: 1px solid #ddd;
  transition: all 0.3s;
}

.google-btn:hover {
  background-color: #f1f1f1;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.form-control:focus {
  border-color: var(--primary-green);
  box-shadow: 0 0 0 0.2rem rgba(0,135,81,0.25);
}

.btn-login {
  background-color: var(--primary-green);
  color: white;
  border: none;
  padding: 12px 30px;
  border-radius: 25px;
  font-weight: bold;
  transition: all 0.3s;
  width: 100%;
}

.btn-login:hover {
  background-color: #006b41;
  transform: translateY(-2px);
}

.forgot-password {
  color: var(--primary-green);
  text-decoration: none;
  font-weight: 500;
}

.forgot-password:hover {
  text-decoration: underline;
}

.btn-theme-toggle {
  position: fixed;
  top: 100px;
  right: 20px;
  z-index: 1000;
  background-color: var(--primary-green);
  color: white;
  border: none;
  padding: 10px;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s;
}

.btn-theme-toggle:hover {
  transform: rotate(30deg);
}

footer {
  margin-top: auto;
}

@media (max-width: 768px) {
  .login-card {
    margin: 10px;
  }
  
  .nav-tabs .nav-link {
    padding: 10px 20px;
  }
  
  .btn-theme-toggle {
    top: auto;
    bottom: 20px;
    right: 20px;
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
          <a class="nav-link" href="Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Help.php">Help</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<button class="btn-theme-toggle" onclick="toggleDarkMode()">
  <i class="fas fa-moon"></i>
</button>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-12">
      <div class="login-card card p-4">
        <div class="card-body">
          <h2 class="text-center mb-4">Welcome Back</h2>
          
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#citizen" type="button">
                <i class="fas fa-users"></i>Citizen</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#admin" type="button">
                <i class="fas fa-user"></i>Administrator</button>
            </li>
          </ul>
          
          <div class="tab-content">
            <div class="tab-pane fade show active" id="citizen">
              <div class="d-grid mb-4">
                <button class="btn google-btn">
                  <i class="fab fa-google me-2"></i> Continue with Google
                </button>
              </div>
              
              <div class="text-center mb-4">
                <span class="bg-light px-3">OR</span>
              </div>
              
              <form id="citizenLoginForm">
                <div class="form-group mb-3">
                  <label>Email or Phone Number</label>
                  <input type="text" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                  <label>Password</label>
                  <input type="password" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between mb-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
                  <a href="#forgot-password" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-login">Login</button>
              </form>
            </div>
            
            <div class="tab-pane fade" id="admin">
              <form id="adminLoginForm">
                <div class="form-group mb-3">
                  <label>Admin ID</label>
                  <input type="text" class="form-control" required>
                </div>

                <div class="form-group mb-3">
                  <label>Password</label>
                  <input type="password" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between mb-4">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMeAdmin">
                    <label class="form-check-label" for="rememberMeAdmin">Remember me</label>
                  </div>
                  <a href="#forgot-password" class="forgot-password">Forgot Password?</a>
                </div>

                <button type="submit" class="btn btn-login">Login as Administrator</button>
              </form>
            </div>
          </div>
          
          <p class="text-center mt-4">
            Don't have an account? <a href="Register.php" class="forgot-password">Register here</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-white py-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h5>Contact Support</h5>
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
let darkMode = false;

function toggleDarkMode() {
  darkMode = !darkMode;
  document.body.classList.toggle('dark-mode');
  
  // Update button icon
  const icon = document.querySelector('.btn-theme-toggle i');
  if (darkMode) {
    icon.classList.remove('fa-moon');
    icon.classList.add('fa-sun');
  } else {
    icon.classList.remove('fa-sun');
    icon.classList.add('fa-moon');
  }
}

// Form submission handlers
document.getElementById('citizenLoginForm').addEventListener('submit', function(e) {
  e.preventDefault();
  // Add citizen login logic here
  alert('Citizen login form submitted! This would connect to a backend service in production.');
});

document.getElementById('adminLoginForm').addEventListener('submit', function(e) {
  e.preventDefault();
  // Add admin login logic here
  alert('Admin login form submitted! This would connect to a backend service in production.');
});

// Add smooth scrolling to all links
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