<nav class="fixed z-10 w-full bg-white md:absolute md:bg-transparent">
    <div class="container m-auto px-2 md:px-12 lg:px-7">
        <div class="flex flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
            <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
            <div class="w-full px-6 flex justify-between lg:w-max md:px-0 z-30">
                <a href="#" aria-label="logo" class="flex space-x-2 items-center">
                    <img src="./assets/images/logo.svg" class="w-12" alt="wiki logo" width="144" height="133">
                    <span class="text-2xl font-bold text-blue-900">Wiki</span>
                </a>

                <div class="flex items-center lg:hidden max-h-10">

                    <div id="line" class="m-auto h-0.5 w-6 rounded bg-blue-900 transition duration-300">
                    </div>
                    <div id="line2" class="m-auto mt-2 h-0.5 w-6 rounded bg-blue-900 transition duration-300">
                    </div>

                </div>
            </div>

            <div
                class="hidden peer-checked:flex w-full flex-col lg:flex lg:flex-row justify-end z-30 items-center gap-y-6 p-6 rounded-xl bg-white lg:gap-y-0 lg:p-0 md:flex-nowrap lg:bg-transparent lg:w-7/12">
                <div class="text-gray-600 lg:pr-4 w-full">
                    <ul class="tracking-wide font-medium  text-sm 
                            flex flex-col gap-y-6 lg:gap-y-0 lg:flex-row w-full">
                        <li>
                            <a href="#" class="block md:px-4 transition hover:text-blue-700">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block md:px-4 transition hover:text-blue-700">
                                <span>Wikis</span>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="w-full min-w-max space-y-2 
                        border-blue-200 lg:space-y-0 sm:w-max lg:border-l ">
                    <button type="button" title="Start buying"
                        class="w-full py-3 px-6 text-center rounded-full transition active:bg-blue-200  focus:bg-blue-100 sm:w-max">
                        <span class="block text-blue-950  font-semibold text-sm">
                            Sign up
                        </span>
                    </button>
                    <button type="button" title="Start buying"
                        class="w-full py-3 px-6 text-center rounded-full transition bg-blue-300 hover:bg-blue-100 active:bg-blue-400 focus:bg-blue-300 sm:w-max">
                        <span class="block text-blue-950 font-semibold text-sm">
                            Login
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>