'use strict';

$(document).ready(function(){

    // Chart Data
    var lineChartData = [
        {
            label: 'Class 6',
            data: [[1,50], [2,45], [3,50], [4,30], [5,45], [6,49], [7,48]],
            color: '#e53935'
        },
        {
            label: 'class 9',
            data: [[1,40], [2,49], [3,40], [4,40], [5,50], [6,36], [7,49]],
            color: '#1E88E5'
        },
        {
            label: 'class 11 <b>ARTS</b>',
            data: [[1,46], [2,48], [3,50], [4,49], [5,49], [6,50], [7,50]],
            color: '#212121'
        }


    ];

    // Chart Options
    var lineChartOptions = {
        series: {
            lines: {
                show: true,
                barWidth: 0.05,
                fill: 0
            }
        },
        shadowSize: 0.1,
        grid : {
            borderWidth: 1,
            borderColor: '#edf9fc',
            show : true,
            hoverable : true,
            clickable : true
        },

        yaxis: {
            tickColor: '#edf9fc',
            tickDecimals: 0,
            font :{
                lineHeight: 13,
                style: 'normal',
                color: '#9f9f9f',
            },
            shadowSize: 0
        },

        xaxis: {
            tickColor: '#fff',
            tickDecimals: 0,
            font :{
                lineHeight: 13,
                style: 'normal',
                color: '#9f9f9f'
            },
            shadowSize: 0,
        },
        legend:{
            container: '.flot-chart-legends--line',
            backgroundOpacity: 0.5,
            noColumns: 0,
            backgroundColor: '#fff',
            lineWidth: 0,
            labelBoxBorderColor: '#fff'
        }
    };

    // Create chart
    if ($('.flot-line')[0]) {
        $.plot($('.flot-line'), lineChartData, lineChartOptions);
    }
});
