var http = require('http');

/*
@Name: Xat Set Scroller
@Tutorial: http://util.xat.com/wiki/index.php?title=SetScroller
@Author: xLaming
@Version: 1.0
*/

var url     = "http://xat.com/web_gear/chat/SetScroller.php";
var id      = "123456"; // Chat ID
var pw      = "0123456789"; // Chat PW
var message = "Hello%20all"; // Message

http.get(url + "?Message=" + message + "&id=" + id + "&pw=" + pw, function(response) {
  response.on('data', function (read) {
    console.log("Result: " + read);
  });
});
