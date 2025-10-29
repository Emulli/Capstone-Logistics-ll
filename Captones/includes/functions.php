<?php
// Shared functions for the dashboard
// Mock data - Replace with database queries

function getVehicles() {
    return [
        ['id' => 1, 'plate' => 'ABC-1234', 'model' => 'Toyota Hiace', 'type' => 'Van', 'year' => 2022, 'status' => 'Active', 'last_maintenance' => '2024-08-15'],
        ['id' => 2, 'plate' => 'XYZ-5678', 'model' => 'Isuzu NPR', 'type' => 'Truck', 'year' => 2021, 'status' => 'Active', 'last_maintenance' => '2024-09-01'],
        ['id' => 3, 'plate' => 'DEF-9012', 'model' => 'Honda CB500', 'type' => 'Motorcycle', 'year' => 2023, 'status' => 'Active', 'last_maintenance' => '2024-07-20'],
        ['id' => 4, 'plate' => 'GHI-3456', 'model' => 'Mitsubishi Fuso', 'type' => 'Truck', 'year' => 2020, 'status' => 'Maintenance', 'last_maintenance' => '2024-06-10'],
        ['id' => 5, 'plate' => 'JKL-7890', 'model' => 'Toyota Fortuner', 'type' => 'Car', 'year' => 2019, 'status' => 'Inactive', 'last_maintenance' => '2024-05-15'],
        ['id' => 6, 'plate' => 'MNO-2345', 'model' => 'Suzuki Carry', 'type' => 'Van', 'year' => 2022, 'status' => 'Active', 'last_maintenance' => '2024-08-25'],
    ];
}

function getMaintenanceRecords() {
    return [
        ['id' => 1, 'vehicle' => 'ABC-1234', 'type' => 'Oil Change', 'date' => '2024-10-15', 'cost' => 2500, 'status' => 'Completed'],
        ['id' => 2, 'vehicle' => 'XYZ-5678', 'type' => 'Tire Replacement', 'date' => '2024-10-18', 'cost' => 8000, 'status' => 'In Progress'],
        ['id' => 3, 'vehicle' => 'DEF-9012', 'type' => 'Engine Inspection', 'date' => '2024-10-20', 'cost' => 5000, 'status' => 'Pending'],
        ['id' => 4, 'vehicle' => 'GHI-3456', 'type' => 'Brake Service', 'date' => '2024-10-12', 'cost' => 6500, 'status' => 'Completed'],
    ];
}

function getFuelExpenses() {
    return [
        ['id' => 1, 'vehicle' => 'ABC-1234', 'date' => '2024-10-10', 'liters' => 50, 'cost' => 2500, 'driver' => 'John Smith'],
        ['id' => 2, 'vehicle' => 'XYZ-5678', 'date' => '2024-10-09', 'liters' => 60, 'cost' => 3000, 'driver' => 'Jane Doe'],
    ];
}

function getApprovals() {
    return [
        ['id' => 1, 'vehicle' => 'ABC-1234', 'type' => 'Maintenance', 'amount' => 5000, 'status' => 'Pending', 'date' => '2024-10-10'],
        ['id' => 2, 'vehicle' => 'DEF-9012', 'type' => 'Repair', 'amount' => 8000, 'status' => 'Approved', 'date' => '2024-10-08'],
    ];
}

function getComplianceRecords() {
    return [
        ['id' => 1, 'vehicle' => 'ABC-1234', 'document' => 'Insurance', 'expiry' => '2025-03-15', 'status' => 'Valid'],
        ['id' => 2, 'vehicle' => 'XYZ-5678', 'document' => 'Registration', 'expiry' => '2024-12-31', 'status' => 'Expiring Soon'],
    ];
}

function getPredictiveData() {
    return [
        ['vehicle' => 'ABC-1234', 'prediction' => 'Oil Change Due', 'confidence' => 95, 'days' => 5],
        ['vehicle' => 'XYZ-5678', 'prediction' => 'Brake Inspection', 'confidence' => 87, 'days' => 12],
    ];
}

// Get KPI data
function getKPIData() {
    $vehicles = getVehicles();
    return [
        'total_vehicles' => count($vehicles),
        'active_vehicles' => count(array_filter($vehicles, fn($v) => $v['status'] === 'Active')),
        'maintenance_due' => count(array_filter($vehicles, fn($v) => $v['status'] === 'Maintenance')),
        'inactive_vehicles' => count(array_filter($vehicles, fn($v) => $v['status'] === 'Inactive')),
    ];
}

