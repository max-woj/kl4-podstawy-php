<?php include_once '../setup.php'; ?>
<nav>
    <ul>
        <?php foreach($navLinks as $myLink): ?>
            <li><a href="<?= $myLink->url ?>"><?= $myLink->name ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>
