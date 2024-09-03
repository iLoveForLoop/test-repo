<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>laravel demo</title>
    <style>
        .bouncing-ball {
            width: 50px;
            height: 50px;
            background-color: #3498db;
            border-radius: 50%;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-150px);
            }
            60% {
                transform: translateY(-75px);
            }
        }
        body{
            background-color: #00ffbf;
        }

        .bg-custom{
            background-color: #3498db;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/profile')}}">Profile</a>
                </li>
            </ul>
        </div>
    </nav>

    <h1 class="display-1 text-primary text-center mb-4 text-dark">Laravel Demo</h1>
    <div class="bouncing-ball"></div>
    
</body>
</html>