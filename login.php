<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link href="dist/semantic-ui/semantic.min.css" rel="stylesheet">
<!--    <link href="dist/css/default.css" rel="stylesheet"/>-->
<!--    <link href="dist/css/pandoc-code-highlight.css " rel="stylesheet">-->
    <script src="dist/jquery/jquery.min.js" rel="script"></script>
    <script src="dist/js/bootstrap.min.js" rel="script"></script>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!--    <script src="dist/js/jquery-3.3.1.min.js" rel="script"></script>-->


    <script>
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier  : 'email',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : 'Please enter your e-mail'
                                    },
                                    {
                                        type   : 'email',
                                        prompt : 'Please enter a valid e-mail'
                                    }
                                ]
                            },
                            password: {
                                identifier  : 'password',
                                rules: [
                                    {
                                        type   : 'empty',
                                        prompt : 'Please enter your password'
                                    },
                                    {
                                        type   : 'length[6]',
                                        prompt : 'Your password must be at least 6 characters'
                                    }
                                ]
                            }
                        }
                    })
                ;
            })
        ;
    </script>
</head>
<body>
<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            <img style="width: 320px" class="image" src="image/Metabolic_Vector_Logo.png" />
            <br><br>
            <div class="content">
                Log-in to your account
            </div>
        </h2>
        <form id="loginForm" class="bg-transparent ui large form">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i><input name="email" placeholder="E-mail address" type="text" />
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i><input name="password" placeholder="Password" type="password" />
                    </div>
                </div>
                <div class="ui fluid large teal submit button">
                    Login
                </div>
            </div>
            <div class="ui error message"></div>
        </form>
        <div class="ui message">
            New to us?<a href="login.html#"> Sign Up</a>
        </div>
    </div>
</div>
<style type="text/css">
    body {
        /*background-color: #DADADA;*/
        background: url("image/ripped-man-gym.jpg");
        background-size: cover;
    }
    body > .grid {
        height: 100%;
    }
    .image {
        margin-top: -400px;
    }
    .column {
        max-width: 450px;
    }
</style>
<script src="dist/js/jquery-3.3.1.min.js"></script>

</body>
</html>