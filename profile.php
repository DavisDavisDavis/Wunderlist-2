<?php

require __DIR__ . '/app/autoload.php';
require __DIR__ . '/views/header.php'; ?>

<h2><?php if (isset($_SESSION['user'])) {
        $name = $_SESSION['user']['name'];
        echo 'Welcome, ' . $name . '!';
    } ?></h2>
<h2><?php if (isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['user_id'];
        echo 'Welcome, ' . $user_id . '!';
    } ?></h2>


<img src="" alt="profile picture">
<!-- form to change profile picture -->
<form action=""></form>

<!-- form to change email -->
<p>Current email: <?= ($_SESSION['user']['email']); ?></p>
<form action=""></form>

<!-- form to change password -->
<form action=""></form>

<!-- delete user -->
<form action="/app/users/delete.php">
    <input type="hidden" name="userid-to-delete" value="<?php echo $_SESSION['user'] ?>">
    <input type="submit" name="delete" value="delete">
</form>
<p>Click here to delete your user profile</p>


<?php require __DIR__ . '/views/footer.php'; ?>