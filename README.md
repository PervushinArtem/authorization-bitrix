# Authorization without a password in Bitrix (Bitrix, Bitrix24, Bitrix24 + CRM)

Very often, novice developers wait until they are given access to a site on Bitrix, not knowing that you can log in without access

The advantage of this method:
- the minimum degree of protection. Only the developer knows the password
- the script itself is deleted after authorization
- you can log in under any user, including the admin

For authorization, you need to go in the browser to the script thrown into the root of the site - /auth.php?ADMIN=AUTORIZE111

# Авторизация без пароля в Bitrix (Bitrix, Bitrix24, Bitrix24 + CRM) 

Очень часто начинающие разработчики ждут пока им выдадут доступ к сайту на Bitrix не зная, что авторизоваться можно и без доступа

Преимущество этого метода:
- минимальная степень защиты. Пароль занает только разработчик
- скрипт сам удаляется после авторизации
- авторизоваться можно под любым пользователем, включая админа

Для авторизации необходимо перейти в браузере на закинутый в корень сайта скрипт - /auth.php?ADMIN=AUTORIZE111
