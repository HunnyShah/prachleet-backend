<?= view('layout.header') ?>

        <section class="w3-padding">

            <h2>Edit Movie</h2>

            <form method="post" action="/watchs/edit/<?= $watch->id ?>" novalidate>
                <?= csrf_field() ?>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="<?= old('name', $watch->name) ?>">
                <span style="color:red;"><?= $errors->first('name'); ?></span>
                <br> 
                
                <input type="submit" value="Edit Movie">
            
            </form>

            <p><a href="/watchs/list"><i class="fas fa-arrow-circle-left"></i> Return to Movie List</a></p>

        </section>

    </body>
</html>