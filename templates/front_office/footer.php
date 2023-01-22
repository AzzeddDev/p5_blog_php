<footer>
    <div class="container mt-5">
        <div class="mario">
            <span class="player"></span>
            <span class="goomba"></span>
            <span class="shroom"></span>
            <span class="turtle"></span>
            <span class="princess"></span>
        </div>
    </div>
    <div class="container mb-5">
        <div class="border-footer">
            <div class="d-flex col-12 justify-content-center mb-4">
                <a class="menu-footer-links btn-footer me-1" href="http://localhost/mon-blog/templates/front_office/portfolio.php">Portfolio</a>
                <a class="menu-footer-links btn-footer mx-1" href="http://localhost/mon-blog/templates/front_office/contact.php">Contact</a>
                <a class="menu-footer-links btn-footer mx-1" href="http://localhost/mon-blog/templates/front_office/blog.php">Blog</a>

                <?php
                if (isset($_SESSION['role_user'])) {
                if ($_SESSION['role_user'] == 0 and 1) { ?>

                <?php }
                }

                else { ?>
                    <a class="menu-footer-links btn-footer ms-1" href="http://localhost/mon-blog/templates/admin_office/se-connecter.php">Espace Admin</a>
                <?php }
                ?>
            </div>
            <div class="d-flex justify-content-center pt-1 mb-3">
                <a href="#">
                    <i class="fa-brands fa-facebook-square social-icons"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram-square social-icons"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-linkedin social-icons"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-github-square social-icons"></i>
                </a>
            </div>
            <div class="text-center">
                <a class="email" href="#">contact@salmiazzeddine.fr</a>
            </div>
            <p class="text-center m-0">Tous droits réservés © | Salmi Azz Eddine 2022</p>
        </div>
    </div>
</footer>
