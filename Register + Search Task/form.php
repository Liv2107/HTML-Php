<html>
<body>

    <form method="post" action="collectData.php">
        <fieldset>
            <legend>Register a New User</legend>

            <label for="">Username: </label>
            <input type="text" name="txtUser" placeholder="enter username" value="<?php 
            if(isset($_SESSION['user'])){
                echo $_SESSION['user'];
            }?>"/><br />
            

            <label for="">Password: </label>
            <input type="password" name="txtPass" placeholder="enter password" value="<?php 
            if(isset($_SESSION['pass'])){
                echo $_SESSION['pass'];
            }?>"/><br />

            <label for="">Email: </label>
            <input type="text" name="txtEmail" placeholder="enter email" value="<?php 
            if(isset($_SESSION['email'])){
                echo $_SESSION['email'];
            }?>"/><br />

            <label for="age">Age: </label>
                        <select name="selAge" id="age">
                            <option value="Please select">Please select</option>
                            <option value="under18">Under 18</option>
                            <option value="18-30">18 - 30</option>
                            <option value="30-40">30 - 40</option>
                            <option value="40+">40+</option>
                        </select><br />

            <label for="">Confirm: </label>
		    <input type="checkbox" name="checkConfirm" value="Confirm"><br /><br />

            <input type="submit" value="Submit" name="loginSubmit"  />
		    <input type="reset" value="Clear" name="reset" />
        </fieldset>
    </form>


</body>
</html>
