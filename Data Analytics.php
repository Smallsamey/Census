<?php

?>
<html><head><title>Nigerian Census Data Analytics</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

body.dark-mode .card {
  background-color: #2d2d2d;
  color: #ffffff;
}

body.dark-mode .navbar {
  background-color: #006b41;
}

.navbar {
  background-color: var(--primary-green);
}

.analytics-card {
  transition: transform 0.3s;
  margin-bottom: 20px;
}

.analytics-card:hover {
  transform: translateY(-5px);
}

.chart-container {
  position: relative;
  margin: auto;
  height: 300px;
  width: 100%;
}

.stat-card {
  border-left: 4px solid var(--primary-green);
}

.filters {
  background-color: #f8f9fa;
  padding: 20px;
  border-radius: 10px;
  margin-bottom: 20px;
}

body.dark-mode .filters {
  background-color: #2d2d2d;
}

@media (max-width: 768px) {
  .chart-container {
    height: 200px;
  }
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="Home.php">
      <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect width='100' height='100' fill='%23fff'/%3E%3Ctext x='50' y='50' font-family='Arial' font-size='14' text-anchor='middle' fill='%23008751'%3ENCB%3C/text%3E%3C/svg%3E" alt="Nigerian Census Bureau Logo" width="40" height="40">
      Census Analytics Dashboard
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
      <button class="cta-button" onclick="location.href='logout.php'">
            Logout
          </button>
        <li class="nav-item">
          <button class="btn btn-light" onclick="toggleDarkMode()">
            <i class="fas fa-moon"></i> Toggle Theme
          </button>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <div class="filters">
    <div class="row">
      <div class="col-md-3">
        <select class="form-select" id="yearFilter">
          <option value="2023">2023</option>
          <option value="2022">2022</option>
          <option value="2021">2021</option>
        </select>
      </div>
      <div class="col-md-3">
        <select class="form-select" id="regionFilter">
          <option value="all">All Regions</option>
          <option value="north">Northern Region</option>
          <option value="south">Southern Region</option>
        </select>
      </div>
      <div class="col-md-3">
        <select class="form-select" id="dataTypeFilter">
          <option value="population">Population</option>
          <option value="demographics">Demographics</option>
          <option value="education">Education</option>
        </select>
      </div>
      <div class="col-md-3">
        <button class="btn btn-success w-100" onclick="updateCharts()">Apply Filters</button>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      <div class="card analytics-card stat-card">
        <div class="card-body">
          <h5 class="card-title">Total Population</h5>
          <h2 class="card-text">206.1M</h2>
          <p class="text-success"><i class="fas fa-arrow-up"></i> 2.5% growth</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card analytics-card stat-card">
        <div class="card-body">
          <h5 class="card-title">Average Age</h5>
          <h2 class="card-text">18.1</h2>
          <p class="text-muted">Years</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card analytics-card stat-card">
        <div class="card-body">
          <h5 class="card-title">Gender Ratio</h5>
          <h2 class="card-text">102:100</h2>
          <p class="text-muted">Male:Female</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card analytics-card stat-card">
        <div class="card-body">
          <h5 class="card-title">Literacy Rate</h5>
          <h2 class="card-text">62.0%</h2>
          <p class="text-success"><i class="fas fa-arrow-up"></i> 3.2%</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-6">
      <div class="card analytics-card">
        <div class="card-body">
          <h5 class="card-title">Population by Region</h5>
          <div class="chart-container">
            <canvas id="regionChart"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card analytics-card">
        <div class="card-body">
          <h5 class="card-title">Age Distribution</h5>
          <div class="chart-container">
            <canvas id="ageChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-md-12">
      <div class="card analytics-card">
        <div class="card-body">
          <h5 class="card-title">Population Growth Trend</h5>
          <div class="chart-container">
            <canvas id="trendChart"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
  updateChartsTheme();
}

function updateChartsTheme() {
  const isDarkMode = document.body.classList.contains('dark-mode');
  const textColor = isDarkMode ? '#ffffff' : '#666666';
  
  Chart.defaults.color = textColor;
  regionChart.update();
  ageChart.update();
  trendChart.update();
}

// Initialize Charts
const regionChart = new Chart(document.getElementById('regionChart'), {
  type: 'pie',
  data: {
    labels: ['North West', 'North East', 'North Central', 'South West', 'South East', 'South South'],
    datasets: [{
      data: [49.3, 27.1, 29.2, 45.2, 21.9, 28.8],
      backgroundColor: [
        '#008751', '#00A86B', '#00C585', '#00E29F', '#00FFB9', '#1AFFC6'
      ]
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false
  }
});

const ageChart = new Chart(document.getElementById('ageChart'), {
  type: 'bar',
  data: {
    labels: ['0-14', '15-24', '25-54', '55-64', '65+'],
    datasets: [{
      label: 'Age Distribution (%)',
      data: [43.3, 19.2, 30.5, 3.9, 3.1],
      backgroundColor: '#008751'
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false
  }
});

const trendChart = new Chart(document.getElementById('trendChart'), {
  type: 'line',
  data: {
    labels: ['2018', '2019', '2020', '2021', '2022', '2023'],
    datasets: [{
      label: 'Population (Millions)',
      data: [195.9, 199.0, 201.0, 203.0, 204.6, 206.1],
      borderColor: '#008751',
      tension: 0.1
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false
  }
});

function updateCharts() {
  // This would typically fetch new data based on filters
  alert('Filters applied! In a real implementation, this would update the charts with new data.');
}

// Initial theme setup
updateChartsTheme();
</script>

</body></html>