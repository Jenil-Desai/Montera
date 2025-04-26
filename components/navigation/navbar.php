<header class="sticky top-0 z-50 bg-white shadow-sm">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="/" class="text-2xl font-bold text-primary">
                Monetra
            </a>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-text focus:outline-none">
                <i class="fa-solid fa-bars w-6 h-6"></i>
            </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-10">
            <a href="/" class="nav-link">Home</a>
            <a href="/" class="nav-link">Features</a>
            <a href="/" class="nav-link">Why Monetra</a>
            <a href="/" class="nav-link">Pricing</a>
            <a href="/" class="nav-link">Contact</a>
        </div>

        <div class="hidden md:block">
            <a href="signup.php" class="btn-primary">Get Started</a>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden bg-white px-6 py-4 shadow-md">
        <div class="flex flex-col space-y-4">
            <a href="/" class="nav-link">Home</a>
            <a href="/" class="nav-link">Features</a>
            <a href="/" class="nav-link">Why Monetra</a>
            <a href="/" class="nav-link">Pricing</a>
            <a href="/" class="nav-link">Contact</a>
            <a href="signup.php" class="btn-primary text-center mt-4">Get Started</a>
        </div>
    </div>
</header>