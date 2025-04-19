
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kullanıcı girişi</title>
</head>

<body>
<!--
css stil ve tasarım yapılır.

-->
<?php include 'nav-bar.php'; ?>
<?php include 'yan-bar.php'; ?>


<style>


#nav-bar {
    width: 100%;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000; /* Önde kalmasını sağla */
}

body {
    font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
}

#ana_sayfa {
    display: flex;
    width: 80%;
    max-width: 900px;
    justify-content: space-between;
    align-items: center;
    background: rgb(133, 193, 91);
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0px 0px 10px rgba(8, 218, 71, 0.92);

}

/* Social Media Login Section (left side) */
#kont {
    width: 60%; /* Increased width by 40% */
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Align to the left */
    gap: 10px;
  
}

#kont a {
    display: flex;
    align-items: center;
    justify-content: flex-start; /* Align to the left */
    gap: 10px;
    width: 100%;
    max-width: 350px; /* Increased width */
    padding: 10px;
    font-size: 1rem;
    text-decoration: none;
    color: white;
    border-radius: 5px;
    font-size: 20px;
}

#kont #g { background-color: rgb(215, 80, 86); }
#kont #f { background-color: rgb(53, 75, 136); }
#kont #x { background-color: rgb(103, 178, 229); }



/* Login Section (right side) */
#login_form {
    width: 35%;
    text-align: left;
}

#login_form input {
    width: 90%;
    padding: 10px;
    margin: 10px 0;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#login_form input[type="button"] {
    background-color: rgb(90, 194, 102);
    color: white;
    cursor: pointer;
    border: none;
}

#login_form input[type="button"]:hover {
    background-color: rgb(70, 174, 92);
}

/* Small screen compatibility */
@media (max-width: 600px) {
    #ana_sayfa {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    #login_form, #kont {
        width: 100%;
    }
}

.panel {
    position: fixed; /* Sabit konumlandırma */
    top: 120px; /* Navbar yüksekliği + ekstra boşluk */
    left: 0;
    width: 300px;
    height: calc(100vh - 120px); /* Navbar ve boşluk için ayarlama */
    background-color: black;
    color: white;
    padding-left: 10px;
}



</style>


<div id="ana_sayfa">
    <!-- Social Media Login Section (left side) -->
    <div id="kont">
        <a href="#" id="g" style="    box-shadow: 0px 0px 10px rgba(218, 22, 8, 0.92);"><img src="../resimler/google_logo.png" width="20px"> Sign in with Google</a>
        <a href="#" id="f" style="box-shadow: 0px 0px 10px rgba(11, 7, 229, 0.92);"><img src="../resimler/facebook_logo.jpg" width="20px"> Sign in with Facebook</a>
        <a href="#" id="x" style="box-shadow: 0px 0px 10px rgba(12, 88, 230, 0.92);;"><img src="../resimler/x_logo.jpg" width="20px"> Sign in with X</a>
    </div>



    <!-- Login Section (right side) -->
    <div id="login_form">
        <h2>User Login</h2>
        <input type="text" placeholder="Username">
        <input type="password" placeholder="Password">
        <input  style="width: 97%;" type="button" value="Login">
    </div>
</div>

</body>
</html>