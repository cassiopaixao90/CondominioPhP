$(document).ready(function() {

  $('#btnDelete').click(function() { 
  	var publicacao = $(this).attr("class");
  	alert(publicacao);
    bootbox.dialog({
        message: "confirmar",
        title: "teste",
        buttons: {
            success: {
                label: "Sim",
                className: "btn btn-primary",
                callback: function () {
                    updateNotice();
                }
            },
            danger: {
                label: "Não",
                className: "btn btn-secondary",
                callback: function () {
                     
                }
            }
        }
    });
  });
});

function updateNotice(){

}