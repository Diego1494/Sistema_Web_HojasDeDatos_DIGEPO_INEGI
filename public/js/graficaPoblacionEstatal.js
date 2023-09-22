//Configuracion del Google Charts
google.charts.load('current', {'packages':['table']});
//google.charts.setOnLoadCallback(drawchart);


//Controla el cambio en el select de region
 
    //var cvgeo = $('formgraficamunicipal').val;
    $.ajax({

        url: "http://localhost/hojas_de_datos_municipales/public/graficaPoblacionEstatal/",

        type: "get",
        //url: "/grafica",
        data: {estatal : 20000, _token: '{{csrf_token()}}' },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            //Obtenemos el contenedor de grafico regional
        
            //Configuracion del grafico
            
            const graficaPoblacion = document.getElementById('graficaPoblacionEstatal');
            
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

