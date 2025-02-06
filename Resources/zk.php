<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} else {
    echo "Formulář nebyl odeslán.";
}
?>


