$(document).ready(function(){
    $("#login").modal();
});

function sendPassword(e) {
    e.preventDefault();
    const password = $('input[type=password]')[0].value;

    $.ajax({
        url: 'ecrire/login.php',
        type: 'post',
        data: {password: password},
        datatype: 'json',
        async: false,
        cache: false,
    })
    .done(function( rsp ) {
        var response = rsp && JSON.parse(rsp);
        if (response && response.status === 200) {
            $("#login").modal('hide');
            $("#dialog").show().draggable({
                handle: ".modal-header"
            });
            setEditor();
        } else {
            $(successMessage).html(response.message).removeClass("alert-success").addClass("alert-warning").appendTo( ".modal-body" );
        }
    });
}
