<html>
<head>
<title>Form</title>
<style type="text/css">

table{
  border-style: solid;
    border-width: 3px;
    text-align: left;
    border-color: black;
    margin: auto;
    padding: 50px;
}


h3{
  text-align: center;
}
</style>
<script type="text/javascript">


function clearform()
{
  document.myform.address.value="";
  document.myform.city.value="";
  document.myform.state.selectedIndex=0;
  document.getElementById("far").checked=true;
  document.getElementById("cel").checked=false;
  document.getElementById("tabs").innerHTML="";
}

//checks the contents of the form for validation

function checkform(){

var blank="";
var re=/^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$/;

var testtext=/^\s*$/;


if (document.myform.address.value==blank && document.myform.city.value==blank && document.myform.state.options[document.myform.state.selectedIndex].value=="blank"){
alert("Please enter value for \n \n Address : \n City : \n State : ");
return false;
}

else if(document.myform.address.value==blank && document.myform.city.value==blank){
  alert("Please enter value for \n Address : \n City :");
}

else if(document.myform.city.value==blank && document.myform.state.options[document.myform.state.selectedIndex].value=="blank"){
  alert("Please enter value for \n City : \n State :");
}

else if(document.myform.address.value==blank && document.myform.state.options[document.myform.state.selectedIndex].value=="blank"){
  alert("Please enter value for \n address : \n State :");
}

else if (document.myform.address.value==blank){
alert("Please enter value for Address");
return false;
}

else if (document.myform.state.options[document.myform.state.selectedIndex].value=="blank"){
alert("Please enter value for State");
return false;
}

else if((testtext.test(document.myform.address.value)))
{
alert("Bad Address values being shown as retuned from Geocode");
return false;
}

else if(document.myform.city.value==blank){
alert("Please enter value for City");
return false;
}

else if((testtext.test(document.myform.city.value)))
{
alert("Bad Address values being shown as retuned from Geocode");
return false;
}

else if(!(re.test(document.myform.city.value)))
{
alert("Please enter a valid city name");
return false;
}

}

  
</script>

<script type="text/javascript">
  document.getElementById('state').selected.value = "<?php echo $_POST['state'];?>";
</script>

</head>

<body>
<h3> Forecast Search </h3>




<table>
	<th>
		<ul>
<form method="POST" action="" id="myform" name="myform">

<pre>Street Address :* <input type="text" name="address" value="<?php if(isset($_POST["address"])) echo $_POST["address"];?>">
  </pre> 
	
	<pre>City:*            <input type="text" name="city" value="<?php if(isset($_POST["city"])) echo $_POST["city"];?>">
	</pre> 


  <pre>State:*           <select name ="state" id ="state">
            <option value="blank">Please Select Your State</option>
            <option value="AL" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'AL')  echo 'selected' ; ?>>Alabama</option>
            <option value="AK" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'AK')  echo 'selected' ; ?>>Alaska</option>
            <option value="AZ" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'AZ')  echo 'selected' ; ?>>Arizona</option>
            <option value="AR" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'AR')  echo 'selected' ; ?>>Arkansas</option>
            <option value="CA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'CA')  echo 'selected' ; ?>>California</option>
            <option value="CO" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'CO')  echo 'selected' ; ?>>Colorado</option>
            <option value="CT" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'CT')  echo 'selected' ; ?>>Connecticut</option>
            <option value="DE" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'DE')  echo 'selected' ; ?>>Delaware</option>
            <option value="DC" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'DC')  echo 'selected' ; ?>>Dist of Columbia</option>
            <option value="FL" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'FL')  echo 'selected' ; ?>>Florida</option>
            <option value="GA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'GA')  echo 'selected' ; ?>>Georgia</option>
            <option value="HI" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'HI')  echo 'selected' ; ?>>Hawaii</option>
            <option value="ID" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'ID')  echo 'selected' ; ?>>Idaho</option>
            <option value="IL" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'IL')  echo 'selected' ; ?>>Illinois</option>
            <option value="IN" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'IN')  echo 'selected' ; ?>>Indiana</option>
            <option value="IA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'IA')  echo 'selected' ; ?>>Iowa</option>
            <option value="KS" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'KS')  echo 'selected' ; ?>>Kansas</option>
            <option value="KY" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'KY')  echo 'selected' ; ?>>Kentucky</option>
            <option value="LA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'LA')  echo 'selected' ; ?>>Louisiana</option>
            <option value="ME" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'ME')  echo 'selected' ; ?>>Maine</option>
            <option value="MD" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'MD')  echo 'selected' ; ?>>Maryland</option>
            <option value="MA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'MA')  echo 'selected' ; ?>>Massachusetts</option>
            <option value="MI" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'MI')  echo 'selected' ; ?>>Michigan</option>
            <option value="MN" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'MN')  echo 'selected' ; ?>>Minnesota</option>
            <option value="MS" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'MS')  echo 'selected' ; ?>>Mississippi</option>
            <option value="MO" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'MO')  echo 'selected' ; ?>>Missouri</option>
            <option value="MT" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'MT')  echo 'selected' ; ?>>Montana</option>
            <option value="NE" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'NE')  echo 'selected' ; ?>>Nebraska</option>
            <option value="NV" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'NV')  echo 'selected' ; ?>>Nevada</option>
            <option value="NH" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'NH')  echo 'selected' ; ?>>New Hampshire</option>
            <option value="NJ" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'NJ')  echo 'selected' ; ?>>New Jersey</option>
            <option value="NM" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'NM')  echo 'selected' ; ?>>New Mexico</option>
            <option value="NY" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'NY')  echo 'selected' ; ?>>New York</option>
            <option value="NC" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'NC')  echo 'selected' ; ?>>North Carolina</option>
            <option value="ND" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'ND')  echo 'selected' ; ?>>North Dakota</option>
            <option value="OH" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'OH')  echo 'selected' ; ?>>Ohio</option>
            <option value="OK" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'OK')  echo 'selected' ; ?>>Oklahoma</option>
            <option value="OR" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'OR')  echo 'selected' ; ?>>Oregon</option>
            <option value="PA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'PA')  echo 'selected' ; ?>>Pennsylvania</option>
            <option value="RI" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'RI')  echo 'selected' ; ?>>Rhode Island</option>
            <option value="SC" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'SC')  echo 'selected' ; ?>>South Carolina</option>
            <option value="SD" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'SD')  echo 'selected' ; ?>>South Dakota</option>
            <option value="TN" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'TN')  echo 'selected' ; ?>>Tennessee</option>
            <option value="TX" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'TX')  echo 'selected' ; ?>>Texas</option>
            <option value="UT" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'UT')  echo 'selected' ; ?>>Utah</option>
            <option value="VT" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'VT')  echo 'selected' ; ?>>Vermont</option>
            <option value="VA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'VA')  echo 'selected' ; ?>>Virginia</option>
            <option value="WA" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'WA')  echo 'selected' ; ?>>Washington</option>
            <option value="WV" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'WV')  echo 'selected' ; ?>>West Virginia</option>
            <option value="WI" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'WI')  echo 'selected' ; ?>>Wisconsin</option>
            <option value="WY" <?php if(isset($_POST['submit'])) if(($_POST['state']) == 'WY')  echo 'selected' ; ?>>Wyoming</option>
