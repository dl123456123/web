/*
 *  Document   : be_pages_dashboard.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Default Dashboard Page
 */

class pageDashboard {
    /*
     * Chart.js, for more examples you can check out http://www.chartjs.org/docs
     *
     */
    static initChartsBars() {
        // Set Global Chart.js configuration
        Chart.defaults.color = '#495057';
        Chart.defaults.scale.grid.color = 'transparent';
        Chart.defaults.scale.grid.zeroLineColor = 'transparent';
        Chart.defaults.scale.beginAtZero = true;
        Chart.defaults.elements.line.borderWidth = 1;
        Chart.defaults.plugins.legend.labels.boxWidth = 12;

        // Get Chart Containers
        let chartBarsCon = jQuery('.js-chartjs-analytics-bars');

        // Set Chart and Chart Data variables
        let chartBars, chartLinesBarsData;

        // Bars Chart Data
        chartLinesBarsData = {
            labels: ['MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN'],
            datasets: [
                {
                    label: 'This Week',
                    fill: true,
                    backgroundColor: 'rgba(6, 101, 208, .6)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(6, 101, 208, 1)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(6, 101, 208, 1)',
                    data: [73, 68, 69, 53, 60, 72, 82]
                },
                {
                    label: 'Last Week',
                    fill: true,
                    backgroundColor: 'rgba(6, 101, 208, .2)',
                    borderColor: 'transparent',
                    pointBackgroundColor: 'rgba(6, 101, 208, .2)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgba(6, 101, 208, .2)',
                    data: [62, 32, 59, 55, 52, 56, 73]
                }
            ]
        };

        // Init Chart
        if (chartBarsCon.length) {
            chartBars = new Chart(chartBarsCon, {
                type: 'bar',
                data: chartLinesBarsData,
                options: {
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function (context) {
                                    return context.dataset.label + ': ' + context.parsed.y + ' Customers';
                                }
                            }
                        }
                    }
                }
            });
        }
    }

    /*
     * Init functionality
     *
     */
    static init() {
        this.initChartsBars();
    }
}

// Initialize when page loads
jQuery(() => { pageDashboard.init(); });