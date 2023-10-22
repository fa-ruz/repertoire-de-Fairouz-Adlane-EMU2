<?php
$centres = [

    'Programmation créative',
    'Musique : Pratique de la guitare et de la composition musicale',
    'Randonnée : Exploration des magnifiques paysages naturels en Belgique et ailleurs',

];
?>
<h3>centres d'intérêts<?= count($centres) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($centres as $centres): ?>
        <li><?= $centres; ?></li>
        <li><?php echo $centres; ?></li>
    <?php endforeach; ?>
</ul>