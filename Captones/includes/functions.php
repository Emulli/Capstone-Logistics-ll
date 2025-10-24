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
?>