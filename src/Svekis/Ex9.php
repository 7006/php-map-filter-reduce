<?php

namespace Telema\Svekis;

const ITEMS = ['Apple', 'Banana', 'Cherry', 'Ananas'];

class Ex9 {

	public static function solution(array $fruits = ITEMS) {
		$html = '<ul>' . "\n";
		foreach ($fruits as $fruit) {
			$html .= "\t" . '<li>' . $fruit . '</li>' . "\n";
		}
		$html .= '</ul>' . "\n";
		
		return $html;
	}

	public static function fpSolution(array $fruits = ITEMS) {
		$fn = function ($html, $fruit) {
			return $html . "\t" . '<li>' . $fruit . '</li>' . "\n";
		};

		return array_reduce($fruits, $fn, '<ul>' . "\n") . '</ul>' . "\n";
	}

	public static function fpSolution2(array $fruits = ITEMS) {
		$lis = array_reduce($fruits, fn ($html, $f) => "$html<li>$f</li>", '');
		return "<ul>$lis</ul>";
	}

	public static function alternativeSyntaxSolution(array $fruits) { ?>
		<ul>
			<?php foreach ($fruits as $fruit) : ?>
				<li><?php echo $fruit; ?></li>
			<?php endforeach; ?>
		</ul>
	<?php }
}