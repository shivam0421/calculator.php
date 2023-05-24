<html>
<head>
<script>
function calcu(n)
{
document.getElementById("t").value+=n;
}
function clr()
{
document.getElementById("t").value="";
}
</script>
<style>
#first
{
background-color:rgb(128,128,128);
width:100%;
height:100%;
margin-left:00px;
padding-left:60px;
padding-top:30px;
border-radius:20px 20px 20px 20px;
box-shadow:2px 2px 10px 2px;
}
#second
{
background-color:rgb(96,96,96);
width:550px;
height:555px;
margin-left:350px;
padding-left:50px;
padding-top:25px;
border-radius:20px 20px 20px 20px;
box-shadow:2px 2px 10px 2px;
}
#third
{
background-color:rgb(64,64,64);
width:450px;
height:500px;
padding-left:50px;
border-radius:20px 20px 20px 20px;
box-shadow:2px 2px 10px 2px;
}
</style>
</head>
<body>
<div id="first">
 <div id="second">
  <div id="third">
<p style="color:rgb(0,0,204);font-size:20px;text-shadow:2px 4px 2px black;letter-spacing:1px;">calculator</p>
<form name="f1">
<input type="text" id="t"style="color:rgb(0,255,0);letter-spacing:2px;background-color:rgb(51,0,0);border-radius:4px;height:50px;width:417px;font-size:30px;"></input><br><br>
<input type="button" value="7" id="t1" onclick="calcu(7);" style="border:1px solid #404040;;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:6px 0px 0px 0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="8" id="t2" onclick="calcu(8);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px 0px 0px 0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="9" id="t3" onclick="calcu(9);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px 0px 0px 0px;text-shadow:2px 2px 4px blue;"></input>
<input type="button" value="c" id="cancel"onclick="clr()" style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px 6px 0px 0px;text-shadow:2px 2px 4px blue;"></input><br> 
<input type="button" value="4" id="t4" onclick="calcu(4);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px 0px 0px 0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="5" id="t5" onclick="calcu(5);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px 0px 0px 0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="6" id="t6" onclick="calcu(6);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input>
<input type="button" value="x^y" id="square"onclick="sqrt()" style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input><br> 
<input type="button" value="1" id="t7" onclick="calcu(1);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="2" id="t8" onclick="calcu(2);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="3" id="t9" onclick="calcu(3);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input>
<input type="button" value="rt" id="root"onclick="clr()" style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input><br> 
<input type="button" value="0" id="t10"onclick="calcu(0);"style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input>
<input type="button" value="." id="t15"onclick=calcu(".") style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="/" id="t11"onclick=calcu("/") style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input>
<input type="button" value="<-" id="<--"onclick="backspace()" style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input><br> 
<input type="button" value="*" id="t12"onclick=calcu("*") style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="-" id="t13"onclick=calcu("-") style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input> 
<input type="button" value="+" id="t14"onclick=calcu("+") style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input>
<input type="button" value=" " id="cancel"onclick="clr()" style="border:1px solid #404040;background-color:rgb(32,32,32);width:102px;height:62px;font-size:26px;border-radius:0px;text-shadow:2px 2px 4px blue;"></input><br>
<input type="button" value="=" id="t16"onclick="f1.t.value=eval(f1.t.value);" style="border:1px solid #404040;background-color:rgb(32,32,32);width:419px;height:42px;border-radius:6px;text-shadow:2px 2px 4px blue;"></input> 
  </div>
  <P style="font-size:24px;color:rgb(32,32,32);letter-spacing:1px;text-shadow:2px 3px 2px blue;"><b><i>Shivam</i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><b><i>Chauhan</i></p>
 </div>
</div>
</form>
</body>
</html>