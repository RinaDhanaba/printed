<?php session_start(); ?>

<div class="sidebar bg-light p-3">
    <h4>Product Summary</h4>
    <ul class="list-group">
        <li class="list-group-item"><strong>Product:</strong> <?= $_SESSION['selected_options']['product'] ?: "Not selected" ?></li>
        <li class="list-group-item"><strong>Size:</strong> <?= $_SESSION['selected_options']['size'] ?: "Not selected" ?></li>
        <li class="list-group-item"><strong>Paper:</strong> <?= $_SESSION['selected_options']['paper'] ?: "Not selected" ?></li>
    </ul>
</div>
