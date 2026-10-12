# FinanceLab — HANDOFF (sessiyalararo kontekst)

> Yangi sessiya: shu faylni to'liq o'qi, `git log --oneline -n 10` ni tekshir, keyin ishni davom ettir.
> Til: o'zbekcha. Uslub: qisqa, aniq, `fayl:qator` ko'rsatgan holda.

## 1. Loyiha
- Laravel 10 + PHP 8.1 + MariaDB 10.8 (`financelab` bazasi). Frontend: Next.js statik saytning Blade porti (dizayn 1:1).
- Ish rejimi: user 4 yillik web dasturchi. Tasklarni bittadan beradi, men faqat o'shani bajaraman.
- **Commit qoidasi: faqat user "commit qil" deganda commit. Push ni user cmd dan qiladi.**

## 2. Muhit (mashinaga qarab farq qiladi, moslash!)
- Ish PC: `D:\OSPanel\domains\financelab`, PHP: `D:\OSPanel\modules\php\PHP_8.1\php.exe`, Composer: `php D:\OSPanel\userdata\composer\composer.phar ...`
- PATH da php/composer YO'Q. Test server: `artisan serve --host=127.0.0.1 --port=8001` (fon), keyin o'chirish.
- Next.js source: `D:\FinanceLab-source\financelab`, cPanel build: `D:\FinanceLab-cPanel` (faqat ish PC da).
- Live: `https://financelab.uz/` (ESKI build!), local: foydalanuvchi serveri (`:8000`).
- Taqqoslash skripti: `compare.ps1` (temp/opencode da edi — kerak bo'lsa qayta yoz).

## 3. Arxitektura
- Route → Controller → `SiteContent` service → View. View larda `config()` YO'Q (faqat `View::share` chrome: siteNav, siteContact, siteName/Tagline/Description/Copyright + `locale`, `localePrefix`, `enUrl`/`ruUrl`/`uzUrl`).
- 3 til: EN ildizda (joriy URL lar), RU `/ru/`, UZ `/uz/`; slug lar barcha tilda bir xil EN. DB (articles/projects) tarjima qilinmaydi.
- `SetLocale` middleware (web guruhda 1-chi): 1-segment → locale; `shared()` ni joriy tilda qayta share qiladi (boot dagi EN share ni bosadi).
- `SiteContent::data()`: EN da `config('site')`, RU/UZ da `lang/{locale}/site.php` merge (`array_replace_recursive`, tuzilma bir xil bo'lsin!). `industryImages` — `anchor` kalitda (tarjima nom bilan emas!).
- `Article::href` til prefiksli; sana `date` EN formatda (`12 Sep 2026`). Kontakt forma JS matnlari `data-*` atributlardan (`site.js`).
- `SectionController@show` route da `->defaults('section', ...)` bilan ishlaydi (placeholder yo'q!).
- Sahifalar: `/`, 9 section, `/projects/{slug}`, `/insights/{slug}`, `/media/{slug}`, 404.
- Admin `/admin` (AdminLTE): login, dashboard (Murojaatlar+Loyihalar+Maqolalar+Foydalanuvchilar), articles/projects CRUD, murojaatlar (faqat ko'rish), statik rasmlar (11 chrome rasm, o'rniga yoziladi), profil, parol. `admin` middleware + `role=admin`.
- Admin: `admin@financelab.uz` / `password` (ALMASHTIRISH KERAK!).
- Maqola/loyiha `locale` (en/ru/uz): SiteContent filter, admin da "Til prefiksi", slug unique (slug+locale). EN da faqat EN ko'rinadi.
- Modellar: `Article` (`date`, `href`, `image_url` accessorlar; `body` — HTML string, MEDIUMTEXT), `Project` (`image_url`).
- Maqola matni: TinyMCE (self-hosted `public/vendor/tinymce/`, GPL) → `body` HTML → saytda `clean(...,'article')` (`config/purifier.php`). Matn ichi rasm: `POST admin/upload-image` → `uploads/articles` (WebP). Muqova Rasm maydoni YO'Q (matndagi 1-rasm kartaga avtomatik), `sort_order` UI da YO'Q (tartib Id bo'yicha, yangisi birinchi). Stillar: `.article-body` (`site.css`).
- Telescope `/telescope` (prod: `TELESCOPE_ENABLED=false`). Prune: `telescope:prune --hours=72` daily (`Kernel.php`) + cPanel cron har daqiqa. MUHIM: hosting CLI PHP segfault beradi (biror extension) → cron minimal to'plamda: `php -n -d extension_dir=... -d extension=mbstring.so,pdo.so,pdo_mysql.so,dom.so artisan schedule:run`. Sayt web SAPI da — unga taalluqli emas.
- `.gitignore`: `/public/financelab_img` (53MB manba!), `/public/uploads` (user yuklaganlari).
- Ildiz `.htaccess`: hammasini `public/` ga rewrite (cPanel deploy uchun — docroot=public_html=loyiha ildizi). Local `financelab:82` ham shu rejimda.
- `public/adminer.php` — user qo'ygan (DB boshqaruv, git da).
- Kontakt forma: POST `/contact|/ru/contact|/uz/contact` → `ContactController@store` → validatsiya → `contact_messages` DB → Gmail SMTP (`financelab.messages@gmail.com`, App Password) → `sherovatov92@gmail.com` ga. Tugma "Send message" (3 til). Xat HTML shablon (`emails.contact`, inline CSS). `replyTo` — `new Address()` shart (assoc massiv ishlamaydi!). Privacy matni server-yuborishga moslangan (3 til).

## 4. Rasmlar (2026-10-09 holati)
- Manba: `public/financelab_img/` (17 fayl, git da YO'Q!) → `public/images/*.webp` (max 1600px, q82).
- Logo: `logo.webp` (kolba, yozuvsiz). Hero: `hero.webp` foto (sprite o'rniga).
- Kartalar ENDI SPRITE EMAS, foto: pillar (advisory/academy/media), industry (5 ta), project/insight (record `image`).
- Sprite `design-reference.png` FAQAT founder portretida qoldi. O'chirilgan: `financelab-brand.png`, `architecture.webp`.
- DB rasmlari: `UpdateContentImagesSeeder` (faqat image ustuni!) + `ContentSeeder` da yangi yo'llar.
- **Upload pipeline** (`ManagesContent::upload`): validatsiya (img, 5MB) → resize 1600 → WebP82 → `slug-vaqt.webp` → eski o'chadi, yozuv o'chsa fayl o'chadi. Jonli testdan o'tgan.
- Yangi maqola/loyiha rasmsiz bo'lsa karta/detail bo'sh chiqadi (500 YO'Q — fallback/guard bor).

## 5. Topilgan muammolar (qayta bosma!)
- Blade `@if(` ni HTML ga yopishtirma (`<span@if` buzadi) → inline ternary `{{ }}`; `@foreach`/`@include` yopishsa bo'ladi.
- `{{ }}` da atribut ternary `{!! !!}` bo'lsin (escape!).
- `next/image fill` inline style talab qiladi (detail/article img larda bor).
- Live ESKI, source YANGI: 2 maqola `/insights/X` → `/media/X`. Launch da redirect shart!
- Tarjima qiymat kalit bo'lmasin: `$industryImages[$ind['name']]` RU da 500 berdi → `anchor` bilan (`SiteContent::common` rekey).
- Metrika `value` ham tarjimada bo'lsin (`Multiple`/`Real-world` qoldig'i — `lang/ru|uz/site.php` metrics).
- `View::share` boot da EN — til middleware da qayta share shart, aks holda RU/UZ EN chiqadi.
- HTMLPurifier eski: `mark`/`figure`/`figcaption` Allowed da 500 beradi → ro'yxatdan chiqar (ajratish `backcolor` span bilan).
- JSON kolonka CHECK: `body` JSON→TEXT migratsiyada `DROP CHECK` ishlamadi → yangi ustun+ma'lumot ko'chirish+eski o'chirish.

## 6. Bajarildi (git log)
`ad51706` init → `e01f9f7` users migration → `df25d81` Blade port → `195fae6` MVC+Telescope+AdminLTE → `721ff18` CRUD+profil+menyu → `49ef463` HANDOFF → `60ce1a0` rasmlar+pipeline (+navbar bold 15px, metrics 8+) → RU i18n (`/ru/`, `lang/ru/`) → UZ i18n (`/uz/`, `lang/uz/`, SetLocale/routes/Article umumlashtirildi, header da 3 til) → kontakt backend (contact_messages, Gmail SMTP, HTML xat) → murojaatlar (read-only) + dashboard Murojaatlar + statik rasmlar (`config/static_images.php`, `ManagesContent::convertToWebp` reuse) → maqola rich-text (TinyMCE, `body` HTML, purifier, matn ichi rasm) → forma soddalashdi (maqolada Rasm/Tartib yo'q, muqova matnga ko'chdi, karta rasmi avtomatik; Tartib hamma joyda olib tashlandi, tartib Id bo'yicha).

## 7. Keyingi (user aytadi)
- Launch yakuni: APP_DEBUG=false ✅, Telescope yopiq ✅, prune+cron ✅ (hosting segfault → minimal ext to'plam), admin parol (mijoz), redirectlar KERAK EMAS (sayt 3 kunlik, indeks yo'q).
- Kontakt: mijoz emailiga test YUBORILDI ✅ (`sherovatov92@gmail.com`, ok:true).
- RU+UZ kontent: admin orqali tarjimalar qo'shilmoqda (bir xil slug + Til prefiksi).