</select>
</pre>


<pre>

   <input type="radio" name="degree" id="far" value="fahrenheit" checked="checked" <?php if (isset($_POST['degree']) && $_POST['degree']=="fahrenheit") echo "checked";?>>Fahrenheit      <input type="radio" name="degree" id="cel" value="celsius" <?php if (isset($_POST['degree']) && $_POST['degree']=="celsius") echo "checked";?>>Celsius
</pre>

<pre>
         <input type="submit" name="submit" value="Submit" onclick="checkform()">   <input type="button" value="clear" onClick="clearform()">
<pre>
<p><i>       *_ Mandatory fields </i></p>
      <a href="http://www.forecast.io">Powered by Forecast.io</a>
</pre>

</form>
</th>
</ul>
</table>
<br>
<br>
</body>
</html>


<?php

ini_set('display_errors', 'Off');

if(isset($_POST['submit'])){

$street = $_POST["address"];
$cityname = $_POST["city"];
$statename = $_POST["state"];



if((!empty($_POST["address"])) && (!empty($_POST["city"])) && ($statename !="blank"))
{

$YOUR_API_KEY="AIzaSyBu2zR5g1feAivz76dshxbskkUFWJlBhHA";

$url="https://maps.google.com/maps/api/geocode/xml?address=".$street.",".$cityname.",".$statename."&key=".$YOUR_API_KEY;




$xml=simplexml_load_file("$url") or die("Error: Cannot create object");

$apikey="b171a1750d9efc9cc295c967cf4c235b";





if($_POST["degree"]=="fahrenheit"){
  $unit="us";
}
else{
  $unit="si";
}

//extract latitude and longitude for forecast.io

$latt=$xml->result->geometry[0]->location->lat;

$lon=$xml->result->geometry[0]->location->lng;

$lat=$xml->status[0];

if($lat!="OK"){
    echo "<script type='text/javascript'>alert('wrong address please enter the right address');</script>";
}

else{


$url2="https://api.forecast.io/forecast/".$apikey."/".$latt.",".$lon."?units=".$unit."&exclude=flags";



$cont=file_get_contents("$url2");

$json=json_decode($cont,true);

$currently=$json['currently'];

$summary=$currently['summary'];

$dewPoint=($currently['dewPoint']);

$humidity=$currently['humidity']*100;

$visibility=round($currently['visibility']);

$temp=round($currently['temperature']);

$iconmap=$currently['icon'];

$windSpeed=$currently['windSpeed'];

$daily=$json['daily'];

$data=$daily['data'];

$timezone=$json['timezone'];

date_default_timezone_set($timezone);

$time=$data[0];

$sunriseTime=date('h:i A',$time['sunriseTime']);

$sunsetTime=date('h:i A',$time['sunsetTime']);


//map the icon to images

if($iconmap=="partly-cloudy-night")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_night.png";
            }
            else if($iconmap=="clear-day")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/clear.png";
            }
            else if($iconmap=="partly-cloudy-day")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloud_day.png";
            }
            else if($iconmap=="rain")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/rain.png";
            }
             else if($iconmap=="clear-night")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/clear_night.png";
            }
            else if($iconmap=="snow")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/snow.png";
            }
            else if($iconmap=="sleet")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/sleet.png";
            }
            else if($iconmap=="cloudy")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/cloudy.png";
            }
            else if($iconmap=="wind")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/wind.png";
            }
            else if($iconmap=="fog")
            {
                $icon="http://cs-server.usc.edu:45678/hw/hw6/images/fog.png";
            }
          
