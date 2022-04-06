<!DOCTYPE html>
<html>
<link rel='stylesheet' href='style/mystyle.css'>

<?php include('includes/navigationB.php'); ?>
<head>
    <title>Home - Member</title>
	<style>
        .column {
            margin: 20%;
            position: relative;
        }
		#divpic {height :350px;width :350px;text-align:center;}
		.column{font-size;1.5em}
  
       
    </style>
</head>

<body>

    <h1 style=text-align:center>Membership Card</h1>
    <hr style="width: 300px; margin:auto">
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
                <div id="pointsText">Available Points:</div> 10000
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
<<<<<<< HEAD

		<input type ="image" src="image/reward.png" name="submit" alt ="submit " style="width:200px"/>
=======
		<div id="container">
		<button id="decrement" onclick="decreaseInteger(3000)"><img src="image/reward.png" style="width:200px"/></button>
>>>>>>> 9538951b10e93d5ad4014d705b3d8ed1bdbf7ddc
        
		<span class="column">3000 popcorns</span>
      </div>
    
    </td>
<<<<<<< HEAD

    <td style="border-radius:50%">
      <div class="column">
	  <input type ="image" src="image/rewardsecond.png" name="submit" alt ="submit " style="width:200px"/>
    
		<span class="column">5000 popcorns</span>
=======
	
	<td style="border-radius:50%">
	
      <div class="column">
		<div id="container">
		<button id="decrement" onclick="decreaseInteger(5000)"><img src="image/rewardsecond.png" style="width:200px"/></button>
        
		<span class="column">5000 points</span>
		
    
>>>>>>> 9538951b10e93d5ad4014d705b3d8ed1bdbf7ddc
      </div>
    
    </td>
	<td style="border-radius:50%">
	
      <div class="column">
<<<<<<< HEAD
        <input type ="image" src="image/rewardthird.png" name="submit" alt ="submit " style="width:200px"/>
		<span class="column">15000 popcorns</span>
=======
		<div id="container">
		<button id="decrement" onclick="decreaseInteger(7000)"><img src="image/rewardthird.png" style="width:200px"/></button>
        
		<span class="column">7000 points</span>
		
    
>>>>>>> 9538951b10e93d5ad4014d705b3d8ed1bdbf7ddc
      </div>
    
    </td>
	<td style="border-radius:50%">
	
      <div class="column">
<<<<<<< HEAD
        <input type ="image" src="image/reward3.png" name="submit" alt ="submit " style="width:200px"/>
		<span class="column">25000 popcorns</span>
=======
		<div id="container">
		<button id="decrement" onclick="decreaseInteger(10000)"><img src="image/reward3.png" style="width:200px"/></button>
        
		<span class="column">10000 points</span>
		
    
>>>>>>> 9538951b10e93d5ad4014d705b3d8ed1bdbf7ddc
      </div>
    
    </td>
    
      

  </tr>
</table>
</body>
<?php include('includes/footer.php'); ?>	
</html>
