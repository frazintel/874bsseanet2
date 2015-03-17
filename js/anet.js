/**
 * Created by Mindhacker on 3/12/2015.
 */

function maximizeme(){ window.moveTo(0, 0); window.resizeTo(screen.width, screen.height) }


jQuery(function(){
$("a").bind( "click", function() {

    event.preventDefault();
    var content = $(this).attr('href');
if(content=="#") {

} else{



    $('#content').empty();
    $('#content').hide();
    $('#content').load(content,function(){
        $("#content").fadeIn("slow");
    });}
});
}

);

