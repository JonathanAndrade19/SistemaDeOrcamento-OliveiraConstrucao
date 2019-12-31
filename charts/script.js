google.charts.load('current',{packages: ['corechart']});

google.charts.setOnLoadCallback(drawChart);

function drawChart(){
    var data = new google.visualization.DataTable();
    data.addColumn('string','Cliente');
    data.addColumn('number','Valor');
    data.addRows([
        ['Sr FLAVIO', 7.422],
        ['Sr JONATHAN', 2.021],
        ['Sr FELIPE', 3.002],
    ])

    var options = {
        title: 'Clientes e Valores de obras',
        width: 600,
        height:300
    }
    var chart = new google.visualization.PieChart(document.getElementById('my-chats'))
    chart.draw(data,options);

    
}