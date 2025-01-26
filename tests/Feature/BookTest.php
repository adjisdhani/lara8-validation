<?php 

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_prevents_sql_injection()
    {
        $response = $this->postJson('/api/books', [
            'title' => "'; DROP TABLE books; --",
            'author' => "John Doe",
            'description' => "Test SQL Injection"
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('books', ['title' => "'; DROP TABLE books; --"]);
    }

    /** @test */
    public function it_prevents_xss()
    {
        $response = $this->postJson('/api/books', [
            'title' => "<script>alert('XSS')</script>",
            'author' => "John Doe",
            'description' => "Test XSS"
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('books', ['title' => "<script>alert('XSS')</script>"]);
    }
}