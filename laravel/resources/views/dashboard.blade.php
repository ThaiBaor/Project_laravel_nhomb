<!DOCTYPE html>
<html>

<head>
    <title>Custom Auth in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table, th, td, tr{
            border: 2px black solid;
        }
        .detail{
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">PositronX</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('listuser') }}">List User</a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @guest
    <div></div>
    @else
    <div class="detail">
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Photo</th>
                <th >Password</th>
            </tr>
            <tr>            
                <td>{{auth()->user()->name}}</td>
                <td>{{auth()->user()->email}}</td>
                <td>{{auth()->user()->phone}}</td>
                <td><img style="height: 200px width: 200px;" src="./image/{{}}<?php echo auth()->user()->photo ?>" alt=""></td>
                <td>{{auth()->user()->password}}</td>
            </tr>
        </table>
    </div>
    @endguest
    @yield('content')
</body>

</html>