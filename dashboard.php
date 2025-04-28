<?php
require_once "vendor/autoload.php";

session_start();
if (!isset($_SESSION['user_name'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "layouts/header.php" ?>
</head>
<body class="font-poppins bg-background text-text">
<div class="flex h-screen">
    <!-- Sidebar -->
    <?php include "components/navigation/sidebar.php" ?>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col overflow-hidden">
        <!-- Header -->
        <?php include "components/headers/dashboard-header.php" ?>

        <!-- Mobile Sidebar -->
        <?php include "components/navigation/mobile-sidebar.php" ?>

        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto p-4 md:p-6 bg-background">
            <div class="mb-6">
                <h1 class="text-2xl font-bold">Hi <?php echo $_SESSION['user_name'] ?>, Here's your finance
                    snapshot</h1>
                <p class="text-gray-600">Track, analyze and optimize your finances with Monetra.</p>
            </div>

            <!-- Summary Cards -->
            <?php
            include "components/summary-cards/summary-card.php";

            $summaryCards = [
                [
                    'title' => 'Total Income',
                    'amount' => '$12,580.00',
                    'iconClass' => 'fa-solid fa-coins text-primary',
                    'iconBgClass' => 'bg-primary',
                    'percentage' => '+20.1%'
                ],
                [
                    'title' => 'Total Expenses',
                    'amount' => '$8,240.00',
                    'iconClass' => 'fa-solid fa-credit-card text-red-500',
                    'iconBgClass' => 'bg-red-500',
                    'percentage' => '+4.5%'
                ],
                [
                    'title' => 'Total Savings',
                    'amount' => '$4,340.00',
                    'iconClass' => 'fa-solid fa-piggy-bank text-secondary',
                    'iconBgClass' => 'bg-secondary',
                    'percentage' => '+12.2%'
                ],
                [
                    'title' => 'Current Month Balance',
                    'amount' => '$1,890.00',
                    'iconClass' => 'fa-solid fa-chart-line text-accent',
                    'iconBgClass' => 'bg-accent',
                    'percentage' => '+8.3%'
                ]
            ];
            ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
                <?php foreach ($summaryCards as $card): ?>
                    <?php renderSummaryCard(
                        $card['title'],
                        $card['amount'],
                        $card['iconClass'],
                        $card['iconBgClass'],
                        $card['percentage']
                    ); ?>
                <?php endforeach; ?>
            </div>

            <!-- Quick Actions -->
            <div class="flex flex-wrap gap-3 mb-6">
                <button class="bg-primary text-white px-4 py-2 rounded-lg flex items-center shadow-sm hover:bg-primary/90 transition-colors">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Add Expense
                </button>
                <button class="bg-secondary text-white px-4 py-2 rounded-lg flex items-center shadow-sm hover:bg-secondary/90 transition-colors">
                    <i class="fa-solid fa-plus mr-2"></i>
                    Add Income
                </button>
                <button class="bg-accent text-white px-4 py-2 rounded-lg flex items-center shadow-sm hover:bg-accent/90 transition-colors">
                    <i class="fa-solid fa-bullseye mr-2"></i>
                    Set Goal
                </button>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-1 lg:grid-cols-7 gap-4 mb-6">
                <!-- Income vs Expenses Chart -->
                <div class="bg-white rounded-lg shadow-sm p-4 lg:col-span-4">
                    <h3 class="text-lg font-semibold mb-1">Income vs Expenses</h3>
                    <p class="text-sm text-gray-500 mb-4">Monthly comparison for the current year</p>
                    <div class="h-80">
                        <canvas id="incomeExpensesChart"></canvas>
                    </div>
                </div>

                <!-- Expense Categories Chart -->
                <div class="bg-white rounded-lg shadow-sm p-4 lg:col-span-3">
                    <h3 class="text-lg font-semibold mb-1">Expense Categories</h3>
                    <p class="text-sm text-gray-500 mb-4">Breakdown of your expenses by category</p>
                    <div class="h-80">
                        <canvas id="expenseCategoriesChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Recent Transactions -->
            <div class="bg-white rounded-lg shadow-sm p-4">
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <h3 class="text-lg font-semibold">Recent Transactions</h3>
                        <p class="text-sm text-gray-500">Your latest financial activities</p>
                    </div>
                    <a href="transactions.html" class="text-primary hover:underline text-sm">View All</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                        <tr class="text-left text-gray-500 text-sm border-b">
                            <th class="pb-3 font-medium">Date</th>
                            <th class="pb-3 font-medium">Description</th>
                            <th class="pb-3 font-medium">Category</th>
                            <th class="pb-3 font-medium text-right">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b border-gray-100">
                            <td class="py-3 text-sm">2023-04-28</td>
                            <td class="py-3 text-sm">Grocery Shopping</td>
                            <td class="py-3 text-sm">
                                <span class="px-2 py-1 bg-secondary bg-opacity-10 text-secondary rounded-full text-xs">Food</span>
                            </td>
                            <td class="py-3 text-sm text-right text-red-500">-$120.50</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-3 text-sm">2023-04-27</td>
                            <td class="py-3 text-sm">Salary Deposit</td>
                            <td class="py-3 text-sm">
                                <span class="px-2 py-1 bg-accent bg-opacity-10 text-accent rounded-full text-xs">Income</span>
                            </td>
                            <td class="py-3 text-sm text-right text-accent">+$3,500.00</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-3 text-sm">2023-04-26</td>
                            <td class="py-3 text-sm">Electric Bill</td>
                            <td class="py-3 text-sm">
                                <span class="px-2 py-1 bg-secondary bg-opacity-10 text-secondary rounded-full text-xs">Utilities</span>
                            </td>
                            <td class="py-3 text-sm text-right text-red-500">-$85.20</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="py-3 text-sm">2023-04-25</td>
                            <td class="py-3 text-sm">Freelance Payment</td>
                            <td class="py-3 text-sm">
                                <span class="px-2 py-1 bg-accent bg-opacity-10 text-accent rounded-full text-xs">Income</span>
                            </td>
                            <td class="py-3 text-sm text-right text-accent">+$450.00</td>
                        </tr>
                        <tr>
                            <td class="py-3 text-sm">2023-04-24</td>
                            <td class="py-3 text-sm">Restaurant Dinner</td>
                            <td class="py-3 text-sm">
                                <span class="px-2 py-1 bg-secondary bg-opacity-10 text-secondary rounded-full text-xs">Food</span>
                            </td>
                            <td class="py-3 text-sm text-right text-red-500">-$65.30</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script>
    // Mobile menu toggle
    document.getElementById('menu-button').addEventListener('click', function () {
        document.getElementById('mobile-sidebar').classList.remove('-translate-x-full');
        document.getElementById('mobile-sidebar-overlay').classList.remove('hidden');
    });

    document.getElementById('close-sidebar').addEventListener('click', function () {
        document.getElementById('mobile-sidebar').classList.add('-translate-x-full');
        document.getElementById('mobile-sidebar-overlay').classList.add('hidden');
    });

    document.getElementById('mobile-sidebar-overlay').addEventListener('click', function () {
        document.getElementById('mobile-sidebar').classList.add('-translate-x-full');
        document.getElementById('mobile-sidebar-overlay').classList.add('hidden');
    });

    // Profile menu toggle
    document.getElementById('profile-menu-button').addEventListener('click', function () {
        document.getElementById('profile-menu').classList.toggle('hidden');
    });

    // Close profile menu when clicking outside
    document.addEventListener('click', function (event) {
        const profileMenu = document.getElementById('profile-menu');
        const profileMenuButton = document.getElementById('profile-menu-button');

        if (!profileMenu.contains(event.target) && !profileMenuButton.contains(event.target)) {
            profileMenu.classList.add('hidden');
        }
    });

    // Income vs Expenses Chart
    const incomeExpensesCtx = document.getElementById('incomeExpensesChart').getContext('2d');
    const incomeExpensesChart = new Chart(incomeExpensesCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Income',
                    data: [4000, 3000, 2000, 2780, 1890, 2390, 3490, 4000, 3000, 2000, 2780, 1890],
                    backgroundColor: '#1976D2',
                    borderColor: '#1976D2',
                    borderWidth: 1
                },
                {
                    label: 'Expenses',
                    data: [2400, 1398, 1800, 3908, 4800, 3800, 4300, 2400, 1398, 1800, 3908, 4800],
                    backgroundColor: '#64B5F6',
                    borderColor: '#64B5F6',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    position: 'top',
                }
            }
        }
    });

    // Expense Categories Chart
    const expenseCategoriesCtx = document.getElementById('expenseCategoriesChart').getContext('2d');
    const expenseCategoriesChart = new Chart(expenseCategoriesCtx, {
        type: 'pie',
        data: {
            labels: ['Housing', 'Food', 'Transportation', 'Entertainment', 'Utilities', 'Other'],
            datasets: [{
                data: [35, 20, 15, 10, 10, 10],
                backgroundColor: [
                    '#1976D2',
                    '#64B5F6',
                    '#43A047',
                    '#FF9800',
                    '#F44336',
                    '#9C27B0'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                }
            }
        }
    });
</script>
</body>
</html>
