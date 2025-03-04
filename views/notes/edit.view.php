<?php
require('views/partials/header.php');
require('views/partials/nav.php');
require('views/partials/banner.php');
?>


<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <form action="/note/edit?id=<?= $note['id'] ?>" method="POST">
            <input type='hidden' name='_method' value='PATCH'>
            <input type='hidden' name='id' value='<?= $note['id'] ?>'>

            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">

                    <div class="col-span-full">
                        <label for="note" class="block text-sm font-medium leading-6 text-gray-900">Note</label>
                        <div class="mt-2">
                            <textarea id="note" name="note" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"> <?= htmlspecialchars($note['note'])  ?> </textarea>

                            <?php if (isset($error['body'])): ?>

                                <p class="text-s text-red-500 mt-2"> <?= $error['body'] ?> </p>

                            <?php endif ?>


                        </div>

                    </div>

                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href='/notes' class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </form>


    </div>
</main>