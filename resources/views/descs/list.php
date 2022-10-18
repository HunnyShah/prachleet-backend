<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

            <h2>Manage Movie Description</h2>

            <table>
              <tr>
                <th>Photo</th>
                <th align="left">Name</th>
                <th align="left">Rate</th>
                <th align="left">Cast</th>
                <th align="left">Info</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
              <?php foreach($descsList as $record): ?>
                <tr>
                  <td align="center">
                    <img width="200px" src="<?php echo $record['photo']; ?>">
                  </td>
                  <td align="left">
                    <?php echo htmlentities( $record['name'] ); ?>
                  </td>
                  <td align="left">
                    <?php echo htmlentities( $record['rate'] ); ?>
                  </td>
                  <td align="left">
                    <?php echo htmlentities( $record['cast'] ); ?>
                  </td>
                  <td align="left">
                    <?php echo htmlentities( $record['info'] ); ?>
                  </td>
                  
                  <td align="center"><a href="/descs/image/<?php echo $record['id']; ?>">Photo</i></a></td>
                  <td align="center"><a href="/descs/editform/<?php echo $record['id']; ?>">Edit</i></a></td>
                  <td align="center">
                    <a href="/descs/delete/<?php echo $record['id']; ?>" onclick="javascript:confirm('Are you sure you want to delete this Movie?');">Delete</i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </table>
            <p><a href="/descs/addform"><i class="fas fa-plus-square"></i> Add Description</a></p>

        </section>

    </body>
</html>