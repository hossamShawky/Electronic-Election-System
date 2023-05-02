
    JSC.Chart('chartDiv', {
            legend_visible: false, //two color male and female
		defaultSeries_lastPoint_label_text: '<b>%seriesName</b>',//show curve label name
		defaultPoint_tooltip: '%seriesName <b>%yValue</b> years',//show name of series and value of point on tooltip
        xAxis_crosshair_enabled: true, //show dashed line
        yAxis_crosshair_enabled: true,
        xAxis_label_text:'<b>Days</b>',
        yAxis_label_text:'<b> </b>',
       series: [{name:'Votes',
       points: [
        {x:"day 1",y:10000},
        {x:"day 2",y:25000},
        {x:"day 3",y:25000},
        {x:"day 4",y:25000},
        {x:"day 5",y:25000},
        {x:"day 6",y:30000}
       ]
       }]      
    });

