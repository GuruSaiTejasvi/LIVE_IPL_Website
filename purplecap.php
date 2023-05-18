<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/stats/v1/series/5945?statsType=mostWickets",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: cricbuzz-cricket.p.rapidapi.com",
		"X-RapidAPI-Key: 3b648f1361mshbd5def7aa4de78ap17cea1jsne1dff77ee45a",
		"content-type: application/octet-stream"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data=json_decode($response,true);
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
        margin-left: 25%;
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
</style>
</head>
<body>
<div id="navgn">
            <div>
                <img src="logo.png" style="position: absolute;z-index:1;margin-left:5px;height:80%;">
            </div>
            <ul>
            <li><a class="active" href="#">🏠Home</a></li>
            <li><a class="active" href="#">📋Schedule</a></li>
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
                    <a class="active1" href="#">Orange Cap</a>
                    <a class="active1" href="#">Purple Cap</a> 
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
    <h1 style="color:aliceblue; text-align:center;">Purple Cap</h1>
<table>
<thead>
        <tr>
            <th class="one">Pos</th>
            <th class="one">Player</th>
            <th class="one">Matches</th>
            <th class="one">Overs</th>
            <th class="one">Wickets</th>
            <th class="one">Average</th>
        </tr>
    </thead>
    <tbody>
        <?php $counter=1; ?>
        <?php foreach ($data['t20StatsList']['values'] as $pcap): ?>
        <tr>
            <td>
                <?php echo "$counter"; $counter++;?>
            </td>
            <td><?php echo $pcap['values'][1]; ?></td>
            <td><?php echo $pcap['values'][2]; ?></td>
            <td><?php echo $pcap['values'][3]; ?></td>
            <td><?php echo $pcap['values'][4]; ?></td>
            <td><?php echo $pcap['values'][5];?></td>
        </tr>
        <?php endforeach; ?>
    </tbody> 
</table>
        
</body>
</html>