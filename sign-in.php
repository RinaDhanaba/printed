<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<form action="#" method="POST" style="width:100%; padding:5px; max-width:550px; margin: 80px auto;">
        <div class="form-group">
            <label for="email">Email Address*</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password*</label>
            <input type="password" id="password" name="password">
        </div>

        <button type="submit" class="shop-btn">Create Account</button>
    </form>


    <style>
                .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-group input:focus {
            border-color: #007BFF;
            outline: none;
        }

        .form-group .error {
            color: red;
            font-size: 0.9em;
        }

        .checkbox-group {
            margin-bottom: 15px;
        }

        .checkbox-group input {
            margin-right: 10px;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>


<!-- Blog section -->
<?php include('app/layout-templete/trending_blog.php'); ?>

<!-- Include the footer -->
<?php include('app/layout-templete/footer.php'); ?>
