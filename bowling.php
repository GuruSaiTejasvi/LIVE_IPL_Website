<?php

$curl1 = curl_init();

curl_setopt_array($curl1, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=lowestEcon",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: c6a5d2cf1amsh6802e5dd61a880fp10d8a7jsn9cc3b241e867"
	],
]);

$response1 = curl_exec($curl1);
$err = curl_error($curl1);

curl_close($curl1);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data1=json_decode($response1,true);
}

$curl2 = curl_init();

curl_setopt_array($curl2, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=bestBowlingInnings",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: c6a5d2cf1amsh6802e5dd61a880fp10d8a7jsn9cc3b241e867"
	],
]);

$response2 = curl_exec($curl2);
$err = curl_error($curl2);

curl_close($curl2);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data2= json_decode($response2,true);
}


$curl3 = curl_init();

curl_setopt_array($curl3, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=lowestAvg",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: c6a5d2cf1amsh6802e5dd61a880fp10d8a7jsn9cc3b241e867"
	],
]);

$response3 = curl_exec($curl3);
$err = curl_error($curl3);

curl_close($curl3);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data3=json_decode($response3,true);
}

$curl4 = curl_init();

curl_setopt_array($curl4, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=mostFiveWickets",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: c6a5d2cf1amsh6802e5dd61a880fp10d8a7jsn9cc3b241e867"
	],
]);

$response4 = curl_exec($curl4);
$err = curl_error($curl4);

curl_close($curl4);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data4= json_decode($response4,true);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
        background-image: url(background-1.jpg);
        }
        table{
        align-self:center;
        margin: auto;
        }
        th,td{
          border-radius: 12px;
          background-color:aliceblue;
          font-size: larger;
          text-align:left;
          padding:6px;
        
        }
        .bg {
        position:absolute; 
        z-index:-1;
        margin-top:-10px;
        left: 0;
        max-width:100%;
        min-height: 150%;
        }
        .one{
          text-align: center;
          background-color:rgb(146, 12, 12);
          color: aliceblue;
        }
        #ru{
          text-decoration:none;
          color:black;
        }
          body {
            margin: 0;
            padding: 0;
        }
        #background{
            position:absolute;
            z-index:-1;
            margin-top:-10px;
            width: fit-content;
            height:fit-content;
            
        
        }
        #navgn{
            position:relative;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            background-color:#eee7ce;
    
        
        }
        #navgn1{
            position:relative;
            display: flex;
            flex-direction: row;
            top: -10px;
        
        }
        #ppredictor{
            position:absolute;
            display: flex;
            flex-direction:column;
            justify-content: space-between;
            z-index:1;
            margin-right:10%;margin-top:20%;
        }
        ul {
            display: flex;
            flex-direction: row;
            list-style-type: none;
        }
        a {
            text-decoration: none;
            color:#04322a;
            font-size: 20px;
            font-weight:700;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            padding: 4px 16px;
            margin-left:27px;
        }
        li {
            display: flex;
            flex-direction: row;
            align-items:center;
        }
        .active:hover{
           background:#064439;
           border-radius: 30px;
           color: #eee7ce;
        }
        .active1:hover{
           background:#557c83;
           border-radius: 10px;
           color:aliceblue ;
        }
        
        li.dropdown{
            display: block;
            padding: 8px 16px;
        }
        .dropdown-content{
            display: none;
            margin-top:5px;
            max-width:100%;
            max-height:400%;
            position:absolute;
            background-color:#f5d698;
            border-radius:15px;
            z-index:1;
        }
        .dropdown-content a{
            float: none;
            text-decoration: none;
            font-size:larger;
            margin-left:-5px;margin-top:-8px; 
            color:rgb(45, 43, 43);
            display: block;
            z-index:1;
            
        }
        .dropdown:hover .dropdown-content {
            display: block;
            padding: 8px 16px;
        }
        #menu {
            width: 22px;
            height: 4px;
            background-color:black;
            margin:3px 0.2px;
            border-radius:15px;
            
        }
        .sidebar1{ 
            margin-top: 560px;
            margin-left:150px;
            border-radius:10px;
            width: 80%;
            background-color:#f5d698;
            height: 300px;
            position: absolute;
            padding-top:-5px;

        }
        .head{
          font-size: x-large;
          color: aliceblue;
          align-self: center;
          align-items: center;
          margin-left: 20%;
        }
