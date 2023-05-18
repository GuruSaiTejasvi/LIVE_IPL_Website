<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/news/v1/series/5945",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: 9e31e70627msh65f76f499a5e354p16a170jsn690c67e0de35",
		"content-type: application/octet-stream"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data= json_decode($response,true);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <mega charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <style>
		body{
			background-image: url('background-1.jpg');
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
			backdrop-filter: blur(2px);
        }
		.headtable{
            color: white;
            text-align: center;
            font-size: 40px;
            margin-left: 20%;
            width: 60%;
            border-radius: 3px;
        }
		.main{
			margin-left: 10%;
			font-size: x-large;
			color: aliceblue;
		}
	
		.bg {
        position:absolute; 
        z-index:-1;
        top: 20; 
        left: 0;
        max-width: 100%;
        min-height: 175%;
    }
    .one{
        text-align: center;
        background-color:rgb(74, 27, 169);
        color:aliceblue;
    }
    #ru{
        color:black;
        text-decoration:none;
    }
    .sidebar1{ 
            margin-top: 2%;
            margin-left:28.5%;
            border-radius:10px;
            text-align:center;
            width: 19%;
            font-size: larger;
            background-color: rgb(168, 99, 187);
            color: black;
            height: 30%;
            position: absolute;

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

   
    </style>
    <script>
      function handleDropDown() {
          document.getElementById('sidebar3').style.display==='flex'?document.getElementById('sidebar3').style.display='none':document.getElementById('sidebar3').style.display='flex';
      }
      function handleBodyClick(){
          document.getElementById('sidebar3').style.display==='none'
      }
  </script>
</head>
<body>
<div id="navgn"  >
      <div>
          <img src="logo.png"  style="position: absolute;z-index:1;margin-left:5px;height:80%;">
      </div>
      <ul>
      <li><a class="active" href="test.php">&#x1F3E0;Home</a></li>
      <li><a class="active" href="extractresponse.php">&#x1F5D2;Schedule</a></li>
      <li class="dropdown"><a class="active" href="#" class="dropbtn" >&#x1F46E;Teams&#x1F53B;
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
      <li class="dropdown"><a class="active" href="#" class="dropbtn" >&#x1F9E2;Stats&#x1F53B;
     
          <div class="dropdown-content">
              <a class="active1" href="orangecap.php">Orange Cap</a>
              <a class="active1" href="purplecap.php">Purple Cap</a> 
              <a class="active1" href="batting.php">Batting Statistics</a>
              <a class="active1" href="bowling.php">Bowling Statistics</a>
      </li>
  
      <li><a class="active" href="pointsrapid.php">&#x1F4CC;Points Table</a></li>
      </ul>
  
  </div>
  <div id="navgn1">
      
      <button name="button" type="button" onclick="handleDropDown()" >
          <div id="menu"></div>
          <div id="menu"></div>
          <div id="menu"></div>
      </button>
      <marquee style="color:black;font-size:14pt;font-weight:bold;"scrollamount="8" bgcolor="grey" direction="right" behavior="alternate">&#x1F3C6;Indian Premier League&#x1F3C6;
      </marquee>
  </div>
  <div id="sidebar3">
   <div id="sidebar3-content">
       <a class="active1" href="https://www.jiocinema.com/">&#8226;&ensp;Live Match</a>
       <a class="active1" href="news.php">&#8226;&ensp;News Updates</a>
       <a class="active1" href="scorecompleterapid.php?id=66320">&#8226;&ensp;Scorecard</a>

   </div>
</div>

   <table class="headtable"><th>Indian Premier League 2023 </th></table>
   <table class="main">
	<?php foreach($data['storyList'] as $newstory): ?>
	<?php if(isset($newstory['story'])) { ?>
	  <tr>
		<td>&#8226;&ensp;<?php echo $newstory['story']['hline']; ?><br><?php echo $newstory['story']['intro'];?><br> <?php echo $newstory['story']['coverImage']['caption']; ?></td>
	  </tr>
		<?php  } ?>  
	<?php endforeach; ?>  
   </table>
</body>
</html>