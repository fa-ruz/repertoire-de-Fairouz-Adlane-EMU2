<?php
$experiences = [
    
    'Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles',
'Conception et développement dinterfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript.',
'Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.',
'Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.',
'Utilisation de frameworks tels que React et Vue.js pour créer des expériences utilisateur dynamiques et réactives.',
'Intégration de services RESTful et utilisation de Git pour le contrôle de version.',

    'Juin 2015 - Mars 2016 : Stagiaire en Développement Web, Startup WebCraft, Liège',
'Assistance dans la création dune application web responsive utilisant les dernières technologies front-end.',
'Participation à loptimisation des performances du site et à lassurance de sa compatibilité avec différents navigateurs.',
'Contribution à la mise en place dune méthodologie de développement Agile au sein de léquipe.',


];
?>
<h3>experiences<?= count($experiences) > 1 ? 's' : '' ?></h3>
<ul>
    <?php foreach ($experiences as $experiences): ?>
        <li><?= $experiences; ?></li>
        <li><?php echo $experiences; ?></li>
    <?php endforeach; ?>
</ul>