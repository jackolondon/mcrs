<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MCRS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;

				
                color: black;
                /*font-family: 'Raleway', sans-serif;*/
				font-family : 'Arial';
                font-weight: 100;
				width : 100%;
				height : 100%;
				margin : 0;
				padding : 0;
				background-size: contain;
				background-repeat : no-repeat;
				overflow : hidden;
            }

			.occupied{
				background-image: url('../images/schuman1080bas.jpg');
			}

			.empty{
				background-image: url('../images/schuman1080.jpg');
			}

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
				/*background-color :	rgba(255, 255, 255,0.9);*/
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
                font-size: 104px;
				text-transform : uppercase;
				
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body @if (sizeof($rooms) > 0) class= "occupied" @else class = "empty" @endif>
        <div class="flex-center position-ref full-height">
            <div class="content">
				@foreach ($rooms as $room)
			
					<div class="title m-b-md">
						{{ $room->note }}
					</div>
			
				@endforeach
            </div>
        </div>
    </body>
</html>
