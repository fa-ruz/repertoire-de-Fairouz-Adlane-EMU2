<?php
$langues = [

    'Français (courant)',
    'Anglais (avancé)',
    'Néerlandais (notions)',
    
];
?>
<h3>langues<?= count($langues) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($langues as $langues): ?>
        <li><?= $langues; ?></li>
        <li><?php echo $langues; ?></li>
    <?php endforeach; ?>
</ul>