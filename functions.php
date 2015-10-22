<?php

// ウィジェット
register_sidebar(
	array(
		'id' => 'sidebar-1',
	)
);

// RSS フィード
add_theme_support('automatic-feed-links');

// カスタムメニュー
register_nav_menu('navigation', 'ナビゲーション');
