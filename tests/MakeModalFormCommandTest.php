<?php

class MakeModalFormCommandTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->path = __DIR__.'/../vendor/orchestra/testbench-core/laravel/app/Http/Forms/UserCreateForm.php';

        @unlink($this->path);

        $this->artisan('make:modal-form', [
            'name' => 'UserCreate'
        ]);
    }

    public function testFileHasBeenGenerated()
    {
        $this->assertTrue(file_exists($this->path));

        $contents = file_get_contents($this->path);

        $this->assertStringContainsString('UserCreateForm', $contents);
    }
}
