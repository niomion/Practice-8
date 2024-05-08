$(document).ready(function(){
    $(".loading5").slideUp(200);

    $('.formg').submit(function(event){
        $(".loading55").slideDown(200);
        event.preventDefault();
        setTimeout(function() {
        let firstData = $('input[name=first]').val();
        let secondData = $('input[name=second]').val();
        $.ajax({
            type: 'POST',
            url: 'data3.php',
            data: {
                first: firstData,
                second: secondData,
            },
            success: function(response){
                $("body").html(response);
            }
        });
    }, 200);
    });
});

function Change(page) {
    $(".loading55").slideDown(200);
    setTimeout(function() {
        $.ajax({
            url: page,
            dataType: "html",
            success: function(response) {
                $("body").html(response);
            }
        });
    }, 200);
};
