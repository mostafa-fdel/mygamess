<html>
    <head>
        <title> Games</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    
   
    <div class="box">
        
        <h2>Login</h2>
        
        <form method="Post">
            
            <div class="inputBox">
             <input type="email" name="email" required="">
             <label>Email</label>
            </div>
            <div class="inputBox" >
                <input type="password" name="password" required="">
                <label>Password</label>
                
            </div>
   
          
            <input type="submit" name="submit" value="Submit"  >
          
            <?php
    if (isset($_POST['submit'])) {
       
     echo $email=$_POST['email'];
     $password=$_POST["password"];
    
    ?>
            <?php
             if ($email != "" || $password != "")
            {
            
           
           header('Location: game2.html?LoginSuccess');
      
            }
            ?>
        </form>
    </div>
    
 <?php
    }
    ?>   
</body>    
</html>