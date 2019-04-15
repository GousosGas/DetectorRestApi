<?php

namespace Tests\Unit;

use App\DetectionInfo;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeviceInfoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    //use RefreshDatabase;

    public function testCreateDeviceInfo()
    {
        $data = [
            "user_ip" => $this->faker->ipv4,
            "device" => $this->faker->word,
            "operating_system" => $this->faker->word,
        ];

        $this->post(route('device-info.store'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function testUpdateDeviceInfo() {
        $info = factory(DetectionInfo::class)->create();

        $data = [
            "user_ip" => $this->faker->ipv4,
            "device" => $this->faker->word,
            "operating_system" => $this->faker->word,
        ];

        $this->put(route('device-info.update', $info->public_id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }

    public function testShowDeviceInfo() {
        $info = factory(DetectionInfo::class)->create();
        $this->get(route('device-info.show', $info->public_id))
            ->assertStatus(200);
    }

    public function testDeleteDeviceInfo() {
        $info = factory(DetectionInfo::class)->create();
        $this->delete(route('device-info.destroy', $info->public_id))
            ->assertStatus(204);
    }

}
