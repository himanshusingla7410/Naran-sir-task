<?php require('views/partials/header.php') ?>
<?php require('views/partials/nav.php') ?>
<?php require('views/partials/banner.php') ?>



<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach ($notes as $note) : ?>
            <ul>
                <a href="/note?id=<?=$note['id'] ?> " class="font-bold text-blue-500 hover:underline"><?= htmlspecialchars($note['note']) ?></a>
            </ul> 
        <?php endforeach ?>
        
    </div>
</main>





<?php require('views/partials/footer.php') ?>