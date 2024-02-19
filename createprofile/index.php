<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Profile</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>


<div class="container">
   
<form action = "process.php" method = "POST">
<div class="title">Create Profile</div>
     <div class = "row">
            
        <div class = "column">
       
            <label>First Name</label></br>
            <input type="text" name="fn" required placeholder = "Enter First Name Here!..." >

            <label>Middle Name</label></br>
            <input type="text" name="mn" required placeholder = "Enter Middle Name Here!..." >

            <label>Last Name</label></br>
            <input type="text" name="ln" required placeholder = "Enter Last Name Here!..." >

            <label>Age</label></br>
            <input type="text" name="age"required placeholder = "Enter Age Here!..." >

            <label>Sex</label></br>
            <input type="text" name="sex" required placeholder = "Enter Sex Here!..." >


        </div>
        <div class="column">
            <label>Address</label></br>
            <input type="text" name="address" required placeholder = "Enter Address Here!...">

            <label>Citizenship</label></br>
            <input type="text" name="citizenship" required placeholder = "Enter Citizenship Here!...">

            <label>Birthday</label></br>
            <input type="date" name="birthday" required>

            <label>Email</label></br>
            <input type="text" name="email" required placeholder = "Enter Email Here!...">

            <label>Contact Number</label></br>
            <input type="tel" name="cn" required placeholder = "Enter Contact Number Here!...">
            
        </div>


        
    </div>  
    <div class="btn">
    <input type="submit" name="create_profile" value="CREATE">
</div>
 
</div>

</form>
     
</body>
<script>

</script>
</html>