<?php

// Delete the cookie named 'welcome'
setcookie("welcome", "", time() - 3600);

// Check if the cookie still exists
if (isset($_COOKIE["welcome"])) {
    echo "Cookie 'welcome' still exists.";
} else {
    echo "Cookie 'welcome' has been deleted.";
}

?>