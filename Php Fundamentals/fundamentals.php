<!DOCTYPE html>
<html>

    <head>
        <title>Web Applications and Technologies</title>
        <link type="text/css" rel="stylesheet" href="main.css" />
    </head>
    <body>
        <header>
            <h5>Olivia Emms c3641676</h5>
        </header>

        <section id="container">
            <h1>Fundamentals of PHP</h1>
            
            <h4>Selection</h4>

            <?php      
            
            $day = date('l');
            $dayNumerical = date('d');
            $month = date('F');
            $year =  date('o');
            echo 'Today it is <span class="redText"><b>'.$day.'&nbsp'.$dayNumerical.' of '.$month.'&nbsp'.$year.'</b></span>';
            echo '<br />';         

            $formattedDate = date('r');

            echo 'PHP\'s fromatted date today is <span class="redText"><b>'.$formattedDate.'</b></span>';
            echo '<br />';

            $day_two = 'Tuesday';

            if ($day_two == 'Wednesday'){
                echo 'It is midweek';    
            }  
            else{
                echo 'It isn\'t midweek';
            }        
            
            echo '<br />';
            
            $time = date('O');

            if ($time >= 1200 AND $time <= 1800){
                echo 'Good afternoon! It\'s '.$time;
            }
            elseif($time > 1800){
                echo 'Good evening! It\'s '.$time;
            }
            else{
                echo 'Good morning! It\'s '.$time;               
            }

            echo '<br />';

            $password = 'password';

            if (strlen($password) > 4 AND strlen($password) < 10){
                echo 'Password length is valid<br />';
                if($password == 'password' OR $password == 'username'){
                    echo 'Password is valid<br />';
                }
                else{
                    echo 'Password is invalid<br />';                    
                }
            }
            else{
                echo 'Password length is invalid<br />';
            }            
            ?>

            <?php // ticket company extention task.

                $age = 15;
                $price = 25.00;
                $membership = TRUE;

                if($membership == TRUE){
                    $member = 'Yes';
                }
                else{
                    $member = 'No';
                }

                        
                if($age < 12){
                    $ticketPrice = $price * 0.5;
                    if($membership == TRUE){
                        $ticketPrice = $ticketPrice * 0.9;
                    } 
                }
                elseif(($age < 18 AND $age > 11) OR ($age > 65)){
                    $ticketPrice = $price * 0.75;
                    if($membership == TRUE){
                        $ticketPrice = $ticketPrice * 0.9;
                    } 
                }

                echo '<br />Inital Ticket Price: '.$price.'<br />Age: '.$age.'<br />Member: '.$member.'<br />Final Ticket Price: '.number_format($ticketPrice, 2);
            ?>

        </section>
        <h4>Associative Arrays</h4>  
        <div id='nav'>

            <?php
                $customer = Array('CustID' => '12', 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F');
                print_r($customer); 
                echo '<br />';                
                $customer['CustAge'] = 34;
                $customer['CustEmail'] = 'sarah@gmail.com'; 
                print_r($customer);     
                echo '<br />'; 
                echo 'Items in my customer array<br />';
                echo 'The item at index[CustName] is: ';
                print_r($customer['CustName']);   
                echo '<br />';
                echo 'The item at index[CustEmail] is: ';
                print_r($customer['CustEmail']);  
            ?>    

            <h3>Multi-Dimensional Arrays</h3>

            <?php // mulit-dimensional arrays. (stock task).

                $stock = Array('des' => Array('id1' => 't-shirt', 'id2' => 'cap', 'id3' => 'mug'),
                'price' => Array('id1' => 9.99, 'id2' => 4.99, 'id3' => 6.99),
                'stock' => Array('id1' => 100, 'id2' => 50, 'id3' => 30),
                'colour' => Array('id1' => 
                Array('blue','green','red'),
                'id2' =>
                Array('blue','black','grey'),
                'id3' =>
                Array('yellow','green','pink')));

                print_r($stock);

                echo '<br /><br />This is my order<br />'.$stock['colour']['id1'][1].'&nbsp'.$stock['des']['id1'];
                echo '<br />Price: '.$stock['price']['id1'];
                echo '<br />'.$stock['colour']['id2'][2].'&nbsp'.$stock['des']['id2'];
                echo '<br />Price: '.$stock['price']['id2'].'<br />';

            ?>

        </div> 
        <div id='Loops'>

            <h2>Loops</h2>
            <h4>While Loops</h4> 

            <?php

            $counter = 1;
            while($counter < 6){

                echo 'Count: '.$counter.'<br />';
                $counter++;                
            }  

            ?>

            <?php
                $counter = 1;
                $shirtPrice = 9.99;
            ?>            
            <table border = "1" cellpadding = "3" cellspacing = "2">
                <tr>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                
                
                <?php
            
                while($counter <= 10){
                    $total = $shirtPrice*$counter;
                    echo '<tr>';
                    echo "<td>$counter</td>";
                    echo "<td>$total</td>";  
                    echo '</tr>';              
                    $counter++;
                }       
                ?> 
            </table>

            <h4>For Loops</h4>
            
            <?php

            $names = Array('Olivia', 'Issy', 'Yaz', 'Max', 'Freya');
            for($i = 0; $i < 5; $i++){
                echo $names[$i].'<br />';                
            }            
            ?>

            <h4>For Each loops</h4>

            <?php

            $namesID = Array('Olivia' => 'c235643', 'Issy' => 'c234578', 'Yaz' => 'c456723', 'Max' => 'c475323', 'Freya' => 'c456783');
            foreach($namesID as $key=>$value){
                echo 'Name: '.$key.' - ID: '.$value.'<br />';
            }       
            
            ?>
        
        </div>

        <nav>
            <h2>Some Useful Functions</h2>
            <?php
                $password = trim(htmlentities('password'));
            
                if(isset($password) AND !empty($password)){
                    if(strlen($password) >= 6 AND strlen($password) <= 8){
                        if(!is_numeric($password)){
                            echo "Password is $password <br />";
                            echo 'Password OK <br/>';

                            $encyptedPassword = md5($password);

                            echo "Encypted Password: $encyptedPassword";
                        }
                        else{
                            echo 'Password shouldn\'t be a number';
                        }
                    } 
                    else{
                        echo 'Password must be between 6 and 8 characters long.';
                    }
                }
                else{
                    echo 'Please enter a password. <br />';
                }
            ?>
        </nav>         
        
    </body>

    <footer>
        <small><a href="../watIndex.html">Home</a></small>
    </footer>

</html>
