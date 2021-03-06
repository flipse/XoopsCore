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
 * banners module
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         banners
 * @since           2.6.0
 * @author          Mage Gr�gory (AKA Mage)
 * @version         $Id$
 */

defined('XOOPS_ROOT_PATH') or die('Restricted access');

class BannersBannerclientForm extends XoopsThemeForm
{
    /**
     * @param XoopsBannerClient|XoopsObject $obj
     */
    public function __construct(BannersBannerClient &$obj)
    {
        $title = $obj->isNew() ? sprintf( _AM_BANNERS_CLIENTS_ADD ) : sprintf( _AM_BANNERS_CLIENTS_EDIT );

        parent::__construct($title, 'form', 'clients.php', 'post', true);

        $this->addElement(new XoopsFormText( _AM_BANNERS_CLIENTS_NAME, 'name', 5, 255, $obj->getVar('bannerclient_name') ), true );
        // date
        if ($obj->isNew()) {
            $user = 'N';
        } else {
            if ($obj->getVar('bannerclient_uid') == 0) {
                $user = 'N';
            } else {
                $user = 'Y';
            }
        }
        $uname = new XoopsFormElementTray(_AM_BANNERS_CLIENTS_UNAME, '');
        $type = new XoopsFormRadio('', 'user', $user);
        $options = array('N' =>_AM_BANNERS_CLIENTS_UNAME_NO, 'Y' => _AM_BANNERS_CLIENTS_UNAME_YES);
        $type->addOptionArray($options);
        $uname->addElement($type);
        $uname->addElement(new XoopsFormSelectUser('', 'uid', false, $obj->getVar('bannerclient_uid'), 1, false));
        $this->addElement($uname);
        $this->addElement(new xoopsFormTextArea( _AM_BANNERS_CLIENTS_EXTRAINFO, 'extrainfo', $obj->getVar('bannerclient_extrainfo'), 5, 5 ), false );
        if (!$obj->isNew()) {
            $this->addElement(new XoopsFormHidden( 'cid', $obj->getVar('bannerclient_cid') ) );
        }
        $this->addElement(new XoopsFormHidden( 'op', 'save' ) );
        $this->addElement(new XoopsFormButton('', 'submit', XoopsLocale::A_SUBMIT, 'submit' ) );
    }
}