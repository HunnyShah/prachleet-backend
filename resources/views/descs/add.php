<?= view('layout.header') ?>

        <section class="w3-padding">

            <h2>Add Description</h2>

            <form method="post" action="/descs/add" novalidate>
                <?= csrf_field() ?>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="<?= old('name') ?>">
                <span style="color:red;"><?= $errors->first('name'); ?></span>
                <br>
                
                <label for="rate">Rate:</label>
                <input class="form-control" type="number" name="rate" id="rate" value="<?= old('rate') ?>">
                <span style="color:red;"><?= $errors->first('rate'); ?></span>
                <br>

                <label for="cast">Cast:</label>
                <input class="form-control" type="text" name="cast" id="cast" value="<?= old('cast') ?>">
                <span style="color:red;"><?= $errors->first('cast'); ?></span>
                <br>

                <label for="info">Info:</label>
                <textarea type="text" name="info" id="info" rows="10"><?= old('info') ?></textarea>
                <span style="color:red;"><?= $errors->first('info'); ?></span>
                    
                <script>

                ClassicEditor
                    .create( document.querySelector( '#info' ) )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
                    
                </script>
                
                <br>
                
                <input type="submit" value="Add Description">
                
            </form>

            <p><a href="/descs/list"><i class="fas fa-arrow-circle-left"></i> Return to Description List</a></p>

        </section>

    </body>
</html>