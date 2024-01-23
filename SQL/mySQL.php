<!DOCTYPE html>
<html>

    <?php
            
        include 'selectRecord.php';
        
    ?>
    
    <header>
        <title>Web Application Technologies</title>
        <h1>Using SQL and PHP</h1>
    </header>

    <body>

        <form method="post" action="insertRecords.php">
            <fieldset>
                <legend><b>Enter Customer Details</b></legend>

                <label for="">First Name: </label>
                <input type="text" name="txtName"/>
                <br />

                <label for="">Surname: </label>
                <input type="text" name="txtSurname"/>
                <br />

                <label for="">Email: </label>
                <input type="text" name="txtEmail"/>
                <br />

                <label for="selGender">Gender: </label>
                    <select name="gender" id="selGender">
                        <option name="Please Select">Please select</option>
                        <option name="Male">Male</option>
                        <option name="Female">Female</option>
                        <option name="nonBinary">Non-binary</option>
                        <option name="Other">Other</option>
                    </select>
                <br />

                <label for="">Age: </label>
                <input type="text" name="txtAge"/>
                <br />

                <input type="submit" value="Submit" name="subTax"/>
		        <input type="reset" value="Clear" />                
            </fieldset>
        </form>

    </body>

    <a href="../watIndex.html">Home</a>

</html>
