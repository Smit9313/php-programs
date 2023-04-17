<script>
    function call() {
        var id = document.getElementById("sid").value;
        var nm = document.getElementById("sname").value;
        var mo = document.getElementById("mob").value;
        var co = document.getElementById("con").value;



        var h = new XMLHttpRequest();
        h.onreadystatechange = function () {
            if (this.status == 200 && this.readyState == 4) {
                document.getElementById("d1").innerHTML = this.responseText;
            }
        }
        h.open("GET", "8_1.php?sid=" + id + "&sname=" + nm + "&mob=" + mo + "&con=" + co, true);
        h.send();
    }
</script>

<form>
    ID:<input type="number" id="sid" onkeyup="call()"><br>
    Name:<input type="text" id="sname"><br>
    Mobile No:<input type="text" id="mob"><br>
    Country:<input type="text" id="con"><br>
    <input type="submit" onclick="call()">
    <div id="d1"></div>
</form>