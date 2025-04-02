<?php

declare(strict_types = 1);

namespace Sharkodlak\Ent\Strategy;

use Generator;
use Sharkodlak\Ent\TraversalStrategy;
use Sharkodlak\Ent\TreeNode;

class DepthFirst implements TraversalStrategy {
	public function yieldNode(TreeNode $node): Generator {
		yield $node;

		foreach ($node->getChildren() as $child) {
			yield from $this->yieldNode($child);
		}
	}
}
