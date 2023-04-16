<script>

    function setGender(){
        var g = document.getElementsByName("gender");
        // console.log("fgh")
        var a = "";
        // console.log(g)
        for(var i = 0 ; i < g.length ; i++){
            if(g[i].checked){
                // a += g[i].value;
                a = g[i].value;
            }
        }
        var xml = new XMLHttpRequest();
        xml.open("GET","5_1.php?gender="+a,true)
        xml.onreadystatechange = function(){
            if(this.readyState === 4 && this.status === 200){
                document.getElementById("d1").innerHTML = this.responseText;
                // console.log(this.responseText)
            }
        }
        
        xml.send();
    }

    function setHobby(){
        var check = document.getElementsByName("s");
        var b = "";
        for(var i = 0 ; i < check.length ; i++){
            if(check[i].checked){
                b += " " + check[i].value;
            }
        }
        var xml1 = new XMLHttpRequest()
        xml1.onreadystatechange = function(){
            if(this.status === 200 && this.readyState === 4){
                document.getElementById("d2").innerHTML = this.responseText;
            }
        }
        xml1.open("GET","5_1.php?hobby="+b,true)
        xml1.send();
    }



</script>


<form>

    <input type="radio" name="gender" value="male" onchange="setGender()">male
    <input type="radio" name="gender" value="female" onchange="setGender()">female
    <div id="d1"></div>

    <input type="checkbox" name="s" value="cricket" onclick="setHobby()">Cricket
    <input type="checkbox" name="s" value="football" onclick="setHobby()">Foot Ball
    <input type="checkbox" name="s" value="hockey" onclick="setHobby()">Hockey
    <input type="checkbox" name="s" value="volly ball" onclick="setHobby()">Volly Ball
    <div id="d2"></div>
</form>