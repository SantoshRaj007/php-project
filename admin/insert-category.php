<?php
    include_once "../config/function.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Category | Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once  "includes/admin-header.php"; ?>

    <div class="flex flex-1 px-[5%] mt-5 gap-5">
        <div class="w-3/12 bg-gray-100">
            <?php include_once  "includes/sidebar.php"; ?>
        </div>
        <div class="flex-1 bg-white">
            <div class="flex border-b pb-3 flex-1 justify-between items-center">
                <h2 class="text-2xl font-semibold ">Insert Category</h2>
                <a href="manage-categories.php" class="bg-slate-600 text-white px-3 py-2 rounded">Go Back</a>
            </div>
            
            <form action="" method="post">
                <div class="flex mb-3 flex-col gap-2">
                    <label for="">Category Title</label>
                    <input type="text" name="cat_title" class="border px-3 py-2 w-full">
                </div>

                <div class="flex mb-3 flex-col gap-2">
                    <label for="">Category Slug</label>
                    <input type="text" name="cat_slug" class="border px-3 py-2 w-full">
                </div>

                <div class="flex mb-3 flex-col gap-2">
                    <label for="">Category Description</label>
                    <textarea row="5" name="cat_desc" class="border px-3 py-2 w-full"></textarea>
                </div>

                <div class="flex mb-3 flex-col gap-2">
                    <input type="submit" name="submit" class="bg-teal-600 text-white px-3 py-2 rounded" value="Insert Category">
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<?php

    if (isset($_POST['submit'])) {
        $data =[
        'cat_title' => $_POST['cat_title'],
        'cat_slug' => $_POST['cat_slug'],
        'cat_desc' => $_POST['cat_desc']
        ];

        if (insertData('categories', $data)) {
            redirect("manage-categories.php");
        } else {
            message("somthing went wrong");
        }

    }

?>