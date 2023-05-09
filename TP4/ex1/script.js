function funct(){
    a=document.getElementById("input").value;
    a1="";
    for(i in a){
        a1=a[i]+a1;
    }
    document.getElementById("h1").innerHTML=a1;
}