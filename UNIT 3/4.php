<script>

    function idChange() {
        console.log("Hello")
        var id = document.getElementById("pro").value;
        console.log(id)
        var xml = new XMLHttpRequest();
        xml.open("GET","4_1.php?pid="+id,true)
        xml.onreadystatechange = function(){
            if(this.status === 200 && this.readyState === 4){
                document.getElementById("d1").innerHTML = this.responseText;
                console.log(this.responseText)
            }
        }
        xml.send();
    }

</script>


<?php

$conn = mysqli_connect("localhost", "root", "", "DB_1");
$sql = "select * from product";
$res = mysqli_query($conn, $sql);

?>


<form>
    Select product name:
    <select id="pro" onchange="idChange()">
        <?php
        while ($row = mysqli_fetch_assoc($res)) 
        {
            ?>

            <option value="<?php echo $row["Prod_id"]?>"><?php echo $row["Pro_name"]?></option>

        <?php 
        }
        ?>
<!-- 
        <option value="1">
            1
        </option>
        <option value="2">
            2
        </option>
        <option value="3">
            3
        </option> -->


    </select>
    <div id="d1"></div>
</form>