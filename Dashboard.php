<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nigeria Census Portal - Dashboard</title>
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
    
</body>
</html>