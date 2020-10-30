<html>
<script>
function copy() {
  let textarea = document.getElementById("textarea");
  textarea.select();
  document.execCommand("copy");
}
</script>
<style>
input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: -5px 2px;
  cursor: pointer;
     margin: 100px 0;
	 font-size:24px;
	   font-family: 'Pacifico', cursive;


}
input:hover [type=button], input:hover[type=submit], input[type=reset] {
	
			box-shadow: 0 16px 16px 0 rgba(20,255,255,0.24),0 23px 50px 0 rgba(0,0,0,0.19);

}
input[type=x] {
	    width: 70%;
 padding: 10px 22px;
 margin: 10px 5px;
 box-sizing: border-box; 
 box-shadow: 0 5px 16px 0 rgba(80,2,255,255.20),0 20px 50px 0 rgba(255,20,90,80.19);
 font-size: 35px;
}
input[type=x1] {
	    width: 70%;
 padding: 15px 22px;
 margin: 20px 5px;
 box-sizing: border-box; 
  font-size: 35px;
  box-shadow: 0 5px 16px 0 rgba(80,255,0,255.20),0 20px 50px 0 rgba(255,20,90,80.19);
}
p {
	  font-family: 'Pacifico', cursive;
color :red;
font-size:24px;
}
button {
	  background-color: red;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 2px 2px;
  cursor: pointer;
     margin: 100px 0;
	 font-size:24px;
	   font-family: 'Pacifico', cursive;
}
button:hover {
		box-shadow: 0 16px 16px 0 rgba(20,255,255,0.24),0 23px 50px 0 rgba(0,0,0,0.19);

}
textarea {
	font-size:50px;
			box-shadow: 0 16px 16px 0 rgba(20,255,255,0.24),0 23px 50px 0 rgba(0,0,0,0.19);
			 margin: -50	px 2px;
}
</style>
<title>Base64 converter</title>
<center>
<form action="" method="GET">
<p>Base64 converter - Encode : </p>
<input id="lol" name="lol" type="x"/>
<br>
<p>Base64 converter - Decode : </p>
<input id="lel" name="lel" type="x1"/>
<br> <br><input type="submit" value="FUCK">
<button onclick="copy()">Copy</button>
</form>
<h1> C.R.Y.B.I.K </h1>
<p> Discord : Crybik#0977 </p>
</html>
<?php
$xo = $_GET['lol'];
$xe = $_GET ['lel'];
$mm = base64_encode($xo);
$pp = ('<textarea id="textarea"/>');
echo "$pp$mm";
$mmdecode = base64_decode($xe);
echo "$mmdecode";
?>