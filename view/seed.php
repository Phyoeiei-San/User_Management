<?php
//require 'index.php';

// Temporarily disable foreign key checks
$db->query('SET FOREIGN_KEY_CHECKS=0');

$db->query('DELETE FROM user');
$db->query('ALTER TABLE user AUTO_INCREMENT=1');

$db->query('DELETE FROM roles');
$db->query('ALTER TABLE roles AUTO_INCREMENT=1');

// Seed roles
$roles = ['Admin', 'Cashier', 'Accountant'];
foreach ($roles as $role) {
    $db->query('INSERT INTO roles (name) VALUES (?)', [$role]);
}

echo 'Roles seeded successfully.';

// Seed users


echo 'Users seeded successfully.';

// Re-enable foreign key checks
$db->query('SET FOREIGN_KEY_CHECKS=1');

echo 'Foreign key checks re-enabled.';
?>