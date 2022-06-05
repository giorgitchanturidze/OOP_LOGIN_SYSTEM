<?php
    session_start();
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/output.css" rel="stylesheet">
</head>
<header>
    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
            </svg>
            <span  class="font-semibold text-xl tracking-tight">Pproduct CRUD</span>
        </div>
        <div class="block lg:hidden">
            <button  class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="index.php" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">HOME</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">PRODUCTS</a>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">CREATE PRODUCTS</a>
            </div>
        </div>
        <div>
            <?php if (isset($_SESSION["userid"])) : ?>
                <a href="#" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4" ><?php echo $_SESSION["useruid"] ?></a>
                <a href="includes/logout.inc.php" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">LOGOUT</a>
            <?php else : ?>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0" >SIGN UP</a>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">LOGIN</a>
            <?php endif; ?>
        </div>
    </nav>
</header>

<body >
    <section class="index-login" >
        <div class="flex items-center justify-center min-h-screen bg-teal-100">
            <div class="px-8 py-6 mx-4 mt-4 text-left bg-teal-500 shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
                <h4 class="text-4xl font-bold text-center">SIGN UP</h4>
                <p class="text-2xl font-bold text-center">Dont't have an account yet? Sign up here!</p>
                <form action="includes/signup.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-800">
                    <input type="password" name="pwd" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-800">
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-800">
                    <input type="tetx" name="email" placeholder="E-mail" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-800">
                    <button type="submit" name="submit" class="w-full px-6 py-2 mt-4 text-white bg-teal-800 rounded-lg hover:bg-teal-900">SIGN UP</button>
                </form>
            </div>
            <div class="px-8 py-6 mx-4 mt-4 text-left bg-teal-500 shadow-lg md:w-1/3 lg:w-1/3 sm:w-1/3">
                <h4 class="text-4xl font-bold text-center">LOGIN</h4>
                <p class="text-2xl font-bold text-center">Have an account yet? Login here!</p>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="uid" placeholder="Username" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-800">
                    <input type="password" name="pwd" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-800">
                    <button type="submit" name="submit" class="w-full px-6 py-2 mt-4 text-white bg-teal-800 rounded-lg hover:bg-teal-900">LOGIN</button>
                </form>
            </div>
        </div>
    </section>

</body>

</html>