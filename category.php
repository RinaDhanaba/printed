<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<?php 
session_start();

// Initialize selected options
if (!isset($_SESSION['selected_options'])) {
    $_SESSION['selected_options'] = [
        'product' => '',
        'size' => '',
        'orientation' => '',
        'printed_side' => '',
        'paper' => '',
        'quantity' => '',
    ];
}

?>

<div class="container mt-5">
    <div class="row">
        <!-- Form Section -->
        <div class="col-md-8">
            <form id="multiStepForm" action="app/layout-templete/process.php" method="POST">
                <div class="step" id="step1">
                    <h3>Select Product</h3>
                    <label>
                        <input type="radio" name="product" value="Leaflets & Flyers" 
                            <?php if ($_SESSION['selected_options']['product'] == "Leaflets & Flyers") echo "checked"; ?>>
                        Leaflets & Flyers
                    </label>
                    <button type="button" class="next-btn">Next</button>
                </div>

                <div class="step" id="step2" style="display: none;">
                    <h3>Select Size</h3>
                    <label><input type="radio" name="size" value="A4"> A4</label>
                    <label><input type="radio" name="size" value="A5"> A5</label>
                    <button type="button" class="prev-btn">Back</button>
                    <button type="button" class="next-btn">Next</button>
                </div>

                <div class="step" id="step3" style="display: none;">
                    <h3>Select Paper</h3>
                    <label><input type="radio" name="paper" value="Glossy"> Glossy</label>
                    <label><input type="radio" name="paper" value="Matte"> Matte</label>
                    <button type="button" class="prev-btn">Back</button>
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>

        <!-- Sidebar Section -->
        <div class="col-md-4">
            <?php include 'app/layout-templete/sidebar.php'; ?>
        </div>
    </div>
</div>



<!-- blog section  -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>