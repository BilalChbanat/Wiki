<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/output.css" rel="stylesheet">
    <link rel="icon" href="./assets/images/logo.svg">
    <title>Login</title>
</head>

<body>
    <?php require_once('includes/header.php'); ?>
    <div class="relative py-16 bg-gradient-to-tr from-blue-950 to-purple-600 h-[100vh] flex">
        <div class="container relative m-auto px-6 text-gray-500 md:px-12 xl:px-40">
            <div class="m-auto space-y-8 md:w-8/12 lg:w-6/12 xl:w-6/12">
                <div class="rounded-3xl border border-gray-100 bg-white  shadow-gray-600/80 backdrop-blur-2xl">
                    <div class="p-8 py-12 sm:p-16 ">
                        <div class="flex items-center justify-center mb-8">
                            <img src="./assets/images/logo.svg" loading="lazy" class="ml-4 w-[3rem]" alt="wiki logo" />
                            <h2 class=" text-2xl font-bold text-gray-800 ">Sign in to your account</h2>
                        </div>
                        <form action="http://localhost:8000/loginAction" method="POST" class="space-y-8">
                            <div class="space-y-2">
                                <label for="email" class="text-gray-600 ">Email</label>
                                <input type="email" name="email" id="email" autocomplete="username"
                                    class="focus:outline-none block w-full rounded-md border border-gray-200  bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-900" />
                            </div>

                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="pwd" class="text-gray-600 ">Password</label>
                                    <button class="-mr-2 p-2" type="reset">
                                        <span class="text-sm text-primary">Forgot your password ?</span>
                                    </button>
                                </div>
                                <input type="password" name="password" id="pwd" autocomplete="current-password"
                                    class="focus:outline-none block w-full rounded-md border border-gray-200  bg-transparent px-4 py-3 text-gray-600 transition duration-300 invalid:ring-2 invalid:ring-red-400 focus:ring-2 focus:ring-cyan-900" />
                            </div>

                            <button type="submit"
                                class="bg-[#007FEC] rounded-2xl relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                                <span class="relative text-base font-semibold text-white ">Connect</span>
                            </button>

                            <p class="border-t border-gray-100  pt-6 text-sm text-gray-500 ">
                                Don't have an account ?
                                <a href="#" class="text-[#007FEC]">Sign up</a>
                            </p>
                        </form>
                    </div>
                </div>
                <div class="space-x-4 text-center text-white">
                    <span class="cursor-pointer">&copy; Wiki</span>
                    <a href="#" class="cursor-pointer text-sm hover:text-gray-300">Contact</a>
                    <a href="#" class="cursor-pointer text-sm hover:text-primary">Privacy & Terms</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>