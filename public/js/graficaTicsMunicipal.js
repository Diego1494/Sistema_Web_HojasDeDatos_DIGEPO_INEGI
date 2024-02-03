//Configuracion del Google Charts
google.charts.load('current', {packages: ['corechart', 'bar']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
  $('#cvgeo').on('change', function(){
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/Sistema_Web_HojasDeDatos_DIGEPO_INEGI/public/graficaTicsMunicipal/",

        type: "get",
        //url: "/grafica",
        data: {cvgeo : $("#cvgeo").val(),  _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
            const graficaTics = document.getElementById('graficaTicsMunicipal');
            
            
            //Configuracion del grafico
            const options = {
              title: 'Tecnologias de la informacion y comunicaciones',
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
                colors: ['#00FFFF'],
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
            const graficoTics = google.visualization.arrayToDataTable(response.datos);

            const chart = new google.visualization.ColumnChart(graficaTics);
            chart.draw(graficoTics,options);

            
        },
        failure: function (response) {
            alert(response);
        },
        error: function (response) {
            alert(response);
        }
    });
});
