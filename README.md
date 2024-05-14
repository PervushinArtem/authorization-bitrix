# Authorization without a password in Bitrix (Bitrix, Bitrix24, Bitrix24 + CRM)

Very often, novice developers wait until they are given access to a site on Bitrix, not knowing that you can log in without access

The advantage of this method:
- the minimum degree of protection. Only the developer knows the password
- The script stops working a minute after being uploaded to the site
- the script itself is deleted after authorization
- the script will become useless after 60 seconds after uploading to the site
- you can log in under any user, including the admin

For authorization, you need to go in the browser to the script thrown into the root of the site - /auth-1.php?ADMIN=AUTORIZE111

# Авторизация без пароля в Bitrix (Bitrix, Bitrix24, Bitrix24 + CRM) 

Очень часто начинающие разработчики ждут пока им выдадут доступ к сайту на Bitrix не зная, что авторизоваться можно и без доступа

Преимущество этого метода:
- минимальная степень защиты. Пароль занает только разработчик
- скрипт перестает действовать через минуту после заливки на сайт
- скрипт сам удаляется после авторизации
- скрипт сстановится бесполезным по истечении 60 секунд, после заливки на сайт
- авторизоваться можно под любым пользователем, включая админа

Для авторизации необходимо перейти в браузере на закинутый в корень сайта скрипт - /auth-1.php?ADMIN=AUTORIZE111
