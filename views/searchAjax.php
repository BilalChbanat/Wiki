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