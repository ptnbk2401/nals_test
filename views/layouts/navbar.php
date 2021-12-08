<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">TodoList</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
            $menus = [
                [
                    'url' => '/?controller=works&action=index',
                    'name' => 'Management',
                    'controller' => 'works',
                ],
            ];
            ?>
            <?php foreach ($menus as $menu) { ?>
                <li class="nav-item <?= $menu['controller'] == $_GET['controller'] ? 'active' : ''?>">
                    <a class="nav-link" href="<?= $menu['url'] ?>"><?= $menu['name'] ?></a>
                </li>
            <?php }?>
        </ul>
    </div>
</nav>