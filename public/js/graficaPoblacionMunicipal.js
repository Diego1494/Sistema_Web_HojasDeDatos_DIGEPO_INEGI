//Configuracion del Google Charts
google.charts.load('current', {'packages':['table']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
  $('#cvgeo').on('change', function(){
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/hojas_de_datos_municipales/public/graficaPoblacionMunicipal/",

        type: "get",
        //url: "/grafica",
        data: {cvgeo : $("#cvgeo").val(),  _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
            const graficaPoblacion = document.getElementById('graficaPoblacionMunicipal');
            
            const allowHtml ={
              
            }
            const cssClassNames = {
              
                'headerRow': 'beige-background1',
                'tableRow': 'beige-background2',
                'oddTableRow': 'beige-background3',

                };

            const options = {
                
                'allowHtml': allowHtml, 
                'cssClassNames': cssClassNames,
                width: '100%', 
                height: '90%',
             };
            //Configuracion del grafico
            
            
            const graficoPoblacion = google.visualization.arrayToDataTable(response.datos);
            
            const chart = new google.visualization.Table(graficaPoblacion);
            chart.draw(graficoPoblacion,options);


            
        },
        failure: function (response) {
            alert(response);
        },
        error: function (response) {
            alert(response);
        }
    });
});
