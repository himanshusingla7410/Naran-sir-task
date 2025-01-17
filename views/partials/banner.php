<header class="bg-white shadow">
    <div class="flex justify-between items-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading  ?></h1>
        <?php if($_SESSION['id'] ?? false) : ?>
            <a href="/note/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Note</a href="/note/create">
        <?php endif ?>    
    </div>
</header>