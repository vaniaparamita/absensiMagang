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
                background-image:url(bg.jpg);
                background-size: cover;
                background-attachment:fixed;
                color:#ffffff;
                font-family: 'Raleway', sans-serif;     
                font-weight: bold;
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
                background-color:#505254;
                border:2px solid #e6e6e6;
                display:inline-block;
                cursor:pointer;
                border-radius:8px;
                padding: 16px 64px;
                opacity:0.7;
                color:#ffffff;
                text-align:center;
                text-decoration:none;
                font-size:18px;   
            }

            .button:hover {
               background-color:#383838;  
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                  
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
