$(document).ready(function(){
    $(".loadingm").slideUp(200);
});

function Change(page) {
    $(".loading").slideDown(200);
    setTimeout(function() {
        $.ajax({
            url: page,
            method: "GET", 
            data: { word: "This was sent by GET" },
            dataType: "html",
            success: function(response) {
                $("body").html(response);
            }
        });
    }, 200);
};