function check_login() {
    var XHRobj;
    if (window.XMLHttpRequest) {
        XHRobj = new XMLHttpRequest(); 
    } else {
         XHRobj = new ActiveXObject("Microsoft.XMLHTTP");
    }

    var str1 = "t1=" + document.getElementById("t1").value;
    var str2 = "&t2=" + document.getElementById("t2").value;
  
    
    XHRobj.onreadystatechange = function() {
        if (XHRobj.readyState == 4 && XHRobj.status == 200) {
            document.getElementById('txt').innerHTML = XHRobj.responseText;
        }
    };

    XHRobj.open('POST', 'login.php', true);
    XHRobj.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    XHRobj.send(str1 + str2);                
}
