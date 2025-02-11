<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<div class="container" style ="display:flex; flex-direction:column; gap:80px;">
<!-- Sidebar Section -->



<h1>Leaflets & Flyers</h1>
<div class="divider"></div>

<div class="preset-header">
    <img src="check-icon.png" alt="check">
    <div>
        <strong>Our product presets</strong><br>
        <small>Build your own or choose from one of our preset options</small>
    </div>
</div>

<div class="preset-container">
    <div class="preset selected">
        <h3><img src="clip-icon.png" alt="clip"> Build Your Own</h3>
        <p>Customise your product to your exact specification. We’ve got all the options you need to bring your print to life. Let’s make it real!</p>
    </div>
    <div class="preset">
        <h3><img src="star-icon.png" alt="star"> Most Popular</h3>
        <p>A5 portrait Leaflets, printed double-sided on 170gsm Silk paper.</p>
    </div>
    <div class="preset">
        <h3><img src="leaf-icon.png" alt="leaf"> Eco</h3>
        <p>A5 portrait Leaflets, printed double-sided on 150gsm Recycled Silk paper.</p>
    </div>
    <div class="preset">
        <h3><img src="stack-icon.png" alt="stack"> Economy</h3>
        <p>A5 portrait Leaflets, printed double-sided on 130gsm Silk paper.</p>
    </div>
</div>

<style>
        .divider {
            border-bottom: 1px solid var(--gary-bg);
            margin: 20px 0;
        }
        .preset-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .preset-header::before {
            content: "1";
            background-color:var(--secondary-color);
            color: white;
            border-radius: 50%;
            display: inline-block;
            width: 25px;
            height: 25px;
            line-height: 25px;
            text-align: center;
            margin-right: 10px;
        }

        .preset-container {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }
        .preset {
            border: 2px solid transparent;
            border-radius: 10px;
            padding: 20px;
            width: 220px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: border-color 0.3s;
        }
        .preset:hover {
            border-color:var(--secondary-color);
        }
        .preset.selected {
            border-color:var(--primary-color);
        }
        .preset h3 {
            margin-top: 0;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .preset h3 img {
            width: 18px;
            height: 18px;
            margin-right: 8px;
        }
        .preset p {
            font-size: 14px;
            color: #555;
        }
</style>


<div class="product-container">
    <div class="product-card selected">
        <img src="leaflets-flyers.png" alt="Leaflets & Flyers">
        <div class="label">Leaflets & Flyers</div>
    </div>

    <div class="product-card">
        <img src="folded-leaflets-flyers.png" alt="Folded Leaflets & Flyers">
        <div class="label">Folded Leaflets & Flyers</div>
    </div>
</div>

<style>
        h2 img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            display:inline;
        }
        .product-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .product-card {
            border: 2px solid transparent;
            border-radius: 10px;
            overflow: hidden;
            width: 200px;
            background-color: var(--white);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: border-color 0.3s;
        }
        .product-card img {
            width: 100%;
            height: auto;
        }
        .product-card:hover {
            border-color:var(--secondary-color);
        }
        .product-card.selected {
            border-color:var(--primary-color);
        }
        .product-card .label {
            text-align: center;
            padding: 10px;
            font-weight: bold;
            color: #333;
            background-color: var(--gary-bg);
        }
    </style>





<h2><img src="check-icon.png" alt="check"> Size</h2>

