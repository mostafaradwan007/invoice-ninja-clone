<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    :root {
      --bee-yellow: #ffcc00;
      --bee-light-gray: #e5e7eb;
      --bee-black: #1a1a1a;
      --bee-dark-gray: #333;
      --bee-light: #fff8e1;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f5f5;
      padding-left: 280px;
      /* To make space for the fixed sidebar */
      padding-top: 70px;
      /* To make space for the fixed header */
    }
    



    /* Main Content Area */
    .main-content {
      padding: 24px;
      /* Add some padding around the content */
    }

    .chart-container {
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    }

    .dashboard-buttons {
      margin-bottom: 20px;
      display: flex;
      gap: 10px;
    }
  </style>
</head>

<body>

  <?php include_once './header.php'; ?>
  <?php include_once './sidebar.php'; ?>

  <!-- Main Content Area -->
  <div class="main-content">
    <h2 class="mb-4">Dashboard Overview</h2>

    <!-- Example Buttons -->
    <div class="dashboard-buttons">
      <button class="btn btn-primary">View Reports</button>
      <button class="btn btn-success">Add New Data</button>
      <button class="btn btn-info">Export Data</button>
    </div>

    <!-- Charts Section -->
    <div class="row">
      <div class="col-lg-6">
        <div class="chart-container">
          <h5>Sales Performance</h5>
          <canvas id="salesChart"></canvas>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="chart-container">
          <h5>Expense Breakdown</h5>
          <canvas id="expenseChart"></canvas>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="chart-container">
          <h5>Monthly Revenue</h5>
          <canvas id="revenueChart"></canvas>
        </div>
      </div>
    </div>

    <!-- You can add more content here, e.g., data tables, cards, etc. -->
    <div class="card mt-4">
      <div class="card-body">
        <h5 class="card-title">Recent Activity</h5>
        <p class="card-text">This is where you can display recent activities or notifications.</p>
        <ul>
          <li>Invoice #1234 paid by Client A.</li>
          <li>New product "Premium Service" added.</li>
          <li>Expense for "Office Supplies" recorded.</li>
        </ul>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Chart.js CDN -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // JavaScript for Chart.js Charts
    document.addEventListener('DOMContentLoaded', function() {
      // Sales Chart
      const salesCtx = document.getElementById('salesChart').getContext('2d');
      new Chart(salesCtx, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [{
            label: 'Sales',
            data: [1200, 1900, 3000, 5000, 2000, 3000],
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });

      // Expense Chart (Doughnut)
      const expenseCtx = document.getElementById('expenseChart').getContext('2d');
      new Chart(expenseCtx, {
        type: 'doughnut',
        data: {
          labels: ['Rent', 'Utilities', 'Salaries', 'Marketing', 'Supplies'],
          datasets: [{
            label: 'Expenses',
            data: [300, 50, 200, 100, 80],
            backgroundColor: [
              'rgba(255, 99, 132, 0.6)',
              'rgba(54, 162, 235, 0.6)',
              'rgba(255, 206, 86, 0.6)',
              'rgba(75, 192, 192, 0.6)',
              'rgba(153, 102, 255, 0.6)'
            ],
            borderColor: [
              'rgba(255, 99, 132, 1)',
              'rgba(54, 162, 235, 1)',
              'rgba(255, 206, 86, 1)',
              'rgba(75, 192, 192, 1)',
              'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'top',
            },
            title: {
              display: false,
              text: 'Expense Breakdown'
            }
          }
        }
      });

      // Monthly Revenue Chart (Line)
      const revenueCtx = document.getElementById('revenueChart').getContext('2d');
      new Chart(revenueCtx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [{
            label: 'Revenue',
            data: [1000, 1500, 2000, 1800, 2500, 2200, 3000, 2800, 3500, 3200, 4000, 3800],
            fill: false,
            borderColor: 'rgb(255, 159, 64)',
            tension: 0.1
          }]
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true
            }
          }
        }
      });
    });
  </script>
</body>

</html>