<?php

// Sayt chrome rasmlari (maqola/loyiha recordlari EMAS).
// Fayl o'rniga yoziladi — view/config/DB dagi yo'l o'zgarmaydi.
// max: eni chegarasi (px), quality: WebP sifati. Katta fondagi rasmlar
// (hero, mountains) yuqori qiymatda — kichik ekranli kartalar pastda.
return [
    'logo' => ['label' => 'Logotip', 'path' => 'images/logo.webp', 'hint' => 'Header/footer.'],
    'hero' => ['label' => 'Bosh hero fotosurat', 'path' => 'images/hero.webp', 'hint' => 'Bosh sahifa fonida.', 'max' => 1920, 'quality' => 90],
    'advisory' => ['label' => 'Ustun: Konsalting', 'path' => 'images/advisory.webp', 'hint' => 'Pillar karta.'],
    'academy' => ['label' => 'Ustun: Akademiya', 'path' => 'images/academy.webp', 'hint' => 'Pillar karta.'],
    'media' => ['label' => 'Ustun: Media', 'path' => 'images/media.webp', 'hint' => 'Pillar karta + maqola kartasi bilan umumiy.'],
    'mining' => ['label' => 'Soha: Konchilik', 'path' => 'images/mining.webp', 'hint' => 'Soha kartasi + loyiha/maqola bilan umumiy.'],
    'automotive-card' => ['label' => 'Soha kartasi: Avtosanoat', 'path' => 'images/automotive-card.webp', 'hint' => 'Soha kartasi.'],
    'manufacturing-card' => ['label' => 'Soha kartasi: Ishlab chiqarish', 'path' => 'images/manufacturing-card.webp', 'hint' => 'Soha kartasi.'],
    'energy' => ['label' => 'Soha: Energetika', 'path' => 'images/energy.webp', 'hint' => 'Soha kartasi.'],
    'infrastructure' => ['label' => 'Soha: Infratuzilma', 'path' => 'images/infrastructure.webp', 'hint' => 'Soha kartasi.'],
    'mountains' => ['label' => 'Fon: Tog‘lar', 'path' => 'images/mountains.webp', 'hint' => 'CTA banner + sohalar foni.', 'max' => 1920, 'quality' => 88],
];
