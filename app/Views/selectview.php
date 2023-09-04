<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                
        </thead>
        <tbody>
            <?php foreach ($student as $item) : ?>
                <tr>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['email'] ?></td>
                </tr>
            <?php endforeach ?>
           
        </tbody>
    </table>
</div>
