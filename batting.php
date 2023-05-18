<?php

$curl1 = curl_init();

curl_setopt_array($curl1, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=highestScore",
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
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=highestAvg",
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
	$data2=json_decode($response2,true);
}

$curl3 = curl_init();

curl_setopt_array($curl3, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=mostHundreds",
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
	$data3= json_decode($response3,true);
}


$curl4 = curl_init();

curl_setopt_array($curl4, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=highestSr",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: 7c6a5d2cf1amsh6802e5dd61a880fp10d8a7jsn9cc3b241e867"
	],
]);

$response4 = curl_exec($curl4);
$err = curl_error($curl4);

curl_close($curl4);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data4=json_decode($response4,true);
}

$curl5 = curl_init();

curl_setopt_array($curl5, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=mostFifties",
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

$response5 = curl_exec($curl5);
$err = curl_error($curl5);

curl_close($curl5);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data5=json_decode($response5,true);
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
        margin-left: 30%;
    }
    th,td{
          border-radius: 12px;
          background-color: grey;
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
        #bar{
            display: flex;
            justify-content: space-between;
            flex-direction:row;
            
        }
        #bar1{
            position:left;
        }
        #bar2{
            position:right;
        }
        #bar1,#bar2{
            display: flex;
            flex-direction:column;
            justify-content:space-between;
            row-gap:2.75vw;
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
            position:relative;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-self:right;
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
            margin-top: 580px;
            margin-left:150px;
            border-radius:10px;
            width: 80%;
            background-color:#f5d698;
            height: 300px;
            position: absolute;
            padding-top:-5px;
        }
        .sidebar2{ 
            margin-top: 2%;
            margin-left:53%;
            border-radius:10px;
            text-align:center;
            width: 19%;
            font-size: larger;
            background-color: rgb(168, 99, 187);
            color: black;
            height: 30%;
            position: absolute;

        } 
        #sidebar3{ 
            margin-top: 0.1%;
            margin-left: 1%;;
            border-radius:6px;
            text-align:left;
            width: 15%;
            font-size:large;
            background-color:#f5d698;
            height: 15%;
            position: absolute;
            display:none;
            padding: 8px 16px;
        }
        #sidebar3-content a{
            float: none;
            text-decoration: none;
            font-size:larger;
            margin-left:-0.1%;margin-top:-3.3%; 
            color:rgb(45, 43, 43);
            display: block;
            z-index:1;
            
        }
        #sidebar3:hover .dropdown-content {
            display: block;
            padding: 4px 16px;
        } 

        
        .barcontent{
            margin-top:-9%;
        
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
    
        <li><a class="active" href="#">📌Points Table</a></li>
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
  <h1 style="color:aliceblue; text-align:center;">Batting Statistics</h1>
  <p class="head"><b>Highest Scores</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Highest Score</th>
      <th class="one">Balls</th>
      <th class="one">StrikeRate</th>
      <th class="one">Opponent team</th>
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
  

  <p class="head"><b>Highest Average</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Matches</th>
      <th class="one">Innings</th>
      <th class="one">Runs</th>
      <th class="one">Average</th>
    </tr>
     <?php foreach ($data2['t20StatsList']['values'] as $d2): ?>
      <tr>
     <td><?php echo $d2['values'][1] ?></td>
     <td><?php echo $d2['values'][2] ?></td>
     <td><?php echo $d2['values'][3] ?></td>
     <td><?php echo $d2['values'][4] ?></td>
     <td><?php echo $d2['values'][5] ?></td>
     </tr>
     <?php  endforeach; ?>
   </table>

   <p class="head"><b>Most Fifties</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Matches</th>
      <th class="one">Innings</th>
      <th class="one">Runs</th>
      <th class="one">Fifties</th>
    </tr>
     <?php foreach ($data5['t20StatsList']['values'] as $d5): ?>
      <tr>
     <td><?php echo $d5['values'][1] ?></td>
     <td><?php echo $d5['values'][2] ?></td>
     <td><?php echo $d5['values'][3] ?></td>
     <td><?php echo $d5['values'][4] ?></td>
     <td><?php echo $d5['values'][5] ?></td>
     </tr>
     <?php  endforeach; ?>
   </table>

   <p class="head"><b>Most Hundreds</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Matches</th>
      <th class="one">Innings</th>
      <th class="one">Runs</th>
      <th class="one">Hundreds</th>
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

   <p class="head"><b>Highest Strike Rate</b></p>
  <table>
    <tr>
      <th class="one">Player</th>
      <th class="one">Matches</th>
      <th class="one">Innings</th>
      <th class="one">Runs</th>
      <th class="one">Strike Rate</th>
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