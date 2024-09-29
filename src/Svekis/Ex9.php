<?php

namespace Telema\Svekis;

class Ex9 {

	public static $ITEMS = ['Apple', 'Banana', 'Cherry', 'Ananas'];

	public static function solution(array $fruits) {
		$html = '<ul>' . "\n";
		foreach ($fruits as $fruit) {
			$html .= "\t" . '<li>' . $fruit . '</li>' . "\n";
		}
		$html .= '</ul>' . "\n";
		
		return $html;
	}

	public static function fpSolution(array $fruits) {
		$fn = function ($html, $fruit) {
			return $html . "\t" . '<li>' . $fruit . '</li>' . "\n";
		};

		return array_reduce($fruits, $fn, '<ul>' . "\n") . '</ul>' . "\n";
	}

	public static function alternativeSyntaxSolution(array $fruits) { ?>
		<ul>
			<?php foreach ($fruits as $fruit) : ?>
				<li><?php echo $fruit; ?></li>
			<?php endforeach; ?>
		</ul>
	<?php }
}