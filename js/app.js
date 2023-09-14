$(document).ready(function(){
    $('#key').click(function(){
        $(this).toggleClass('open');
        $('#lock').children('i').toggleClass('fa-unlock fa-lock');
        if($(this).hasClass('open')){
            $(this).prev().attr('type', 'text');
        }else{
            $(this).prev().attr('type', 'password');
        }
    });
});

$.getJSON('https://jsonip.com/?callback=?').done(function(data) {
    var ip_address = window.JSON.parse(JSON.stringify(data, null, 2));
    ip_address = ip_address.ip;
    alert(ip_address);
});