<?php
helper(['url', 'form']);
 
$index_path = getenv('INDEX');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Mini Things</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background: #121212;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #eee;
        }
        
        .container {
            width: 90%;
            max-width: 600px;
            background: #333;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
            color: #ddd;
            display: block;
            margin-top: 10px;
        }

        .field {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 4px;
            border: 1px solid #555;
            background-color: #222;
            color: #eee;
            font-size: 16px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 20px;
        }
        
        .button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            color: #fff;
        }

        .register-btn {
            background-color: #4caf50;
        }

        .register-btn:hover {
            background-color: #43a047;
        }

        .reset-btn {
            background-color: #e53935;
        }

        .reset-btn:hover {
            background-color: #d32f2f;
        }

        /* Login link */
        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
        }
        
        .login-link a {
            color: #4caf50;
            text-decoration: none;
        }

        .login-link a:hover {
            color: #66bb6a;
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: #222;
            color: #ccc;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            margin-top: 20px;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register Your Details</h1>
        <?php echo form_open("$index_path/CustomerController/registerCustomer");?>

     

        <label for="contactLastName">Contact Last Name</label>
        <input name="contactLastName" type="text" class="field" id="contactLastName" />

        <label for="contactFirstName">Customer First Name</label>
        <input type="text" name="contactFirstName" class="field" id="contactFirstName" />

        <label for="phone">Phone</label>
        <input type="text" name="phone" class="field" id="phone" />

        <label for="addressLine1">Address 1</label>
        <input type="text" name="addressLine1" class="field" id="addressLine1" />

        <label for="addressLine2">Address 2</label>
        <input type="text" name="addressLine2" class="field" id="addressLine2" />

        <label for="city">City</label>
        <input type="text" name="city" class="field" id="city" />

        <label for="state">State</label>
        <input type="text" name="state" class="field" id="state" />

        <label for="postalCode">Postal Code</label>
        <input type="text" name="postalCode" class="field" id="postalCode" />

        <label for="country">Country</label>
        <input type="text" name="country" class="field" id="country" />

        <label for="email">Email</label>
        <input type="text" name="email" class="field" id="email" />

        <label for="password">Password</label>
        <input type="password" name="password" class="field" id="password" />

        <div class="button-group">
            <input type="submit" name="register" class="button register-btn" value="Register">
            <input type="reset" name="reset" class="button reset-btn" value="Reset">
        </div>

        </form>

        <!-- Login Link -->
        <div class="login-link">
            Already have an account? <a href="<?php echo $index_path; ?>">Log in here</a>
        </div>

        <!-- Footer -->
        <footer>
        <p>Upgraded to CI4 2022 - Carol Rainsford - Version 3 - 2013 Liz Bourke and Alan Ryan<a href="http://www.lit.ie"></a></p>
          </footer>
    </div>
</body>
</html>


