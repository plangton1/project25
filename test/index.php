<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="UTF-8">
    <title>Title</title>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../static/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../static/js/bootstrap.js"></script>
</head>

<body>


            <label class="control-label"><b>วาระ : </b>
                &ensp;<input id="rati0" value="1" type="radio" onclick="fnc_free(1)" name="radio" readonly>
            </label>
            <input type="text" id="a1" name="#" autocomplete="off" class="form-control" multiple readonly>
            <input type="text" id="a2" name="#" autocomplete="off" class="form-control" multiple readonly>
     

            <label class="control-label"><b>หนังสือ </b></label>
            &ensp;<input type="radio" onclick="fnc_free(2)" name="radio">

                <input id="a3" type="date" name="#" autocomplete="off" class="form-control" multiple readonly>
                <input id="a4" type="date" name="#" autocomplete="off" class="form-control" multiple readonly>
        


        
                <label class="control-label"><b>ราชกิจจา </b></label>
                &ensp;<input type="radio" onclick="fnc_free(3)" name="radio">

                    <input id="a5" type="text" name="#" autocomplete="off" class="form-control" multiple readonly>
                </div>

                    <input id="a6" type="text" name="#" autocomplete="off" class="form-control" multiple readonly>
                </div>
           



</body>

</html>
<script>
    function fnc_free($data) {
        if ($data == "1") {
            document.getElementById("a1").readOnly = false;
            document.getElementById("a2").readOnly = false;
            document.getElementById("a3").readOnly = true;
            document.getElementById("a4").readOnly = true;
            document.getElementById("a5").readOnly = true;
            document.getElementById("a6").readOnly = true;
        } else if ($data == "2") {
            document.getElementById("a1").readOnly = true;
            document.getElementById("a2").readOnly = true;
            document.getElementById("a3").readOnly = false;
            document.getElementById("a4").readOnly = false;
            document.getElementById("a5").readOnly = true;
            document.getElementById("a6").readOnly = true;
        } else if ($data == "3") {
            document.getElementById("a1").readOnly = true;
            document.getElementById("a2").readOnly = true;
            document.getElementById("a3").readOnly = true;
            document.getElementById("a4").readOnly = true;
            document.getElementById("a5").readOnly = false;
            document.getElementById("a6").readOnly = false;
        }
    }
</script>