function getStatusClass($status) {
    switch($status) {
        case 'Active':
        case 'Completed':
        case 'Valid':
            return 'status-active';
        case 'Maintenance':
        case 'In Progress':
        case 'Pending':
            return 'status-maintenance';
        case 'Inactive':
        case 'Expiring Soon':
            return 'status-inactive';
        default:
            return 'status-maintenance';
    }
}

function getDispatchAssignments() {
    return [
        ['id' => 1, 'vehicle' => 'ABC-1234', 'model' => 'Toyota Hiace', 'type' => 'Van', 'driver' => 'John Smith', 'status' => 'Active', 'dispatch_date' => '2024-10-29', 'route' => 'Manila - Quezon City', 'availability' => 'Assigned'],
        ['id' => 2, 'vehicle' => 'XYZ-5678', 'model' => 'Isuzu NPR', 'type' => 'Truck', 'driver' => 'Jane Doe', 'status' => 'Active', 'dispatch_date' => '2024-10-29', 'route' => 'Manila - Makati', 'availability' => 'Assigned'],
        ['id' => 3, 'vehicle' => 'DEF-9012', 'model' => 'Honda CB500', 'type' => 'Motorcycle', 'driver' => null, 'status' => 'Available', 'dispatch_date' => null, 'route' => null, 'availability' => 'Available'],
        ['id' => 4, 'vehicle' => 'GHI-3456', 'model' => 'Mitsubishi Fuso', 'type' => 'Truck', 'driver' => 'Mike Johnson', 'status' => 'Active', 'dispatch_date' => '2024-10-30', 'route' => 'Manila - Pasig', 'availability' => 'Assigned'],
        ['id' => 5, 'vehicle' => 'JKL-7890', 'model' => 'Toyota Fortuner', 'type' => 'Car', 'driver' => null, 'status' => 'Maintenance', 'dispatch_date' => null, 'route' => null, 'availability' => 'Maintenance'],
        ['id' => 6, 'vehicle' => 'MNO-2345', 'model' => 'Suzuki Carry', 'type' => 'Van', 'driver' => null, 'status' => 'Available', 'dispatch_date' => null, 'route' => null, 'availability' => 'Available'],
    ];
}

function getAvailableDrivers() {
    return [
        ['id' => 1, 'name' => 'John Smith', 'license' => 'N01-12-123456', 'status' => 'On Duty', 'contact' => '0917-123-4567'],
        ['id' => 2, 'name' => 'Jane Doe', 'license' => 'N01-12-234567', 'status' => 'On Duty', 'contact' => '0917-234-5678'],
        ['id' => 3, 'name' => 'Mike Johnson', 'license' => 'N01-12-345678', 'status' => 'On Duty', 'contact' => '0917-345-6789'],
        ['id' => 4, 'name' => 'Sarah Williams', 'license' => 'N01-12-456789', 'status' => 'Available', 'contact' => '0917-456-7890'],
        ['id' => 5, 'name' => 'David Brown', 'license' => 'N01-12-567890', 'status' => 'Available', 'contact' => '0917-567-8901'],
        ['id' => 6, 'name' => 'Emma Wilson', 'license' => 'N01-12-678901', 'status' => 'Off Duty', 'contact' => '0917-678-9012'],
    ];
}

function getDispatchSchedules() {
    return [
        ['date' => '2024-10-29', 'vehicle' => 'ABC-1234', 'driver' => 'John Smith', 'route' => 'Manila - Quezon City'],
        ['date' => '2024-10-29', 'vehicle' => 'XYZ-5678', 'driver' => 'Jane Doe', 'route' => 'Manila - Makati'],
        ['date' => '2024-10-30', 'vehicle' => 'GHI-3456', 'driver' => 'Mike Johnson', 'route' => 'Manila - Pasig'],
        ['date' => '2024-10-31', 'vehicle' => 'ABC-1234', 'driver' => 'Sarah Williams', 'route' => 'Manila - Taguig'],
    ];
}


