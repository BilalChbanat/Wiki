<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/output.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <link rel="icon" href="./assets/images/logo.svg">
    <title>Wiki Search</title>
</head>

<body>
    <?php require_once('includes/header.php'); ?>
    <div class="pt-48 pb-12 ">
        <div id="card" class="">
            <!-- container for all cards -->
            <div class="container w-100 lg:w-4/5 mx-auto flex flex-col">
                <!-- search bar -->
                <form action="" class="w-full mt-12">
                    <div class="relative flex p-1 rounded-full bg-white  border-blue-200 shadow-md md:p-2">

                        <input placeholder="Search ..." class="w-full p-4 rounded-full outline-none bg-transparent "
                            type="text" id="live_search">
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
                <!-- card -->
                <div id="searchResultsContainer" v-for="card in cards" class="flex flex-col  overflow-hidden">

                    <?php foreach ($wikis as $wiki): ?>

                        <div class="flex my-12 bg-white rounded-lg shadow-2xl  mt-4 w-100 mx-2">
                            <div class="h-64 w-auto md:w-1/2">
                                <img class="inset-0 h-full w-full object-cover object-center" src="./<?= $wiki['img'] ?>" />
                            </div>
                            <div class="w-full py-4 px-6 text-gray-800 flex flex-col justify-between">
                                <h3 class="font-semibold text-lg leading-tight truncate">
                                    <?= $wiki['title'] ?>
                                </h3>
                                <p class="mt-2">
                                    <?= $wiki['description'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('includes/footer.php'); ?>
    <script>
        $(document).ready(function () {
            $('#live_search').on("input", function () {
                var input = $(this).val();
                console.log(input);
                if (input != "") {
                    $.ajax({
                        method: 'POST',
                        url: 'http://localhost:8000/search',
                        data: { input: input },
                        success: function (response) {
                            $("#searchResultsContainer").html(response);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>