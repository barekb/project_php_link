{% include "header.php" %}
<section class="container">
    <div class="row py-4">
        <?php
        foreach ($links as $oneLink) {
        ?>
            <div class="col col-lg-6">
                <a href="<?= $oneLink->url ?>" target="_blank">
                    <div class="d-flex justify-content-center">
                        <div class="tile my-4">
                            <div class="text">
                                <h3><?= $oneLink->name ?></h3>
                                <h4 class="animate-text"><?= $oneLink->desc ?></h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php
        }
        ?>
    </div>
</section>
{% include "footer.php" %}