<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the MIT license found in the
 *  LICENSE file in the root directory of this source tree.
 *
 */

namespace x;

/**
 * Render an HTML conditional comment. You can choose whatever you like as
 * the conditional statement.
 */
class :conditional-comment extends :primitive {
	attribute string if @required;
	children (pcdata | :xhp)*;

	protected function stringify(): string {
		$children = $this->getChildren();
		$html = '<!--[if '.$this->:if.']>';
		foreach ($children as $child) {
			$html .= \XHP\:xhp::renderChild($child);
		}
		$html .= '<![endif]-->';
		return $html;
	}
}
