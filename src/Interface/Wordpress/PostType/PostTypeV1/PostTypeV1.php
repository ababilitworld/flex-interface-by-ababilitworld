<?php

namespace Ababilitworld\FlexInterfaceByAbabilitworld\Interface\Wordpress\PostType\PostTypeV1;

interface PostTypeV1 
{
    public function defaultLabels(): array;
    public function setLabel(string $key, string $value): void;
    public function getLabel(string $key): ?string;
    public function defaultArgs(): array;
    public function setArgs(array $args): void;
    public function getArgs(): array;
    public function setPostType(string $postType): void;
    public function getPostType(): string;
    public function initialize($data);
    public function paginate();
    public function pagination_links();
    public function render();
}