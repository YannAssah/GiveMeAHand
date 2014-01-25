$(document).ready(function(){
    setInterval(chargerNews,5000);
});

var dernier_id;
function setId(id){
    dernier_id = id;
}

function chargerNews(){
    jQuery.ajax({
        url: 'news.php?id='+dernier_id,
        success: function(data){
            if(data!=''){
                $(data).prependTo('#actus').hide().animate({'height':'toggle','opacity':'toggle'},2000);
                $('#actus li:last-child').animate({'height':'toggle','opacity':'toggle'},2000,function(){
                    $(this).remove();
                });
            }
        }
    });
}