</main>

<footer class="footer">
    <div class="footer__content container">
        <?= do_shortcode('[contact-form-7 id="131" title="Форма в подвале" html_class="footer__form form wow fadeInUp"]'); ?>
        <form action="#" class="footer__form form wow fadeInUp">
            <div class="footer__title h2">Давайте начнём</div>
            <div class="form__fields">
            <input type="tel"
                    name="phone"
                    placeholder="+7 (999) 999-99-99"
                    required=""/>
                <input type="text"
                    name="name"
                    placeholder="Имя"
                    required=""/>
                <textarea 
                    name="request" 
                    placeholder="Кратко опишите вопрос"/></textarea>
                <button type="submit" class="btn btn--white">Перезвонить мне</button>
            </div>
            <div class="form__policy">
                Нажимая кнопку «Отправить», вы соглашаетесь с <a href="#">политикой обработки персональных данных</a>
            </div>
        </form>
        <iframe src="https://yandex.ru/map-widget/v1/-/CCUJV2WJwC" width="100%" height="320" frameborder="0" allowfullscreen="true"></iframe>
        <div class="footer__bottom">
            <a href="/" class="footer__logo logo">
                <svg width="48" height="48" class="logo__img">
                    <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#logo"></use>
                </svg>
                <div class="logo__content">
                    <span class="logo__title">Правовое плечо</span>
                    <span class="logo__text">Центр юристов и адвокатов</span>
                </div>
            </a>
            <div class="footer__contacts">
                <?php 
                    $phone = get_field('phone', 'option');
                    $email = get_field('email', 'option'); 
                ?>
                <a href="tel:<?= preg_replace('/[()\-\s]/', '', $phone); ?>">
                    <?= $phone; ?>
                </a>
                <a href="mailto:<?= $email; ?>">
                    <?= $email; ?>
                </a>
            </div>
            <div class="footer__copyright">
                <img 
                    src="<?= DIST_URI ?>/img/icons/ab.svg" 
                    width="51" 
                    height="25" 
                    alt="">
                <span>Сделано с любовью</span>
            </div>
        </div>
    </div>
</footer>

<div class="modal" id="modal-call">
    <?= do_shortcode('[contact-form-7 id="130" title="Модальная форма" html_class="modal__form form"]'); ?>
</div>

<?php wp_footer(); ?>

</body>

</html>