<!DOCTYPE html>
<base href="<?= base_url(); ?>">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/0567264f5f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!------ Include the above in your HEAD tag ---------->

    <style>
    @import url("https://fonts.googleapis.com/css?family=Fira+Sans");

    html,
    body {
        position: relative;
        min-height: 100vh;
        background-color: #6C7073;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: "Fira Sans", Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .form-structor {
        background-color: #352F44;
        border-radius: 15px;
        height: 550px;
        width: 350px;
        position: relative;
        overflow: hidden;
    }

    .form-structor::after {
        content: "";
        opacity: 0.8;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 400px;
        background-image: url("main.svg");
        background-color: #6610f2;
    }

    .form-structor .signup {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        width: 65%;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .signup.slide-up {
        top: 5%;
        -webkit-transform: translate(-50%, 0%);
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .signup.slide-up .form-holder,
    .form-structor .signup.slide-up .submit-btn {
        opacity: 0;
        visibility: hidden;
    }

    .form-structor .signup.slide-up .form-title {
        font-size: 1em;
        cursor: pointer;
    }

    .form-structor .signup.slide-up .form-title span {
        margin-right: 5px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .signup .form-title {
        color: #fff;
        font-size: 1.7em;
        text-align: center;
    }

    .form-structor .signup .form-title span {
        color: rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .signup .form-holder {
        border-radius: 15px;
        background-color: #fff;
        overflow: hidden;
        margin-top: 50px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .signup .form-holder .input {
        border: 0;
        outline: none;
        box-shadow: none;
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 8px 15px;
        border-bottom: 1px solid #eee;
        width: 100%;
        font-size: 12px;
    }

    .form-structor .signup .form-holder .input:last-child {
        border-bottom: 0;
    }

    .form-structor .signup .form-holder .input::-webkit-input-placeholder {
        color: #6610f2;
    }

    .form-structor .signup .submit-btn {
        background-color: #323333;
        color: rgba(255, 255, 255, 0.7);
        border: 0;
        border-radius: 15px;
        display: block;
        margin: 15px auto;
        padding: 15px 45px;
        width: 100%;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .signup .submit-btn:hover {
        transition: all 0.3s ease;
        background-color: #2FA4FF;
    }

    .form-structor .login {
        position: absolute;
        top: 20%;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login::before {
        content: "";
        position: absolute;
        left: 50%;
        top: -20px;
        -webkit-transform: translate(-50%, 0);
        background-color: #fff;
        width: 200%;
        height: 250px;
        border-radius: 50%;
        z-index: 4;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login .center {
        position: absolute;
        top: calc(50% - 10%);
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        width: 65%;
        z-index: 5;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login .center .form-title {
        color: #000;
        font-size: 1.7em;
        text-align: center;
    }

    .form-structor .login .center .form-title span {
        color: rgba(0, 0, 0, 0.4);
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login .center .form-holder {
        border-radius: 15px;
        background-color: #fff;
        border: 1px solid #eee;
        overflow: hidden;
        margin-top: 50px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login .center .form-holder .input {
        border: 0;
        outline: none;
        box-shadow: none;
        display: block;
        height: 30px;
        line-height: 30px;
        padding: 8px 15px;
        border-bottom: 1px solid #eee;
        width: 100%;
        font-size: 12px;
    }

    .form-structor .login .center .form-holder .input:last-child {
        border-bottom: 0;
    }

    .form-structor .login .center .form-holder .input::-webkit-input-placeholder {
        color: #6610f2;
    }

    .form-structor .login .center .submit-btn {
        background-color: #6610f2;
        color: rgba(255, 255, 255, 0.7);
        border: 0;
        border-radius: 15px;
        display: block;
        margin: 15px auto;
        padding: 15px 45px;
        width: 100%;
        font-size: 13px;
        font-weight: bold;
        cursor: pointer;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login .center .submit-btn:hover {
        transition: all 0.3s ease;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .form-structor .login.slide-up {
        top: 90%;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login.slide-up .center {
        top: 10%;
        -webkit-transform: translate(-50%, 0%);
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login.slide-up .form-holder,
    .form-structor .login.slide-up .submit-btn {
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login.slide-up .form-title {
        font-size: 1em;
        margin: 0;
        padding: 0;
        cursor: pointer;
        -webkit-transition: all 0.3s ease;
    }

    .form-structor .login.slide-up .form-title span {
        margin-right: 5px;
        opacity: 1;
        visibility: visible;
        -webkit-transition: all 0.3s ease;
    }
    </style>
</head>

<body>
    <div class="form-structor">
        <form action="vaksin_klinik/signUp" class="signup" method="post">
            <h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
            <div class="form-holder">
                <input type="text" class="input" name="nama_admin" placeholder="Name" />
                <input type="text" class="input" name="username" placeholder="Username" />
                <input type="password" class="input" name="password" placeholder="Password" />
            </div>
            <button type="submit" class="submit-btn">Sign Up</button>
        </form>
        <form action="vaksin_klinik/login" method="post" class="login slide-up">
            <div class="center">
                <h2 class="form-title" id="login"><span>or</span>Log in</h2>
                <div class="form-holder">
                    <input type="text" class="input" name="username" placeholder="Username" />
                    <input type="password" class="input" name="password" placeholder="Password" />
                </div>
                <button type="submit" class="submit-btn">Log In</button>
            </div>

        </form>

    </div>


    <script>
    console.clear();

    const loginBtn = document.getElementById('login');
    const signupBtn = document.getElementById('signup');

    loginBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode.parentNode;
        Array.from(e.target.parentNode.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up')
            } else {
                signupBtn.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });

    signupBtn.addEventListener('click', (e) => {
        let parent = e.target.parentNode;
        Array.from(e.target.parentNode.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add('slide-up')
            } else {
                loginBtn.parentNode.parentNode.classList.add('slide-up')
                parent.classList.remove('slide-up')
            }
        });
    });
    </script>
</body>

</html>