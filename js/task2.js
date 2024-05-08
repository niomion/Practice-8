$(document).ready(function(){
    $(".loading3").slideUp(200);

    $('.formg').submit(function(event){
        $(".loading33").slideDown(200);
        event.preventDefault();
        setTimeout(function() {
        let firstData = $('input[name=first]').val();
        let secondData = $('input[name=second]').val();
        $.ajax({
            type: 'GET',
            url: 'data.php',
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
    $(".loading33").slideDown(200);
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