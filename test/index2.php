<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .alfabetBox {
        display: none;
    }
</style>

<body>
    <label><input type="radio" name="alfabet" value="A"> Option-A | </label>
    <label><input type="radio" name="alfabet" value="B"> Option-B | </label>
    <label><input type="radio" name="alfabet" value="C"> Option-C | </label>
    <label><input type="radio" name="alfabet" value="D"> Option-D | </label>
    <label><input type="radio" name="alfabet" value="none">None</label>

    
    <div class="A alfabetBox"><strong>A DIV</strong><br />On click A radio button show DIV A</div>
    <div class="B alfabetBox"><strong>B DIV</strong><br />On click B radio button show DIV B</div>
    <div class="C alfabetBox"><strong>C DIV</strong><br />On click C radio button show DIV C</div>
    <div class="D alfabetBox"><strong>D DIV</strong><br />On click D radio button show DIV D</div>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".alfabet").not(targetBox).hide();
            $(targetBox).show();
        });
    });
</script>