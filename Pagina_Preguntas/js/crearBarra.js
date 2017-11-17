//*******************************************************************************************************

$(document).ready(function() {
    var ctx = document.getElementById("myChart");

    var colores = [
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)'
    ];

    var informacion = [60.3, 50.2, 52.2, 51.2, 50.2];

    var etiquetas = [
        "Label 1",
        "Label 2",
        "Label 3",
        "Label 4",
        "Label 5"
    ];

    var Data = {
        labels: etiquetas,
        datasets: [
            {
                label: 'Ventas',
                data: informacion,
                backgroundColor: colores
            }]
    };

    //Options Tooltip
    var toolT = {
        cornerRadius: 0,
        caretSize: 0,
        xPadding: 16,
        yPadding: 10,
        backgroundColor: 'rgba(100, 100, 100, 0.9)',
        titleFontStyle: 'normal',
        titleMarginBottom: 15,
        showalways: true
    };

    //Options Layout
    var Lay = {
        padding: {
            left: 10,
            right: 10,
            top: 20,
            bottom: 10
        }
    };

    //Options Legend
    var Leg = {
        display: false,
        position: 'bottom',
        labels: {
            boxWidth: 80
            //fontColor: 'rgb(60, 180, 100)'
        }
    };


    //Creacion de Grafica
    var pieChart = new Chart(ctx, {
        type: 'bar',
        data: Data,
        options: {
            legend: Leg,
            layout: Lay,
            showInlineValues : true,
            tooltips: toolT,
            scales: {
                xAxes: [{
                    stacked: true
                }],
                yAxes: [{
                    stacked: true
                }]
            },
            plugins: {
                datalabels: {
                    color: 'white',
                    display: function(context) {
                        return context.dataset.data[context.dataIndex] > 15;
                    },
                    font: {
                        weight: 'bold',
                        size: 1
                    },
                    formatter: Math.round
                }
            }
        }
    });




});//Fin Document Ready