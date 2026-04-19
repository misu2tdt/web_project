<?php
// Bước 1: Load config TRƯỚC TIÊN
require_once 'config/config.php';

// Bước 2: Start session để dùng $_SESSION
session_start();

// Bước 3: Load view
require_once 'views/layouts/header.php';
?>

<!-- Nội dung trang -->
<section>...</section>

<?php require_once 'views/layouts/footer.php'; ?>