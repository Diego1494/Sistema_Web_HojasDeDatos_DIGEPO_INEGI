$('#cvgeo').on('change', function(){
    $.ajax({

              url: "http://localhost/hojas_de_datos_municipales/public/Descripcion/",

              type: "get",
              //url: "/grafica",
                data: {municipio : $("#cvgeo").val(),  _token: '{{csrf_token()}}' },
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (response) {
            $('#municipio').text("Municipio: " + response[0].municipio);
             //$('#titulo').text("Hola");
              console.log(response[0]);
               
          }
        });
      });