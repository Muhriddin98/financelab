<?php

// Statik matnlarning oʻzbekcha varianti. Tuzilma config/site.php bilan bir xil
// bo'lishi shart (SiteContent array_replace_recursive bilan merge qiladi).
// Slug, image, href, anchor, email, sana va DB seed datalari (projects,
// insights) BU YERDA EMAS — ular o'z holicha qoladi.
return [
    'site' => [
        'description' => 'FinanceLab — Moliyaviy va investitsiya konsaltingi',
        'nav' => [
            ['label' => 'Konsalting'],
            ['label' => 'Akademiya'],
            ['label' => 'Media'],
            ['label' => 'Tadqiqotlar'],
            ['label' => 'Biz haqimizda'],
        ],
        'metrics' => [
            ['label' => 'Koʻrib chiqilgan loyihalar'],
            ['label' => 'Yillik professional tajriba'],
            ['value' => 'Turli', 'label' => 'Iqtisodiyot tarmoqlari'],
            ['value' => 'Amaliy', 'label' => 'Ekspertiza va tahlil'],
        ],
        'hero' => [
            'eyebrow' => 'MOLIYAVIY TAHLIL.',
            'lines' => ['Moliyaviy', 'tafakkur.', 'Amaliyotda.'],
            'description' => 'Modellaymiz. Tahlil qilamiz. Oʻrgatamiz. Tushuntiramiz.',
            'note' => 'Moliyaviy ekspertizani yaxshi qarorlar, bilim va imkoniyatlarga aylantiramiz.',
        ],
        'founder' => [
            'name' => 'Laziz Sherovatov',
            'role' => 'Moliyaviy modellashtirish va investitsion tahlil mutaxassisi',
            'bio' => [
                'Laziz Sherovatov — moliyaviy-iqtisodiy baholash, texnik-iqtisodiy asoslash hujjatlarini ishlab chiqish va ekspertizadan oʻtkazish hamda investitsiya loyihalarini tahlil qilish sohasida sakkiz yildan ortiq professional tajribaga ega moliyaviy modellashtirish va investitsiya tahlili boʻyicha mutaxassis.',
                'Konchilik, metallurgiya, avtomobilsozlik va sanoat ishlab chiqarishi sohalaridagi loyihalar bilan ishlash tajribasiga ega boʻlgan holda, u amaliy ekspertizani moliyaviy konsalting, professional taʼlim va tahliliy tadqiqotlarda qoʻllash maqsadida FinanceLabʼga asos solgan.',
            ],
        ],
        'footer' => ['copyright' => '© 2026 FinanceLab. Barcha huquqlar himoyalangan.'],
    ],

    'about_page' => [
        'who' => [
            'label' => 'Biz kimmiz',
            'title' => 'Tajriba asosida. Tahlil bilan.',
            'paragraphs' => [
                'FinanceLab — Laziz Sherovatov asos solgan, Oʻzbekistondagi moliyaviy va investitsion konsalting brendi.',
                'Moliyaviy modellashtirish, investitsion tahlil, TIA va mustaqil moliyaviy-iqtisodiy ekspertizadagi katta tajribaga tayanib, FinanceLab murakkab moliyaviy va iqtisodiy axborotni qarorga tayyor, aniq xulosalarga aylantiradi.',
                'Konchilik, metallurgiya, avtosanoat va ishlab chiqarish loyihalaridagi amaliy tajriba bizga tahliliy jiddiylikni real soha tushunchasi bilan birlashtirib, investitsion va biznes qarorlarni qoʻllab-quvvatlash imkonini beradi.',
            ],
        ],
        'approach' => [
            'label' => 'Bizning yondashuv',
            'title' => 'Murakkablikdan ravshanlikka.',
            'paragraphs' => [
                'Yaxshi moliyaviy qarorlar hisob-kitobdan koʻproq narsani talab qiladi. Ular asosli farazlarga, biznes va soha iqtisodiyotini aniq tushunishga hamda risklar, noaniqliklar va muqobil natijalarni koʻra bilishga bogʻliq.',
                'Bizning yondashuvimiz qatʼiy moliyaviy tahlilni amaliy loyiha tajribasi bilan birlashtiradi. Texnik, tijorat va moliyaviy farazlar qanday bogʻlanishini oʻrganamiz, ularning oqibatlarini baholaymiz va natijalarni mazmunli xulosalarga aylantiramiz.',
            ],
            'cards' => [
                ['title' => 'Tahliliy jiddiylik', 'text' => 'Shaffof farazlar, izchil usullar va dalillarga asoslangan xulosalar.'],
                ['title' => 'Sohani tushunish', 'text' => 'Real biznes va loyiha iqtisodiyotiga asoslangan moliyaviy tahlil.'],
                ['title' => 'Qarorga yoʻnaltirish', 'text' => 'Asosli investitsion va boshqaruv qarorlarini qoʻllab-quvvatlovchi amaliy xulosalar.'],
            ],
        ],
    ],

    'pillars' => [
        ['name' => 'FinanceLab Advisory', 'verb' => 'BIZ YECHIM TOPAMIZ.', 'description' => 'Asoslangan qarorlar qabul qilish va biznesning barqaror rivojlanishi uchun moliyaviy modellashtirish, texnik-iqtisodiy asoslash va tahliliy yechimlar.'],
        ['name' => 'FinanceLab Academy', 'verb' => 'BIZ O‘RGATAMIZ.', 'description' => 'Moliyaviy mutaxassislarning yangi avlodini tayyorlashga qaratilgan, real loyiha tajribasiga asoslangan amaliy moliyaviy ta’lim.'],
        ['name' => 'FinanceLab Media', 'verb' => 'BIZ TUSHUNTIRAMIZ.', 'description' => 'Moliya, investitsiyalar va tarmoqlar iqtisodiyoti bo‘yicha tushunarli izohlar, chuqur tahlillar va dalillarga asoslangan tadqiqotlar.'],
    ],

    'services' => [
        'Moliyaviy modellashtirish va investitsiya tahlili',
        'Texnik-iqtisodiy asoslash',
        'Mustaqil moliyaviy-iqtisodiy ekspertiza',
        'Biznes diagnostikasi va moliyaviy tahlil',
        'Maʼlumotlar tahlili va vizuallashtirish',
        'Korporativ veb-saytlarni ishlab chiqish va texnik qo‘llab-quvvatlash',
    ],

    'service_descriptions' => [
        'Loyiha iqtisodiyoti, investitsiya qaytimi, moliyalashtirish ehtiyoji va moliyaviy risklarni baholash uchun kompleks moliyaviy modellarni ishlab chiqamiz.',
        'Loyiha hayotiyligini baholash uchun texnik, tijorat va investitsion farazlarni birlashtirgan moliyaviy va iqtisodiy asoslashlarni ishlab chiqamiz.',
        'TIA, moliyaviy modellar va investitsion farazlarni mustaqil baholab, zaif joylar, nomuvofiqliklar va muhim moliyaviy risklarni aniqlaymiz.',
        'Biznes natijalari, moliyaviy holat, xarajatlar tuzilmasi va pul oqimlarini baholab, rentabellikning asosiy omillari va yaxshilash imkoniyatlarini aniqlaymiz.',
        'Xom biznes maʼlumotlarini qayta ishlash, tahlil va interaktiv vizuallashtirish (Python, SQL, Power BI) orqali tizimli, amaliy xulosalarga aylantiramiz.',
        'Raqamli ishtirokni kuchaytiruvchi, biznes qiymatini yetkazuvchi va manfaatdor tomonlarni jalb qiluvchi professional korporativ saytlarni loyihalab, ishlab chiqib va qo‘llab-quvvatlaymiz.',
    ],

    'service_groups' => [
        ['title' => 'Asosiy moliyaviy konsalting', 'description' => 'Oqilona biznes qarorlar uchun moliyaviy va investitsion konsalting xizmatlari.'],
        ['title' => 'Maʼlumotlar va raqamli yechimlar', 'description' => 'Axborotni biznes qiymatiga aylantiruvchi maʼlumotlar tahlili va raqamli yechimlar.'],
    ],

    'service_bodies' => [
        [
            'Biz operatsion farazlarni moliyaviy natijalar bilan bog‘lovchi kompleks moliyaviy modellarni quramiz: daromad omillari, xarajatlar, kapital qo‘yilmalar, aylanma mablag‘, qarz va o‘z kapitali. Har bir muhim faraz hujjatlashtirilgan va kuzatiladigan — qaror qabul qiluvchilar natijani nima shakllantirishini aniq ko‘radi.',
            'Modellar bezak uchun emas, qarorlar uchun quriladi. Ssenariy va sezuvchanlik tahlili hajmlar, narxlar, xarajatlar yoki muddatlar o‘zgarganda qaytim qanday o‘zgarishini ko‘rsatadi — homiylar, kreditorlar va investorlarga mablag‘ kiritishdan oldin realistik baza ssenariyda kelishishga yordam beradi.',
        ],
        [
            'TIA bozor imkoniyatini texnik haqiqat va moliyaviy imkoniyat bilan bog‘laydi. Talab, narxlar, ishlab chiqarish yoki xizmat hajmlari, investitsion ehtiyojlar va operatsion xarajatlarni yagona izchil tuzilmada baholaymiz.',
            'Natija — investitsion darajadagi hujjat: hayotiylik, moliyalashtirish ehtiyojlari, qoplanish va risk omillari bo‘yicha aniq xulosalar — aksiyadorlar, banklar va rivojlanish institutlari uchun mos.',
        ],
        [
            'Mustaqil ekspertiza model, TIA yoki investitsion taklifning yaxlitligini tekshiradi. Farazlar mantiqi, hisob-kitoblar izchilligi va prognozlar realligini bozor va loyiha maʼlumotlariga solishtirib tekshiramiz.',
            'Tizimli xulosa olasiz: nima ishonchli, nima mo‘rt va qarorgacha nimani o‘zgartirish kerak — qarordan keyin emas.',
        ],
        [
            'Diagnostika sizda bor raqamlardan boshlanadi: moliyaviy hisobotlar, boshqaruv hisobotlari va operatsion maʼlumotlar. Rentabellik, xarajatlar tuzilmasi, pul aylanishi va moliyaviy holatni o‘rganib, qiymat qayerda yaratilishi — va qayerda sizib chiqishini topamiz.',
            'Xulosalar ustuvorliklarga aylanadi: qaysi omillarni boshqarish, qaysi xarajatlarni hal qilish va pul oqimi hamda qaytimni birinchi navbatda nima yaxshilashi.',
        ],
        [
            'Xom biznes maʼlumotlari faqat tuzilmalangan va ko‘rinarli bo‘lganda foydali bo‘ladi. Jadvallar, hisob tizimlari va boshqa manbalardan maʼlumotlarni yig‘ib, tozalab, modellashtirib, interaktiv doshboard va hisobotlar quramiz.',
            'Python, SQL va Power BI yordamida takrorlanuvchi qo‘lda hisobotlarni natijalarning jonli ko‘rinishiga aylantiramiz — rahbarlar muammolarni erta ko‘radi va taxmin bilan emas, dalillar bilan harakat qiladi.',
        ],
        [
            'Korporativ sayt ko‘pincha hamkor, mijoz yoki kreditorning birinchi due diligence qadami bo‘ladi. Biznes nima bilan shug‘ullanishi va nima uchun ishonchli ekanini tushuntiruvchi tez, tushunarli va professional saytlarni loyihalab yaratamiz.',
            'Ishga tushgach saytni qo‘llab-quvvatlaymiz: kontent yangilash, texnik holat va kichik yaxshilashlar — raqamli ishtirok jamoangizga yuk bo‘lmasdan dolzarb qoladi.',
        ],
    ],

    'industries' => [
        ['name' => 'Konchilik va metallurgiya'],
        ['name' => 'Avtomobilsozlik'],
        ['name' => 'Sanoat ishlab chiqarishi'],
        ['name' => 'Energetika'],
        ['name' => 'Infratuzilma'],
    ],

    'industry_descriptions' => [
        'Loyiha iqtisodiyoti, ishlab chiqarish farazlari va kapital rejalash.',
        'Mahalliylashtirish, yigʻish iqtisodiyoti va ishlab chiqarishni koʻpaytirish.',
        'Quvvat, birlik iqtisodiyoti va aylanma mablagʻ ehtiyoji.',
        'Kapital ehtiyoji, operatsion ssenariylar va uzoq muddatli qaytim.',
        'Uzoq yashovchi aktivlar, talab ssenariylari va moliyalashtirish tuzilmalari.',
    ],

    'copy' => [
        'pillars' => ['label' => 'Bitta brend. Uch yoʻnalish.', 'title' => 'Yechamiz. Oʻrgatamiz. Tushuntiramiz.', 'description' => 'FinanceLab tahliliy fikrlash, amaliy tajriba va zamonaviy vositalarni birlashtirib, yechimlar, bilim va imkoniyatlar yaratadi.'],
        'expertise' => ['label' => 'BIZNING EKSPERTIZAMIZ', 'title' => "Murakkab maʼlumotlardan\nasoslangan qarorlar sari.", 'description' => 'Biz investitsiya jarayonining barcha bosqichlarida — gʻoya va konsepsiyadan boshlab loyihani moliyaviy-iqtisodiy asoslash hamda uni amalga oshirish jarayonidagi tahliliy ko‘makka qadar moliyaviy va tahliliy yechimlar taqdim etamiz.'],
        'industries' => ['label' => 'TARMOQLAR', 'title' => "Kapital sig‘imi yuqori\ntarmoqlardagi tajriba.", 'description' => 'Biz iqtisodiyotning asosiy tarmoqlaridagi loyihalar bilan ishlaymiz, tarmoq xususiyatlarini chuqur tushunishni moliyaviy va tahliliy ekspertiza bilan birlashtiramiz.'],
        'work' => ['label' => 'LOYIHALAR PORTFELI', 'title' => 'Real loyihalar. Amaliy natijalar.'],
        'insights' => ['label' => 'SO‘NGGI MAQOLALAR VA TADQIQOTLAR', 'title' => 'Tahlil. G‘oyalar. Istiqbollar.'],
        'cta' => ['label' => 'ASOSLANGAN QARORLAR SARI BIRGALIKDA', 'title' => "Baholash kerak bo‘lgan loyihangiz\nyoki o‘rganmoqchi bo‘lgan mavzuingiz bormi?"],
        'actions' => [
            'explore' => 'FinanceLab haqida', 'discuss' => 'Loyihani muhokama qilish',
            'services' => 'Barcha xizmatlar', 'projects' => 'Barcha loyihalar',
            'insights' => 'Barcha tadqiqotlar va tahlillar', 'experience' => 'Tajribamiz bilan tanishing',
            'learn' => 'Batafsil',
        ],
    ],

    'pages' => [
        'advisory' => [
            'label' => 'FinanceLab konsaltingi', 'title' => 'Kuchli tahlil. Yaxshi qarorlar.',
            'intro' => 'Loyiha hayot sikli barcha bosqichlarida moliyaviy modellashtirish, TIA va investitsion tahlil.',
            'body' => [
                'Investitsion qaror orqasidagi tahlil qanchalik kuchli boʻlsa, shunchalik mustahkam. Biz tijorat, texnik va moliyaviy farazlarni qarorga tayyor aniq manzarada birlashtiramiz.',
                'Dastlabki biznes-keysdan bank uchun asoslashgacha ishimiz loyiha homiylariga muqobillarni baholash, riskni tushunish va investorlar hamda kreditorlar bilan muloqotda yordam beradi.',
            ],
        ],
        'academy' => [
            'label' => 'FinanceLab akademiyasi', 'title' => 'Amaliy bilim. Real vazifalar.',
            'intro' => 'Bilimlarini professional ko‘nikmalarga aylantirishni istagan mutaxassislar uchun real loyiha tajribasiga asoslangan moliyaviy ta’lim.',
            'seo_title' => 'FinanceLab Academy — Amaliy moliyaviy ta’lim',
            'seo_description' => 'Real loyiha tajribasiga asoslangan moliyaviy modellashtirish, investitsiya tahlili va investitsiya loyihalarini baholash bo‘yicha amaliy ta’lim.',
            'body' => [
                'FinanceLab Academy moliyaviy modellashtirish, investitsiya tahlili va loyihalarni texnik-iqtisodiy baholashni amaliy professional ta’lim bilan birlashtiradi.',
                'Asosiy e’tibor nafaqat moliyaviy modellar bilan ishlashga, balki ularning iqtisodiy mohiyatini tushunishga qaratiladi: boshlang‘ich ma’lumotlarni shakllantirish, biznesning asosiy omillarini tahlil qilish va natijalarni aniq hamda tushunarli taqdim etish.',
                'Ta’lim dasturlari va o‘qish boshlanish sanalari ushbu sahifada e’lon qilinadi. Hozircha tahliliy materiallarimiz bilan tanishishingiz yoki jamoangizning professional ta’limga bo‘lgan ehtiyojlarini biz bilan muhokama qilishingiz mumkin.',
            ],
        ],
        'media' => [
            'label' => 'FinanceLab media', 'title' => 'Murakkab mavzular. Aniq qarashlar.',
            'intro' => 'Moliyaviy tahlilni ommabop va foydali qiluvchi tahlil, maʼlumotlar va vizual hikoyalash.',
            'body' => [
                'FinanceLab media moliyaviy tahlilni aniq tahririy qarash bilan birlashtiradi. Sohalar qanday ishlashi, investitsiyalar qanday baholanishi va moliyaviy axborot nimani anglatishini oʻrganamiz.',
                'Modellashtirish, soha iqtisodiyoti va vizual moliya boʻyicha amaliy qaydlarni oʻrganing. Maqsadimiz — farazlarni koʻrsatish va mulohaza yoʻlini tushunarli qilish.',
            ],
        ],
        'about' => [
            'label' => 'FinanceLab haqida', 'title' => 'Ulashish maqsadli ekspertiza.',
            'intro' => 'Bitta brend moliyaviy konsalting, professional taʼlim va tahliliy mediani birlashtiradi.',
        ],
        'projects' => [
            'label' => 'Tanlangan ishlar', 'title' => 'Real loyihalar. Sezilarli natija.',
            'intro' => 'Kapital talab tarmoqlardagi vakillik loyiha vazifalarini oʻrganing. Mijoz nomlari maxfiy qolishi mumkin.',
        ],
        'insights' => [
            'label' => 'FinanceLab tahlili', 'title' => 'Tahlil. Gʻoyalar. Qarashlar.',
            'intro' => 'Yaxshi moliyaviy qarorlar asosidagi farazlar, usullar va soha savollarini oʻrganing.',
        ],
        'contact' => [
            'label' => 'FinanceLab bilan bogʻlanish', 'title' => 'Keling, yaxshi qarorlar quraylik.',
            'intro' => 'Baholash uchun loyihangiz, rivojlantirish uchun jamoangiz yoki oʻrganish uchun mavzuingiz bormi? Aniq tavsifdan boshlang.',
        ],
        'privacy' => [
            'label' => 'Maxfiylik siyosati', 'title' => 'Maʼlumotlaringiz — ehtiyotkorlik bilan.',
            'intro' => 'FinanceLab shaxsiy maʼlumotlaringiz va yuborilgan hujjatlarni qanday toʻplashi, ishlatishi va himoya qilishi.',
        ],
        'terms' => [
            'label' => 'Foydalanish shartlari', 'title' => 'FinanceLab saytidan foydalanish.',
            'intro' => 'Kontent va professional materiallarimizdan foydalanish uchun aniq asos.',
        ],
    ],

    'contact_copy' => [
        'heading' => 'Foydali suhbat kontekstdan boshlanadi.',
        'paragraphs' => [
            'Nimani baholayotganingizni, jarayonning qayeridaligingizni va qanday qaror qabul qilishingiz kerakligini ayting.',
            'Toʻgʻridan-toʻgʻri yozing yoki quyida loyiha tavsifini yuboring. Xabaringiz bevosita FinanceLab ga boradi. Tavsifni yuklab olish ham mumkin.',
        ],
        'labels' => [
            'name' => 'Ismingiz', 'email' => 'E-pochta manzili',
            'organization' => 'Tashkilot (ixtiyoriy)', 'interest' => 'Yoʻnalish',
            'message' => 'Loyiha yoki mavzu',
            'file' => 'Fayl biriktirish (ixtiyoriy)',
        ],
        'placeholders' => [
            'message' => 'Loyihangiz, biznes muammosi yoki sizga kerak boʻlgan yordam turini qisqacha tasvirlang.',
        ],
        'button' => 'Xabar yuborish',
        'note' => '',
        'success' => 'Rahmat! Xabaringiz yuborildi. Tez orada bogʻlanamiz.',
        'options' => ['Moliyaviy va investitsion konsalting', 'Maʼlumotlar va raqamli yechimlar', 'Akademiya va korporativ taʼlim', 'Media va tadqiqotlar', 'Umumiy so‘rov'],
        'privacy' => 'Maʼlumotlaringiz maxfiy tarzda qayta ishlanadi va faqat soʻrovingizga javob berish uchun ishlatiladi.',
        'privacy_note' => 'Formani yuborish orqali Maxfiylik siyosatimizni tan olgan boʻlasiz.',
    ],

    'service_details' => [
        'financial-modeling' => [
            'title' => 'Moliyaviy modellashtirish va investitsiya tahlili',
            'lead' => 'Biznes va investitsiya qarorlarini asoslashga xizmat qiluvchi kompleks moliyaviy modellar va investitsiya tahlili.',
            'overview_title' => 'Boshlang‘ich ma’lumotlardan asoslangan investitsiya qarorlarigacha.',
            'overview' => [
                'Puxta ishlab chiqilgan moliyaviy model shunchaki prognoz emas. U biznes yoki investitsiya loyihasi qanday iqtisodiy qiymat yaratishini tushunish vositasidir.',
                'FinanceLab loyihaning tijorat, operatsion va moliyaviy parametrlarini o‘zaro bog‘laydigan integratsiyalashgan moliyaviy modellarni ishlab chiqadi. Biz loyiha iqtisodiyoti, investitsiya samaradorligi, moliyalashtirishga bo‘lgan ehtiyoj va moliyaviy risklarni baholab, asoslangan investitsiya qarorlarini qabul qilishga yordam beramiz.',
                'Yondashuvimiz asosida boshlang‘ich ma’lumotlarning shaffofligi, hisob-kitoblarning uslubiy to‘g‘riligi va muqobil ssenariylarni tahlil qilish tamoyillari yotadi.',
            ],
            'short' => [
                'Kompleks moliyaviy modellashtirish.',
                'Investitsiya hayotiyligi va daromadliligini baholash.',
                'Moliyalashtirish va qarz yukini tahlil qilish (CFADS, DSCR).',
                'Ssenariy va sezgirlik tahlili.',
            ],
            'what' => [
                ['title' => 'Kompleks moliyaviy modellashtirish', 'text' => 'Tushumlar, operatsion xarajatlar, kapital qo‘yilmalar, aylanma kapital va o‘zaro bog‘langan moliyaviy hisobotlarni qamrab oluvchi dinamik moliyaviy modellarni ishlab chiqish.'],
                ['title' => 'Investitsiya samaradorligini baholash', 'text' => 'Moliyaviy-iqtisodiy ko‘rsatkichlar asosida loyihaning hayotiyligi, rentabelligi, investitsiya daromadliligi va yaratiladigan iqtisodiy qiymatini baholash.'],
                ['title' => 'Moliyalashtirish va qarz yukini tahlil qilish', 'text' => 'Moliyalashtirishga bo‘lgan ehtiyojni aniqlash, o‘z va qarz mablag‘lari hisobidan moliyalashtirish ssenariylarini, qarzni qaytarish jadvallarini hamda qarzga xizmat ko‘rsatish imkoniyatlarini baholash.'],
                ['title' => 'Ssenariy va sezgirlik tahlili', 'text' => 'Narxlar, ishlab chiqarish hajmi, operatsion xarajatlar, CAPEX va moliyalashtirish shartlari kabi asosiy parametrlar o‘zgarishining loyiha natijalariga ta’sirini baholash.'],
            ],
            'deliverables' => [
                'Foyda va zararlar hisoboti (P&L), pul oqimlari hisoboti (Cash Flow) va prognoz balansini (Balance Sheet) birlashtirgan Excel moliyaviy modeli.',
                'Tizimlashtirilgan boshlang‘ich ma’lumotlar va operatsion prognozlar.',
                'CAPEX, OPEX va aylanma kapital hisob-kitoblari.',
                'Investitsiya samaradorligi ko‘rsatkichlari: NPV, IRR, o‘zini qoplash muddati va boshqa tegishli indikatorlar.',
                'Moliyalashtirishga bo‘lgan ehtiyoj va qarzni qaytarish jadvallari.',
                'Zarur hollarda CFADS va DSCR hisob-kitoblari.',
                'Ssenariy, sezgirlik va zararsizlik tahlili.',
                'Rahbariyat uchun moliyaviy-tahliliy materiallar va vizual hisobotlar.',
            ],
            'who' => 'Yangi investitsiyalar, biznesni kengaytirish yoki rivojlanishning muqobil strategiyalarini ko‘rib chiqayotgan loyiha tashabbuskorlari, sanoat korxonalari, investorlar, biznes egalari va kompaniya rahbarlari.',
            'cta' => [
                'title' => 'G‘oyangizni asoslangan investitsiya loyihasiga aylantiring.',
                'text' => 'Loyihangizni FinanceLab bilan muhokama qiling va investitsiya qaroringiz uchun mustahkam moliyaviy asos yarating.',
                'button' => 'Loyihani muhokama qilish',
            ],
        ],
        'feasibility-studies' => [
            'title' => 'Texnik-iqtisodiy asoslash (TIA)',
            'lead' => 'Investitsiya loyihalarini ishlab chiqish va baholash uchun mustahkam asos yaratuvchi kompleks moliyaviy-iqtisodiy tahlil.',
            'overview_title' => 'Investitsiya loyihasini iqtisodiy jihatdan asoslash.',
            'overview' => [
                'Istiqbolli biznes g‘oyasi hali iqtisodiy jihatdan samarali investitsiya loyihasi degani emas. Texnik-iqtisodiy asoslash investitsiyaning maqsadga muvofiqligini baholash uchun zarur bo‘lgan tijorat, texnik, ishlab chiqarish va moliyaviy parametrlarni birlashtiradi.',
                'FinanceLab sanoat va katta kapital qo‘yilmalarni talab qiluvchi investitsiya loyihalarining texnik-iqtisodiy asoslash hujjatlari uchun moliyaviy-iqtisodiy bo‘limlarni ishlab chiqadi. Biz bozor ma’lumotlari, texnik parametrlar, investitsiya xarajatlari, operatsion ko‘rsatkichlar va moliyalashtirish ssenariylarini yagona baholash tizimiga birlashtiramiz.',
                'Xizmatlarimiz loyiha tashabbuskorlariga loyihaning hayotiyligini baholash, muqobil variantlarni taqqoslash hamda rahbariyat, investorlar va kreditorlar uchun investitsiya hujjatlarini tayyorlashda yordam beradi.',
            ],
            'short' => [
                'Loyihani kompleks baholash (TIA/FS).',
                'Bozor, texnik va moliyaviy parametrlarning integratsiyasi.',
                'Loyiha iqtisodiyoti va investitsiya samaradorligi.',
                'Qaror qabul qiluvchilar uchun amaliy xulosalar.',
            ],
            'what' => [
                ['title' => 'Loyiha konsepsiyasi va iqtisodiy parametrlari', 'text' => 'Loyiha konsepsiyasi, rejalashtirilgan ishlab chiqarish quvvati, mahsulot turlari, amalga oshirish shartlari va asosiy iqtisodiy omillarni tahlil qilish.'],
                ['title' => 'Bozor va tijorat parametrlarini baholash', 'text' => 'Bozor talabi, narxlar, sotish hajmi, raqobat muhiti va loyihaning tijorat imkoniyatlarini baholash.'],
                ['title' => 'Kapital va operatsion xarajatlarni baholash', 'text' => 'Investitsiya xarajatlari, operatsion xarajatlar, loyihani amalga oshirish jadvali va aylanma kapitalga bo‘lgan ehtiyojni tahlil qilish hamda tizimlashtirish.'],
                ['title' => 'Moliyaviy-iqtisodiy baholash', 'text' => 'Loyiha rentabelligi, investitsiya samaradorligi, moliyalashtirish ehtiyoji va risklarini baholash uchun moliyaviy modellar hamda moliyaviy-iqtisodiy hisob-kitoblarni ishlab chiqish.'],
            ],
            'deliverables' => [
                'Texnik-iqtisodiy asoslash hujjatlarining moliyaviy-iqtisodiy bo‘limlari (TIA/TEO/FS).',
                'Texnik-iqtisodiy hisob-kitoblar va loyiha iqtisodiyotini baholash.',
                'Bozor va tijorat parametrlarini tahlil qilish.',
                'Taqdim etilgan boshlang‘ich ma’lumotlar asosida CAPEX va OPEX hisob-kitoblari.',
                'Loyihaning integratsiyalashgan moliyaviy modeli.',
                'Investitsiya samaradorligi va moliyalashtirishga bo‘lgan ehtiyojni baholash.',
                'Ssenariy va sezgirlik tahlili.',
                'Investitsiya qarorlarini asoslovchi moliyaviy-iqtisodiy xulosalar.',
            ],
            'who' => 'Yangi ishlab chiqarish korxonalarini tashkil etish, mavjud quvvatlarni kengaytirish va modernizatsiya qilish loyihalarini amalga oshirayotgan sanoat korxonalari, loyiha tashabbuskorlari, investorlar, muhandislik va loyihalash tashkilotlari.',
            'cta' => [
                'title' => 'Investitsiya loyihangiz uchun mustahkam iqtisodiy asos yarating.',
                'text' => 'FinanceLab katta hajmdagi kapital qo‘yilmalar bo‘yicha qaror qabul qilishdan oldin loyihangizning moliyaviy-iqtisodiy maqsadga muvofiqligini baholashga yordam beradi.',
                'button' => 'TIA ishlab chiqishni muhokama qilish',
            ],
        ],
        'independent-review' => [
            'title' => 'Mustaqil moliyaviy-iqtisodiy ekspertiza',
            'lead' => 'Moliyaviy modellar, texnik-iqtisodiy asoslash hujjatlari va investitsiya parametrlaridagi kamchiliklar, risklar hamda takomillashtirish imkoniyatlarini aniqlashga qaratilgan xolis baholash.',
            'overview_title' => 'Investitsiya qaroridan oldin mustaqil baholash.',
            'overview' => [
                'Investitsiya qarorlari ko‘pincha murakkab moliyaviy modellar, texnik parametrlar va texnik-iqtisodiy hisob-kitoblarga asoslanadi. Hatto sifatli tayyorlangan loyiha hujjatlarida ham investitsiya samaradorligi bo‘yicha yakuniy xulosalarga sezilarli ta’sir ko‘rsatadigan nomuvofiqliklar, yetarlicha asoslanmagan ma’lumotlar yoki uslubiy xatolar bo‘lishi mumkin.',
                'FinanceLab investitsiya loyihalari va ularga oid hujjatlarning mustaqil moliyaviy-iqtisodiy ekspertizasini amalga oshiradi.',
                'Biz boshlang‘ich ma’lumotlarning asoslanganligini, hisob-kitoblarning to‘g‘riligini va olingan natijalarning iqtisodiy mantiqini baholaymiz. Maqsadimiz — muhim kamchiliklarni aniqlash va ularni bartaraf etish bo‘yicha dalillarga asoslangan tavsiyalar taqdim etish.',
            ],
            'short' => [
                'Mustaqil va xolis ekspertiza.',
                'Ma’lumotlar va hisob-kitoblarni tekshirish.',
                'Muhim risklar va kamchiliklarni aniqlash.',
                'Takomillashtirish bo‘yicha amaliy tavsiyalar.',
            ],
            'what' => [
                ['title' => 'Moliyaviy modellar ekspertizasi', 'text' => 'Model strukturasi, formulalar, hisob-kitoblar mantiqi, moliyaviy hisobotlarning o‘zaro bog‘liqligi va modelning ichki izchilligini tekshirish.'],
                ['title' => 'Texnik-iqtisodiy asoslash hujjatlari ekspertizasi', 'text' => 'TIA hujjatlarining moliyaviy-iqtisodiy bo‘limlarini, shu jumladan texnik, tijorat va moliyaviy parametrlarning o‘zaro muvofiqligini baholash.'],
                ['title' => 'Boshlang‘ich ma’lumotlar va xarajatlarni tekshirish', 'text' => 'Ishlab chiqarish prognozlari, narxlar, kapital va operatsion xarajatlar hamda aylanma kapitalga bo‘lgan ehtiyojning asoslanganligini tahlil qilish. Mavjud hollarda tegishli tarmoq ko‘rsatkichlari va taqqoslama ma’lumotlardan foydalanish.'],
                ['title' => 'Investitsiya risklari va baholash uslubiyatini tahlil qilish', 'text' => 'Investitsiya samaradorligini baholash usullari, diskont stavkalari, moliyalashtirish shartlari, sezgirlik tahlili va muhim moliyaviy risklarni tekshirish.'],
            ],
            'deliverables' => [
                'Mustaqil moliyaviy-iqtisodiy ekspertiza hisoboti.',
                'Moliyaviy model diagnostikasi va hisob-kitoblarni tekshirish natijalari.',
                'Aniqlangan uslubiy xatolar va nomuvofiqliklar.',
                'Asosiy boshlang‘ich ma’lumotlarning asoslanganligini baholash.',
                'Ishonchli ma’lumotlar mavjud bo‘lganda CAPEX va OPEX bo‘yicha taqqoslama tahlil.',
                'NPV, IRR, WACC, moliyalashtirish parametrlari va boshqa tegishli ko‘rsatkichlarni tekshirish.',
                'Aniqlangan kamchiliklarni ustuvorlik darajasiga ko‘ra bartaraf etish bo‘yicha tavsiyalar.',
                'Rahbariyat uchun muhim xulosalar va moliyaviy risklarning qisqacha tahlili.',
            ],
            'who' => 'Investitsiya loyihalarini tasdiqlash, moliyalashtirish yoki amalga oshirishdan oldin loyiha hujjatlarini mustaqil baholashga ehtiyoj sezayotgan loyiha tashabbuskorlari, sanoat korxonalari, investorlar, moliya institutlari va loyihalash tashkilotlari.',
            'cta' => [
                'title' => 'Kamchiliklarni qimmatga tushadigan qarorlardan oldin aniqlang.',
                'text' => 'Investitsiya loyihangiz bo‘yicha mustaqil moliyaviy-iqtisodiy bahoga ega bo‘ling.',
                'button' => 'Mustaqil ekspertizaga murojaat qilish',
            ],
        ],
        'business-diagnostics' => [
            'title' => 'Biznes diagnostikasi va moliyaviy tahlil',
            'lead' => 'Biznesning rentabelligi, pul oqimlari va uzoq muddatli qiymat yaratishiga ta’sir qiluvchi omillarni aniqlashga qaratilgan kompleks moliyaviy tahlil.',
            'overview_title' => 'Natijalarni tushuning. Imkoniyatlarni aniqlang.',
            'overview' => [
                'Moliyaviy hisobotlar biznesda nima sodir bo‘lganini ko‘rsatadi. Sifatli moliyaviy tahlil esa bu natijalar nima sababdan yuzaga kelgani, ular nimani anglatishi va biznesni rivojlantirish uchun qanday imkoniyatlar mavjudligini tushuntiradi.',
                'FinanceLab korxonalarga kompleks diagnostika va tahlil orqali o‘z moliyaviy holati, operatsion natijalari va iqtisodiy samaradorligini baholashda yordam beradi.',
                'Biz moliyaviy natijalarni biznes faoliyatining asosiy omillari bilan bog‘lab, rentabellikni cheklovchi sabablar, samarasiz xarajatlar, pul oqimlari bilan bog‘liq muammolar va moliyaviy samaradorlikni oshirish imkoniyatlarini aniqlaymiz.',
            ],
            'short' => [
                'Moliyaviy natijalar va tendensiyalar tahlili.',
                'Rentabellik, xarajatlar va birlik iqtisodiyoti.',
                'Pul oqimlari va aylanma kapital.',
                'Taqqoslama ko‘rsatkichlar va takomillashtirish yo‘nalishlari.',
            ],
            'what' => [
                ['title' => 'Moliyaviy hisobotlar tahlili', 'text' => 'Foyda va zararlar hisoboti, buxgalteriya balansi hamda pul oqimlari hisobotlarini o‘rganish orqali moliyaviy natijalar, moliyaviy holat va asosiy tendensiyalarni baholash.'],
                ['title' => 'Rentabellik va xarajatlar tahlili', 'text' => 'Tushumlar dinamikasi, marjalar, xarajatlar tarkibi, mahsulot birligi iqtisodiyoti va operatsion rentabellikka ta’sir qiluvchi omillarni tahlil qilish.'],
                ['title' => 'Pul oqimlari va aylanma kapital tahlili', 'text' => 'Biznesning pul oqimlarini shakllantirish imkoniyatlari, likvidligi, aylanma kapitaldan foydalanish samaradorligi hamda hisoblangan foyda bilan haqiqiy pul oqimlari o‘rtasidagi bog‘liqlikni baholash.'],
                ['title' => 'Samaradorlik diagnostikasi va taqqoslama tahlil', 'text' => 'Asosiy moliyaviy ko‘rsatkichlar, biznes samaradorligi va natijalar dinamikasini baholash, tegishli ma’lumotlar mavjud bo‘lganda tarmoq ko‘rsatkichlari bilan taqqoslash.'],
            ],
            'deliverables' => [
                'Biznesning kompleks moliyaviy diagnostikasi bo‘yicha hisobot.',
                'O‘tgan davrlardagi moliyaviy natijalar va tendensiyalar tahlili.',
                'Rentabellik va xarajatlar tarkibini baholash.',
                'Likvidlik, qarz yuki va aylanma kapital tahlili.',
                'Moliyaviy koeffitsiyentlar va samaradorlik ko‘rsatkichlari.',
                'ROIC, ROE, ROA va boshqa tegishli samaradorlik indikatorlarini baholash.',
                'Moliyaviy ko‘rsatkichlarning taqqoslama va tarmoq tahlili.',
                'Rahbariyat uchun vizual hisobotlar va analitik dashboardlar.',
                'Samaradorlikni oshirish imkoniyatlari va asosiy moliyaviy risklarni aniqlash.',
            ],
            'who' => 'Biznesining moliyaviy natijalari, moliyaviy holati va samaradorlikni oshirish imkoniyatlarini chuqurroq tushunishni istagan biznes egalari, sanoat korxonalari, kompaniya rahbarlari va investorlar.',
            'cta' => [
                'title' => 'Moliyaviy hisobotlar ortidagi iqtisodiy mohiyatni anglang.',
                'text' => 'Biznesingizning moliyaviy natijalariga ta’sir qiluvchi asosiy omillarni tushuning hamda rentabellik va moliyaviy samaradorlikni oshirish imkoniyatlarini aniqlang.',
                'button' => 'Biznesingizdagi vazifalarni muhokama qilish',
            ],
        ],
        'data-analytics' => [
            'title' => 'Ma’lumotlar tahlili va vizualizatsiya',
            'lead' => 'Murakkab biznes ma’lumotlarini tizimlashtirilgan axborot, foydali tahliliy xulosalar va interaktiv vizual yechimlarga aylantirish.',
            'overview_title' => 'Ma’lumotlarni biznes uchun qiymatga aylantiramiz.',
            'overview' => [
                'Korxonalarda katta hajmdagi moliyaviy, tijorat va operatsion ma’lumotlar shakllanadi. Biroq turli manbalarda tarqoq holda saqlanadigan ma’lumotlar va hisobotlarni qo‘lda tayyorlash jarayonlari ko‘pincha ulardan samarali foydalanishni qiyinlashtiradi.',
                'FinanceLab tashkilotlarga ma’lumotlarni tizimlashtirish, qayta ishlash va tahlil qilish orqali boshlang‘ich axborotni tushunarli hamda amaliy ahamiyatga ega tahliliy natijalarga aylantirishda yordam beradi.',
                'Python yordamida ma’lumotlarni qayta ishlash, SQL ma’lumotlar bazalari va Power BI interaktiv dashboardlarini birlashtirib, axborotdan foydalanish, hisobot tayyorlash samaradorligi va biznes jarayonlarini tushunish imkoniyatlarini yaxshilovchi analitik yechimlarni ishlab chiqamiz.',
            ],
            'short' => [
                'Xom ma’lumotlarni amaliy xulosalarga aylantirish.',
                'Python, SQL va Power BI bo‘yicha ekspertiza.',
                'Rahbariyat uchun interaktiv dashboardlar.',
                'Hisobot va biznesni tushunishni yaxshilash.',
            ],
            'what' => [
                ['title' => 'Ma’lumotlarni qayta ishlash va tayyorlash', 'text' => 'Turli manbalardan olingan ma’lumotlarni tozalash, tartibga solish, o‘zgartirish va tahlil uchun qulay yagona formatga keltirish.'],
                ['title' => 'Ma’lumotlar bazalari va SQL bilan ishlash', 'text' => 'SQL va MySQL yordamida biznes ma’lumotlarini tartibga solish, ajratib olish hamda tahlil va hisobot tayyorlash uchun zarur shaklga keltirish.'],
                ['title' => 'Biznes ma’lumotlarini tahlil qilish', 'text' => 'Moliyaviy, tijorat va operatsion ma’lumotlarni o‘rganish orqali qonuniyatlar, tendensiyalar hamda biznes samaradorligiga ta’sir qiluvchi asosiy omillarni aniqlash.'],
                ['title' => 'Interaktiv dashboardlar va vizualizatsiya', 'text' => 'Murakkab ma’lumotlarni o‘rganish, tushunish va taqdim etishni osonlashtiradigan Power BI interaktiv dashboardlari va vizual hisobotlarini ishlab chiqish.'],
            ],
            'deliverables' => [
                'Tozalangan va tizimlashtirilgan ma’lumotlar to‘plamlari.',
                'Python yordamida ma’lumotlarni qayta ishlash va o‘zgartirish skriptlari.',
                'SQL so‘rovlari va ma’lumotlar bazalari asosida hisobot tayyorlash yechimlari.',
                'Ma’lumotlarning dastlabki tahlili va tahliliy xulosalar.',
                'Power BI interaktiv dashboardlari.',
                'KPI va biznes samaradorligi ko‘rsatkichlarining vizualizatsiyasi.',
                'Buyurtmachi ehtiyojlariga moslashtirilgan tahliliy hisobotlar.',
                'Zarur hollarda hisobotlardan foydalanish bo‘yicha hujjatlar va qo‘llanmalar.',
            ],
            'who' => 'Hisobot tayyorlash jarayonlarini yaxshilash, biznes natijalarini chuqurroq tushunish va mavjud ma’lumotlardan samarali foydalanishni istagan korxonalar, sanoat kompaniyalari, moliya bo‘limlari, sotuv bo‘limlari va rahbariyat jamoalari.',
            'cta' => [
                'title' => 'Ma’lumotlaringiz biznesingiz uchun ishlasin.',
                'text' => 'Tarqoq axborotni foydali tahliliy natijalar va amaliy vizual yechimlarga aylantiring.',
                'button' => 'Ma’lumotlar tahlili bo‘yicha murojaat qilish',
            ],
        ],
        'website-development' => [
            'title' => 'Korporativ veb-saytlarni ishlab chiqish va texnik qo‘llab-quvvatlash',
            'lead' => 'Kompaniyaning raqamli muhitdagi mavqeini mustahkamlash, biznes qiymatini namoyish etish va uzoq muddatli rivojlanishini qo‘llab-quvvatlashga xizmat qiluvchi professional korporativ veb-saytlar.',
            'overview_title' => 'Biznesingiz uchun professional raqamli imij.',
            'overview' => [
                'Korporativ veb-sayt shunchaki elektron tashrif qog‘ozi emas. U kompaniyangizning tajribasi, xizmatlari va imkoniyatlarini namoyish etish, mijozlar, investorlar va boshqa manfaatdor tomonlar ishonchini shakllantirish vositasidir.',
                'FinanceLab puxta o‘ylangan strukturaga, zamonaviy vizual uslubga va biznes maqsadlariga yo‘naltirilgan kontentga ega professional korporativ veb-saytlarni ishlab chiqadi.',
                'Yondashuvimiz sifatli dizayn, amaliy funksionallik va doimiy texnik qo‘llab-quvvatlashni birlashtirib, tashkilotingizning professional darajasi va maqsadlariga mos veb-saytlarni yaratishga qaratilgan.',
            ],
            'short' => [
                'Biznes uchun professional veb-saytlar.',
                'Zamonaviy, moslashuvchan va qulay.',
                'Asosiy funksionallik va SEO asoslari.',
                'Doimiy texnik xizmat va qo‘llab-quvvatlash.',
            ],
            'what' => [
                ['title' => 'Korporativ veb-saytni rejalashtirish', 'text' => 'Kompaniyaning biznes maqsadlari va maqsadli auditoriyasidan kelib chiqib, veb-sayt strukturasi, sahifalar arxitekturasi va kontent joylashuvini ishlab chiqish.'],
                ['title' => 'Veb-sayt dizayni va ishlab chiqish', 'text' => 'Kompaniyaning brend uslubi, xizmatlari va professional imkoniyatlarini aks ettiruvchi zamonaviy, turli qurilmalarga mos korporativ veb-saytlarni yaratish.'],
                ['title' => 'Veb-sayt funksionalligi va SEO asoslari', 'text' => 'Veb-saytning asosiy funksiyalari, murojaat shakllari, ko‘p tilli kontent strukturasi va boshlang‘ich texnik SEO optimallashtirishni amalga oshirish.'],
                ['title' => 'Texnik xizmat ko‘rsatish va qo‘llab-quvvatlash', 'text' => 'Veb-saytga doimiy texnik xizmat ko‘rsatish, kontentni yangilash, funksional imkoniyatlarni takomillashtirish va saytning ishlashini ta’minlashga qaratilgan qo‘llab-quvvatlash.'],
            ],
            'deliverables' => [
                'Individual sahifa strukturasiga ega professional korporativ veb-sayt.',
                'Kompyuter, planshet va mobil qurilmalarga moslashuvchan dizayn.',
                'Kompaniyaning brend uslubi va vizual identifikatsiyasini integratsiya qilish.',
                'Xizmatlar, loyihalar portfeli, maqolalar va aloqa sahifalari.',
                'Zarur hollarda ko‘p tilli veb-sayt strukturasi.',
                'Murojaat shakllari va asosiy funksional imkoniyatlar.',
                'Texnik SEO asoslari va qidiruv tizimlarida indeksatsiyani sozlash.',
                'Kelishilgan xizmat ko‘rsatish shartlari asosida texnik xizmat va qo‘llab-quvvatlash.',
            ],
            'who' => 'Raqamli muhitdagi professional mavqeini shakllantirish yoki rivojlantirishni istagan korxonalar, sanoat kompaniyalari, konsalting firmalari va professional tashkilotlar.',
            'cta' => [
                'title' => 'Biznesingiz darajasiga mos raqamli imij yarating.',
                'text' => 'Professional korporativ veb-sayt orqali kompaniyangizning tajribasi va imkoniyatlarini namoyish eting hamda mijozlar, investorlar va hamkorlar bilan samarali aloqalarni rivojlantiring.',
                'button' => 'Veb-sayt loyihasini muhokama qilish',
            ],
        ],
    ],

    'legal' => [
        'privacy' => [
            'updated' => 'Yangilangan: 2026-yil noyabr',
            'intro' => 'FinanceLab maxfiyligingizni hurmat qiladi va shaxsiy maʼlumotlar hamda maxfiy biznes hujjatlarini himoya qilish muhimligini tan oladi. Ushbu Siyosat financelab.uz orqali yuborilgan axborot qanday toʻplanishi, ishlatilishi va qayta ishlanishini tushuntiradi.',
            'short_title' => 'Qisqacha',
            'short' => [
                'Biz faqat siz taqdim etgan maʼlumotlarni va asosiy texnik maʼlumotlarni toʻplaymiz.',
                'Ulardan soʻrovingizga javob berish va xizmatlarimizni koʻrsatish uchun foydalanamiz.',
                'Loyihangiz haqidagi maʼlumotlar maxfiy tarzda qayta ishlanadi.',
                'Maʼlumotlaringizni sotmaymiz.',
                'Maʼlumotlaringizni boshqarish uchun biz bilan bogʻlanishingiz mumkin.',
            ],
            'sections' => [
                ['title' => '1. Qanday maʼlumotlarni toʻplaymiz', 'text' => 'Biz FinanceLab bilan bogʻlanganingizda ixtiyoriy taqdim etgan maʼlumotlarni toʻplashimiz mumkin: ism va aloqa maʼlumotlari, tashkilot nomi, qiziqish yoʻnalishi, loyiha tavsifi va xabaringizdagi boshqa maʼlumotlar, shuningdek yuborgan hujjat va fayllaringiz. Sayt oʻz ishi va xavfsizligi uchun texnik axborotni ham qayta ishlashi mumkin: IP-manzillar, brauzer maʼlumotlari va kirish jurnallari.'],
                ['title' => '2. Axborotingizdan qanday foydalanamiz', 'text' => 'Biz axborotdan soʻrovingizga javob berish, loyiha ehtiyojlarini tushunish, takliflar tayyorlash va mumkin boʻlgan hamkorlikni muhokama qilish, kelishilgan xizmatlarni koʻrsatish (konsalting, tahlil, taʼlim yoki raqamli yechimlar), sayt ishi va xavfsizligini taʼminlash hamda amaldagi huquqiy majburiyatlarni bajarish uchun foydalanamiz.'],
                ['title' => '3. Biznes axborotining maxfiyligi', 'text' => 'Moliyaviy modellar, TIA, investitsion takliflar va boshqa hujjatlar tijorat jihatdan nozik axborotni oʻz ichiga olishi mumkinligini tushunamiz. Bunday axborot tegishli maxfiylik bilan qayta ishlanadi va faqat soʻrovingiz yoki hamkorligingiz bilan bogʻliq maqsadlarda ishlatiladi. Zarur boʻlsa, batafsil hujjatlar almashinuvidan oldin alohida maxfiylik shartnomasi (NDA) tuzilishi mumkin.'],
                ['title' => '4. Axborotni uzatish', 'text' => 'FinanceLab shaxsiy maʼlumotlarni sotmaydi. Axborot ishonchli xizmat koʻrsatuvchilar (masalan, sayt xostingi va pochta xizmatlari) tomonidan tegishli maxfiylik va maʼlumotlarni himoya qilish talablari asosida qayta ishlanishi yoki qonun talab qilganda yoki kelishilgan hamkorlikni bajarish uchun oshkor qilinishi mumkin.'],
                ['title' => '5. Maʼlumotlarni saqlash va xavfsizlik', 'text' => 'Axborotni ruxsatsiz kirish, oshkor qilish, oʻzgartirish yoki yoʻqotishdan himoya qilish uchun oqilona tashkiliy va texnik choralar qoʻllaymiz. Axborot faqat toʻplash maqsadlariga erishish, biznes yozuvlarini yuritish yoki huquqiy majburiyatlarni bajarish uchun zarur boʻlgan muddatgacha saqlanadi.'],
                ['title' => '6. Cookies va sayt texnologiyalari', 'text' => 'Sayt oʻz ishi, til sozlamalari va xavfsizligi uchun zarur cookies va shunga oʻxshash texnologiyalardan foydalanishi mumkin. Kelajakda tahlil yoki boshqa ixtiyoriy texnologiyalarni joriy qilsak, ushbu Siyosat yangilanadi va zarur boʻlsa, sizning roziligingiz soʻraladi.'],
                ['title' => '7. Sizning huquqlaringiz', 'text' => 'Amaldagi maʼlumotlarni himoya qilish qonunchiligiga muvofiq siz shaxsiy maʼlumotlaringizga kirishni soʻrash, ularni tuzatish yoki oʻchirishni talab qilish, qayta ishlashni cheklash yoki roziligingizni qaytarib olish huquqiga ega boʻlishingiz mumkin. Ushbu sahifadagi kontaktlar orqali biz bilan bogʻlanishingiz mumkin.'],
                ['title' => '8. Siyosatga kiritilgan oʻzgarishlar', 'text' => 'Xizmatlarimiz, sayt ishi yoki qonunchilik talablaridagi oʻzgarishlarni aks ettirish uchun ushbu Maxfiylik siyosatini yangilashimiz mumkin. Eng soʻnggi versiya har doim ushbu sahifada yangilangan sana bilan mavjud boʻladi.'],
            ],
        ],
        'terms' => [
            'updated' => 'Yangilangan: 2026-yil noyabr',
            'intro' => '',
            'short_title' => 'Qisqacha',
            'short' => [
                'Informatsion va taʼlimiy kontent.',
                'Investitsion tavsiya emas.',
                'Professional xizmatlar alohida kelishiladi.',
                'Intellektual mulkka hurmat.',
            ],
            'sections' => [
                ['title' => 'Informatsion materiallar', 'text' => 'FinanceLab umumiy informatsion maqsadlarda tahliliy, taʼlimiy va tadqiqot kontentini taqdim etadi. Nashr etilgan materiallar yakka tartibdagi investitsion tavsiya yoki moliyaviy natijalar kafolati hisoblanmaydi.'],
                ['title' => 'Professional xizmatlar', 'text' => 'Professional xizmatlarning hajmi, natijalari, narxi va masʼuliyati alohida kelishiladi. Soʻrov yuborish shartnoma munosabatlarini yaratmaydi.'],
                ['title' => 'Intellektual mulk', 'text' => 'FinanceLabning original kontenti va brendi amaldagi intellektual mulk huquqlari bilan himoyalangan. Materiallarga tegishli manba koʻrsatilgan holda havola qilish mumkin. Tijoriy koʻpaytirish, qonunda boshqacha ruxsat berilmagan boʻlsa, oldindan ruxsat talab qiladi.'],
                ['title' => 'Aniqlik va tashqi manbalar', 'text' => 'FinanceLab aniq va ishonchli axborot taqdim etishga intiladi. Biroq nashr etilgan tahlillar farazlar, mavjud maʼlumotlar va oʻzgaruvchan iqtisodiy sharoitlarga bogʻliq boʻlishi mumkin. Tashqi materiallar oʻz egalarining huquqlarida qoladi.'],
            ],
        ],
    ],
];
