var $j = jQuery.noConflict();

function loopTwitter(data, count) {
    
    var total = data.length - 1;

    $j("#twitter-text").html(data[count]);
    $j("#twitter-text").fadeIn(300).delay(4000).fadeOut(300, function() {

        var next = count + 1;
        if (total == count) {
            next = 1;
        }
        
        loopTwitter(data, next);

    });
}


$j(function(){
    
    $j.getJSON( "/twitter/api.php", function( data ) {
        loopTwitter(data, 1);
    });
});