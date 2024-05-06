<div class="container">
    <h2>Artists</h2>
    <div class="row">
        <div class="col">
            <table class="table">
                <tbody>
                    <?php foreach ($artists as $artist) : ?>
                        <tr>
                            <td><?= $artist['name'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <button class="btn btn-primary btn-dark">
        <a class="navbar-brand" href="?controller=artist&action=create">Add Artist</a>
    </button>
</div>