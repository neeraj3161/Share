<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign service</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="navbar">
        <a href="/AMS/ADMIN/index.php">Home</a>
        
        <a href="/AMS/ADMIN/customerSection.php" class="nav-links"  >Customer section</a>

        <a href="/AMS/ADMIN/staffSection.php" ">Staff section</a>
        <a href="#news">Logout</a>
</div>


<div class="form-add">
    
    <h1 class="info-head add-t">Assign service</h1>

    <form action="/AMS/ADMIN/assignform.php" method="post" style="text-align: center;" onsubmit=" return verifyData()">
            <input class="input fname" name="staffId" type="number" placeholder="Enter staff Id" required><br>
            <input class="input" name="serviceId" type="number" placeholder="Enter service Id" required><br>
           
            
            <button class="btn" type="reset">Reset form</button>
            <button class="btn sub" type="submit">Submit</button>
    </form>
</div>
</body>
</html>