<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <form method="POST">
        <table>
            <tr>
                <th colspan="2">Reciept</th>
            <tr>
                <th>Customer's Order</td>
            </tr>
            <tr>
                <td>Drink:</td>
                <td>
                    <select name="selectDrink">
                        <option value="Cocal-Cola">Coca-Cola 1.5$</option>
                        <option value="Fanta">Fanta 2$</option>
                        <option value="Pepsy">Pepsy 1$</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Quantity:</td>
                <td>
                    <input type="text" name="quantity" placeholder="Enter quantity" >
                </td>
            </tr>
            <tr>
                <td>Discount:</td>
                <td>
                    <input type="text" name="discount" placeholder="Enter discount">
                </td>
            </tr>
            <tr class="button">
                <td colspan="2">
                    <button type="submit" name="submit" class="ok">OK</button>
                    <button type="cancel" name="cancel" class="cancel">Cancel</button>
                </td>
            </tr>
            <?php
                if(isset($_POST['submit'])){
                    //break line
                    echo "<tr><td colspan='2' ><hr ></td></tr>";

                    //header
                    echo "<tr>
                            <th class='summary'>Order Summary</th>
                        </tr>";

                    //select drink
                    $selectDrink = $_POST['selectDrink'];
                    echo "<tr>
                            <td>Drink:</td>
                            <td>$selectDrink</td>
                    </tr>";

                    //price
                    if($selectDrink == "Cocal-Cola"){
                        $price = 1.5;
                        echo "<tr>
                                <td>Price:</td>
                                <td>$price$</td>
                        </tr>";
                    }
                    elseif($selectDrink == "Fanta"){
                        $price = 2;
                        echo "<tr>
                            <td>Price:</td>
                            <td>$price$</td>
                        </tr>";
                    }
                    else{
                        $price = 1;
                        echo "<tr>
                            <td>Price:</td>
                            <td>$price[$selectDrink]$</td>
                        </tr>";
                    }

                    //quantity
                    $quantity = $_POST['quantity'];
                    echo "<tr>
                            <td>Quantity:</td>
                            <td>$quantity cans</td>
                    </tr>";

                    //discount
                    $discount = $_POST['discount'];
                    echo "<tr>
                            <td>Discount:</td>
                            <td class='discount'>-$discount$</td>
                    </tr>";

                    //break line
                    echo "<tr><td colspan='2' ><hr></td></tr>";

                    //calculate
                    $amount = ($price * $quantity)-$discount;
                    echo"<tr>
                            <td>Total Price:</td>
                            <td>$amount$</td>
                    </tr>";
                }
            ?>
        </table>
    </form>
</body>
</html>