//get precip intensity

if($unit=="us"){
$precipIntensity=$currently['precipIntensity'];
}
else{
 $precipIntensity=$currently['precipIntensity']/25.4; 
}



if($precipIntensity>=0 && $precipIntensity<0.002){
  $precip="None";
}
else if($precipIntensity>=0.002 && $precipIntensity<0.017){
  $precip="Very Light";
}
else if($precipIntensity>=0.017 && $precipIntensity<0.1){
  $precip="Light";
}
else if($precipIntensity>=0.1 && $precipIntensity<0.4){
  $precip="Moderate";
}
else if($precipIntensity>=0.4){
  $precip="Heavy";
}
else{
  $precip="Not Found";
}

//get precip probability
$precipProbability=$currently['precipProbability'];

//get chance of rain
$chancerain=$precipProbability*100;



//print the result in the table format

$strTable = "<div id=tabs>";
$strTable .= "<table border-color=black padding=50px>";

$strTable .= "<tr>";
$strTable .= "<td > </td>";
$strTable .= "<td style='text-align:center;'><b>".$summary."</b></td>";
$strTable .= "<td > </td>";
$strTable .= "</tr>";

$strTable .= "<tr>";
$strTable .= "<td > </td>";
$strTable .= "<td > </td>";
$strTable .= "<td > </td>";
$strTable .= "</tr>";

if($unit=="us"){
$strTable .= "<tr>";
$strTable .= "<td > </td>";
$strTable .= "<td style='text-align:center;'><b>".$temp."&deg F"."</b></td>";
$strTable .= "<td > </td>";
$strTable .= "</tr>";
}
else{
$strTable .= "<tr>";
$strTable .= "<td > </td>";
$strTable .= "<td style='text-align:center;'><b>".$temp."&deg C"."</b></td>";
$strTable .= "<td > </td>";
$strTable .= "</tr>";
}

$strTable .= "<tr>";
$strTable .= "<td > </td>";
$strTable .= "<td>"."<img src ='".$icon." 'alt=NoImage' title='$summary'>"."</td>";
$strTable .= "<td > </td>";
$strTable .= "</tr>";

$strTable .= "<tr>";
$strTable .= "<td >"."Precipitation :"."</td>";
$strTable .= "<td > </td>";
$strTable .= "<td >".$precip."</td>";
$strTable .= "</tr>";

$strTable .= "<tr>";
$strTable .= "<td >"."Chance of Rain :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".$chancerain."%"."</td>";
$strTable .= "</tr>";

if($unit=="us"){
$strTable .= "<tr>";
$strTable .= "<td >"."Wind Speed :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".round($windSpeed)." Mph"."</td>";
$strTable .= "</tr>";
}
else
{
$strTable .= "<tr>";
$strTable .= "<td >"."Wind Speed :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".round($windSpeed*2.237)." Mph"."</td>";
$strTable .= "</tr>";
}

if($unit=="us"){
$strTable .= "<tr>";
$strTable .= "<td >"."Dew Point :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".round($dewPoint)."&deg F"."</td>";
$strTable .= "</tr>";
}
else
{
$strTable .= "<tr>";
$strTable .= "<td >"."Dew Point :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".round($dewPoint)."&deg C"."</td>";
$strTable .= "</tr>";
}


$strTable .= "<tr>";
$strTable .= "<td >"."Humidity :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".$humidity."%"."</td>";
$strTable .= "</tr>";

if($unit=="us"){
$strTable .= "<tr>";
$strTable .= "<td >"."Visibility :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".$visibility." Mi"."</td>";
$strTable .= "</tr>";
}
else{
$strTable .= "<tr>";
$strTable .= "<td >"."Visibility :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".$visibility." Km"."</td>";
$strTable .= "</tr>";
}

$strTable .= "<tr>";
$strTable .= "<td >"."Sunrise :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".$sunriseTime."</td>";
$strTable .= "</tr>";

$strTable .= "<tr>";
$strTable .= "<td >"."Sunset :"."</td>";
$strTable .= "<td ></td>";
$strTable .= "<td >".$sunsetTime."</td>";
$strTable .= "</tr>";

$strTable .= "</table>";
$strTable .= "</div>";

print $strTable;


}


}



}


?>

