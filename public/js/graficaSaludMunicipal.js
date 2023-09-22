//Configuracion del Google Charts
google.charts.load('current', {packages: ['corechart', 'bar']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
  $('#cvgeo').on('change', function(){
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/hojas_de_datos_municipales/public/graficaSaludMunicipal/",

        type: "get",
        //url: "/grafica",
        data: {cvgeo : $("#cvgeo").val(),  _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
            const graficaSalud = document.getElementById('graficaSaludMunicipal');
            
            
            //Configuracion del grafico
            const options = {
              title: 'Servicios de Salud',
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
                colors: ['#33ac71'],
                hAxis: {
                  title: '',
                  format: 'h:mm a',
                  color:'',
                  viewWindow: {
                    min: [7, 30, 0],
                    max: [17, 30, 0]
                  }
                },
                vAxis: {
                  title: ''
                }
              };
            const graficoSalud = google.visualization.arrayToDataTable(response.datos);

            const chart = new google.visualization.ColumnChart(graficaSalud);
            chart.draw(graficoSalud,options);

            
        },
        failure: function (response) {
            alert(response);
        },
        error: function (response) {
            alert(response);
        }
    });
});
