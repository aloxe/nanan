
$(document).ready(function () {

    var path = window.location.pathname;
    var page = path.split("/").pop() !== "" ? path.split("/").pop() : "index";

    var list = document.getElementsByClassName('mutant');
    for (var block of list) {
        var className = block.className.includes("content-") ? block.className.split("content-").pop().split(" ").shift() : i.toString();
        var fileName = page + "-" + className;

        $.ajax({
            url: 'memoire/'+fileName+'.json',
            type: 'post',
            data: 'id=up',
            datatype: 'json',
            async: false,
            cache: false,
            success: function(data){
                $(block).html(data);
            }
        })
        .fail({
            // website may not be up to date
        });
    }
});
