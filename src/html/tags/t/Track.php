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

class :track extends :html-singleton {
	attribute
		bool default,
		enum {'subtitles', 'captions', 'descriptions', 'chapters', 'metadata'} kind,
		\Stringish label,
		\Stringish src,
		\Stringish srclang;
	protected string $tagName = 'track';
}
