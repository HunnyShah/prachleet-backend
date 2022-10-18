<?= view('layout.header') ?>

        <section class="w3-padding">

            <h2>Edit Description</h2>

            <form method="post" action="/descs/edit/<?= $desc->id ?>" novalidate>
                <?= csrf_field() ?>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="<?= old('name', $desc->name) ?>">
                <span style="color:red;"><?= $errors->first('name'); ?></span>
                <br>

                <label for="rate">Rate:</label>
                <input  type="number" name="rate" id="rate" value="<?= old('rate', $desc->rate) ?>">
                <span style="color:red;"><?= $errors->first('rate'); ?></span>
                <br>
                
                <label for="cast">Cast:</label>
                <input  type="text" name="cast" id="cast" value="<?= old('cast', $desc->cast) ?>">
                <span style="color:red;"><?= $errors->first('cast'); ?></span>
                <br>
                
                <label for="info">Info:</label>
                <textarea type="text" name="info" id="info" rows="10"><?= old('info', $desc->info) ?></textarea>
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
                
                <input type="submit" value="Edit Description">
                
            </form>

            <!-- <a href="/console/projects/list">Back to Project List</a> -->
            <p><a href="/descs/list"><i class="fas fa-arrow-circle-left"></i> Return to Description List</a></p>

        </section>

    </body>
</html>