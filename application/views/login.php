<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Login Keva</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
    /* dd */
    .footer {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        background: radial-gradient(circle, rgba(251, 63, 229, 1) 0%, rgba(252, 70, 107, 1) 100%);
    }

    * {
        margin: 0;
        padding: 0;
    }

    body {
        background: linear-gradient(100deg, rgba(178, 20, 204, 1) 0%, rgba(121, 9, 70, 1) 39%, rgba(246, 0, 255, 1) 100%);
    }

    .form {
        margin: auto;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form-body {
        width: 40vw;
        background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(253, 187, 45, 1) 100%);
        height: 50%;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border-radius: 20px;
    }

    label {
        margin-bottom: 2rem;
        font-size: 2rem;
        letter-spacing: .1rem;
    }

    #username,
    #password {
        border-radius: 20px;
        padding: 20px;
        border-color: red;
        width: 60%;
    }

    button {
        margin-top: 2rem;
        padding: 1rem;
        border-radius: 10px;
        width: 40%;
        cursor: pointer;
    }

    button:hover {
        background-color: blueviolet;
        color: white;
        transition: cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
</style>

<body>
    <div class="form">
        <div class="form-body">
            <label for="username"> username </label>
            <input id="username" name="username" required type="text" />
            <br />
            <br />
            <label for="password"> password </label>
            <input id="password" name="password" required type="password" />

            <button onclick="savedata()">Submit</button>
        </div>
    </div>
    <div class="footer">
        <span id="power" style="padding-right: 10px;">Poweredsss By</span>
        <a href="https://github.com/kevadamar" target="_blank">IM3 Oreedo</a>
        <b style="padding: 0 10px;">&</b>
        <a href="https://kevadamarg.com" target="_blank">Keva Damar Galih</a>
    </div>
    </div>




    <!--===============================================================================================-->
    <script src="/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/js/main.js"></script>
    <script>
        function savedata() {
            const username = document.getElementById('username').value
            const password = document.getElementById('password').value
            console.log(';', username, password)


            window.localStorage.setItem('login', JSON.stringify({
                username,
                password
            }))

            window.location.href = 'tampilan'
        }

        document.getElementById('power').innerHTML = 'Powered By'
    </script>

</body>

</html>