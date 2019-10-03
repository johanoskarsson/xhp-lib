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

class :map extends :html-element {
  attribute \Stringish name;
  category %flow, %phrase;
  children (pcdata | %flow)*;
  protected string $tagName = 'map';
}