</style>
</head>
<body>
<div id="navgn">
        
        <div>
            <img src="logo.png" style="position: absolute;z-index:1;margin-left:5px;height:80%;">
        </div>
        <ul>
        <li><a class="active" href="test.php">🏠Home</a></li>
        <li><a class="active" href="extractresponse.php">📋Schedule</a></li>
        <li class="dropdown"><a class="active" href="#" class="dropbtn" >👥Teams🔻
            <div class="dropdown-content">
               <a class="active1" href="miteam.html">Mumbai Indians</a>
                <a class="active1" href="rrteam.html">Rajasthan Royals</a>
                <a class="active1" href="gtteam.html">Gujarat Titans</a>
                <a class="active1" href="dcteam.html">Delhi Capitals</a>
                <a class="active1" href="pkteam.html">Punjab Kings</a>
                <a class="active1" href="srhteam.html">Sunrisers Hyderabad</a>
                <a class="active1" href="kkrteam.html">Kolkata Knight Riders</a>
                <a class="active1" href="cskteam.html">Chennai Super Kings</a>
                <a class="active1" href="rcbteam.html">Royal Challengers Banglore</a>
                <a class="active1" href="Lsgteam.html">Lucknow Super Giants</a>
        </li>
        <li class="dropdown"><a class="active" href="#" class="dropbtn" >🧢Stats🔻
       
            <div class="dropdown-content">
                <a class="active1" href="orangecap.php">Orange Cap</a>
                <a class="active1" href="purplecap.php">Purple Cap</a>
                <a class="active1" href="batting.php">Batting Statistics</a>
                <a class="active1" href="bowling.php">Bowling Statistics</a>
        </li>
    
        <li><a class="active" href="pointsrapid.php">📌Points Table</a></li>
        </ul>
    
    </div>
    <div id="navgn1">
        
        <button name="button" type="button" >
            <div id="menu"></div>
            <div id="menu"></div>
            <div id="menu"></div>
        </button>
        <marquee style="color:black;font-size:14pt;font-weight:bold;"scrollamount="8" bgcolor="grey" direction="right" behavior="alternate">🏆Indian Premier League🏆
        </marquee>
    </div>
</div>
<div id="sidebar3">
  <div id="sidebar3-content">
      <a class="active1" href="https://www.jiocinema.com/">&#8226;&ensp;Live Match</a>
      <a class="active1" href="news.php">&#8226;&ensp;News Updates</a>
      <a class="active1" href="scorecompleterapid.php?id=<?php $data['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['matchId']; ?> ">&#8226;&ensp;Scorecard</a>
  </div>
</div>
<p class="head"><b>Lowest Economy</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Matches</th>
      <th class="one">Overs</th>
      <th class="one">Wickets</th>
      <th class="one">Economy</th>
    </tr>
     <?php foreach ($data1['t20StatsList']['values'] as $d1): ?>
     <tr>
     <td><?php echo $d1['values'][1] ?></td>
     <td><?php echo $d1['values'][2] ?></td>
     <td><?php echo $d1['values'][3] ?></td>
     <td><?php echo $d1['values'][4] ?></td>
     <td><?php echo $d1['values'][5] ?></td>
     </tr>
     <?php  endforeach; ?>
   </table>


   <p class="head"><b>Best Bowling Innings</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Opponent Team</th>
      <th class="one">Bowling figures</th>
    </tr>
     <?php foreach ($data2['t20StatsList']['values'] as $d2): ?>
     <tr>
     <td><?php echo $d2['values'][1] ?></td>
     <td><?php echo $d2['values'][2] ?></td>
     <td><?php echo $d2['values'][3] ?></td>
     </tr>
     <?php  endforeach; ?>
   </table>

   <p class="head"><b>Lowest Average</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Matches</th>
      <th class="one">Overs</th>
      <th class="one">Wickets</th>
      <th class="one">Avearge</th>
    </tr>
     <?php foreach ($data3['t20StatsList']['values'] as $d3): ?>
     <tr>
     <td><?php echo $d3['values'][1] ?></td>
     <td><?php echo $d3['values'][2] ?></td>
     <td><?php echo $d3['values'][3] ?></td>
     <td><?php echo $d3['values'][4] ?></td>
     <td><?php echo $d3['values'][5] ?></td>
     </tr>
     <?php  endforeach; ?>
   </table>


   <p class="head"><b>Five Wicket Halls</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Matches</th>
      <th class="one">Overs</th>
      <th class="one">Wickets</th>
      <th class="one">5 wicket halls</th>
    </tr>
     <?php foreach ($data4['t20StatsList']['values'] as $d4): ?>
     <tr>
     <td><?php echo $d4['values'][1] ?></td>
     <td><?php echo $d4['values'][2] ?></td>
     <td><?php echo $d4['values'][3] ?></td>
     <td><?php echo $d4['values'][4] ?></td>
     <td><?php echo $d4['values'][5] ?></td>
     </tr>
     <?php  endforeach; ?>
   </table>
</body>
</html>    