<div class="size-list-container">
    <div class="size-list">
        <?php
        // Define the sizes array
        $sizes = [
            ["label" => "A7", "width" => 105, "height" => 74],
            ["label" => "A6", "width" => 148, "height" => 105],
            ["label" => "A5", "width" => 210, "height" => 148, "popular" => true],
            ["label" => "A4", "width" => 297, "height" => 210],
            ["label" => "A3", "width" => 420, "height" => 297],
            ["label" => "DL", "width" => 210, "height" => 99],
            ["label" => "105mm x 105mm", "width" => 105, "height" => 105],
            ["label" => "148mm x 148mm", "width" => 148, "height" => 148],
            ["label" => "210mm x 210mm", "width" => 210, "height" => 210],
        ];

        // Loop through the sizes array to generate the size options
        foreach ($sizes as $index => $size) {
            $selectedClass = $index === 0 ? "selected" : "";
            $star = isset($size['popular']) ? '<span class="star">&#9733;</span>' : '';
            echo "<div class='size-option $selectedClass' onclick=\"selectSize(this, '{$size['width']}', '{$size['height']}')\">{$size['label']} $star</div>";
        }
        ?>
    </div>

    <div class="preview-container">
        <div class="size-preview">
            <span id="preview-width" style="top: -20px;">105mm</span>
            <span id="preview-height" style="left: -40px; transform: rotate(-90deg);">74mm</span>
            <div style="width: 105px; height: 74px; background-color:var(--secondary-color)"></div>
        </div>
        <div class="unit-selector">
            <div class="active" onclick="changeUnit(this)">mm</div>
            <div onclick="changeUnit(this)">cm</div>
            <div onclick="changeUnit(this)">inch</div>
        </div>
    </div>
</div>

<script>
        function selectSize(element, width, height) {
            document.querySelectorAll('.size-option').forEach(option => option.classList.remove('selected'));
            element.classList.add('selected');

            document.getElementById('preview-width').textContent = width + document.querySelector('.unit-selector .active').textContent;
            document.getElementById('preview-height').textContent = height + document.querySelector('.unit-selector .active').textContent;
        }

        function changeUnit(unitElement) {
            document.querySelectorAll('.unit-selector div').forEach(unit => unit.classList.remove('active'));
            unitElement.classList.add('active');

            const newUnit = unitElement.textContent;
            document.getElementById('preview-width').textContent = document.getElementById('preview-width').textContent.replace(/(mm|cm|inch)/, newUnit);
            document.getElementById('preview-height').textContent = document.getElementById('preview-height').textContent.replace(/(mm|cm|inch)/, newUnit);
        }
    </script>

<style>
        .size-list-container {
            display: flex;
            gap: 40px;
            margin-top: 20px;
        }
        .size-list {
            width: 300px;
        }
        .size-option {
            border: 2px solid transparent;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 8px;
            background-color: white;
            cursor: pointer;
            transition: border-color 0.3s;
        }
        .size-option:hover {
            border-color:var(--secondary-color);
        }
        .size-option.selected {
            border-color: var(--primary-color);
        }
        .size-option .star {
            float: right;
            color:var(--secondary-color);
        }
        .preview-container {
            width: 400px;
            background-color: var(--white);
            border: 1px solid var(--gray-bg);
            border-radius: 8px;
            padding: 20px;
        }
        .size-preview {
            width: 100%;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background-color: var(--gary-bg);
        }
        .size-preview span {
            position: absolute;
            font-size: 14px;
            color: #333;
        }
        .unit-selector {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }
        .unit-selector div {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            cursor: pointer;
            background-color: var(--gary-bg);
            color: #555;
            transition: background-color 0.3s, color 0.3s;
        }
        .unit-selector div.active {
            background-color: var(--primary-color);
            color: var(--white);
        }
    </style>




<h2 class="orientation-heading">Orientation</h2>

<div class="orientation-container">
    <?php
    // Define the orientation options
    $orientations = [
        ["label" => "Portrait", "icon" => "portrait-icon.png", "popular" => true],
        ["label" => "Landscape", "icon" => "landscape-icon.png", "selected" => true],
        ["label" => "Square", "icon" => "square-icon.png", "disabled" => true]
    ];

    // Loop through the orientations array to generate options
    foreach ($orientations as $orientation) {
        $selectedClass = isset($orientation['selected']) ? 'selected' : '';
        $disabledClass = isset($orientation['disabled']) ? 'disabled' : '';
        $starIcon = isset($orientation['popular']) ? '<span class="star">&#9733;</span>' : '';
        $warningIcon = isset($orientation['disabled']) ? '<span class="warning">&#9888;</span>' : '';

        echo "
        <div class='orientation-option $selectedClass $disabledClass' onclick='selectOrientation(this)'>
            <img src='{$orientation['icon']}' alt='{$orientation['label']} icon'>
            <div>{$orientation['label']}</div>
            $starIcon
            $warningIcon
        </div>";
    }
    ?>
