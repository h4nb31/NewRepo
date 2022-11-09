<!DOCTYPE html>

<html lang="en">
    <style>
        button{
            color: yellow;
            font: 1.3rem Inconsolata, monospace;
            text-shadow: 0 0 5px #C8C8C8;
            background-color: darkslategray;
            border-color: #1a202c;

        }
        a{
            color: yellow;
            font: 1.3rem Inconsolata, monospace;
            text-shadow: 0 0 5px #C8C8C8;
        }
        input{
            background: transparent;
            border: none;
            color: white;
            font: 1.3rem Inconsolata, monospace;
            text-shadow: 0 0 5px #C8C8C8;
            border-inline: none;
        }
        body{
            background-color: black;
            background-image: radial-gradient(
                rgba(0, 150, 0, 0.75), black 120%
            );
            height: 100vh;
            margin: 0;
            overflow: hidden;
            padding: 2rem;
            color: white;
            font: 1.3rem Inconsolata, monospace;
            text-shadow: 0 0 5px #C8C8C8;
        }
    </style>


    <head>
        <title>ToDo list</title>
    </head>
    <pre><output>
            Wlcome: This is ToDo list project

            Authentication: Login to your ToDo list
            Registration: To register go here <a href="registration" target="_blank">Registration</a>

            <label for="email">Email:<input type="text" id="email"></label>
            <label for="password">Password:<input type="password" id="password"></label>

            <button type="submit"> <?php </?> Login</button>


            Info: This project made for preperation to internship
                  This is just simple ToDo list with authorisation

            Author: h4nb31
            GitHub: <a href="https://github.com/h4nb31/NewRepo.git" target="_blank">https://github.com/h4nb31/NewRepo.git</a>
        </output></pre>
</html>
