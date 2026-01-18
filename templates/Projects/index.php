<section class="page">
    <div class="image image-left">
        <?= $this->Html->image('projects.jpg') ?>
    </div>

    <div class="text">
        <h2>Mes projets</h2>

        <div class="project-list">
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <?= $this->Html->link($project['title'], $project['url']) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

