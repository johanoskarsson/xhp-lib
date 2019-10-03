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
 * Render an <html /> element within a DOCTYPE, XHP has chosen to only support
 * the HTML5 doctype.
 */
class :doctype extends :primitive {
	children (:html);

	protected function stringify(): string {
		$children = $this->getChildren();
		return '<!DOCTYPE html>'.(\XHP\:xhp::renderChild($children[0]));
	}
}
