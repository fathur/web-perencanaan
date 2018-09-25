<?php
/**
 * Created by PhpStorm.
 * User: fathur
 * Date: 24/09/18
 * Time: 08.00
 */

namespace App\Rest;


class Media extends RestClient
{
    public function find($id)
    {
        $response = $this->client->get('media/' . $id);
        return json_decode($response->getBody()->getContents());
    }
    /**
     * @param int|array $id
     * @return array
     */
    public function getById($id): array
    {
        $mediaIdString = is_array($id) ? implode(',', $id) : $id;
        $response = $this->client->get('media?include=' . $mediaIdString);
        $media = json_decode($response->getBody()->getContents());
        $newMedia = [];
        foreach ($media as $item) {
            $newMedia[$item->id] = $item;
        }

        return $newMedia;
    }

    /**
     * @param string|array $url
     * @return array
     */
    public function getByUrl($url): array
    {
        if (!is_array($url)) {
            $url = [$url];
        }

        $mediaIds = [];
        foreach ($url as $item) {
            $exploded = explode(env('API_URL') . 'media/', $item);
            $id = (int)$exploded[1];
            array_push($mediaIds, $id);
        }

        return $this->getById($mediaIds);
    }
}
