<!-- Sidebar -->
<div id="sidebar" class="sidebar">
    <button id="closeSidebar">&times;</button>
    <h2>Customize Your Order</h2>
    
    <form action="process.php" method="POST">
        <!-- Product Selection -->
        <label>Product:</label>
        <select name="product" id="productSelect">
            <option value="Leaflets & Flyers" <?= ($_SESSION['selected_options']['product'] ?? '') == "Leaflets & Flyers" ? 'selected' : ''; ?>>Leaflets & Flyers</option>
            <option value="Folded Leaflets & Flyers" <?= ($_SESSION['selected_options']['product'] ?? '') == "Folded Leaflets & Flyers" ? 'selected' : ''; ?>>Folded Leaflets & Flyers</option>
        </select>

        <!-- Size -->
        <label>Size:</label>
        <select name="size">
            <option value="A4">A4</option>
            <option value="A5">A5</option>
        </select>

        <!-- Submit -->
        <button type="submit">Save & Continue</button>
    </form>

    <!-- Progress Bar -->
    <div class="progress-bar">
        <h3>Product Summary</h3>
        <ul>
            <li class="<?= isset($_SESSION['selected_options']['product']) ? 'selected' : ''; ?>">Product: <?= $_SESSION['selected_options']['product'] ?? '-' ?></li>
            <li class="<?= isset($_SESSION['selected_options']['size']) ? 'selected' : ''; ?>">Size: <?= $_SESSION['selected_options']['size'] ?? '-' ?></li>
        </ul>
    </div>
</div>