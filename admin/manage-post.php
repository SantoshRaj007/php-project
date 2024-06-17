<?php
    include_once "../config/function.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Post | Shop</title>
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
                <h2 class="text-2xl font-semibold ">Manage Post</h2>
                <a href="insert-post.php" class="bg-green-600 text-white px-3 py-2 rounded">Insert Post</a>
            </div>
            <table class="table w-full mt-4">
                <thead>
                    <tr>
                        <th class="py-2 border">Id</th>
                        <th class="py-2 border">Title</th>
                        <th class="py-2 border">Slug</th>
                        <th class="py-2 border">Description</th>
                        <th class="py-2 border">Author</th>
                        <th class="py-2 border">Category</th>
                        <th class="py-2 border">Status</th>
                        <th class="py-2 border">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $calling = callingData('posts JOIN categories on categories.cat_id = posts.category_id');
                        foreach($calling as $post):
                    ?>
                    <tr>
                       <td class="p-2 border"><?= $post['id']?></td> 
                       <td class="p-2 border"><?= $post['title']?></td> 
                       <td class="p-2 border"><?= $post['slug']?></td> 
                       <td class="p-2 border"><?= $post['description']?></td> 
                       <td class="p-2 border"><?= $post['author_id']?></td> 
                       <td class="p-2 border"><?= $post['category_id']?></td> 
                       <td class="p-2 border"></td> 
                       <td class="p-2 border"></td> 
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>