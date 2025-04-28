<?php
require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;

session_start();

// Check if user is already logged in
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    $id = Uuid::uuid4()->toString();

    // Validate input
    $errors = [];

    if (empty($name) || empty($email) || empty($password)) {
        $errors[] = "All fields are required";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    // Check if email already exists
    $con = include 'includes/database.php';
    $checkStmt = $con->prepare("SELECT * FROM users WHERE email = ?");
    $checkStmt->bind_param("s", $email);
    $checkStmt->execute();
    $result = $checkStmt->get_result();

    if ($result->num_rows > 0) {
        if (password_verify($password, $result->fetch_assoc()['password'])) {
            // Password is correct
            $_SESSION['user_id'] = $id;
            $_SESSION['user_name'] = $result->fetch_assoc()['name'];

            header("Location: dashboard.php");
            exit();
        } else {
            $errors[] = "Incorrect password";
        }
    } else {
        $errors[] = "No user found with this email";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "layouts/header.php" ?>
</head>
<body class="font-poppins bg-background text-text">
<!-- Navigation -->
<?php include "components/navigation/navbar.php" ?>

<!-- Login Section -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-md mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-text mb-2">Welcome Back</h1>
                <p class="text-gray-600">Log in to your Monetra account</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300">
                <form action="#" method="POST">
                    <div class="mb-6">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-at text-gray-400"></i>
                            </div>
                            <input type="email" id="email" name="email"
                                   class="w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg bg-gray-50 focus:outline-none focus:border-primary focus:ring-3 focus:ring-primary/20 transition-all duration-300"
                                   placeholder="you@example.com" required>
                        </div>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-primary hover:text-primary/80">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password" name="password"
                                   class="w-full pl-10 pr-10 py-3 border border-gray-200 rounded-lg bg-gray-50 focus:outline-none focus:border-primary focus:ring-3 focus:ring-primary/20 transition-all duration-300"
                                   placeholder="••••••••" required>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" id="toggle-password"
                                        class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fa-solid fa-eye text-gray-400" id="show-password"></i>
                                    <i class="fa-solid fa-eye-slash text-gray-400 hidden" id="hide-password"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="remember-me" name="remember-me"
                               class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/50 transition-colors duration-200">
                        <label for="remember-me" class="ml-2 block text-sm text-gray-700">Remember me</label>
                    </div>

                    <button type="submit"
                            class="w-full bg-primary text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 hover:bg-primary/90 hover:-translate-y-0.5 shadow-md hover:shadow-lg shadow-primary/20 hover:shadow-primary/30">
                        Login
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="signup.php" class="text-primary font-medium hover:underline">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include "layouts/footer.php" ?>

<?php include "layouts/scripts.php"; ?>

<!-- JavaScript for Password Toggle and Mobile Menu -->
<script>
    // Password Toggle
    const togglePassword = document.getElementById('toggle-password');
    const passwordInput = document.getElementById('password');
    const showPasswordIcon = document.getElementById('show-password');
    const hidePasswordIcon = document.getElementById('hide-password');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        showPasswordIcon.classList.toggle('hidden');
        hidePasswordIcon.classList.toggle('hidden');
    });
</script>
<script src="assets/js/scripts.js"></script>
</body>
</html>