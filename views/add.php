<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <link rel="icon" href="./assets/images/logo.svg">
    <script src="https://cdn.tiny.cloud/1/fhs9rnni88hr58gzeurtvemnquyj1fvmgwcs7cvmvwpgu94u/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
    <script>
        function dropdown() {
            return {
                options: [],
                selected: [],
                show: false,
                open() { this.show = true },
                close() { this.show = false },
                isOpen() { return this.show === true },
                select(index, event) {

                    if (!this.options[index].selected) {

                        this.options[index].selected = true;
                        this.options[index].element = event.target;
                        this.selected.push(index);

                    } else {
                        this.selected.splice(this.selected.lastIndexOf(index), 1);
                        this.options[index].selected = false
                    }
                },
                remove(index, option) {
                    this.options[option].selected = false;
                    this.selected.splice(index, 1);


                },
                loadOptions() {
                    const options = document.getElementById('select').options;
                    for (let i = 0; i < options.length; i++) {
                        this.options.push({
                            value: options[i].value,
                            text: options[i].innerText,
                            selected: options[i].getAttribute('selected') != null ? options[i].getAttribute('selected') : false
                        });
                    }


                },
                selectedValues() {
                    return this.selected.map((option) => {
                        return this.options[option].value;
                    })
                }
            }
        }
    </script>
    <style>
        [x-cloak] {
            display: none;
        }

        .svg-icon {
            width: 1em;
            height: 1em;
        }

        .svg-icon path,
        .svg-icon polygon,
        .svg-icon rect {
            fill: #333;
        }

        .svg-icon circle {
            stroke: #4691f6;
            stroke-width: 1;
        }
    </style>
</head>

<body class="overflow-x-hidden bg-[#F3F4F6] h-full">

    <?php if (!isset($_SESSION['email'])) {
        echo '<script type="text/javascript">';
        echo 'window.location.href = "/login";';
        echo '</script>';
    } ?>

    <?php require_once('includes/header.php'); ?>

    <div class="bg-gray-100 transition-colors duration-300 w-[100vw] h-[100vh] pt-[5rem]">
        <div class="container mx-auto  p-4">
            <div class="bg-white shadow rounded-lg p-6">
                <h1 class="text-xl font-semibold mb-4 text-gray-900">Wiki Information</h1>
                <p class="text-gray-600  mb-6">Use a permanent address where you can receive mail.</p>
                <form action="http://localhost:8000/addWikiAction" method="post" enctype="multipart/form-data">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <input type="text" placeholder="Wiki title" class="border p-2 rounded w-full" name="title"
                            required>
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="Email address"
                            class="border p-2 rounded w-full cursor-not-allowed" name="email" disabled
                            value="<?= $_SESSION['email'] ?>">
                    </div>
                    <div class="mb-4">
                        <select name="category" class="border p-2 rounded w-full">
                            <?php foreach ($category as $cat): ?>
                                <option value="<?= $cat['id'] ?>">
                                    <?php echo $cat['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="h-[6rem]">
                        <select name="tags[]" class="border p-2 rounded w-[100vw]" x-cloak id="select"
                            multiple="multiple">
                            <?php foreach ($tags as $tag): ?>
                                <option value="<?= $tag['id'] ?>">
                                    <?php echo $tag['name']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>

                        <div x-data="dropdown()" x-init="loadOptions()"
                            class="w-full md:w-1/2 flex flex-col items-center h-64 mx-auto">
                            <input name="values" type="hidden" x-bind:value="selectedValues()">
                            <div class="inline-block relative w-64">
                                <div class="flex flex-col items-center relative">
                                    <div x-on:click="open" class=" rounded w-[76vw]">
                                        <div class="my-2 p-1 flex border border-gray-200 bg-white rounded w-[75vw]">
                                            <div class="flex flex-auto flex-wrap">
                                                <template x-for="(option,index) in selected"
                                                    :key="options[option].value">
                                                    <div
                                                        class="flex justify-center items-center m-1 font-medium py-1 px-1  rounded bg-gray-100 border ">
                                                        <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                                            options[option] x-text="options[option].text"></div>
                                                        <div class="flex flex-auto flex-row-reverse">
                                                            <div x-on:click.stop="remove(index,option)">
                                                                <svg class="fill-current h-4 w-4 " role="button"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                           c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                           l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                           C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                </svg>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                                <div x-show="selected.length == 0" class="flex-1">
                                                    <input placeholder="Select a option"
                                                        class="bg-transparent p-1 px-2 appearance-none outline-none h-full w-full text-gray-800"
                                                        x-bind:value="selectedValues()">
                                                </div>
                                            </div>
                                            <div
                                                class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200 svelte-1l8159u">

                                                <button type="button" x-show="isOpen() === true" x-on:click="open"
                                                    class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                    <svg version="1.1" class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                        <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
    c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
    L17.418,6.109z" />
                                                    </svg>

                                                </button>
                                                <button type="button" x-show="isOpen() === false" @click="close"
                                                    class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
                                                    <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                                        <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
    c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
    " />
                                                    </svg>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full px-4">
                                        <div x-show.transition.origin.top="isOpen()"
                                            class="absolute shadow top-100 bg-white z-40 w-full left-0 rounded max-h-select"
                                            x-on:click.away="close">
                                            <div class="flex flex-col overflow-y-auto h-64 ">
                                                <template x-for="(option,index) in options" :key="option"
                                                    class="overflow-auto">
                                                    <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-gray-100"
                                                        @click="select(index,$event)">
                                                        <div
                                                            class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative">
                                                            <div class="w-full items-center flex justify-between">
                                                                <div class="mx-2 leading-6" x-model="option"
                                                                    x-text="option.text"></div>
                                                                <div x-show="option.selected">
                                                                    <svg class="svg-icon" viewBox="0 0 20 20">
                                                                        <path fill="none" d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                            C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                            L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                            <input id="dropzone-file" type="file" class="hidden" name="image" />
                        </label>
                    </div>

                    <div class="mb-4">
                        <textarea name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                    <button type="submit" name="addwiki" id="theme-toggle"
                        class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                        Add Wiki
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>