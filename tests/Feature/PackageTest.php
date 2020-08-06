<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\File;
use Tests\TestCase;

class PackageTest extends TestCase
{

    public function getId()
    {
        $response = $this->json('get', '/api/v1/package');
        $id = $response->decodeResponseJson()["data"]["0"]["transaction_id"];
        return $id;
    }

    public function testStore()
    {
        $path = storage_path() . "/package-test/store.json";
        $json = json_decode(File::get($path), true);
        $response = $this->json('post', '/api/v1/package', $json);
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }

    public function testGetAll()
    {

        $response = $this->json('get', '/api/v1/package');

        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);

    }

    public function testGetById()
    {

        $response = $this->json('get', '/api/v1/package/' . $this->getId());
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);
    }

    public function testUpdate()
    {

        $path = storage_path() . "/package-test/update.json";
        $json = json_decode(File::get($path), true);
        $response = $this->json('put', '/api/v1/package/' . $this->getId(), $json);
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);

    }

    public function testUpdatePatch()
    {
        $path = storage_path() . "/package-test/update.json";
        $json = json_decode(File::get($path), true);
        $response = $this->json('patch', '/api/v1/package/' . $this->getId(), $json);
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);

    }

    public function testDelete()
    {

        $path = storage_path() . "/package-test/update.json";
        $response = $this->json('delete', '/api/v1/package/' . $this->getId());
        $response
            ->assertStatus(200)
            ->assertJsonPath('success', true);

    }

}
