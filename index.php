<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


</DOCTYPE><html>
    <head>
        <title> RUSH BOAT</title>
        <style>
            body{
                background-color: rgb(228, 244, 242);
                background-image:url("Kingfisher-Ultra-Max-Premium-Strong-Bee".jpg)
            }
            .logo{
                width:200px;
                border-radius: 40px;
                height: 200px;
                filter:brightness(100px);
                border-color: rgb(0, 195, 255);
                border-style:solid;

            }
            .search-bar{
                text-transform:italic;
                position: absolute;
                top: 0;
                right:0;  
            }

            .heading{
                text-transform:uppercase;
                text-align:center;
                background-color: rgb(136, 194, 255);
                top: 200px;
                right:2px;
                width: 70%;
                height: 100%;
                color:red;
                 
                  
            }
            .patner{
                position: absolute;
                top:30px;
                right:2px;
                width: 150px;
                border-radius: 100px;
                
            }
            .colabration{
                text-transform: uppercase;
                text-align: right;
                position: absolute;
                top:175px;
                right:2px;
                
            }
             .copy-rights{
                position: fixed; 
                bottom: 0;
                width:100%;
             }

             .offers{
                background-color: red;
                height:40px;
                font-style:italic;
                text-align:center;
                border-radius: 40px;
                padding-top: 20px;
                padding-bottom: 5px;
                position: relative;
                top:500px;
             }
             .scroll-container{
                border: 3px solid rgb(226, 218, 223);
                border-radius: 5px;
                overflow: hidden;
              }
              .scroll-text{
                text-align: right;
                transform: translateX(-100%);
                transform: translatex(+100%);
                animation-duration:8s ;
                animation-name:text ;
                animation-direction: alternate;
                animation-iteration-count:infinite;
                top:300px;
              }
              @keyframes text{
                from{transform: translateX(-100%);}
                to{transform: translateX(+100%);}

        
              }
              .direction{
                width:15px;
                height:10px;
              }
              .arrangement div{
               position: relative;
               display:inline-block;
                right:1px;
                left:25px;
                font-size: 20px;
                height:0;

            
               
                
              }
              .checkbox{
                position: absolute;
                top:275px;
               
              }
              .middle{
                position: relative;
               
                
              }
              .set{
                position: relative;
                left:30px;
              }
              .place{
                height:1px;
                top:100px;
              }
              

              


              
            
   
        </style>

    </head>
    <body style="
    height:1000px;
    width:auto;
    ">
    <P>RUSH BOAT</P>
        <input  class="search-bar" type="text" placeholder="search Boat">
       <div> <img class="logo" src="boat1.jpg"></img></div>
       <div><img class="patner" src="kingfisher.jpg"></img>
            <p class="colabration">in partnership with KINGFISHER</p></div>
            <div><p class="copy-rights">
                Copyright &#64;2023 rush boatLtd. All rights reserved. Use of this website indicates your compliance with our Privacy Policy, Conditions of Carriage, Terms and Conditions.
            </p></div>

           <div><p class="offers">
            Go on a ride and you will never go to your home .<span class="high">Booknow</span>
        </p></div> 
       
        
        <div style="background-color:rgb(255, 0, 234);
        height:auto;
        color:rgb(216, 231, 218);
        position:fixed;
        top:0;
        cursor: pointer;
        font-size: 30px;
        "></div>
       <li style="display:inline-block;">
        <div>
        <form action="details.php" name="form" method="post">
           <ul calss="middle"><div class="checkbox">
           <label class="container">one way
            <input type="radio"  checked="checked"name="radio">
            <span class="checkmark"></span></label>
            <label class="container">Round trip 
                <input type="radio"name="radio">
                <span class="checkmark"></span>
            </label>
        </div>
        <li class="place">
        <label for="from"> from</label>
        <select name="city" id="city">
            <option value="chennai">chennai</option>
            <option value="west bengal">west bengal</option>
            <option value="goa">goa</option>
            <option value="maimi">maimi</option>
            <option value="andaman">andaman</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Odisha">Odisha</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Daman & Diu">Daman & Diu</option>
        </select>
        <img  class="direction"src="dirction.png"></img>
        <label for="to"> to</label>
        <select name="city" id="city">
            <option value="chennai">chennai</option>
            <option value="west bengal">west bengal</option>
            <option value="goa">goa</option>
            <option value="maimi">maimi</option>
            <option value="andaman">andaman</option>
            <option value="Gujarat">Gujarat</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Odisha">Odisha</option>
            <option value="Puducherry">Puducherry</option>
            <option value="Daman & Diu">Daman & Diu</option>
        </select>
    </li>
        <br><br>
        
         </div>
         <br><br>
         <li class="arrangement">
         <div>
            <label for="adult">Adult</label>
            <select name="adult" id="adult">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            </select>   
         </div>
         
            <div>
            <label for="child">Child</label>
            <select name="child" id="child">
             <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            </select>   
         </div>
         <div>
            <label for="infant">Infant</label>
            <select name="infant" id="infant">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            </select>   
         </div>
        </li>
        <label> Firstname </label>         
<input type="text" name="firstname" size="15"/> <br> <br>  
<label> Middlename: </label>     
<input type="text" name="middlename" size="15"/> <br> <br>  
<label> Lastname: </label>         
<input type="text" name="lastname" size="15"/> <br> <br> 
<label> Moblie Number: </label>         
<input type="number" name="Mobile_Number" size="12"/> <br> <br> 
<label> Aadhar: </label>         
<input type="number" name="Aadhar" size="12"/> <br> <br>
         <div class="set">
            <lable for="economy">Economy</lable>
            <select name="economy" id="economy">
                <option value="Economy">Economy</option>
                <option value="Business">business</option>
                <option value="First">First</option>
            </select>
         </div>
         <li>
            <div class="file">
                Upload Aadhar(.png):  
                <input type="file" name="upload" accept="application/png,application/pdf" />
            </div>
         </li>
         <br><ul style=" position:absolut;left:135px;">
         <input type="submit"value="submit"></ul>
         <div></ul> </form>
            <div class="scroll-text"><p  class="heading">
            HELLO THIS IS RUSH BOAT.HAVE A GREAT BOATY DAY!!
        </p></div></div></li>


    </body>
</html>