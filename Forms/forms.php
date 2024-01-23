<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);                  // displays the errors to the web page.
?> 

<!DOCTYPE html>
<html>

    <link rel="stylesheet" href="Forms.css">

    <header>
        <title>Web application techonologies</title>
        <h1>Forms</h1>
    </header>

    <h3>Processing Input from HTML Forms</h3>
    <h4>Login Form using GET + POST arrays</h4>

    <form method="post" action="">
    <fieldset>
		<legend>
			<b>Login</b>
		</legend>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br />
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<input type="submit" value="Submit" name="loginSubmit"  />
		<input type="reset" value="Clear" />
	</fieldset>
    </form>

    <?php
    
        if(isset($_POST['loginSubmit'])){

            $email = $_POST['txtEmail'];
            $password = $_POST['txtPass'];

            echo "Email: $email Password: $password <br />";
        }else{
        //Do nothing
        }

    ?>

    <form method="post" action="">
	<fieldset>
		<legend><b>Comments</b></legend>

		<label for="">Email: </label>
		<input type="text" name="txtCEmail" value="<?php
            if(isset($_POST['txtCEmail'])){
                echo $_POST['txtCEmail']; 
            }
            ?>" /><br />

		<textarea rows="4" cols="50" name="txtArea" value = "<?php
            if(isset($_POST['txtArea'])){
                echo $_POST['txtArea'];
            }
            ?>"></textarea><br />

		<label for="">Click to Confirm: </label>
		<input type="checkbox" name="checkC" value="agree"><br />
        
		<input type="submit" value="Submit" name="subC"/>
		<input type="reset" value="Clear" />
	</fieldset>
    </form>

    <?php

        
        
        if (isset($_POST['subC']) AND isset($_POST['checkC'])){

            if(!empty($_POST['txtCEmail'])){

                if(filter_var($_POST['txtCEmail'], FILTER_VALIDATE_EMAIL)){

                    $cEmail = $_POST['txtCEmail'];
                    $txtBox = $_POST['txtArea'];

                    $confirm = 'Agreed<br />';
                    echo "Email: $cEmail <br />Box: $txtBox <br />Confirm: $confirm";                    
                }
                else{
                    echo 'Please enter a valid email.';
                }
                
            }   
            else{
                echo 'Email must not be left empty.';
            }
        }
        else{
            $confirm = 'Not Agreed<br />';
        }

        
        
    ?>

    <footer>
        <h2>Tax Calculator</h2>

        <form method="post" action="">
            <fieldset>
                <legend><b>Without TAX calculator</b></legend>

                <label for="">After TAX Price: </label>
                <input type="text" name="txtTax" value="<?php
                if(isset($_POST['txtTax'])){
                    echo $_POST['txtTax'];
                }?>"/>

                <label for="">Tax Rate: </label>
                <input type="text" name="txtTaxRate" value="<?php
                if(isset($_POST['txtTaxRate'])){
                    echo $_POST['txtTaxRate'];
                }?>"/>

                <input type="submit" value="Submit" name="subTax"/>
		        <input type="reset" value="Clear" />

            </fieldset>
        </form>

        <?php

            if (isset($_POST['subTax'])){

                if(!empty($_POST['txtTax']) AND !empty($_POST['txtTaxRate'])){ // checking if the boxes are empty.

                    if(preg_match("/^\d+(:?[.]\d{2})$/ " , $_POST['txtTax'])){ // validating after tax price.

                        if(filter_var($_POST['txtTaxRate'], FILTER_VALIDATE_INT)){ // validating tax rate.

                            $price = $_POST['txtTax'];
                            $rate = $_POST['txtTaxRate'];

                            $beforeTax = 100 + $rate;

                            echo '<br />';
                            echo '<span class="bold">Price before tax: '.$beforeTax.'</span><br />';
                        }
                        else{
                            echo 'Please enter a valid tax rate.<br />';
                        }
                                                    
                    }   
                else{
                    echo 'Please enter a valid after tax price.<br />';
                }
                }
                else{
                    echo 'Please fill both boxes.<br />';
                }

            }
        ?>

    </footer>

    <section>
        <h1>Passing Data Appended to an URL</h1>
	    <h3>Pick a category</h3>
	    <a href="Forms.php?cat=Films">Films</a>
	    <a href="Forms.php?cat=Books">Books</a>
	    <a href="Forms.php?cat=Music">Music</a>

        <?php

            if(isset($_GET['cat'])){
                $chosenCat = $_GET['cat'];
                echo '<br />The category chosen is <b>'.$chosenCat.'<b><br />';
            }
            
        ?>

    </section>    

    <nav>
            <h2>Order Form</h2>
            <p>Please fill out this form to place your order</p>
            <form method="post" action="">
                <fieldset>
                    <legend><b>Enter your login details</b></legend>

                    <label for="">User Name: </label>
                    <input type="text" name="txtPUser" value="<?php
                    if(isset($_POST['txtPUser'])){
                        echo $_POST['txtPUser'];                     // making the values persist.
                    }
                    ?>" />

                    <label for="">Email: </label> 
                    <input type="text" name="txtPEmail" value="<?php
                    if(isset($_POST['txtPEmail'])){
                        echo $_POST['txtPEmail'];
                    }
                    ?>" />                                    
                </fieldset>
                <fieldset>
                    <legend><b>Pizza Selection</b></legend>

                    <br />

                    <label for="" id="Size">Size: </label>
                    <input type="radio" id="Small" name="radSize" value="Small"/>
                    <label for="Small">small</label>                    
                    <input type="radio" id="Medium" name="radSize" value="Medium"/>
                    <label for="Medium">medium</label>                
                    <input type="radio" id="Large" name="radSize" value="Large"/>
                    <label for="Large">large</label>

                    <br /><br />

                    <label for="topping">Topping: </label>
                        <select name="topping" id="topping">
                            <option value="Please select">Please select</option>
                            <option value="Pepperoni">Pepperoni</option>
                            <option value="Cheese">Cheese</option>
                            <option value="Chicken">Chicken</option>
                        </select>

                    <br /><br />
                    
                    <label for="" id="Extras">Extras: </label>
                    <input type="checkbox" id="Parmesan" name="chkExtra[]" value="Parmesan"/>
                    <label for="Parmesan">Parmesan</label>
                    <input type="checkbox" id="Olives" name="chkExtra[]" value="Olives"/>
                    <label for="Olives">Olives</label>
                    <input type="checkbox" id="Capers" name="chkExtra[]" value="Capers"/>
                    <label for="Capers">Capers</label>  
                
                    <br /><br />

                </fieldset>

                <input type="submit" value="Submit" name="subPizza"/>
		        <input type="reset" value="Clear" />

            </form>

            <?php
            if(isset($_POST['subPizza'])){
                if(!empty($_POST['txtPUser']) AND !empty($_POST['txtPEmail'])){
                    if(filter_var($_POST['txtPEmail'], FILTER_VALIDATE_EMAIL)){                    
                        if(isset($_POST['radSize'])){
                            if(isset($_POST['topping']) AND $_POST['topping'] !== 'Please select'){

                                $userName = trim($_POST['txtPUser']);
                                $pizzaEmail = trim($_POST['txtPEmail']);
                                $pizzaSize = $_POST['radSize'];
                                
                                $pizzaTopping = $_POST['topping'];
                                
                                echo '<span class="header">Thank you for your order:</span><br />';

                                echo 'Customer ID: <b>'.$userName.'</b><br />';
                                echo 'Email: <b>'.$pizzaEmail.'</b><br />';
                                echo 'Your order: <b>'.$pizzaSize.'&nbsp'.$pizzaTopping.'</b><br />';
                                echo 'Extra Toppings: <b>';
                                
                                if(empty($_POST['chkExtra'])){
                                    echo 'No Extras';
                                }
                                else{
                                    $pizzaExtras = $_POST['chkExtra'];
                                    foreach($pizzaExtras as $extra){
                                        echo $extra.' ';
                                    }
                                }
                                echo '</b><br />';
                            }
                            else{
                                echo 'Please select a topping.';
                            }
                        }
                        else{
                            echo 'Please select a pizza size.';                                        
                        }
                    }
                    else{
                        echo 'Please enter a valid email.';
                    }
                }
                else{
                    echo 'Enter your username and email.';
                }
            }
        
            ?>
    </nav>
 
    <div>
        <small><a href="../watIndex.html">Home</a></small>
    </div>

</html>
