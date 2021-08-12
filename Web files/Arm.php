<?php

$servername = "localhost";
$username = "root";
$password = "";
$DB = "directions";
$conn = new mysqli($servername, $username, $password, $DB);
$Table = "motors";
$Query = "Select * from $Table";
$result = $conn->query($Query);
if ($result->num_rows > 0) {
    while ($r = $result->fetch_assoc()) {
        $row = $r;
    }
    $m1 = $row['Motor1'];
    $m2 = $row['Motor2'];
    $m3 = $row['Motor3'];
    $m4 = $row['Motor4'];
    $m5 = $row['Motor5'];
} else {
    $m1 = 0;
    $m2 = 0;
    $m3 = 0;
    $m4 = 0;
    $m5 = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Arm.css">
    <title>Control Panel</title>
</head>

<body>

    <h2>Fighting Robot منافِس</h2>
    <div class="container">


        <form action="connect.php" method="POST">

            <button class="btn" id="Forward" value="1" name="Forward" onclick="button_1_on()">FORWARD</button><br />
            <button class="btn" id="Left" value="1" name="Left" onclick="button_2_on()">LEFT</button>
            <button class="btn" id="Stop" value="1" name="Stop" onclick="button_3_on()">STOP</button>
            <button class="btn" id="Right" value="1" name="Right" onclick="button_4_on()">RIGHT</button><br />
            <button class="btn" id="Backward" value="1" name="Backward" onclick="button_5_on()">BACKWARD </button>
        </form>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="card">
                <input type="range" name="Motor1" id="Motor1" min="0" max="180" value="<?php echo $m1 ?>" oninput="ChangeInput()">
                <label id="Label1"></label>
            </div>
            <div class="card">
                <input type="range" name="Motor2" id="Motor2" min="0" max="180" value="<?php echo $m2 ?>" oninput="ChangeInput()">
                <label id="Label2"></label>
            </div>
            <div class="card">
                <input type="range" name="Motor3" id="Motor3" min="0" max="180" value="<?php echo $m3 ?>" oninput="ChangeInput()">
                <label id="Label3"></label>
            </div>
            <div class="card">
                <input type="range" name="Motor4" id="Motor4" min="0" max="180" value="<?php echo $m4 ?>" oninput="ChangeInput()">
                <label id="Label4"></label>
            </div>
            <div class="card">
                <input type="range" name="Motor5" id="Motor5" min="0" max="180" value="<?php echo $m5 ?>" oninput="ChangeInput()">
                <label id="Label5"></label>
            </div>
            <button class="btn" type="submit">Save</button>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {
                $m1 = $_POST['Motor1'];
                $m2 = $_POST['Motor2'];
                $m3 = $_POST['Motor3'];
                $m4 = $_POST['Motor4'];
                $m5 = $_POST['Motor5'];
                $SQuery = "insert into motors(Motor1,Motor2,Motor3,Motor4,Motor5) values($m1,$m2,$m3,$m4,$m5);";
                $conn->query($SQuery);
                header("Location: /t3/arm.php");
            } catch (\Throwable $th) {
                //throw $th;
                echo "Bad";
            }
        }
        ?>

        </form>



        <script>
            var motor1 = document.getElementById("Motor1");
            var label1 = document.getElementById("Label1");
            label1.innerHTML = motor1.value;

            var motor2 = document.getElementById("Motor2");
            var label2 = document.getElementById("Label2");
            label2.innerHTML = motor2.value;

            var motor3 = document.getElementById("Motor3");
            var label3 = document.getElementById("Label3");
            label3.innerHTML = motor3.value;

            var motor4 = document.getElementById("Motor4");
            var label4 = document.getElementById("Label4");
            label4.innerHTML = motor4.value;

            var motor5 = document.getElementById("Motor5");
            var label5 = document.getElementById("Label5");
            label5.innerHTML = motor5.value;

            function ChangeInput() {

                label1.innerHTML = motor1.value;
                label2.innerHTML = motor2.value;
                label3.innerHTML = motor3.value;
                label4.innerHTML = motor4.value;
                label5.innerHTML = motor5.value;

            }

            window.watsonAssistantChatOptions = {
                integrationID: "731bd5ea-10ab-4477-ad84-fa6e191230bb", // The ID of this integration.
                region: "eu-gb", // The region your integration is hosted in.
                serviceInstanceID: "0952bd14-c7ad-4ca7-8fb8-966acbb39173", // The ID of your service instance.
                onLoad: function(instance) {
                    instance.render();
                }
            };
            setTimeout(function() {
                const t = document.createElement('script');
                t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
                document.head.appendChild(t);
            });
        </script>


</body>

</html>