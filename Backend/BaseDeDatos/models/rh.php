<?php

class Rh {
    private array $data = [];

    public function __construct(array $attributes = []) {
        $this->data = $attributes;
    }

    public function set(string $key, $value): void {
        $this->data[$key] = $value;
    }

    public function get(string $key, $default = null) {
        return $this->data[$key] ?? $default;
    }

    public function toArray(): array {
        return $this->data;
    }

    public function save(): bool {
        // Basic placeholder for save logic
        return true;
    }
}
