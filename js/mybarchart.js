window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Server Side Market Shares"
	},
	axisY: {
		title: "%"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "grey",
		legendText: " Server Side Language",
		dataPoints: [      
			{ y: 77.5, label: "PHP" },
			{ y: 7.2,  label: "ASP.NET" },
			{ y: 5.2,  label: "Ruby	" },
			{ y: 4.7,  label: "Java" },
			{ y: 3.0,  label: "Scala" },
			{ y: 2.0, label: "JavaScript" },
			
		]
	}]
});
chart.render();

}
