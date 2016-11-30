<?php

session_destroy();

if (!empty($_SESSION['user_id'])) {
    include "navbar_connecte.php";
} else {
    include "navbar_invite.php";
}
