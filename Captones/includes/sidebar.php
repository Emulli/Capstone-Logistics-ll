<?php
// Sidebar component - Left navigation with collapsible modules
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    /* Hide scrollbar but keep functionality */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }
    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<div class="fixed left-0 top-0 w-0 md:w-[280px] h-screen bg-primary-green overflow-y-auto no-scrollbar z-40 transition-all duration-300" id="sidebar" style="background-color: #2D7A5C;">
    <!-- Sidebar Header (without hamburger) -->
    <div class="p-6 border-b border-white border-opacity-20">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                <i class="fas fa-truck text-white text-lg"></i>
            </div>
            <div>
                <div class="text-white font-bold text-sm">Logistics 2</div>
                <div class="text-white text-opacity-70 text-xs">Admin Panel</div>
            </div>
        </div>
    </div>

    <nav class="mt-6 pb-6">
        <!-- Fleet & Vehicle Management Module -->
        <div class="mb-2">
            <div class="nav-item text-white/80 px-5 py-3 flex items-center justify-between cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo in_array($current_page, ['vehicle-registry', 'maintenance-tracker', 'fuel-expense-records', 'maintenance-approvals', 'compliance-licensing', 'predictive-maintenance']) ? 'bg-white/10' : ''; ?>" onclick="toggleModule('fleet')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-truck"></i>
                    <span class="font-semibold">Fleet & Vehicle Management</span>
                </div>
                <i class="fas fa-chevron-down transition-transform duration-300 <?php echo in_array($current_page, ['vehicle-registry', 'maintenance-tracker', 'fuel-expense-records', 'maintenance-approvals', 'compliance-licensing', 'predictive-maintenance']) ? 'rotate-180' : ''; ?>" id="fleet-icon"></i>
            </div>
            <div class="<?php echo in_array($current_page, ['vehicle-registry', 'maintenance-tracker', 'fuel-expense-records', 'maintenance-approvals', 'compliance-licensing', 'predictive-maintenance']) ? '' : 'hidden'; ?> bg-white/5 overflow-hidden transition-all duration-300" id="fleet-submenu">
                <!-- PAGE #1 -->
                <a href="/CAPTONES/module_1/vehicle-registry.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'vehicle-registry' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-car text-sm"></i>
                    <span class="text-sm">Vehicle Registry</span>
                </a>
                
                <!-- PAGE #2 -->
                <a href="/CAPTONES/module_1/maintenance-tracker.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'maintenance-tracker' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-wrench text-sm"></i>
                    <span class="text-sm">Maintenance Tracker</span>
                </a>
                
                <!-- PAGE #3 -->
                <a href="/CAPTONES/module_1/fuel-expense-records.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'fuel-expense-records' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-gas-pump text-sm"></i>
                    <span class="text-sm">Fuel & Expense Records</span>
                </a>
                
                <!-- PAGE #4 -->
                <a href="/CAPTONES/module_1/maintenance-approvals.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'maintenance-approvals' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-check-circle text-sm"></i>
                    <span class="text-sm">Maintenance Approvals</span>
                </a>
                
                <!-- PAGE #5 -->
                <a href="/CAPTONES/module_1/compliance-licensing.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'compliance-licensing' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-file-contract text-sm"></i>
                    <span class="text-sm">Compliance & Licensing</span>
                </a>
                
                <!-- PAGE #6 -->
                <a href="/CAPTONES/module_1/predictive-maintenance.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'predictive-maintenance' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-brain text-sm"></i>
                    <span class="text-sm">Predictive Maintenance</span>
                </a>
            </div>
        </div>

        <!-- Driver Management Module -->
        <div class="mb-2">
            <div class="nav-item text-white/80 px-5 py-3 flex items-center justify-between cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo in_array($current_page, ['driver-list', 'license-management', 'performance-tracking', 'schedules']) ? 'bg-white/10' : ''; ?>" onclick="toggleModule('driver')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-id-card"></i>
                    <span class="font-semibold">Driver Management</span>
                </div>
                <i class="fas fa-chevron-down transition-transform duration-300 <?php echo in_array($current_page, ['driver-list', 'license-management', 'performance-tracking', 'schedules']) ? 'rotate-180' : ''; ?>" id="driver-icon"></i>
            </div>
            <div class="<?php echo in_array($current_page, ['driver-list', 'license-management', 'performance-tracking', 'schedules']) ? '' : 'hidden'; ?> bg-white/5 overflow-hidden transition-all duration-300" id="driver-submenu">
                <a href="/CAPTONES/module_2/driver-list.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'driver-list' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-users text-sm"></i>
                    <span class="text-sm">Driver List</span>
                </a>
                <a href="/CAPTONES/module_2/license-management.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'license-management' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-id-badge text-sm"></i>
                    <span class="text-sm">License Management</span>
                </a>
                <a href="/CAPTONES/module_2/performance-tracking.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'performance-tracking' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-chart-line text-sm"></i>
                    <span class="text-sm">Performance Tracking</span>
                </a>
                <a href="/CAPTONES/module_2/schedules.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'schedules' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-calendar-alt text-sm"></i>
                    <span class="text-sm">Schedules</span>
                </a>
            </div>
        </div>

        <!-- Operations & Logistics Module -->
        <div class="mb-2">
            <div class="nav-item text-white/80 px-5 py-3 flex items-center justify-between cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo in_array($current_page, ['shipments', 'routes-planning', 'deliveries', 'warehouse']) ? 'bg-white/10' : ''; ?>" onclick="toggleModule('operations')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-box"></i>
                    <span class="font-semibold">Operations & Logistics</span>
                </div>
                <i class="fas fa-chevron-down transition-transform duration-300 <?php echo in_array($current_page, ['shipments', 'routes-planning', 'deliveries', 'warehouse']) ? 'rotate-180' : ''; ?>" id="operations-icon"></i>
            </div>
            <div class="<?php echo in_array($current_page, ['shipments', 'routes-planning', 'deliveries', 'warehouse']) ? '' : 'hidden'; ?> bg-white/5 overflow-hidden transition-all duration-300" id="operations-submenu">
                <a href="/CAPTONES/module_3/shipments.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'shipments' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-shipping-fast text-sm"></i>
                    <span class="text-sm">Shipments</span>
                </a>
                <a href="/CAPTONES/module_3/routes-planning.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'routes-planning' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-route text-sm"></i>
                    <span class="text-sm">Routes Planning</span>
                </a>
                <a href="/CAPTONES/module_3/deliveries.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'deliveries' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-truck-loading text-sm"></i>
                    <span class="text-sm">Deliveries</span>
                </a>
                <a href="/CAPTONES/module_3/warehouse.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'warehouse' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-warehouse text-sm"></i>
                    <span class="text-sm">Warehouse</span>
                </a>
            </div>
        </div>

        <!-- Reports & Analytics Module -->
        <div class="mb-2">
            <div class="nav-item text-white/80 px-5 py-3 flex items-center justify-between cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo in_array($current_page, ['fleet-reports', 'financial-reports', 'analytics-dashboard', 'export-data']) ? 'bg-white/10' : ''; ?>" onclick="toggleModule('reports')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-chart-bar"></i>
                    <span class="font-semibold">Reports & Analytics</span>
                </div>
                <i class="fas fa-chevron-down transition-transform duration-300 <?php echo in_array($current_page, ['fleet-reports', 'financial-reports', 'analytics-dashboard', 'export-data']) ? 'rotate-180' : ''; ?>" id="reports-icon"></i>
            </div>
            <div class="<?php echo in_array($current_page, ['fleet-reports', 'financial-reports', 'analytics-dashboard', 'export-data']) ? '' : 'hidden'; ?> bg-white/5 overflow-hidden transition-all duration-300" id="reports-submenu">
                <a href="/CAPTONES/module_4/fleet-reports.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'fleet-reports' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-file-alt text-sm"></i>
                    <span class="text-sm">Fleet Reports</span>
                </a>
                <a href="/CAPTONES/module_4/financial-reports.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'financial-reports' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-dollar-sign text-sm"></i>
                    <span class="text-sm">Financial Reports</span>
                </a>
                <a href="/CAPTONES/module_4/analytics-dashboard.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'analytics-dashboard' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-chart-pie text-sm"></i>
                    <span class="text-sm">Analytics Dashboard</span>
                </a>
                <a href="/CAPTONES/module_4/export-data.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'export-data' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-download text-sm"></i>
                    <span class="text-sm">Export Data</span>
                </a>
            </div>
        </div>

        <!-- Settings & Configuration Module -->
        <div class="mb-2">
            <div class="nav-item text-white/80 px-5 py-3 flex items-center justify-between cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo in_array($current_page, ['system-settings', 'user-management', 'permissions', 'notifications']) ? 'bg-white/10' : ''; ?>" onclick="toggleModule('settings')">
                <div class="flex items-center gap-3">
                    <i class="fas fa-cog"></i>
                    <span class="font-semibold">Settings & Configuration</span>
                </div>
                <i class="fas fa-chevron-down transition-transform duration-300 <?php echo in_array($current_page, ['system-settings', 'user-management', 'permissions', 'notifications']) ? 'rotate-180' : ''; ?>" id="settings-icon"></i>
            </div>
            <div class="<?php echo in_array($current_page, ['system-settings', 'user-management', 'permissions', 'notifications']) ? '' : 'hidden'; ?> bg-white/5 overflow-hidden transition-all duration-300" id="settings-submenu">
                <a href="/CAPTONES/module_5/system-settings.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'system-settings' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-sliders-h text-sm"></i>
                    <span class="text-sm">System Settings</span>
                </a>
                <a href="/CAPTONES/module_5/user-management.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'user-management' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-user-cog text-sm"></i>
                    <span class="text-sm">User Management</span>
                </a>
                <a href="/CAPTONES/module_5/permissions.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'permissions' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-shield-alt text-sm"></i>
                    <span class="text-sm">Permissions</span>
                </a>
                <a href="/CAPTONES/module_5/notifications.php" class="nav-item text-white/70 px-5 py-2.5 pl-14 flex items-center gap-3 cursor-pointer transition-all duration-300 border-l-3 border-transparent hover:bg-white/10 hover:text-white <?php echo $current_page === 'notifications' ? 'bg-white/15 border-l-white text-white' : ''; ?>">
                    <i class="fas fa-bell text-sm"></i>
                    <span class="text-sm">Notifications</span>
                </a>
            </div>
        </div>

        <!-- Need Help Section (Inside scrollable area) -->
        <div class="mt-6 mx-4 mb-4">
            <div class="bg-white bg-opacity-10 rounded-lg p-4 text-center">
                <i class="fas fa-headset text-white text-2xl mb-2"></i>
                <div class="text-white text-sm font-semibold">Need Help?</div>
                <div class="text-white text-opacity-70 text-xs mt-1">Contact support team</div>
                <button class="w-full mt-3 px-4 py-2 bg-white bg-opacity-20 text-white rounded-md text-sm font-semibold hover:bg-opacity-30 transition-all duration-300 flex items-center justify-center gap-2" onclick="contactSupport()">
                    <i class="fas fa-envelope"></i> Contact
                </button>
            </div>
        </div>
    </nav>
</div>

<script>
function toggleModule(moduleName) {
    const submenu = document.getElementById(`${moduleName}-submenu`);
    const icon = document.getElementById(`${moduleName}-icon`);
    
    if (submenu.classList.contains('hidden')) {
        submenu.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        submenu.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}

function contactSupport() {
    alert('Opening support contact form...');
}
</script>