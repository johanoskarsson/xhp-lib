<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */
namespace XHP\HTML;

class :ruby extends :html-element {
	category %flow, %phrase;
	children ((pcdata | :rb)+ | ((:rp, :rt) | (:rp, :rtc) | (:rt, :rp) | (:rtc, :rp))+);
	protected string $tagName = 'ruby';
}
