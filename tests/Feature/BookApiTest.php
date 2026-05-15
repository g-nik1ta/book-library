<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class BookApiTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function it_can_get_books_list()
    {
        Book::factory()->count(3)->create();

        $response = $this->getJson('/api/books', []);

        $response->assertStatus(200);
    }

    #[Test]
    public function it_can_create_book()
    {
        $data = [
            'title' => 'Test Book',
            'publisher' => 'Test Publisher',
            'author' => 'Test Author',
            'genre' => 'Fantasy',
            'published_at' => '2024-01-01',
            'word_count' => 50000,
            'price_usd' => 19.99,
        ];

        $response = $this->postJson('/api/books', $data);

        $response->assertStatus(201);

        $this->assertDatabaseHas('books', [
            'title' => 'Test Book',
        ]);
    }

    #[Test]
    public function it_can_get_single_book()
    {
        $book = Book::factory()->create();

        $response = $this->getJson("/api/books/{$book->id}");

        $response->assertStatus(200);

        $response->assertJson([
            'id' => $book->id,
            'title' => $book->title,
        ]);
    }

    #[Test]
    public function it_can_update_book()
    {
        $book = Book::factory()->create();

        $response = $this->patchJson("/api/books/{$book->id}", [
            'price_usd' => 99.99,
        ]);

        $response->assertStatus(200);

        $this->assertDatabaseHas('books', [
            'id' => $book->id,
            'price_usd' => 99.99,
        ]);
    }

    #[Test]
    public function it_can_delete_book()
    {
        $book = Book::factory()->create();

        $response = $this->deleteJson("/api/books/{$book->id}");

        $response->assertStatus(204);

        $this->assertDatabaseMissing('books', [
            'id' => $book->id,
        ]);
    }
}
