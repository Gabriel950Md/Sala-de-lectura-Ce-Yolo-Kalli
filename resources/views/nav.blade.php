<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="nav-container">
        <ul class="nav-menu">
            <li class="nav-item active">
                <a href="{{ route('home') }}" class="nav-link">
                    <span class="material-icons-round nav-icon">home</span>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('blog') }}" class="nav-link">
                <span class="material-symbols-outlined">
home
</span>
                    <span class="nav-text">Work</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route('comoserparte') }}" class="nav-link">
                <span class="material-symbols-outlined">
mail
</span>
                    <span class="nav-text">Contact</span>
                </a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link">
                <span class="material-symbols-outlined">
settings
</span>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
    </ul>
    </nav>
     @yield('content')
    <style>
    :root{
        --primary: #29FCFF; 
        --secondary: #a5b1c2;
        --accent: #FF6B6B;
        --surface: rgba(255, 255, 255, 0.95);
    }
    *{
        marging: 0;
        padding: 0;
        box: border-box;
    }
    body{
        display: flex;
        justify-content: center;
        aligs-items: center;
        min-height: 100vh;
         background-color:rgb(255, 247, 247); 
        /*background-color: lightcoral; */
        font-family: 'Segoe UI', 'system-ui', sans-serif;
    }

    nav-container{
        background: var(--surface);
        padding: 1.25rem 2rem;
        border-radius: 1.5rem;
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        background-color: #1e272e;
    }

    .nav-menu{
        display: flex;
        gap: 2.5rem;
        list-style: none;
    }
    .nav-item{
        position: relative;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, , 0.2, 1);

    }
    .nav-link{
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
        color: var(--secondary);
        transition: color 0.3s ease;
    }
    .nav-icon{
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
        transition: transform 0.3s ease;
    }
    .nav-text{
        font-size: 0.85rem;
        font-weight: 500;
        letter-spacing: 0.5px;
        color: var(--primary);
        transform: translateY(10px);
        transition: all 0.3s ease;
        opacity: 0;
    }
    .nav-item:hover .nav-icon{
        color: var(--primary);
        transform: traslateY(-5px);
    }
    .nav-item:hover .nav-text{
        opacity: 1;
        transform:  traslateY(0);
    }
    .nav-item.active .nav-icon{
        color:  var(--accent);
    }
    .nav-item:: before{
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 100%;
        height: 2px;
        background: var(--primary);
        transform: scaleX(0);
        transform-origin: center;
        transition: transform 0.3s ease;
    }
    .nav-item:hover::before{
        transform: scaleX(1);
    }
    </style>
    
    
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title></title>
    <style>
        body {
            margin: 0;
            padding-bottom: 200px;
        }
        .content {
            padding: 20px;
        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%; 
            background-color:	#87CEEB;
            color: white; 
            padding: 20px 0; 
            text-align: center; 
        }
    </style>
</head>
<body>



</body>
</html>