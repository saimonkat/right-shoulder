<?php $faqs = get_field('faqs'); ?>

<section class="faq section" id="faq">
    <div class="container">
        <div class="faq__wrapper">
            <h2 class="faq__title wow fadeInUp">
                Ответы на популярные вопросы
            </h2>
            <div class="faq__content wow fadeInUp" data-wow-delay="200">
                <?php foreach($faqs['list'] as $faq): ?>
<<<<<<< HEAD
                <?php i++ ?>
                <div class="faq__item faq-item toggler <?php if( i == 0 ): ?> <?= 'active' ?>">
=======
                <?php $i++; ?>
                <div class="faq__item faq-item toggler <?php if( $i == 0 ) echo 'active'; ?>">
>>>>>>> 1874dc7f841431c5973a126bfff95476abdf9634
                    <?php if($faq['question']): ?>
                    <div class="faq-item__title toggler-title h3">
                        <?= $faq['question'] ?>
                        <span class="faq-item__button"></span>
                    </div>
                    <? endif; ?>
                    <?php if($faq['answer']): ?>
                    <div class="faq-item__text toggler-content">
                        <?= $faq['answer'] ?>
                    </div>
                    <? endif; ?>
                </div>
<<<<<<< HEAD

=======
>>>>>>> 1874dc7f841431c5973a126bfff95476abdf9634
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
