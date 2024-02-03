//Configuracion del Google Charts
google.charts.load('current', {packages: ['corechart', 'bar']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
  $('#region').on('change', function(){
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/Sistema_Web_HojasDeDatos_DIGEPO_INEGI/public/graficaVivienda/",

        type: "get",
        //url: "/grafica",
        data: {region : $("#region").val(),  _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
            const graficaVivienda = document.getElementById('graficaVivienda');
            
            
            //Configuracion del grafico
            const options = {
              title: 'Servicios de la Vivienda',
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
                colors: ['#9575cd'],
                hAxis: {
                  title: '',
                  format: 'h:mm a',
                  viewWindow: {
                    min: [7, 30, 0],
                    max: [17, 30, 0]
                  }
                },
                vAxis: {
                  title: ''
                }
              };
            const graficoVivienda = google.visualization.arrayToDataTable(response.datos);

            const chart = new google.visualization.ColumnChart(graficaVivienda);
            chart.draw(graficoVivienda,options);

            
        },
        failure: function (response) {
            alert(response);
        },
        error: function (response) {
            alert(response);
        }
    });
});
