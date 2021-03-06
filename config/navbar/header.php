<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Rapporter från vissa kursmoment.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom04",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport skriven under KMOM04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport skriven under KMOM05.",
                    ],
                    [
                        "text" => "Kmom06 - Rapport",
                        "url" => "rapport/designprincip",
                        "title" => "Rapport skriven under KMOM06.",
                    ],
                    [
                        "text" => "Kmom06 - Element",
                        "url" => "rapport/designelement",
                        "title" => "Mindre rapport från KMOM06, kring designelement",
                    ],
                    [
                        "text" => "Kmom06 - Principer",
                        "url" => "rapport/designprinciper",
                        "title" => "Mindre rapport från KMOM06, kring designprinciper",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Min blogg, där jag driver ett projekt kallat Dagens Bild.",
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Min egna lilla sandlåda för markdown",
        ],
    ],
];
