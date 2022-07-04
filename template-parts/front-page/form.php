<section class="form-section section section--big">
    <div class="container">


        <?php echo do_shortcode('[contact-form-7 id="96" title="Форма в теле" html_class="form wow fadeInUp"]'); ?>

        <form action="#" class="form wow fadeInUp">
            <div class="form__text">Мы перезвоним в течении 15 минут</div>
            <h2 class="form__title h2">Давайте начнём</h2>
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
                placeholder="Опишите проблему"/></textarea>
                <button type="submit" class="btn">Перезвонить мне</button>
            </div>
            <div class="form__policy">
                Нажимая кнопку «Отправить», вы соглашаетесь с политикой <a href="#">обработки персональных данных</a>
            </div>
        </form>
    </div>
</section>
