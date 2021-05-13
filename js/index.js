var Index = function() {};

Index.prototype.setCookie = function(cookie_name, cookie_val) {
    document.cookie = '' + cookie_name + '=' + cookie_val + '';
    return true;
}

Index.prototype.getCookie = function(name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == name) {
            return y ? decodeURI(unescape(y.replace(/\+/g, ' '))) : y; //;//unescape(decodeURI(y));
        }
    }
}

Index.prototype.clearStateCookie = function() {
    $('#select_state_logout').click(function(e){
        e.preventDefault();
        obj_index.setCookie('ag_state','');
        location.reload();
    });
}

var obj_index = new Index;
$(function() {
    var obj_index = new Index;
    obj_index.clearStateCookie();
});