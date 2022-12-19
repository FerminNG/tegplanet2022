$(document).ready(function(){
    var btnModal = $("#abrirModal");
    var btnCerrarModal = $("#cerrarModalCarr");
    var banelModal = $(".modalConten");
    btnModal.click(function(){
        banelModal.addClass("mostrarModal");
    });
    btnCerrarModal.click(function(){
        banelModal.removeClass("mostrarModal");
    });
});