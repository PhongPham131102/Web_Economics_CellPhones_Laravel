function cong(){
    var t = document.getElementById("textBox").value;
        document.getElementById("textBox").value = parseInt(t) +1;
}
function tru(){
    var t = document.getElementById("textBox").value;
        if(t > 1){
            document.getElementById("textBox").value = parseInt(t) -1;
        } 
}

