# PersianRandomFamily
تولید کننده نام و نام خانوادگی رندوم فارسی


## توضیحات
تو نرم افزاری که دارم میسازم نیازمند یک تولید کننده نام و نام خانوادگی تصادفی بودم و تو وب فارسی چیز درستی پیدا نکردم.

یه اسکریپت چند خطی نوشتم که اطلاعات رو از فایل های داخل پوشه ``data`` بگیره و به صورت رندوم یکیشون رو انتخاب کنه و در نهایت نشون بده!

هم میتونی از فایل های درون پوشه ``data`` استفاده کنی و هم از چند خط کدی که زدم :))
## عملکرد اسکریپت
ابتدا لیست نام رو از فایل ``data/name.txt`` استخراج میکنیم و بعد تبدیل به آرایه می کنیم. سپس یکی از اسم هارو به صورت رندوم برمیداریم.

برای فامیلی هم ذقیقا همین اتفاق ولی با فایل ``data/family.txt`` تکرار میشه.


## نحوه استفاده
اگر بخوایم نام و نام خانوادگی به صورت یک رشته نشون داده بشه فقط کافیه آدرس صفحه مورد نظر فراخوانی شه، مثلا:

``www.example.com/PersianRandomFamily/index.php``


 اگر خواستیم اسم و فامیلی به صورت جدا در یک آرایه نشون داده شه آخر فایل فراخوانی شده عبارت زیر رو  میزاریم:

``www.example.com/PersianRandomFamily/index.php?m=json``
