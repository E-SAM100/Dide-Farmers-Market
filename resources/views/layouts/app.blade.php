<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <aside class="sidebar" id="sidebar">
            <div class="logo">
                <svg width="61px" height="25px" viewBox="0 0 562 229" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                    <g id="Group">
                        <path d="M533 0C549.018 0 562 12.9816 562 29L562 200C562 216.018 549.018 229 533 229L29 229C12.9816 229 0 216.018 0 200L0 29C0 12.9816 12.9816 0 29 0L533 0Z" id="Rectangle" fill="#005500" stroke="none" />
                        <g id="Group" transform="translate(76.94043 43.590942)">
                            <path d="M47.4375 133.818L0 133.818L0 0L47.8295 0C61.2897 0 72.8877 2.66809 82.6235 8.00427C92.3593 13.3404 99.8408 20.9962 105.068 30.9716C110.295 40.947 112.909 52.8826 112.909 66.7784C112.909 80.7178 110.284 92.697 105.035 102.716C99.7864 112.735 92.2722 120.423 82.4928 125.781C72.7135 131.139 61.0284 133.818 47.4375 133.818L47.4375 133.818ZM28.293 109.577L46.2617 109.577C58.8507 109.577 68.4014 106.179 74.9137 99.3835C81.426 92.588 84.6821 81.7197 84.6821 66.7784C84.6821 51.9242 81.426 41.1212 74.9137 34.3693C68.4014 27.6174 58.8725 24.2415 46.327 24.2415L28.293 24.2415L28.293 109.577ZM133.295 133.818L133.295 33.4546L161.13 33.4546L161.13 133.818L133.295 133.818ZM231.307 133.818L183.869 133.818L183.869 0L231.699 0C245.159 0 256.757 2.66809 266.493 8.00427C276.228 13.3404 283.71 20.9962 288.937 30.9716C294.164 40.947 296.778 52.8826 296.778 66.7784C296.778 80.7178 294.154 92.697 288.905 102.716C283.656 112.735 276.141 120.423 266.362 125.781C256.583 131.139 244.898 133.818 231.307 133.818L231.307 133.818ZM212.162 109.577L230.131 109.577C242.72 109.577 252.271 106.179 258.783 99.3835C265.295 92.588 268.551 81.7197 268.551 66.7784C268.551 51.9242 265.295 41.1212 258.783 34.3693C252.271 27.6174 242.742 24.2415 230.196 24.2415L212.162 24.2415L212.162 109.577ZM317.688 133.818L317.688 0L407.858 0L407.858 23.3267L345.98 23.3267L345.98 55.2131L403.219 55.2131L403.219 78.5398L345.98 78.5398L345.98 110.491L408.119 110.491L408.119 133.818L317.688 133.818Z" id="Shape" fill="#FFFFFF" stroke="none" />
                            <path d="M147.278 28.1619C143.184 28.1619 139.655 26.7789 136.693 24.0128C133.731 21.2467 132.25 17.9252 132.25 14.0483C132.25 10.1714 133.731 6.8608 136.693 4.11649C139.655 1.37217 143.184 1.14441e-05 147.278 0C151.417 1.14441e-05 154.967 1.37217 157.929 4.11649C160.891 6.8608 162.372 10.1714 162.372 14.0483C162.372 17.9252 160.891 21.2467 157.929 24.0128C154.967 26.7789 151.417 28.1619 147.278 28.1619L147.278 28.1619Z" id="Path" fill="#34D23E" fill-rule="evenodd" stroke="none" />
                        </g>
                    </g>
                </svg>
                <button class="close-sidebar-btn" id="closeSidebarBtn">&times;</button>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="£"><i class="fas fa-home"></i> Home</a></li>
                    @if(Auth::user()->is_farmer)
                        <li><a href="{{ route('products.create') }}"><i class="fas fa-plus"></i> Create Post</a></li>
                    @else
                        <li><a href="#"><i class="fas fa-user-plus"></i> Upgrade to Farmer</a></li>
                    @endif
                    <li><a href="{{ route('notifications.index') }}"><i class="fas fa-bell"></i> Notifications</a></li>
                    <li><a href="{{ route('messages.index') }}"><i class="fas fa-envelope"></i> Messages</a></li>
                    <li><a href="{{ route('profile.show') }}"><i class="fas fa-user"></i> Account</a></li>
                    <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                </ul>
            </nav>
            <footer class="sidebar-footer">
                <span>DiDE</span>
                <p>All Rights Reserved 2024</p>
            </footer>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="header">
                <div class="header-left">
                    <button class="toggle-sidebar-btn" id="toggleSidebarBtn">&#9776;</button>
                    <h1>@yield('page-title', 'Farmers Market Place')</h1>
                </div>
                <div class="header-right">
                    <input type="text" class="search-input" placeholder="Search...">
                    <button class="search-btn">Search</button>
                    <div class="user-profile">
                    <img src="{{ Auth::user()->profile_picture ?? asset('path/to/default/profile-picture.png') }}" alt="User">
                        <span>{{ Auth::user()->name }}</span>
                        <div class="dropdown">
                            <button class="dropdown-btn"> <i class="fas fa-ellipsis-v"></i>
                            </button>
                            <div class="dropdown-content">
                                <a href="{{ route('profile.show') }}">Profile</a>
                                <a href="{{ route('logout') }}">Logout</a>
                            </div>
                    </div>
                </div>
            </header>

            <section class="content">
                @yield('content')
            </section>
        </main>

        <!-- Ads Section -->
        <aside class="ads">
            <div class="ad">
                <button class="close-ad">&times;</button>
                <span>Ad Title</span>
                <p>Ad content goes here. You can promote your products or services.</p>
            </div>
            <div class="ad">
                <button class="close-ad">&times;</button>
                <span>Ad Title</span>
                <p>Ad content goes here. You can promote your products or services.</p>
            </div>
        </aside>
    </div>

    <script>
        const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
        const closeSidebarBtn = document.getElementById('closeSidebarBtn');
        const sidebar = document.getElementById('sidebar');

        toggleSidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });

        closeSidebarBtn.addEventListener('click', () => {
            sidebar.classList.remove('open');
        });
    </script>
</body>
</html>
