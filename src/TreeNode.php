<?php

declare(strict_types = 1);

namespace Sharkodlak\Ent;

interface TreeNode {
	public function getParent(): ?TreeNode;

	/**
	 * @return TreeNode[]
	 */
	public function getChildren(): array;
}
