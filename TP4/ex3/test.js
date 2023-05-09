function func(){
    a=parseInt(document.getElementById("input").value);
    b="";
    for(let i=1;i<=10;i++){
        b=b+a+"*"+i+"="+a*i+"<br>";
    }
    document.getElementById("div").innerHTML=b;
}