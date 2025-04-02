<?php

declare(strict_types = 1);

namespace Sharkodlak\Ent;

use IteratorAggregate;
use Traversable;

class TraversalService implements IteratorAggregate {
	public static function getRoot(TreeNode $node): TreeNode {
		while ($node->getParent() !== null) {
			$node = $node->getParent();
		}
		
		return $node;
	}

	public static function isLeaf(TreeNode $node): bool {
		return count($node->getChildren()) === 0;
	}

	public function __construct(
		private readonly TreeNode $node,
		private readonly TraversalStrategy $strategy,
	) {
	}

	public function getIterator(): Traversable {
		return $this->strategy->yieldNode($this->node);
	}
}
