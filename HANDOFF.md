# FinanceLab — HANDOFF (sessiyalararo kontekst)

> Yangi sessiya: shu faylni to'liq o'qi, `git log --oneline -n 10` ni tekshir, keyin ishni davom ettir.
> Til: o'zbekcha. Uslub: qisqa, aniq, `fayl:qator` ko'rsatgan holda.

## 1. Loyiha
- Laravel 10 + PHP 8.1 + MariaDB 10.8 (`financelab` bazasi). Frontend: Next.js statik saytning Blade porti (dizayn 1:1).
- Ish rejimi: user 4 yillik web dasturchi. Tasklarni bittadan beradi, men faqat o'shani bajaraman.
- **Commit qoidasi: faqat user "commit qil" deganda commit. Push ni user cmd dan qiladi.**

## 2. Muhit (bu mashinada — noutbukda farq qilishi mumkin, moslash!)
- Loyiha: `D:\OSPanel\domains\financelab`
- PHP: `D:\OSPanel\modules\php\PHP_8.1\php.exe` (PATH da php YOK)
- Composer: `php D:\OSPanel\userdata\composer\composer.phar ...` (2.4-dev, eski)
- Next.js source: `D:\FinanceLab-source\financelab`, cPanel build: `D:\FinanceLab-cPanel`
- Live sayt: `https://financelab.uz/` (ESKI build!), local: `http://127.0.0.1:8000/`
- Test server: `php artisan serve --host=127.0.0.1 --port=8001` (fon), keyin o'chirish.
- Taqqoslash skripti: `C:\Users\muhri\AppData\Local\Temp\opencode\compare.ps1` (live vs local, `-ExecutionPolicy Bypass`)

## 3. Arxitektura
- Route → Controller → `SiteContent` service → View. View larda `config()` YOK (faqat `View::share` dagi chrome).
- `app/Services/SiteContent.php` — kontent ombori (hozir: pages config, projects/articles DB).
- Controllerlar: `HomeController`, `SectionController` (`->defaults('section', ...)` bilan!), `ProjectController`, `InsightController`, `MediaController`, `Admin\*`.
- Sahifalar: `/`, 9 section, `/projects/{slug}`, `/insights/{slug}`, `/media/{slug}`, 404.
- Admin: `/admin` (AdminLTE) — login, dashboard (widgetlar), articles/projects CRUD, profil, parol. `admin` middleware + `role=admin`.
- Admin login: `admin@financelab.uz` / `password` (almashtirish kerak!).
- Rasmlar: `public/uploads/...` (symlink shart emas). Modelda `image_url`, `href`, `date` accessorlar.
- Telescope `/telescope` (local ochiq, prod gate bo'sh).

## 4. Topilgan muammolar (qayta bosma!)
- **Blade `@if(` ni HTML ga yopishtirma**: `<span@if...` kompilyatsiyani buzadi. Inline shart → ternary `{{ }}`; `@foreach`/`@include` yopishsa bo'ladi.
- **`{{ }}` qo'shtirnoqni escape qiladi** — HTML atribut ichidagi ternary `{!! !!}` bo'lsin.
- **`next/image fill` inline style** talab qiladi (`position:absolute;height:100%;...`), CSS da yo'q.
- **Live sayt ESKI**, source YANGI: 2 maqola `/insights/X` → `/media/X` ko'chgan. Launch da redirect shart!
- Eski sprite kartalar slug-xarita bilan, yangilar yuklangan foto bilan (fallback bor).

## 5. Bajarildi (git log da ko'rinadi)
1. `ad51706` init. 2. `e01f9f7` faqat users migration. 3. `df25d81` Blade port (13 sahifa). 4. `195fae6` MVC+Telescope+AdminLTE. 5. `721ff18` CRUD+profil+menyu+widgetlar.

## 6. Keyingi qadamlar (navbat bilan, user aytadi)
- Email ochilgach: Contact forma backend (POST + mail + DB + Telescope).
- 3 til (RU/UZ): avval inglizcha tugagan, tarjima keyin (ma'no kafolati yo'q — mijoz tekshiradi).
- Launch: eski 2 URL ga redirect, Telescope gate email, admin parol, `telescope:prune` schedule.
- Buyurtmachi qo'shimcha admin menyularni aytadi.
