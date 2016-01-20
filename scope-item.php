<?php 
    $scopeId = stripFormatting($scopeName);
?>


<article class="item" id="<?php echo $scopeId; ?>">
    <div class="visual">
        <img src="public/images/red-dot-oes.jpg">
        <div class="details">
            <div class="icon"></div>
            <h2 class="name"><?php echo $scopeName; ?></h2>
            <p class="description"><?php echo $scopeDesc; ?></p>
        </div>
    </div>

    <!-- If any stats exist -->

    <ul class="stats">

        <?php if($scopeZoom != ""): ?>
            <li class="stats-zoom">
                <span class="label">Zoom</span>
                <div class="graph">
                    <div class="plot <?php if($scopeZoom > "0") { echo "positive"; } else { echo "negative"; } ?>" data-size="<?php echo $scopeZoom; ?>"></div>
                </div>
                <span class="amount"><?php if ($scopeZoom > 0) { echo "+" . $scopeZoom; } ?></span>
            </li>
        <?php endif; ?>




<!-- 
        <li class="stats-range">
            <span class="label">Range</span>
            <div class="graph">
                <div class="plot positive" data-size="2"></div>
            </div>
            <span class="amount">+2</span>
        </li>
        <li class="stats-stability">
            <span class="label">Stability</span>
            <div class="graph">
                <div class="plot positive" data-size="12"></div>
            </div>
            <span class="amount">+12</span>
        </li> -->
    </ul>
</article>