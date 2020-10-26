$(document).ready(function(){
    console.log("logged");
    $("#dialog").show().draggable({
        handle: ".modal-header"
    });
    setEditor();

    $(window).on('scroll', function () {
        var scrollTop = $(window).scrollTop(),
            upOffset = ($('#dialog').offset().top - scrollTop);
        if (upOffset < 0)
            $('#dialog').css("top", scrollTop);

        var downOffset = scrollTop + $(window).height() - $('#dialog').offset().top,
            heightBox = $('#dialog').height(),
            scrollDown = scrollTop + $(window).height() - heightBox;
        if (downOffset < heightBox)
            $('#dialog').css("top", scrollDown);
    });
});
