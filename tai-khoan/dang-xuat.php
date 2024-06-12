<?php
        session_start();
        session_destroy();
        header('location: /cosmetic/trang-chinh/index.php');
    ?>