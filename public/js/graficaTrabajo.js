//Configuracion del Google Charts
google.charts.load('current', {'packages':['corechart']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
  $('#region').on('change', function(){
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/hojas_de_datos_municipales/public/graficaTrabajo/",

        type: "get",
        //url: "/grafica",
        data: {region : $("#region").val(),  _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
            const graficaTrabajo = document.getElementById('graficaTrabajo');
            
            
            //Configuracion del grafico
            const options = {
                title: 'Trabajo',
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
              };

            const graficoTrabajo = google.visualization.arrayToDataTable(response.datos);

            const chart = new google.visualization.PieChart(graficaTrabajo);
            chart.draw(graficoTrabajo,options);

            
        },
        failure: function (response) {
            alert(response);
        },
        error: function (response) {
            alert(response);
        }
    });
});
