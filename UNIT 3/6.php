<script>
    function call(){
        var x = document.getElementById("str").value;
        var xml = new XMLHttpRequest();
        xml.onreadystatechange= function(){
            if(this.status == 200 && this.readyState == 4){
                document.getElementById("d1").innerHTML = this.responseText;
            }
        }
        xml.open("GET","6_1.php?str="+x,true);
        xml.send();
    }
</script>



String
<input type="text" id="str" onkeyup="call()">
<div id="d1">

</div>