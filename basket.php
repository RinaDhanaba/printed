<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<div class="container" >
 <h1>Hi! Your basket is empty</h1>
 <p>Go to My Account to see your saved items.</p>
</div>

<!-- Blog section -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<section id="basket-cta">
    <div class="container">
    <img src="./media/req-18013-bespoke-widget-product-pages-288x140.webp"/>
    <div class="cateory-cta-content">
        <h2>For something extraordinary try our Bespoke Service</h2>
        <p>We know that print isn’t one size fits all. No matter the shape, size or scope of the project we’ll help you get your print, your way.</p>
    </div>
    <a href="#"> Get a quote</a>
    </div>
</section>

<style>
    .basket-cta{
        background: var(--gary-bg);
        margin-bottom:100px;
    }
    .basket-cta .container{display: flex;
    gap: 15px;
    justify-content: center;
    align-items: center;
    margin-bottom:-30px;
    }
</style>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
