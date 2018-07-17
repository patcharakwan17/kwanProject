@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- font awlay some -->
        <link rel="stylesheet" type="text/css" href="/css/fontawesome-all.min.css">
        
        <style>
            body{
                font-family: 'Indie Flower', cursive;
            }
            .caption{
                font-family: 'Indie Flower', cursive;
                color: white;
                text-shadow: 3px 3px 5px black;
                font-size: 40px;
            }
            #indicators:hover{
                box-shadow: 2px 2px 5px black;
                cursor: pointer;
            }
            .btnGetItNow{
                /*background-color: #202724;*/
                font-size: 20px;
                background-color: transparent;
                border: 1px solid white; color: #fff; 
                padding: 8px 20px 8px 20px;
                width: 150px;
            }
            .btnGetItNow:hover{
                /*background-color: #df4118;*/
                background-color: #202724;
                cursor: pointer;
            }
            .btnContact{
                font-size: 35px; border: 1px solid #202724; padding: 10px 45px 8px 45px;
                background-color: transparent;
            }
            .btnContact:hover{
                background-color: #df4118;
                color: #fff;
                cursor: pointer;
            }
            .plannerstyl{
                width: 100%;text-align: center; background-color: #fff;
                
            }
            .promote{
                width: 100%;
            }
            
        </style>
    </head>
    <body>
        <div>
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active" id="indicators"></li>
                    <li data-target="#demo" data-slide-to="1" id="indicators"></li>
                    <li data-target="#demo" data-slide-to="2" id="indicators"></li>
                </ul>
  
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/1.jpg" alt="Los Angeles" width="100%" height="550px">
                        <div class="carousel-caption"><h3 class="caption">Photo Studio</h3></div>   
                    </div>
                    <div class="carousel-item">
                        <img src="images/2.jpg" alt="Chicago" width="100%" height="550px">
                        <div class="carousel-caption"><h3 class="caption">Organize</h3></div>   
                    </div>
                    <div class="carousel-item">
                        <img src="images/3.jpg" alt="New York" width="100%" height="550px">
                        <div class="carousel-caption"><h3 class="caption">Location</h3></div>   
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <br>
        <center>
        <div>
            <table style="text-align: center;width: 90%;">
                <tr style="height: 550px; ">
                    <td>
                        <div><div style="position: absolute;padding-top: 330px; padding-left: 40px; font-family: 'Raleway', sans-serif;">
                            <h3>wedding dress</h3>
                            <p>Stylish of wedding dress are many <br>and more international...</p>
                            </div>
                            <div class="pict"><img src="images/beautiful-bride-dress-157757.jpg" style="width: 320px; box-shadow: 2px 2px 5px gray;"></div>
                        </div>
                    </td>
                    
                    <td style="text-align:center;">
                        <div style="width: 850px;">
                            <div class="studio">
                                
                                <div style="position: absolute; color: white; text-shadow: 3px 3px 5px black; padding-top: 320px; padding-left: 150px;font-family: 'Raleway', sans-serif;">
                                    <h3>The studio</h3>
                                    <p>The photo Studio Both on and off site<br>
                                        ...If you love somebody, let them go, for if they return, they were always yours. <br>And if they don’t, they never were....
                                    </p>
                                </div>
                                    <img src="images/4.jpg" style="width: 850px; box-shadow: 2px 2px 5px gray;">
                                
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            
            
            <table class="promote">
                <!--<tr><td>&nbsp;</td><td>&nbsp;</td></tr>-->
                <tr style="background-color: #60be98; width: 100%; color: #fff;">
                    <td colspan="2" style="text-align: center;">
                        <br>
                        
                        <br>
                        <h2>Promotion</h2>
                        <br>
                        <p>.We have many promotions in stores.<br>...The promotion of this month...</p>
                        <button style="" class="btnGetItNow">Get it now!</button>
                        <br>
                        <br>
                        <br>
                    </td>
                </tr>
            </table>
            
             
            <div class="plannerstyl"><center>
            <table style="width: 70%;text-align: center; background-color: #fff;">
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td colspan="6"><h1> - Planner Flow - </h1></td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr>
                    
                    <td style="width: 120px;"><img src="images/icons8-heart-with-arrow-50.png"></td>
                    <td style="width: 120px;"><img src="images/icons8-wedding-rings-50.png"></td>
                    <td style="width: 120px;"><img src="images/icons8-quality-50.png"></td>
                    <td style="width: 120px;"><img src="images/icons8-wedding-cake-50.png"></td>
                    <td style="width: 120px;"><img src="images/icons8-garland-50.png"></td>
                    <td style="width: 120px;"><img src="images/icons8-people-50.png"></td>
                </tr>
                <tr style="font-size: 20px;">
                    <td style="width: 120px;">Love Amour</td>
                    <td style="width: 120px;">Witness Love</td>
                    <td style="width: 120px;">Weding Card</td>
                    <td style="width: 120px;">Wedding Cake</td>
                    <td style="width: 120px;">Party</td>
                    <td style="width: 120px;">Guest</td>
                </tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
            </table>
                </center>
            </div>
            
            
            
        </div>
            <div style="width: 100%;"><br><br><br>
                <button class="btnContact">Contact Us</button>
                
            </div>
            </center>
    </body>
</html>
@endsection