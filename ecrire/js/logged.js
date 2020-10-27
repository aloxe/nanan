$(document).ready(function(){
    console.log("logged");
    $("#dialog").show().draggable({
        handle: ".modal-header"
    });
    setEditor();
});
