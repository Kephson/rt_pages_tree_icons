/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2018 Regis TEDONE <regis.tedone@gmail.com>, CMS-PACA
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

if(!TYPO3.jQuery) {
    TYPO3.jQuery = jQuery.noConflict(true);
    if (typeof $ === 'undefined' || $ === null) {
        let $ = TYPO3.jQuery;
    }
}

define('CMSPACA/RtPagesTreeIcons/pageIconChanger', ['jquery'], function($) {
    TYPO3.jQuery('li.icon-container').on('click', function() {
        TYPO3.jQuery(this).siblings().removeClass('icon-current');
        TYPO3.jQuery(this).addClass('icon-current');
        TYPO3.jQuery('#newIcon').val(TYPO3.jQuery(this).data('icon'));
    });
});