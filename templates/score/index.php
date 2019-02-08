<h1>Last Scores</h1>
<div class="row">
    <div class="col">
        <form class="form-inline" action="#">
            <label class="sr-only" for="game">Game</label>
            <select class="custom-select mr-sm-3" id="game" name="game" required>
                <option disabled selected>game</option>
                <?php foreach ($games as $game): ?>
                    <option value="<?= $game["id"]; ?>"><?= $game["name"]; ?></option>
                <?php endforeach; ?>
            </select>
            <label class="sr-only" for="player">Player</label>
            <select class="custom-select mr-sm-3" id="player" name="player" required>
                <option disabled selected>player</option>
                <?php foreach ($players as $player): ?>
                    <option value="<?= $player["id"]; ?>"><?= $player["username"]; ?></option>
                <?php endforeach; ?>
            </select>
            <label class="sr-only" for="score">Score</label>
            <input type="number" class="form-control mr-sm-3 pull-right" name="score" id="score" placeholder="score" value="0">


            <button type="submit" class=" ml-4 btn btn-primary">Add Score</button>
        </form>
    </div>
</div>
<br/>
<div class="row">
    <table class="table">
        <thead>

        <tr>
            <th class="">#</th>
            <th class="col">user</th>
            <th class="col">game</th>
            <th class="col">score</th>
            <th class="col"></th>

        </tr>
        </thead>
        <tbody>
        <?php foreach ($scores as $score): ?>
            <tr>
                <td><?= $score["id"]; ?></td>
                <td><?= $score["player"]["username"]; ?></td>
                <td><?= $score["game"]["name"]; ?></td>
                <td> <?= $score["score"]; ?></td>
                <td>
                    <a href="/score/delete?id=<?= $score["id"]; ?>"
                       onclick="return confirm('Are you sure you want to delete it?')">
                        <i class="fas fa-trash"></i>
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>


</div>