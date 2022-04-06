<!DOCTYPE html>
<html lang="en">
<link rel='stylesheet' href='style/mystyle.css'>

<?php include_once('config.php');?>
<?php include('includes/navigation2.php'); ?>
<head>
    <title>Home - Member</title>
	<meta charset ="UTF-8">
	<meta name=viewport"content ="width=device-width,initial-scale=1.0">
	

	<style>
        .column {
            margin: 20%;
            position: relative;
        }
	
  
       
    </style>
</head>

<body>
    <h1 style=text-align:center>Membership Card</h1>
    <hr style="width: 300px; margin:auto">
	<div id="container">
    <br>
    <table id="membershipCard">
        <tr>
            <td>
                <div id="barcode">
                    <img src="image/barcode.png" style="width:200px;">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                45645138421
            </td>
        </tr>
        <tr>
            <td>
                <div id="pointsText">Available Points:</div> 
				<div id="number">10000</div>
            </td>
        </tr>
    </table>

    <h1 style=text-align:center>Upcoming Movies</h1>
    <hr style="width: 300px; margin:auto">
    <table id="homeMemberTable">
        <thead id="homeMemberHead">
            <tr id="memberRow">
                <th>Date</th>
                <th>Time</th>
                <th>Movie</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
            <tr id="memberRow">
                <td>9 March 2022</td>
                <td>1.45PM</td>
                <td>The Batman</td>
                <td>CFTv KLCC</td>
            </tr>
        </tbody>
    </table>

   <h1 style=text-align:center>Rewards</h1>
<hr style="width: 300px; margin:auto">
<h3 style=text-align:center>Click To Claim a Rewards</h3>



<table style="width:100vw;" id="Rewards">
  <tr>
    <td style="border-radius:50%">
	
      <div class="column">
		<div id="container">
		<button id="decrement" ><img src="image/reward.png" style="width:200px"/></button>
        
		<span class="column">3000 points</span>
		
    
      </div>
    
    </td>
	
	
     <td>
      <div class="column">
        <input type ="image" src="image/rewardsecond.png" name="submit" alt ="submit " style="width:200px"/>
		<span class="column">15000 points</span>
      </div>
      
    </td>
	  
	<td>
      <div class="column">
        <input type ="image" src="image/rewardthird.png" name="submit" alt ="submit " style="width:200px"/>
		<span class="column">15000 points</span>
      </div>
      
    </td>

    <td>
      <div class="column">
        <input type ="image" src="image/reward3.png" name="submit" alt ="submit " style="width:200px"/>
		<span class="column">25000 points</span>
      </div>
    
    </td>

  </tr>
</table>
<script src="main.js"></script>
</body>
<?php include('includes/footer.php'); ?>	
</html>
