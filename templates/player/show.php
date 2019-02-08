<div class="row">
    <h1><?= $player["username"]; ?>
        <small><?= $player["email"]; ?></small>
    </h1>
</div>
<div class="row">
    <form class="form-inline" method="post" action="/player/addgame?id=<?= $player["id"]; ?>">

        <label class="sr-only" for="game">Game</label>
        <select class="custom-select mr-sm-3" id="game" required>
            <option disabled selected>game</option>
            <?php foreach ($availableGames as $game): ?>
                <option value="<?= $game["id"]; ?>"><?= $game["name"]; ?></option>
            <?php endforeach; ?>
        </select>


        <button type="submit" class=" ml-4 btn btn-primary">Add Game</button>
    </form>


</div>
<hr/>
<div class="row">
    <?php foreach ($player["games"] as $game): ?>
        <div class="col-3" style="margin-bottom: 16px;">
            <a href="/game/show?id=<?= $game["id"]; ?>"><img class="img-responsive" src="<?= $game["image"]; ?>"/></a>
        </div>
    <?php endforeach; ?>
</div>