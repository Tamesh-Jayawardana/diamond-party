<?phpKirki::add_field( 'option', [	'type'        => 'custom',	'settings'    => 'custom_catalog_product_layout',	'section'     => 'woocommerce_product_catalog',	'default'     => '<div class="customize-title-divider">' . __( 'Catalog layout', 'rozer' ) . '</div>',	'priority'    => 1,] );Kirki::add_field( 'option', [	'type'        => 'radio-image',	'settings'    => 'catalog_product_layout',	'label'       => esc_html__( 'Catalog layout', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'no-sidebar',	'choices'     => [		'no-sidebar'   => get_template_directory_uri() . '/assets/images/customizer/layout-no-sidebar.png',		'left-sidebar' => get_template_directory_uri() . '/assets/images/customizer/layout-left-sidebar.png',		'right-sidebar'  => get_template_directory_uri() . '/assets/images/customizer/layout-right-sidebar.png',	],	'priority'    => 1,] );Kirki::add_field( 'option', [	'type'        => 'slider',	'settings'    => 'shop_sidebar_width',	'label'       => esc_html__( 'Sidebar width (%)', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 25,	'choices'     => [		'min'  => 10,		'max'  => 50,		'step' => 1,	],	'priority'    => 1,	'transport' => 'postMessage',	'active_callback' => [		[			'setting'  => 'catalog_product_layout',			'operator' => '!=',			'value'    => 'no-sidebar',		]	],] );Kirki::add_field( 'option', [	'type'     => 'text',	'settings' => 'catalog_product_per_page',	'label'    => esc_html__( 'Products per page', 'rozer' ),	'section'  => 'woocommerce_product_catalog',	'default'  => '12',] );Kirki::add_field( 'option', [	'type'        => 'slider',	'settings'    => 'catalog_product_items_desktop',	'label'       => esc_html__( 'Items per row - Desktop', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 3,	'choices'     => [		'min'  => 2,		'max'  => 6,		'step' => 1,	],] );Kirki::add_field( 'option', [	'type'        => 'slider',	'settings'    => 'catalog_product_items_tablet',	'label'       => esc_html__( 'Items per row - Tablet', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 3,	'choices'     => [		'min'  => 2,		'max'  => 4,		'step' => 1,	],] );Kirki::add_field( 'option', [	'type'        => 'slider',	'settings'    => 'catalog_product_items_phone',	'label'       => esc_html__( 'Items per row - Phone', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 2,	'choices'     => [		'min'  => 1,		'max'  => 3,		'step' => 1,	],] );Kirki::add_field( 'option', [	'type'        => 'radio-buttonset',	'settings'    => 'catalog_product_pagination',	'label'       => esc_html__( 'Pagination type', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'default',	'choices'     => [		'default'   => esc_html__( 'Default', 'rozer' ),		'loadmore' => esc_html__( 'Load more', 'rozer' ),		'infinite'  => esc_html__( 'Infinite scroll', 'rozer' ),	],] );Kirki::add_field( 'option', [	'type'        => 'custom',	'settings'    => 'custom_catalog_product_cate',	'section'     => 'woocommerce_product_catalog',	'default'     => '<div class="customize-title-divider">' . __( 'Category description & thumbnail', 'rozer' ) . '</div>',] );Kirki::add_field( 'option', [	'type'        => 'radio-buttonset',	'settings'    => 'catalog_product_category_desc',	'label'       => esc_html__( 'Category description', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'hide',	'choices'     => [		'hide'   => esc_html__( 'Hide', 'rozer' ),		'full' => esc_html__( 'Show full', 'rozer' ),		'part'  => esc_html__( 'Show a part', 'rozer' ),	],] );Kirki::add_field( 'option', [	'type'        => 'radio-buttonset',	'settings'    => 'catalog_product_category_thumb',	'label'       => esc_html__( 'Category thumbnail', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'hide',	'choices'     => [		'hide'   => esc_html__( 'Hide', 'rozer' ),		'show' => esc_html__( 'Show', 'rozer' ),	],] );Kirki::add_field( 'option', [	'type'        => 'custom',	'settings'    => 'custom_catalog_product_subcategories',	'section'     => 'woocommerce_product_catalog',	'default'     => '<div class="customize-title-divider">' . __( 'Subcategories', 'rozer' ) . '</div>',] );Kirki::add_field( 'option', [	'type'        => 'checkbox',	'settings'    => 'catalog_product_subcategories',	'label'       => esc_html__( 'Show subcategories', 'rozer' ),	'description' => esc_html__( 'Show/hide subcategories slider in shop/category page.', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => false,	'priority' => 10,] );Kirki::add_field( 'option', [	'type'        => 'slider',	'settings'    => 'catalog_product_sub_items',	'label'       => esc_html__( 'Number subcategories on screen', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 6,	'choices'     => [		'min'  => 2,		'max'  => 12,		'step' => 1,	],] );Kirki::add_field( 'option', [	'type'        => 'radio-image',	'settings'    => 'catalog_product_sub_design',	'label'       => esc_html__( 'Subcategories design', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'design1',	'choices'     => [		'design1'   => get_template_directory_uri() . '/assets/images/customizer/sub1.png',		'design2' => get_template_directory_uri() . '/assets/images/customizer/sub2.png',	],] );Kirki::add_field( 'option', [	'type'        => 'custom',	'settings'    => 'custom_catalog_product_filter',	'section'     => 'woocommerce_product_catalog',	'default'     => '<div class="customize-title-divider">' . __( 'Filters', 'rozer' ) . '</div>',	'active_callback' => [		[			'setting'  => 'catalog_product_layout',			'operator' => '==',			'value'    => 'no-sidebar',		]	],] );Kirki::add_field( 'option', [	'type'        => 'radio-image',	'settings'    => 'catalog_product_filter_posistion',	'label'       => esc_html__( 'Filters position', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'side',	'choices'     => [		'top' => get_template_directory_uri() . '/assets/images/customizer/layout-top-sidebar.png',		'side'  => get_template_directory_uri() . '/assets/images/customizer/layout-left-sidebar.png',	],	'active_callback' => [		[			'setting'  => 'catalog_product_layout',			'operator' => '==',			'value'    => 'no-sidebar',		]	],] );Kirki::add_field( 'option', [	'type'        => 'custom',	'settings'    => 'custom_catalog_product_product',	'section'     => 'woocommerce_product_catalog',	'default'         => '<div class="customize-title-divider">' . __( 'Product style', 'rozer' ) . '</div>',] );Kirki::add_field( 'option', [	'type'        => 'select',	'settings'    => 'catalog_product_productstyle',	'label'       => esc_html__( 'Product grid style', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => '1',	'multiple'    => 1,	'choices'     => [		'1' => esc_html__( 'Style 1', 'rozer' ),		'2' => esc_html__( 'Style 2', 'rozer' ),		'3' => esc_html__( 'Style 3', 'rozer' ),	],] );Kirki::add_field( 'option', [	'type'        => 'checkbox',	'settings'    => 'catalog_product_hover',	'label'       => esc_html__( 'Active hover image', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => true,] );Kirki::add_field( 'option', [	'type'        => 'checkbox',	'settings'    => 'catalog_product_quickview',	'label'       => esc_html__( 'Show quickview', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => true,] );Kirki::add_field( 'option', [	'type'        => 'checkbox',	'settings'    => 'catalog_product_category',	'label'       => esc_html__( 'Show category', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => true,] );Kirki::add_field( 'option', [	'type'        => 'checkbox',	'settings'    => 'catalog_product_rating',	'label'       => esc_html__( 'Show rating', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => true,] );Kirki::add_field( 'option', [	'type'        => 'checkbox',	'settings'    => 'catalog_product_countdown',	'label'       => esc_html__( 'Show countdown', 'rozer' ),	'description' => esc_html__( 'Show countdown when product has sale price', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => true,] );Kirki::add_field( 'option', [	'type'        => 'radio-buttonset',	'settings'    => 'catalog_product_sale',	'label'       => esc_html__( 'Sale label', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'text',	'choices'     => [		'text'   => esc_html__( 'Text', 'rozer' ),		'percent' => esc_html__( 'Percent discount', 'rozer' ),	],] );Kirki::add_field( 'option', [	'type'        => 'radio-image',	'settings'    => 'catalog_product_sale_design',	'label'       => esc_html__( 'Sale label design', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => 'circle',	'choices'     => [		'circle'   => get_template_directory_uri() . '/assets/images/customizer/label-1.jpg',        'rectangle' => get_template_directory_uri().'/assets/images/customizer/label-2.jpg',        'elip' => get_template_directory_uri().'/assets/images/customizer/label-3.jpg',        'trapezium' => get_template_directory_uri().'/assets/images/customizer/label-4.jpg',	],] );Kirki::add_field( 'option', [	'type'        => 'color',	'settings'    => 'catalog_product_sale_bground',	'label'       => __( 'Sale label background', 'rozer' ),	'section'     => 'woocommerce_product_catalog',	'default'     => '',	'choices'     => [		'alpha' => true,	],	'transport'   => 'postMessage',] );