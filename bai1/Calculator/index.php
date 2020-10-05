    </html>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div class="calculator">
            <form action="" method="post">
                <h2>Simple Calculator</h2>
                <fieldset>
                    <legend>Calculator</legend>
                    <label for="">First operand : </label><input type="text" name="operand1"><br><br>
                    <label for="">Operator :</label>
                    <select name="operator" id="">
                        <option value="cong">Cộng</option>
                        <option value="tru">Trừ</option>
                        <option value="nhan">Nhân</option>
                        <option value="chia">Chia</option>
                    </select><br><br>
                    <label for="">Second operand</label><input type="text" name="operand2"><br><br>
                    <input type="submit" value="Calculator">
                </fieldset>
            </form>
            <h1>Result:</h1>
            <?php
            class Calculator
            {
                function calculate($first, $second, $operator)
                {
                    if ($operator == "chia" && $second == 0) {
                        throw new Exception("Devided by zero!");
                    } else {
                        if ($operator == "cong") {
                            echo $first . " + " . $second . " = " . ($first + $second);
                        }
                        if ($operator == "tru") {
                            echo $first . " - " . $second . " = " . ($first - $second);
                        }
                        if ($operator == "nhan") {
                            echo $first . " x " . $second . " = " . ($first * $second);
                        }
                        if ($operator == "chia") {
                            echo $first . " / " . $second . " = " . ($first / $second);
                        }
                    }
                }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $first = $_POST["operand1"];
                $second = $_POST["operand2"];
                $operator = $_POST["operator"];
                try {
                    $mayTinh = new Calculator;
                    $mayTinh->calculate($first, $second, $operator);
                } catch (Exception $e) {
                    echo "Message:" . $e->getMessage();
                }
            }

            ?>
        </div>
    </body>

    </html>