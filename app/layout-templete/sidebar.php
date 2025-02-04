<!-- Sidebar -->


<div id="mySidenav" class="sidenav">
<button class="openbtn" onclick="toggleNav()">☰</button>

<!-- Main Form -->
<section class="form-section">
    <h2>Leaflets & Flyers</h2>

    <form action="/app/layout-templete/process.php" method="POST" id="multiStepForm">
        <!-- Step 1: Product Presets -->
        <div class="form-step">
            <h3>Product Presets</h3>
            <label><input type="radio" name="preset" value="Build Your Own" required> Build Your Own</label>
            <label><input type="radio" name="preset" value="Most Popular"> Most Popular</label>
            <label><input type="radio" name="preset" value="Eco"> Eco</label>
            <label><input type="radio" name="preset" value="Economy"> Economy</label>
        </div>

        <!-- Step 2: Product Type -->
        <div class="form-step">
            <h3>Select Product Type</h3>
            <label><input type="radio" name="product" value="Leaflets & Flyers" required> Leaflets & Flyers</label>
            <label><input type="radio" name="product" value="Folded Leaflets & Flyers"> Folded Leaflets & Flyers</label>
        </div>

        <!-- Step 3: Select Size -->
        <div class="form-step">
            <h3>Select Size</h3>
            <label><input type="radio" name="size" value="A7" required> A7</label>
            <label><input type="radio" name="size" value="A6"> A6</label>
            <label><input type="radio" name="size" value="A5"> A5</label>
        </div>

        <!-- Step 4: Summary & Submit -->
        <div class="form-step">
            <h3>Summary</h3>
            <p>Review your selections before submitting.</p>
            <button type="submit" name="submit">Submit</button>
        </div>
    </form>
</section>


<!-- Sidebar -->
<section id="sidebar">
    <h2>Progress</h2>
    <ul id="progressList">
        <li data-step="1">Product Presets: <span>-</span></li>
        <li data-step="2">Product Type: <span>-</span></li>
        <li data-step="3">Size: <span>-</span></li>
        <li data-step="4">Summary</li>
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
    top: 0px;
    z-index: 999999;
}

/* Sidebar (Initially Closed) */
/* Sidebar */
#sidebar {
    width: 280px;
    position: fixed;
    right: 0;
    top: 0;
    height: 100vh;
    background: white;
    border-left: 3px solid #00c2c2;
    padding: 20px;
    overflow-y: auto;
    transition: all 0.3s ease-in-out;
    box-shadow: -5px 0 10px rgba(0, 0, 0, 0.1);
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