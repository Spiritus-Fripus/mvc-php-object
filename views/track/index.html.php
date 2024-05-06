<div class="container">
    <h2>Tracks</h2>
    <div class="row">
        <div class="col">
            <table class="table">
                <tbody>
                    <?php foreach ($tracks as $track) : ?>
                        <tr>
                            <td> <?= $track['title'] ?></td>
                            <td> <?= $track['duration'] ?> sec</td>
                        </tr>


                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>