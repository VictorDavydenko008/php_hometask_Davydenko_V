<?php

use Latte\Runtime as LR;

/** source: templates\default\pages\home.latte */
final class Template68349131a3 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div>
    <h2>Welcome to ';
		echo LR\Filters::escapeHtmlText(ucfirst($page)) /* line 2 */;
		echo '</h2>
</div>
<p>';
		echo LR\Filters::escapeHtmlText($content) /* line 4 */;
		echo '</p>';
	}
}
