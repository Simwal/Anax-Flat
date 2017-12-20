<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "Assignments" => [
               "text"  =>"<i class=\"fa fa-folder-open-o\"></i> Assignments",
               "url"   => $this->di->get("url")->create("#"),
               "title" => "Assignements",
               "submenu" => [
                   "items" => [
                       "analysis" => [
                           "text"  =>"Analysis",
                           "url"   => $this->di->get("url")->create("analysis"),
                           "title" => "Analysis of color schemes and usibility"
                       ],
<<<<<<< HEAD

                       "design-elements" => [
                          "text"  =>"Design elements",
                          "url"   => $this->di->get("url")->create("design-element"),
                          "title" => "A test page for themes with design elements"
                       ],

                       "design-principles" => [
                         "text"  =>"Design principles",
                         "url"   => $this->di->get("url")->create("design-principle"),
                         "title" => "A test page for themes with design principles"
                       ],

=======
>>>>>>> 21bbd04a96eb16edad5f43b3d60e8d4008e50d99
                       "grid" => [
                           "text"  =>"Grid",
                           "url"   => $this->di->get("url")->create("grid?vgrid"),
                           "title" => "A test page for grid"
                       ],

                       "images" => [
                           "text"  =>"Images",
                           "url"   => $this->di->get("url")->create("images"),
                           "title" => "A test page for my images"
                       ],
                       "typography" => [
                           "text"  =>"Typography",
                           "url"   => $this->di->get("url")->create("typography?hgrid"),
                           "title" => "A new test page for typography"

                       ],
                       "theme" => [
                           "text"  =>"Theme",
                           "url"   => $this->di->get("url")->create("theme"),
                           "title" => "A page for my different themes"
                       ],

                       "blog" => [
                           "text"  =>"Blog",
                           "url"   => $this->di->get("url")->create("blog"),
                           "title" => "My blog page"
                       ],

                   ],
               ],
            ],

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,

            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "theme-selector" => [
                "text"  => t("Theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("A theme-selector")
            ],



        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "Assignments" => [
               "text"  =>"<i class=\"fa fa-folder-open-o\"></i> Assignments",
               "url"   => $this->di->get("url")->create("#"),
               "title" => "Assignements",
               "submenu" => [
                   "items" => [
                       "analysis" => [
                           "text"  =>"Analysis",
                           "url"   => $this->di->get("url")->create("analysis"),
                           "title" => "Analysis of color schemes and usibility"
                       ],
<<<<<<< HEAD

                       "design-elements" => [
                          "text"  =>"Design elements",
                          "url"   => $this->di->get("url")->create("design-element"),
                          "title" => "A test page for themes with design elements"
                       ],

                       "design-principles" => [
                         "text"  =>"Design principles",
                         "url"   => $this->di->get("url")->create("design-principle"),
                         "title" => "A test page for themes with design principles"
                       ],

=======
>>>>>>> 21bbd04a96eb16edad5f43b3d60e8d4008e50d99
                       "grid" => [
                           "text"  =>"Grid",
                           "url"   => $this->di->get("url")->create("grid?vgrid"),
                           "title" => "A test page for grid"
                       ],

                       "images" => [
                           "text"  =>"Images",
                           "url"   => $this->di->get("url")->create("images"),
                           "title" => "A test page for my images"
                       ],
                       "typography" => [
                           "text"  =>"Typography",
                           "url"   => $this->di->get("url")->create("typography?hgrid"),
                           "title" => "A new test page for typography"

                       ],
                       "theme" => [
                           "text"  =>"Theme",
                           "url"   => $this->di->get("url")->create("theme"),
                           "title" => "A page for my different themes"
                       ],

                       "blog" => [
                           "text"  =>"Blog",
                           "url"   => $this->di->get("url")->create("blog"),
                           "title" => "My blog page"
                       ],

                   ],
               ],
            ],

            "report" => [
                "text"  => t("Report"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Reports from kmom assignments"),
                "mark-if-parent" => true,

            ],

            "about" => [
                "text"  => t("About"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("About this website")
            ],

            "theme-selector" => [
                "text"  => t("Theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("A theme-selector")
            ],


        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
