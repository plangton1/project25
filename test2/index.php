<script>
function hiddenn(show) {
	 if(show==0){
		document.getElementById("txt1").style.display = 'none';
		document.getElementById("txt11").style.display ='none';
		document.getElementById("txt2").style.display = 'none';
		document.getElementById("txt3").style.display = 'none';
	}else if(show==1){
		document.getElementById("txt1").style.display = '';
		document.getElementById("txt11").style.display = '';
		document.getElementById("txt2").style.display = 'none';
		document.getElementById("txt3").style.display = 'none'; 
	}else if(show==2){
		document.getElementById("txt1").style.display = 'none';
		document.getElementById("txt11").style.display = 'none';
		document.getElementById("txt2").style.display = '';
		document.getElementById("txt3").style.display = 'none';
   }else if(show==3){
		document.getElementById("txt1").style.display = 'none';
		document.getElementById("txt11").style.display = 'none';
		document.getElementById("txt2").style.display = 'none';
		document.getElementById("txt3").style.display = '';
   }
   }
	
</script>
<body onload="hiddenn('0')">
<form>
<input type="radio" onclick="hiddenn('1')" /> ประชุม<br />
<input  type="text" name="#" id="txt1" /> <br>
<input  type="text" name="#" id="txt11" /> <br>
<input type="radio" name="#"   onclick="hiddenn('2')" /> จดหมาย<br>
<input  type="text" name="#" id="txt2" /> <br>
<input type="radio" name="#"   onclick="hiddenn('3')" /> ราชกิจจา<br>
<input  type="text" name="#" id="txt3" /> <br>

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://รับเขียนโปรแกรม.net/picker_date/picker_date.js"></script>
<script>
    picker_date(document.getElementById("txt1"), {
        year_range: "-12:+10"
    });
	picker_date(document.getElementById("txt2"), {
        year_range: "-12:+10"
    });
	picker_date(document.getElementById("txt3"), {
        year_range: "-12:+10"
    });
</script>