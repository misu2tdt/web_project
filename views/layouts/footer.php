</main>

    <style>
        /* CSS riêng cho Footer */
        .site-footer {
            background-color: #fff;
            border-top: 1px solid #e5e5e5;
            padding: 40px 36px 20px;
            font-size: 12px;
        }
        .footer-top {
            display: flex;
            justify-content: space-between;
            margin-bottom: 40px;
        }
        .footer-links {
            display: flex;
            gap: 100px; /* Khoảng cách giữa các cột */
        }
        .footer-col h4 {
            font-size: 14px;
            margin-bottom: 16px;
            text-transform: capitalize;
        }
        .footer-col ul { list-style: none; padding: 0; }
        .footer-col li { margin-bottom: 12px; }
        .footer-col a { color: #707072; font-weight: 500; }
        .footer-col a:hover { color: #111; }
        
        .footer-location a { font-weight: 500; color: #111; display: flex; align-items: center; gap: 8px;}
        
        .footer-bottom {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            border-top: 1px solid #e5e5e5;
            padding-top: 20px;
            color: #707072;
            gap: 20px;
        }
        .footer-bottom a { color: #707072; }
        .footer-bottom a:hover { color: #111; }
        .copyright { margin-right: auto; } /* Đẩy các link còn lại sang phải */
    </style>

    <footer class="site-footer">
        <div class="footer-top">
            <div class="footer-links">
                <div class="footer-col">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Find A Store</a></li>
                        <li><a href="/views/pages/register.php">Become A Member</a></li>
                        <li><a href="#">Running Shoe Finder</a></li>
                        <li><a href="#">Nike Coaching</a></li>
                        <li><a href="#">Send Us Feedback</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="#">Get Help</a></li>
                        <li><a href="#">Order Status</a></li>
                        <li><a href="#">Delivery</a></li>
                        <li><a href="#">Returns</a></li>
                        <li><a href="#">Payment Options</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About Nike</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Investors</a></li>
                        <li><a href="#">Sustainability</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-location">
                <a href="#"><i class="fa-solid fa-globe"></i> Vietnam</a>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                &copy; 2026 Nike, Inc. All rights reserved
            </div>
            <a href="#">Guides <i class="fa-solid fa-chevron-down" style="font-size: 10px;"></i></a>
            <a href="#">Terms of Sale</a>
            <a href="#">Terms of Use</a>
            <a href="#">Nike Privacy Policy</a>
            <a href="#">Privacy Settings</a>
        </div>
    </footer>
</body>
</html>