<?php //モバイルボタン設定に必要な定数や関数

//モバイルボタンレイアウト
define('OP_MOBILE_BUTTON_LAYOUT_TYPE', 'mobile_button_layout_type');
if ( !function_exists( 'get_mobile_button_layout_type' ) ):
function get_mobile_button_layout_type(){
  return get_theme_option(OP_MOBILE_BUTTON_LAYOUT_TYPE, 'slide_in');
}
endif;
if ( !function_exists( 'is_mobile_button_layout_type_slide_in' ) ):
function is_mobile_button_layout_type_slide_in(){
  return get_mobile_button_layout_type() == 'slide_in';
}
endif;

if ( !function_exists( 'is_slicknav_visible' ) ):
function is_slicknav_visible(){
  switch (get_mobile_button_layout_type()) {
    case 'top':
    case 'top_slidein':
      return true;
      break;
  }
  return false;
}
endif;

//エントリーカードスニペット表示
define('OP_SMARTPHONE_ENTRY_CARD_SNIPPET_VISIBLE', 'smartphone_entry_card_snippet_visible');
if ( !function_exists( 'is_smartphone_entry_card_snippet_visible' ) ):
function is_smartphone_entry_card_snippet_visible(){
  return get_theme_option(OP_SMARTPHONE_ENTRY_CARD_SNIPPET_VISIBLE, 1);
}
endif;