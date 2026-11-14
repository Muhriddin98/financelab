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
            'bio' => [
                'Laziz Sherovatov is a financial modeling and investment analysis specialist with over eight years of professional experience in financial and economic evaluation, feasibility studies and investment project analysis.',
                'Having worked across mining, metallurgy, automotive and manufacturing projects, he founded FinanceLab to bring practical expertise into advisory services, professional education and evidence-based analytical content.',
            ],
        ],
        'footer' => ['copyright' => '© 2026 FinanceLab. All rights reserved.'],
    ],

    'about_page' => [
        'who' => [
            'label' => 'Who we are',
            'title' => 'Built on experience. Driven by analysis.',
            'paragraphs' => [
                'FinanceLab is an Uzbekistan-based financial and investment advisory brand founded by Laziz Sherovatov.',
                'Built on extensive experience in financial modeling, investment analysis, feasibility studies and independent financial-economic reviews, FinanceLab focuses on turning complex financial and economic information into clear, decision-ready insights.',
                'With practical experience across mining, metallurgy, automotive and manufacturing projects, we combine analytical rigor with real-industry understanding to support investment and business decisions.',
            ],
        ],
        'approach' => [
            'label' => 'Our approach',
            'title' => 'From complexity to clarity.',
            'paragraphs' => [
                'Good financial decisions require more than calculations. They depend on sound assumptions, a clear understanding of business and industry economics, and the ability to recognize risks, uncertainties and alternative outcomes.',
                'Our approach combines rigorous financial analysis with practical project experience. We examine how technical, commercial and financial assumptions interact, evaluate their implications and translate the results into meaningful conclusions.',
            ],
            'cards' => [
                ['icon' => 'chart-no-axes-column', 'title' => 'Analytical Rigor', 'text' => 'Transparent assumptions, consistent methods and evidence-based conclusions.'],
                ['icon' => 'factory', 'title' => 'Industry Understanding', 'text' => 'Financial analysis grounded in real business and project economics.'],
                ['icon' => 'target', 'title' => 'Decision Focus', 'text' => 'Practical insights that support informed investment and management decisions.'],
            ],
        ],
    ],

    'pillars' => [
        ['slug' => 'advisory', 'number' => '01', 'name' => 'Advisory', 'verb' => 'We solve.', 'color' => 'blue', 'image' => '/images/advisory.webp', 'description' => 'Financial modelling, feasibility studies and analytical solutions for informed decisions and sustainable growth.'],
        ['slug' => 'academy', 'number' => '02', 'name' => 'Academy', 'verb' => 'We teach.', 'color' => 'gold', 'image' => '/images/academy.webp', 'description' => 'Practical finance education built on real project experience to develop the next generation of finance professionals.'],
        ['slug' => 'media', 'number' => '03', 'name' => 'Media', 'verb' => 'We explain.', 'color' => 'green', 'image' => '/images/media.webp', 'description' => 'Clear explanations, insightful analysis and evidence-based research on finance, investment and industry economics.'],
    ],

    'services' => [
        'Financial Modeling & Investment Analysis',
        'Feasibility Studies',
        'Independent Financial & Economic Review',
        'Business Diagnostics & Financial Analysis',
        'Data Analytics & Visualization',
        'Corporate Website Development & Maintenance',
    ],

    'service_icons' => [
        'chart-no-axes-combined', 'file-text', 'scan-line', 'chart-pie', 'database', 'monitor',
    ],

    'service_descriptions' => [
        'We develop integrated financial models to evaluate project economics, investment returns, financing requirements and financial risks.',
        'We develop financial and economic feasibility assessments integrating technical, commercial and investment assumptions to evaluate project viability.',
        'We independently assess feasibility studies, financial models and investment assumptions to identify weaknesses, inconsistencies and material financial risks.',
        'We assess business performance, financial health, cost structures and cash flows to identify key profitability drivers and opportunities for improvement.',
        'We transform raw business data into structured, actionable insights through data processing, analysis and interactive visualization (Python, SQL, Power BI).',
        'We design, develop and maintain professional corporate websites that strengthen digital presence, communicate business value and engage stakeholders.',
    ],

    'service_groups' => [
        ['title' => 'Core Financial Advisory', 'description' => 'Financial and investment advisory services for informed business decisions.'],
        ['title' => 'Data & Digital Solutions', 'description' => 'Data analytics and digital solutions to turn information into business value.'],
    ],

    // Batafsil sahifa slug lari (3 tilda bir xil EN).
    'service_slugs' => [
        'financial-modeling',
        'feasibility-studies',
        'independent-review',
        'business-diagnostics',
        'data-analytics',
        'website-development',
    ],

    // Universal xizmat sahifasi: 6 xizmat uchun batafsil kontent (EN).
    'service_details' => [
        'financial-modeling' => [
            'group' => 'core', 'number' => '01',
            'title' => 'Financial Modeling & Investment Analysis',
            'lead' => 'Integrated financial models and investment analysis that transform business assumptions into informed investment decisions.',
            'overview_title' => 'From assumptions to investment decisions.',
            'overview' => [
                'A well-structured financial model is more than a forecast — it is a framework for understanding how a business or investment project creates value.',
                'FinanceLab develops integrated, assumption-driven financial models that connect commercial, operational and financial inputs. We evaluate project economics, investment returns, funding requirements and financial risks to help decision-makers understand the implications of their investment choices.',
                'Our approach emphasizes transparent assumptions, consistent calculations and practical analysis of alternative scenarios.',
            ],
            'short_icon' => 'chart-no-axes-column',
            'short' => [
                'Integrated financial modeling.',
                'Investment viability and returns assessment.',
                'Financing and debt analysis (CFADS, DSCR).',
                'Scenario and sensitivity analysis.',
            ],
            'what' => [
                ['icon' => 'file-chart-column', 'title' => 'Integrated Financial Modeling', 'text' => 'Development of dynamic financial models incorporating revenue, operating costs, capital expenditures, working capital and integrated financial statements.'],
                ['icon' => 'chart-no-axes-combined', 'title' => 'Investment Appraisal', 'text' => 'Assessment of project viability, profitability, investment returns and value creation using appropriate financial and economic indicators.'],
                ['icon' => 'database', 'title' => 'Financing & Debt Analysis', 'text' => 'Evaluation of funding requirements, debt and equity scenarios, repayment schedules, cash flow available for debt service and debt service coverage.'],
                ['icon' => 'sliders-horizontal', 'title' => 'Scenario & Sensitivity Analysis', 'text' => 'Assessment of how changes in key assumptions — including prices, production volumes, operating costs, CAPEX and financing terms — affect project performance.'],
            ],
            'deliverables' => [
                'Integrated Excel-based financial model with P&L, Cash Flow and Balance Sheet.',
                'Structured assumptions and operating forecasts.',
                'CAPEX, OPEX and working capital schedules.',
                'Investment appraisal metrics: NPV, IRR, Payback Period and other relevant indicators.',
                'Funding requirements and debt repayment schedules.',
                'CFADS and DSCR calculations, where applicable.',
                'Scenario, sensitivity and break-even analysis.',
                'Management-ready financial summaries and dashboards.',
            ],
            'who' => 'Project sponsors, industrial enterprises, investors, business owners and management teams evaluating new investments, business expansion or strategic alternatives.',
            'cta' => [
                'title' => 'Turn your assumptions into a clear investment case.',
                'text' => 'Discuss your project with FinanceLab and build a stronger financial foundation for your investment decision.',
                'button' => 'Discuss Your Project',
            ],
            'image' => '/images/mountains.webp',
        ],
        'feasibility-studies' => [
            'group' => 'core', 'number' => '02',
            'title' => 'Feasibility Studies',
            'lead' => 'Comprehensive financial and economic assessments that establish a sound basis for investment project development and evaluation.',
            'overview_title' => 'Establishing the economics behind a project.',
            'overview' => [
                'A promising business idea is not yet a viable investment project. A feasibility study brings together the commercial, technical, operational and financial assumptions needed to evaluate whether an investment is economically justified.',
                'FinanceLab develops financial and economic feasibility assessments for industrial and capital-intensive investment projects. We integrate market information, technical inputs, capital requirements, operating assumptions and financing scenarios into a structured project evaluation.',
                'Our work supports project sponsors in assessing viability, comparing alternatives and preparing investment documentation for management, investors and lenders.',
            ],
            'short_icon' => 'clipboard-list',
            'short' => [
                'Comprehensive project evaluation (TEO/FS).',
                'Integrated market, technical and financial assumptions.',
                'Project economics and investment efficiency.',
                'Actionable conclusions for decision-makers.',
            ],
            'what' => [
                ['icon' => 'layers', 'title' => 'Project Concept & Economic Framework', 'text' => 'Assessment of the project concept, proposed capacity, product portfolio, implementation assumptions and key economic drivers.'],
                ['icon' => 'chart-no-axes-combined', 'title' => 'Market & Commercial Assessment', 'text' => 'Analysis of market demand, pricing assumptions, sales volumes, competitive conditions and commercial opportunities relevant to project viability.'],
                ['icon' => 'database', 'title' => 'Capital & Operating Cost Assessment', 'text' => 'Review and structuring of investment requirements, operating costs, implementation schedules and working capital needs.'],
                ['icon' => 'file-spreadsheet', 'title' => 'Financial & Economic Evaluation', 'text' => 'Development of financial models and feasibility assessments to evaluate profitability, investment returns, funding requirements and project risks.'],
            ],
            'deliverables' => [
                'Financial and economic sections of Feasibility Studies (TEO/FS).',
                'Techno-economic calculations and project economics.',
                'Market and commercial assumptions assessment.',
                'CAPEX and OPEX estimates based on available project inputs.',
                'Integrated project financial model.',
                'Investment efficiency and financing requirements assessment.',
                'Scenario and sensitivity analysis.',
                'Financial and economic conclusions supporting investment decisions.',
            ],
            'who' => 'Industrial enterprises, project initiators, investors, engineering and design organizations developing new production facilities, capacity expansions and modernization projects.',
            'cta' => [
                'title' => 'Build a stronger foundation for your investment project.',
                'text' => 'FinanceLab helps you assess the financial and economic viability of your project before committing significant capital.',
                'button' => 'Discuss Your Feasibility Study',
            ],
            'image' => '/images/mountains.webp',
        ],
        'independent-review' => [
            'group' => 'core', 'number' => '03',
            'title' => 'Independent Financial & Economic Review',
            'lead' => 'Objective assessment of financial models, feasibility studies and investment assumptions to identify weaknesses, risks and opportunities for improvement.',
            'overview_title' => 'A second perspective before committing capital.',
            'overview' => [
                'Investment decisions often depend on complex financial models, technical assumptions and feasibility assessments. Even well-prepared project documentation may contain inconsistencies, unsupported assumptions or methodological weaknesses that materially affect the investment conclusion.',
                'FinanceLab provides independent financial and economic reviews of investment projects and their supporting documentation.',
                'We examine the reliability of assumptions, the consistency of calculations and the economic logic behind reported results. Our objective is to identify material issues and provide clear, evidence-based recommendations for improvement.',
            ],
            'short_icon' => 'shield-check',
            'short' => [
                'Independent and objective review.',
                'Verification of assumptions and calculations.',
                'Identification of material risks and weaknesses.',
                'Practical recommendations for improvement.',
            ],
            'what' => [
                ['icon' => 'file-chart-column', 'title' => 'Financial Model Review', 'text' => 'Assessment of model structure, formulas, calculation logic, financial statements and internal consistency.'],
                ['icon' => 'layers', 'title' => 'Feasibility Study Review', 'text' => 'Evaluation of the financial and economic sections of feasibility studies, including the consistency of technical, commercial and financial assumptions.'],
                ['icon' => 'database', 'title' => 'Assumptions & Cost Validation', 'text' => 'Review of production forecasts, pricing assumptions, capital expenditures, operating costs and working capital requirements, supported by relevant benchmarks.'],
                ['icon' => 'alert-triangle', 'title' => 'Investment Risk & Methodology Assessment', 'text' => 'Evaluation of investment appraisal methods, discount rates, financing assumptions, sensitivity analysis and material financial risks.'],
            ],
            'deliverables' => [
                'Independent financial and economic review report.',
                'Financial model diagnostics and calculation checks.',
                'Identification of methodological errors and inconsistencies.',
                'Assessment of key assumptions and supporting evidence.',
                'CAPEX and OPEX benchmarking, where reliable data is available.',
                'Review of NPV, IRR, WACC, financing assumptions and other relevant indicators.',
                'Prioritized recommendations and corrective actions.',
                'Management-ready summary of material findings and financial risks.',
            ],
            'who' => 'Project sponsors, industrial enterprises, investors, financial institutions and design organizations seeking an independent assessment of investment documentation before approval, financing or implementation.',
            'cta' => [
                'title' => 'Identify weaknesses before they become costly decisions.',
                'text' => 'Obtain an independent financial and economic perspective on your investment project.',
                'button' => 'Request an Independent Review',
            ],
            'image' => '/images/mountains.webp',
        ],
        'business-diagnostics' => [
            'group' => 'core', 'number' => '04',
            'title' => 'Business Diagnostics & Financial Analysis',
            'lead' => 'In-depth financial and business performance analysis that identifies the drivers of profitability, cash flow and sustainable value creation.',
            'overview_title' => 'Understand performance. Identify opportunities.',
            'overview' => [
                'Financial statements reveal what has happened in a business. Effective financial analysis explains why it happened, what it means and where opportunities for improvement exist.',
                'FinanceLab helps businesses understand their financial position, operating performance and economic efficiency through structured diagnostics and analytical evaluation.',
                'We connect financial results with underlying business drivers to identify profitability constraints, cost inefficiencies, cash flow challenges and opportunities for stronger financial performance.',
            ],
            'short_icon' => 'chart-no-axes-column',
            'short' => [
                'Financial performance and trend analysis.',
                'Profitability, cost and unit economics.',
                'Cash flow and working capital.',
                'Benchmarks and actionable improvement areas.',
            ],
            'what' => [
                ['icon' => 'chart-no-axes-column', 'title' => 'Financial Statement Analysis', 'text' => 'Assessment of income statements, balance sheets and cash flow statements to evaluate financial performance, financial position and key trends.'],
                ['icon' => 'layers', 'title' => 'Profitability & Cost Analysis', 'text' => 'Analysis of revenue dynamics, margins, cost structures, unit economics and the factors influencing operating profitability.'],
                ['icon' => 'database', 'title' => 'Cash Flow & Working Capital Analysis', 'text' => 'Evaluation of cash generation, liquidity, working capital efficiency and the relationship between accounting profit and actual cash flow.'],
                ['icon' => 'gauge', 'title' => 'Performance Diagnostics & Benchmarking', 'text' => 'Assessment of key financial indicators, business efficiency and performance trends, including comparison with relevant industry benchmarks.'],
            ],
            'deliverables' => [
                'Comprehensive financial and business diagnostic report.',
                'Historical financial performance and trend analysis.',
                'Profitability and cost structure assessment.',
                'Liquidity, leverage and working capital analysis.',
                'Financial ratios and performance indicators.',
                'ROIC, ROE, ROA and other relevant efficiency metrics.',
                'Financial benchmarking and performance comparisons.',
                'Management dashboards and visual analytical summaries.',
                'Identification of improvement opportunities and key financial risks.',
            ],
            'who' => 'Business owners, industrial enterprises, management teams and investors seeking a clearer understanding of business performance, financial health and opportunities for improvement.',
            'cta' => [
                'title' => 'See beyond the financial statements.',
                'text' => 'Understand the drivers of your business performance and identify opportunities to improve profitability and financial efficiency.',
                'button' => 'Discuss Your Business Needs',
            ],
            'image' => '/images/strategic.webp',
        ],
        'data-analytics' => [
            'group' => 'data', 'number' => '05',
            'title' => 'Data Analytics & Visualization',
            'lead' => 'Transforming complex business data into structured information, meaningful insights and interactive visual solutions.',
            'overview_title' => 'Turn data into business value.',
            'overview' => [
                'Businesses generate large volumes of financial, commercial and operational data. However, fragmented datasets and manual reporting processes often make it difficult to extract meaningful insights.',
                'FinanceLab helps organizations structure, process and analyze their data, transforming raw information into clear and actionable business intelligence.',
                'By combining Python-based data processing, SQL databases and interactive Power BI dashboards, we develop analytical solutions that improve information accessibility, reporting efficiency and business understanding.',
            ],
            'short_icon' => 'database',
            'short' => [
                'Turn raw data into actionable insights.',
                'Python, SQL and Power BI expertise.',
                'Interactive, management-ready dashboards.',
                'Better reporting and business understanding.',
            ],
            'what' => [
                ['icon' => 'code', 'title' => 'Data Processing & Preparation', 'text' => 'Cleaning, organizing, transforming and consolidating datasets from multiple sources into structured, analysis-ready formats.'],
                ['icon' => 'database', 'title' => 'Database & SQL Solutions', 'text' => 'Working with SQL and MySQL databases to organize, retrieve and prepare business data for analytical and reporting purposes.'],
                ['icon' => 'chart-column', 'title' => 'Business Data Analytics', 'text' => 'Exploration and analysis of financial, commercial and operational datasets to identify patterns, trends and key performance drivers.'],
                ['icon' => 'monitor-chart', 'title' => 'Interactive Dashboards & Visualization', 'text' => 'Development of Power BI dashboards and visual reporting solutions that make complex data easier to explore, understand and communicate.'],
            ],
            'deliverables' => [
                'Cleaned and structured datasets.',
                'Data processing and transformation scripts using Python.',
                'SQL queries and database reporting solutions.',
                'Exploratory data analysis and analytical summaries.',
                'Interactive Power BI dashboards.',
                'KPI monitoring and business performance visualizations.',
                'Customized analytical reports.',
                'Reporting documentation and user guidance, where required.',
            ],
            'who' => 'Businesses, industrial enterprises, financial teams, sales departments and management teams looking to improve reporting, understand business performance and make better use of their data.',
            'cta' => [
                'title' => 'Make your data work for your business.',
                'text' => 'Transform fragmented information into meaningful analysis and practical visual solutions.',
                'button' => 'Discuss Your Data Needs',
            ],
            'image' => '/images/strategic.webp',
        ],
        'website-development' => [
            'group' => 'data', 'number' => '06',
            'title' => 'Corporate Website Development & Maintenance',
            'lead' => 'Professional corporate websites designed to strengthen digital presence, communicate business value and support long-term business development.',
            'overview_title' => 'A professional digital presence for your business.',
            'overview' => [
                'A corporate website is more than an online business card. It is a platform for communicating your expertise, presenting your services and building credibility with clients, investors and other stakeholders.',
                'FinanceLab develops professional corporate websites with a clear structure, modern visual identity and business-focused content presentation.',
                'Our approach combines thoughtful design, practical functionality and ongoing technical support to create websites that reflect the professionalism and objectives of your organization.',
            ],
            'short_icon' => 'monitor',
            'short' => [
                'Professional, business-focused websites.',
                'Modern, responsive and user-friendly.',
                'Essential functionality and SEO foundations.',
                'Ongoing maintenance and support.',
            ],
            'what' => [
                ['icon' => 'network', 'title' => 'Corporate Website Planning', 'text' => 'Development of website structure, page architecture and content organization aligned with business objectives and target audiences.'],
                ['icon' => 'code-xml', 'title' => 'Website Design & Development', 'text' => 'Creation of modern, responsive and professional websites that communicate corporate identity, services and business capabilities.'],
                ['icon' => 'search', 'title' => 'Website Functionality & SEO Foundations', 'text' => 'Implementation of essential website functionality, contact forms, multilingual content structures and foundational technical SEO.'],
                ['icon' => 'layers', 'title' => 'Website Maintenance & Support', 'text' => 'Ongoing technical maintenance, content updates, functionality improvements and support to keep the website relevant and operational.'],
            ],
            'deliverables' => [
                'Professional corporate website with customized page structure.',
                'Responsive desktop, tablet and mobile layouts.',
                'Corporate branding and visual identity integration.',
                'Service, portfolio, article and contact pages.',
                'Multilingual website structure, where required.',
                'Contact forms and basic website functionality.',
                'Technical SEO foundations and search engine indexing setup.',
                'Website maintenance and technical support under an agreed service arrangement.',
            ],
            'who' => 'Businesses, industrial enterprises, consulting firms and professional organizations seeking to establish or improve their corporate digital presence.',
            'cta' => [
                'title' => 'Build a digital presence that reflects your business.',
                'text' => 'Create a professional corporate website that communicates your expertise and supports meaningful stakeholder engagement.',
                'button' => 'Discuss Your Website Project',
            ],
            'image' => '/images/media.webp',
        ],
    ],

    'industries' => [
        ['name' => 'Mining & Metallurgy', 'anchor' => 'mining'],
        ['name' => 'Automotive', 'anchor' => 'automotive'],
        ['name' => 'Manufacturing', 'anchor' => 'manufacturing'],
        ['name' => 'Energy', 'anchor' => 'energy'],
        ['name' => 'Infrastructure', 'anchor' => 'infrastructure'],
    ],

    'industry_descriptions' => [
        'Mining, mineral processing and metallurgical investments — from project feasibility to production economics and financial evaluation.',
        'Vehicle manufacturing, localization and automotive components — investment feasibility, production economics and financial performance.',
        'Industrial production and manufacturing investments — capacity planning, cost structures, profitability and project viability.',
        'Energy generation and infrastructure investments — capital requirements, operating economics and long-term financial sustainability.',
        'Infrastructure development and capital-intensive assets — investment appraisal, financing requirements and long-term project economics.',
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
            'intro' => 'Financial modeling, feasibility studies, independent project reviews and business analysis — supporting informed investment and management decisions.',
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
            'intro' => 'Clear explanations and practical perspectives on financial modeling, investment analysis, feasibility studies and the economics behind business and investment decisions.',
            'image' => '/images/media.webp',
            'body' => [
                'FinanceLab Media makes financial and investment concepts easier to understand and apply. We explore how financial models work, how projects are evaluated and how economic assumptions influence investment and business decisions.',
                'Through practical articles, analytical explanations and visual storytelling, we connect financial theory with real-world applications — making complex topics clear, relevant and useful.',
            ],
        ],
        'about' => [
            'label' => 'About FinanceLab', 'title' => 'Expertise, shared with purpose.',
            'intro' => 'FinanceLab brings together financial and investment advisory, practical education and evidence-based analytical content — built on real-world project experience.',
            'image' => '/images/advisory.webp',
        ],
        'projects' => [
            'label' => 'Selected work', 'title' => 'Real projects. Tangible impact.',
            'intro' => 'Explore representative project scopes across capital-intensive sectors. Client identities can remain confidential.',
        ],
        'insights' => [
            'label' => 'FinanceLab Insights', 'title' => 'Analysis. Ideas. Perspectives.',
            'intro' => 'Evidence-based research and in-depth analysis of industries, investment projects and economic developments — examining the drivers, risks and implications behind investment decisions.',
        ],
        'contact' => [
            'label' => 'Contact FinanceLab', 'title' => 'Let’s build better decisions.',
            'intro' => 'Have a project to evaluate, a team to develop or a topic to explore? Start with a clear brief.',
        ],
        'privacy' => [
            'label' => 'Privacy Policy', 'title' => 'Your information, handled with care.',
            'intro' => 'How FinanceLab collects, uses and protects your personal information and submitted documents.',
        ],
        'terms' => [
            'label' => 'Terms of Use', 'title' => 'Using FinanceLab’s website.',
            'intro' => 'A clear basis for accessing and using our content and professional materials.',
        ],
    ],

    'contact' => [
        'email' => 'sherovatov92@gmail.com',
        'phone' => '+998 91 226 12 42',
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
            'file' => 'Attach a file (optional)',
        ],
        'placeholders' => [
            'message' => 'Briefly describe your project, business challenge or the type of support you are looking for.',
        ],
        'button' => 'Send message',
        'note' => '',
        'success' => 'Thank you! Your message has been sent. We will get back to you soon.',
        'options' => ['Financial & Investment Advisory', 'Data & Digital Solutions', 'Academy & Corporate Training', 'Media & Research', 'General Inquiry'],
        'privacy' => 'Your information will be handled with confidentiality and used only to respond to your inquiry.',
        'privacy_note' => 'By submitting this form, you acknowledge our Privacy Policy.',
    ],

    'legal' => [
        'privacy' => [
            'updated' => 'Last updated: November 2026',
            'intro' => 'FinanceLab respects your privacy and recognizes the importance of protecting personal information and confidential business documents. This Privacy Policy explains how information submitted through financelab.uz is collected, used and handled.',
            'short_title' => 'In short',
            'short' => [
                'We collect only the information you provide and basic technical data.',
                'We use it to respond to your inquiry and deliver our services.',
                'Your project information is treated confidentially.',
                'We do not sell your data.',
                'You can contact us to manage your information.',
            ],
            'sections' => [
                ['icon' => 'user', 'title' => '1. Information We Collect', 'text' => 'We may collect information that you voluntarily provide when contacting FinanceLab, including your name and contact details, organization name, area of interest, project descriptions and other information in your message, as well as documents and files you submit. Our website may also process technical information for its operation and security, such as IP addresses, browser information and access logs.'],
                ['icon' => 'layers', 'title' => '2. How We Use Your Information', 'text' => 'We use the information to respond to your inquiry, understand your project needs, prepare proposals and discuss possible engagements, deliver agreed services (advisory, analytical, educational or digital), maintain website functionality and security, and comply with applicable legal obligations.'],
                ['icon' => 'shield-check', 'title' => '3. Confidentiality of Business Information', 'text' => 'We recognize that financial models, feasibility studies, investment proposals and other documents may contain commercially sensitive information. Such information will be handled with appropriate confidentiality and used only for the purposes related to your inquiry or engagement. If required, a separate Non-Disclosure Agreement (NDA) may be established before detailed documents are exchanged.'],
                ['icon' => 'share-2', 'title' => '4. Information Sharing', 'text' => 'FinanceLab does not sell personal information. Information may be processed by trusted service providers (e.g., website hosting and email services) under appropriate confidentiality and data protection requirements, or disclosed where required by law or to fulfil an agreed engagement.'],
                ['icon' => 'database', 'title' => '5. Data Storage and Security', 'text' => 'We apply reasonable organizational and technical measures to protect your information against unauthorized access, disclosure, alteration or loss. Information is retained only for as long as necessary to fulfil the purposes for which it was collected, maintain business records or comply with legal obligations.'],
                ['icon' => 'cookie', 'title' => '6. Cookies and Website Technologies', 'text' => 'Our website may use essential cookies and similar technologies necessary for its operation, language preferences and security. If we introduce analytics or other non-essential technologies in the future, this Policy will be updated and, where required, your consent will be requested.'],
                ['icon' => 'sliders-horizontal', 'title' => '7. Your Rights', 'text' => 'Subject to applicable data protection laws, you may have the right to request access to your personal data, ask for correction or deletion, restrict processing, or withdraw your consent. You can contact us using the details provided on this page.'],
                ['icon' => 'refresh-cw', 'title' => '8. Changes to This Policy', 'text' => 'We may update this Privacy Policy to reflect changes in our services, website functionality or legal requirements. The most recent version will always be available on this page with the updated date.'],
            ],
        ],
        'terms' => [
            'updated' => 'Last updated: November 2026',
            'intro' => '',
            'short_title' => 'In short',
            'short' => [
                'Informational and educational content.',
                'Not an investment recommendation.',
                'Professional services agreed separately.',
                'Respect for intellectual property.',
            ],
            'sections' => [
                ['icon' => 'file-text', 'title' => 'Informational materials', 'text' => 'FinanceLab provides analytical, educational and research content for general informational purposes. Published materials do not constitute individualized investment recommendations or guarantees of financial performance.'],
                ['icon' => 'briefcase', 'title' => 'Professional services', 'text' => 'The scope, deliverables, fees and responsibilities of professional engagements are agreed separately. Submitting an inquiry does not establish a contractual relationship.'],
                ['icon' => 'layers', 'title' => 'Intellectual property', 'text' => 'FinanceLab\'s original content and branding are protected by applicable intellectual property rights. Materials may be referenced with appropriate attribution. Commercial reproduction requires prior permission, unless otherwise permitted by law.'],
                ['icon' => 'shield-check', 'title' => 'Accuracy and external sources', 'text' => 'FinanceLab aims to provide accurate and reliable information. However, published analyses may depend on assumptions, available data and changing economic conditions. External materials remain subject to their respective owners\' rights.'],
            ],
        ],
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
