<h1>Games</h1>
<table class="table">
    <thead>

    <tr>
        <th class="">#</th>
        <th class="col">name</th>
        <th class="col">
            <a href="/game/add">
                <i class="fas fa-plus"></i>
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($games as $game): ?>
        <tr>
            <td><?= $game->getId(); ?></td>
            <td>
                <img class="img-thumbnail" style="max-width: 64px;" src="<?= $game->getImage(); ?>"/>
                <?= $game->getName(); ?></td>
            <td>
                <a href="/game/show?id=<?= $game->getId(); ?>">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="/game/edit?id=<?= $game->getId() ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="/game/delete?id=<?= $game->getId(); ?>" onclick="return confirm('Are you sure you want to delete it?')">
                    <i class="fas fa-trash"></i>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
