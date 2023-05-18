<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/matches/v1/recent",
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

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$dat = json_decode($response,true);
    for($i=0;$i<5;$i++){
       if($dat['typeMatches'][$i]['matchType']=="League"){
          $data=$dat['typeMatches'][$i];
          break;
       }
     }    
}
?>

<?php

$curl1 = curl_init();

curl_setopt_array($curl1, [
	CURLOPT_URL => "https://cricbuzz-cricket.p.rapidapi.com/matches/v1/upcoming",
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

$response2 = curl_exec($curl1);
$err = curl_error($curl1);

curl_close($curl1);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$dat2 = json_decode($response2,true);
    for($i=0;$i<5;$i++){
       if($dat2['typeMatches'][$i]['matchType']=="League"){
          $data2=$dat2['typeMatches'][$i];
          break;
       }
     }    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="dropdown.js"></script>
    <title>🏏iplLIVE</title>
    <style>
        body {
            margin: 0;
            padding: 0;
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

        #mi-icon .left-content{display: none;}
       
        #mi-icon.left-content .left-data{display: none;}
        
        #mi-icon .left-content .left-data{
            display:block;
            padding: 8px 16px;
        }
        #mi-icon:hover .left-content{
            display:block;
            width: 140%;
            left: (90%);
            position:absolute;
            background-color:#f5d698;
            border-radius:15px;
            z-index:1;
        }
        #mi-icon:hover .left-content .left-data{
            display: block;
            float: none;
            text-decoration: none;
            font-size:larger;
            margin-left:-5px;margin-top:-15px; 
            color:rgb(45, 43, 43);
            z-index:1;
            
        }
        #mi-icon .right-content{display: none;}
       
       #mi-icon.right-content .right-data{display: none;}
       
       #mi-icon .right-content .right-data{
           display:block;
           padding: 8px 16px;
       }
       #mi-icon:hover .right-content{
           display:block;
           width: 130%;
           right: 90%;
           position:absolute;
           background-color:#f5d698;
           border-radius:15px;
           z-index:1;
       }
       #mi-icon:hover .right-content .right-data{
           display: block;
           float: none;
           text-decoration: none;
           font-size:larger;
           margin-left:-5px;margin-top:-15px; 
           color:rgb(45, 43, 43);
           z-index:1;
           
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
        .gapbetween{
            margin-bottom: 1%;
        }
    </style>
