<?php
/**
 * Site footer — links + the page's own measured weight (the brand's honesty,
 * literalized). The weight line states only what is always true here.
 *
 * @var string   $appName the site name
 * @var callable $e       escape a value for output
 * @var array<string,list<array{label:string,url:string}>> $menus
 *
 * The footer nav renders the editable `footer` menu (admin → Menus) when one is
 * set, and falls back to the docs default links otherwise.
 */
$footer = ($menus ?? [])['footer'] ?? [];
?>
<footer class="site-footer">
    <div class="wrap">
        <p>© <?= date('Y') ?> <?= $e($appName) ?> · MIT License · runs on NimbusCMS</p>
        <nav aria-label="Footer">
            <?php if ($footer !== []): ?>
                <?php foreach ($footer as $item): ?>
                    <a href="<?= $e($item['url']) ?>"><?= $e($item['label']) ?></a>
                <?php endforeach; ?>
            <?php else: ?>
                <a href="/docs">Docs</a>
                <a href="/pages/about">About</a>
                <a href="https://github.com/NimbusCMS/nimbus">GitHub</a>
            <?php endif; ?>
        </nav>
        <p class="weight">Zero JavaScript · one ~11&nbsp;KB stylesheet · system fonts.</p>
    </div>
</footer>
