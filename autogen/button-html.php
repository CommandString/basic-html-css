<?php

$colors = [
    "purple",
    "red",
    "orange",
    "yellow",
    "olive",
    "green",
    "teal",
    "blue",
    "violet",
    "pink",
    "brown",
    "grey",
    "black"
];

?>
<div class="centered grid">
    <?php

    foreach ($colors as $key => $color) {
        if ($key % 3 == 0 && $key !== 0) { ?>
</div>
    <div class="centered grid">
    <?php } ?>
        <div>
            <h2><span class="inverted <?= $color ?>"><?= ucfirst($color) ?> Buttons</span></h2>
            <button class="<?= $color ?>">Your amazing <?= $color ?> button </button>
            <button class="inverted <?= $color ?>">Your amazing inverted <?= $color ?> button </button>
        </div>
    <?php } ?>
</div>
