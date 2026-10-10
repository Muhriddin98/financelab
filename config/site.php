<?php

return [
    'site' => [
        'name' => 'FinanceLab',
        'tagline' => 'Financial Intelligence. Applied.',
        'description' => 'FinanceLab provides financial modelling, feasibility studies, investment analysis, professional finance education and analytical insights.',
        'base_url' => 'https://financelab.uz',
        'nav' => [
            ['label' => 'Advisory', 'href' => '/advisory/'],
            ['label' => 'Academy', 'href' => '/academy/'],
            ['label' => 'Media', 'href' => '/media/'],
            ['label' => 'Insights', 'href' => '/insights/'],
            ['label' => 'About', 'href' => '/about/'],
        ],
        'metrics' => [
            ['value' => '50+', 'label' => 'Projects reviewed'],
            ['value' => '8+', 'label' => 'Years of experience'],
            ['value' => 'Multiple', 'label' => 'Industries'],
            ['value' => 'Real-world', 'label' => 'Expertise & insights'],
        ],
        'hero' => [
            'eyebrow' => 'FINANCIAL INTELLIGENCE.',
            'lines' => ['Financial', 'Intelligence.', 'Applied.'],
            'description' => 'We model. We analyze. We teach. We explain.',
            'note' => 'Turning financial expertise into better decisions, knowledge and opportunities.',
        ],
        'founder' => [
            'name' => 'Laziz Sherovatov',
            'role' => 'Financial Modeling & Investment Analysis Specialist',
            'bio' => 'With extensive experience in financial-economic analysis, feasibility studies and investment projects, Laziz founded FinanceLab to turn real-world expertise into practical solutions, professional education and accessible financial insights.',
        ],
        'footer' => ['copyright' => '© 2026 FinanceLab. All rights reserved.'],
    ],

    'pillars' => [
        ['slug' => 'advisory', 'number' => '01', 'name' => 'Advisory', 'verb' => 'We solve.', 'color' => 'blue', 'image' => '/images/advisory.webp', 'description' => 'Financial modelling, feasibility studies and analytical solutions for informed decisions and sustainable growth.'],
        ['slug' => 'academy', 'number' => '02', 'name' => 'Academy', 'verb' => 'We teach.', 'color' => 'gold', 'image' => '/images/academy.webp', 'description' => 'Practical finance education built on real project experience to develop the next generation of finance professionals.'],
        ['slug' => 'media', 'number' => '03', 'name' => 'Media', 'verb' => 'We explain.', 'color' => 'green', 'image' => '/images/media.webp', 'description' => 'Financial intelligence through analysis, data and visual materials that make complex topics simple and practical.'],
    ],

    'services' => [
        'Financial Modelling',
        'Feasibility Studies (TEO)',
        'Investment Analysis',
        'Business Cases',
        'Financial Diagnostics',
        'Financial Analysis & Visualization',
    ],

    'service_icons' => [
        'chart-no-axes-combined', 'file-text', 'coins', 'presentation', 'scan-line', 'chart-pie',
    ],

    'service_descriptions' => [
        'Integrated financial models with transparent assumptions, operating forecasts, cash flow analysis and scenario testing.',
        'Structured feasibility assessment connecting market, technical and financial assumptions for an investment decision.',
        'Project economics, investment returns, funding requirements and sensitivities that clarify the decision.',
        'A clear commercial and financial rationale for a new project, expansion or strategic alternative.',
        'A structured review of performance, financial health, cash conversion and the drivers of value.',
        'Decision-focused reporting and visual analysis that turn complex financial information into a coherent narrative.',
    ],

    'industries' => [
        ['name' => 'Mining & Metallurgy', 'anchor' => 'mining'],
        ['name' => 'Automotive', 'anchor' => 'automotive'],
        ['name' => 'Manufacturing', 'anchor' => 'manufacturing'],
        ['name' => 'Energy', 'anchor' => 'energy'],
        ['name' => 'Infrastructure', 'anchor' => 'infrastructure'],
    ],

    'industry_descriptions' => [
        'Project economics, production assumptions and capital planning.',
        'Localization, assembly economics and production ramp-up.',
        'Capacity, unit economics and working capital requirements.',
        'Capital requirements, operating scenarios and long-term returns.',
        'Long-lived assets, demand scenarios and financing structures.',
    ],

    'projects' => [
        [
            'slug' => 'iron-ore', 'industry' => 'Mining', 'title' => 'Iron Ore Project',
            'description' => 'Financial model, investment analysis and independent review of a feasibility study.',
            'image' => '/images/mining.webp',
            'scope' => ['Integrated financial model', 'Investment analysis and sensitivities', 'Independent feasibility study review'],
        ],
        [
            'slug' => 'ckd-localization', 'industry' => 'Automotive', 'title' => 'CKD Localization Project',
            'description' => 'Business case, financial model and financing structure for a multi-model assembly program.',
            'image' => '/images/automotive.webp',
            'scope' => ['Multi-model assembly business case', 'Localization and production scenarios', 'Financing structure assessment'],
        ],
        [
            'slug' => 'tpe-floor-mats', 'industry' => 'Manufacturing', 'title' => 'TPE Floor Mats Production',
            'description' => 'Five-year financial model and investment analysis for a manufacturing project.',
            'image' => '/images/manufacturing.webp',
            'scope' => ['Five-year operating and financial forecast', 'Capital expenditure and working capital', 'Investment returns and sensitivity analysis'],
        ],
    ],

    'insights' => [
        [
            'slug' => 'uzbekistan-automotive', 'category' => 'Industry analysis',
            'title' => 'Uzbekistan Automotive Industry: Trends and Outlook', 'date' => '12 Sep 2026',
            'image' => '/images/automotive.webp',
            'intro' => 'Understanding an automotive investment starts with the relationship between scale, localization and demand.',
            'body' => [
                'A useful industry assessment connects market demand to practical production capacity. Product mix, purchasing power and distribution should be considered together, rather than relying on a single growth assumption.',
                'Localization can reshape both investment requirements and unit economics. The analysis should separate imported components, local sourcing, logistics, working capital and the pace of production ramp-up.',
                'Scenario analysis makes these dependencies visible. A base case should be accompanied by slower volume growth, changes in input costs and a delayed localization schedule. These are analytical considerations, not a current market forecast.',
            ],
        ],
        [
            'slug' => 'robust-financial-model', 'category' => 'Financial analysis',
            'title' => 'How to Build a Robust Financial Model', 'date' => '5 Sep 2026',
            'image' => '/images/media.webp',
            'intro' => 'A robust model turns explicit assumptions into a coherent view of performance, cash flow and investment returns.',
            'body' => [
                'Start with the decision the model needs to support. Its time horizon, level of detail and scenarios should follow the investment question.',
                'Separate inputs, calculations and outputs. Link the income statement, cash flow and balance sheet, and include checks for cash movements, financing balances and accounting consistency.',
                'Test the assumptions that matter most. Demand, prices, capital expenditure, working capital and the timing of operations often interact. Document the sources and explain the limitations alongside the results.',
            ],
        ],
        [
            'slug' => 'mining-assumptions', 'category' => 'Investment',
            'title' => 'Key Financial Assumptions in Mining Projects', 'date' => '28 Aug 2026',
            'image' => '/images/mining.webp',
            'intro' => 'Mining economics depend on a small set of interconnected technical and commercial assumptions.',
            'body' => [
                'Production schedules, recovery rates and saleable output form the bridge between the technical plan and financial performance. Each should be traceable to a documented basis.',
                'Price assumptions should be considered alongside product quality, transport, selling terms and currency. Operating costs need to reflect the actual production and maintenance profile.',
                'Evaluate construction timing, sustaining capital and closure obligations across the project life. Sensitivities should illuminate uncertainty rather than suggest that one forecast is certain.',
            ],
        ],
        [
            'slug' => 'strategic-insights', 'category' => 'Visual finance',
            'title' => 'From Financial Statements to Strategic Insights', 'date' => '18 Aug 2026',
            'image' => '/images/strategic.webp',
            'intro' => 'Financial statements become more useful when their relationships are made clear.',
            'body' => [
                'Begin with the connection between growth, margins and cash conversion. Revenue alone cannot explain whether a business is creating the capacity to fund its next stage.',
                'Use a focused set of visuals to explain working capital, capital intensity and financing. Consistent scales and clear definitions matter more than decorative complexity.',
                'A strong analytical narrative distinguishes observed results from assumptions, then identifies the decisions that deserve further investigation.',
            ],
        ],
    ],

    'media_slugs' => ['robust-financial-model', 'strategic-insights'],

    'copy' => [
        'pillars' => ['label' => 'One brand. Three directions.', 'title' => 'Solve. Teach. Explain.', 'description' => 'FinanceLab combines analytical thinking, real-world experience and modern tools to create solutions, knowledge and opportunities.'],
        'expertise' => ['label' => 'Our expertise', 'title' => "From complex data\nto clear decisions.", 'description' => 'We provide analytical and financial solutions across the full investment cycle — from idea and concept to bankable feasibility and implementation support.'],
        'industries' => ['label' => 'Industries', 'title' => "Experience across\ncapital-intensive industries.", 'description' => 'We work on projects in key sectors of the economy, combining industry understanding with strong financial and analytical expertise.'],
        'work' => ['label' => 'Selected work', 'title' => 'Real projects. Tangible impact.'],
        'insights' => ['label' => 'Latest articles & insights', 'title' => 'Analysis. Ideas. Perspectives.'],
        'cta' => ['label' => 'Let’s build better decisions', 'title' => "Have a project to evaluate\nor a topic to explore?"],
        'actions' => [
            'explore' => 'Explore FinanceLab', 'discuss' => 'Discuss a Project',
            'services' => 'View all services', 'projects' => 'View all projects',
            'insights' => 'View all insights', 'experience' => 'Explore our experience',
            'learn' => 'Learn more',
        ],
    ],

    'pages' => [
        'advisory' => [
            'label' => 'FinanceLab Advisory', 'title' => 'Rigorous analysis. Better decisions.',
            'intro' => 'Financial modelling, feasibility studies and investment analysis across the full project lifecycle.',
            'image' => '/images/advisory.webp',
            'body' => [
                'An investment decision is only as strong as the analysis behind it. We connect commercial, technical and financial assumptions in a clear, decision-ready view.',
                'From the initial business case to a bankable feasibility study, our work helps project sponsors evaluate alternatives, understand risk and communicate with investors and lenders.',
            ],
        ],
        'academy' => [
            'label' => 'FinanceLab Academy', 'title' => 'Practical knowledge. Real-world application.',
            'intro' => 'Finance education grounded in project experience — for professionals who want to turn knowledge into capability.',
            'image' => '/images/academy.webp',
            'body' => [
                'Our educational direction brings financial modelling, investment analysis and feasibility assessment into a practical learning context.',
                'The focus is on the reasoning behind the spreadsheet: structuring assumptions, understanding business drivers and communicating results with clarity.',
                'Program details and enrolment dates will be announced here. In the meantime, explore our analytical insights or prepare an enquiry about your team’s learning needs.',
            ],
        ],
        'media' => [
            'label' => 'FinanceLab Media', 'title' => 'Complex topics. Clear perspectives.',
            'intro' => 'Analysis, data and visual storytelling that make financial intelligence accessible and useful.',
            'image' => '/images/media.webp',
            'body' => [
                'FinanceLab Media connects financial analysis with a clear editorial point of view. We explore how industries operate, how investments are evaluated and what financial information can tell us.',
                'Explore practical notes on modelling, industry economics and visual finance. Our aim is to make the assumptions visible and the reasoning easy to follow.',
            ],
        ],
        'about' => [
            'label' => 'About FinanceLab', 'title' => 'Expertise, shared with purpose.',
            'intro' => 'One brand connects financial advisory, professional education and analytical media.',
            'image' => '/images/advisory.webp',
        ],
        'projects' => [
            'label' => 'Selected work', 'title' => 'Real projects. Tangible impact.',
            'intro' => 'Explore representative project scopes across capital-intensive sectors. Client identities can remain confidential.',
        ],
        'insights' => [
            'label' => 'FinanceLab Insights', 'title' => 'Analysis. Ideas. Perspectives.',
            'intro' => 'Explore the assumptions, methods and industry questions behind better financial decisions.',
        ],
        'contact' => [
            'label' => 'Contact FinanceLab', 'title' => 'Let’s build better decisions.',
            'intro' => 'Have a project to evaluate, a team to develop or a topic to explore? Start with a clear brief.',
        ],
        'privacy' => [
            'label' => 'Privacy', 'title' => 'Your information, handled clearly.',
            'intro' => 'How this initial FinanceLab website handles information.',
        ],
        'terms' => [
            'label' => 'Website terms', 'title' => 'Using FinanceLab’s website.',
            'intro' => 'A clear basis for reading and using the materials on this site.',
        ],
    ],

    'contact' => [
        'email' => 'sherovatov92@gmail.com',
        'socials' => [
            ['label' => 'LinkedIn', 'href' => 'https://www.linkedin.com/in/laziz-sherovatov'],
            ['label' => 'Telegram', 'href' => 'https://t.me/financelab_uz'],
        ],
    ],

    'contact_copy' => [
        'heading' => 'A useful conversation starts with context.',
        'paragraphs' => [
            'Tell us what you are evaluating, where you are in the process and what decision you need to make.',
            'Write directly or send a project brief below. Your message goes straight to FinanceLab. You can also download your brief.',
        ],
        'labels' => [
            'name' => 'Your name', 'email' => 'Email address',
            'organization' => 'Organization (optional)', 'interest' => 'Area of interest',
            'message' => 'Project or topic',
        ],
        'button' => 'Send message',
        'note' => 'Fill in the form and press the button — your message will be sent directly to FinanceLab.',
        'success' => 'Thank you! Your message has been sent. We will get back to you soon.',
        'options' => ['Advisory', 'Academy', 'Media', 'General enquiry'],
    ],

    'ref_images' => [
        'logo' => [48, 5, 135, 42],
        'hero' => [376, 48, 350, 273],
        'advisory' => [207, 489, 76, 186],
        'academy' => [463, 490, 88, 185],
        'media' => [736, 489, 80, 185],
        'mining' => [38, 974, 143, 74],
        'automotive' => [197, 975, 142, 74],
        'manufacturing' => [356, 975, 141, 74],
        'energy' => [515, 975, 141, 74],
        'infrastructure' => [673, 975, 141, 74],
        'project-mining' => [36, 1176, 66, 98],
        'project-automotive' => [305, 1176, 65, 98],
        'project-manufacturing' => [575, 1176, 65, 98],
        'insight-industry' => [39, 1348, 187, 61],
        'insight-model' => [241, 1348, 178, 61],
        'insight-mining' => [436, 1348, 176, 61],
        'insight-visual' => [628, 1348, 184, 61],
        'founder' => [0, 1503, 275, 174],
        'mountains' => [286, 1699, 245, 66],
    ],

    'industry_images' => [
        'Mining & Metallurgy' => '/images/mining.webp', 'Automotive' => '/images/automotive-card.webp',
        'Manufacturing' => '/images/manufacturing-card.webp', 'Energy' => '/images/energy.webp',
        'Infrastructure' => '/images/infrastructure.webp',
    ],

    'project_images' => [
        'iron-ore' => 'project-mining', 'ckd-localization' => 'project-automotive',
        'tpe-floor-mats' => 'project-manufacturing',
    ],

    'insight_images' => [
        'uzbekistan-automotive' => 'insight-industry',
        'robust-financial-model' => 'insight-model',
        'mining-assumptions' => 'insight-mining',
        'strategic-insights' => 'insight-visual',
    ],
];
