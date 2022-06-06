<?php
$custom_field = get_field('field_name', 'options');
?>

</main>

<footer class="footer">
    <div class="container">
        
    </div>
</footer>

<div class="modal" id="modal-call">
    <div class="modal__title h4">Давайте начнём</div>
    <div class="modal__text">Мы перезвоним в течении 15 минут</div>
    <form action="#" class="modal__form">
        <input type="phone"
               placeholder="+7 (999) 999-99-99"
               required></input>
        <input type="text"
               placeholder="Имя"
               required></input>
        <button type="submit" class="btn">Перезвонить мне</button>
    </form>
    <div class="modal__policy">
        Нажимая кнопку «Отправить», вы соглашаетесь с <a href="#">политикой обработки персональных данных</a>
    </div>
</div>

</div><!-- //wrapper -->

<?php wp_footer(); ?>

</body>

</html>