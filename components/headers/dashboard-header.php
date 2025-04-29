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
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
            </svg>
        </div>
    </div>
    <div class="flex items-center">
        <button class="p-2 rounded-full hover:bg-gray-100 mr-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
        </button>
        <div class="relative">
            <button class="flex items-center focus:outline-none" id="profile-menu-button">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                    <?php echo $_SESSION['user_name'][0] ?>
                </div>
                <span class="ml-2 hidden md:block"><?php echo $_SESSION['user_name'] ?></span>
                <svg class="w-4 h-4 ml-1 hidden md:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M19 9l-7 7-7-7"></path>
                </svg>
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