function submit23(){

    var fname = document.getElementById("fname").value;
    var password = document.getElementById("pwd").value;
    var email = document.getElementById("email").value;

    var u = new FormData();
    u.append("fn",fname);
    u.append("pwd",password);
    u.append("email",email);

    var  r = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t = r.responseText;

            if(t == "1"){
                alert ("inserted");
                
            }else{
                alert (t);
            }
        }
    }

    r.open("POST","usersignUp.php",true);
    r.send(u);
    
}