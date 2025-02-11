<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>


<div class="background-section"></div>

<div style="background-color: #F5F4FB;">
<section class="contact-section-info">
    <h1>Here to help</h1>
    <p>Our friendly UK-based Customer Service Team is on hand to help every weekday from 8:30am until 5.30pm. Just get in touch using the details below.</p>

    <div class="flex">
        <div class="chat">
            <img src="./media/Next Day.png" alt="">
            <h3>Chat</h3>
            <p>Our friendly team are available every weekday between 9am and 5pm. If you’re looking for help during this time, click here to open our live chat.</p>
        </div>
        <div class="email">
            <img src="./media/Next Day.png" alt="">
            <h3>Email</h3>
            <p>Our friendly team are available every weekday between 9am and 5pm. If you’re looking for help during this time, click here to open our live chat.</p>
        </div>
        <div class="phone">
            <img src="./media/Next Day.png" alt="">
            <h3>Phone</h3>
            <p>Our friendly team are available every weekday between 9am and 5pm. If you’re looking for help during this time, click here to open our live chat.</p>
        </div>
    </div>

</section>
</div>


<div class="contact-section">
    <h2>Looking for specific teams?</h2>

    <!-- Sales Team -->
    <div class="team-card sales-team">
        <h3>Sales Team</h3>
        <div class="team-card-wrapper">
        <p>Can’t find what you’re looking for? Want to create something totally unique? Our expert Sales Team are on hand to help with all your Bespoke printing needs.</p>
        <p><strong>0800 840 1431</strong></p>
        <p>Monday to Friday - 9am until 5pm</p>
        <a href="contact_sales.php" class="contact-link">Contact Sales ></a>
        </div>
    </div>

    <!-- Finance and PR Teams in a row -->
    <div class="team-row">
        <!-- Finance Team -->
        <div class="team-card finance-team">
            <h3>Finance Team</h3>
            <div class="team-card-wrapper">
            <p>Got a query about your invoice or need a hand with all things payment related? Get in touch with our Finance Team.</p>
            <p><strong>01670 432 067</strong></p>
            <p>Monday to Friday - 9am until 5:30pm</p>
            <a href="contact_finance.php" class="contact-link">Contact Finance ></a>
            </div>
        </div>

        <!-- PR and Marketing Team -->
        <div class="team-card pr-marketing-team">
            <h3>PR and Marketing Team</h3>
            <div class="team-card-wrapper">
            <p>For any queries relating to guest blog posts, influencers, sponsorship requests, and any other press-related questions.</p>
            <p><strong>Email only</strong></p>
            <a href="contact_marketing.php" class="contact-link">Contact Marketing ></a>
            </div>
        </div>
    </div>
</div>






<div class="search-section">
    <h3>Search our help section</h3>
    <p>Browse our archive of articles relating to most common questions.</p>
    <div class="search-container">
        <input type="text" class="search-bar" placeholder="Search Printed.com support...">
        <button class="search-button"><i class="fas fa-search"></i></button>
    </div>
</div>

<!-- trustpilot section -->
<?php include('app/layout-templete/trustpilot.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>