<?php

if (!empty($_SESSION['id'])) {
    include "navbar_invite.php";
} else {
    include "navbar_connecte.php";
}
