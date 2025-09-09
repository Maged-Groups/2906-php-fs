<html>

<body>
    <div class="text-3xl bg-gray-300 p-6 flex flex-col items-center w-2/4 translate-x-1/2 translate-y-1/2 ">
        <div>Your status is: <?php echo $_POST["status"]; ?><br></div>
        <div>
            <?php

            // for next cases, the color should be red => Canclled, Refunded, Complain
            // for next cases, the color should be blue => Pending, On Hold, Postpond
            // for next cases, the color should be green => Delivered, Shipped, Reviewed
            // handle not matched status
            $status = $_POST["status"];

            $color = match (ucfirst($status)) {
                "Cancelled", "Refunded", "Complain" => "red",
                "Pending", "On Hold", "Postpond" => "blue",
                "Delivered", "Shipped", "Reviewed" => "green",
                default => "black"
            };
            if ($color == 'black') {
                echo "No Mach !!!! <span style='color: $color ;'>  $color </span>";
            } else {
                echo "Status Result color is: <span style='color: $color ;'>  $color </span>";
            }

            ?>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>