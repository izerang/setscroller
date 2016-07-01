import urllib2

'''
@Name: Xat Set Scroller
@Tutorial: http://util.xat.com/wiki/index.php?title=SetScroller
@Author: xLaming
@Version: 1.0
'''

url     = "http://xat.com/web_gear/chat/SetScroller.php"
id      = "123456" # Chat ID
pw      = "0123456789" # Chat PW
message = "Hello%20all" # Message

content = urllib2.urlopen(url + "?Message=" + message + "&id=" + id + "&pw=" + pw).read()
print(content)
