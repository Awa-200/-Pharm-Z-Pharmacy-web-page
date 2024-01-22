function addToWatchlist(id){
    var r =new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t = r.responseText;
            alert (t);
        }
    } 

    r.open("GET","addToCartProcess.php?id="+id,true);
    r.send();
}

function deleteFromCart(id){
    var  r = new XMLHttpRequest();

    r.onreadystatechange = function (){
        if(r.readyState == 4){
            var t = r.responseText;

            if(t == "Product has been removed"){
                alert (t);
                window.location.reload();
            }else{
                alert (t);
            }
        }
    }

    r.open("GET","removeCartProcess.php?id="+id,true);
    r.send();
}

function submit1(){


    var uname = document.getElementById("uname").value;
    var password = document.getElementById("pass").value;
    var email = document.getElementById("mail").value;
  
   

    var f = new FormData();
    f.append("un",uname);
    f.append("pw",password);
    f.append("em",email);
  

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

    r.open("POST","signUpProcess.php",true);
    r.send(f);
    
}

