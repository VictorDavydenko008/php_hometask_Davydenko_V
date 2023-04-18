<?php

use Latte\Runtime as LR;

/** source: templates\default\pages\news.latte */
final class Template578c8ccec4 extends Latte\Runtime\Template
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
';
		foreach ($content as $new) /* line 4 */ {
			echo '	<h3>';
			echo LR\Filters::escapeHtmlText(($this->filters->upper)($new['header'])) /* line 5 */;
			echo '</h3>
	<p>';
			echo LR\Filters::escapeHtmlText($new['text']) /* line 6 */;
			echo '</p>
	<p>';
			echo LR\Filters::escapeHtmlText($new['date']) /* line 7 */;
			echo '</p>
';

		}
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['new' => '4'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
