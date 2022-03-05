<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <title>Locations Software</title>
    <style>
        body {
            font-size: 16px;
            font-family: 'Raleway', sans-serif;
            color: #00acc9;
            background-color: white;
        }

        .container {
            width: 100%;
            margin: auto;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .locations {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: auto;
            padding: 15px;
            text-align: center;
            align-self: center;
            background-color: white;
            width: 80%;
            max-width: 100%;
            max-height: 100%;
            border-radius: 0;
            box-shadow: none;
            border: none;
        }

        .div_img {
            margin: 20px 0;
        }

        .logo{
            width: 80%;
            max-width: 80%;
        }

        .title-module {
            font-weight: bold;
            text-align: center;
            color: #044c53;
            margin: 10px 0;
            max-width: 400px;
        }

        .div_classroom_code {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form_classroom_code {
            max-width: 500px;
            min-width: 350px;
        }

        .group-register {
            margin: 30px 0;
        }

        .label-register {
            font-size: 15px;
            color: inherit;
            display: block;
            font-weight: 700;
            text-align: left;
            margin-right: 15px;
        }

        .form__input-error {
            position: absolute;
            font-size: 10px;
            color: dimgray;
            padding-top: 5px;
            display: none;
        }

        .register-group {
            position: relative;
        }

        .register__input {
            width: 100%;
            padding: 10px 35px 10px 10px;
            margin: 20px auto 20px auto;
            border: 2px solid #dee2e6;
            border-radius: 5px;
            outline: 0;
        }

        .flex {
            position: relative;
            display: flex;
            align-items: center;
        }

        .submit-btn {
            margin-bottom: 20px;
            padding: 15px;
            text-align: center;
            width: 100%;
            max-height: 48px;
            font-size: 18px;
            line-height: 18px;
            display: inline-block;
            color: white;
            background: #4573D0;
            cursor: pointer;
            border-radius: 3px;
            border-style: none;
        }

        .submit-btn:hover {
            background-color: #3366CC;
            color: white;
        }

        .info_item{
            font-size: 20px;
            font-weight: bold;
        }

        .error_message {
            height: 45px;
            line-height: 45px;
            background: #F66060;
            color: black;
            font-size: 12px;
            padding: 0 15px;
            margin-top: 10px;
            border-radius: 3px;
            display: none;
        }

        .alert {
            margin: 10px 0;
            padding: 1em;
            color:#fff;
            border-radius: 2px;
            font-size: 14px;
        }

        .alert.error {
            background: #f2dede;
            border:1px solid #a94442;
            color: #a94442;
        }

        .alert.success {
            margin-bottom: 30px;
            background: #caf2de;
            border:1px solid #00a92c;
            color: #317400;
        }

        ul{
            margin: auto;
            padding: 0;
            text-align: left;
            width: 50%;
        }

        .creator-div {
            text-align: center;
            margin: 15px 0;
        }

        .creator-p {
            color: #909090;
            font-size: 10px;
            margin: 0;
        }

        @media screen and (min-width: 620px){
            body{
                background-color: #f1f3f6;
            }

            .locations {
                max-height: fit-content;
                max-width: 50em;
                width: 60vw;
                border-radius: 5px;
                box-shadow: 0 8px 20px 0 rgba(29,39,51,0.10);
            }
        }

    </style>
</head>
<body>
<div class="container">
    <div class="locations">
        <div class="div_img">
            <img src="presentation/img/locations_logo.png" alt="locations logo" class="logo">
        </div>
        <h2 class="title-module">Modify this title</h2>
        <div class="div_classroom_code">
            <form class="form_classroom_code" name="form_classroom_code" id="form_classroom_code" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="group-register" id="group__id">
                    <label for="classroom_code" class="label-register">Class code</label>
                    <p class="form__input-error">Error</p>
                    <div class="register-group flex">
                        <input type="text" id="classroom_code" class="register__input fsi" name="classroom_code">
                        <i class="register-validation-state fa fa-times-circle" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="submit">
                    <button type="submit" id="submit-btn" class="submit-btn">Submit</button>
                </div>
                <div class="error_message" id="error_message">
                    <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <b>Error:</b> Please fill in the form correctly. </p>
                </div>
                <?php if(!empty($success)): ?>
                <div class="alert success">
                    <ul>
                        <?php
                        foreach($success as $item){
                            echo "<span class='info_item'>".$item."<span>";
                            echo "<br>";
                        }
                        ?>
                    </ul>
                </div>
                <div class="map">
                    <iframe src="<?php echo $map ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <?php endif; ?>
                <?php if(!empty($errors)): ?>
                <div class="alert error">
                    <ul><?php echo $errors ?></ul>
                </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
    <footer>
        <div class="creator-div">
            <p class="creator-p">Developed by</p>
            <p class="creator-p">Cristian Fernando Gonzalez Paez</p>
        </div>
    </footer>
</div>
</body>
</html>