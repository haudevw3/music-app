<?php

namespace Modules\Artist\Service\Contracts;

interface ArtistService
{
    /**
     * @param  array  $data
     * @return \Modules\Artist\Models\Artist
     */
    public function create(array $data);

    /**
     * @param  string  $id
     * @param  array   $data
     * @return \Core\Http\ResponseBag
     */
    public function updateOne(string $id, array $data);

    /**
     * @param  string  $id
     * @return \Core\Http\ResponseBag
     */
    public function deleteOne(string $id);
}