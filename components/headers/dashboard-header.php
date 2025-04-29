<header class="bg-white shadow-sm h-16 flex items-center justify-between px-6">
    <button class="md:hidden" id="menu-button">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
             xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>
    <div class="relative w-64 hidden md:block">
        <input type="text" placeholder="Search..."
               class="w-full pl-10 pr-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent">
        <div class="absolute left-3 top-2.5">
            <i class="fa-solid fa-magnifying-glass w-5 h-5 text-gray-400"></i>
        </div>
    </div>
    <div class="flex items-center">
        <button class="p-2 rounded-full hover:bg-gray-100 mr-2">
            <i class="fa-regular fa-bell text-black"></i>
        </button>
        <div class="relative">
            <button class="flex items-center focus:outline-none" id="profile-menu-button">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                    <?php echo $_SESSION['user_name'][0] ?>
                </div>
                <span class="ml-2 hidden md:block"><?php echo $_SESSION['user_name'] ?></span>
                <i class="fa-solid fa-chevron-down w-4 h-4 ml-1 hidden md:block"></i>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 hidden" id="profile-menu">
                <a href="/profile.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Your
                    Profile</a>
                <a href="/settings.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                <a href="/logout.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
        </div>
    </div>
</header>