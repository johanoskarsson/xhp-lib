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

/**
 * Subclasses of :xhp:pcdata-elements may contain only \Stringish children.
 */
abstract class :pcdata-element extends :html-element {
	children (pcdata)*;
}
