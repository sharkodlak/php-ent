<?php

declare(strict_types = 1);

namespace Sharkodlak\Ent;

use Traversable;

interface TraversalStrategy {
	public function yieldNode(TreeNode $node): Traversable;
}
