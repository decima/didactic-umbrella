<h1>Players</h1>
<table class="table">
    <thead>

    <tr>
        <th class="">#</th>
        <th class="col">username</th>
        <th class="col">email</th>
        <th class="col">
            <a href="/player/add">
                <i class="fas fa-plus"></i>
            </a>
        </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($players as $player): ?>
        <tr>
            <td><?= $player["id"]; ?></td>
            <td> <?= $player["username"]; ?></td>
            <td> <?= $player["email"]; ?></td>
            <td>
                <a href="/player/show?id=<?= $player["id"]; ?>">
                    <i class="fas fa-eye"></i>
                </a>
                <a href="/player/edit?id=<?= $player["id"]; ?>">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="/player/delete?id=<?= $player["id"]; ?>"
                   onclick="return confirm('Are you sure you want to delete it?')">
                    <i class="fas fa-trash"></i>
                </a>

            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