</head>
<body >
        <div id="navgn">
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
        <div id="background"><img src="background-1 (2).jpg" style="width:100%;"></div>
        <div id="bar">
            <div id="bar1">
               <div calss="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="DC.png" style="height:110px;width:120px;margin-left:-20px">
                    <div class="left-content" style="top:0">
                        <a class="left-data "  href="#">Team:<font color="blue">Delhi Capitals </font></a>
                        <a class="left-data" href="#">Captain:<font color="blue">David Warner</font></a>
                        <a class="left-data" href="#">Coach:<font color="blue">Ricky Pointing</font></a>
                        <a class="left-data" href="#">HG:<font color="blue">Arun Jaitley Stadium</font> </a>
                        <a class="left-data" href="#">Cups:<font color="blue">0</font></a>
                    </div>
                </div>
                </div>
                <div calss="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="GT.png" style="height:110px;width:150px;margin-left:-30px">
                    <div class="left-content" style="top:-2px">
                        <a class="left-data "  href="#">Team:<font color="RGB: (27, 33, 51)">Gujarat Titans </font></a>
                        <a class="left-data "  href="#">Captain:<font color="RGB: (27, 33, 51)">Hardik Pandya </font></a>
                        <a class="left-data "  href="#">Coach:<font color="RGB: (27, 33, 51)">Ashish Nehra </font></a>
                        <a class="left-data "  href="#">HG:<font color="RGB: (27, 33, 51)">Narendra Modi Stadium </font></a>
                        <a class="left-data "  href="#">cups:<font color="RGB: (27, 33, 51)">1 </font></a>
                    </div>
                </div>
                </div>
                <div calss="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="PUJ.png" style="height:120px;width:112px;margin-left:-10px">
                    <div class="left-content" style="top:-30px">
                        <a class="left-data "  href="#">Team:<font color="red">Punjab Kings </font></a>
                        <a class="left-data "  href="#">Captain:<font color="red">Shikhar Dhawan </font></a>
                        <a class="left-data "  href="#">Coach:<font color="red">Trevor Bayliss </font></a>
                        <a class="left-data "  href="#">HG:<font color="red">Punjab Cricket Association IS Bindra Stadium </font></a>
                        <a class="left-data "  href="#">cups:<font color="red">0 </font></a>
                    </div>
                </div>
                </div>
                <div calss="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn"></a>
                    <img src="RCB.png" style="height:120px;width:100px;margin-left:-20px;">
                    <div class="left-content" style="top:-15px;padding-top:7px;">
                        <a class="left-data "  href="#">Team:<font color="#ffa500">Royal Challengers Bangalore </font></a>
                        <a class="left-data "  href="#">Captain:<font color="#ffa500">Faf du Plessis </font></a>
                        <a class="left-data "  href="#">Coach:<font color="#ffa500">Sanjay Bangar </font></a>
                        <a class="left-data "  href="#">HG:<font color="#ffa500">M. Chinnaswamy Stadium </font></a>
                        <a class="left-data "  href="#">cups:<font color="#ffa500">0 </font></a>
                    </div>
                </div>
                </div>
                <div calss="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="lsg.png" style="height:100px;width:160px;margin-left:-40px;">
                    <div class="left-content" style="top:-70px;padding-top:2px;">
                        <a class="left-data "  href="#">Team:<font color="teal">Lucknow Super Giants </font></a>
                        <a class="left-data "  href="#">Captain:<font color="teal">KL Rahul  </font></a>
                        <a class="left-data "  href="#">Coach:<font color="teal">Andy Flower </font></a>
                        <a class="left-data "  href="#">HG:<font color="teal">BRSABV Ekana Cricket Stadium</font> </font></a>
                        <a class="left-data "  href="#">cups:<font color="teal">0 </font></a>
                    </div>
                </div>
                </div>
            </div>
            <div id="sidebar3">
                <div id="sidebar3-content">
                    <a class="active1" href="https://www.jiocinema.com/">&#8226;&ensp;Live Match</a>
                    <a class="active1" href="news.php">&#8226;&ensp;News Updates</a>
                    <a class="active1" href="scorecompleterapid.php?id=<?php $data['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['matchId']; ?> ">&#8226;Scorecard</a>

                </div>
            </div>
            <img src="cup-removebg-preview.png" style="height:400px;margin-left:530px;margin-top:270px;z-index:-1;position:absolute;">
            <img src="IMG_20230429_224032.png" style="height:345px;margin-left:100px;margin-top: 300px;">
            <div class="sidebar1">
                <div class="barcontent">
                    <a href="scoreupcoming.php?id=<?php echo $data2['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['matchId'] ?>">
                    <p>Upcoming Match</p>
                    <p><?php echo $data2['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['team1']['teamSName']." VS ".$data2['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['team2']['teamSName'] ?></p>
                    <p><?php echo date('d-m-Y',$data2['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['startDate']/1000); ?></p>
                    <p><?php echo $data2['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['matchDesc']." of 70" ?></p></a>
                </div>
            </div>
            <div class="sidebar2">
                <div class="barcontent">
                    <a href="scorecompleterapid.php?id=<?php echo $data['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['matchId']; ?> ">
                    <p>Previous Match</p>
                    <p><?php echo $data['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['team1']['teamSName']." VS ".$data['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['team2']['teamSName'] ?></p>
                    <p><?php echo date('d-m-Y',$data['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['startDate']/1000); ?></p>
                    <p><?php echo $data['seriesMatches'][0]['seriesAdWrapper']['matches'][0]['matchInfo']['status'] ?></p></a>
                </div>
            </div>
            <div id="bar2" >
            <div class="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="KKR.png" style="height:120px;width:100px;margin-left:40px;">
                    <div class="right-content" style="top:0px;padding-top:4px;">
                        <a class="right-data "  href="#">Team:<font color="purple">Kolkata Knight Riders </font></a>
                        <a class="right-data "  href="#">Captain:<font color="purple">Nitish Rana  </font></a>
                        <a class="right-data "  href="#">Coach:<font color="purple">Chandrakant Pandit </font></a>
                        <a class="right-data "  href="#">HG:<font color="purple">Eden Gardens</font> </font></a>
                        <a class="right-data "  href="#">cups:<font color="purple">2</font></a>
                    </div>
                </div>
                </div>
                <div class="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="MI.png" style="height:15vh;margin-left:-10px;">
                    <div class="right-content" style="top:-20px;padding-top:4px;">
                        <a class="right-data "  href="#">Team:<font color="blue">Mumbai Indians </font></a>
                        <a class="right-data "  href="#">Captain:<font color="blue">Rohit Sharma  </font></a>
                        <a class="right-data "  href="#">Coach:<font color="blue">Mark Boucher </font></a>
                        <a class="right-data "  href="#">HG:<font color="blue">Wankhede Stadium</font> </font></a>
                        <a class="right-data "  href="#">cups:<font color="blue">5</font></a>
                
                    </div>
                </div>
                </div>
                <div class="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="RR.png" style="height:120px;width:130px;margin-left:10px;">
                    <div class="right-content" style="top:-20px;padding-top:4px;">
                        <a class="right-data "  href="#">Team:<font color="blue">Rajasthan Royals </font></a>
                        <a class="right-data "  href="#">Captain:<font color="blue">Sanju Samson</font></a>
                        <a class="right-data "  href="#">Coach:<font color="blue">Kumar Sangakkara </font></a>
                        <a class="right-data "  href="#">HG:<font color="blue">Sawai Mansingh Stadium</font> </font></a>
                        <a class="right-data "  href="#">cups:<font color="blue">1</font></a>
                    </div>
                </div>
                </div>
                <div class="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="SRH.png" style="height:120px;width:160px;">
                    <div class="right-content" style="top:-20px;padding-top:4px;">
                        <a class="right-data "  href="#">Team:<font color="#8b4000">Sunrisers Hyderabad </font></a>
                        <a class="right-data "  href="#">Captain:<font color="#8b4000">Aiden Markram  </font></a>
                        <a class="right-data "  href="#">Coach:<font color="#8b4000">Brian Lara </font></a>
                        <a class="right-data "  href="#">HG:<font color="#8b4000">Rajiv Gandhi Intl. Cricket Stadium</font> </font></a>
                        <a class="right-data "  href="#">cups:<font color="#8b4000">1</font></a>
                    </div>
                </div>
                </div>
                <div class="gapbetween">
                <div id="mi-icon" style="position: relative;"><a class="" href="#" class="dropbtn">
                    <img src="CSK.png" style="height:17vh;margin-right:-20px;">
                    <div class="right-content" style="top:-50px;padding-top:4px;">
                        <a class="right-data "  href="#">Team:<font color="#8b8000">Chennai Super Kings </font></a>
                        <a class="right-data "  href="#">Captain:<font color="#8b8000">MS Dhoni  </font></a>
                        <a class="right-data "  href="#">Coach:<font color="#8b8000">Stephen Fleming </font></a>
                        <a class="right-data "  href="#">HG:<font color="#8b8000">M. A. Chidambaram Stadium</font> </font></a>
                        <a class="right-data "  href="#">cups:<font color="#8b8000">4</font></a>
                    
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    
    <script>
        function handleDropDown() {
            document.getElementById('sidebar3').style.display==='flex'?document.getElementById('sidebar3').style.display='none':document.getElementById('sidebar3').style.display='flex';
        }
        function handleBodyClick(){
            document.getElementById('sidebar3').style.display==='none'
        }
    </script>
</body>
</html>