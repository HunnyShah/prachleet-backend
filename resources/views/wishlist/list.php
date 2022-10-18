<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

          <h2>Manage Wishlist</h2>

            <table>
                <tr>
                    <th>Image</th>
                    <th>Movie</th>
                    <th></th>
                </tr>
                <?php foreach($wishlist as $item): ?>
                    <tr>
                        <td><img width="200px" src="<?= $item->photo ?>"></td>
                        <td><?= $item->name ?></td>
                        
                        <td><a href="/wishlist/delete/<?php echo $item->id; ?>" onclick="javascript:confirm('Are you sure you want to delete this Movie?');">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/watchs/list" class="w3-button w3-green">Back to Movies</a>

        </section>

    </body>
</html>