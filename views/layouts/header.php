<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Doanh Nghiệp</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Reset cơ bản */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; color: #111; }
        a { text-decoration: none; color: #111; }
        ul { list-style: none; }

        /* Top Bar */
        .top-bar {
            background-color: #f5f5f5;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 36px;
            font-size: 12px;
            font-weight: 500;
        }
        .top-bar-links a {
            margin-left: 12px;
            padding-left: 12px;
            border-left: 1px solid #111;
        }
        .top-bar-links a:first-child { border-left: none; }

        /* Main Header */
        .main-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 36px;
            height: 60px;
            background: #fff;
            border-bottom: 1px solid #e5e5e5;
        }
        
        /* Logo (Dùng text tạm thay cho icon Nike) */
        .logo { font-size: 28px; font-weight: 900; font-style: italic; letter-spacing: -2px; }

        /* Navigation */
        .main-nav ul { display: flex; gap: 24px; font-weight: 500; }
        .main-nav a:hover { border-bottom: 2px solid #111; padding-bottom: 2px; }

        /* Right Actions: Search & Icons */
        .header-actions { display: flex; align-items: center; gap: 16px; }
        .search-box {
            background: #f5f5f5;
            border-radius: 100px;
            padding: 8px 16px;
            display: flex;
            align-items: center;
        }
        .search-box input {
            border: none;
            background: transparent;
            outline: none;
            margin-left: 8px;
            font-family: inherit;
        }
        .icon-btn { font-size: 20px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="top-bar">
        <div class="brand-icon"><i class="fa-solid fa-basketball"></i></div>
        <div class="top-bar-links">
            <a href="#">Find a Store</a>
            <a href="#">Help</a>
            <a href="/views/pages/register.php">Join Us</a>
            <a href="/views/pages/login.php">Sign In</a> 
        </div>
    </div>

    <header class="main-header">
        <div class="logo"><a href="/index.php">NIKE</a></div>

        <nav class="main-nav">
            <ul>
                <li><a href="#">New & Featured</a></li>
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Sale</a></li>
            </ul>
        </nav>

        <div class="header-actions">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
            <a href="#" class="icon-btn"><i class="fa-regular fa-heart"></i></a>
            <a href="/views/pages/cart.php" class="icon-btn"><i class="fa-solid fa-bag-shopping"></i></a>
        </div>
    </header>

    <main style="min-height: 60vh; padding: 20px 36px;">