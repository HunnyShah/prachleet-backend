<?= view('layout.header') ?>

        <?php if(session()->has('message')): ?>
            <div class="alert-strip">
                <div class="alert-msg"><?= session()->get('message') ?></div>
            </div>
        <?php endif; ?>

        <section class="w3-padding">

          <h2>Manage User</h2>

            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Password</th> -->
                    <th>Created</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user->first ?> <?= $user->last ?></td>
                        <td><?= $user->email ?></td>
                        <!-- $password = bcrypt('secret'); -->
                        
                        <td><?= $user->created_at->format('M j, Y') ?></td>
                        <td><a href="/console/users/edit/<?= $user->id ?>">Edit</a></td>
                        <td><a href="/console/users/delete/<?= $user->id ?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </section>

    </body>
</html>