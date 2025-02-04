<!-- Sidebar -->


<div id="mySidenav" class="sidenav">
<button class="openbtn" onclick="toggleNav()">☰</button>



<div class="container">
    <h2>Leaflets & Flyers</h2>

    <div class="progress-bar">
        <div class="step active">1</div>
        <div class="step">2</div>
        <div class="step">3</div>
        <div class="step">4</div>
    </div>

    <form action="process.php" method="POST" id="multiStepForm">
        <!-- Step 1: Product Presets -->
        <div class="form-step active">
            <h3>Product Presets</h3>
            <label><input type="radio" name="preset" value="Build Your Own" required> Build Your Own</label>
            <label><input type="radio" name="preset" value="Most Popular"> Most Popular</label>
            <label><input type="radio" name="preset" value="Eco"> Eco</label>
            <label><input type="radio" name="preset" value="Economy"> Economy</label>
            <button type="button" class="next-step">Next</button>
        </div>

        <!-- Step 2: Product Type -->
        <div class="form-step">
            <h3>Select Product Type</h3>
            <label><input type="radio" name="product" value="Leaflets & Flyers" required> Leaflets & Flyers</label>
            <label><input type="radio" name="product" value="Folded Leaflets & Flyers"> Folded Leaflets & Flyers</label>
            <button type="button" class="prev-step">Back</button>
            <button type="button" class="next-step">Next</button>
        </div>

        <!-- Step 3: Select Size -->
        <div class="form-step">
            <h3>Select Size</h3>
            <label><input type="radio" name="size" value="A7" required> A7</label>
            <label><input type="radio" name="size" value="A6"> A6</label>
            <label><input type="radio" name="size" value="A5"> A5</label>
            <button type="button" class="prev-step">Back</button>
            <button type="button" class="next-step">Next</button>
        </div>

        <!-- Step 4: Summary & Submit -->
        <div class="form-step">
            <h3>Summary</h3>
            <p>Review your selections before submitting.</p>
            <button type="button" class="prev-step">Back</button>
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

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    right: 0;
    background-color: var(--white);
    transition: 0.3s;
    padding-top: 60px;
    width: 95%;
    max-width:1000px;
    z-index: 999999;
}






.sidenav.container {
    width: 50%;
    margin: 50px auto;
    background: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.sidenav h2, h3 {
    text-align: center;
}

.sidenav .progress-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.sidenav .progress-bar .step {
    width: 40px;
    height: 40px;
    background: #ddd;
    color: #333;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-weight: bold;
}

.sidenav .progress-bar .active {
    background: #28a745;
    color: white;
}

.sidenav .form-step {
    display: none;
}

.sidenav .form-step.active {
    display: block;
}

.sidenav button {
    display: block;
    margin: 20px auto;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    background: #007bff;
    color: white;
    font-size: 16px;
    border-radius: 5px;
}

.sidenav button.prev-step {
    background: #6c757d;
}

.sidenav button:hover {
    opacity: 0.8;
}
</style>