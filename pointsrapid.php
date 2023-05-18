<?php

$curl = curl_init();
    
curl_setopt_array($curl, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945/points-table",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: 9e31e70627msh65f76f499a5e354p16a170jsn690c67e0de35"
	],
]);
$im1 = "right";
$im2 = "wrong";
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$datagot = json_decode($response,true);
    // print_r($datagot);
    $points_table = array();
    $points_table1=array();
    foreach($datagot['pointsTable'][0]['pointsTableInfo'] as $team){
        $points_table[] = array(
            'name' => $team['teamFullName'],
            'matchesPlayed' => $team['matchesPlayed'],
            'matchesWon' => $team['matchesPlayed']-$team['matchesLost'],
            'matchesLost' => $team['matchesLost'],
            'points' => 2*($team['matchesPlayed']-$team['matchesLost']),
            'nrr' => $team['nrr'],
            'teamId' => $team['teamId'],
            'form' => $team['form']
        );
    }

}

?>

<html>
<head>
<style>
        body{
        background-image: url(background-1.jpg);
        }
        table{
        align-self:center;
        margin: 0 auto;
        margin-top:1px;
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
<div id="navgn">
        
            <div>
                <img src="logo.png" style="position: absolute;z-index:1;margin-left:5px;height:80%;">
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
      <a class="active1" href="news.php">&#8226;News Updates</a>
      <a class="active1" href="scorecompleterapid.php?id=66320 ">&#8226;&ensp;Scorecard</a>
  </div>
</div>
<table>
    <thead>
        <tr>
            <th class="one">Pos</th>
            <th class="one">Teams</th>
            <th class="one">Matches</th>
            <th class="one">Wins</th>
            <th class="one">Loss</th>
            <th class="one">Points</th>
            <th class="one">NRR</th>
            <th class="one">Last 5 Matches</th>
            <th class="one">Wins required</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; ?>
        <?php foreach ($points_table as $team): ?>
        <tr>
            <td>
                <?php echo "$counter"; $counter++;?>
            </td>
            <td><?php
             if($team['name']=='Rajasthan Royals'){
                $image="RR";
             }
             if($team['name']=='Lucknow Super Giants'){
                $image="lsg";
             }
             if($team['name']=='Chennai Super Kings'){
                $image="CSK";
             }
             if($team['name']=='Gujarat Titans'){
                $image="GT";
             }
             if($team['name']=='Royal Challengers Bangalore'){
                $image="RCB";
             }
             if($team['name']=='Mumbai Indians'){
                $image="MI";
             }
             if($team['name']=='Punjab Kings'){
                $image="PUG";
             }
             if($team['name']=='Kolkata Knight Riders'){
                $image="KKR";
             }
             if($team['name']=='Sunrisers Hyderabad'){
                $image="SRH";
             }
             if($team['name']=='Delhi Capitals'){
                $image="DC";
            }
            echo '<img src="' . $image . '.png" height="30px" width="30px"/>';
             ?><?php echo str_repeat("&nbsp;",2); print_r($team['name']); ?>
            </td>
            <td><?php print_r($team['matchesPlayed']); ?></td>
            <td><?php print_r($team['matchesWon']); ?></td>
            <td><?php print_r($team['matchesLost']); ?></td>
            <td><?php print_r($team['points']); ?></td>
            <td><?php print_r($team['nrr']);?></td>
            <td><?php 
            if($team['form'][4]=='W'){
                echo "<img src=\"right.png\" style=\"height:30px; width:30px;\">";
            }else{
                echo "<img src=\"wrong.png\" style=\"height:30px; width:30px;\">";
            }
            echo " "; 
            if($team['form'][3]=='W'){
                echo "<img src=\"right.png\" style=\"height:30px; width:30px;\">";
            }else{
                echo "<img src=\"wrong.png\" style=\"height:30px; width:30px;\">";
            }
            echo " "; 
            if($team['form'][2]=='W'){
                echo "<img src=\"right.png\" style=\"height:30px; width:30px;\">";
            }else{
                echo "<img src=\"wrong.png\" style=\"height:30px; width:30px;\">";
            } 
            echo " "; 
            if($team['form'][1]=='W'){
                echo "<img src=\"right.png\" style=\"height:30px; width:30px;\">";
            }else{
                echo "<img src=\"wrong.png\" style=\"height:30px; width:30px;\">";
            } 
            echo " "; 
            if($team['form'][0]=='W'){
                echo "<img src=\"right.png\" style=\"height:30px; width:30px;\">";
            }else{
                echo "<img src=\"wrong.png\" style=\"height:30px; width:30px;\">";
            }
            echo " ";?></td>
            <td><?php $mrem=14-$team['matchesPlayed']; $req= 7-$team['matchesWon']; if($mrem>$req){ echo $req;} else{ echo 0;}?></td>
            <?php endforeach; ?>
        <div class="sidebar1">
            <h3><center><Font COLOR="purple"><img src="right.png" style:"height:30px; width:30px;">&ensp;WON&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<img src="wrong.png" style:"height:30px; width:30px;">&ensp;LOST</Font></center></h3>
            <h3>&ensp;&#8226;&ensp;<FONT COLOR="blue">The 2023 IPL will give its 10 teams seedings and place them in two "virtual" groups during the league phase of the tournament</FONT>.</h3>
            <h4>&emsp;&emsp;&emsp;&emsp;&emsp;&#8226;&ensp;<b><font size="4">Group A</font></b> -<FONT COLOR="#064439"> Mumbai Indians, Kolkata Knight Riders, Rajasthan Royals, Delhi Capitals and Lucknow Super Giants</FONT>.</h4>
            <h4>&emsp;&emsp;&emsp;&emsp;&emsp;&#8226;&ensp;<b><font size="4">Group B</font></b> -<FONT COLOR="#064439"> Chennai Super Kings, Sunrisers Hyderabad, Royal Challengers Bangalore, Punjab Kings and Gujarat Titans</FONT>.</h4>
            <h3>&ensp;&#8226;&ensp;<FONT COLOR="teal">10 teams will play a total of 14 matches - seven home and seven away. Each team will play the five teams of the other group twice </h3><h3>&emsp;and the other four from their own group once.</h3></FONT></h3>
            <h3 style="margin-top:-28px;">&emsp;&emsp;&emsp;&emsp;&emsp;<marquee style="font-weight:bold;"scrollamount="6" direction="right" behavior="alternate">&#8226;&ensp;<b><font size="5"><FONT COLOR="red"> At the conclusion of the league stage, the top 4 teams will qualify for the playoffs</FONT></font></b>.</marquee></h3>
        </div>
        </div>
    </tbody>
</table>
</body>
</html>