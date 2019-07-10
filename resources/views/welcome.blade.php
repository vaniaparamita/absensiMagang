<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PT. Garuda Mitra Sejati</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>
            html, body {
                background-image:url(bg2.png);
                background-size: cover;
                background-attachment:fixed;
                color:#ffffff;
                font-family: 'Raleway', sans-serif;     
                height: 100vh;
                margin: 0;
            }
            .hr-si{
                color:#1b6615;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 78px;
            }

            .links > a {
                color: #858585;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 28px;
            }

            .button{
                position:relative;
                background-color: transparant;
                border:3px solid #c7c7c7;
                display:inline-block;
                cursor:pointer;
                border-radius:5px;
                padding: 15px 56px;
                color:#ffffff;
                text-align:center;
                text-decoration:none;
                font-size:18px;  
                font-weight: bold; 
            }

            .button:hover {
               background-color:#c7c7c7;
               opacity: 0.5;  
            }

            .zoom-effect {  
                position: relative;
                width: 100%;
                height: 360px;
                margin: 0 auto;
                overflow: hidden;  
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                    <a href="{{ url('/login') }}">Home</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif   
               <div class="content">
                  <div class=image>
                      <img src="/jcm.png" alt="User Image" width="250px">
                 </div> 
                <br />
                <div class="title m-b-md">            
                   WELCOME TO HR-IS
                </div>
                <div class="links">
                    <a style="color:white">HANYA UNTUK KARYAWAN PT.GARUDA MITRA SEJATI</a>
                </div>
                <br /><br /><br />
                    <a href="{{ url('/login') }}" class="button">LOGIN</a>
            </div>
        </div>
    </body>
</html>
