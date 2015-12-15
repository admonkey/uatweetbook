<?php

/*
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once (__DIR__).'/_resources/peredur.inc.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_POST['email'], $_POST['p'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['p']; // The hashed password.
    
    $http_referer_array = explode("?", $_SERVER["HTTP_REFERER"]);
    $http_referer_plain = $http_referer_array[0];
    
    if (login($email, $password, $mysqli) == true) {
        // Login success 
        header("Location: $http_referer_plain");
        exit();
    } else {
        // Login failed 
        header("Location: $http_referer_plain?error=1");
        exit();
    }
} else {
    // The correct POST variables were not sent to this page. 
    die("ERROR: Could not process login.");
}

require_once((__DIR__)."/_resources/footer.inc.php");

?>
