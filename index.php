<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <div class="bg_pic">
        <img src="165451.jpg" width="100%" alt="Not Found">
    </div>
    <div class="container">
        <h2>Welcome To Star Travel Agency.</h2>
        <p>
            Please Enter Your Details To Make sure Your Participation in The Trip
        </p>

        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" />
            <input type="number" name="age" id="age" placeholder="Enter Your Age" />
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" />
            <input type="email" name="email" id="email" placeholder="Enter Your Email" />
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone" />
            <textarea name="des" id="des" cols="30" rows="10" placeholder="Other Information"></textarea>
            <button class="btn" type="submit">Submit</button>
           
        <?php
     
        ?>
    </div>
    
    <script src="index.js"></script>
</body>

</html>