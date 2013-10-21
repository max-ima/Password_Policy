<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2013 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['UAM_tipsTitle_d'] = 'Советы и различные примеры использования';
$lang['UAM_remailtxt2Title'] = 'Напоминающий e-mail без нового сгенерированного ключа';
$lang['UAM_remailtxt1Title'] = 'Напоминающий e-mail с новым сгенерированным ключом';
$lang['UAM_passwtestTitle'] = 'Проверка надежности пароля';
$lang['UAM_infomailTitle_d'] = 'Эта функция позволяет автоматически отправлять информационный email пользователю, который поменял свой пароль или эл.адрес на странице своего профиля.<br><br>
Содержимое сообщения состоит из персонифицированной части, включая небольшое личное приветствие, и стандартной части, содержащей логин пользователя, его пароль и эл.адрес.  ';
$lang['UAM_confirmTitle_d'] = '- Создание информационного email<br>
- Создание email о подтверждении регистрации<br>
- Автоматическое присоединение к группам, статусам или уровням доступа<br>
- Определение крайнего срока подтверждения регистрации<br>
- Создание email с напоминанием<br>
...';
$lang['UAM_mailexcTitle_d'] = 'По умолчанию в Piwigo принимаются все email-адреса в формате xxx@yyy.zz. Включение этой функции позволит Вам исключить некоторые домены в формате: @[имя_домена].[расширение_домена].<br><br>
Например:<br>
@hotmail.com -> включая все адреса домена @hotmail.com<br>
@hotmail -> включая все адреса, домена @hotmail* с любым расширением<br><br>
<b style=&quot;color: red;&quot;>Внимание - Эта функция работает только, если включено ограничение "Обязательно наличие email для каждого зарегистрированного пользователя!" Пожалуйста, смотрите настройку функций Piwigo.</b>';
$lang['UAM_USRAutoMailTitle_d'] = 'При активации этой функции автоматически отправляется персональное сообщение, настроенное в разделе &quot; "Email с напоминанием и новым сгенерированным ключом" &quot; тем посетителям, которые подходят под критерии.';
$lang['UAM_passwadmTitle_d'] = 'Администратор может создать аккаунт пользователя с учетом и без учета применения правила минимальной расчетной сложности пароля.<br><br>
Внимание: если пользователь созданного аккаунта хочет сменить пароль, и ограничение стойкости паролей включено, то это правило будет распространяться.';
$lang['UAM_passwtestTitle_d'] = 'Введите пароль для пробы и нажмите &quot;Вычислить стойкость&quot; увидите результат.';
$lang['UAM_restricTitle_d'] = '- Запрещенные символы<br>
- Стойкость пароля<br>
- Исключения для доменов<br>
...';
$lang['UAM_miscTitle_d'] = '- Мониторинг зарегистрированных пользователей<br>
- Ники обязательны для комментариев гостей<br>
...';
$lang['UAM_confirmstatTitle'] = 'Статусы';
$lang['UAM_confirmlevelTitle'] = 'Уровень доступа';
$lang['UAM_confirmgrpTitle'] = 'Группы';
$lang['UAM_GT_MainTitle_d'] = '- Автоматическое или ручное управление пользователями<br>
- Email-рассылки<br>
...';
$lang['UAM_GTAutoDelTitle'] = 'Настройка сообщения удаленному аккаунту';
$lang['UAM_confirmlevelTitle_d'] = '<b style=&quot;color: red;&quot;>ВНИМАНИЕ: Применение уровней доступа требует, чтобы Вы использовали их для своих изображений. Пожалуйста, перейдите в раздел документации Piwigo для детальной информации.</b><br><br>
Уровень доступа используется совместно с функцией &quot;Подтверждение регистрации&quot;';
$lang['UAM_validationlimitTitle_d'] = 'Эта функция позволяет установить длительность ожидания ввода ключа подтверждения, отправляемого в информационном письме вновь зарегистрировавшимся. Пользователи получают Х дней на подтверждение своей регистрации. После установленного срока ссылка, переданная в письме, устаревает.
<br><br>
Эта функция работает совместно с функцией &quot;Подтверждение регистрации&quot;
<br><br>
Если эта функция и функция &quot;Напоминание неподтвержденным пользователям&quot; активированы, то новые функции в этом же разделе (см.ниже) позволяют включить автоматическое управление неподтвержденными пользователями.';
$lang['UAM_StuffsTitle_d'] = 'Здесь включается дополнительный модуль (блок) UAM в плагине PWG Stuffs (если он установлен, конечно) для информирования Ваших посетителей, регистрация которых не подтверждена, об их статусе.
<br><br>
Нужны детали? Пожалуйста, перейдите в раздел <b>Советы и примеры использования</b> по кнопке на этой странице.';
$lang['UAM_RedirTitle_d'] = 'Эта функция автоматически перенаправляет зарегистрированного пользователя (только при первом его соединении с галереей) на его страницу настроек.<br><br>
Учтите: Эта возможность распространяется не на всех зарегистрированных пользователей. Такие аккаунты, как &quot;Администратор&quot;, &quot;Вебмастер&quot; или &quot;общий&quot; статус - исключены.';
$lang['UAM_HidePasswTitle_d'] = 'Выберите эту возможность, если хотите отобразить пароль, выбранный пользователем, в информационном письме. Если Вы включаете эту функцию, то пароль будет доступен в текстовом формате. Если отключить - пароль не будет отображаться ни у кого.';
$lang['UAM_adminconfmailTitle_d'] = 'Вы можете отменить это подтверждение, только для тех пользовательских аккаунтов, которые были созданы Администратором через интерфейс управления пользователями Piwigo.<br><br>
При активации данной функции email с подтверждением регистрации отправляется каждому пользователю, созданному Администратором.<br><br>
При отключенной функции (т.е. по умолчанию) направляется только информационный email (если включено &quot;Информационное эл.письмо пользователю&quot;). Дополнительно, созданный пользователь может быть <b>рассмотрен и подтвержден</b> по умолчанию.';
$lang['UAM_confirmgrpTitle_d'] = '<b style=&quot;color: red;&quot;>ВНИМАНИЕ: Для использования подтверждения групп требуется, чтобы была создана хотя бы одна группа пользователей и определена &quot;по умолчанию&quot; в разделе Управления группами пользователей Piwigo.</b><br><br>
Подтверждение групп применяется совместно с функцией &quot;Подтверждение регистрации&quot;';
$lang['UAM_CustomPasswRetrTitle_d'] = 'По умолчанию, в случае утраты своего пароля, пользователь (при использовании функции восстановления) получает email, содержащий только имя пользователя и его новый пароль.
<br><br>
Здесь Вы можете добавить текст по своему выбору, который будет присоединен к письму <b><u>до</u></b> обычной/стандартной  информации.
<br><br>
Кроме того, Вы можете использовать для создания текста специальные встроенные тэги:<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> для вставки названия Вашей галереи.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> для вставки URL Вашей галереи, если это установлено в настройках Piwigo.
<br><br>
Для применения мультиязычного режима Вы можете использовать тэги плагина Extended description plugin (если он активирован, конечно).';
$lang['UAM_RejectConnexion_Custom_Txt_d'] = 'Здесь настраивается текст сообщения для информирования неподтвержденных пользователей, что им будет недоступен вход в галерею.
<br><br>
Это поле можно редактировать с применением плагина FCK Editor. Для мультиязычности Вы можете использовать тэг [lang] из плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_RejectConnexion_d'] = 'Если активировать эту функцию, то вновь зарегистрировавшиеся пользователи, не подтвердившие свою регистрацию, не смогут входить в галерею. Они будут перенаправляться на специальную страницу, которая сообщит им об отсутствии подтверждения регистрации.
<br><br>
<b style=&quot;color: red;&quot;>ВНИМАНИЕ. Эта опция работает только совместно с подтвержденными группами! См.ниже требования, установленные к группам.</b>';
$lang['UAM_ConfirmMail_Subject_d'] = 'Здесь Вы можете настроить тему письма с подтверждением регистрации. <br>
По умолчанию всё заполняется английским текстом, но Вы можете поменять язык. Для этого используйте языковой тэг [lang =?]. Для этого предварительно должен быть установлен плагин Extended Description.
<br><br>
Кроме того, доступны для использования (и без плагина Extended Description) следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>';
$lang['UAM_ConfirmMail_ReMail_Subject_d'] = 'Здесь Вы можете настроить тему письма-напоминания о необходимости подтвердить регистрацию. Письмо может быть с новым сгенерированным ключом для подтверждения регистрации, а может быть и без ключа). <br>
По умолчанию всё заполняется английским текстом, но Вы можете поменять язык. Для этого используйте языковой тэг [lang =?]. Для этого предварительно должен быть установлен плагин Extended Description.
<br><br>
Кроме того, доступны для использования (и без плагина Extended Description) следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>';
$lang['UAM_AdminValidationMail_d'] = 'Когда Администратор или Вебмастер галереи вручную подтверждают ожидающие регистрации, пользователям автоматически направляется email с уведомлением. Введите здесь желаемый Вами текст письма.
<br><br>
Вам доступны для использования следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> - для вставки URL-адреса Вашей галереи, если это определено в настройках конфигурации Piwigo.
<br><br>

