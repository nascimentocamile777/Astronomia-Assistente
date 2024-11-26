<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AstronoMIA</title>
        <style>
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background: linear-gradient(135deg, #f48fb1, #ce93d8);
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .container {
                background-color: #fff;
                border-radius: 15px;
                padding: 30px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                text-align: center;
                max-width: 400px;
                width: 100%;
            }

            h2 {
                color: #9c27b0;
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 20px;
                padding: 20px;
            }
            p {
                color: #9c27b0;
                font-size: 10px;
                line-height: 1.5;
                margin: 20px 0;
                font-weight: 400;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            }
            img {
                width: 70px;
                height: auto;
                margin-left: 10px;
                border-radius: 50%;
            }
            form {
                display: flex;
                align-items: end;
                justify-content: center;
            }

            input[type="text"] {
                width: 70%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-right: 10px;
                font-size: 16px;
                transition: border-color 0.3s;
            }
            input[type="text"]:focus {
                border-color: #9c27b0;
                outline: none;
            }

            button {
                padding: 10px 15px;
                background-color: #9c27b0;
                border: none;
                border-radius: 5px;
                color: #fff;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s, transform 0.2s;
            }

            button:hover {
                background-color: #7b1fa2;
                transform: scale(1.05);
            }
            .response {
                margin-top: 20px;
                text-align: left;
            }

            .response h4 {
                color: #9c27b0;
                font-size: 18px;
            }

            .response p {
                font-size: 16px;
                color: #333;
            }
        </style>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
