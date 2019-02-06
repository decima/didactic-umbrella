<h1></h1>

<form method="POST" action="#">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="string" class="form-control" id="username" aria-describedby="username" placeholder="" value="<?= $player["username"];?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="string" class="form-control" id="email" aria-describedby="email" placeholder="" value="<?= $player["email"];?>">
    </div>

    <button type="submit" class="btn btn-primary">Save</button>


</form>