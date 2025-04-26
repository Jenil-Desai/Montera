<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monetra - Smart Finance. Simple Tracking.</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1976D2',
                        secondary: '#64B5F6',
                        accent: '#43A047',
                        background: '#F5F7FA',
                        text: '#212121',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F5F7FA;
            color: #212121;
        }
        .btn-primary {
            background-color: #1976D2;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(25, 118, 210, 0.2);
        }
        .btn-primary:hover {
            background-color: #1565C0;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(25, 118, 210, 0.3);
        }
        .btn-secondary {
            background-color: white;
            color: #1976D2;
            border: 2px solid #1976D2;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-secondary:hover {
            background-color: rgba(25, 118, 210, 0.1);
            transform: translateY(-2px);
        }
        .btn-accent {
            background-color: #43A047;
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(67, 160, 71, 0.2);
        }
        .btn-accent:hover {
            background-color: #388E3C;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(67, 160, 71, 0.3);
        }
        .card {
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .nav-link {
            position: relative;
            color: #212121;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #1976D2;
            transition: width 0.3s ease;
        }
        .nav-link:hover {
            color: #1976D2;
        }
        .nav-link:hover:after {
            width: 100%;
        }
    </style>
</head>
<body>
<!-- Navigation -->
<header class="sticky top-0 z-50 bg-white shadow-sm">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <a href="#" class="text-2xl font-bold text-primary">
                Monetra
            </a>
        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-text focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-10">
            <a href="#" class="nav-link">Home</a>
            <a href="#features" class="nav-link">Features</a>
            <a href="#why-monetra" class="nav-link">Why Monetra</a>
            <a href="#pricing" class="nav-link">Pricing</a>
            <a href="#contact" class="nav-link">Contact</a>
        </div>

        <div class="hidden md:block">
            <a href="#" class="btn-primary">Get Started</a>
        </div>
    </nav>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden bg-white px-6 py-4 shadow-md">
        <div class="flex flex-col space-y-4">
            <a href="#" class="nav-link">Home</a>
            <a href="#features" class="nav-link">Features</a>
            <a href="#why-monetra" class="nav-link">Why Monetra</a>
            <a href="#pricing" class="nav-link">Pricing</a>
            <a href="#contact" class="nav-link">Contact</a>
            <a href="#" class="btn-primary text-center mt-4">Get Started</a>
        </div>
    </div>
</header>

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
                    <a href="#" class="btn-primary text-center">Get Started Free</a>
                    <a href="#features" class="btn-secondary text-center">Learn More</a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="/placeholder.svg?height=400&width=500" alt="Monetra Dashboard Preview" class="rounded-lg shadow-xl">
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
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
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
                    <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
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
                    <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
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
                    <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
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
                <img src="/placeholder.svg?height=400&width=500" alt="Monetra App Interface" class="rounded-lg shadow-xl">
            </div>
            <div class="md:w-1/2 md:pl-12">
                <h2 class="text-3xl font-bold mb-6">Why Choose Monetra?</h2>

                <div class="space-y-6">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-medium">Simple & Intuitive</h3>
                            <p class="mt-2 text-gray-600">No complicated setup. Start tracking your finances in minutes with our user-friendly interface.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-medium">Bank-Level Security</h3>
                            <p class="mt-2 text-gray-600">Your financial data is encrypted and secure. We use the latest security protocols to protect your information.</p>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-xl font-medium">Fast & Reliable</h3>
                            <p class="mt-2 text-gray-600">Monetra is built for speed and reliability. Access your financial data anytime, anywhere.</p>
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
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Basic expense tracking
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Up to 3 financial goals
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Monthly reports
                    </li>
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex items-center text-gray-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
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
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Unlimited expense tracking
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Unlimited financial goals
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Weekly & monthly reports
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Advanced analytics
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-accent mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
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
<section class="py-20 bg-primary">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-white mb-6">Ready to Take Control of Your Finances?</h2>
        <p class="text-white text-opacity-80 mb-8 max-w-2xl mx-auto">
            Join thousands of users who have transformed their financial lives with Monetra.
        </p>
        <a href="#" class="btn-accent inline-block">Start Your Free Trial</a>
    </div>
</section>

<!-- Footer -->
<footer id="contact" class="bg-white py-12">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <a href="#" class="text-2xl font-bold text-primary">Monetra</a>
                <p class="mt-4 text-gray-600">
                    Smart Finance. Simple Tracking.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Product</h3>
                <ul class="space-y-2">
                    <li><a href="#features" class="text-gray-600 hover:text-primary">Features</a></li>
                    <li><a href="#pricing" class="text-gray-600 hover:text-primary">Pricing</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary">Testimonials</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary">FAQ</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Company</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-600 hover:text-primary">About Us</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary">Careers</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-600 hover:text-primary">Terms of Service</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2">
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        support@monetra.com
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        (123) 456-7890
                    </li>
                    <li class="flex items-center text-gray-600">
                        <svg class="w-5 h-5 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        123 Finance St, Money City
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-200 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-600">© 2023 Monetra. All rights reserved.</p>
            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-gray-600 hover:text-primary">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-primary">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-primary">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"></path>
                    </svg>
                </a>
                <a href="#" class="text-gray-600 hover:text-primary">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Menu JavaScript -->
<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
</body>
</html>