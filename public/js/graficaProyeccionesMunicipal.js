//Configuracion del Google Charts
google.charts.load('current', {packages: ['corechart', 'line']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
  $('#cvgeo').on('change', function(){
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/Sistema_Web_HojasDeDatos_DIGEPO_INEGI/public/graficaProyeccionesMunicipal/",

        type: "get",
        //url: "/grafica",
        data: {cvgeo : $("#cvgeo").val(),  _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
            const pieChart = document.getElementById('graficaProyeccionesMunicipal');
            
            
            //Configuracion del grafico
            const options = {
              title: 'Proyecciones de Poblacion 2016-2022',
                textStyle: {
                  color: '#333',
                  fontSize: 18,
                  bold: true
                },
                titleTextStyle: {
                  color: '#333',
                  fontSize: 18,
                  bold: true
                },
              hAxis: {
                title: 'Años',
                logScale: true
              },
              vAxis: {
                title: 'Proyecciones',
                logScale: false
              },
              
              colors: ['#FF0000']
            };
            const graficoRegion = google.visualization.arrayToDataTable(response.datos);

            const chart = new google.visualization.LineChart(pieChart);
            chart.draw(graficoRegion,options);

            
        },
        failure: function (response) {
            alert(response);
        },
        error: function (response) {
            alert(response);
        }
    });
});
