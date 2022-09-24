<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class ProdukTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_produk_page_can_be_rendered_if_user_authenticated ()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user);
        
        $response->get('/produk')
                ->assertStatus(200)
                ->assertSeeText('Data Produk');
    }

    public function test_redirect_if_user_not_authenticated()
    {
        $response = $this->get('/produk');

        $response->assertRedirect('/login');
        $response->assertStatus(302);
    }

    public function test_produk_store()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user);

        $response = $this->post('/produk', [
            'nama_produk' => 'Baju baru',
            'foto_produk' => 'assets/img.jpg',
            'harga' => 90000,
            'stok' => 5,
            'diskon' => 0,
            'deskripsi' => 'Ini adalah baju testing',
            'kategori_id' => 1,
            'supplier_id' => 1,
        ]);

        $response->assertRedirect('/produk');
        $response->assertStatus(302);
    }

    public function test_produk_store_with_null_value_on_fields()
    {   
        $user = User::factory()->create();
        $this->actingAs($user)->get(route('produk.create'));
     
        $response = $this->post('/produk', [
            'nama_produk' => '',
            'foto_produk' => 'assets/img.jpg',
            'harga' => 90000,
            'stok' => 5,
            'diskon' => 0.5,
            'deskripsi' => 'Ini adalah baju testing',
            'kategori_id' => 1,
            'supplier_id' => 1,
        ]);
        $response->assertStatus(302);
        $response->assertInvalid([
            'nama_produk' => 'The nama produk field is required.'
        ]);
    }

    public function test_produk_store_with_invalid_value()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->get(route('produk.create'));

        $response = $this->post(route('produk.store'), [
            'nama_produk' => 23,
            'foto_produk' => 'assets/img.jpg',
            'harga' => 90000,
            'stok' => 5,
            'diskon' => 20,
            'deskripsi' => 'Ini adalah baju testing',
            'kategori_id' => 1,
            'supplier_id' => 1,
        ]);

        $response->assertStatus(302);
        $response->assertInvalid([
            "nama_produk" => "The nama produk must be a string."            
        ]);
    }
}
