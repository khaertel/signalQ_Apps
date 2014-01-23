Highcharts.theme = {
	credits: {
	    enabled: false
	},
    xAxis: {
        title: {
            text: null
        },
        lineColor: '#fff',
        tickmarkPlacement: 'on',
        tickLength: 0
    },
    yAxis: {   
        labels: {
            enabled: false
        },
        title: {
            text: null
        },
        lineColor: '#fff',
    },
    legend: {
        enabled: false
    },
    tooltip: {
        formatter: function() {
            return '<b>'+ this.series.name +':</b>'+
                this.y;
        }
    }
};
Highcharts.setOptions(Highcharts.theme);