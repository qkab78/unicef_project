<?php
/**
 * Created by PhpStorm.
 * User: Quentin
 * Date: 01/02/2017
 * Time: 15:52
 */

?>

<html>
    <head>
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    </head>
    <body>
        <h2>AJAX TEST</h2>
        <h3>Output: </h3>
        <!--<input type="button" onclick="getDataWithAjax()" value="Get data with AJAX">-->
        <select name="users" onchange="getDataWithAjax(this.value)")>
            <option value="">Select a person:</option>
            <option value="1">Peter Griffin</option>
            <option value="2">Lois Griffin</option>
            <option value="3">Joseph Swanson</option>
        </select>

        <script>
            function getDataWithAjax(str) {
                console.log("Début de la fonction ajax !");

                /*if (str == ""){
                    document.getElementById("antenneAjax").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest){
                    var xmlObject = new XMLHttpRequest();
                }else {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlObject.onreadystatechange = function () {
                    if(this.readyState == 4 && this.status == 200){
                        //document.getElementById("antenneAjax").innerHTML = this.responseText;
                        document.getElementById("antenneAjax").innerHTML = this.responseText.valueOf();
                    }
                }
                xmlObject.open("GET", "getAntennes.php?q="+str, true);
                xmlObject.send();*/
                $.ajax({
                    url: 'getAntennes.php',
                    data: "",
                    dataType: 'json',
                    success: function (data) {
                        alert("success");
                        /*var id = data[0];
                        var firstname = data[1];

                        $('#antenneAjax').html("<b>id: <b/>"+id+ " <b>firstname: <b/>"+firstname);
                        console.log("Ajax OK !");*/
                    },
                    error: function (e) {
                        //called when there is an error
                        alert("failed: "+ e.toString());
                    }
                })
            }
        </script>
        <div id="antenneAjax"></div>
    </body>
</html>
