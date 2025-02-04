<?php

// Define form steps dynamically
$steps = [
    "Preset" => ["Build Your Own", "Most Popular", "Eco", "Economy"],
    "Quantity" => [100, 250, 500, 750, 1000, 1500],
    "Product" => ["Leaflets & Flyers", "Posters", "Brochures"],
    "Size" => ["A5", "A4", "A3"],
    "FinishType" => ["Glossy", "Matte", "Recycled"]
];

// Handle form submission (AJAX or standard POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedStep = $_POST['step'];
    $selectedValue = $_POST['value'];
    
    $_SESSION["selected_$selectedStep"] = $selectedValue;

    // Auto-update fields when a preset is selected
    if ($selectedStep == "Preset" && isset($presetData[$selectedValue])) {
        foreach ($presetData[$selectedValue] as $key => $val) {
            $_SESSION["selected_" . ucfirst($key)] = $val;
        }
    }

    echo json_encode(["success" => true, "message" => "Selection saved"]);
    exit;
}
?>

<!-- Sidebar -->
<div id="mySidenav" class="sidenav">
    <button class="openbtn" onclick="toggleNav()">☰</button>

    <section class="form-section">
            <!-- Form Steps -->
            <?php foreach ($steps as $step => $options): ?>
                <div class="step-section">
                    <div class="step-title"><?= $step ?></div>
                    <?php foreach ($options as $option): ?>
                        <div class="option <?= ($_SESSION["selected_$step"] ?? "Build Your Own") == $option ? "selected" : "" ?>" 
                            data-step="<?= $step ?>" 
                            data-value="<?= $option ?>">
                            <?= $option ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
    </section>

    <!-- Progress Sidebar -->
    <section id="sidebar">
        <h2>Progress</h2>
        <ul class="progress-list">
            <?php foreach ($steps as $step => $options): ?>
                <li data-step="<?= $step ?>"> <?= $step ?>: <span><?= $_SESSION["selected_$step"] ?? "-" ?></span></li>
            <?php endforeach; ?>
        </ul>
    </section>
</div>

<script>
        // Handle option selection
        $(".option").click(function () {
            let step = $(this).data("step");
            let value = $(this).data("value");

            $(".option[data-step='" + step + "']").removeClass("selected");
            $(this).addClass("selected");

            // Update progress bar
            $("li[data-step='" + step + "'] span").text(value).parent().addClass("completed");

            // Save selection via AJAX
            $.post("", { step: step, value: value }, function (response) {
                console.log("Saved:", response);
            }, "json");
        });
    </script>

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
    overflowY:scroll;
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