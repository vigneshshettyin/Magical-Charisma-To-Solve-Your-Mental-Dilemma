(function () {
    var options = {
      whatsapp: "#", // WhatsApp number
      email: "#", // Email
      facebook: "#", // Facebook
      telegram: "#", // Telegram
      instagram: "#", // instagram
      call_to_action: "Hey, We are Online!!", // Call to action
      button_color: "#F9A826", // Color of button
      position: "left", // Position may be 'right' or 'left'
      order: "email,whatsapp,facebook,instagram,telegram", // Order of buttons
    };
    var proto = document.location.protocol,
      host = "getbutton.io",
      url = proto + "//static." + host;
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url + '/widget-send-button/js/init.js';
    s.onload = function () {
      WhWidgetSendButton.init(host, proto, options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
  })();

var message="Right Click Disabled!";

function clickIE4(){
if (event.button==2){
alert(message);
return false;
 }
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")