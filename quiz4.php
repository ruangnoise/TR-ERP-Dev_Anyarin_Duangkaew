

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-4</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
html, body {
    margin: 0;
    padding: 0;
}

.chart-container {
    display: flex;
    flex-wrap: nowrap;
    gap: 20px;
    width: 100%;
    box-sizing: border-box;
}

.chart-box {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);

    flex: 1;
    min-width: 0;
    box-sizing: border-box;
}
    </style>
</head>

<body>
    

<div class="chart-container">
    <div class="chart-box">
        <canvas id="citybarChart"></canvas>
    </div>
    <div class="chart-box">
        <canvas id="cityPieChart"></canvas>
    </div>
</div>

    <?php

    $cities = file_get_contents('https://www.trcloud.co/test/api.php');
    $cities = json_decode($cities, true);

    ?>

    <script>

        const cityData = <?php echo json_encode($cities); ?>;
        const cityNames = cityData.map(city => city.City);
        const populations = cityData.map(city => Number(city.Population));

        const ctxBar = document.getElementById('citybarChart').getContext('2d');
        const citybarChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: cityNames,
                datasets: [{
                    label: 'Rage by Country',
                    data: populations,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctxPie = document.getElementById('cityPieChart').getContext('2d');
        const cityPieChart = new Chart(ctxPie, {    
            type: 'pie',
            data: {
                labels: cityNames,
                datasets: [{
                    label: 'Population',
                    data: populations,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                 scales: {
                    y: {
                        beginAtZero: true
                    }
                }
                
            }
        });
    </script>
</body>
</html>

