<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background: url('https://images.unsplash.com/photo-1674907534695-e82d5b3ec405?crop=entropy&cs=tinysrgb&fm=jpg&q=80') no-repeat center/cover;
            position: relative;
        }

        section:before {
            content: "";
            background-color: #0009;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
        }

        .form-box {
            position: relative;
            width: 420px;
            padding: 30px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
        }

        h2 {
            color: #fff;
            text-align: center;
            font-size: 2em;
            margin-bottom: 10px;
        }

        .inputbox {
            position: relative;
            border-bottom: 2px solid #fff;
            margin: 25px 0;
            width: 100%;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            transition: .5s;
            pointer-events: none;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            font-size: 1em;
            padding: 0 35px 0 5px;
        }

        input:focus ~ label,
        input:valid ~ label {
            top: -5px;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            top: 20px;
            color: #fff;
            font-size: 1.2em;
        }

        /* File input styling */
        .file-input {
            border: none;
            margin-top: 10px;
        }

        .file-input label {
            position: static;
            transform: none;
            display: block;
            margin-bottom: 5px;
        }

        button {
            width: 100%;
            height: 45px;
            border-radius: 40px;
            background: #fff;
            border: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            margin-top: 10px;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #fff;
        }

        .login-link a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .home-btn {
            display: inline-block;
            margin-top: 15px;
            background-color: red;
            color: #fff;
            padding: 8px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section>
        <div class="form-box">
            <form method="POST" action="{{ url('/customer/registration-store') }}" enctype="multipart/form-data">
                @csrf
                <h2>Customer Registration</h2>

                <!-- Name -->
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="name" required>
                    <label>Name</label>
                </div>

                <!-- Phone -->
                <div class="inputbox">
                    <ion-icon name="call-outline"></ion-icon>
                    <input type="text" name="phone" required>
                    <label>Phone</label>
                </div>

                <!-- Email -->
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <!-- Password -->
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>

                <!-- Optional Image -->
                <div class="inputbox file-input">
                    <label for="image">Profile Image (Optional)</label>
                    <input type="file" name="image" id="image" accept="image/*">
                </div>

                <button type="submit">Register</button>

                <!-- Home Button -->
                <div style="text-align: center;">
                    <a href="{{ url('/') }}" class="home-btn">Home</a>
                </div>

                <!-- Login Link -->
                <div class="login-link">
                    <p>Already have an account? 
                        <a href="{{ url('/customer/login') }}">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </section>

    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>