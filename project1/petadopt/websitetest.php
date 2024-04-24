<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

html,
body {
    height: 100%;
    width: 100%;
}

.top {
    display: grid;
    grid-template-columns: 20% 50% 16% 14%;
    height: 60px;
    top: 0;
    left: 0;
    right: 0;
    position: fixed;
    background-color: white;
    background-image: url('');
    

}

.topheading {
    color: black;
    font-size: 40px;
}

.topheading1 {

    display: grid;
    grid-template-columns: 30% 70%;
    align-items: center;
    justify-content: space-between;
}
.topheading12{
    display: flex;
    justify-content: space-between;
}
.topheading2 {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.login {
    background-color: purple;
    border-color: white;
    color: white;
    border: 0px;
    width: 80px;
    height: 35px;
    cursor: pointer;
}

.login:hover {
    background-color: purple;
    border-color: white;
    color: white;
    border: 0px;
    width: 100px;
    height: 55px;
    cursor: pointer;
    font-size: 19px;
}

.signup {
    background-color: white;
    border-color: white;
    color: purple;
    border: 0px;
    width: 80px;
    height: 35px;
    cursor: pointer;
}

.signup:hover {
    border-style: solid;
    border: 2px;
    font-size: 19px;
    border-color: purple;
    width: 100px;
    height: 55px;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.dropbtn{
    color: purple;
}
.dropdown:hover  {
   
    color: purple;
}

.boxes{
    display: grid;
    width: 100%;
    grid-template-columns: 3% 18% 19% 18% 19% 20% 3%;
    height: 300px;
    height: 220px;
    top: 74%;
    right: 0%;
    left: 0%;
    position: absolute;
    margin-left: 50px;
    margin-right: 100px;
}
.footer{
    font-size: small;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.footer5{
    justify-content: center;
   
    align-items: center;
    font-size: x-large;
    display: flex;
    flex-direction: column;
    background-color: purple;
    border-radius: 5px;
    
}
.footer7{
    display: flex;
    justify-content: center;
    color: white;
    font-size: medium;
}
.end{
    display: grid;
    grid-template-columns: 10% 80% 10%;
    margin-top: 20px;
    height: 30px;
}
.end2{
    background-color: purple;
}
.mid{
    height: 100vh;
    margin-top: 50px;
 
}
.mid1{
    display: grid;
    grid-template-columns: 19% 14% 2% 14% 2% 14% 2% 14% 19%;
    margin-top: 80px;

}
.mid2{
    border-style: solid;
    display: flex;
    border-color: purple;
    border-radius: 25px;
    height: 200px;
    justify-content: center;
    align-items: last baseline;
    color: purple;
    font-size: 25px;
    cursor: pointer;
    background-image: url('cute-small-puppy-line-icon-art-pet_444196-11217.avif'); /* Set your image */
    background-size: 70%; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden; 
}
.mid2 img {
    max-width: 70%; /* Ensure image doesn't exceed the width of its container */
    max-height: 70%; /* Ensure image doesn't exceed the height of its container */
    margin-right: 10px; /* Add some space between the image and the text */
}
.mid2:hover{
   
   border-style: solid;
   border-color: white;
}
.mid23{
    border-style: solid;
    display: flex;
    border-color: purple;
    border-radius: 25px;
    height: 200px;
    justify-content: center;
    align-items: last baseline;
    color: purple;
    font-size: 25px;
    cursor: pointer;
    background-image: url('services_pic.webp'); /* Set your image */
    background-size: 105%; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden;
    margin-left: 15px;
}
.mid23 img {
    max-width: 100%; /* Ensure image doesn't exceed the width of its container */
    max-height: 100%; /* Ensure image doesn't exceed the height of its container */
    margin-right: 10px; /* Add some space between the image and the text */
}
.mid23:hover{
   
   border-style: solid;
   border-color: white;
}

.mid22{
    border-style: solid;
    display: flex;
    border-color: purple;
    border-radius: 25px;
    height: 200px;
    justify-content: center;
    align-items: last baseline;
    color: purple;
    font-size: 25px;
    cursor: pointer;
    background-image: url('6fdfbc41d6a8e26d4b9073bc1afd899f.jpg'); /* Set your image */
    background-size: 75%; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden; 
}
.mid22 img {
    max-width: 100%; /* Ensure image doesn't exceed the width of its container */
    max-height: 100%; /* Ensure image doesn't exceed the height of its container */
    margin-right: 10px; /* Add some space between the image and the text */
}
.mid22:hover{
   
   border-style: solid;
   border-color: white;
}

.mid3{
    border-style: solid;
    display: flex;
    border-color: purple;
    border-radius: 25px;
    height: 200px;
    justify-content: center;
    align-items: last baseline;
    color: purple;
    font-size: 25px;
    cursor: pointer;
    background-image: url('bird-dribbble-new_4x.jpg'); /* Set your image */
    background-size: cover; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden; 
}
.mid3 img {
    position: absolute;
    max-width: 100%; /* Ensure image doesn't exceed the width of its container */
    max-height: 100%; /* Ensure image doesn't exceed the height of its container */
    margin-right: 10px;
    z-index: -1; /* Add some space between the image and the text */
}
.mid3:hover{
   
   border-style: solid;
   border-color: white;
}
.mid33{
    height:450px; 
    margin-top: 40px;
    background-image: url('Screenshot 2024-04-16 150955.png');
    background-size: cover; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden; 
}
.bottom{
    position: relative;
    height: 800px;
    background-image: url('6570.jpg'); /* Set your image */
    background-size: 90%; /* Ensure the image covers the entire div */
    background-position: center; /* Center the image */
    background-repeat: no-repeat;
    overflow: hidden; 
}
.img{
    max-width: 250%;
  max-height: 117vh;
  object-fit: cover;
}
.dogimg{
    height: 160px;
}
.catimg{
    height: 155Px;
}
.header1{
position: relative;

}
.picdoginputform{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 1300;
    height: auto;
    z-index: -1;
}
    </style>
    <script>
function showWarning() {
    var confirmation = confirm("You have to login First...");
    if (confirmation) {
        // If the user clicks 'OK', redirect to LoginPage.php
        window.location.href = "LoginPage.php";
    } else {
        // If the user clicks 'Cancel' or closes the dialog, do nothing
        // You can add additional behavior here if needed
    }
}

</script>

</head>
<body>
    
    <header class="header1">
      <div class="top">
        <div>
            <h1 class="topheading">
               PETADOPT
            </h1>
           </div>
            
            <div class="topheading1">
                <div>
    
                </div>
               <div class="topheading12">
                <a href="websitetest.php" id="home">HOME</a>
                <a href="">PET SHOP</a>
               <div>
                <div class="dropdown">
                    <a class="dropbtn" onclick="showWarning()"><u>DONATE</u></a>
                    <div class="dropdown-content">
                        <a href="#" onclick="showWarning()" >Cats</a>
                        <a href="#" onclick="showWarning()" >Dogs</a>
                        <a href="#" onclick="showWarning()" >Others</a>
                    </div>
                </div>
               </div>
                <a href="">FEEDBACK</a>
                <a href="">ABOUT US</a>
               </div>
            </div>
            <div>
    
            </div>
            <div class="topheading2">
            <a href="http://localhost/project1/petadopt/Loginpage.php">
                <button class="login">LOGIN</button>
            </a>
            <a href="http://localhost/project1/petadopt/signup.php"> <button class="signup">SIGNUP</button></a> 
            </div>
            
      </div>
    </header>
   <div class="mid">
    <div class="mid1">
        <div ></div>
        <div class="mid2">
            <img class="dogimg" src="" alt="">
            <p>DOG</p>
        </div>
        <div ></div>
        <div class="mid22">
            <img class="catimg" src="" alt="">
            CAT</div>
        <div ></div>
        <div class="mid23">SERVICES</div>
        <div ></div>
        <div class="mid3">
            <div class="overlay-text">
                <p>OTHERS</p>
            </div>
        </div>
        
        <div ></div>
    </div>
    <div class="mid33">
        
    </div>
   </div>
       
   
    <div class="bottom">
        <img class="img" src="" alt="">
        <div class="boxes">
            <div>

            </div>
            <div class="footer">
                <p>RESOURCES</p>
                <a href="">FAQS</a>
                <a href="">MOBILE APP DOWNLOAD</a>
                <a href="">PARTNERSHIPS</a>
                <a href="">NEWS</a>
            </div>
            <div class="footer">
                <p>ADOPT OR GET INVOLVED</p>
                <a href="">ADOPT A PET</a>
                <a href="">DONATE A PET</a>
                <a href="">TYPES OF PETS</a>
                <a href="">SHELTER HOUSE</a>
            </div>
            <div class="footer">
                <p>ABOUT DOGS AND PUPPIES</p>
                <a href="">ALL ABOUT DOG AND PUPPIES</a>
                <a href="">DOG ADOPTION</a>
                <a href="">DOG BREEDS</a>
                <a href="">FEEDING YOUR DOG</a>
                <a href="">DOG BEHAVIOR</a>
                <a href="">DOG TRAINING</a>
                <a href="">OTHER DOG INFORMATION</a>
                <a href=""></a>
            </div>
            <div class="footer">
                <p>ABOUT CATS AND KITTENS</p>
                <a href="">ALL ABOUT CATS AND KITTENS</a>
                <a href="">CAT ADOPTION</a>
                <a href="">CAT BREEDS</a>
                <a href="">FEEDING YOUR CAT</a>
                <a href="">CAT BEHAVIOR</a>
                <a href="">CAT HEALTH AND WELLNESS</a>
                <a href="">CAT TRAINING</a>
                <a href="">OTHER CAT INFORMATION</a>
            </div>
            <div class="footer5">
                <p class="footer7">
                    GET NOTIFIED BY JOINING US
                </p>
                <a href="C:\Users\Admin\Downloads\newlab\signup.html">
                    <button class="footer6">
                        SIGNUP
                    </button>
                </a>
            </div>
            <div>

            </div>
        </div>
      </div>
      <div class="end">
        <div></div>
        <div class="end2">
        </div>
        <div></div>
    </div>
    
</body>
</html>
