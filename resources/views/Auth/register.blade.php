<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans", sans-serif;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 100%;
            padding: 0 10px;
        }

        body::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('/images/logo-putih.png') center/cover, #000;
            background-position: center;
            background-size: cover;
            background-blend-mode: multiply;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .wrapper {
            width: 400px;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 70px;
            height: auto;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .input-field {
            position: relative;
            border-bottom: 2px solid #ccc;
            margin: 15px 0;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            color: #fff;
            font-size: 16px;
            pointer-events: none;
            transition: 0.15s ease;
        }

        .input-field input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            color: #fff;
        }

        .input-field input:focus~label,
        .input-field input:valid~label {
            font-size: 0.8rem;
            top: 10px;
            transform: translateY(-120%);
        }

        .forget {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 25px 0 35px 0;
            color: #fff;
        }

        #remember {
            accent-color: #fff;
        }

        .forget label {
            display: flex;
            align-items: center;
        }

        .forget label p {
            margin-left: 8px;
        }

        .wrapper a {
            color: #efefef;
            text-decoration: none;
        }

        .wrapper a:hover {
            text-decoration: underline;
        }

        button {
            background: #fff;
            color: #000;
            font-weight: 600;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 3px;
            font-size: 16px;
            border: 2px solid transparent;
            transition: 0.3s ease;
        }

        button:hover {
            color: #fff;
            border-color: #fff;
            background: rgba(255, 255, 255, 0.15);
        }

        .register {
            text-align: center;
            margin-top: 30px;
            color: #fff;
        }

        .logo-outside {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            z-index: 1;
        }

        @media (max-width: 720px) {
            .logo-outside {
                top: 35%;
                width: 100px;
                transform: translate(-50%, -180px);
            }
        }

        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid #fff;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
            display: inline-block;
            vertical-align: middle;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        button.loading {
            pointer-events: none;
            background: rgba(255, 255, 255, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button.loading #buttonText {
            display: none;
        }
    </style>
</head>

<body>
    <img src="/images/logo-putih2.png" alt="Logo" class="logo-outside">

    <div class="wrapper">
        <form id="registerForm" action="{{ route('register.admin') }}" method="POST">
            @csrf
            <h2>Register</h2>
            <div class="input-field">
                <input type="email" name="email" value="{{ old('email') }}" required>
                <label>Enter your email</label>
            </div>
            <div class="input-field">
                <input type="password" name="password" required>
                <label>Enter your password</label>
            </div>
            <div class="input-field">
                <input type="password" name="password_confirmation" required>
                <label>Confirm your password</label>
            </div>
            <button type="submit" id="registerButton">
                <span id="buttonText">Register</span>
                <span id="loadingSpinner" class="spinner" style="display: none;"></span>
            </button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(document).ready(function() {
            const registerForm = $('#registerForm');
            const registerButton = $('#registerButton');
            const buttonText = $('#buttonText');
            const loadingSpinner = $('#loadingSpinner');

            registerForm.on('submit', function(event) {
                registerButton.addClass('loading');
                buttonText.hide();
                loadingSpinner.show();
                registerButton.prop('disabled', true);
            });

            @if (session('toastr'))
                toastr.success('{{ session('toastr') }}');
                setTimeout(function() {
                    window.location.href = '{{ route('login') }}';
                }, 2000); // Redirect after 2 seconds
            @endif

            // Handle form submission response
            registerForm.on('submit', function(event) {
                $.ajax({
                    url: registerForm.attr('action'),
                    type: 'POST',
                    data: registerForm.serialize(),
                    success: function(response) {
                        toastr.success('Admin berhasil didaftarkan! Silakan login.');
                        setTimeout(function() {
                            window.location.href = '{{ route('login') }}';
                        }, 2000);
                    },
                    error: function(xhr) {
                        registerButton.removeClass('loading');
                        buttonText.show();
                        loadingSpinner.hide();
                        registerButton.prop('disabled', false);
                        let errors = xhr.responseJSON.errors;
                        if (errors) {
                            $.each(errors, function(key, value) {
                                toastr.error(value[0]);
                            });
                        }
                    }
                });
                event.preventDefault(); // Prevent default form submission
            });
        });
    </script>
</body>

</html>
