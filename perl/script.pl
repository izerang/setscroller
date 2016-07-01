use WWW::Mechanize;

=SetScroller
@Name: Xat Set Scroller
@Tutorial: http://util.xat.com/wiki/index.php?title=SetScroller
@Author: xLaming
@Version: 1.0
=cut

$url     = "http://xat.com/web_gear/chat/SetScroller.php";
$id      = "123456"; # Chat ID
$pw      = "0123456789"; # Chat PW
$message = "Hello%20all"; # Message

my $www = WWW::Mechanize->new();
$www->get("$url?Message=$message&id=$id&pw=$pw");
print $www->content();
