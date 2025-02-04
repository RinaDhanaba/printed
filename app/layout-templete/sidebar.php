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


<style>
        /* Sidebar styling */
    .openbtn {
    font-size: 18px;
    cursor: pointer;
    background-color: var(--secondary-color);
    color: white;
    border: none;
    padding: 10px 15px;
    position: relative;
    left: -45px;
    top: 60px;
    z-index: 999999;
}

/* Sidebar (Initially Closed) */
.sidenav {
    height: 100%;
    width: 0;  /* Initially closed */
    position: fixed;
    top: 0;
    right: 0;
    background-color: var(--white);
    transition: width 0.3s ease-in-out;
    max-width: 1000px;
    z-index: 999999;
    display: flex;
    align-items: flex-start;
}


/* Sidebar */
#sidebar {
    width: 280px;
    height: 100%;
    background: white;
    border-left: 3px solid #00c2c2;
    padding: 20px;
    overflow-y: auto;
    transition: all 0.3s ease-in-out;
    box-shadow: -5px 0 10px rgba(0, 0, 0, 0.1);
}

section.form-section {
    flex: 1;
    padding:30px 10px;
    height: 100vh;
    overflow-y: scroll;
}

/* Step Titles */
.step-title {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

/* Grid Layout for Options */
.options-grid, .size-grid {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

/* Cards for Options */
.option-card, .size-option {
    background: white;
    padding: 12px 15px;
    border-radius: 6px;
    border: 2px solid #ddd;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    min-width: 100px;
    text-align: center;
    transition: all 0.3s ease;
}

/* Highlight Selected Option */
.option-card input:checked + .option-text,
.size-option input:checked + span {
    font-weight: bold;
    color: #00c2c2;
}

.size-option.selected {
    border-color: #ff4081;
    background: rgba(255, 64, 129, 0.1);
}

/* Summary Step */
.summary-step {
    border-top: 2px solid #ddd;
    padding-top: 20px;
}

/* Submit Button */
.submit-btn {
    background: #00c2c2;
    color: white;
    padding: 12px 20px;
    border: none;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

.submit-btn:hover {
    background: #008a8a;
}

.preset-options {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.preset-card {
    border: 2px solid #ddd;
    padding: 15px;
    border-radius: 8px;
    cursor: pointer;
    transition: 0.3s;
    text-align: center;
    width: 200px;
}

.preset-card:hover {
    border-color: #007bff;
}

.preset-card.selected {
    border-color: #ff4081;
    background-color: #fff0f5;
}

.next-btn {
    margin-top: 20px;
    padding: 10px 15px;
    background: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}




/* Heading */
#sidebar h2 {
    font-size: 18px;
    font-weight: bold;
    border-bottom: 2px solid #eaeaea;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

/* Progress List */
#progressList {
    list-style: none;
    padding: 0;
}

#progressList li {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 10px;
    margin-bottom: 8px;
    border-radius: 8px;
    background: #f9f9f9;
    font-size: 14px;
    transition: background 0.3s ease, transform 0.2s ease;
    position: relative;
}

/* Step Icon */
#progressList li::before {
    content: "⭘"; /* Default circle */
    font-size: 16px;
    color: gray;
    margin-right: 8px;
    transition: 0.3s ease;
}

/* Completed Step */
#progressList li.completed {
    background: #e6fbf8;
    border-left: 3px solid #00c2c2;
    font-weight: bold;
    transform: scale(1.02);
}

#progressList li.completed::before {
    content: "✔"; /* Check icon */
    color: #00c2c2;
    font-weight: bold;
}

/* Edit Icon */
.edit-icon {
    color: #ff4081;
    cursor: pointer;
    font-size: 14px;
    transition: 0.3s;
}

.edit-icon:hover {
    color: #ff0051;
}

/* Mobile View */
@media screen and (max-width: 768px) {
    #sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .form-section {
        margin-left: 0;
        width: 100%;
    }
}

</style>