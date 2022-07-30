<?php
require("view/Header.php");
require("view/Footer.php");

use APP\View\Footer;
use APP\View\Header;

Header::init("Home");

?>

        <aside style="background-image: url(img/profile_big.jpg);"></aside>
        <main>
            <h1 class="mb-0">Hi, I'm Kate Woodman</h1>
            <div class="mb-5">
                <p class="lead mb-3">Web Designer &amp; Developer</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, magnam aut animi, excepturi voluptatum placeat dolor accusantium atque iure! Animi architecto eveniet voluptatum illo ut maiores sed, autem pariatur culpa?</p>
                <p>Commodi, neque debitis atque cum quod, culpa repellendus voluptatum voluptatem, molestiae dicta laborum nulla corporis illum, ratione rerum quibusdam ea optio! Consectetur obcaecati facilis esse reprehenderit ipsam, facere dolorem incidunt.</p>
            </div>

            <p>
                <a href="#" class="mr-2 mb-2">Twitter</a>
                <a href="#" class="mr-2 mb-2">Facebook</a>
                <a href="#" class="mr-2 mb-2">Instagram</a>
            </p>
            
    </div>

    </main>
    </div>

<?php
Footer::init();
?>