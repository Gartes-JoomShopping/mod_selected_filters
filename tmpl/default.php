<?php
/**
 * @package    mod_selected_filters
 *
 * @author     oleg <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;
/**
 * @var $params Joomla\Registry\Registry
 * @var $com_searchData array
 */
// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');

/*
echo'<pre>';print_r( $com_searchData );echo'</pre>'.__FILE__.' '.__LINE__;
die(__FILE__ .' '. __LINE__ );*/

?>
<svg style="display: none;">
    <defs id="symbols">
        <symbol viewBox="0 0 24 24" id="icon-remove">
            <path d="m4.29289 5.70711c-.39052-.39053-.39052-1.02369 0-1.41422.39053-.39052 1.02369-.39052 1.41422 0l6.29289 6.29291 6.2929-6.29291c.3905-.39052 1.0237-.39052 1.4142 0 .3905.39053.3905 1.02369 0 1.41422l-6.2929 6.29289 6.2929 6.2929c.3905.3905.3905 1.0237 0 1.4142s-1.0237.3905-1.4142 0l-6.2929-6.2929-6.29289 6.2929c-.39053.3905-1.02369.3905-1.41422 0-.39052-.3905-.39052-1.0237 0-1.4142l6.29291-6.2929z"></path>
        </symbol>
    </defs>
</svg>

<div _ngcontent-c27="" class="catalog-selection"><p _ngcontent-c27="" class="catalog-selection__label">
         Выбрано <?= $com_searchData['total'] ?>  товара </p>
    <ul _ngcontent-c27="" class="catalog-selection__list">
        <li _ngcontent-c27="" class="catalog-selection__item">
            <button _ngcontent-c27="" class="catalog-selection__link catalog-selection__link_type_reset" type="button">
                Сбросить
            </button>
        </li>
        <li _ngcontent-c27="" class="catalog-selection__item"><a _ngcontent-c27="" class="catalog-selection__link"
                                                                 href="/mobile-phones/c80003/"> Honor <span
                        _ngcontent-c27="" class="catalog-selection__remove-icon"><svg _ngcontent-c27="" height="16"
                                                                                      width="16"><use _ngcontent-c27=""
                                                                                                      xlink:href="#icon-remove"
                                                                                                      xmlns:xlink="http://www.w3.org/1999/xlink"></use></svg></span></a>
        </li>
    </ul>
</div>