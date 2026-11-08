<?php

// Statik matnlarning oʻzbekcha varianti. Tuzilma config/site.php bilan bir xil
// bo'lishi shart (SiteContent array_replace_recursive bilan merge qiladi).
// Slug, image, href, anchor, email, sana va DB seed datalari (projects,
// insights) BU YERDA EMAS — ular o'z holicha qoladi.
return [
    'site' => [
        'tagline' => 'Moliyaviy tahlil. Amaliyotda.',
        'description' => 'FinanceLab — moliyaviy modellashtirish, texnik-iqtisodiy asoslash, investitsion tahlil, professional moliyaviy taʼlim va tahliliy materiallar.',
        'nav' => [
            ['label' => 'Konsalting'],
            ['label' => 'Akademiya'],
            ['label' => 'Media'],
            ['label' => 'Tahlil'],
            ['label' => 'Biz haqimizda'],
        ],
        'metrics' => [
            ['label' => 'Koʻrib chiqilgan loyihalar'],
            ['label' => 'Yillik tajriba'],
            ['value' => 'Turli', 'label' => 'Sohalar'],
            ['value' => 'Amaliy', 'label' => 'Ekspertiza va tahlil'],
        ],
        'hero' => [
            'eyebrow' => 'MOLIYAVIY TAHLIL.',
            'lines' => ['Moliyaviy', 'tahlil.', 'Amaliyotda.'],
            'description' => 'Modellaymiz. Tahlil qilamiz. Oʻrgatamiz. Tushuntiramiz.',
            'note' => 'Moliyaviy ekspertizani yaxshi qarorlar, bilim va imkoniyatlarga aylantiramiz.',
        ],
        'founder' => [
            'role' => 'Moliyaviy modellashtirish va investitsion tahlil mutaxassisi',
            'bio' => 'Moliyaviy-iqtisodiy tahlil, texnik-iqtisodiy asoslash va investitsion loyihalar boʻyicha katta tajribaga ega Laziz FinanceLabʼga amaliy tajribani amaliy yechimlar, professional taʼlim va ommabop moliyaviy tahlilga aylantirish uchun asos solgan.',
        ],
        'footer' => ['copyright' => '© 2026 FinanceLab. Barcha huquqlar himoyalangan.'],
    ],

    'pillars' => [
        ['name' => 'Konsalting', 'verb' => 'Yechamiz.', 'description' => 'Oqilona qarorlar va barqaror oʻsish uchun moliyaviy modellashtirish, texnik-iqtisodiy asoslash va tahliliy yechimlar.'],
        ['name' => 'Akademiya', 'verb' => 'Oʻrgatamiz.', 'description' => 'Haqiqiy loyiha tajribasiga asoslangan amaliy moliyaviy taʼlim — yangi avlod moliyachilari uchun.'],
        ['name' => 'Media', 'verb' => 'Tushuntiramiz.', 'description' => 'Tahlil, maʼlumotlar va vizual materiallar orqali moliyaviy tahlil — murakkab mavzular oddiy va amaliy.'],
    ],

    'services' => [
        'Moliyaviy modellashtirish va investitsion tahlil',
        'Texnik-iqtisodiy asoslash (FS / TIA)',
        'Mustaqil moliyaviy-iqtisodiy ekspertiza',
        'Biznes-diagnostika va moliyaviy tahlil',
        'Maʼlumotlar tahlili va vizuallashtirish',
        'Korporativ saytlarni ishlab chiqish va qo‘llab-quvvatlash',
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
        ['name' => 'Avtosanoat'],
        ['name' => 'Ishlab chiqarish'],
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
        'expertise' => ['label' => 'Ekspertizamiz', 'title' => "Murakkab maʼlumotlardan\naniq qarorlarga.", 'description' => 'Investitsion sikl toʻliq qamrovli tahliliy va moliyaviy yechimlar — gʻoyadan bank uchun asoslashgacha va joriy qoʻllab-quvvatlashgacha.'],
        'industries' => ['label' => 'Sohalar', 'title' => "Kapital talab sohalarda\ntajriba.", 'description' => 'Iqtisodiyotning asosiy tarmoqlaridagi loyihalarda ishlaymiz, soha tushunchasini kuchli moliyaviy va tahliliy ekspertiza bilan birlashtiramiz.'],
        'work' => ['label' => 'Tanlangan ishlar', 'title' => 'Real loyihalar. Sezilarli natija.'],
        'insights' => ['label' => 'Soʻnggi maqola va tahlillar', 'title' => 'Tahlil. Gʻoyalar. Qarashlar.'],
        'cta' => ['label' => 'Keling, yaxshi qarorlar quraylik', 'title' => "Baholash uchun loyihangiz\nbormi yoki mavzu bormi?"],
        'actions' => [
            'explore' => 'FinanceLab haqida', 'discuss' => 'Loyihani muhokama qilish',
            'services' => 'Barcha xizmatlar', 'projects' => 'Barcha loyihalar',
            'insights' => 'Barcha tahlillar', 'experience' => 'Tajribamiz',
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
            'label' => 'FinanceLab akademiyasi', 'title' => 'Amaliy bilim. Haqiqiy qoʻllash.',
            'intro' => 'Loyiha tajribasiga asoslangan moliyaviy taʼlim — bilimni koʻnikmaga aylantirmoqchi mutaxassislar uchun.',
            'body' => [
                'Taʼlim yoʻnalishimiz moliyaviy modellashtirish, investitsion tahlil va asoslilikni baholashni amaliy oʻquv kontekstiga olib kiradi.',
                'Diqqat markazida jadval ortidagi mantiq: farazlarni tuzish, biznes omillarini tushunish va natijalarni aniq taqdim etish.',
                'Dastur tafsilotlari va qabul sanalari shu yerda eʼlon qilinadi. Hozircha tahliliy materiallarimizni oʻrganing yoki jamoangizning taʼlim ehtiyojlari haqida soʻrov yuboring.',
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
            'label' => 'Maxfiylik', 'title' => 'Maʼlumotlaringiz nazoratda.',
            'intro' => 'FinanceLab sayti axborotni qanday qayta ishlashi.',
        ],
        'terms' => [
            'label' => 'Sayt shartlari', 'title' => 'FinanceLab saytidan foydalanish.',
            'intro' => 'Sayt materiallarini oʻqish va foydalanish uchun aniq asos.',
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
        ],
        'button' => 'Xabar yuborish',
        'note' => 'Formani toʻldiring va tugmani bosing — xabaringiz bevosita FinanceLab ga yuboriladi.',
        'success' => 'Rahmat! Xabaringiz yuborildi. Tez orada bogʻlanamiz.',
        'options' => ['Konsalting', 'Akademiya', 'Media', 'Umumiy soʻrov'],
    ],
];
