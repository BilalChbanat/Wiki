<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/logo.svg">
    <link href="./assets/css/output.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>wiki</title>
</head>

<body class="bg-white overflow-x-hidden">
    <?php require_once('includes/header.php'); ?>
    <div class="relative bg-blue-50 pb-16">
        <div class="container m-auto px-6 pt-32 md:px-12 lg:pt-[4.8rem] lg:px-7">
            <div class="flex items-center flex-wrap px-2 md:px-0 justify-between">
                <div class="relative lg:w-6/12 lg:py-24 xl:py-32">
                    <h1 class="font-bold text-4xl text-blue-900  md:text-5xl lg:w-10/12">Info at your head: Accessible
                        knowledge, digital impact.</h1>

                    <p class="mt-8 text-gray-700  lg:w-10/12">Sit amet consectetur adipisicing
                        elit.
                        <a href="#" class="text-blue-700 ">connection</a> tenetur nihil
                        quaerat
                        suscipit, sunt dignissimos.
                    </p>
                    <form action="" class="w-full mt-12">
                        <div class="relative flex p-1 rounded-full bg-white  border-blue-200 shadow-md md:p-2">

                            <input placeholder="Your favorite food"
                                class="w-full p-4 rounded-full outline-none bg-transparent " type="text">
                            <button type="button" title="Start buying"
                                class="ml-auto py-3 px-6 rounded-full text-center transition bg-gradient-to-b from-blue-200 to-blue-300 hover:to-blue-400 active:from-blue-400 focus:from-blue-400 md:px-12">
                                <span class="hidden text-blue-900 font-semibold md:block">
                                    Search
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 mx-auto text-blue-900 md:hidden"
                                    fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="">
                    <img src="./assets/images/logo.svg" class="hidden relative w-[26vw] h-auto lg:block" alt="Wiki"
                        loading="lazy" width="100" height="450">
                </div>
            </div>

        </div>
    </div>

    <div class="py-20 h-[150%] mt-8">
        <div class="xl:container mx-auto md:px-12">
            <div class="mb-16 md:w-2/3 lg:w-1/2">
                <h2 class="mb-4 text-2xl font-bold text-gray-800  md:text-4xl">
                    wiki Popular categories
                </h2>
                <p class="text-gray-600 ">
                    wiki prides itself not only on award-winning technology, but also on the talent of its
                    people of some of the brightest minds and most experienced executives in business.
                </p>
            </div>
            <div class="grid gap-6 px-4 sm:px-0 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <div class=" cursor-pointer group relative rounded-3xl  space-y-6 overflow-hidden" data-aos="zoom-in"
                    data-aos-offset="5" data-aos-duration="1200" data-aos-anchor-placement="left-left">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="./assets/images/chafchaone.svg" alt="woman" loading="lazy" width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800  translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold  text-white">Hentoni Doe</h4>
                            <span class="block text-sm text-gray-500">CEO-Founder</span>
                        </div>
                        <p class="mt-8 text-gray-300 ">Quae labore quia tempora dolor impedit.
                            Possimus,
                            sint ducimus ipsam?</p>
                    </div>

                </div>
                <div class=" cursor-pointer group relative rounded-3xl  space-y-6 overflow-hidden" data-aos="flip-right"
                    data-aos-offset="0" data-aos-duration="1200" data-aos-anchor-placement="right-right">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="./assets/images/marrakech.svg" alt="woman" loading="lazy" width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800  translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold  text-white">Hentoni Doe</h4>
                            <span class="block text-sm text-gray-500">CEO-Founder</span>
                        </div>
                        <p class="mt-8 text-gray-300 ">Quae labore quia tempora dolor impedit.
                            Possimus,
                            sint ducimus ipsam?</p>
                    </div>

                </div>
                <div class=" cursor-pointer group relative rounded-3xl  space-y-6 overflow-hidden" data-aos="zoom-in"
                    data-aos-offset="5" data-aos-duration="1200" data-aos-anchor-placement="left-left">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top transition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="./assets/images/essaouira.svg" alt="woman" loading="lazy" width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800  translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold  text-white">Hentoni Doe</h4>
                            <span class="block text-sm text-gray-500">CEO-Founder</span>
                        </div>
                        <p class="mt-8 text-gray-300 ">Quae labore quia tempora dolor impedit.
                            Possimus,
                            sint ducimus ipsam?</p>
                    </div>

                </div>
                <div class=" cursor-pointer group relative rounded-3xl  space-y-6 overflow-hidden" data-aos="flip-right"
                    data-aos-offset="0" data-aos-duration="1200" data-aos-anchor-placement="right-right">
                    <img class="mx-auto h-[26rem] w-full grayscale object-cover object-top ransition duration-500 group-hover:scale-105 group-hover:grayscale-0"
                        src="./assets/images/fez.svg" alt="woman" loading="lazy" width="640" height="805" />
                    <div
                        class="absolute bottom-0 inset-x-0 h-max mt-auto px-8 py-6 bg-gray-800  translate-y-24 transition duration-300 ease-in-out group-hover:translate-y-0">
                        <div>
                            <h4 class="text-xl font-semibold  text-white">Hentoni Doe</h4>
                            <span class="block text-sm text-gray-500">CEO-Founder</span>
                        </div>
                        <p class="mt-8 text-gray-300 ">Quae labore quia tempora dolor impedit.
                            Possimus,
                            sint ducimus ipsam?</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="py-16">
        <div class="px-[8rem] pl-[10rem] mb-16  flex justify-between w-[100vw]">
            <h2 class="mb-4 text-2xl font-bold text-gray-800  md:text-4xl">Latest wikis </h2>
            <a href="http://localhost:8000/add"
                class="text-center bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded cursor-pointer">
                Button
            </a>
        </div>
        <div class="xl:container m-auto px-6 text-gray-600 md:px-12 xl:px-6">
            <div class="grid gap-12 md:gap-6 md:grid-cols-2 lg:gap-12">
                <div class="cursor-pointer group space-y-6" data-aos="fade-right"
                    data-aos-anchor-placement="right-right" data-aos-duration="1200">
                    <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2832&q=80"
                        alt="art cover" loading="lazy" width="1000" height="667"
                        class="h-80 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl" />
                    <h3 class="text-3xl font-semibold text-gray-800 ">
                        Flipper and JS: why we added JavaScript support to a mobile debugging platform
                    </h3>
                    <p class="text-gray-600 ">
                        Finding the right open source project for your first contribution can feel daunting. It took me
                        years to find a repository that fit my skills and interests.
                    </p>
                    <div class="flex gap-6 items-center">
                        <a href="#" class="-ml-1 p-1 rounded-full flex items-center gap-3 hover:bg-gray-50 ">
                            <img class="w-8 h-8 object-cover rounded-full" src="./assets/images/uploads/person1.svg"
                                alt="">
                            <span class="hidden sm:block font-semibold text-base text-gray-600 ">Bernard
                                Ng.</span>
                        </a>
                        <span class="w-max block font-light text-gray-500 sm:mt-0">Aug 27 2022</span>
                        <div class="flex gap-2 items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-gray-400 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>2 min read</span>
                        </div>
                    </div>
                </div>
                <div class="cursor-pointer group space-y-6 " data-aos="fade-left" data-aos-anchor-placement="left-left"
                    data-aos-duration="1200">
                    <img src="https://images.unsplash.com/photo-1491895200222-0fc4a4c35e18?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80"
                        alt="art cover" loading="lazy" width="1000" height="667"
                        class="h-80 w-full rounded-3xl object-cover object-top transition-all duration-500 group-hover:rounded-xl" />
                    <h3 class="text-3xl font-semibold text-gray-800 ">
                        Flipper and JS: why we added JavaScript support to a mobile debugging platform
                    </h3>
                    <p class="text-gray-600 ">
                        Finding the right open source project for your first contribution can feel daunting. It took me
                        years to find a repository that fit my skills and interests.
                    </p>
                    <div class="flex flex-wrap gap-6 items-center">
                        <a href="#" class="-ml-1 p-1 rounded-full flex items-center gap-3 hover:bg-gray-50 ">
                            <img class="w-8 h-8 object-cover rounded-full" src="./assets/images/uploads/person1.svg"
                                alt="">
                            <span class="hidden sm:block font-semibold text-base text-gray-600 ">Bernard
                                Ng.</span>
                        </a>
                        <span class="w-max block font-light text-gray-500 sm:mt-0">Aug 27 2022</span>
                        <div class="flex gap-2 items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-gray-400 ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>2 min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('includes/footer.php'); ?>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>