<?php

/*
 * This file is part of the sfTwigPlugin package.
 *
 * (c) Henrik Bjornskov <henrik@bearwoods.dk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Form helpers.
 *
 * @package    sfTwigPlugin
 * @subpackage extension
 * @author     Henrik Bjornskov <henrik@bearwoods.dk>
 */
class Form_Twig_Extension extends Twig_Extension
{
  public function getFilters()
  {
    return array(
      'options_for_select'   =>  new Twig_Filter_Function('options_for_select'),
      'form_tag'             =>  new Twig_Filter_Function('form_tag'),
      'select_tag'           =>  new Twig_Filter_Function('select_tag'),
      'select_country_tag'   =>  new Twig_Filter_Function('select_country_tag'),
      'select_language_tag'  =>  new Twig_Filter_Function('select_language_tag'),
      'select_currency_tag'  =>  new Twig_Filter_Function('select_currency_tag'),
      'input_tag'            =>  new Twig_Filter_Function('input_tag'),
      'input_hidden_tag'     =>  new Twig_Filter_Function('input_hidden_tag'),
      'input_file_tag'       =>  new Twig_Filter_Function('input_file_tag'),
      'input_password_tag'   =>  new Twig_Filter_Function('input_password_tag'),
      'textarea_tag'         =>  new Twig_Filter_Function('textarea_tag'),
      'checkbox_tag'         =>  new Twig_Filter_Function('checkbox_tag'),
      'radiobutton_tag'      =>  new Twig_Filter_Function('radiobutton_tag'),
      'input_date_range_tag' =>  new Twig_Filter_Function('input_date_range_tag'),
      'input_date_tag'       =>  new Twig_Filter_Function('input_date_tag'),
      'submit_tag'           =>  new Twig_Filter_Function('submit_tag'),
      'reset_tag'            =>  new Twig_Filter_Function('reset_tag'),
      'submit_image_tag'     =>  new Twig_Filter_Function('submit_image_tag'),
      'label_for'            =>  new Twig_Filter_Function('label_for'),
    );
  }

  public function getName()
  {
    return 'form';
  }
}
