<?php
	$books = [
		[
			'name' => 'Do Androids Dream of Electric Sheep',
			'author' => 'Philip K. Dick',
			'releaseYear' => 1968,
			'purchaseUrl' => 'http://example.com'
		],
		[
			'name' => 'Project Hail Mary',
			'author' => 'Andy Weir',
			'releaseYear' => 2021,
			'purchaseUrl' => 'http://example.com'
		],
		[
			'name' => 'The Martian',
			'author' => 'Andy Weir',
			'releaseYear' => 2011,
			'purchaseUrl' => 'http://example.com'
		],
	];

	function filter($items, $fn)
	{
		$filteredItems = [];

		foreach ($items as $item) {
			if ($fn($item)) {
				$filteredItems[] = $item;
			}
		}

		return $filteredItems;
	}

	$filteredBooks = filter($books, function ($book)
	{
		return $book['releaseYear'] > 2000;
	});
?>


	<div class="w3-container w3-teal">
		<a href="array_filter.php">
			Array Filter
		</a>
	</div>

	<div class="w3-container">
		<?php var_dump($filteredBooks) ?>
		<p><?= count($filteredBooks) ?> Books</p>
		<ol>
			<?php foreach ($filteredBooks as $book) : ?>
				<li>
					<p>
						<a href="<?= $book['purchaseUrl'] ?>">
							<?= $book['name'] ?> 
						</a>
						(<?= $book['releaseYear'] ?>)
						- By <?= $book['author'] ?>
					</p>
				</li>
			<?php endforeach; ?>
		</ol>
	</div>