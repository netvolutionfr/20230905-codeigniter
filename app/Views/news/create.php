<h2><?php echo esc($title); ?></h2>

<?php echo session()->getFlashdata('error'); ?>
<?php echo validation_list_errors(); ?>

<form action="/news" method="post">

    <label for="title">Title</label>
    <input type="text" name="title"><br>

    <label for="body">Text</label>
    <textarea name="body"></textarea><br>

    <input type="submit" name="submit" value="Create news item">
</form>
