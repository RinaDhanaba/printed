<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>




<!-- Form Section -->
<div class="form-section">
<form action="#" method="POST">
    <div class="form-group">
        <select id="productSelector">
            <?php 
            // Set default selection to the first option in the array
            $firstKey = key($product_cats); 
            ?>
            <option value="<?= $firstKey ?>" selected><?= $product_cats[$firstKey]["name"] ?></option>
            <?php foreach ($product_cats as $key => $product_cat): ?>
                <?php if ($key !== $firstKey): ?>
                    <option value="<?= $key ?>"><?= $product_cat["name"] ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
    </div>

    <!-- Form fields without labels -->
    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
    <input type="text" id="telephone" name="telephone" placeholder="Enter your phone number" pattern="^\+?[0-9\s\-()]+$" required>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>
    <input type="text" id="address1" name="address1" placeholder="Enter address" required>
    <input type="text" id="address2" name="address2" placeholder="Enter Second address">
    <input type="text" id="town" name="town" placeholder="Enter town/city" required>
    <input type="text" id="postcode" name="postcode" placeholder="Enter postcode" required>
    <select name="country" id="country" required>
        <option value="">Select a country...</option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>
        <option value="Germany">Germany</option>
    </select>

    <p>All of our sample packs are Printed.com branded. Once you’ve submitted your request, we may contact you to follow up on your order.</p>

    <button type="submit" class="shop-btn">Request Sample Pack</button>
</form>



<!-- Blog section -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
