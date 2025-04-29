<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "layouts/header.php"; ?>
</head>
<body>
<!-- Navigation -->
<?php include "components/navigation/navbar.php"; ?>

<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                    Smart Finance.<br>Simple Tracking.
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Take control of your finances with Monetra's intuitive tracking tools.
                    Monitor expenses, set goals, and build wealth with ease.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="signup.php" class="btn-primary text-center">Get Started Free</a>
                    <a href="#features" class="btn-secondary text-center">Learn More</a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="assets/images/dashboard.jpeg" alt="Monetra Dashboard Preview"
                     class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-background">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Powerful Features</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Monetra provides all the tools you need to track, analyze, and improve your financial health.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Feature 1 -->
            <div class="card p-6">
                <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Income Tracking</h3>
                <p class="text-gray-600">
                    Track all your income sources in one place. Categorize and analyze your earnings over time.
                </p>
            </div>

            <!-- Feature 2 -->
            <div class="card p-6">
                <div class="w-16 h-16 bg-secondary bg-opacity-20 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Expense Insights</h3>
                <p class="text-gray-600">
                    Visualize your spending patterns with intuitive charts and identify areas to save money.
                </p>
            </div>

            <!-- Feature 3 -->
            <div class="card p-6">
                <div class="w-16 h-16 bg-accent bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Goal Planning</h3>
                <p class="text-gray-600">
                    Set financial goals and track your progress. Stay motivated with visual progress indicators.
                </p>
            </div>

            <!-- Feature 4 -->
            <div class="card p-6">
                <div class="w-16 h-16 bg-primary bg-opacity-10 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Easy Reporting</h3>
                <p class="text-gray-600">
                    Generate detailed financial reports with a single click. Export in multiple formats.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Monetra Section -->
<section id="why-monetra" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <img src="/placeholder.svg?height=400&width=500" alt="Monetra App Interface"
                     class="rounded-lg shadow-xl">
            </div>
            <div class="md:w-1/2 md:pl-12">
                <h2 class="text-3xl font-bold mb-6">Why Choose Monetra?</h2>

                <div class="space-y-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-medium">Simple & Intuitive</h3>
                            <p class="mt-2 text-gray-600">No complicated setup. Start tracking your finances in minutes
                                with our user-friendly interface.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-medium">Bank-Level Security</h3>
                            <p class="mt-2 text-gray-600">Your financial data is encrypted and secure. We use the latest
                                security protocols to protect your information.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-medium">Fast & Reliable</h3>
                            <p class="mt-2 text-gray-600">Monetra is built for speed and reliability. Access your
                                financial data anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-background">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Simple, Transparent Pricing</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Choose the plan that works best for your financial needs.
            </p>
        </div>

        <div class="flex flex-col lg:flex-row justify-center items-center lg:items-stretch space-y-8 lg:space-y-0 lg:space-x-8">
            <!-- Free Plan -->
            <div class="card w-full max-w-sm p-8 flex flex-col">
                <h3 class="text-2xl font-bold mb-4">Free</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold">$0</span>
                    <span class="text-gray-600">/month</span>
                </div>
                <p class="text-gray-600 mb-6">Perfect for individuals just starting their financial journey.</p>

                <ul class="space-y-3 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Basic expense tracking
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Up to 3 financial goals
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Monthly reports
                    </li>
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Investment tracking
                    </li>
                </ul>

                <a href="#" class="btn-secondary mt-auto text-center">Get Started</a>
            </div>

            <!-- Pro Plan -->
            <div class="card w-full max-w-sm p-8 bg-primary bg-opacity-5 border-2 border-primary flex flex-col relative">
                <div class="absolute top-0 right-0 bg-primary text-white px-4 py-1 rounded-bl-lg rounded-tr-lg text-sm font-medium">
                    POPULAR
                </div>

                <h3 class="text-2xl font-bold mb-4">Pro</h3>
                <div class="mb-6">
                    <span class="text-4xl font-bold">$9.99</span>
                    <span class="text-gray-600">/month</span>
                </div>
                <p class="text-gray-600 mb-6">For those serious about financial management and growth.</p>

                <ul class="space-y-3 mb-8">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Unlimited expense tracking
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Unlimited financial goals
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Weekly & monthly reports
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 13l4 4L19 7"></path>
                        </svg>
                        Investment tracking
                    </li>
                </ul>

                <a href="#" class="btn-primary mt-auto text-center">Get Started</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->


<!-- Footer -->
<?php include "layouts/footer.php"; ?>

<?php include "layouts/scripts.php"; ?>
<script src="assets/js/scripts.js"></script>
</body>
</html>