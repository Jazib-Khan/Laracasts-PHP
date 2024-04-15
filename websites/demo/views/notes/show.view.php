<?php require base_path('views/partials/head.php'); ?>

<?php require base_path('views/partials/nav.php'); ?>

<?php require base_path('views/partials/banner.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        
        <p class="mb-6">
            <a href="/notes" class="text-blue-500">Go back...</a>
        </p>

        <p><?= htmlspecialchars($note['body']) ?></p>    

        <form class="mt-6" method="POST">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded mt-4">Delete</button>
        </form>
    </div>
</main>
    
<?php require base_path('views/partials/footer.php'); ?>