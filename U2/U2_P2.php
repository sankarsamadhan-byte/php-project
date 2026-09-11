<?php

// Delete the cookie named "welcome"
setcookie("welcome", "", time() - 5);

echo "Cookie 'welcome' has been deleted.";

?>