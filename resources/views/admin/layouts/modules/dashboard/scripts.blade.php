<script>
// column chart
var options3 = {
    chart: {
        height: 350,
        type: 'bar',
        toolbar:{
          show: false
        }
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    series: [{
        name: 'Views',
        data: chartData
    }],
    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    yaxis: {
        title: {
            text: 'Views'
        }
    },
    fill: {
        opacity: 1

    },
    tooltip: {
        y: {
            formatter: function (val) {
                return val;
            }
        }
    },
    colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary , 'red']
}

var chart3 = new ApexCharts(
    document.querySelector("#column-chart"),
    options3
);

chart3.render();

// pie chart
var options8 = {
    chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July ', 'August', 'September', 'October', 'November', 'December'],
    series: chartData,
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 02000
            },
            legend: {
                position: 'bottom'
            }
        }
    }],
    colors:[ CubaAdminConfig.primary , CubaAdminConfig.secondary , '#51bb25', '#a927f9', '#f8d62b']
}

var chart8 = new ApexCharts(
    document.querySelector("#piechart"),
    options8
);

chart8.render();
</script>