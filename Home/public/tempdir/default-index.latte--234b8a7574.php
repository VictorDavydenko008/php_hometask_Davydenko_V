<?php

use Latte\Runtime as LR;

/** source: templates/default/index.latte */
final class Template234b8a7574 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<p>Hello World!</p><p>';
		echo LR\Filters::escapeHtmlText($message) /* line 1 */;
		echo '</p>

';
	}
}
