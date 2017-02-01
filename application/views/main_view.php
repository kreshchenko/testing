<?php 
    foreach ($data as $dat):
?>
  <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">

    <div class="row">
        <!-- Інформація-->
        <div class="col-lg-8 col-md-6">
            <!-- ПІБ -->
            <div class="row">
                <h2 align="center">
                   <?php 
                   echo $dat['surname'].' '.$dat['name'].' '.$dat['namesur'];
                   ?>
                </h2>
            </div>
            <!-- Персональні дані -->
            <div class="col-lg-offset-2 col-md-offset-2">
                <p>
                    <b>Дата народження: </b> <?=$dat['date']?>
                </p>
                <p>
                    <b>Місце проживання:</b> <?=$dat['home']?>
                </p>
                
                <b>Освіта: </b>
                <?=$dat['education'];?>
            </div>

        </div>
        <!-- Фото -->
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
            <img width="100%" src="<?=$dat['logo']?>">
        </div>
    </div>

    <div class="row">
        <!-- Хобі -->
        <div class="col-lg-6 col-md-6">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Хобі</th>
                    <th>Опис</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <h3>Футбол</h3>
                    </td>
                    <td>
                        <p>
                            З весни 2016 року було відроджено футбольний клуб <b>КіПіШ</b>. Я є капітаном цієї команди. За останні пів року ми прийняли участь у багатьох турнірах. Стали фіналістами Кубку міста та бронзовими призерами чемпіонату міста з пляжного футболу
                        </p>
                        <p>
                            Нарзі в Чемпіонаті міста з футзалу, мій колектив йде на другому місці у Третій лізі та бореться за перехід до вищого дивізіону
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><h3>Квест</h3></td>
                    <td>
                        <p>
                            Квест - це інтелектуально-пошукова гра, яка раніше була доволі популярно у Вінниці. Нажаль тепер нічні автоквести проходять доволі рідко у нашому місті.
                        </p>
                        <p>
                            Наша з друзями команда на квестах також має назву КіПіШ і в cезоні 2016 року ми наразі йдемо на другому місці в загальному рейтинзі
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><h3>Музика</h3></td>
                    <td>
                        <p>
                            Ще у 9 класі мною була закінчена 2 ДМШ за класом "Народні інструменти" (гітара). Це хобі знайшло продовження, після того як мені подарували електрогітару. Наразі ми іноді збираємся з друзями аби просто пограти разом.
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-6 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1302.258437354212!2d28.47728361334845!3d49.24764834560169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472d5ca9b11b4f69%3A0x8092a1527155de33!2z0LLRg9C70LjRhtGPINCa0LjRl9Cy0YHRjNC60LAsINCS0ZbQvdC90LjRhtGPLCDQktGW0L3QvdC40YbRjNC60LAg0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1482167627452" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

<?php 
    endforeach;
?>

</div>