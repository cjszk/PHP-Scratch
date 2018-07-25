<?php
$hour = 12;
$name = 'Chris';

$fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Lorem Ipsum</h1>

    <?php if ($hour < 12): ?>
        Good morning, <?= $name; ?>
    <?php elseif ($hour < 18): ?>
        Good afternoon, <?= $name; ?>
    <?php elseif ($hour < 22): ?>
        Good evening, <?= $name; ?>
    <?php else: ?>
        Good night, <?= $name; ?>
    <?php endif; ?>

    <!-- put your code below this line -->
    <ol>
        <?php
            foreach($fruit as $item) {
                echo "<li>" . $item . "</li>";
            }
        ?>
    </ol>

</body>
</html>