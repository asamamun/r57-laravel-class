$(document).ready(function () {
    /**
     * vistorsBrowserChart
     * for visitor_browser.html
     */
    const vistorsBrowserChart = document.getElementById('visitorBrowser');
    new Chart(vistorsBrowserChart, {
        type: 'doughnut',
        data: {
            labels: ['Safari', 'Chrome', 'IE', 'Opera', 'Firefox', 'Others'],
            datasets: [{
                data: [10, 20, 20, 5, 42, 3],
                borderWidth: 1,
                backgroundColor: ['#dc3545', '#ffda6a', '#20c997', '#6f42c1', '#fd7e14', '#6610f2']
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false  // Hide the legend
                },
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            // Calculate the percentage and display it in the tooltip
                            let dataSum = context.dataset.data.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
                            let currentValue = context.dataset.data[context.dataIndex];
                            let percentage = ((currentValue / dataSum) * 100).toFixed(2) + "%";
                            return percentage;
                        }
                    }
                }
            },
            scales: {
                x: {
                    display: false  // Hide x-axis
                },
                y: {
                    display: false  // Hide y-axis
                }
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            responsive: false,
            height: 250, // Set the desired height
            width: 250 // Set the desired width
        }
    });
    // vistorsBrowserChart ends

    /**
     * lineChartExampleOne
     * for purchase_sales_history.html
     */
    const lineChartExampleOne = document.getElementById('lineChartExampleOne');
    new Chart(lineChartExampleOne, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Purchase',
                    data: [10000, 5000, 15000, 10000, 20000, 15000, 30000, 25000, 40000, 35000, 50000, 45000],
                    borderWidth: 1,
                    borderColor: "#9461fb",
                    backgroundColor: "#9461fb",
                    pointRadius: 3,
                    tension: 0.3,
                    yAxisID: 'y',

                },
                {
                    label: 'Sales',
                    data: [15000, 10000, 20000, 15000, 25000, 20000, 35000, 30000, 45000, 40000, 55000, 50000],
                    borderWidth: 1,
                    borderColor: "#ffe484",
                    backgroundColor: "#ffe484",
                    pointRadius: 3,
                    tension: 0.3,
                    yAxisID: 'y1',
                }

            ]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: true  // Hide the legend
                }
            },

            scales: {
                y: {
                    type: 'linear',
                    display: true,
                    position: 'left',
                    grid: {
                        color: '#2c2e33' // Set the color of the y-axis grid lines
                    },
                    suggestedMin: 0,
                    suggestedMax: 65000, 

                },
                y1: {
                    type: 'linear',
                    display: true,
                    position: 'right',
                    grid: {
                        color: '#2c2e33'
                    },
                    suggestedMin: 0,
                    suggestedMax: 65000, 
                },
                x: {
                    grid: {
                        color: '#2c2e33'
                    }
                }
            },
        }
    });
    // lineChartExampleOne ends
});