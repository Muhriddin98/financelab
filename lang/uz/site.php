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
        'Moliyaviy modellashtirish',
        'Texnik-iqtisodiy asoslash (TIA)',
        'Investitsion tahlil',
        'Biznes-keyslar',
        'Moliyaviy diagnostika',
        'Moliyaviy tahlil va vizuallashtirish',
    ],

    'service_descriptions' => [
        'Shaffof farazlar, operatsion prognozlar, pul oqimi tahlili va ssenariy testiga ega kompleks moliyaviy modellar.',
        'Investitsion qaror uchun bozor, texnik va moliyaviy farazlarni bogʻlovchi tizimli asoslilik bahosi.',
        'Loyiha iqtisodiyoti, investitsiya qaytimi, moliyalashtirish ehtiyoji va qarorni oydinlashtiruvchi sezuvchanlik.',
        'Yangi loyiha, kengayish yoki strategik muqobil uchun aniq tijorat va moliyaviy asos.',
        'Natijalar, moliyaviy holat, pul aylanishi va qiymat omillarining tizimli sharhi.',
        'Murakkab moliyaviy axborotni izchil hikoyaga aylantiruvchi qarorlar uchun hisobot va vizual tahlil.',
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
            'Toʻgʻridan-toʻgʻri yozing yoki loyiha tavsifini tayyorlang. Forma pochta ilovangizda tekshirish va yuborish uchun qoralama ochadi. Tavsifni yuklab olish ham mumkin.',
        ],
        'labels' => [
            'name' => 'Ismingiz', 'email' => 'E-pochta manzili',
            'organization' => 'Tashkilot (ixtiyoriy)', 'interest' => 'Yoʻnalish',
            'message' => 'Loyiha yoki mavzu',
        ],
        'button' => 'Xat tayyorlash',
        'note' => 'Pochta ilovangiz qorlama bilan ochiladi. Uni oʻsha yerda tekshiring va yuboring; bu sayt xabarlarni avtomatik yubormaydi.',
        'success' => 'Tavsif tayyor. Yuklamalarni tekshiring; u yuborilmadi.',
        'options' => ['Konsalting', 'Akademiya', 'Media', 'Umumiy soʻrov'],
    ],
];
