<?php

defined('TYPO3_MODE') or die();

use \TYPO3\CMS\Core\Utility\GeneralUtility;
use \TYPO3\CMS\Core\Imaging\IconRegistry;
use \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

$boot = function () {


    if (TYPO3_MODE === 'BE') {

        //Declare RTPim_PagetreeNode Xclass to permit access to module for Backend users.
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Backend\\Tree\\Pagetree\\PagetreeNode'] = array(
            'className' => 'CMSPACA\\RtPagesTreeIcons\\Xclass\\RTPim_PagetreeNode'
        );

        //SVG Icons files declarations
        $icons = [
            'actions-pagetree-change-page-icon'             =>          'palm-tree.svg',
            'apps-pagetree-filetree-folder-black'			=>			'filetree-folder/filetree-folder-black.svg',
            'apps-pagetree-filetree-folder-blue-light'		=>			'filetree-folder/filetree-folder-blue-light.svg',
            'apps-pagetree-filetree-folder-blue'			=>			'filetree-folder/filetree-folder-blue.svg',
            'apps-pagetree-filetree-folder-gray-brighter'	=>			'filetree-folder/filetree-folder-gray-brighter.svg',
            'apps-pagetree-filetree-folder-gray-dark'		=>			'filetree-folder/filetree-folder-gray-dark.svg',
            'apps-pagetree-filetree-folder-gray-light'		=>			'filetree-folder/filetree-folder-gray-light.svg',
            'apps-pagetree-filetree-folder-gray'			=>			'filetree-folder/filetree-folder-gray.svg',
            'apps-pagetree-filetree-folder-green-light'		=>			'filetree-folder/filetree-folder-green-light.svg',
            'apps-pagetree-filetree-folder-green'			=>			'filetree-folder/filetree-folder-green.svg',
            'apps-pagetree-filetree-folder-orange'			=>			'filetree-folder/filetree-folder-orange.svg',
            'apps-pagetree-filetree-folder-purple'			=>			'filetree-folder/filetree-folder-purple.svg',
            'apps-pagetree-filetree-folder-red-light'		=>			'filetree-folder/filetree-folder-red-light.svg',
            'apps-pagetree-filetree-folder-red'				=>			'filetree-folder/filetree-folder-red.svg',
            'apps-pagetree-filetree-folder-white'			=>			'filetree-folder/filetree-folder-white.svg',
            'apps-pagetree-filetree-folder-yellow-light'	=>			'filetree-folder/filetree-folder-yellow-light.svg',
            'apps-pagetree-filetree-folder-yellow'			=>			'filetree-folder/filetree-folder-yellow.svg',

            'apps-pagetree-rounded-folder-black'			=>	    	'rounded-folder/rounded-folder-black.svg',
            'apps-pagetree-rounded-folder-blue-light'		=>	    	'rounded-folder/rounded-folder-blue-light.svg',
            'apps-pagetree-rounded-folder-blue'				=>			'rounded-folder/rounded-folder-blue.svg',
            'apps-pagetree-rounded-folder-gray-brighter'	=>	    	'rounded-folder/rounded-folder-gray-brighter.svg',
            'apps-pagetree-rounded-folder-gray-dark'		=>	    	'rounded-folder/rounded-folder-gray-dark.svg',
            'apps-pagetree-rounded-folder-gray-light'		=>	    	'rounded-folder/rounded-folder-gray-light.svg',
            'apps-pagetree-rounded-folder-gray'				=>			'rounded-folder/rounded-folder-gray.svg',
            'apps-pagetree-rounded-folder-green-light'		=>	    	'rounded-folder/rounded-folder-green-light.svg',
            'apps-pagetree-rounded-folder-green'			=>	    	'rounded-folder/rounded-folder-green.svg',
            'apps-pagetree-rounded-folder-orange'			=>	    	'rounded-folder/rounded-folder-orange.svg',
            'apps-pagetree-rounded-folder-purple'			=>	    	'rounded-folder/rounded-folder-purple.svg',
            'apps-pagetree-rounded-folder-red-light'		=>	    	'rounded-folder/rounded-folder-red-light.svg',
            'apps-pagetree-rounded-folder-red'				=>	    	'rounded-folder/rounded-folder-red.svg',
            'apps-pagetree-rounded-folder-white'			=>	    	'rounded-folder/rounded-folder-white.svg',
            'apps-pagetree-rounded-folder-yellow-light'		=>			'rounded-folder/rounded-folder-yellow-light.svg',
            'apps-pagetree-rounded-folder-yellow'			=>	    	'rounded-folder/rounded-folder-yellow.svg',

            'apps-pagetree-page-black'						=>			'pagetree-page/pagetree-page-black.svg',
            'apps-pagetree-page-blue-light'					=>			'pagetree-page/pagetree-page-blue-light.svg',
            'apps-pagetree-page-blue'						=>			'pagetree-page/pagetree-page-blue.svg',
            'apps-pagetree-page-gray-brighter'				=>			'pagetree-page/pagetree-page-gray-brighter.svg',
            'apps-pagetree-page-gray-dark'					=>			'pagetree-page/pagetree-page-gray-dark.svg',
            'apps-pagetree-page-gray-light'					=>			'pagetree-page/pagetree-page-gray-light.svg',
            'apps-pagetree-page-gray'						=>			'pagetree-page/pagetree-page-gray.svg',
            'apps-pagetree-page-green-light'				=>			'pagetree-page/pagetree-page-green-light.svg',
            'apps-pagetree-page-green'						=>			'pagetree-page/pagetree-page-green.svg',
            'apps-pagetree-page-orange'						=>			'pagetree-page/pagetree-page-orange.svg',
            'apps-pagetree-page-purple'						=>			'pagetree-page/pagetree-page-purple.svg',
            'apps-pagetree-page-red-light'					=>			'pagetree-page/pagetree-page-red-light.svg',
            'apps-pagetree-page-red'						=>			'pagetree-page/pagetree-page-red.svg',
            'apps-pagetree-page-white'						=>			'pagetree-page/pagetree-page-white.svg',
            'apps-pagetree-page-yellow-light'				=>			'pagetree-page/pagetree-page-yellow-light.svg',
            'apps-pagetree-page-yellow'						=>			'pagetree-page/pagetree-page-yellow.svg',

            'apps-pagetree-logo-typo3-black'				=>			'software/logo-typo3-black.svg',
            'apps-pagetree-logo-typo3-orange'				=>			'software/logo-typo3-orange.svg',
            'apps-pagetree-typoscript-orange'				=>			'software/typoscript-orange.svg',
            'apps-pagetree-templates'						=>			'software/templates.svg',
            'apps-pagetree-backend-layout'		        	=>			'software/backend-layouts.svg',
            'apps-pagetree-grid-elements'					=>			'software/grid-elements.svg',
            'apps-pagetree-shortcut'                        =>          'symbols/shortcut.svg',
            'apps-pagetree-form'                            =>          'symbols/form.svg',
            'apps-pagetree-ux-desktop'						=>			'symbols/ux-desktop.svg',
            'apps-pagetree-ux-tablet'						=>			'symbols/ux-tablet.svg',
            'apps-pagetree-ux-mobile'						=>			'symbols/ux-mobile.svg',
            'apps-pagetree-home'                            =>          'symbols/home.svg',
            'apps-pagetree-video'							=>			'symbols/video.svg',
            'apps-pagetree-audio'                           =>          'symbols/audio.svg',
            'apps-pagetree-comments'						=>			'symbols/comments.svg',
            'apps-pagetree-magnifier'						=>			'symbols/magnifier.svg',
            'apps-pagetree-mail'							=>			'symbols/mail.svg',
            'apps-pagetree-books'                           =>          'symbols/books.svg',
            'apps-pagetree-jobs'                            =>          'symbols/jobs.svg',
            'apps-pagetree-legal-notice'                    =>          'symbols/legal-notice.svg',
            'apps-pagetree-sitemap'                         =>          'symbols/sitemap.svg',
            'apps-pagetree-phone'                           =>          'symbols/phone.svg',
            'apps-pagetree-location'                        =>          'symbols/location.svg',
            'apps-pagetree-university'                      =>          'symbols/university.svg',
            'apps-pagetree-faq'                             =>          'symbols/faq.svg',
            'apps-pagetree-rss-black'						=>			'software/rss-black.svg',
            'apps-pagetree-rss-orange'						=>			'software/rss-orange.svg',

            'apps-pagetree-arobase-black'					=>			'symbols/arobase-black.svg',
            'apps-pagetree-arobase-orange'					=>			'symbols/arobase-orange.svg',
            'apps-pagetree-asterisk-black'					=>			'symbols/asterisk-black.svg',
            'apps-pagetree-asterisk-orange'					=>			'symbols/asterisk-orange.svg',
            'apps-pagetree-hashtag-black'					=>			'symbols/hashtag-black.svg',
            'apps-pagetree-hashtag-orange'					=>			'symbols/hashtag-orange.svg',
            'apps-pagetree-gear-black'						=>			'symbols/gear-black.svg',
            'apps-pagetree-gear-orange'						=>			'symbols/gear-orange.svg',
            'apps-pagetree-star-black'						=>			'symbols/star-black.svg',
            'apps-pagetree-star-orange'						=>			'symbols/star-orange.svg',
            'apps-pagetree-wrench-black'					=>			'symbols/wrench-black.svg',
            'apps-pagetree-wrench-orange'					=>			'symbols/wrench-orange.svg',

            'apps-pagetree-cube'							=>			'symbols/cube.svg',
            'apps-pagetree-database'						=>			'symbols/database.svg',
            'apps-pagetree-lightbulb'						=>			'symbols/lightbulb.svg',
            'apps-pagetree-lock'							=>			'symbols/lock.svg',
            'apps-pagetree-swiss-army-knife'				=>			'symbols/swiss-army-knife.svg',
            'apps-pagetree-users'							=>			'symbols/users.svg',
            'apps-pagetree-user'							=>			'symbols/user.svg',
            'apps-pagetree-earth'							=>			'symbols/earth.svg',

            'apps-pagetree-linux-black'						=>			'software/linux-black.svg',
            'apps-pagetree-android-black'                   =>          'software/android-black.svg',
            'apps-pagetree-apple-black'						=>			'software/apple-black.svg',
            'apps-pagetree-windows-black'					=>			'software/windows-black.svg',
            'apps-pagetree-browser-chrome'					=>			'software/browser-chrome.svg',
            'apps-pagetree-browser-firefox'					=>			'software/browser-firefox.svg',
            'apps-pagetree-browser-opera'					=>			'software/browser-opera.svg',
            'apps-pagetree-browser-safari'					=>			'software/browser-safari.svg',
            'apps-pagetree-browser-ie'						=>			'software/browser-ie.svg',
            'apps-pagetree-html5'							=>			'software/html5.svg',
            'apps-pagetree-css3'							=>			'software/css3.svg',
            'apps-pagetree-jquery'							=>			'software/jquery.svg',
            'apps-pagetree-bootstrap'						=>			'software/bootstrap.svg',
            'apps-pagetree-git-branch'						=>			'software/git-branch.svg',
            'apps-pagetree-git-merge'						=>			'software/git-merge.svg',
            'apps-pagetree-php'								=>			'software/php.svg',
            'apps-pagetree-social-facebook'					=>			'software/social-facebook.svg',
            'apps-pagetree-social-twitter'					=>			'software/social-twitter.svg',
            'apps-pagetree-social-google-plus'				=>			'software/social-google-plus.svg',
            'apps-pagetree-social-linkedin'					=>			'software/social-linkedin.svg',
            'apps-pagetree-social-viadeo'					=>			'software/social-viadeo.svg',

            'apps-pagetree-alphanum-a'				        =>			'alphanum/a.svg',
            'apps-pagetree-alphanum-b'				        =>			'alphanum/b.svg',
            'apps-pagetree-alphanum-c'				        =>			'alphanum/c.svg',
            'apps-pagetree-alphanum-d'				        =>			'alphanum/d.svg',
            'apps-pagetree-alphanum-e'				        =>			'alphanum/e.svg',
            'apps-pagetree-alphanum-f'			        	=>			'alphanum/f.svg',
            'apps-pagetree-alphanum-g'			        	=>			'alphanum/g.svg',
            'apps-pagetree-alphanum-h'			        	=>			'alphanum/h.svg',
            'apps-pagetree-alphanum-i'			        	=>			'alphanum/i.svg',
            'apps-pagetree-alphanum-j'			        	=>			'alphanum/j.svg',
            'apps-pagetree-alphanum-k'			        	=>			'alphanum/k.svg',
            'apps-pagetree-alphanum-l'				        =>			'alphanum/l.svg',
            'apps-pagetree-alphanum-m'        				=>			'alphanum/m.svg',
            'apps-pagetree-alphanum-n'		        		=>			'alphanum/n.svg',
            'apps-pagetree-alphanum-o'		        		=>			'alphanum/o.svg',
            'apps-pagetree-alphanum-p'		        		=>			'alphanum/p.svg',
            'apps-pagetree-alphanum-q'		        		=>			'alphanum/q.svg',
            'apps-pagetree-alphanum-r'		        		=>			'alphanum/r.svg',
            'apps-pagetree-alphanum-s'		        		=>			'alphanum/s.svg',
            'apps-pagetree-alphanum-t'		        		=>			'alphanum/t.svg',
            'apps-pagetree-alphanum-u'		        		=>			'alphanum/u.svg',
            'apps-pagetree-alphanum-v'			        	=>			'alphanum/v.svg',
            'apps-pagetree-alphanum-w'				        =>			'alphanum/w.svg',
            'apps-pagetree-alphanum-x'				        =>			'alphanum/x.svg',
            'apps-pagetree-alphanum-y'				        =>			'alphanum/y.svg',
            'apps-pagetree-alphanum-z'				        =>			'alphanum/z.svg',
            'apps-pagetree-alphanum-0'			            =>			'alphanum/0.svg',
            'apps-pagetree-alphanum-1'				        =>			'alphanum/1.svg',
            'apps-pagetree-alphanum-2'			            =>			'alphanum/2.svg',
            'apps-pagetree-alphanum-3'			           	=>			'alphanum/3.svg',
            'apps-pagetree-alphanum-4'				        =>			'alphanum/4.svg',
            'apps-pagetree-alphanum-5'				        =>			'alphanum/5.svg',
            'apps-pagetree-alphanum-6'				        =>			'alphanum/6.svg',
            'apps-pagetree-alphanum-7'				        =>			'alphanum/7.svg',
            'apps-pagetree-alphanum-8'				        =>			'alphanum/8.svg',
            'apps-pagetree-alphanum-9'				        =>			'alphanum/9.svg'
        ];
        $iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
        foreach ($icons as $identifier => $icon) {
            $iconRegistry->registerIcon(
                $identifier,
                SvgIconProvider::class,
                ['source' => 'EXT:rt_pages_tree_icons/Resources/Public/Icons/' . $icon]
            );
        }
    }
};
$boot();
unset($boot);