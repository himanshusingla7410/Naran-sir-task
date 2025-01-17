<?php require('views/partials/header.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>



<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p><?= $note['note'] ?></p> 
       <div class="flex items-center justify-between">
            <div class="mt-8">
                <a href="note/edit?id=<?= $note['id'] ?>"class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
            </div>
            <form action="/note?<?= $note['id'] ?>" method='POST'>
                <input type ='hidden' name= '_method' value ='DELETE'>
                <input type ='hidden' name= 'id' value ='<?= $note['id'] ?>'>

                <div class="mt-8">
                    <button type ='submit' class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete</button>
                </div>
            </form>
            
       </div> 
        
    </div>

    
</main>





<?php require('views/partials/footer.php') ?>