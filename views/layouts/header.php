<?php
/**
 * header.php — Layout chung cho toàn bộ website
 *
 * File này được include vào đầu mỗi trang.
 * Chứa: <head>, top-bar, main-header với nav + dropdown + search + icons
 *
 * @param string $pageTitle  Tiêu đề trang (truyền từ Controller hoặc View)
 * @param string $BASE_URL   Đường dẫn gốc, định nghĩa trong config.php
 */

// Lấy tiêu đề trang nếu không có thì dùng mặc định
$pageTitle = $pageTitle ?? 'Nike - Just Do It';

// Xác định trang hiện tại để highlight menu (active state)
// basename() lấy tên file, str_replace() bỏ đuôi .php
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO: Mỗi trang nên có title riêng -->
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <!-- SEO Meta Tags cơ bản -->
    <meta name="description" content="Nike Vietnam - Mua giày, quần áo thể thao chính hãng">
    <meta name="robots" content="index, follow">

    <!-- Google Fonts: Bebas Neue cho logo/heading, Barlow cho body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS chung của toàn site — TÁCH RIÊNG khỏi header.php -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- ==========================================
     TOP BAR
     Thanh nhỏ phía trên cùng: logo icon + links
     ========================================== -->
<div class="top-bar">
    <div class="top-bar-brand">
        <!-- Icon Nike (dùng SVG để không phụ thuộc ảnh ngoài) -->
        <svg width="40" height="16" viewBox="0 0 40 16" fill="currentColor">
            <path d="M3.782 12.68L16.32 0 40 9.077c-2.19.81-4.44 1.17-6.633.99-2.538-.208-4.74-1.164-6.476-2.66L3.782 12.68z"/>
        </svg>
    </div>
    <div class="top-bar-links">
        <a href="#">Find a Store</a>
        <a href="#">Help</a>
        <!-- htmlspecialchars() bảo vệ khỏi XSS nếu URL được tạo động -->
        <a href="/register">Join Us</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <!-- Nếu đã đăng nhập: hiện tên user và link logout -->
            <a href="/profile"><?= htmlspecialchars($_SESSION['username'] ?? 'Tài khoản') ?></a>
            <a href="/logout">Sign Out</a>
        <?php else: ?>
            <a href="/login">Sign In</a>
        <?php endif; ?>
    </div>
</div>

<!-- ==========================================
     MAIN HEADER
     Logo + Navigation + Search + Icons
     ========================================== -->
<header class="main-header" id="mainHeader">

    <!-- Logo -->
    <div class="header-logo">
        <a href="/" aria-label="Về trang chủ">
            <!-- Dùng text thay logo thật vì đây là project học -->
            <span class="logo-text">NIKE</span>
        </a>
    </div>

    <!-- Navigation chính với Dropdown -->
    <!-- role="navigation" và aria-label tốt cho accessibility & SEO -->
    <nav class="main-nav" role="navigation" aria-label="Main navigation">
        <ul class="nav-list">

            <!-- Mỗi <li> có class "has-dropdown" nếu có submenu -->
            <li class="nav-item has-dropdown">
                <a href="/new-featured" class="nav-link <?= $currentPage === 'new-featured' ? 'active' : '' ?>">
                    New & Featured
                </a>
                <!-- DROPDOWN MENU: ẩn bằng CSS, hiện khi hover -->
                <div class="dropdown-menu">
                    <div class="dropdown-inner">
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Shoes</h4>
                            <ul>
                                <li><a href="/products?category=new-shoes">New Releases</a></li>
                                <li><a href="/products?category=best-sellers">Best Sellers</a></li>
                                <li><a href="/products?category=sale">Sale</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Clothing</h4>
                            <ul>
                                <li><a href="/products?category=tops">Tops & T-Shirts</a></li>
                                <li><a href="/products?category=hoodies">Hoodies & Sweatshirts</a></li>
                                <li><a href="/products?category=pants">Pants & Tights</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Accessories</h4>
                            <ul>
                                <li><a href="/products?category=bags">Bags & Backpacks</a></li>
                                <li><a href="/products?category=hats">Hats & Headwear</a></li>
                                <li><a href="/products?category=socks">Socks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item has-dropdown">
                <a href="/men" class="nav-link <?= $currentPage === 'men' ? 'active' : '' ?>">Men</a>
                <div class="dropdown-menu">
                    <div class="dropdown-inner">
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Shoes</h4>
                            <ul>
                                <li><a href="/products?gender=men&category=running">Running</a></li>
                                <li><a href="/products?gender=men&category=training">Training & Gym</a></li>
                                <li><a href="/products?gender=men&category=lifestyle">Lifestyle</a></li>
                                <li><a href="/products?gender=men&category=football">Football</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Clothing</h4>
                            <ul>
                                <li><a href="/products?gender=men&category=tops">Tops & T-Shirts</a></li>
                                <li><a href="/products?gender=men&category=shorts">Shorts</a></li>
                                <li><a href="/products?gender=men&category=hoodies">Hoodies</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item has-dropdown">
                <a href="/women" class="nav-link <?= $currentPage === 'women' ? 'active' : '' ?>">Women</a>
                <div class="dropdown-menu">
                    <div class="dropdown-inner">
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Shoes</h4>
                            <ul>
                                <li><a href="/products?gender=women&category=running">Running</a></li>
                                <li><a href="/products?gender=women&category=training">Training & Gym</a></li>
                                <li><a href="/products?gender=women&category=lifestyle">Lifestyle</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Clothing</h4>
                            <ul>
                                <li><a href="/products?gender=women&category=sports-bras">Sports Bras</a></li>
                                <li><a href="/products?gender=women&category=leggings">Leggings & Tights</a></li>
                                <li><a href="/products?gender=women&category=tops">Tops</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item has-dropdown">
                <a href="/kids" class="nav-link <?= $currentPage === 'kids' ? 'active' : '' ?>">Kids</a>
                <div class="dropdown-menu">
                    <div class="dropdown-inner">
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">By Age</h4>
                            <ul>
                                <li><a href="/products?age=infant">Baby & Toddler</a></li>
                                <li><a href="/products?age=little-kids">Little Kids (4-7)</a></li>
                                <li><a href="/products?age=big-kids">Big Kids (8-15)</a></li>
                            </ul>
                        </div>
                        <div class="dropdown-col">
                            <h4 class="dropdown-heading">Shop</h4>
                            <ul>
                                <li><a href="/products?gender=kids&category=shoes">Shoes</a></li>
                                <li><a href="/products?gender=kids&category=clothing">Clothing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a href="/sale" class="nav-link sale-link <?= $currentPage === 'sale' ? 'active' : '' ?>">Sale</a>
            </li>

        </ul>
    </nav>

    <!-- Header Actions: Search + Wishlist + Cart -->
    <div class="header-actions">

        <!-- Search Box: mở rộng khi click -->
        <div class="search-wrapper" id="searchWrapper">
            <button class="search-toggle" id="searchToggle" aria-label="Tìm kiếm">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <form class="search-form" id="searchForm" action="/search" method="GET" role="search">
                <input
                    type="search"
                    name="q"
                    id="searchInput"
                    placeholder="Tìm kiếm sản phẩm..."
                    autocomplete="off"
                    aria-label="Tìm kiếm sản phẩm"
                >
                <button type="submit" aria-label="Tìm">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <!-- Wishlist Icon — chỉ hiện khi đã đăng nhập -->
        <a href="<?= isset($_SESSION['user_id']) ? '/wishlist' : '/login' ?>"
           class="icon-btn"
           aria-label="Danh sách yêu thích">
            <i class="fa-regular fa-heart"></i>
        </a>

        <!-- Cart Icon với Badge số lượng -->
        <a href="/cart" class="icon-btn cart-btn" aria-label="Giỏ hàng">
            <i class="fa-solid fa-bag-shopping"></i>
            <?php
            // Đếm số item trong giỏ hàng từ session
            // $_SESSION['cart'] sẽ được set bởi CartController
            $cartCount = isset($_SESSION['cart']) ? array_sum(array_column($_SESSION['cart'], 'quantity')) : 0;
            if ($cartCount > 0):
            ?>
                <span class="cart-badge"><?= $cartCount > 99 ? '99+' : $cartCount ?></span>
            <?php endif; ?>
        </a>

        <!-- Hamburger Menu Button — chỉ hiện trên mobile -->
        <button class="hamburger-btn" id="hamburgerBtn" aria-label="Mở menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div>
