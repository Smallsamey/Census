<?php include ('connect.php'); ?>
<?php
if (isset($_POST['submit'])){
  $fullname=mysqli_real_escape_string($db, $_POST["fullname"]);
  $email=mysqli_real_escape_string($db, $_POST["email"]);
  $phone=mysqli_real_escape_string($db, $_POST["phone"]);
  $national_id=mysqli_real_escape_string($db, $_POST["national_id"]);
  $password=mysqli_real_escape_string($db, $_POST["password"]);
  $c_password=mysqli_real_escape_string($db, $_POST["c_password"]);
}
?>

<html>
  <head>
    <title>Register - Nigerian Census Portal</title>
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
  background-color: #f8f9fa;
  transition: background-color 0.3s, color 0.3s;
}

body.dark-mode {
  background-color: #1a1a1a;
  color: #ffffff;
}

body.dark-mode .card {
  background-color: #2d2d2d;
  color: #ffffff;
}

body.dark-mode .navbar {
  background-color: #006b41;
}

body.dark-mode .form-control {
  background-color: #333;
  color: #fff;
  border-color: #444;
}

body.dark-mode .form-control:focus {
  background-color: #444;
  color: #fff;
  border-color: var(--primary-green);
}

.navbar {
  background-color: var(--primary-green);
}

.registration-card {
  border: none;
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.btn-google {
  background-color: #fff;
  color: #757575;
  border: 1px solid #ddd;
  transition: all 0.3s;
}

.btn-google:hover {
  background-color: #f1f1f1;
}

.btn-submit {
  background-color: var(--primary-green);
  color: white;
  transition: all 0.3s;
}

.btn-submit:hover {
  background-color: #006b41;
}

.divider {
  display: flex;
  align-items: center;
  text-align: center;
  margin: 20px 0;
}

.divider::before,
.divider::after {
  content: '';
  flex: 1;
  border-bottom: 1px solid #ddd;
}

.divider span {
  padding: 0 10px;
}

.form-floating > label {
  padding-left: 20px;
}

.form-control:focus {
  border-color: var(--primary-green);
  box-shadow: 0 0 0 0.2rem rgba(0,135,81,0.25);
}

.form-check-input:checked {
  background-color: var(--primary-green);
  border-color: var(--primary-green);
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
          <button class="nav-link btn" onclick="toggleDarkMode()">
            <i class="fas fa-moon"></i> Dark Mode
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card registration-card">
        <div class="card-body p-4">
          <h2 class="text-center mb-4">Create an Account</h2>
          
          <button class="btn btn-google w-100 mb-3">
            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48'%3E%3Cpath fill='%23EA4335' d='M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z'/%3E%3Cpath fill='%234285F4' d='M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z'/%3E%3Cpath fill='%23FBBC05' d='M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z'/%3E%3Cpath fill='%2334A853' d='M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z'/%3E%3C/svg%3E" alt="Google" class="me-2" style="width: 18px">
            Continue with Google
          </button>
          
          <div class="divider">
            <span>or register with email</span>
          </div>
          
          <form id="registrationForm" onsubmit="return validateForm(event)">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Full Name" required>
              <label for="fullName">Full Name</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
              <label for="email">Email address</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
              <label for="phone">Phone Number</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="nin" name="national_id" placeholder="National ID Number" required>
              <label for="nin">National ID Number</label>
            </div>
            
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
              <label for="password">Password</label>
            </div>
            
            <div class="form-floating mb-4">
              <input type="password" class="form-control" id="confirmPassword" name="c_password" placeholder="Confirm Password" required>
              <label for="confirmPassword">Confirm Password</label>
            </div>

            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="adminRegistration">
              <label class="form-check-label" for="adminRegistration">
                Register as Administrator
              </label>
            </div>

            <div id="adminFields" style="display: none">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="adminCode" placeholder="Administrator Code">
                <label for="adminCode">Administrator Code</label>
              </div>
              
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="department" placeholder="Department">
                <label for="department">Department</label>
              </div>
              
              <div class="form-floating mb-4">
                <input type="text" class="form-control" id="employeeId" placeholder="Employee ID">
                <label for="employeeId">Employee ID</label>
              </div>
            </div>
            
            <button type="submit" name="submit" class="btn btn-submit w-100">Create Account</button>
          </form>
          
          <p class="text-center mt-4">
            Already have an account? <a href="Login.php" class="text-success">Login</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
  const icon = document.querySelector('.fa-moon');
  if (icon) {
    icon.classList.toggle('fa-moon');
    icon.classList.toggle('fa-sun');
  }
}

document.getElementById('adminRegistration').addEventListener('change', function() {
  const adminFields = document.getElementById('adminFields');
  adminFields.style.display = this.checked ? 'block' : 'none';
  
  const adminInputs = adminFields.querySelectorAll('input');
  adminInputs.forEach(input => {
    input.required = this.checked;
  });
});

function validateForm(event) {
  event.preventDefault();
  
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirmPassword').value;
  const nin = document.getElementById('nin').value;
  const phone = document.getElementById('phone').value;
  const isAdmin = document.getElementById('adminRegistration').checked;
  
  // Password validation
  if (password !== confirmPassword) {
    alert('Passwords do not match!');
    return false;
  }
  
  if (password.length < 8) {
    alert('Password must be at least 8 characters long!');
    return false;
  }
  
  // NIN validation (assuming 11 digits)
  const ninRegex = /^\d{11}$/;
  if (!ninRegex.test(nin)) {
    alert('Please enter a valid 11-digit National ID Number!');
    return false;
  }
  
  // Phone number validation (Nigerian format)
  const phoneRegex = /^(\+234|0)[789][01]\d{8}$/;
  if (!phoneRegex.test(phone)) {
    alert('Please enter a valid Nigerian phone number!');
    return false;
  }
  
  // Admin validation
  if (isAdmin) {
    const adminCode = document.getElementById('adminCode').value;
    const department = document.getElementById('department').value;
    const employeeId = document.getElementById('employeeId').value;
    
    if (!adminCode || !department || !employeeId) {
      alert('Please fill in all administrator fields!');
      return false;
    }
    
    // Validate admin code format (example: assuming format ADM-XXXX)
    const adminCodeRegex = /^ADM-\d{4}$/;
    if (!adminCodeRegex.test(adminCode)) {
      alert('Please enter a valid administrator code (format: ADM-XXXX)');
      return false;
    }
    
    // Validate employee ID format (example: assuming format EMP/2023/XXXX)
    const employeeIdRegex = /^EMP\/202[3-9]\/\d{4}$/;
    if (!employeeIdRegex.test(employeeId)) {
      alert('Please enter a valid employee ID (format: EMP/2023/XXXX)');
      return false;
    }
  }
  
  // If all validations pass, show success message
  alert('Registration successful! Please check your email for verification.');
  return true;
}
</script>

</body>
</html>