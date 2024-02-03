//Configuracion del Google Charts
google.charts.load('current', {packages: ['corechart', 'bar']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
 
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/Sistema_Web_HojasDeDatos_DIGEPO_INEGI/public/graficaEducacionEstatal/",

        type: "get",
        //url: "/grafica",
        data: {estatal : 20000, _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
            const graficaEducacion = document.getElementById('graficaEducacionEstatal');
            
            
            //Configuracion del grafico
            const options = {
              title: 'Educacion',
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
                colors: ['#000080'],
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
            const graficoEducacion = google.visualization.arrayToDataTable(response.datos);

            const chart = new google.visualization.ColumnChart(graficaEducacion);
            chart.draw(graficoEducacion,options);
            
        },
        failure: function (response) {
            alert(response);
        },
        error: function (response) {
            alert(response);
        }
    });