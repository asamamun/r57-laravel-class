$(document).ready(function () {
    /**
     * subCategoryChart
     */
    let subCategoryLabels = ["Entertainment", "Rent", "Food", "Transportation", "Marketing", "Utilities", "Insurance", "Servers", "team Events", "Electricity", "Office Supplies", "Travel Expenses", "Training"];
    let subCategoryExpenses = [0.2, 1.2, 0.5, 0.2, 1.3, 0.8, 0.6, 0.4, 0.9, 0.1, 0.3, 0.7, 0.99];

    // Function to generate random colors
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Generate an array of random colors
    const randomColors = subCategoryLabels.map(() => getRandomColor());

    const barChart = document.getElementById('subCategoryChart');
    new Chart(barChart, {
        type: 'bar',
        data: {
            labels: subCategoryLabels,
            datasets: [{
                label: 'In million',
                data: subCategoryExpenses,
                backgroundColor: randomColors,  // Use the array of random colors
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false  // Hide the legend
                }
            },
            scales: {
                x: {
                    beginAtZero: true
                }
            }
        }
    });
    // subCategoryChart ends


    /**
     * For expenseQuartlyReport
     */
    let data = [{
        values: [30, 20, 50],
        labels: ['Q1', 'Q2', 'Q3'],
        type: 'pie'

    }];

    // Layout options
    let layout = {
        paper_bgcolor: 'rgba(0,0,0,0)',
        plot_bgcolor: 'rgba(0,0,0,0)'

    };

    var config = { responsive: true };

    // Create the pie chart using Plotly
    Plotly.newPlot('expenseQuartlyReport', data, layout, config);
    // expenseQuartlyReport ends
});
