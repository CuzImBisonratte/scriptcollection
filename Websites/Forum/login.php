<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de-de" class="" lang="de-de">
<!DOCTYPE HTML>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Forum by CuzImBisonratte">
    <meta name="keywords" content="CuzImBisonratte, Forum">
    <meta name="author" content="CuzImBisonratte">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="cookieconsent.css" />
    <script src="cookieconsent.js" defer="defer" type="text/javascript"></script>
    <script src="main.js" defer="defer" type="text/javascript"></script>
    <script type="text/javascript">
        //<![CDATA[
        window.addEventListener("load", function() {
            window.wpcc.init({
                "border": "thin",
                "corners": "small",
                "colors": {
                    "popup": {
                        "background": "#eceef2",
                        "text": "#000000",
                        "border": "#00a9db"
                    },
                    "button": {
                        "background": "#00a9db",
                        "text": "#ffffff"
                    }
                },
                "position": "top",
                "content": {
                    "href": "Datenschutz.html",
                    "message": "Diese Website verwendet Cookies um die bestmögliche Nutzererfahrung bieten zu können. Mit der weiteren Benutzung erklären Sie sich als mit der Speicherung von Cookies einverstanden.",
                    "link": "Informationen zum Datenschutz auf dieser Website",
                    "button": "Zustimmen"
                }
            })
        });
        //]]>
    </script>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        form {
            border: 3px solid #f1f1f1;
        }
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 80.25%;
            font-weight: bold;
            text-align: center;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        .cancelbtn {
            width: 19%;
            padding: 14px 20px;
            background-color: #f44336;
            margin: 8px 0;
            cursor: pointer;
            border: none;
            font-weight: bold;
            text-align: center;
        }
        
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }
        
        img.avatar {
            width: 40%;
            border-radius: 50%;
        }
        
        .container {
            padding: 16px;
        }
        
        span.psw {
            float: right;
            padding-top: 0px;
        }
        /* Change styles for span and cancel
        button on extra small screens */
        
        @media only screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
        
        @media only screen and (max-width: 500px) {}
        
        #TheFullThing {
            width: 45em;
            margin-left: 35em;
            margin-right: 35em;
        }


    </style>
</head>

<body>
    <nav>
        <div id="centered">
            <div class="topnav">
                <a href="index.html">Home</a>
                <a href="impressum.html">Impressum</a>
                <a href="Datenschutz.html">Datenschutzerklärung</a>
                <a href="Kontakt.html">Kontakt</a>
                <a href="links.html">Links</a>
                <a class="active" href="login.html">Login</a>
                <a href="news.php">News</a>
            </div>
        </div>
    </nav>
    <div id="TheFullThing">
        <div id="centered">
            <form action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <img style="border-radius: 50%" src="img_avatar2.png" alt="Ladekreis.gif" class="avatar">
                </div>
                <div class="container">
                    <label for="uname"><b>Benutzername</b></label>
                    <input type="text" placeholder="Benutzername eingeben" name="uname" required>

                    <label for="psw"><b>Passwort</b></label>
                    <input type="password" placeholder="Passwort eingeben" name="psw" required>
                    <br>
                    <button id="submit-button" type="submit">Login</button>
                    <label>
                        <button type="reset" class="cancelbtn">Abbrechen</button>
                        <br>
                        <input type="checkbox" name="remember"> Eingeloggt bleiben
                    </label>
                    <span class="psw"><a href="loginforgot.html">Passwort vergessen?</a></span>
                </div>
            </form>
        </div>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">^</button>
</body>

</html>