Чтобы использовать возможность мультиязычности Вы можете применять тэги плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_AdminValidationMail_Subject_d'] = 'Когда Администратор или Вебмастер галереи вручную подтверждают ожидающие регистрации, пользователям автоматически направляется email с уведомлением. Введите здесь желаемое Вами название темы письма.<br>
По умолчанию всё заполняется английским текстом, но Вы можете поменять язык. Для этого используйте языковой тэг [lang =?]. Для этого предварительно должен быть установлен плагин Extended Description.
<br><br>
Кроме того, доступны для использования (и без плагина Extended Description) следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>';
$lang['UAM_GTAutomail_Text_d'] = 'Введите собственный текст, который будет объяснять причины понижения, в дополнение к ссылке подтверждения. Ваш текст, конечно, не обязателен, но весьма желателен. На самом деле, вряд ли Ваш пользователь будет доволен, если получит письмо с одной только ссылкой, безо всяких пояснений с Вашей стороны. ;-)
 <br><br>
Вам доступны для использования следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> - для вставки URL-адреса Вашей галереи, если это определено в настройках конфигурации Piwigo.
<br><br>

Чтобы использовать возможность мультиязычности Вы можете применять тэги плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_remailtxt2Title_d'] = 'Введите вступительный текст, который будет отображаться в эп.письме с напоминанием, без генерации ключа подтверждения регистрации.
<br><br>
Если Вы оставите это поле пустым, что в письме у пользователя нечего не отобразится. Настоятельно советуем написать хоть несколько слов Вашему пользователю. (Обратите внимание, что текст, имеющийся в плагине, был введен для примера!).
<br><br>
Вам доступны для использования следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> - для вставки URL-адреса Вашей галереи, если это определено в настройках конфигурации Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> - для вставки количества дней, в течение которых можно успеть подтвердить регистрацию (должна быть включена функция &quot;Крайняя дата, ограничивающая подтверждение регистрации;&quot;).
<br><br>

