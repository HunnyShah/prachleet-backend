<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

          <h2>Manage Movies</h2>

          <table>
            <tr>
              <th>Photo</th>
              <th align="left">Name</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
            <?php foreach($watchList as $record): ?>
              <tr>
                <td align="center">
                  <img width="200px" src="<?php echo $record['photo']; ?>">
                </td>
                <td align="left">
                  <?php echo htmlentities( $record['name'] ); ?>
                </td>
                
                <td align="center"><a href="/watchs/image/<?php echo $record['id']; ?>">Photo</i></a></td>
                <td align="center"><a href="/watchs/editform/<?php echo $record['id']; ?>">Edit</i></a></td>
                <td align="center">
                  <a href="/watchs/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this Movie?');">Delete</i></a>
                </td>
                <td>
                <form action="/wishlist/add" method="post">
                  <?= csrf_field() ?>
                  <input type="hidden" name="userid" value="<?php echo auth()->user()->id ?>" />
                  <input type="hidden" name="watchid" value="<?php echo $record['id']; ?>" />
                  <button>Add to WishList</button>
                </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>

            <!-- <a href="/console/projects/add" class="w3-button w3-green">New Project</a> -->
          <p><a href="/watchs/addform"><i class="fas fa-plus-square"></i> Add Movies</a></p>

        </section>

    </body>
</html>