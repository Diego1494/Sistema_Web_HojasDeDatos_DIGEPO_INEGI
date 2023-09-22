$('#region').on('change', function(){
    $('#titulo').text("Region: " + $("#region").val());
    //$('#titulo').text("Hola");
    console.log("Cambio");
  });