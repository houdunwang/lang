<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace houdunwang\lang\build;

use houdunwang\arr\Arr;

class Base {
	//语句包
	private $language;
	//外观类
	protected $facade;

	public function __construct( $facade ) {
		$this->facade = $facade;
	}

	public function make( $language ) {
		$this->language = $language;
	}

	//获取语言
	public function get( $lang ) {
		return Arr::get( $this->language, $lang );
	}

	//设置单个语言
	public function set( $name, $value ) {
		return Arr::set( $this->language, $name, $value );
	}
}