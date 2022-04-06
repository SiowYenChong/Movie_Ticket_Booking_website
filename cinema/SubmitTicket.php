<!DOCTYPE html>

<html>
    <head>
  <?php include_once('config.php');?>
<?php include('includes/navigation2.php'); ?>
   
	<link rel="stylesheet" href="style/mystyle.css">
    </head>
    
    <body>
        <div class="midBtn">
        <p class="contactUsTitle"> Contact Us </p>
    </div>

    <div class="contactUsArea">
        <form>
        <li class="member"><input class="ContactUs" type="text" id="name" name="name" placeholder="Name"></li>
        <li class="member"><input class="ContactUs" type="text" id="email" name="email" placeholder="Email"></li>
        <li class="member"><input class="ContactUs" type="text" id="contactNumber" name="contactNumber" placeholder="Contact Number"></li>
        <li class="member"><select class="category" name="ticket" id="ticket" placeholder="SelectCategory"></li>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
        </select>
        <input class="subject" type="text" id="subject" name="subject" placeholder="Subject">
        <textarea id="description" name="description" placeholder="Description"></textarea>        
    </div>
    </form>
    
    <div class="contactUsAreaSubmit">
        <input class="submitt" type="submit" value="submit">
    </div>
    </body>
    <?php include 'includes/footer.php';?>
</html>