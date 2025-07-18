

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log in or sign up</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Helvetica, Arial, sans-serif;
        }
        .logo {
            color: #1877f2;
            font-size: 3.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .tagline {
            font-size: 1.5rem;
            margin-bottom: 2rem;
        }
        .login-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 
            padding: 1.5rem;
            max-width: 400px;
        }
        .form-control {
            height: 3rem;
            font-size: 1rem;
            padding: 0.875rem 1rem;
        }
        .btn-login {
            background-color: #1877f2;
            color: white;
            font-size: 1.25rem;
            font-weight: bold;
            height: 3rem;
        }
        .btn-login:hover {
            background-color: #166fe5;
        }
        .btn-create {
            background-color: #42b72a;
            color: white;
            font-size: 1rem;
            font-weight: bold;
            height: 3rem;
        }
        .btn-create:hover {
            background-color: #36a420;
        }
        .forgot-password {
            color: #1877f2;
            text-decoration: none;
            font-size: 0.875rem;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .divider {
            border-bottom: 1px solid #dadde1;
            margin: 1.25rem 0;
        }
        .create-page {
            font-size: 0.875rem;
            text-align: center;
            margin-top: 1.75rem;
        }
        .footer-links {
            font-size: 0.75rem;
            color: #737373;
        }
        .footer-links a {
            color: #737373;
            text-decoration: none;
            margin-right: 0.5rem;
        }
        .footer-links a:hover {
            text-decoration: underline;
        }
        .language-selector {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="text-center text-lg-start mb-5 mb-lg-0">
                    <div class="logo">facebook</div>
                    <div class="tagline">Facebook helps you connect and share with the people in your life.</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login-card mx-auto">
                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Email address or phone number">
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-login w-100 mb-3">Log in</button>
                        <div class="text-center mb-3">
                            <a href="#" class="forgot-password">Forgotten password?</a>
                        </div>
                        <div class="divider"></div>
                        <button type="button" class="btn btn-create w-100">Create new account</button>
                    </form>
                    <div class="create-page">
                        <a href="#" class="fw-bold">Create a Page</a> for a celebrity, brand or business.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white py-4">
        <div class="container">
            <div class="language-selector mb-3">
                <a href="#" class="me-2">English (UK)</a>
                <a href="#" class="me-2">Hausa</a>
                <a href="#" class="me-2">Français (France)</a>
                <a href="#" class="me-2">Português (Brazil)</a>
                <a href="#" class="me-2">Español</a>
                <a href="#" class="me-2">Legal</a>
                <a href="#" class="me-2">Bahasa Indonesia</a>
                <a href="#" class="me-2">Deutsch</a>
                <a href="#" class="me-2">Italiano</a>
                <a href="#" class="me-2">Red</a>
            </div>
            <div class="divider"></div>
            <div class="footer-links">
                <a href="#">Sign Up</a>
                <a href="#">Log in</a>
                <a href="#">Messenger</a>
                <a href="#">Facebook Lite</a>
                <a href="#">Video</a>
                <a href="#">Meta Pay</a>
                <a href="#">Meta Store</a>
                <a href="#">Meta Quest</a>
                <a href="#">Ray-Ban Meta</a>
                <a href="#">Meta AI</a>
                <a href="#">Instagram</a>
                <a href="#">Threads</a>
                <a href="#">Voting Information Centre</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Privacy Centre</a>
                <a href="#">About</a>
                <a href="#">Create ad</a>
                <a href="#">Create Page</a>
                <a href="#">Developers</a>
                <a href="#">Careers</a>
                <a href="#">Cookies</a>
                <a href="#">AdChoices</a>
                <a href="#">Contact uploading and non-users</a>
            </div>
            <div class="mt-3">
                <span class="footer-links">Meta © 2025</span>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>