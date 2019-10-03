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

class :figure extends :html-element {
  category %flow, %sectioning;
  children ((:figcaption, %flow+) | (%flow+, :figcaption?));
  protected string $tagName = 'figure';
}