</header>

<!-- ==========================================
     MOBILE MENU OVERLAY
     Hiện trên mobile khi click hamburger
     ========================================== -->
<div class="mobile-overlay" id="mobileOverlay"></div>
<nav class="mobile-menu" id="mobileMenu" aria-label="Mobile navigation">
    <div class="mobile-menu-header">
        <span class="logo-text">NIKE</span>
        <button class="mobile-close" id="mobileClose" aria-label="Đóng menu">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <ul class="mobile-nav-list">
        <li class="mobile-nav-item">
            <a href="/new-featured">New & Featured</a>
        </li>
        <li class="mobile-nav-item">
            <!-- Accordion: click để mở submenu trên mobile -->
            <button class="mobile-accordion" aria-expanded="false">
                Men <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="mobile-submenu">
                <li><a href="/products?gender=men&category=running">Running</a></li>
                <li><a href="/products?gender=men&category=training">Training</a></li>
                <li><a href="/products?gender=men&category=lifestyle">Lifestyle</a></li>
            </ul>
        </li>
        <li class="mobile-nav-item">
            <button class="mobile-accordion" aria-expanded="false">
                Women <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="mobile-submenu">
                <li><a href="/products?gender=women&category=running">Running</a></li>
                <li><a href="/products?gender=women&category=training">Training</a></li>
                <li><a href="/products?gender=women&category=lifestyle">Lifestyle</a></li>
            </ul>
        </li>
        <li class="mobile-nav-item">
            <button class="mobile-accordion" aria-expanded="false">
                Kids <i class="fa-solid fa-chevron-down"></i>
            </button>
            <ul class="mobile-submenu">
                <li><a href="/products?gender=kids&category=shoes">Shoes</a></li>
                <li><a href="/products?gender=kids&category=clothing">Clothing</a></li>
            </ul>
        </li>
        <li class="mobile-nav-item">
            <a href="/sale" class="sale-link">Sale</a>
        </li>
    </ul>
    <div class="mobile-menu-footer">
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="/profile" class="mobile-auth-btn">Tài khoản của tôi</a>
            <a href="/logout" class="mobile-auth-btn outline">Đăng xuất</a>
        <?php else: ?>
            <a href="/login" class="mobile-auth-btn">Đăng nhập</a>
            <a href="/register" class="mobile-auth-btn outline">Đăng ký</a>
        <?php endif; ?>
    </div>
</nav>

<!-- Main content bắt đầu từ đây -->
<main class="main-content">