<?php
/*!
 *  Bayrell Language
 *
 *  (c) Copyright 2016-2018 "Ildar Bikmamatov" <support@bayrell.org>
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      https://www.bayrell.org/licenses/APACHE-LICENSE-2.0.html
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
namespace Bayrell\Lang\OpCodes;
class OpTryCatch extends \Bayrell\Lang\OpCodes\BaseOpCode
{
	public $__op;
	public $__op_try;
	public $__items;
	/* ======================= Class Init Functions ======================= */
	function _init($ctx)
	{
		parent::_init($ctx);
		$this->__op = "op_try_catch";
		$this->__op_try = null;
		$this->__items = null;
	}
	function assignObject($ctx,$o)
	{
		if ($o instanceof \Bayrell\Lang\OpCodes\OpTryCatch)
		{
			$this->__op = $o->__op;
			$this->__op_try = $o->__op_try;
			$this->__items = $o->__items;
		}
		parent::assignObject($ctx,$o);
	}
	function assignValue($ctx,$k,$v)
	{
		if ($k == "op")$this->__op = $v;
		else if ($k == "op_try")$this->__op_try = $v;
		else if ($k == "items")$this->__items = $v;
		else parent::assignValue($ctx,$k,$v);
	}
	function takeValue($ctx,$k,$d=null)
	{
		if ($k == "op")return $this->__op;
		else if ($k == "op_try")return $this->__op_try;
		else if ($k == "items")return $this->__items;
		return parent::takeValue($ctx,$k,$d);
	}
	function getClassName()
	{
		return "Bayrell.Lang.OpCodes.OpTryCatch";
	}
	static function getCurrentNamespace()
	{
		return "Bayrell.Lang.OpCodes";
	}
	static function getCurrentClassName()
	{
		return "Bayrell.Lang.OpCodes.OpTryCatch";
	}
	static function getParentClassName()
	{
		return "Bayrell.Lang.OpCodes.BaseOpCode";
	}
	static function getClassInfo($ctx)
	{
		return new \Runtime\Annotations\IntrospectionInfo($ctx, [
			"kind"=>\Runtime\Annotations\IntrospectionInfo::ITEM_CLASS,
			"class_name"=>"Bayrell.Lang.OpCodes.OpTryCatch",
			"name"=>"Bayrell.Lang.OpCodes.OpTryCatch",
			"annotations"=>\Runtime\Collection::from([
			]),
		]);
	}
	static function getFieldsList($ctx,$f)
	{
		$a = [];
		if (($f|3)==3)
		{
			$a[] = "op";
			$a[] = "op_try";
			$a[] = "items";
		}
		return \Runtime\Collection::from($a);
	}
	static function getFieldInfoByName($ctx,$field_name)
	{
		if ($field_name == "op") return new \Runtime\Annotations\IntrospectionInfo($ctx, [
			"kind"=>\Runtime\Annotations\IntrospectionInfo::ITEM_FIELD,
			"class_name"=>"Bayrell.Lang.OpCodes.OpTryCatch",
			"name"=> $field_name,
			"annotations"=>\Runtime\Collection::from([
			]),
		]);
		if ($field_name == "op_try") return new \Runtime\Annotations\IntrospectionInfo($ctx, [
			"kind"=>\Runtime\Annotations\IntrospectionInfo::ITEM_FIELD,
			"class_name"=>"Bayrell.Lang.OpCodes.OpTryCatch",
			"name"=> $field_name,
			"annotations"=>\Runtime\Collection::from([
			]),
		]);
		if ($field_name == "items") return new \Runtime\Annotations\IntrospectionInfo($ctx, [
			"kind"=>\Runtime\Annotations\IntrospectionInfo::ITEM_FIELD,
			"class_name"=>"Bayrell.Lang.OpCodes.OpTryCatch",
			"name"=> $field_name,
			"annotations"=>\Runtime\Collection::from([
			]),
		]);
		return null;
	}
	static function getMethodsList($ctx)
	{
		$a = [
		];
		return \Runtime\Collection::from($a);
	}
	static function getMethodInfoByName($ctx,$field_name)
	{
		return null;
	}
}