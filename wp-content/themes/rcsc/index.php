<?php get_header(); ?>

<aside class="aside">
    <a href="" data-scroll-link="top" class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="RCSC - Российский Совет Торговых Центров" class="logo_img">
    </a>
    <nav class="menu">
        <div class="menu_hamburger"></div>
        <ul class="menu_list">
            <li data-scroll-link='0' class="menu_item">Концепция мероприятия</li>
            <li data-scroll-link='1' class="menu_item">Конгресс уже рекомендуют</li>
            <li data-scroll-link='2' class="menu_item">Программа</li>
            <li data-scroll-link='3' class="menu_item">Профессиональный каталог управляющих ТЦ</li>
            <li data-scroll-link='4' class="menu_item">Стоимость</li>
            <li data-scroll-link='5' class="menu_item">Партнёры</li>
            <li data-scroll-link='6' class="menu_item">Место проведения</li>
            <li data-scroll-link='7' class="menu_item">Контакты</li>
        </ul>
    </nav>
</aside>

<div class="main">
    <header data-scroll-section="top" class="header">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.png" alt="RCSC - Российский Совет Торговых Центров" class="header_logo">
        <h1 class="header_title">SHOPPING CENTER MANAGER’s Congress</h1>
        <h2 class="header_subtitle">Совершенство менеджмента</h2>
        <div class="header_date"><strong>25-26-27</strong> мая <strong>2016</strong></div>
        <div class="header_time"></div>
        <div data-scroll-link="blank" class="btn">ПРИНЯТЬ УЧАСТИЕ</div>
    </header>

    <section class="about clr">
        <div class="about_img_block">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_1.jpg" class="about_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_2.jpg" class="about_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_3.jpg" class="about_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about_4.jpg" class="about_img">
        </div>
        <div class="about_text_block">
            <h3 class="text_left">О МЕРОПРИЯТИИ</h3>
            <div class="about_term">SHOPPING CENTER MANAGER’s Congress 2016 – это:</div>
            <div class="about_determ">
                Двухдневная конференция по управлению и развитию команды ТЦ
                Мастер-классы от управляющих крупнейших зарубежных торговых центров
            </div>
            <p class="about_text">
                Тематические круглые столы по методике формирования качественной
                управляющей команды ТЦ Возможность продемонстрировать собственные
                профессиональные компетенции на крупнейшем форуме управляющих ТЦ и
                обменяться опытом с коллегами из других регионовТематические сессии,
                неформальное общение, гала-вечер с развлекательной программой и многое
                другое…
            </p>
            <p class="about_text">
                Начиная с 2016 года, SHOPPING CENTER MANAGER’s Congress будет проходить
                ежегодно.

            </p>
        </div>
    </section>

    <section data-scroll-section="0" class="determination">
        <div class="determination_text">
            <strong>SHOPPING CENTER MANAGER’s Congress</strong> – профессиональная платформа для управляющих торговыми
            центрами (ТЦ/ТРЦ/ТРК) по вопросам персонального развития, формирования команды, эксплуатации и
            технического обслуживания объекта, функционирования и развития ТЦ на всех этапах его жизни.

        </div>
    </section>

    <section data-scroll-section="1" class="speakers">
        <h3>Конгресс уже рекомендуют</h3>
        <ul class="speakers_list_img clr">
            <?php
            global $query_string;
            query_posts($query_string . "&order=ASC");
            $count_post = 0;
            ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( in_category('Speakers') ) { ?>
                    <?php ($count_post == 2) ? $class_active = 'active' : $class_active = ''; ?>
                    <li class="speakers_item_img <?php echo $class_active; ?>">
                        <?php the_post_thumbnail(array(252, 252), array('class' => 'speakers_img')); ?>
                        <div class="speakers_sign"><?php the_title(); ?></div>
                    </li>
                <?php } ?>
                <?php $count_post++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
        <ul class="speakers_list_text">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php if ( in_category('Speakers') ) { ?>
                    <li class="speakers_item_text">
                        <div class="speakers_name"><?php the_title(); ?></div>
                        <div class="speakers_post"><?php get_post_custom_values('Должность'); ?> </div>
                        <div class="speakers_text"><?php the_content(); ?></div>
                    </li>
                <?php } ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </section>

    <section data-scroll-section="2" class="program clr">
        <h3 class="lg_m_b">Программа Shopping Center Manager’s Congress</h3>
        <div class="program_col">
            <div class="program_day">25 мая, Первый день:</div>
            <p><strong>1. Практический блок – рабочая мастерская в ТЦ Columbus</strong></p>
            <p>- Все секреты одного из самых успешных новых торговых объектов столицы</p>
            <p>- Экскурсия по объекту</p>
            <p>- Возможность заглянуть «за кулисы»</p>
            <div class="program_day">26 мая, Второй день:</div>
            <p><strong>2. Блок лидерства</strong></p>
            <p>- Создание эффективной команды в ТЦ. Ключевые позиции и подбор персонала</p>
            <p>- Коммуникация лидера. Секреты общения с арендаторами и подрядчиками. И - самое главное - с собственником</p>
            <p>- Тайм-менеджмент: как успевать решать разноплановые задачи, так чтобы оставалось время на семью и на сон</p>
            <p>*** все эти темы будут подкрепляться примерами из каждодневной практики управляющего ТЦ**</p>
            <p><strong>3. Блок стратегии</strong></p>
            <p>- Как определить единственно верную для вашего ТЦ концепцию tennant mix</p>
            <p>- Как отсортировать "пустой" трафик и управлять им</p>
            <p>- Как превратить свой ТЦ в ключевой социальный объект города</p>
            <p>- Как строить отношения с властями и помогать развивать инфраструктуру города</p>
            <p><strong>В программе возможны незначительные изменения / дополнения.</strong></p>
            <p><strong>Спикеры по каждой из тем будут заявлены до 20.04.2016</strong></p>
        </div>
        <div class="program_col">
            <div class="program_day">27 мая, Третий день:</div>
            <p><strong>4. Блок тактики</strong></p>
            <p>- Навигация в ТЦ: почему ни у кого не получается и как сделать так, чтобы всем было удобно</p>
            <p>- Как провести тендер так, чтобы не выбрать в итоге "дёшево и сердито"</p>
            <p>- Составляем идеальный договор аренды</p>
            <p>- Как вести переговоры с арендаторами-должниками</p>
            <p><strong>5. Блок маркетинга</strong></p>
            <p>- Кто должен знать о вашем ТЦ и как заставить этих людей приходить к вам</p>
            <p>- ТЦ - территория рекламы: как научиться продавать свободные поверхности</p>
            <p>- Звуки, запахи и НЛП: как ненавязчиво помочь арендаторам увеличить оборот</p>
            <p><strong>6. Интерактивный неформальный блок</strong></p>
            <p>- Командный квест по одному из московских ТЦ</p>
        </div>
    </section>

    <section data-scroll-section="3" class="catalog">
        <h3 class="lg_m_b">Каталог управляющих торговыми центрами России</h3>
        <p>
            Первый в своём роде справочник по персоналиям – действующим управляющим торговыми центрами страны,
            витрина лучших менеджерских кадров в сфере торговой недвижимости.
        </p>
        <p>
            Содержит данные о профессиональном опыте управляющего и основных характеристиках торгового объекта,
            команду которого он возглавляет на данный момент.
        </p>
        <p>Также в каталоге представлена информация о компаниях, предлагающих услуги управления ТЦ.</p>
        <p>Для того, чтобы попасть в каталог, нужно <span class="link" data-scroll-link="blank">заполнить анкету</span></p>
        <p>Условия размещения объявлений в разделе «Профили компаний» можно узнать, написав на адрес ovchinnikov@rcsc.info</p>
        <p>Каталог будет представлен на открывающемся 25 мая в Москве SHOPPING CENTER MANAGER’S CONGRESS.</p>
    </section>

    <section data-scroll-section="4" class="cost">
        <h3 class="lg_m_b text_white">СТОИМОСТЬ</h3>
        <div class="cost_table">
            <div class="cost_table_row clr">
                <div class="cost_table_col">Что входит в пакет участия</div>
                <div class="cost_table_col">Стандарт</div>
                <div class="cost_table_col">Для членов РСТЦ</div>
                <div class="cost_table_col">от 3-х чел.</div>
            </div>
            <div class="cost_table_row clr">
                <div class="cost_table_col">Эксклюзивный каталог профессиональных<br>управляющих ТЦ</div>
                <div class="cost_table_col"></div>
                <div class="cost_table_col"></div>
                <div class="cost_table_col"></div>
            </div>
            <div class="cost_table_row clr">
                <div class="cost_table_col">Полная программа: Всем блоки<br>+ рабочая мастерская</div>
                <div class="cost_table_col"></div>
                <div class="cost_table_col"></div>
                <div class="cost_table_col"></div>
            </div>
            <div class="cost_table_row clr">
                <div class="cost_table_col">Интенсивный информационный блок,<br>неформальный блок</div>
                <div class="cost_table_col"></div>
                <div class="cost_table_col"></div>
                <div class="cost_table_col"></div>
            </div>
            <div class="cost_table_row clr">
                <div class="cost_table_col">Стоимость пакета</div>
                <div class="cost_table_col red">42 500 руб.</div>
                <div class="cost_table_col red">25 000 руб.</div>
                <div class="cost_table_col red">Скидка 5%</div>
            </div>
        </div>
    </section>

    <section data-scroll-section="5" class="partners">
        <h3 class="lg_m_b">ПАРТНЕРЫ МЕРОПРИЯТИЯ</h3>
        <ul class="partners_list clr">
            <li class="partners_item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_1.png" class="partners_img"></li>
            <li class="partners_item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_2.png" class="partners_img"></li>
            <li class="partners_item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_3.png" class="partners_img"></li>
            <li class="partners_item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_4.png" class="partners_img"></li>
            <li class="partners_item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/partner_5.png" class="partners_img"></li>
        </ul>
    </section>

    <section data-scroll-section="6" class="place clr">
        <div id="map" class="place_map place_map__notready"></div>
        <div class="place_text_block">
            <h3 class="lg_m_b text_left">Место проведения</h3>
            <p class="place_adress">Место проведения уточняется</p>
            <p class="place_date">25-27 мая 2016</p>
            <p class="place_time">09:00 – 21:00</p>
            <p class="place_url">http/ссылка на профиль</p>
        </div>
    </section>

    <section data-scroll-section="7" class="contacts">
        <h3 class="lg_m_b text_left">КОНТАКТЫ</h3>
        <p>Возникли вопросы? Звоните! Пишите! Вам будут рады!</p>
        <ul class="contacts_list clr">
            <li class="contacts_item">
                <div class="contacts_img_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_1.png" class="contacts_img">
                </div>
                <div class="contacts_text_block">
                    <p>Участие в мероприятии</p>
                    <p>
                        <strong>Aлена Поскакарина</strong><br>
                        <a href="mailto:poskakarina@rcsc.info">poskakarina@rcsc.info</a><br>
                        тел.  +7 (495) 620 45-11
                    </p>
                </div>
            </li>
            <li class="contacts_item">
                <div class="contacts_img_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_2.png" class="contacts_img">
                </div>
                <div class="contacts_text_block">
                    <p>Участие в мероприятии</p>
                    <p>
                        <strong>Анна Развадовская</strong><br>
                        <a href="mailto:razvadovskaya@rcsc.info">razvadovskaya@rcsc.info</a><br>
                        тел.  +7 (495) 620 45-11
                    </p>
                </div>
            </li>
            <li class="contacts_item">
                <div class="contacts_img_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_3.png" class="contacts_img">
                </div>
                <div class="contacts_text_block">
                    <p>Участие в качестве спикера</p>
                    <p>
                        <strong>Олег Овчинников</strong><br>
                        <a href="mailto:ovchinnikov@rcsc.info">ovchinnikov@rcsc.info</a><br>
                        тел.  +7 (495) 620 45-11
                    </p>
                </div>
            </li>
            <li class="contacts_item">
                <div class="contacts_img_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_4.png" class="contacts_img">
                </div>
                <div class="contacts_text_block">
                    <p>PR и СМИ</p>
                    <p>
                        <strong>Анна Дрябина</strong><br>
                        <a href="mailto:dryabina@rcsc.info">dryabina@rcsc.info</a><br>
                        тел.  +7 (495) 620 45-11
                    </p>
                </div>
            </li>
            <li class="contacts_item">
                <div class="contacts_img_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_5.png" class="contacts_img">
                </div>
                <div class="contacts_text_block">
                    <p>Участие в качестве партнера</p>
                    <p>
                        <strong>Надежда Горбачева</strong><br>
                        <a href="mailto:gorbacheva@rcsc.info">gorbacheva@rcsc.info</a><br>
                        тел.  +7 (495) 620 45-11
                    </p>
                </div>
            </li>
        </ul>
    </section>
    <footer data-scroll-section="blank" class="footer">
        <h3 class="xlg_m_b text_white">Присоединяйтесь к Shopping Center Manager’s Congress</h3>
        <form novalidate class="form">
            <input type="text" name="name" placeholder="Имя" data-requied class="input input__name">
            <input type="text" name="email" placeholder="Email" data-requied class="input input__email">
            <input type="text" name="phone" placeholder="Телефон" data-requied class="input input__phone">
            <button type="submit" class="btn">ПРИНЯТЬ УЧАСТИЕ</button>
        </form>
    </footer>
</div>

<?php get_footer(); ?>