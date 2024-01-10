<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <link rel="icon" href="./assets/images/logo.svg">
    <script src="https://cdn.tiny.cloud/1/fhs9rnni88hr58gzeurtvemnquyj1fvmgwcs7cvmvwpgu94u/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <link rel="stylesheet" href="./assets/css/output.css">
    <script src="https://cdn.tiny.cloud/1/fhs9rnni88hr58gzeurtvemnquyj1fvmgwcs7cvmvwpgu94u/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Wiki Form</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="overflow-scroll">
    <nav class=" z-99 w-full bg-white relative md:bg-white lg:bg-white">
        <div class="container m-auto px-2 md:px-12 lg:px-7">
            <div class="flex flex-wrap items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
                <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
                <div class="w-full px-6 flex justify-between lg:w-max md:px-0 z-30">
                    <a href="#" aria-label="logo" class="flex space-x-2 items-center">
                        <img src="./assets/images/logo.svg" class="w-12" alt="wiki logo" width="144" height="133">
                        <span class="text-2xl font-bold text-blue-900">Wiki</span>
                    </a>

                    <div class="flex items-center lg:hidden max-h-10">
                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger"
                            class="relative w-10 h-auto p-2">
                            <div id="line" class="m-auto h-0.5 w-6 rounded bg-blue-900 transition duration-300">
                            </div>
                            <div id="line2" class="m-auto mt-2 h-0.5 w-6 rounded bg-blue-900 transition duration-300">
                            </div>
                        </label>
                    </div>
                </div>

                <label role="button" for="toggle_nav"
                    class="hidden peer-checked:block fixed w-full h-full left-0 top-0 z-10 bg-blue-200 bg-opacity-30 backdrop-blur backdrop-filter"></label>
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
    <div class="bg-gray-100 transition-colors duration-300 w-[100vw] h-[100vh]">
        <div class="container mx-auto p-4">
            <div class="bg-white shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900">Wiki Information</h1>
                <p class="text-gray-600  mb-6">Use a permanent address where you can receive mail.</p>
                <form action="" method="POST">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <input type="text" placeholder="Wiki title" class="border p-2 rounded w-full" name="title"
                            required>
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="Email address" class="border p-2 rounded w-full" name="email"
                            required>
                    </div>
                    <div class="mb-4">
                        <select class="border p-2 rounded w-full">
                            <option>Health</option>
                            <option>Technologies</option>
                            <option>Beauty</option>
                            <option>Home</option>
                            <option>Countries</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  hover:bg-gray-100 ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg class="w-8 h-8 mb-4 text-gray-500 " aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 "><span class="font-semibold">Click to
                                        upload</span>
                                    or drag and drop</p>
                                <p class="text-xs text-gray-500 ">SVG, PNG, JPG or GIF (MAX.
                                    800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>

                    <div class="mb-4">
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <button type="button" id="theme-toggle"
                        class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                        Toggle Theme
                    </button>
                </form>
            </div>
        </div>

    </div>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [
                { value: 'First.Name', title: 'First Name' },
                { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
</body>

</html>