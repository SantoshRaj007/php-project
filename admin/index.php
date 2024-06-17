<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once  "includes/admin-header.php"; ?>

    <div class="flex flex-1 px-[5%] mt-5 gap-5">
        <div class="w-3/12 bg-gray-100">
            <?php include_once  "includes/sidebar.php"; ?>
        </div>
        <div class="flex-1 bg-white">
            <div class="grid grid-cols-4 gap-4">
                <div class="border-2 px-4 py-3 rounded-lg shadow-md bg-red-50">
                    <h2 class="text-3xl font-semibold">30+</h2>
                    <h6 class="text-xl text-red-800">Total Categories</h6>
                </div>

                <div class="border-2 px-4 py-3 rounded-lg shadow-md bg-green-50">
                    <h2 class="text-3xl font-semibold">30+</h2>
                    <h6 class="text-xl text-green-800">Total Author</h6>
                </div>

                <div class="border-2 px-4 py-3 rounded-lg shadow-md bg-blue-50">
                    <h2 class="text-3xl font-semibold">30+</h2>
                    <h6 class="text-xl text-blue-800">Total Posts</h6>
                </div>

                <div class="border-2 px-4 py-3 rounded-lg shadow-md bg-yellow-50">
                    <h2 class="text-3xl font-semibold">30+</h2>
                    <h6 class="text-xl text-yellow-800">Total Tags</h6>
                </div>
            </div>
        </div>
    </div>

</body>
</html>