Чтобы использовать возможность мультиязычности Вы можете применять тэги плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_remailtxt1Title_d'] = 'Введите вступительный текст, который будет отображаться в эп.письме с напоминанием, в дополнение к сгенерированному ключу подтверждения регистрации.
<br><br>
Если Вы оставите это поле пустым, что в письме пользователю придет только ссылка для регистрации. Настоятельно советуем написать хоть несколько слов Вашему пользователю. (Обратите внимание, что текст, имеющийся в плагине, был введен для примера!).
<br><br>
Вам доступны для использования следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> - для вставки URL-адреса Вашей галереи, если это определено в настройках конфигурации Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> - для вставки количества дней, в течение которых можно успеть подтвердить регистрацию (должна быть включена функция &quot;Крайняя дата, ограничивающая подтверждение регистрации;&quot;).
<br><br>

Чтобы использовать возможность мультиязычности Вы можете применять тэги плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_gttextTitle_d'] = 'Введите текст, который Вы хотите присоединить к письму с напоминанием, которое пригласит пользователя вернуться в Вашу галерею. Обратите внимание, что текст, имеющийся в плагине, был введен для примера!
<br><br>
Вам доступны для использования следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> - для вставки URL-адреса Вашей галереи, если это определено в настройках конфигурации Piwigo.<br>
- <b style=&quot;color: red;&quot;>[days]</b> - для вставки максимального числа дней между двумя визитами пользователя.
<br><br>

Чтобы использовать возможность мультиязычности Вы можете применять тэги плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_confirmtxtTitle_d'] = 'Введите вступительный текст, который будет отображаться в письме с подтверждением регистрации.
<br><br>
Вам доступны для использования следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> - для вставки URL-адреса Вашей галереи, если это определено в настройках конфигурации Piwigo.<br>
- <b style=&quot;color: red;&quot;>[Kdays]</b> - для вставки количества дней, в течение которых можно успеть подтвердить регистрацию (должна быть включена функция &quot;Крайняя дата, ограничивающая подтверждение регистрации;&quot;).
<br><br>