</div>

<script>
        function selectOrientation(element) {
            if (element.classList.contains('disabled')) return;

            document.querySelectorAll('.orientation-option').forEach(option => option.classList.remove('selected'));
            element.classList.add('selected');
        }
</script>

<style>
        h2.orientation-heading::before {
            content: "4";
            background-color: var(--secondary-color);
            color: var(--white);
            border-radius: 50%;
            display: inline-block;
            width: 25px;
            height: 25px;
            line-height: 25px;
            text-align: center;
            margin-right: 10px;
        }
        .orientation-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .orientation-option {
            width: 150px;
            padding: 15px;
            border: 2px solid var(--gary-bg);
            border-radius: 10px;
            background-color: var(--white);
            text-align: center;
            cursor: pointer;
            position: relative;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }
        .orientation-option img {
            width: 40px;
            height: 60px;
            margin-bottom: 10px;
        }
        .orientation-option.selected {
            border-color:var(--primary-color);
        }
        .orientation-option.disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }
        .orientation-option .star {
            position: absolute;
            top: 8px;
            right: 8px;
            color: var(--secondary-color);
            font-size: 18px;
        }
        .orientation-option .warning {
            position: absolute;
            top: 8px;
            right: 8px;
            color: var(--primary-color);
            font-size: 18px;
        }
    </style>



<div class="printed-sides-section">
    <div class="section-title">Printed sides <span class="info">&#9432;</span></div>

    <div class="printed-sides-container">
        <?php
        // Define the printed sides options
        $printed_sides = [
            ["label" => "One Side", "icon" => "one-side-icon.png", "selected" => true],
            ["label" => "Both Sides", "icon" => "both-sides-icon.png", "popular" => true]
        ];

        // Loop through the printed sides array to generate options
        foreach ($printed_sides as $side) {
            $selectedClass = isset($side['selected']) ? 'selected' : '';
            $starIcon = isset($side['popular']) ? '<span class="star">&#9733;</span>' : '';

            echo "
            <div class='printed-side-option $selectedClass' onclick='selectPrintedSide(this)'>
                <img src='{$side['icon']}' alt='{$side['label']} icon'>
                <div>{$side['label']}</div>
                $starIcon
            </div>";
        }
        ?>
    </div>
</div>

<script>
        function selectPrintedSide(element) {
            document.querySelectorAll('.printed-side-option').forEach(option => option.classList.remove('selected'));
            element.classList.add('selected');
        }
</script>

<style>
        .printed-sides-section .section-title {
            font-size: 20px;
            display: flex;
            align-items: center;
        }
        .printed-sides-section .section-title::before {
            content: "5";
            background-color: var(--secondary-color);
            color: var(--white);
            border-radius: 50%;
            display: inline-block;
            width: 25px;
            height: 25px;
            line-height: 25px;
            text-align: center;
            margin-right: 10px;
        }
        .printed-sides-section .info {
            font-size: 16px;
            color: var(--secondary-color);
            margin-left: 10px;
            cursor: pointer;
        }
        .printed-sides-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }
        .printed-side-option {
            width: 150px;
            padding: 15px;
            border: 2px solid var(--gary-bg);
            border-radius: 10px;
            background-color: white;
            text-align: center;
            cursor: pointer;
            position: relative;
            transition: border-color 0.3s ease, background-color 0.3s ease;
        }
        .printed-side-option img {
            width: 50px;
            height: 40px;
            margin-bottom: 10px;
        }
        .printed-side-option.selected {
            border-color: var(--primary-color);
        }
        .printed-side-option .star {
            position: absolute;
            top: 8px;
            right: 8px;
            color: var(--secondary-color);
            font-size: 18px;
        }
    </style>


