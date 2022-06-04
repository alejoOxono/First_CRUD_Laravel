<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
            body {
                margin: 0;
            }

            .header {
                height: 25vh;
            }

            .header {
                text-align: center;
                font-size: x-large;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                font-weight: bolder;
            }

            .header h1, h3 {
                margin: 0;
                position: relative;
                top:30px;
                right: 70px;
            }

            .header p {
                font-size: large;
                position: relative;
                top: 30px;
                right: 70px;
                color: dodgerblue;
            }

            .content {
                height: 50vh;
                display: flex;
                flex-direction: column;
            }

            .content .form-input, table {
                width: 40%;
                margin: 100px auto 0 auto;
                border-collapse: collapse;
            }

            .content table th, td {
                border: 1px solid;
                text-align: center;
            }

            .content .input-content {
                width:100%;
                display: flex;
                margin-bottom:10px;
            }

            .content form label {
                width:100%;
                display: flex;
                justify-content:space-between;
            }

            .content form  .input-text-content {
                width: 50%;
            }

            .content form .button-submit {
                width: 100px;
                margin: 5px auto 0 auto;
                display: block;
            }

            .header-img {
                float: right;
                padding-right: 120px; 
                width: 150px;
            }

            .footer {
                position: fixed;
                bottom:0;
                width:100%;
                height:10vh;
                background-color:dodgerblue;
                font-size:0.7em;
                color: white;
                text-align: center;
            }

            .button-update {
                padding: 6px;
                margin-bottom: 5px;
                border-radius: 10px;
            }

            .button-delete {
                margin: 0 auto;
                width: 100px;
            }

            .form-delete { 
                width: 40%;
                margin: 0 auto;
            }


    </style>


</head>
<body>

    <div class="header">
        <img src="/logo.png" class="header-img">
        <h1>CRUD</h1>
        <h3>Con Laravel</h3>
        @yield("header")
    </div>

    <div class="content">
        @yield("content")
    </div>

    <div class="footer">
        @yield("footer")
        Realizado por Alejandro Cardona Ocampo
    </div>
    
</body>
</html>