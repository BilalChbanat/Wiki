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
                <form action="http://localhost:8000/updateWikiAction?id=<?= $wikis['id'] ?>" method="post" enctype="multipart/form-data">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <input type="text" placeholder="Wiki title" class="border p-2 rounded w-full" name="title"
                            value="<?= $wikis['title'] ?>" required>
                    </div>
                    <div class="mb-4">
                        <input type="email" placeholder="Email address"
                            class="border p-2 rounded w-full cursor-not-allowed" name="email" disabled
                            value="<?= $_SESSION['email'] ?>">
                    </div>
                    <div class="mb-4">
                        <select name="category_id" class="border p-2 rounded w-full">
                            <?php foreach ($cat as $cat): ?>
                                <option value="<?= $cat['id'] ?>">
                                    <?php echo $cat['name']; ?>
                                </option>
                            <?php endforeach; ?>
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
                            <input id="dropzone-file" type="file" class="hidden" name="image" />
                        </label>
                    </div>

                    <div class="mb-4">
                        <textarea name="description" id="description" cols="30"
                            rows="10"><?= $wikis['description'] ?></textarea>
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