<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'The Recruitable', // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => false, // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['jobs in kenya', 'job application letter', 'job vacancies in kenya', 'latest jobs in kenya', 'job opportuinities in kenya', 'job sites in kenya', 'careers kenya', 'careers in kenya', 'interview questions', 'interview questions and answers', 'interview preparation', 'common interview questions', 'career advice', 'interview'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => "INDEX,FOLLOW", // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => false, // set false to total remove
            'description' => false, // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'site_name'   => 'Recruitable',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Jobs - Recruitment - Job Search -Employment', // set false to total remove
            'description' => 'Jobs - Recruitment - Job Search -Employment', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
