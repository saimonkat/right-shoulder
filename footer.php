</main>

<footer class="footer">
    <div class="footer__content container">
        <form action="#" class="footer__form form wow fadeInUp">
            <div class="footer__title h2">Давайте начнём</div>
            <div class="form__fields">
                <input type="tel"
                    placeholder="+7 (999) 999-99-99"
                    required=""/>
                <input type="text"
                    placeholder="Имя"
                    required=""/>
                <button type="submit" class="btn btn--white">
                    Перезвонить мне
                </button>
            </div>
            <div class="form__policy">
                Нажимая кнопку «Отправить», вы соглашаетесь с <a href="#">политикой обработки персональных данных</a>
            </div>
        </form>
        <div class="footer__bottom">
            <a href="#hero" class="footer__logo logo">
                <svg width="48" height="48" class="logo__img">
                    <use xlink:href="<?= DIST_URI ?>/img/icons/svg-sprite.svg#logo"></use>
                </svg>
                <div class="logo__content">
                    <span class="logo__title">Правовое плечо</span>
                    <span class="logo__text">Центр юристов и адвокатов</span>
                </div>
            </a>
            <div class="footer__contacts">
                <a href="tel:+78009999999">8 800-999-99-99</a>
                <a href="mailto:example@domain.com">example@domain.com</a>
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
    <form action="#" class="modal__form form">
        <div class="form__title h3">Давайте начнём</div>
        <div class="form__text">Мы перезвоним в течении 15 минут</div>
        <div class="form__fields">
            <input type="tel"
                placeholder="+7 (999) 999-99-99"
                required=""/>
            <input type="text"
                placeholder="Имя"
                required=""/>
            <button type="submit" class="btn">Перезвонить мне</button>
        </div>
        <div class="form__policy">
            Нажимая кнопку «Отправить», вы соглашаетесь с политикой <a href="#">обработки персональных данных</a>
        </div>
    </form>
</div>

</div><!-- /.wrapper -->

<?php wp_footer(); ?>

</body>

</html>