<?php

namespace Tests\Feature;

use App\Http\Livewire\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCanSeeToggleAreaText()
    {
        $this->actingAs(User::first());

        Livewire::test(Profile::class)
            ->assertDontSee('Toggle Area')
            ->set('show',true)
            ->assertSee('Toggle Area');
    }

    public function  can_edit_profile()
    {
        $this->actingAs(User::first());

        Livewire::test(Profile::class)
            ->set('user.name', 'Test')
            ->set('user.email', 'test@test.com')
            ->call('updateprofile');

        $this->assertTrue(User::where('email','test@test.com')->exists());
    }
}
