function func(){
    a=document.getElementById("input").value;
    document.getElementById("div").innerHTML=" ";
    for(i=1;i<=a;i++){
        document.getElementById("div").innerHTML+="*".repeat(i);
        document.getElementById("div").innerHTML+="<br>";
    }
}