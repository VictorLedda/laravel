$(document).ready(function() {
    $("a.song").click(function(e) {
         e.preventDefault();
         var audio = $('#audio')[0]
         audio.src =  $(this).attr('data-file')
         audio.play();
    })
})

$(document).ready(function(){
    $('#searchdiv').hide();

    $('#search').click(function(){
        $('#searchdiv').slideToggle();
    })

    $("#formsearch").submit(function(e) {
        e.preventDefault();
        let s = e.target.elements[0].value;
        window.location.href = '/search/'+ s;
    })
})