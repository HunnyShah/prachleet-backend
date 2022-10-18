<?= view('layout.header') ?> 

        <section class="w3-padding">

            <h2>Add Movie</h2>

            <form method="post" action="/watchs/add" novalidate>
            <?= csrf_field() ?>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?= old('name') ?>">
            <span style="color:red;"><?= $errors->first('name'); ?></span>
            <br>
            
            <br>
            
            <input type="submit" value="Add Movie">
            
            </form>
            <p><a href="/watchs/list"><i class="fas fa-arrow-circle-left"></i> Return to WatchList</a></p>

        </section>

    </body>
</html>