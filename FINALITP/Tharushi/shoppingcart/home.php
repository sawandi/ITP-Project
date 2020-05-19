<?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products ORDER BY modified DESC LIMIT 4');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<?=template_header('Home')?>

<div class="featured">
    <h2>Pet’s shop</h2>
    <p>Buy all your pet care needs under one roof, Our pet’s shop available in the Pet Care Animal Clinic premises. 
		Feel free to visit and check out what we offer.</p>
</div>
<div class="recentlyadded content-wrapper">
    <h2 style="color:red;">NEW ARRIVALS</h2>
	<h3 style="color:blue;">LATEST ITEMS IN STORE</h3>
	
    <div class="products">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="../Product/uploads/<?=$product['image']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price">
                &#8360;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&#8360;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?=template_footer()?>