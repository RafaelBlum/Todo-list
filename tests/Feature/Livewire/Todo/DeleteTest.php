<?php

namespace Tests\Feature\Livewire\Todo;

use App\Http\Livewire\Todo\Delete;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DeleteTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Delete::class);

        $component->assertStatus(200);
    }

    public function it_should_be_to_delete()
    {
        
    }
}