<div class="paper-selection-section">
    <div class="section-title">Paper <span class="info">&#9432;</span></div>

    <!-- Tabs -->
    <div class="paper-tabs">
        <div class="paper-tab active" onclick="switchTab(this)">Bestsellers & Core Papers</div>
        <div class="paper-tab" onclick="switchTab(this)">Recycled Papers</div>
        <div class="paper-tab" onclick="switchTab(this)">Luxury Papers</div>
    </div>

    <!-- Paper Options -->
    <div class="paper-options">
        <div class="paper-list">
            <?php
            // Define paper options
            $papers = [
                ["name" => "Silk", "image" => "silk.png", "popular" => true],
                ["name" => "Recycled Silk", "image" => "recycled_silk.png"],
                ["name" => "Uncoated", "image" => "uncoated.png"],
                ["name" => "Recycled Uncoated", "image" => "recycled_uncoated.png"],
                ["name" => "Gloss", "image" => "gloss.png"],
                ["name" => "Tintoretto Gesso", "image" => "tintoretto_gesso.png"],
                ["name" => "Acquerello", "image" => "acquerello.png"]
            ];

            // Generate paper options
            foreach ($papers as $paper) {
                $starIcon = isset($paper['popular']) ? '<span class="star">&#9733;</span>' : '';
                echo "
                <div class='paper-item' onclick='selectPaper(this, \"{$paper['name']}\")'>
                    <img src='{$paper['image']}' alt='{$paper['name']}'>
                    <div>{$paper['name']}</div>
                    $starIcon
                </div>";
            }
            ?>
        </div>

        <!-- Preview Panel -->
        <div class="paper-preview" id="paper-preview">
            Please select a paper to continue
        </div>
    </div>
</div>

<script>
        function selectPaper(element, paperName) {
            document.querySelectorAll('.paper-item').forEach(item => item.classList.remove('selected'));
            element.classList.add('selected');
            document.getElementById('paper-preview').innerText = 'Selected Paper: ' + paperName;
        }
        function switchTab(tabElement) {
            document.querySelectorAll('.paper-tab').forEach(tab => tab.classList.remove('active'));
            tabElement.classList.add('active');
        }
    </script>


