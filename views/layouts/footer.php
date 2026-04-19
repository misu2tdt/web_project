<?php
/**
 * footer.php — Layout footer chung cho toàn site
 *
 * File này được include vào cuối mỗi trang.
 * Chứa: đóng thẻ <main>, footer HTML, đóng </body></html>
 *
 * Lưu ý:
 * - CSS footer nằm trong assets/css/layouts/footer.css
 * - JS nằm trong assets/js/main.js
 * - Không viết <style> hay <script> trực tiếp trong file này
 */
?>

</main><!-- Đóng thẻ <main> đã mở trong header.php -->

<footer class="site-footer">

    <!-- ==========================================
         FOOTER TOP: Links + Location
         ========================================== -->
    <div class="footer-top">

        <!-- 3 cột links -->
        <div class="footer-links">

            <div class="footer-col">
                <h4>Resources</h4>
                <ul>
                    <li><a href="/find-store">Find A Store</a></li>
                    <li><a href="/register">Become A Member</a></li>
                    <li><a href="/shoe-finder">Running Shoe Finder</a></li>
                    <li><a href="/coaching">Nike Coaching</a></li>
                    <li><a href="/feedback">Send Us Feedback</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Help</h4>
                <ul>
                    <li><a href="/help">Get Help</a></li>
                    <li><a href="/order-status">Order Status</a></li>
                    <li><a href="/delivery">Delivery</a></li>
                    <li><a href="/returns">Returns</a></li>
                    <li><a href="/payment-options">Payment Options</a></li>
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="/about">About Nike</a></li>
                    <li><a href="/news">News</a></li>
                    <li><a href="/careers">Careers</a></li>
                    <li><a href="/investors">Investors</a></li>
                    <li><a href="/sustainability">Sustainability</a></li>
                </ul>
            </div>

        </div>

        <!-- Location selector -->
        <div class="footer-location">
            <a href="#" aria-label="Chọn khu vực">
                <i class="fa-solid fa-globe"></i>
                <span>Vietnam</span>
            </a>
        </div>

    </div><!-- /.footer-top -->

    <!-- ==========================================
         FOOTER BOTTOM: Copyright + Legal links
         ========================================== -->
    <div class="footer-bottom">

        <!-- Copyright — margin-right: auto đẩy các link sang phải -->
        <p class="footer-copyright">
            &copy; <?= date('Y') ?> Nike, Inc. All rights reserved
        </p>

        <nav class="footer-legal" aria-label="Legal links">
            <a href="/guides">
                Guides <i class="fa-solid fa-chevron-down"></i>
            </a>
            <a href="/terms-of-sale">Terms of Sale</a>
            <a href="/terms-of-use">Terms of Use</a>
            <a href="/privacy-policy">Nike Privacy Policy</a>
            <a href="/privacy-settings">Privacy Settings</a>
        </nav>

    </div><!-- /.footer-bottom -->

</footer>

<!-- JS chung — đặt cuối body để không block render HTML -->
<script src="/assets/js/main.js"></script>

</body>
</html>