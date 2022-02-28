<?php

namespace MajidAlaeinia\RefreshElastic\Traits;

use Illuminate\Support\Facades\Http;

trait RefreshElastic
{
    public function setUp(): void
    {
        parent::setUp();
        foreach (config('refresh-elastic.indices') as $index) {
            $this->refresh($index);
        }
    }

    public function tearDown(): void
    {
        foreach (config('refresh-elastic.indices') as $index) {
            $this->refresh($index);
        }
    }

    private function refresh(array $index): void
    {
        Http::acceptJson()->delete(config('refresh-elastic.base_url') . '/' . $index['name']);
        $index['has_mapping'] ? $this->createIndexWithMapping($index) : $this->createIndexWithoutMapping($index);
    }

    private function createIndexWithMapping(array $index): void
    {
        Http::acceptJson()
            ->put(config('refresh-elastic.base_url') . '/' . $index['name'],
                 json_decode(file_get_contents($index['mapping_path']), true));
    }

    private function createIndexWithoutMapping(array $index): void
    {
        Http::put(config('refresh-elastic.base_url') . '/' . $index['name']);
    }
}