window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    exportEnabled: true,
    animationEnabled: true,
    title: {
        text: ""
    },
    data: [{
        type: "pie",
        startAngle: 25,
        toolTipContent: "<b>{label}</b>: {y}%",
        showInLegend: false,
        legendText: "{label}",
        indexLabelFontSize: 16,
        indexLabel: "{label} - {y}%",
        dataPoints: [
            { y: 20, label: "Design" },
            { y: 25, label: "Analysis" },
            { y: 18, label: "Construction" },
            { y: 22, label: "Testing" },
            { y: 15, label: "Promotion" }
    
        ]
    }]
});
chart.render();
    
}
