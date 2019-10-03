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

class :link extends :html-singleton {
  attribute
    \Stringish as,
    enum {'anonymous', 'use-credentials'} crossorigin,
    \Stringish href,
    \Stringish hreflang,
    \Stringish media,
    \Stringish rel @required,
    \Stringish sizes,
    \Stringish type;
  category %metadata;
  protected string $tagName = 'link';
}
