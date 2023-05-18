<?php

// Send a GET request to the API endpoint
$response = file_get_contents('https://api.cricapi.com/v1/series_info?apikey=fdd22927-0f15-48f8-ac18-ea51c831bed8&id=c75f8952-74d4-416f-b7b4-7da4b4e3ae6e');

// Convert the JSON response into a PHP array
$datagot = json_decode($response, true);
// Extract the series name
$series_name = $datagot['data']['info']['name'];
// Extract the start date
 $start_date = $datagot['data']['info']['startdate'];

// Extract the end date
$end_date = $datagot['data']['info']['enddate'];

// Extract the match schedule
 $match_schedule = array();
foreach ($datagot['data']['matchList'] as $match) {
    $match['dateTimeGMT'];
     $match_schedule[] = array(
        // 'match_number' => $match['match_number'],
        'name' => $match['name'],
        'time' => date("d-m-Y H:i:s", strtotime($match['dateTimeGMT'])),
        'venue' => $match['venue'],
        'teams' => $match['teams'][0] . ' vs ' . $match['teams'][1],
        'team1img' => $match['teamInfo'][0]['img'],
        'team2img' => $match['teamInfo'][1]['img'],
    );
 }
 function cmp($alpha, $beta) {
    return strtotime($alpha["time"]) - strtotime($beta["time"]);
}
usort($match_schedule, "cmp");
?>
<html>
<head>
<style>
    body {
            margin: 0;
            padding: 0;
            background-image: url(background-1.jpg);
        }

        #background{
            position:absolute;
            z-index:-1;
            margin-top:-1%;
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
        .one{
          background-color: inherit;
          color: aliceblue;
          font-size: larger;
        }
        .tmar{
            margin: 0 auto;
        }
        .heading{
            margin-left: 35%;
            display: block;
            color: aliceblue;
        }    
</style>
<script>
  function showText(text) {
  // Create text box or tooltip element
  const tooltip = document.createElement("div");
  tooltip.textContent = text;
  tooltip.style.position = "absolute";
  tooltip.style.zIndex = "999";
  tooltip.style.background = "#333";
  tooltip.style.color = "#fff";
  tooltip.style.padding = "5px";
  tooltip.style.borderRadius = "5px";
  tooltip.style.display = "block";
  tooltip.style.fontSize = "larger";
  
  // Position it near the mouse cursor 
  document.addEventListener("mousemove", function(e) {
    tooltip.style.left = (e.pageX + 10) + "px";
    tooltip.style.top = (e.pageY + 10) + "px";
  });
  
  // Show the element
  document.body.appendChild(tooltip);
}

</script>        
</head>
<body>
<div id="navgn"  >
            <div>
                <img src="logo.png"  style="position: absolute;z-index:1;margin-left:5px;height:80%;">
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
            
            <button name="button" type="button" onclick="handleDropDown()" >
                <div id="menu"></div>
                <div id="menu"></div>
                <div id="menu"></div>
            </button>
            <marquee style="color:black;font-size:14pt;font-weight:bold;"scrollamount="8" bgcolor="grey" direction="right" behavior="alternate">🏆Indian Premier League🏆
            </marquee>
        </div>

        <div id="sidebar3">
                <div id="sidebar3-content">
                    <a class="active1" href="https://www.jiocinema.com/">&#8226;&ensp;Live Match</a>
                    <a class="active1" href="news.php">&#8226;&ensp;News Updates</a>
                    <a class="active1" href="scorecompleterapid.php?id=66320">&#8226;&ensp;Scorecard</a>

                </div>
            </div>

    
    <h1 class="heading"><?php echo $series_name; ?></h1>
<centre>
<table cellpadding="20" class="tmar">
    <tbody>
        <?php $m=1 ?>
        <?php foreach ($match_schedule as $match): ?>
        <tr>
            <td style="color:aliceblue; font-size:larger;"><?php echo $m; $m=$m+1; ?></td>
            <td class="imgscript"><img src="<?php echo $match['team1img']; ?>" height="100" width="100" onmouseover="showText('<?php echo $match['venue']; ?>')"></td>
            <td class="one"><b><?php echo $match['name']."  ".$match['time'] ?></b></td>
            <td class="imgscript"><img src="<?php echo $match['team2img']; ?>" height="100" width="100" onmouseover="showText('<?php echo $match['venue']; ?>')"></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</centre>
</body>
</html>