<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" sizes="4x4" href="{{asset('assets/img/nmpc-logo.png')}}">
        <title>msu-iit nmpc</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Google Font: Source Sans 3 -->
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+3:wght@400;500;600;700;800;900&display=swap');
            :root{
                --primary-color: #9c0d0f;
                --primary-color-dark: #800000;
                --secondary-color: ;
                --text-dark: #1f2937;
                --text-light: #6b7280;
                --extra-light: #fffceb;
                --max-width: 1200px;
            }

            *{
                font-family: 'Source Sans 3', sans-serif;
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            body{
                background-image: linear-gradient(rgba(255,255,255,.5),rgba(255,255,255,.8)), url("{{asset('assets/img/Bg.jpg')}}");
                background-position: center;
                background-repeat: no-repeat;
                display: flex;
                justify-content: center;
                align-items: center;
                background-size: cover;
                min-height: 100vh;
            }

            a{ text-decoration: none; }

            nav{
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                background-color: var(--primary-color);
                z-index: 99;
            }
            .nav_content{
                max-width: var(--max-width);
                margin: auto;
                padding: 1.5rem 1rem;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            nav .logo a{
                font-size: 1.5rem;
                font-weight: 600;
                color: #ffffff;
                transition: .3s;
            }

            .section_container{
                min-height: 100vh;
                max-width: var(--max-width);
                margin: auto;
                padding: 1rem;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 4rem;
            }

            .content{
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            h1{
                color: #800000;
                line-height: 1.2;
                font-size: 56px;
                font-weight: 700;
            }
            h3{
                font-size: 30px;
                text-transform: uppercase;
                font-weight: 700;
                color: #000;
            }

            p{
                font-size: 16px;
                font-weight: 500;
                line-height: 1.5;
                text-align: justify;
                padding: 20px;
                border-radius: 10px;
                margin: 20px 0 40px;
                border: none;
                background: rgba(255,255,255,.3);
                box-shadow: 0 0 10px rgba(0, 0, 0, .2);
                backdrop-filter: blur(10px);

            }
            span{
                color: var(--primary-color-dark);
                font-weight: bold;
            }

            .action_btns{
                display: flex;
                gap: 1rem;
            }
            .action_btns a{
                background: var(--primary-color-dark);
                color: white;
                font-size: 1rem;
                font-weight: 600;
                letter-spacing: 2px;
                padding: 1rem 2rem;
                outline: none;
                border: 2px solid var(--primary-color);
                border-radius: 10px;
                transition: 0.3s;
                cursor: pointer;
            }

            .image{
                display: grid;
                place-items: center;
            }
            .image img{
                width: min(50rem, 100%);
                border-radius: 50%;
            }

            @media (width < 750px) {
                .section_container{
                    padding: 10rem 1rem 5rem 1rem;
                    text-align: center;
                    grid-template-columns: repeat(1, 1fr);
                }

                .image{ grid-area: 1/1/2/2; }

                .action_btns{ margin: auto; }
            }
        </style>

    </head>

    <body>

        <section class="section">
            <div class="section_container">
                <div class="content">
                    <h1>Hey there, admin.</h1>
                    <h3>Welcome Back!</h3>
                    <p>
                        You're about to enter the personnel management subsystem of the
                        <span>MSU-IIT National Multi-Purpose Cooperative (MSU-IIT NMPC)</span>.
                        Please choose either of the <span>two admins</span> of which you want to enter.
                        <br><br>
                        Have a great day, <span>admin!</span>
                    </p>
                    <div class="action_btns">
                        <a href="{{url('BOD_login')}}" class="BOD">BOD admin</a>
                        <a href="{{url('DH_login')}}" class="DH">Department Head admin</a>
                    </div>
                </div>

                <div class="image">
                    <img src="{{asset('assets/img/nmpc-logo.png')}}">
                </div>
            </div>
        </section>
    </body>
</html>
