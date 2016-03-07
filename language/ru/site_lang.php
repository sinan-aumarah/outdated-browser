<?php if ( ! defined('BASEPATH')) exit('Прямой доступ к скрипту запрещён');

/*NAVIGATION and META*/
$lang['meta_desc'] = 'Инструмент, экономящий время разработчиков. Обнаруживает устаревшие браузеры и рекомендует пользователю обновиться к новой версии.';
$lang['btn_closenav'] = 'Скрыть навигацию';
$lang['mainNav_home'] = 'ГЛАВНАЯ';
$lang['mainNav_project'] = 'ПРОЕКТ';
$lang['mainNav_how'] = 'КАК ИСПОЛЬЗОВАТЬ';
$lang['mainNav_faq'] = 'FAQ';
$lang['mainNav_git'] = 'СТРАНИЦА GITHUB';

/*SHARE*/
$lang['share_share'] = 'Поделиться';
$lang['share_twitter'] = '%23Инструмент, экономящий время %23разработчиков. Обнаруживает %23устаревшие %23браузеры и рекомендует пользователю %23обновиться к новой версии.';
$lang['share_twitter_t'] = 'Поделиться в Twitter';
$lang['share_fb_t'] = 'Поделиться в Facebook';


/*GENERIC*/
$lang['txt_close'] = 'Закрыть';
$lang['txt_keepcalm'] = 'сохраняйте спокойствие <br><span class="xs">этот инструмент для</span>компьютеров<br><span class="xs">не</span> для мобильных устройств';


/*HOMEPAGE*/
$lang['home_subtitle'] = 'Для комфортной работы в Сети нужен современный браузер. Здесь можно найти последние версии.';
$lang['home_subtitle_nojs'] = 'В вашем браузере отключён JavaScript. Включите его для более комфортной работы в Сети.';
$lang['home_subtitle_mobile'] = 'Этот сайт предназначен для компьютеров, но <br>вы можете свободно пользоваться им.';
$lang['home_percentage'] = 'людей использует <br>этот браузер';
$lang['home_download'] = 'СКАЧАТЬ';
$lang['home_version'] = 'ВЕРСИЯ';
$lang['home_available'] = 'ДОСТУПНО ДЛЯ';

/*PROJECT*/
$lang['proj_title1'] = 'С нас <br>довольно!';
$lang['proj_desc1'] = 'Потратив уйму времени на оптимизацию наших сайтов под устаревшие браузеры, мы в Büro решили создать решение, которое не просто сохранит вам время, но даже позволит уйти домой пораньше.<br><br> Пицца не включена.';
$lang['proj_alt1'] = 'отчаяние';
$lang['proj_desc1_2'] = 'Разработчик сходит с ума';

$lang['proj_title2'] = 'Как это <br>работает?';
$lang['proj_desc2'] = 'Будучи запущенным, скрипт проверяет, поддерживает ли браузер некое современное CSS-свойство. Если же нет, мы показываем стильное уведомление, рекомендующее пользователю обновиться к новой версии.';
$lang['proj_desc2_2'] = 'Веб-сайт, открытый в старом браузере';

$lang['proj_title3'] = '3 шага для <br> начала работы';
$lang['proj_desc3'] = 'Это отнимет всего 3 минуты. Подключите скрипт и таблицу стилей, затем скопируйте пару строк HTML-кода. Готово!<br><br>Подробности на странице <a class="github" href="https://github.com/burocratik/outdated-browser" rel="external" data-track="Github">GitHub</a> ;)';
$lang['proj_desc3_2'] = 'Разработано в Bürolabs';

/*HOW*/
$lang['how_title1'] = 'Скачайте <br> пакет';
$lang['how_desc1'] = 'Сей пакет содержит все необходимы файлы: JS, CSS и языки.';
$lang['how_desc1_2'] = 'Скачать с Github';

$lang['how_title2'] = 'Подключите их <br> в свой проект';
$lang['how_desc2'] = 'Загрузите css-файл в блок &lt;head&gt; и JS-файл в конец &lt;body&gt;.';
$lang['how_desc2_2'] = 'Скопировать готовый код в буфер ';
$lang['how_alt2'] = 'браузер ';

$lang['how_title3'] = 'Подключите <br> требуемый <br> HTML';
$lang['how_desc3'] = 'Можете разместить этот код прямо перед тэгом &lt;/body&gt;.';
$lang['how_desc3_2'] = '
<h6>Ваш браузер устарел!</h6>
<p>Обновите свой браузер для правильного отображения этого сайта. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Обновить браузер</a></p>
<p class="last"> <a href="#" id="btnCloseUpdateBrowser" title="Закрыть"> &times; </a> </p>
';

$lang['how_title4'] = 'Вызовите <br> плагин и ';
$lang['how_alt4'] = 'готово';
$lang['how_desc4'] = 'Теперь любой пользователь с устаревшим браузером увидит стильное уведомление наверху страницы.<br><br> Если вам нравится — форкайте и делитесь с миром!';
$lang['how_desc4_2'] = '//функцию плагина разместите внутри коллбэка о готовности DOM';

/*404*/
$lang['url404'] = "http://outdatedbrowser.com/ru";
$lang['txt_keepcalm_error'] = 'сохраняйте спокойствие <br><span class="xs">404 error</span>The page you <br> are looking for<br><span class="xs">cannot be found</span>';
