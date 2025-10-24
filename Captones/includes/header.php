<?php
// Header component - Top navigation bar
?>
<header class="sticky top-0 z-30 border-b border-gray-200" style="background: linear-gradient(135deg, #2D7A5C 0%, #1F5240 100%);">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center gap-4">
            <!-- Mobile Hamburger (shows on mobile) -->
            <button class="md:hidden text-white" onclick="toggleSidebarMobile()">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <!-- Desktop Hamburger (shows on desktop when sidebar is hidden) -->
            <button class="hidden md:block text-white hover:bg-white hover:bg-opacity-10 p-2 rounded-lg transition-all" onclick="toggleSidebarDesktop()" title="Toggle Sidebar" id="desktopHamburger">
                <i class="fas fa-bars text-xl"></i>
            </button>
            <!-- Page title will be set by JavaScript based on current page -->
            <h1 class="text-2xl font-bold text-white" id="pageTitle">Dashboard</h1>
        </div>

        <div class="flex items-center gap-6">
            <!-- Notifications -->
            <div class="relative cursor-pointer" onclick="toggleNotifications()">
                <i class="fas fa-bell text-white text-xl"></i>
                <div class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center text-xs font-bold">3</div>
            </div>

            <!-- User Profile -->
            <div class="flex items-center gap-3 cursor-pointer" onclick="toggleUserMenu()">
                <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center text-white font-bold">
                    EM
                </div>
                <div class="hidden md:block">
                    <div class="text-sm font-semibold text-white">Emer</div>
                    <div class="text-xs text-white text-opacity-70">Admin</div>
                </div>
                <i class="fas fa-chevron-down text-white text-opacity-70 text-sm"></i>
            </div>
        </div>
    </div>
</header>

<script>
// Mobile sidebar toggle (for mobile devices)
function toggleSidebarMobile() {
    document.getElementById('sidebar').classList.toggle('!w-[280px]');
}

// Desktop sidebar toggle (for desktop - collapses/expands sidebar)
function toggleSidebarDesktop() {
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.querySelector('.ml-0');
    
    if (sidebar.classList.contains('md:w-[280px]')) {
        // Hide sidebar
        sidebar.classList.remove('md:w-[280px]');
        sidebar.classList.add('md:w-0');
        if (mainContent) {
            mainContent.classList.remove('md:ml-[280px]');
            mainContent.classList.add('md:ml-0');
        }
    } else {
        // Show sidebar
        sidebar.classList.remove('md:w-0');
        sidebar.classList.add('md:w-[280px]');
        if (mainContent) {
            mainContent.classList.remove('md:ml-0');
            mainContent.classList.add('md:ml-[280px]');
        }
    }
}

function toggleNotifications() {
    alert('Notifications panel - 3 new notifications');
}

function toggleUserMenu() {
    alert('User menu - Profile, Settings, Logout');
}

// Automatically set page title based on current page
document.addEventListener('DOMContentLoaded', function() {
    const pageTitles = {
        'index': 'Dashboard',
        'vehicle-registry': 'Vehicle Registry',
        'maintenance-tracker': 'Maintenance Tracker',
        'fuel-expense-records': 'Fuel & Expense Records',
        'maintenance-approvals': 'Maintenance Approvals',
        'compliance-licensing': 'Compliance & Licensing',
        'predictive-maintenance': 'Predictive Maintenance',
        'driver-list': 'Driver List',
        'license-management': 'License Management',
        'performance-tracking': 'Performance Tracking',
        'schedules': 'Schedules',
        'shipments': 'Shipments',
        'routes-planning': 'Routes Planning',
        'deliveries': 'Deliveries',
        'warehouse': 'Warehouse',
        'fleet-reports': 'Fleet Reports',
        'financial-reports': 'Financial Reports',
        'analytics-dashboard': 'Analytics Dashboard',
        'export-data': 'Export Data',
        'system-settings': 'System Settings',
        'user-management': 'User Management',
        'permissions': 'Permissions',
        'notifications': 'Notifications'
    };
    
    // Get current page name from URL
    const path = window.location.pathname;
    const page = path.split('/').pop().replace('.php', '');
    
    // Set title
    if (pageTitles[page]) {
        document.getElementById('pageTitle').textContent = pageTitles[page];
    }
});
</script>