<?php
        $Release = $_POST['Release'];
        include "main/_dbconnect.php"; 
        $sql = "SELECT * FROM movies WHERE Year =  '$Release'";
        $res = mysqli_query($conn,$sql);
        $val = "";

        if(mysqli_num_rows($res)>0)
    {
            $val =  '<div class="cont1" style="display:grid;grid-template-columns: auto auto auto;">';

            while($row=mysqli_fetch_assoc($res))
        {
            $val .='<div class="container2" style="margin-left: 50px;margin-top: 50px;">   
                    <div class="card" style="border: 4px solid white;width: 400px;border-radius:20px;background-color: beige;
                        box-shadow: -2px 2px 4px black,2px -2px 4px black;">

                    <img src="'.$row['Movie Poster'].'" width="397px" height="278px" alt="" style="border: 2px solid red;border-radius: 25px;">
                    
                    <p class="title" style="text-align: center;font-weight: 700;font-size: 25px;">'.$row['Title'].'</p>

                    <div class = "con-flex" style="display: flex;margin-top:10px;">

                    <div class="year" style="margin-left: 15px;color: brown;border: 2px solid green;border-radius: 6px;background-color: antiquewhite; width: 90px;text-align: center;">Year : '.$row['Year'].'</div>

                    <div class="you-trai" style="margin-left: 108px;border: 2px solid green;border-radius: 8px;background-color: antiquewhite;
                    width: 170px;text-align: center;">Trailer : <a href="" style="text-decoration: none;">'.$row['Youtube Trailer'].'</a></div>
                    
                    </div>
                    <div class = "con-flex2" style="display:flex;">
                        <p class="runtime" style="margin-left: 10px;margin-top: 15px;border: 2px solid green;background-color: antiquewhite;
                            width: 105px;text-align: center;border-radius: 8px;">Runtime : '.$row['Runtime'].'</p>
    
                        <p class="imdb" style="margin-top: 18px; margin-left: 110px;border: 2px solid green;background-color: antiquewhite;width: 140px;text-align: center;border-radius: 8px;">IMDB : '.$row['IMDBID'].'</p>
                    </div>


                    <div class="para" style="margin-left: 8px;margin-top: 8px;">

                    <p class="summ" style="text-align: justify;width: 383px;">'.$row['Summary'].'</p>
                    
                    </div>
                    
                    <div class="cont2" style="margin-top:8px;margin-left:8px;">
    
                    <p class="short-summ" style="text-align: justify;margin-top: 8px;width:383px">.'.$row['Short Summary'].'</p>

                    </div>
    
                    <p class="genre" style="text-align: center;margin-top:8px;">Genre : '.$row['Genres'].'</p>  

                    <div class="crete" style="text-align: center;margin-top: 8px;">
                        <p class="casts">Casts : '.$row['Cast'].'</p>
                        <p class="writers">Writen By : '.$row['Writers'].'</p>
                        <p class="director">Directed By : '.$row['Director'].'</p>
                    </div>

                    <p class="rating" style="margin-top: 14px;text-align: right;margin-right: 15px;">Movie Rating : '.$row['Rating'].'</p>

                    </div>
                </div>';
        }
        $val .= '</div>';
        echo $val;
   }
   else{
    echo "<H1>Oops!! there is no movie released for this year";
   }
?>