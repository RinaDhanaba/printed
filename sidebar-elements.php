<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>


<div class="container">


<!-- Sidebar -->
<div id="mySidenav" class="sidenav">
    <button class="openbtn" onclick="toggleNav()">☰</button>

    <section class="form-section">
        <h2>Leaflets & Flyers</h2>

        <form action="/app/layout-templete/process.php" method="POST" id="multiStepForm">
            
            <!-- Step 1: Our Product Presets -->
<div class="form-step active" id="step1">
    <h2>✅ Our Product Presets</h2>
    <p>Build your own or choose from one of our preset options.</p>

    <div class="preset-options">
        <label class="preset-card" data-preset="Build Your Own" onclick="selectPreset('Build Your Own')">
            <span>🎨 Build Your Own</span>
            <p>Customize your product to your exact specification.</p>
        </label>

        <label class="preset-card" data-preset="Most Popular" onclick="selectPreset('Most Popular')">
            <span>⭐ Most Popular</span>
            <p>A5 portrait Leaflets, printed double-sided on 170gsm Silk paper.</p>
        </label>

        <label class="preset-card" data-preset="Eco" onclick="selectPreset('Eco')">
            <span>🌿 Eco</span>
            <p>A5 portrait Leaflets, printed double-sided on 150gsm Recycled Silk paper.</p>
        </label>

        <label class="preset-card" data-preset="Economy" onclick="selectPreset('Economy')">
            <span>📄 Economy</span>
            <p>A5 portrait Leaflets, printed double-sided on 130gsm Silk paper.</p>
        </label>
    </div>

    <!-- Hidden Inputs to Store Selection -->
    <input type="hidden" id="selectedPreset" name="preset">
    <input type="hidden" id="selectedProduct" name="product">
    <input type="hidden" id="selectedSize" name="size">
    <input type="hidden" id="selectedFinishType" name="finishType">
</div>

            <!-- Step 2: Product Type -->
            <div class="form-step">
                <h3 class="step-title">📄 Product</h3>
                <div class="options-grid">
                    <label class="option-card">
                        <input type="radio" name="product" value="Leaflets & Flyers"> Leaflets & Flyers
                    </label>
                    <label class="option-card">
                        <input type="radio" name="product" value="Folded Leaflets & Flyers"> Folded Leaflets & Flyers
                    </label>
                </div>
            </div>

            <!-- Step 3: Select Size and Finish Type (Combined Step) -->
            <div class="form-step">
                <h3 class="step-title">📏 Size & Finish Type</h3>
                <div class="size-grid">
                    <label class="size-option">
                        <input type="radio" name="size" value="A7"> A7
                    </label>
                    <label class="size-option">
                        <input type="radio" name="size" value="A6"> A6
                    </label>
                    <label class="size-option">
                        <input type="radio" name="size" value="A5"> A5
                    </label>
                    <label class="size-option">
                        <input type="radio" name="size" value="A4"> A4
                    </label>
                </div>
                <h4>Finish Type</h4>
                <div class="options-grid">
                    <label class="option-card">
                        <input type="radio" name="finishType" value="Glossy"> Glossy
                    </label>
                    <label class="option-card">
                        <input type="radio" name="finishType" value="Matte"> Matte
                    </label>
                </div>
            </div>

            <!-- Step 4: Summary -->
            <div class="form-step summary-step">
                <h3 class="step-title">📋 Summary</h3>
                <p>Review your selections before submitting.</p>
                <button type="submit" class="submit-btn">Submit</button>
            </div>

        </form>
    </section>

    <!-- Progress Sidebar -->
    <section id="sidebar">
        <h2>Progress</h2>
        <ul id="progressList">
            <li data-step="1">Product Presets: <span>-</span></li>
            <li data-step="2">Product Type: <span>-</span></li>
            <li data-step="3">Size: <span>-</span></li>
            <li data-step="4">Finish Type: <span>-</span></li>
            <li data-step="5">Summary</li>
        </ul>
    </section>
</div>


</div>





<!-- Blog section -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
