<section class="advice section">
    <div class="container">
        <div class="advice__content wow fadeInUp">
<<<<<<< Updated upstream
            <div class="advice__subtitle">Что делать при возникновении спора</div>
            <h2 class="advice__title">Главное: не паниковать.</h2>
            <div class="advice__text">
                <p>Любое нарушение права— это всегда неожиданная и стрессовая ситуация. Мы это понимаем, поэтому выполняем нашу работу быстро и качественно, чтобы эта проблема доставила вам минимум хлопот. Если вы не можете самостоятельно дать юридическую оценку возникшей ситуации, не пытайтесь ее решить самостоятельно, это может привести к ее усугублению.</p>
                <p>Обратитесь на бесплатную консультацию, наш специалист оценит ситуацию и расскажет о первых шагах к ее решению. Далее используя рекомендации юриста вы сможете безболезненно ее решить сами.</p>
=======
            <?php if ($advice['subtitle']): ?>
                <div class="advice__subtitle"><?= $advice['subtitle'] ?></div>
            <?php endif; ?>
            <?php if ($advice['title']): ?>
            <h2 class="advice__title"><?= $advice['title'] ?></h2>
            <?php endif; ?>
            <div class="advice__text">
				<?php if ($advice['text_1']): ?>
                	<p><?= $advice['text_1'] ?></p>
				<?php endif; ?>
				<?php if ($advice['text_2']): ?>
                <p><?= $advice['text_2'] ?></p>
				<?php endif; ?>
>>>>>>> Stashed changes
            </div>
        </div>
    </div>
</section>