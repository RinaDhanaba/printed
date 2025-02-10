<!-- Include the header -->
<?php include('app/layout-templete/header.php'); ?>

<form action="register.php" method="POST" style="width:100%; padding:5px; max-width:550px; margin: 80px auto;">
        <div class="form-group">
            <label for="first_name">First Name*</label>
            <input type="text" id="first_name" name="first_name">
        </div>

        <div class="form-group">
            <label for="last_name">Last Name*</label>
            <input type="text" id="last_name" name="last_name">
        </div>

        <div class="form-group">
            <label for="email">Email Address*</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="address_line1">Address Line 1*</label>
            <input type="text" id="address_line1" name="address_line1">
        </div>

        <div class="form-group">
            <label for="address_line2">Address Line 2</label>
            <input type="text" id="address_line2" name="address_line2">
        </div>

        <div class="form-group">
            <label for="city">City*</label>
            <input type="text" id="city" name="city">
        </div>

        <div class="form-group">
            <label for="country">Country*</label>
            <select id="country" name="country">
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="India">India</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="postcode">Postcode*</label>
            <input type="text" id="postcode" name="postcode">
        </div>

        <div class="form-group">
            <label for="phone">Phone Number*</label>
            <input type="text" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="industry">Industry Sector*</label>
            <select id="industry" name="industry">
                <option value="">Please select an Industry Sector</option>
                <option value="Technology">Technology</option>
                <option value="Education">Education</option>
                <option value="Healthcare">Healthcare</option>
            </select>
        </div>

        <div class="form-group">
            <label for="printing_for">Please tell us what you are printing for*</label>
            <input type="text" id="printing_for" name="printing_for">
        </div>

        <div class="form-group">
            <label for="password">Password*</label>
            <input type="password" id="password" name="password">
        </div>

        <div class="checkbox-group">
            <input type="checkbox" id="subscribe" name="subscribe" value="1">
            <label for="subscribe">Register to receive deals and product inspiration.</label>
        </div>

        <button type="submit" class="submit-btn">Create Account</button>
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
