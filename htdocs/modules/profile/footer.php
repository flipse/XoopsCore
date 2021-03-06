<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Extended User Profile
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         profile
 * @since           2.3.0
 * @author          Jan Pedersen
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @version         $Id$
 */
$xoops = Xoops::getInstance();
$profileBreadcrumbs = $xoops->getConfig('profile_breadcrumbs');

if (count($profileBreadcrumbs) > 1) {
    $xoops->tpl()->assign('xoBreadcrumbs', $profileBreadcrumbs);
}
$xoops->theme()->addStylesheet($xoops->url('modules/profile/templates/style.css'));
$xoops->footer();