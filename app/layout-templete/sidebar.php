<!-- Sidebar -->


<div id="mySidenav" class="sidenav">
<button class="openbtn" onclick="toggleNav()">☰</button>
    


<!-- Sidebar -->
<div id="sidebar">
    <h2>Progress</h2>
    <ul id="progressList">
        <li data-step="1">Product Presets: <span>-</span></li>
        <li data-step="2">Product Type: <span>-</span></li>
        <li data-step="3">Size: <span>-</span></li>
        <li data-step="4">Summary</li>
    </ul>
</div>

<!-- Main Form -->
<div class="container">
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
</div>

    
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
.sidenav {
    height: 100%;
    width: 0;  /* Initially closed */
    position: fixed;
    top: 0;
    right: 0;
    background-color: var(--white);
    transition: width 0.3s ease-in-out;  /* Smooth opening */
    padding-top: 60px;
    max-width: 1000px;
    z-index: 999999;
}



/* Sidebar (Progress Bar) */
.sidenav #sidebar {
    width: 250px;
    background: #fff;
    padding: 20px;
    border-right: 1px solid #ddd;
    position: fixed;
    height: 100%;
    overflow-y: auto;
    transition: 0.3s;
}

.sidenav #sidebar h2 {
    text-align: center;
}

.sidenav #progressList {
    list-style: none;
    padding: 0;
}

.sidenav #progressList li {
    padding: 10px;
    font-size: 16px;
    border-bottom: 1px solid #ddd;
    position: relative;
}

.sidenav #progressList li::before {
    content: "✔";
    color: gray;
    margin-right: 8px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.sidenav #progressList li.completed::before {
    opacity: 1;
    color: green;
}

/* Form Container */
.sidenav .container {
    margin-left: 270px;
    width: 50%;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Form Steps */
.sidenav .form-step {
    padding: 15px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

/* Mobile View */
@media screen and (max-width: 768px) {
    .sidenav #sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }

    .sidenav .container {
        margin-left: 0;
        width: 100%;
    }
}

</style>