<?php
include_once 'functn.php';
$pdo = pdo_connect_mysql();
// The amounts of excursions to show on each page
$num_excursions_on_each_page = 12;
// The current page, in the URL this will appear as index.php?page=excursions&p=1, index.php?page=excursions&p=2, etc...
$current_page = isset($_GET['p']) && is_numeric($_GET['p']) ? (int)$_GET['p'] : 1;
// Select excursions ordered by the date added
$stmt = $pdo->prepare('SELECT * FROM gtech ORDER BY category DESC LIMIT ?,?');
// bindValue will allow us to use integer in the SQL statement, we need to use for LIMIT
$stmt->bindValue(1, ($current_page - 1) * $num_excursions_on_each_page, PDO::PARAM_INT);
$stmt->bindValue(2, $num_excursions_on_each_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the excursions from the database and return the result as an Array
$gtechs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of excursions
$total_excursions = $pdo->query('SELECT * FROM gtech ')->rowCount();
?>

<?=template_header('users')?>
<br>
<div class="excursions content-wrapper">
    <h1>FREE DIGITAL REVIEW</h1>
    <h2>Thanks for contacting us! We look forward to working together with you to grow your businesses online footprint</h2>
    <p><?=$total_excursions?> Avaliable services</p>
    <div class="excursions-wrapper">
        <?php foreach ($gtechs as $gtech): ?>
         <a href="user.php?id=<?=$gtech['id']?>" class="excursion">
            <span class="name">Category: <?=$gtech['category']?></span>
            <span class="name"> view more</span>
            
        </a>
        <?php endforeach; ?>
        
    </div>
</div>

<?=template_footer()?>