<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p class="text-center text-3xl p-4 text-orange-500 w-2/4 translate-x-1/2 translate-y-1/2">Please Enter Status</p>

    <!-- <form action="welcome.php" method="POST"> -->
    <!-- <label class="bg-gray-300 px-3 flex items-center">Status</label> -->
    <!-- <input type="text" name="status" class="mb-5 flex flex-row text-sm border-b-2 outline-none p-2 w-full"> -->
    <!-- Name: <input type="text" name="name"><br> -->
    <!-- <input type="submit"> -->
    <!--  </form> -->

    <form class="flex gap-4 p-6  w-2/4 translate-x-1/2 translate-y-1/2" action="welcome.php"
        method="POST">

        <label
            class="px-3 flex items-center  rounded-xl ">Status</label>
        <input type="text" name="status" class="mb-5 flex flex-row text-sm border-2 p-2 w-full">

        <input class="bg-gray-100 rounded-xl border-solid border-2 border-grey-900" type="submit">

    </form>


    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>