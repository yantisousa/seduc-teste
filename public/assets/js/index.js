// $('#excluir').click(function(){
// excluir();
// })
function excluir(id) {

    $.ajax({
        url: '/destroy/' + id,
        type: 'get',
        success: function () {
            $('#modal-warning').modal('hide');
            location.reload();
        }
    });

}
