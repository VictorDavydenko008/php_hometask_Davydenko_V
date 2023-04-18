<?php

use Latte\Runtime as LR;

/** source: templates/default/index.latte */
final class Template234b8a7574 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->createTemplate('header.latte', $this->params, 'include')->renderToContentType('html') /* line 1 */;
		$this->createTemplate("pages/{$page}.latte", $this->params, 'include')->renderToContentType('html') /* line 2 */;
		$this->createTemplate('footer.latte', $this->params, 'include')->renderToContentType('html') /* line 3 */;
		echo "\n";
	}
}
