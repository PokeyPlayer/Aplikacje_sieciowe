<?php
#---------------------------------------------------------------------------
# Module: AceSyntax
# Authors: Fernando Morgado (Jo Morg), Rolf Tjassens (cmscanbesimple.org)
#---------------------------------------------------------------------------
# CMS Made Simple - Power for the professional, Simplicity for the end user.
# (c) 2004 - 2011 by Ted Kulp (wishy@cmsmadesimple.org)
# (c) 2011 - 2018 by The CMS Made Simple Development Team
# (c) 2018 - 2019 by The CMS Made Simple Foundation
# This project's homepage is: https://www.cmsmadesimple.org
# The module's homepage is: http://dev.cmsmadesimple.org/projects/acesyntax
#---------------------------------------------------------------------------
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#---------------------------------------------------------------------------

if ( !is_object( cmsms() ) ) exit;

if(!$this->CheckPermission('Modify Site Preferences'))
{
  echo $this->ShowErrors(
    $this->Lang(
        'needpermission', array(
        'Modify Site Preferences'
      )
    )
  );
  
  return;
}


$this->AceSetPreference('auto_height',        (isset($params['auto_height']) ? 1 : 0));
$this->AceSetPreference('enable_behaviors',   (isset($params['enable_behaviors']) ? 1 : 0));
$this->AceSetPreference('fontsize',           $params['fontsize']);
$this->AceSetPreference('full_line',          (isset($params['full_line']) ? 1 : 0));
$this->AceSetPreference('height',             $params['height']);
$this->AceSetPreference('height_units',       $params['height_units']);
$this->AceSetPreference('highlight_active',   (isset($params['highlight_active']) ? 1 : 0));
$this->AceSetPreference('highlight_selected', (isset($params['highlight_selected']) ? 1 : 0));
$this->AceSetPreference('keybinding',         (isset($params['keybinding']) ? 1 : 0));
$this->AceSetPreference('mode',               $params['mode']);
$this->AceSetPreference('persistent_hscroll', (isset($params['persistent_hscroll']) ? 1 : 0));
$this->AceSetPreference('print_margin',       (isset($params['print_margin']) ? 1 : 0));
$this->AceSetPreference('show_gutter',        (isset($params['show_gutter']) ? 1 : 0));
$this->AceSetPreference('show_invisibles',    (isset($params['show_invisibles']) ? 1 : 0));
$this->AceSetPreference('soft_tab',           (isset($params['soft_tab']) ? 1 : 0));
$this->AceSetPreference('soft_wrap',          $params['soft_wrap']);
$this->AceSetPreference('tab_size',           $params['tab_size']);
$this->AceSetPreference('theme',              $params['theme']);
$this->AceSetPreference('width',              $params['width']);
$this->AceSetPreference('width_units',        $params['width_units']);
$this->AceSetPreference('wrap_line',          (isset($params['wrap_line']) ? 1 : 0));

// redirect to tab
$params = array(
	'module_message' => $this->Lang('settingssaved')
);

$this->RedirectToAdminTab('settings_backend', $params, 'defaultadmin');

#
# EOF
#