Чтобы использовать возможность мультиязычности Вы можете применять тэги плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_infotxtTitle_d'] = 'Введите вступительный текст, который будет отображаться в информационном письме.
<br><br>
Вам доступны для использования следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b> - для вставки URL-адреса Вашей галереи, если это определено в настройках конфигурации Piwigo.
<br><br>

Чтобы использовать возможность мультиязычности Вы можете применять тэги плагина Extended description (если этот плагин активирован, конечно).';
$lang['UAM_MailInfo_Subject_d'] = 'Здесь Вы можете настроить тему информационного письма. <br>
По умолчанию всё заполняется английским текстом, но Вы можете поменять язык. Для этого используйте языковой тэг [lang =?]. Для этого предварительно должен быть установлен плагин Extended Description.
<br><br>
Кроме того, доступны для использования (и без плагина Extended Description) следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>';
$lang['UAM_GTReminder_Subject_d'] = 'Здесь Вы можете вручную настроить тему письма Ghost Tracker с напоминанием. <br>
По умолчанию всё заполняется английским текстом, но Вы можете поменять язык. Для этого используйте языковой тэг [lang =?]. Для этого предварительно должен быть установлен плагин Extended Description.
<br><br>
Кроме того, доступны для использования (и без плагина Extended Description) следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>';
$lang['UAM_GTAutomail_Subject_d'] = 'Здесь Вы можете настроить тему письма Ghost Tracker с понижением статуса. <br>
По умолчанию всё заполняется английским текстом, но Вы можете поменять язык. Для этого используйте языковой тэг [lang =?]. Для этого предварительно должен быть установлен плагин Extended Description.
<br><br>
Кроме того, доступны для использования (и без плагина Extended Description) следующие тэги:<br>
- <b style=&quot;color: red;&quot;>[username]</b> - для автоматической подстановки имени пользователя в те части письма, где Вам необходимо.<br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки полного названия Вашей галереи в те части письма, где Вам необходимо.<br>';
$lang['UAM_AddURL2Mail_d'] = 'Включение этой функции позволяет добавлять URL-адрес Вашей галереи в конец электронных писем, создаваемых плагином (URL в качестве подписи).';
$lang['UAM_carexcTitle_d'] = 'Возможно, будет полезным запрещать опереленные символы в именах пользователей (например, отказаться от логинов, содержащих @). Этот параметр позволяет исключить опеределенные символы, их последовательности и события. <br>
Обратите внимание: данный параметр может исключать слова целиком.
<br><br>
<b style=&quot;color: red;&quot;>ПРЕДУПРЕЖДЕНИЕ: Эта функция не срабатывает в отношении имен пользователей, зарегистрированных ДО включения этой функции.</b>';
$lang['UAM_USRAutoTitle_d'] = 'Автоматическая обработка неподтвержденных посетителей срабатывает каждый раз при подключении к галерее и работает следующим образом:
<br><br>
- Автоматическое удаление аккаунтов, которые не были подтверждены в установленное время; без отправки автоматических напоминаний по электронной почте -> &quot;Установка предельного срока подтверждения регистрации&quot;
<b><u>включена</u></b> и &quot;Напоминание незарегистрированным пользователям&quot; <b><u>выключено</u></b>.
<br><br>
- Автоматическая отправка сообщения с напоминанием и с генерированием нового ключа подтверждения, и автоматическое удаление аккаунтов, не подтвержденных в установленное время после отправки им напоминания -> &quot;Установка предельного срока подтверждения регистрации&quot;
<b><u>включена</u></b> и &quot;Напоминание незарегистрированным пользователям&quot; <b><u>включено</u></b>.';
$lang['UAM_Tracking registered users_d'] = 'Это активирует вкладку в разделе "Отслеживание зарегистрированных пользователей". В таблице перечисляются зарегистрированные пользователи галереи, и время (в днях) с момента их последнего визита. Этот мониторинг - чисто информативный для администратора галереи.';
$lang['UAM_gtTitle_d'] = 'Когда Ghost Tracker включен и инициализирован, Вы можете ниже видеть полный список зарегистрированных посетителей, которые не возвращались Х дней. &quot;Х&quot; - это количество дней, установленное во вкладке "Основные настройки". Кроме того, в этом же списке есть колонка, в которой имеется отметка о том, отправлены ли напоминания целевым пользователям. Таким образом, Вы сразу можете видеть пользователей, которые проигнорировали напоминание. <br><br>В этом режиме Вы можете:
<br><br>
- Удалить аккаунты вручную <b>(ручная очистка)</b>
<br>
- Создать е-mail <b>со сбросом даты последнего визита</b>. Для целевых посетителей можно создавать шаблоны со знаками подстановки. Если посетитель уже получал напоминание, вряд ли он расстроится, получив еще письмо с установленной фактически новой датой крайнего визита.
<br><br>
<b>Возможности сортировки таблицы</b>: Вы можете сортировать отображаемую информацию, щелкнув на соответствующих заголовках столбцов. Удерживая клавишу SHIFT, Вы можете сортировать одновременно до 4 столбцов.';
$lang['UAM_userlistTitle_d'] = 'Эта страница для информирования администратора. Здесь отображается список всех зарегистрированных пользователей галереи с указанием даты и количества дней, прошедших с их последнего визита. Список отсортирован по возрастанию количества дней.
<br><br>
<b><u>Только когда Ghost Tracker включен</u></b>, количество дней без посещения выделяется цветом в соответствии с установками в настройках Tracker options:
<br>
- <b style=&quot;color: lime;&quot;>Зеленый</b>: когда пользователь посещал галерею <b style=&quot;color: lime;&quot;><u>менее, чем 50%</u></b> от максимально установленного в Ghost Tracker.<br>
- <b style=&quot;color: orange;&quot;>Желтый</b>: когда пользователь посещал галерею <b style=&quot;color: orange;&quot;><u> между 50% и 99% </u></b> от максимально установленного в Ghost Tracker.<br>
- <b style=&quot;color: red;&quot;>Красный</b>: когда пользователь посещал галерею <b style=&quot;color: red;&quot;><u>больше чем 100%</u></b> от максимума, установленного в Ghost Tracker. <b><u>В этом случае пользователь также должен появиться в таблице Ghost Tracker.</u></b><br>
<br>
Например:
<br>
Максимальный период в Ghost Tracker установлен в 100 дней.
<br>
Пользователь будет отображаться зеленым цветом, если он посетил галерею менее, чем 50 дней назад; желтым - если его последний визит был от 50 до 99 назад; красным - 100 дней назад и более.
<br><br>
<b>ПРИМЕЧАНИЕ</b>: Список не отображает пользователей, которые не подтвердили свою регистрацию (в случае, если функция подтверждения регистрации активирована). Этими пользователями можно управлять на специальной вкладке &quot;Отслеживание подтверждений&quot;.
<br><br>
<b>Возможности сортировки таблицы</b>: Вы можете сортировать отображаемую информацию, щелкнув на соответствующих заголовках столбцов. Удерживая клавишу SHIFT, Вы можете сортировать одновременно до 4 столбцов.';
$lang['UAM_GTAutoGpTitle_d'] = 'Автоматическая смена группы , статуса, уровня доступа, понижение соотвествующих акааунтов работают на том же принципе, что и подтверждение группы, статуса или уровня доступа (смотри "Установки подтверждения регистрации"). Поэтому следует определить группу, статус и/или уровень понижения доступа к галерее. Если это уже было определено с использованием функции подтверждения регистрации, то Вы можете использовать ту же группу/статус/уровень.
<br><br>
<b style=&quot;color: red;&quot;>Важное замечание:</b> Если пользователь до сих пор не слышал об истечении срока, несмотря не автоматическое уведомление по e-mail (если включено), он будет автоматически удален из базы данных.';
$lang['UAM_DumpTitle_d'] = 'Это позволяет сохранить всю конфигурацию плагина в файл так, что Вы сможете восстановить его, если что-то пойдет не так (неправильно манипуляции или перед обновлением, например). По умолчанию этот файл сохраняется в папке ../plugins/UserAdvManager/include/backup/ и называется &quot;UAM_dbbackup.sql&quot;.
<br><br>
<b style=&quot;color: red;&quot;>Предупреждение: файл перезаписывается после каждого действия резеврного копирования!</b>
<br><br>
Иногда бывает полезным сохранять резервную копию у себя на компьютере. Например, чтобы восстановить другую базу данных, передать ее или сохранить несколько разных резервных файлов. Чтобы загрузить файл, просто установите флажок.
<br><br>
Восстановление от этого интерфейса доступно только для локального файла резервного копирования (../plugins/UserAdvManager/include/backup/UAM_dbbackup.sql). Таким образом нельзя восстановить скачанный файл резервной копии. Чтобы сделать это, пользуйтесь специализированным инструментом управления базой данных (типа PhpMyAdmin для баз данных MySql).
<br><br>
<b style=&quot;color: red;&quot;>Предупреждение: После восстановления необходимо перезагрузить страницу администрирования плагина для просмотра восстановленных настроек!</b>';
$lang['UAM_GTAutoTitle_d'] = 'Эта опция позволяет применять правила автоматизированного управления пользователями.
<br><br>Основной принцип: Акакаунт пользователя, который достиг максимально установленного времени между посещениями <b><u>И</u></b> ужЕ был уведомлен по e-mail, считается истекшим. Затем можно применять правила автоматизированной обработки, например - автоматическое удаление просроченных аккаунтов, или понижение статуса, или другое ограничение доступа к галерее (автоматическое переключение на статус/группу с ограничениями).
<br><br>Срабатывание таких автоматизаций происходит при входе пользователя (любого пользователя!) в галерею.
';
$lang['UAM_GTAutoMailTitle_d'] = 'Когда истекает срок действия аккаунта (группа/статус/уровень доступа изменены из-за понижения посетителя), то по e-mail могут быть отправлены причины этого изменения, и средства для восстановления первоначального доступа к галерее.
<br>Для этого в электронном письме направляется ссылка для потовроного подтверждения регистрации (автоматически генерируется новый ключ).<b style=&quot;color: red;&quot;>Если пользователь ужЕ был уведомлен ранее, то его аккаунт автоматически уничтожается.</b> 
<br><br>
<b style=&quot;color: red;&quot;>Предупреждение: Использование этой функции тесно связано с подтверждением регистрацией пользователем (подтверждение по почте) и не может быть активирована без этой опции.</b>';
$lang['UAM_confirmmail_custom2_d'] = 'Когда функция &quot;Подтверждение регистрации&quot; активна, то в этом поле можно настроить <b><u>текст отказа</u></b>, который отображается на странице подтверждения регистрации, на которую пользователей переходит по ссылке, полученной по e-mail.
<br><br>
После установки плагина, в качестве примера, введен простой текст.
<br><br>
Дальнейшие настройки возможны с примением специальных тэгов: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки названия Вашей галереи.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>  - для вставки URL-адреса Вашей галереи, установленного в настройках Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> - для вставки имени пользователя.<br>
<br><br>
Поле совместимо с редактором FCK Editor, и, для мультиязыкового варианта, Вы можете применять тэг [lang] из плагина Extended description (если он активирован, конечно).';
$lang['UAM_confirmmail_custom1_d'] = 'Когда функция &quot;Подтверждение регистрации&quot; активна, то в этом поле можно настроить <b><u>текст соглашения</u></b>, который отображается на странице подтверждения регистрации, на которую пользователей переходит по ссылке, полученной по e-mail.
<br><br>
После установки плагина, в качестве примера, введен простой текст.
<br><br>
Дальнейшие настройки возможны с примением специальных тэгов: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки названия Вашей галереи.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>  - для вставки URL-адреса Вашей галереи, установленного в настройках Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> - для вставки имени пользователя.<br>
<br><br>
Поле совместимо с редактором FCK Editor, и, для мультиязыкового варианта, Вы можете применять тэг [lang] из плагина Extended description (если он активирован, конечно).';
$lang['UAM_GTAutoDelTitle_d'] = 'Это возможно, когда пользователь, у которого истек срок аккаунта, сам запускает механизм его удаления (такое редко, но возможно). Затем он отключается от галереи и перенаправляется на страницу, показывающую удаление его аккаунта и возможных причин удаления.
<br><br>
Дальнейшие настройки возможны с примением специальных тэгов: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки названия Вашей галереи.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>  - для вставки URL-адреса Вашей галереи, установленного в настройках Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> - это  тэг недоступен, потому что в данном случае конкретный пользователь был удален.
<br><br>
Ваш текст для страницы перенаправления можно ввести в это поле, совместимое с редактором FCK Editor, и, для мультиязыкового варианта, Вы можете применять тэг [lang] из плагина Extended description (если он активирован, конечно).';
$lang['UAM_USRAutoDelTitle_d'] = 'Это возможно, когда пользователь, у которого истек срок аккаунта, сам запускает механизм его удаления (такое редко, но возможно). Затем он отключается от галереи и перенаправляется на страницу, показывающую удаление его аккаунта и возможных причин удаления.
<br><br>
Дальнейшие настройки возможны с примением специальных тэгов: <br>
- <b style=&quot;color: red;&quot;>[mygallery]</b> - для вставки названия Вашей галереи.<br>
- <b style=&quot;color: red;&quot;>[myurl]</b>  - для вставки URL-адреса Вашей галереи, установленного в настройках Piwigo.<br>
<b style=&quot;color: red;&quot;>[username]</b> - это  тэг недоступен, потому что в данном случае конкретный пользователь был удален.
<br><br>
Ваш текст для страницы перенаправления можно ввести в это поле, совместимое с редактором FCK Editor, и, для мультиязыкового варианта, Вы можете применять тэг [lang] из плагина Extended description (если он активирован, конечно).';
$lang['UAM_ghosttrackerTitle_d'] = 'Так называемый &quot;Ghost Tracker&quot;; если эта функция включена, то Вы можете управлять Вашими посетителями в зависимости от частоты их посещения Вашей галереи. Доступны 2 режима работы:<br><br>
- Ручное управление: Когда достигнуто определенное время между двумя визитами, посетитель заносится в таблицу &quot;Ghost Tracker&quot;, где Вы сможете направить напоминание этому посетителю или удалить его.<br><br>
- Автоматизированное управление: Когда достигнут определенный период между 2 последовательными посещениями, посетитель автоматически удаляется, либо перемещается в группу ожидания, и/или у него понижается статус. В этом случае соответствующая информация может быть отправлена ​​к нему по е-mail.<br><br>
<b style=&quot;color: red;&quot;>Важное замечание: Если Вы включили эту функцию в первый раз, или она возобновлена ​​после долгого перерыва, в течение которого были зарегистрированы новые посетители, то Вы должны инициализировать или перезагрузить Ghost Tracker (смотрите необходимые инструкции на вкладке &quot;Ghost Tracker&quot;.</b>
';
$lang['UAM_usermanTitle_d'] = 'При включении ограничения крайнего срока регистрации, Вы найдете ниже полный список пользователей, чьи регистрации подтверждены, или их регистрация находится в ожидании подтверждения.<br><br>
Дата регистрации отображается зеленым цветом, пока для пользователя не истек срок, чтобы подтвердить свою регистрацию. В этом случае ключ подтверждения все еще действителен, и мы можем послать новый e-mail, в том числе или без нового ключа подтверждения.<br><br>
Когда дата регистрации отображается красным цветом, это означает, что срок подтверждения истек. В этом случае Вы должны отправить письмо с вновь сгенерированным ключом подтверждения, если, конечно, Вы хотите ,чтобы пользователь мог подтвердить свою регистрацию.
<br><br>
В любом случае, возможно и принудительно, вручную выполнить подтверждение. <br><br>
В этом режиме Вы можете:
<br><br>
- Вручную удалять аккаунты <b>(ручная чистка)</b>
<br>
- Создавать e-mail с напоминаниями <b>без</b> генерирования нового ключа. Предупреждение: Отправляйте письмо с напоминанием нужным посетителям. Эта функция не сбрасывает дату регистрации нужных посетителей и значение оставшегося времени остается в силе.
<br>
- Создавать e-mail с напоминаниями <b>c</b> генерированием нового ключа. Предупреждение: Отправляйте письмо с напоминанием нужным посетителям. Эта функция сбрасывает первичную дату регистрации, что равносильно продлению крайнего срока для подтверждения регистрации.
<br>
- Подтвердить регистрацию вручную, даже если срок годности истек <b>(принудительное подтверждение)</B>.
<br><br>
<b>Фукнкция сортировки таблиц</b>: Вы можете сортировать отображаемые данные, щелкнув по заголовку нужного столбца. Удерживайте клавишу SHIFT, чтобы сортировать одновременно до 4 столбцов.';
$lang['UAM_confirmmailTitle_d'] = 'Эта опция позволяет пользователю либо подтвердить регистрацию, нажав на ссылку полученную в сообщении, отправленном при регистрации; либо регистрация активируется администраторами вручную.
<br><br>
В первом случае, электронное письмо состоит из настраиваемой части ("Приветствие") и фиксированной части, содержащей ссылку активации, которая генерируется из случайных ключей, работу с которыми можно настроить через вкладку &quot;Отслеживание подтверждений&quot;.
<br><br>
Во втором случае, администраторам гелереи отправляется проверочная ссылка. Посетители должны ждать до тех пор, пока администратор подтвердит их сам, используя ссылку проверки или на вкладке quot;Отслеживание подтверждений&quot;.
<br>
<b style=&quot;color: red;&quot;>Обратите внимание: Опции &quot;Ограничение крайнего срока подтверждения регистрации&quot; и &quot;Напоминание неподтвержденным пользователям&quot; отключаются в случае, когда админам разрешено подтверждать пользователей вручную.</b>
<br><br>
Эта опция обычно используется для автоматического назначения группы и/или статуса. Например, пользователь, который не подтвердил свою регистрацию будут перенесен в определенную группу пользователей (с ограничениями или без них), а пользователь, который подтвердил свою регистрацию, сразу попадает в &quot;нормальную&quot; группу.';
$lang['UAM_remailTitle_d'] = 'Эта опция позволяет отправить напоминание по электронной почте для пользователей, зарегистрированных, но не подтвердивших свою регистрацию вовремя. Поэтому она работает совместно с разделом &quot;Подтверждение регистрации&quot;
<br><br>
Можно отправлять 2 типа e-mail: с генерацией ключа подтверждения или без этого ключа. При необходимости можно самостоятельно настроить содержание электронных писем.
<br><br>
Перейдите к вкладке &quot;Отслеживание подтверждений&quot; 
<br><br>
Если этот параметр и параметр &quot;Ограничение крайнего срока для подтверждения регистрации&quot; активированы, то ниже в этом разделе появятся новые опции, включающие элементы автоматизации для управления неподтвержденными пользователями.';
$lang['UAM_confirmstatTitle_d'] = '<b style=&quot;color: red;&quot;> Предупреждение: Для использования статусов на подтверждение требуется, чтобы Вы сохранили настройки пользователя  &quot;Гость&quot; по умолчанию (в качестве шаблона) для новых зарегистрированных. Обратите внимание, Вы можете установить любого другого пользователя в качестве шаблона для вновь регистрирующихся. Пожалуйста, обратитесь к документации Piwigo для получения более подробной информации. </b><br><br>
Статусы утверждены для использования в сочетании с функциями раздела &quot;Подтверждение регистрации&quot;.';
$lang['UAM_passwTitle_d'] = 'Включение этой опции делает обязательным анализ пароля, заданного при регистрации. Включается требование, чтобы посетитель выбирал пароль, который бы был не хуже, чем установленный минимальный уровень сложности. Если не будет достигнуто пороговое значение сложности пароля, то отображаются оценка достигнутого уровня и требуемый минимальный балл, а также рекомендации увеличить значение до этого показателя. <br><br>
В этом поле проводится тест для измерения сложности пароля. Эта оценка позволяет получить пользователю представление о сложности его текущего пароля. <br><br>
Примечение: оценка пароля проводится на основании нескольких параметров - длина, тип применяемых символов (буквы, цифры, верхний регистр, нижний регистр, спецсимволы). Оценка ниже 100 считается низкой, от 100 до 500 - средней сложности, более 500 - отличная.';
$lang['UAM_PwdResetTitle_d'] = 'Включение этой опции добавляет новую функцию в панели управления пользователями (Пользователи > Управление), которая может применяться для обновления паролей для выбранных пользователей. Кроме того, добавляется новый столбец, показывающий статус пароля для каждого из них, со следующими значениями:<br>
- Пароль на обновлении: запланирован запрос на обновление пароля. <br>
- Пароль обновлен: пароль был обновлен после запроса.<br>
- Оригинальный (исходный) пароль: пароль, выбранный при создании аккаунта; необходимости в обновлении нет.<br>

Функция не распространяется на аккаунты вебмастера, универсальные и гостевые аккаунты.<br>
Эти пользователи будут автоматически переадресованы к странице их настроек при каждом входе в галерею. До тех пор, пока они не изменят свой пароль, данное сообщение будет показываться на этой странице.';
?>