<style>
        .paper-selection-section .section-title {
            font-size: 20px;
            display: flex;
            align-items: center;
        }
        .paper-selection-section .section-title::before {
            content: "6";
            background-color: var(--secondary-color);
            color: var(--white);
            border-radius: 50%;
            display: inline-block;
            width: 25px;
            height: 25px;
            line-height: 25px;
            text-align: center;
            margin-right: 10px;
        }
        .paper-selection-section .info {
            font-size: 16px;
            color: var(--secondary-color);
            margin-left: 10px;
            cursor: pointer;
        }
        .paper-tabs {
            margin: 15px 0;
        }
        .paper-tab {
            display: inline-block;
            padding: 8px 15px;
            margin-right: 10px;
            background-color: var(--gary-bg);
            border-radius: 20px;
            cursor: pointer;
            font-size: 14px;
        }
        .paper-tab.active {
            background-color:var(--secondary-color);
            color: var(--white);
        }
        .paper-options {
            display: flex;
            gap: 20px;
        }
        .paper-list {
            width: 40%;
        }
        .paper-item {
            display: flex;
            align-items: center;
            padding: 12px;
            background-color: white;
            margin-bottom: 10px;
            border: 2px solid transparent;
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }
        .paper-item img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .paper-item.selected {
            border-color: var(--primary-color);
        }
        .paper-item .star {
            margin-left: auto;
            color: var(--secondary-color);
            font-size: 18px;
        }
        .paper-preview {
            width: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--gary-bg);
            background-color: var(--white);
            height: 250px;
        }
    </style>



    <style>
        .quantity-section .section-title {
            font-size: 20px;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .quantity-section .section-title::before {
            content: "7";
            background-color: var(--secondary-color);
            color: var(--white);
            border-radius: 50%;
            display: inline-block;
            width: 25px;
            height: 25px;
            line-height: 25px;
            text-align: center;
            margin-right: 10px;
        }
        .custom-quantity {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .custom-quantity button {
            width: 40px;
            height: 40px;
            background-color: var(--white);
            border: 1px solid var(--gary-bg);
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        .custom-quantity input {
            width: 80px;
            height: 40px;
            text-align: center;
            border: 1px solid var(--gary-bg);
            border-radius: 5px;
            margin: 0 10px;
            font-size: 16px;
        }
        .quantity-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .quantity-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: calc(50% - 10px);
            padding: 12px;
            background-color: var(--white);
            border: 2px solid var(--gary-bg);
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }
        .quantity-item.selected {
            border-color: var(--primary-color);
        }
        .quantity-item .price {
            color: var(--secondary-color);
            font-weight: bold;
        }
    </style>
    <script>
        function adjustQuantity(amount) {
            let quantityInput = document.getElementById('customQuantity');
            let currentQuantity = parseInt(quantityInput.value);
            if (currentQuantity + amount > 0) {
                quantityInput.value = currentQuantity + amount;
            }
        }

        function selectQuantity(element, quantity) {
            document.querySelectorAll('.quantity-item').forEach(item => item.classList.remove('selected'));
            element.classList.add('selected');
            document.getElementById('customQuantity').value = quantity;
        }
    </script>

<div class="quantity-section">
    <div class="section-title">Quantity</div>

    <!-- Custom Quantity Input -->
    <div class="custom-quantity">
        <span>Custom Quantity:</span>
        <button onclick="adjustQuantity(-1)">-</button>
        <input type="number" id="customQuantity" value="500" min="1">
        <button onclick="adjustQuantity(1)">+</button>
    </div>

    <!-- Quantity Options -->
    <div class="quantity-list">
        <?php
        // Define quantity options with prices
        $quantities = [
            500 => 22.43, 750 => 24.86, 1000 => 29.30, 1500 => 36.90, 2000 => 39.70,
            2500 => 42.39, 3000 => 44.63, 4000 => 48.10, 5000 => 51.53, 7500 => 58.35,
            10000 => 64.06, 12500 => 68.57, 15000 => 84.39, 20000 => 107.15, 25000 => 136.61,
            30000 => 178.13, 40000 => 238.40, 50000 => 295.43
        ];

        // Generate quantity options
        foreach ($quantities as $quantity => $price) {
            echo "
            <div class='quantity-item' onclick='selectQuantity(this, $quantity)'>
                <div>$quantity</div>
                <div class='price'>£" . number_format($price, 2) . "</div>
            </div>";
        }
        ?>
    </div>
</div>





    <style>

        .version-section .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .version-section .sub-text {
            font-size: 14px;
            color: #666;
            display: flex;
            align-items: center;
        }
        .version-section .sub-text .info-icon {
            display: inline-block;
            background-color: var(--secondary-color);
            color: var(--white);
            width: 16px;
            height: 16px;
            border-radius: 50%;
            text-align: center;
            line-height: 16px;
            margin-left: 5px;
            font-size: 12px;
            cursor: pointer;
        }
        .version-options {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        .version-option {
            width: 100px;
            padding: 12px;
            text-align: center;
            border: 2px solid var(--gary-bg);
            border-radius: 8px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }
        .version-option.selected {
            border-color: var(--primary-color);
            color: var(--text-color);
            font-weight: bold;
        }
    </style>
    <script>
        function selectVersion(element, choice) {
            document.querySelectorAll('.version-option').forEach(item => item.classList.remove('selected'));
            element.classList.add('selected');
            document.getElementById('versionChoice').value = choice;
        }
    </script>

<div class="version-section">
    <div class="section-title">Versions</div>
    <div class="sub-text">
        Do you want to print with more than one design?
        <span class="info-icon" title="Choose 'Yes' if you have multiple designs to print.">i</span>
    </div>

    <div class="version-options">
        <div class="version-option" onclick="selectVersion(this, 'Yes')">Yes</div>
        <div class="version-option selected" onclick="selectVersion(this, 'No')">No</div>
    </div>

    <!-- Hidden Input to store the selected version -->
    <input type="hidden" id="versionChoice" name="versionChoice" value="No">
</div>



    <style>
        .extras-section {
            background: var(--white);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .info-icon {
            background-color:var(--secondary-color);
            color: var(--white);
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            margin-left: 8px;
            cursor: pointer;
        }

        .options-group {
            margin-bottom: 20px;
        }

        .options {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .option {
            width: calc(33.333% - 10px);
            padding: 15px;
            text-align: center;
            border: 2px solid var(--gary-bg);
            border-radius: 10px;
            cursor: pointer;
            transition: border-color 0.3s ease;
            position: relative;
        }

        .option.disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .option.selected {
            border-color: var(--primary-color);
            font-weight: bold;
        }

        .star-icon {
            position: absolute;
            top: 8px;
            right: 8px;
            color: var(--secondary-color);
        }

        .warning-icon {
            position: absolute;
            top: 8px;
            right: 8px;
            color:var(--primary-color);
        }

        .perforation-info {
            background-color: var(--gary-bg);
            padding: 15px;
            border-radius: 8px;
            font-size: 14px;
            color: var(--text-color);
            line-height: 1.6;
        }

        .perforation-section {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .perforation-options {
            width: 50%;
        }

        .perforation-preview {
            width: 50%;
            background-color: var(--gary-bg);
            border: 1px solid var(--gary-bg);;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            color: var(--text-color);
        }

        @media (max-width: 768px) {
            .option {
                width: 100%;
            }
            .perforation-section {
                flex-direction: column;
            }
            .perforation-options, .perforation-preview {
                width: 100%;
            }
        }
    </style>
    <script>
        function selectOption(group, element) {
            const options = document.querySelectorAll(`.${group} .option:not(.disabled)`);
            options.forEach(opt => opt.classList.remove('selected'));
            element.classList.add('selected');

            if (group === 'perforation') {
                document.querySelector('.perforation-preview').innerText = element.innerText.trim() + ' selected';
            }
        }
    </script>
</head>
<body>

<div class="extras-section">
    <div class="section-title">✔ Extras</div>

    <!-- Lamination Section -->
    <div class="options-group lamination">
        <div class="section-title">
            Lamination <span class="info-icon" title="Choose a lamination finish if required.">i</span>
        </div>
        <div class="options">
            <div class="option selected" onclick="selectOption('lamination', this)">
                <div>📄</div> None <span class="star-icon">★</span>
            </div>
            <div class="option disabled">
                <div>🦠</div> Anti-Bacterial Gloss <span class="warning-icon">⚠</span>
            </div>
            <div class="option disabled">
                <div>✨</div> Gloss <span class="warning-icon">⚠</span>
            </div>
            <div class="option disabled">
                <div>📄</div> Matt <span class="warning-icon">⚠</span>
            </div>
            <div class="option disabled">
                <div>🧸</div> Velvet <span class="warning-icon">⚠</span>
            </div>
        </div>
    </div>

    <!-- Corners Section -->
    <div class="options-group corners">
        <div class="section-title">
            Corners <span class="info-icon" title="Select your preferred corner style.">i</span>
        </div>
        <div class="options">
            <div class="option selected" onclick="selectOption('corners', this)">
                <div>⬛</div> Square Corners <span class="star-icon">★</span>
            </div>
            <div class="option disabled">
                <div>◯</div> Round Corners <span class="warning-icon">⚠</span>
            </div>
        </div>
    </div>

    <!-- Perforation Section -->
    <div class="options-group perforation">
        <div class="section-title">
            Perforation <span class="info-icon" title="Details about perforation options.">i</span>
        </div>
        <div class="perforation-info">
            We perforate at a fixed distance from the short edge of your print, depending on artwork size and orientation.
            If the perforation position on your artwork is not clear, we may contact you to confirm.
            <br><br>
            <strong>Top tip!</strong> Any perforation lines added to your artwork will be printed as part of the design,
            so avoid print disappointment and leave them off!
        </div>

        <div class="perforation-section">
            <!-- Perforation Options -->
            <div class="perforation-options">
                <div class="option selected" onclick="selectOption('perforation', this)">
                    No Perforation <span class="star-icon">★</span>
                </div>
                <div class="option disabled">Perforation - 70mm <span class="warning-icon">⚠</span></div>
                <div class="option disabled">Perforation - 99mm <span class="warning-icon">⚠</span></div>
                <div class="option disabled">Perforation - 53mm <span class="warning-icon">⚠</span></div>
                <div class="option disabled">Perforation - 74mm <span class="warning-icon">⚠</span></div>
                <div class="option disabled">Perforation - 140mm <span class="warning-icon">⚠</span></div>
            </div>

            <!-- Perforation Preview -->
            <div class="perforation-preview">
                Please select a perforation to continue
            </div>
        </div>
    </div>
</div>


    <style>

        .delivery-section {
            background: var(--white);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .info-icon {
            background-color: var(--secondary-color);
            color: var(--white);
            border-radius: 50%;
            width: 18px;
            height: 18px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            margin-left: 8px;
            cursor: pointer;
        }

        .delivery-options {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }

        .option {
            flex: 1;
            padding: 15px;
            text-align: center;
            border: 2px solid var(--gary-bg);
            border-radius: 10px;
            cursor: pointer;
            transition: border-color 0.3s ease;
        }

        .option.selected {
            border-color: var(--primary-color);
            font-weight: bold;
            color: var(--black);
        }

        .option:not(.selected) {
            color: var(--text-color);
        }

        @media (max-width: 768px) {
            .delivery-options {
                flex-direction: column;
            }
        }
    </style>
    <script>
        function selectDelivery(element) {
            const options = document.querySelectorAll('.delivery-options .option');
            options.forEach(opt => opt.classList.remove('selected'));
            element.classList.add('selected');
        }
    </script>

<div class="delivery-section">
    <div class="section-title">
        ✔ Select your Delivery options
    </div>

    <div>
        <strong>Delivery type</strong>
    </div>

    <div class="delivery-options">
        <div class="option" onclick="selectDelivery(this)">Select delivery</div>
        <div class="option selected" onclick="selectDelivery(this)">Add delivery later</div>
    </div>
</div>





    <style>


        .subtotal-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: var(--gary-bg);
            padding: 15px 20px;
            border: 1px solid var(--gary-bg);
        }

        .subtotal-details {
            display: flex;
            flex-direction: column;
        }

        .subtotal-details div {
            margin-bottom: 5px;
        }

        .subtotal-title {
            font-weight: bold;
        }

        .subtotal-amount {
            font-weight: bold;
            font-size: 1.2em;
        }

        .vat-info {
            color: var(--gary-bg);
            font-size: 0.9em;
        }

        .price-per-unit {
            font-size: 0.9em;
        }

        .price-value {
            font-weight: bold;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-buttons button {
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: bold;
        }

        .add-to-basket {
            background-color: white;
            border: 2px solid var(--primary-color);
            color: var(--black);
        }

        .upload-artwork {
            background-color:var(--primary-color);
            color: var(--white);
            border: none;
        }
    </style>

<div class="subtotal-container">
    <div class="subtotal-details">
        <div class="subtotal-title">Subtotal</div>
        <div>
            <span class="subtotal-amount">£22.43</span>
            <span class="vat-info">(£22.43 inc VAT)</span>
        </div>
        <div class="price-per-unit">Price per unit</div>
        <div class="price-value">£0.04</div>
    </div>

    <div class="action-buttons">
        <button class="add-to-basket">Add To Basket</button>
        <button class="upload-artwork">Upload Artwork</button>
    </div>
</div>



</div>

<!-- Blog section -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
