<script>
    function loadDoc()
    {
        var xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function(){
            if(this.readyState==4&&this.status==200)
            {
                document.getElementById("demo").innerHTML=this.responseText;
            }
        }
        xhttp.open("POST","9_1.php",true);
        xhttp.send();
    }
</script>
    
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Request Data</button>
<p id="demo"></p>
