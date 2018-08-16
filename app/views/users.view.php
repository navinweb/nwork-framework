<?php require 'partials/head.php'; ?>

<div class="container">

    <h1>All Users</h1>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li>
                <?= $user->name; ?>
            </li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit your name</h1>

    <form method="post" action="/users">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

</div>

<?php require 'partials/footer.php'; ?>
