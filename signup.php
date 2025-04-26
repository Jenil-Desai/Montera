<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "layouts/header.php" ?>
</head>
<body class="font-poppins bg-background text-text">
<!-- Navigation -->
<?php include "components/navigation/navbar.php" ?>

<!-- Signup Section -->
<section class="py-16 md:py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-md mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-text mb-2">Create Your Account</h1>
                <p class="text-gray-600">Join Monetra and take control of your finances</p>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-8 transition-all duration-300">
                <form action="#" method="POST">
                    <div class="mb-6">
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-user text-gray-400"></i>
                            </div>
                            <input type="text" id="name" name="name"
                                   class="w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg bg-gray-50 focus:outline-none focus:border-primary focus:ring-3 focus:ring-primary/20 transition-all duration-300"
                                   placeholder="John Doe" required>
                        </div>
                    </div>

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
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
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
                        <div class="h-1 bg-red-500 w-1/4 rounded mt-1.5" id="password-strength"></div>
                        <p class="text-xs text-gray-500 mt-1" id="password-strength-text">Password strength: Weak</p>
                    </div>

                    <div class="mb-6">
                        <label for="confirm-password" class="block text-sm font-medium text-gray-700 mb-2">Confirm
                            Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fa-solid fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="confirm-password" name="confirm-password"
                                   class="w-full pl-10 pr-3 py-3 border border-gray-200 rounded-lg bg-gray-50 focus:outline-none focus:border-primary focus:ring-3 focus:ring-primary/20 transition-all duration-300"
                                   placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="flex items-center mb-6">
                        <input type="checkbox" id="terms" name="terms"
                               class="w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary/50 transition-colors duration-200"
                               required>
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the
                            <a href="#" class="text-primary hover:underline">Terms of Service</a>
                            and
                            <a href="#" class="text-primary hover:underline">Privacy Policy</a>
                        </label>
                    </div>

                    <button type="submit"
                            class="w-full bg-primary text-white px-6 py-3 rounded-lg font-medium transition-all duration-300 hover:bg-primary/90 hover:-translate-y-0.5 shadow-md hover:shadow-lg shadow-primary/20 hover:shadow-primary/30">
                        Create Account
                    </button>
                </form>

                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="login.php" class="text-primary font-medium hover:underline">Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<?php include "layouts/footer.php" ?>

<!-- JavaScript for Password Toggle, Strength Meter -->
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

    // Password Strength Meter
    const passwordStrength = document.getElementById('password-strength');
    const passwordStrengthText = document.getElementById('password-strength-text');

    passwordInput.addEventListener('input', function () {
        const password = passwordInput.value;
        let strength = 0;

        if (password.length >= 8) strength += 1;
        if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength += 1;
        if (password.match(/\d/)) strength += 1;
        if (password.match(/[^a-zA-Z\d]/)) strength += 1;

        passwordStrength.className = 'h-1 rounded mt-1.5';

        if (strength === 0) {
            passwordStrength.classList.add('bg-red-500', 'w-1/4');
            passwordStrengthText.textContent = 'Password strength: Weak';
        } else if (strength === 1) {
            passwordStrength.classList.add('bg-red-500', 'w-1/4');
            passwordStrengthText.textContent = 'Password strength: Weak';
        } else if (strength === 2) {
            passwordStrength.classList.add('bg-yellow-500', 'w-2/4');
            passwordStrengthText.textContent = 'Password strength: Medium';
        } else if (strength === 3) {
            passwordStrength.classList.add('bg-green-500', 'w-3/4');
            passwordStrengthText.textContent = 'Password strength: Strong';
        } else {
            passwordStrength.classList.add('bg-accent', 'w-full');
            passwordStrengthText.textContent = 'Password strength: Very Strong';
        }
    });
</script>
<script src="assets/js/scripts.js"></script>
</body>
</html>