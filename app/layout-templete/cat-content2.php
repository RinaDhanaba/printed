<?php
// Paper types array
$papers = [
    [
        "name" => "Nettuno",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A high-quality textured paper perfect for elegant print designs.",
        "weights" => ["120gsm", "250gsm"],
        "bestFor" => ["Business Cards", "Wedding Invitations", "Brochures"],
        "credentials" => ["Recyclable", "FSC Certified", "Eco-Friendly"]
    ],
    [
        "name" => "Acquerello",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A finely lined surface that adds a touch of class to any design.",
        "weights" => ["150gsm", "300gsm"],
        "bestFor" => ["Greeting Cards", "Menus", "Invitations"],
        "credentials" => ["FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],
    [
        "name" => "Pearl Polar",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A pearlescent, smooth finish with a premium look.",
        "weights" => ["170gsm", "350gsm"],
        "bestFor" => ["Luxury Prints", "Photobooks", "Certificates"],
        "credentials" => ["Recyclable", "Premium Quality", "Gloss Finish"]
    ],
    [
        "name" => "Pearl Oyster",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A subtle pearlescent shine for standout designs.",
        "weights" => ["125gsm", "300gsm"],
        "bestFor" => ["Wedding Stationery", "Greeting Cards", "Invitations"],
        "credentials" => ["Recyclable", "FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],[
        "name" => "Acquerello",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A finely lined surface that adds a touch of class to any design.",
        "weights" => ["150gsm", "300gsm"],
        "bestFor" => ["Greeting Cards", "Menus", "Invitations"],
        "credentials" => ["FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],
    [
        "name" => "Pearl Polar",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A pearlescent, smooth finish with a premium look.",
        "weights" => ["170gsm", "350gsm"],
        "bestFor" => ["Luxury Prints", "Photobooks", "Certificates"],
        "credentials" => ["Recyclable", "Premium Quality", "Gloss Finish"]
    ],
    [
        "name" => "Pearl Oyster",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A subtle pearlescent shine for standout designs.",
        "weights" => ["125gsm", "300gsm"],
        "bestFor" => ["Wedding Stationery", "Greeting Cards", "Invitations"],
        "credentials" => ["Recyclable", "FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],[
        "name" => "Acquerello",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A finely lined surface that adds a touch of class to any design.",
        "weights" => ["150gsm", "300gsm"],
        "bestFor" => ["Greeting Cards", "Menus", "Invitations"],
        "credentials" => ["FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],
    [
        "name" => "Pearl Polar",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A pearlescent, smooth finish with a premium look.",
        "weights" => ["170gsm", "350gsm"],
        "bestFor" => ["Luxury Prints", "Photobooks", "Certificates"],
        "credentials" => ["Recyclable", "Premium Quality", "Gloss Finish"]
    ],
    [
        "name" => "Pearl Oyster",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A subtle pearlescent shine for standout designs.",
        "weights" => ["125gsm", "300gsm"],
        "bestFor" => ["Wedding Stationery", "Greeting Cards", "Invitations"],
        "credentials" => ["Recyclable", "FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],[
        "name" => "Acquerello",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A finely lined surface that adds a touch of class to any design.",
        "weights" => ["150gsm", "300gsm"],
        "bestFor" => ["Greeting Cards", "Menus", "Invitations"],
        "credentials" => ["FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],
    [
        "name" => "Pearl Polar",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A pearlescent, smooth finish with a premium look.",
        "weights" => ["170gsm", "350gsm"],
        "bestFor" => ["Luxury Prints", "Photobooks", "Certificates"],
        "credentials" => ["Recyclable", "Premium Quality", "Gloss Finish"]
    ],
    [
        "name" => "Pearl Oyster",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A subtle pearlescent shine for standout designs.",
        "weights" => ["125gsm", "300gsm"],
        "bestFor" => ["Wedding Stationery", "Greeting Cards", "Invitations"],
        "credentials" => ["Recyclable", "FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],[
        "name" => "Acquerello",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A finely lined surface that adds a touch of class to any design.",
        "weights" => ["150gsm", "300gsm"],
        "bestFor" => ["Greeting Cards", "Menus", "Invitations"],
        "credentials" => ["FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ],
    [
        "name" => "Pearl Polar",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A pearlescent, smooth finish with a premium look.",
        "weights" => ["170gsm", "350gsm"],
        "bestFor" => ["Luxury Prints", "Photobooks", "Certificates"],
        "credentials" => ["Recyclable", "Premium Quality", "Gloss Finish"]
    ],
    [
        "name" => "Pearl Oyster",
        "image" => "../media/category-correx2_1.jpg",
        "description" => "A subtle pearlescent shine for standout designs.",
        "weights" => ["125gsm", "300gsm"],
        "bestFor" => ["Wedding Stationery", "Greeting Cards", "Invitations"],
        "credentials" => ["Recyclable", "FSC Certified", "Sustainably Sourced", "Chlorine-Free"]
    ]
];

?>


<section class="advanced-horizontal-tab">
<div class="container">
    <h2>Browse Our Papers</h2>
    <p class="description">The paper you choose can make all the difference to your finished print.</p>

    <!-- Tab Navigation -->
    <div class="tab-container">
        <?php foreach ($papers as $index => $paper): ?>
            <div class="tab <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>">
                <?= $paper['name'] ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Paper Details Section -->
    <?php foreach ($papers as $index => $paper): ?>
        <div class="paper-details <?= $index === 0 ? 'active' : '' ?>" id="paper-<?= $index ?>">
            <img src="<?= $paper['image'] ?>" alt="<?= $paper['name'] ?>" class="paper-image">
            <h3><?= $paper['name'] ?></h3>
            <p><?= $paper['description'] ?></p>

            <h4>Available Weights</h4>
            <p>
                <?php foreach ($paper['weights'] as $weight): ?>
                    <span class="badge bg-secondary"><?= $weight ?></span>
                <?php endforeach; ?>
            </p>

            <h4>Best for</h4>
            <ul>
                <?php foreach ($paper['bestFor'] as $use): ?>
                    <li><?= $use ?></li>
                <?php endforeach; ?>
            </ul>

            <h4>Credentials</h4>
            <ul>
                <?php foreach ($paper['credentials'] as $cred): ?>
                    <li><?= $cred ?></li>
                <?php endforeach; ?>
            </ul>

            <a href="#" class="btn-order">Order Now</a>
        </div>
    <?php endforeach; ?>
</div>
</section>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        let tabs = document.querySelectorAll(".tab");
        let details = document.querySelectorAll(".paper-details");

        tabs.forEach(tab => {
            tab.addEventListener("click", function () {
                let index = this.getAttribute("data-index");

                // Remove active class from all tabs and details
                tabs.forEach(t => t.classList.remove("active"));
                details.forEach(d => d.classList.remove("active"));

                // Add active class to the clicked tab and corresponding details
                this.classList.add("active");
                document.getElementById("paper-" + index).classList.add("active");
            });
        });
    });
</script>


<style>

.tab-container {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding: 10px 0;
            white-space: nowrap;
            justify-content: center;
            align-items: center;
        }
        .tab {
            cursor: pointer;
            padding: 10px 15px;
            background: #fff;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s;
            border: 2px solid transparent;
        }
        .tab:hover, .tab.active {
            border-color: #ff0080;
            color: #ff0080;
        }
        .paper-details {
            display: none;
            padding: 20px;
            background: white;
            border-radius: 10px;
            text-align: left;
            margin-top: 20px;
        }
        .paper-details.active {
            display: block;
        }
        .paper-image {
            width: 100%;
            max-width: 250px;
            border-radius: 10px;
        }
        .btn-order {
            background-color: #ff0080;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

</style>