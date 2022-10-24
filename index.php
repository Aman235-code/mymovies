<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        select,input:hover{
            cursor: pointer;
        }
    </style>

</head>

<body>
    <?php include "main/_header.php"; ?>

    <?php include "main/_dbconnect.php"; ?>

    <div class="container1">
        <h1 style="text-align: center;margin-top: 0px;background-color: antiquewhite;">Welcome to MyMovies -- Enjoy the lastest Movies</h1>
    </div>

    <div class="filter" style="text-align: center;margin-top: 10px;font-size: 25px;">
        <label for="movies">Released in Year : </label>
        <select name="movies" id="movies" style="width: 80px;height: 30px;font-size: 22px;border: 2px solid black;border-radius: 10px;background-color: aqua;">
            <option value="">All</option>
            <option value="2001">2001</option>
            <option value="2010">2010</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
        </select>

        <input type="button" value="Submit" id="btn" style="width: 80px;height: 35px;font-size: 20px;border: 2px solid;border-radius: 16px;
            background-color: aquamarine;">
    </div>

<div class="cont1" style="display:grid;grid-template-columns: auto auto auto;">
    <?php
        $sql = "SELECT * FROM `movies`"; 
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result))
{
            $title = $row['Title'];
            $Summary = $row['Summary'];
            $Short = $row['Short Summary'];
            $Genres = $row['Genres'];
            $IMDBID = $row['IMDBID'];
            $Runtime = $row['Runtime'];
            $Youtube = $row['Youtube Trailer'];
            $Rating = $row['Rating'];
            $Poster = $row['Movie Poster'];
            $Year = $row['Year'];
            $Director = $row['Director'];
            $Writers = $row['Writers'];
            $Cast = $row['Cast'];

    echo '
    <div class="container2" style="margin-left: 50px;margin-top: 50px;">

        <div class="card" style="border: 4px solid white;width: 400px;border-radius:20px;background-color: beige;box-shadow: -2px 2px 4px black,2px -2px 4px black;">

            <img src="'.$Poster .'" width="397px" height="278px" alt="img1.jpg" style="border: 2px solid red;border-radius: 25px;">

            <p class="title" style="text-align: center;font-weight: 700;font-size: 25px;">'.$title.'</p>
    
            <div class = "con-flex" style="display: flex;margin-top:10px;">

                <div class="year" style="margin-left: 15px;color: brown;border: 2px solid green;border-radius: 6px;background-color: antiquewhite; width:   90px;text-align: center;">Year : '.$Year.'</div>
    
                <div class="you-trai" style="margin-left: 108px;border: 2px solid green;border-radius: 8px;background-color: antiquewhite;width: 170px;text-align: center;">Trailer : <a href="" style="text-decoration: none;">'.$Youtube.'</a></div>

            </div>

            <div class = "con-flex2" style="display:flex;">
                
                <p class="runtime" style="margin-left: 10px;margin-top: 15px;border: 2px solid green;background-color: antiquewhite;width: 105px;
                    text-align: center;border-radius: 8px;">Runtime : '.$Runtime.'</p>

                <p class="imdb" style="margin-top: 18px;margin-left: 110px;border: 2px solid green;background-color: antiquewhite;width: 140px;
                    text-align: center;border-radius: 8px;">IMDB : '.$IMDBID.'</p>
            </div>

            <div class="para" style="margin-left: 8px;margin-top: 8px;">
        
                <p class="summ" style="text-align: justify;width: 383px;">'.$Summary.'</p>

            </div>

            <div class="cont2" style="margin-top:8px;margin-left:8px;">

                <p class="short-summ" style="text-align: justify;margin-top: 8px;width:383px">.'.$Short.'</p>

            </div>

            <p class="genre" style="text-align: center;margin-top:8px;">Genre : '.$Genres.'</p>  

            <div class="crete" style="text-align: center;margin-top: 8px;">
                <p class="casts">Casts : '.$Cast.'</p>
                <p class="writers">Writen By : '.$Writers.'</p>
                <p class="director">Directed By : '.$Director.'</p>
            </div>

            <p class="rating" style="margin-top: 14px;text-align: right;margin-right: 15px;">Movie Rating : '.$Rating.'</p>

        </div>
    </div>
    ';
 
}

    ?>
</div>

<script type="text/javascript" src="js/jquery.js"> </script>
    <script>
        $(document).ready(function(){
          
            $('#btn').on("click",function(e){
                var year = document.getElementById('movies').value;
                $.ajax({
                    url : "ajax-load.php",
                    type : "POST",
                    data :{
                        Release : year
                    },
                    success : function(data){
                        $(".cont1").html(data);
                    }
                })
            })
        });
    </script>
</body>

</html>