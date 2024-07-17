<?php
// login.php

// Database configuration
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'e-commerce';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$error = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate form data
    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields.";
    } else {
        // Check if email exists in database
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Email exists, verify password
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                // Password is correct, login successful
                session_start();
                $_SESSION['user_id'] = $user['id']; // Example: Store user ID in session
                header("Location: index.php"); // Redirect to dashboard or another authenticated page
                exit();
            } else {
                $error = "Incorrect password.";
            }
        } else {
            $error = "Email not registered.";
        }
    }
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="./log.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            background-image: url('./pexels-negativespace-34577.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: white;
        }

        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        .form-container h2 {
            letter-spacing: 5px;
            font-family: 'Times New Roman', Times, serif;
            font-size: 3em !important;
            font-weight: bold;
            color: #ffd700;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 20px;
            font-size: 16px;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .5);
        }

        .password-toggle-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #ccc;
        }

        .password-toggle-icon:hover {
            color: #007bff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .modal-content {
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .modal-title {
            font-size: 1.5em;
            font-weight: bold;
        }

        .modal-body {
            font-size: 1.2em;
        }

        .modal-footer .btn {
            transition: all 0.3s ease-in-out;
        }

        .modal-footer .btn:hover {
            transform: scale(1.1);
        }

        .text-warning {
            color: #ffd700 !important;
        }


        .form-container hr {
            border-top: 2px solid #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-container">
                    <h2 class="text-warning">Login</h2>
                    <hr class="text-white">
                    <form id="login" action="login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label text-white fw-bold">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3 position-relative">
                            <label for="password" class="form-label text-white fw-bold">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <i class="far fa-eye password-toggle-icon mt-3" onclick="togglePasswordVisibility('password')"></i>
                        </div>
                        <button type="submit" class="btn btn-primary fw-bold fs-5">Login</button>
                    </form>
                    <p class="fw-bold mt-2 text-center text-white">Don't have an account? <span><a href="signin.php"
                                class="text-decoration-none fw-bold text-warning fs-4">Sign Up</a></span></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Error Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark fw-bold" id="errorModalLabel">My Cart</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-dark fw-bold">
                    <?php if (!empty($error)) {
                        echo $error;
                    } ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS bundle (optional if you need JS features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome icons (optional if you use them for eye icons) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <!-- Custom JavaScript -->
    <script>
        function togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            const icon = passwordInput.nextElementSibling;

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('far', 'fa-eye');
                icon.classList.add('far', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('far', 'fa-eye-slash');
                icon.classList.add('far', 'fa-eye');
            }
        }

        // Show error modal if there was an error
        <?php if (!empty($error)) : ?>
            var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
            errorModal.show();
        <?php endif; ?>
    </script>
</body>

</html>
