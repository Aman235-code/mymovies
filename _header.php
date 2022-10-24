<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    * {
        margin: 0;
        padding: 0;
    }

    ul {
        list-style: none;
        display: flex;
        padding: 17px;

    }

    li {
        margin-right: 50px;
        font-size: larger;
        font-family: cursive;
    }

    li:hover {
        cursor: pointer;
        color: red;
        text-shadow: 4px 3px 4px blue;
        font-weight: bolder;
    }

    nav {
        background-color: black;
        color: white;
        top: 0px;
        position: sticky;

    }

    #login {
        cursor: pointer;
        width: 100px;
        height: 40px;
        font-size: 19px;
        border: 2px solid cyan;
        border-radius: 22px;
        background-color: chocolate;
        position: relative;
        margin-left: 1314px;
        top: -50px;
        font-family: cursive;

    }


    #signup {
        cursor: pointer;
        width: 100px;
        height: 40px;
        font-size: 19px;
        border: 2px solid cyan;
        border-radius: 22px;
        background-color: chocolate;
        position: relative;
        margin-left: 1314px;
        top: -50px;
        margin-left: 1px;
        font-family: cursive;

    }

    #signup:hover {
        border: 2px solid white;
        background-color: green;
        color: red;
        text-shadow: 4px 3px 4px blue;
        font-weight: bolder;
    }

    #login:hover {
        border: 2px solid white;
        background-color: green;
        color: red;
        text-shadow: 4px 3px 4px blue;
        font-weight: bolder;
    }
    </style>
</head>

<body>
    <nav>
        <ul>

            <a href="" style="text-decoration:none;color:white;"><li style="margin-left: 50px;" class="container1">Home</li></a>

            <a href="" style="text-decoration:none;color:white;"><li class="container2">About Us</li></a>

            <li class="container3">Lists</li>

            <a href="" style="text-decoration:none;color:white;"><li class="container4">Contact Us</li></a>

        </ul>
    </nav>

    <div class="bholder">
        <button id="login" style="top: 10px;position: fixed;">Login</button>
        <button id="signup" style="margin-left: 1419px;top: 10px;position: fixed;">Sign Up</button>
    </div>

</body>

</html>