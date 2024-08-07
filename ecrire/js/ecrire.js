function setEditor() {
    var path = window.location.pathname;
    var page = path.split("/").pop() !== "" ? path.split("/").pop() : "index";

    var list = document.getElementsByClassName('mutant');
    for (var block of list) {
        block.isContentEditable;
        block.contentEditable = true;
    }

    $('#savebtn').click(function(){
        var list = document.getElementsByClassName('mutant');
        var i=0;
        for (var block of list) { // TODO async Foreach
            i++;
            var content = block.innerHTML;
            var className = block.className.includes("content-") ? block.className.split("content-").pop().split(" ").shift() : i.toString();
            var fileName = page + "-" + className;
            var successMessage = '<div class="mt-3 alert alert-success alert-dismissible show" role="alert">'+fileName+' enregistré<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>';

            $.ajax({
                url: 'ecrire/buvard.php',
                type: 'post',
                async: false,
                data: {fileName: fileName, content: content },
                datatype: 'json'
            })
            .done(function( rsp ) {
                var response = rsp && JSON.parse(rsp);
                if (response && response.status === 200) {
                    $(successMessage).appendTo( ".modal-body" );
                } else {
                    $(successMessage).html(response.message).removeClass("alert-success").addClass("alert-warning").appendTo( ".modal-body" );
                }
            });
        }
    });
    $(window).on('scroll', function () {
        var scrollTop = $(window).scrollTop(),
            upOffset = ($('#dialog').offset().top - scrollTop);
        if (upOffset < 0)
            $('#dialog').css("top", scrollTop - 30);

        var downOffset = scrollTop + $(window).height() - $('#dialog').offset().top,
            heightBox = $('#dialog').height(),
            scrollDown = scrollTop + $(window).height() - heightBox;
        if (downOffset < heightBox)
            $('#dialog').css("top", scrollDown - 30);
    });
}

function closeEditor() {
            $.ajax({
                url: 'ecrire/logout.php',
                type: 'post',
                data: {log: "off"},
                datatype: 'json',
                async: false,
                cache: false,
            })
            .done(function( rsp ) {
                var response = rsp && JSON.parse(rsp);
                if (response && response.status === 200) {
                    $("#dialog").hide();
                } else {
                    $(successMessage).html(response.message).removeClass("alert-success").addClass("alert-warning").appendTo( ".modal-body" );
                }
            });
}

function createLink() {
    var url = document.getElementById("url").value;
    document.execCommand("CreateLink", false, url);
}

function boldText() {
    var selected = document.getSelection();
    document.execCommand("insertHTML",false,"<b>"+selected+"</b>");
}

function italicText() {
    var selected = document.getSelection();
    document.execCommand("insertHTML",false,"<i>"+selected+"</i>");
}
