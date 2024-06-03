<h1>List Product</h1>

<?php
$scores = [1, 4, 6, 8, 3, 9, 10, 7];
// $scores = [];
?>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Score</th>
        <th>Note</th>
    </tr>
    <?php
    $stt = 1;
    foreach ($scores as $score) :
    ?>
        <tr style="background-color: <?= $stt % 2 == 0 ? 'grey' : '' ?>;">
            <td><?= $stt++ ?></td>
            <td><?= $score ?></td>
            <td><?= $score > 6 ? 'Dat' : 'Ko dat' ?></td>
        </tr>
    <?php endforeach ?>
    <tr>
        <?php if (!count($scores)) : ?>
            <td colspan="3">No Data</td>
        <?php endif ?>
    </tr>
</table>