// Get reservation records
function getReservations() {
    return [
        ['id' => 1, 'vehicle' => 'ABC-1234', 'model' => 'Toyota Hiace', 'type' => 'Van', 'driver' => 'John Smith', 'date' => '2024-10-29', 'time' => '08:00 AM', 'destination' => 'Quezon City Hall', 'purpose' => 'Document Delivery', 'duration' => '4 hours', 'status' => 'In Use', 'created_at' => '2024-10-28'],
        ['id' => 2, 'vehicle' => 'XYZ-5678', 'model' => 'Isuzu NPR', 'type' => 'Truck', 'driver' => 'Jane Doe', 'date' => '2024-10-29', 'time' => '10:00 AM', 'destination' => 'Makati Business District', 'purpose' => 'Equipment Transport', 'duration' => '6 hours', 'status' => 'Assigned', 'created_at' => '2024-10-28'],
        ['id' => 3, 'vehicle' => 'DEF-9012', 'model' => 'Honda CB500', 'type' => 'Motorcycle', 'driver' => null, 'date' => '2024-10-30', 'time' => '09:00 AM', 'destination' => 'BGC Taguig', 'purpose' => 'Urgent Delivery', 'duration' => '2 hours', 'status' => 'Pending Dispatch', 'created_at' => '2024-10-29'],
        ['id' => 4, 'vehicle' => 'GHI-3456', 'model' => 'Mitsubishi Fuso', 'type' => 'Truck', 'driver' => 'Mike Johnson', 'date' => '2024-10-28', 'time' => '07:00 AM', 'destination' => 'Pasig Warehouse', 'purpose' => 'Inventory Transfer', 'duration' => '8 hours', 'status' => 'Completed', 'created_at' => '2024-10-27'],
        ['id' => 5, 'vehicle' => 'JKL-7890', 'model' => 'Toyota Fortuner', 'type' => 'Car', 'driver' => 'Sarah Williams', 'date' => '2024-10-27', 'time' => '02:00 PM', 'destination' => 'Manila Bay Area', 'purpose' => 'Client Meeting', 'duration' => '3 hours', 'status' => 'Cancelled', 'created_at' => '2024-10-26'],
        ['id' => 6, 'vehicle' => 'MNO-2345', 'model' => 'Suzuki Carry', 'type' => 'Van', 'driver' => 'David Brown', 'date' => '2024-10-30', 'time' => '11:00 AM', 'destination' => 'Ortigas Center', 'purpose' => 'Supply Pickup', 'duration' => '5 hours', 'status' => 'Assigned', 'created_at' => '2024-10-29'],
    ];
}

// Get reservation by ID
function getReservationById($id) {
    $reservations = getReservations();
    foreach ($reservations as $reservation) {
        if ($reservation['id'] == $id) {
            return $reservation;
        }
    }
    return null;
}

// Get vehicle availability for calendar
function getVehicleAvailability() {
    return [
        ['date' => '2024-10-29', 'vehicle' => 'ABC-1234', 'status' => 'Assigned', 'driver' => 'John Smith', 'destination' => 'Quezon City', 'time' => '08:00 AM'],
        ['date' => '2024-10-29', 'vehicle' => 'XYZ-5678', 'status' => 'Assigned', 'driver' => 'Jane Doe', 'destination' => 'Makati', 'time' => '10:00 AM'],
        ['date' => '2024-10-29', 'vehicle' => 'GHI-3456', 'status' => 'Maintenance', 'driver' => null, 'destination' => null, 'time' => null],
        ['date' => '2024-10-30', 'vehicle' => 'ABC-1234', 'status' => 'Available', 'driver' => null, 'destination' => null, 'time' => null],
        ['date' => '2024-10-30', 'vehicle' => 'DEF-9012', 'status' => 'Assigned', 'driver' => 'Mike Johnson', 'destination' => 'Pasig', 'time' => '09:00 AM'],
        ['date' => '2024-10-30', 'vehicle' => 'JKL-7890', 'status' => 'Maintenance', 'driver' => null, 'destination' => null, 'time' => null],
        ['date' => '2024-10-31', 'vehicle' => 'ABC-1234', 'status' => 'Assigned', 'driver' => 'Sarah Williams', 'destination' => 'Taguig', 'time' => '11:00 AM'],
        ['date' => '2024-10-31', 'vehicle' => 'MNO-2345', 'status' => 'Available', 'driver' => null, 'destination' => null, 'time' => null],
        ['date' => '2024-11-01', 'vehicle' => 'XYZ-5678', 'status' => 'Assigned', 'driver' => 'David Brown', 'destination' => 'Manila', 'time' => '07:00 AM'],
        ['date' => '2024-11-01', 'vehicle' => 'ABC-1234', 'status' => 'Available', 'driver' => null, 'destination' => null, 'time' => null],
    ];
}

// Get all unique locations
function getLocations() {
    return ['Manila', 'Quezon City', 'Makati', 'Pasig', 'Taguig', 'Mandaluyong', 'BGC', 'Ortigas'];
}

?>