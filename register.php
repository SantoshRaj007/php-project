<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Web | App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include_once  "includes/header.php"; ?>

    <div class="flex flex-1 justify-center items-center h-[80vh]">
        <div class="w-4/12">
            <div class="border bg-slate-200 p-4">
                <div class="flex">
                    <h2 class="text-3xl my-3 font-semibold text-slate-600 uppercase text-center">SignUp User</h2>
                </div>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="">Full Name</label>
                        <input type="text" name="name" class="border px-3 py-2 rounded w-full" placeholder="e.g Santosh Singh">
                    </div>
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" class="border px-3 py-2 rounded w-full" placeholder="e.g email@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="">Create Password</label>
                        <input type="password" name="password" class="border px-3 py-2 rounded w-full" placeholder="e.g ********">
                    </div>
                    <div class="mb-3">
                        <label for="">Confirm Password</label>
                        <input type="password" name="password" class="border px-3 py-2 rounded w-full" placeholder="e.g ********">
                    </div>
                    <div class="mb-3">
                        <input type="submit" name="signup" class="text-white text-xl font-semibold bg-teal-600 w-full px-3 py-3 rounded-md" value="Create an account">
                    </div>
                </form>
                <div class="flex justify-between">
                    <h2 class="text-sm my-3 font-semibold text-slate-600 uppercase">Already have an account?</h2>
                    <a href="login.php" class="text-sm my-3 font-semibold text-slate-600 uppercase cursor-pointer">Login</a>
                </div>
            </div>
        </div>
    </div>
    
    <?php include_once  "includes/footer.php"; ?>
    
</body>
</html>