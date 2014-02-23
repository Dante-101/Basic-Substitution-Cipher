<html>
<head>
	<title> Substitution Cipher</title>
</head>
<body>
<h1> Substitution Cipher </h1>
This site illustrates Substitution Cipher. You can encrypt/decrypt text. Use alphabets only as an input.
The Encryption/Decryption Logic is implemented in python. You can download the code <a href="cs416.tar.gz">here</a>
<h2> Encryption using Substitution Cipher</h2>
<form name="subst" id="subst" method="post" action="index.php?op=enc">
<table border="0">
<tr>
<td>
Plain Text : 
</td>
<td>
<textarea name="plain" id="plain" rows="5" cols="50">
<?php
if($_GET['op']=="enc"){
	echo $_POST['plain'];
}
?>
</textarea>
</td></tr>
<tr>
<td>
Key : 
</td><td>
<select name="key" id="key" /> 
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
</select>
</td>
</tr>
<tr>
<td>
Cipher Text : 
</td><td>
<textarea name="cipher" id="cipher" rows="5" cols="50">
<?php
if($_GET['op']=="enc"){
	$pt=$_POST['plain'];
	$k=$_POST['key'];
	$cmd="python sub.py -e -p $pt -k $k";
	$str=exec($cmd);
	echo "$str"; 
}
?>
</textarea>
</td></tr>
<tr>
<td>
<input type="submit" value="Encrypt" />
</td></tr></table>
</form>



<h2> Decryption using Substitution Cipher
<form name="decr" id="decr" method="post" action="index.php?op=dec">
<table border="0">
<tr>
<td>
Plain Text : 
</td>
<td>
<textarea name="cipher" id="cipher" rows="5" cols="50">
<?php
if($_GET['op']=="dec"){
	echo $_POST['cipher'];
}
?>
</textarea>
</td></tr>
<tr>
<td>
Key : 
</td><td>
<select name="ky" id="ky" /> 
<option>0</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
</select>
</td>
</tr>
<tr>
<td>
Cipher Text : 
</td><td>
<textarea name="plain" id="plain" rows="5" cols="50">
<?php
if($_GET['op']=="dec"){
	$pt=$_POST['cipher'];
	$k=$_POST['ky'];
	$cmd="python sub.py -d -p $pt -k $k";
	$str=exec($cmd);
	echo "$str"; 
}
?>
</textarea>
</td></tr>
<tr>
<td>
<input type="submit" value="Decrypt" />
</td></tr></table>
</form>




</body>
</html>
