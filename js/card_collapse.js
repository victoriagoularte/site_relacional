var h = $('card')[0].scrollHeight;


$('#more').click(function(e) {
    e.stopPropagation();
    $('card').animate({
        'height': h
    })
});

$(document).click(function() {
    $('card').animate({
        'height': '50px'
    })
})