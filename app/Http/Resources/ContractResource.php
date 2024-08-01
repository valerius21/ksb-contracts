<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContractResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'cuid' => $this->cuid,
            'user_id' => $this->user_id,
            'muster' => $this->muster,
            'vertragsgruppe' => $this->vertragsgruppe,
            'vertragstyp' => $this->vertragstyp,
            'rechtsgebiet' => $this->rechtsgebiet,
            'autor' => $this->autor,
            'geschaeftsbereich' => $this->geschaeftsbereich,
            'anmerkungen_autor' => $this->anmerkungen_autor,
            'hinweise_autor' => $this->hinweise_autor,
            'hinweise_user' => $this->hinweise_user,
//            'meta' => $this->meta,
            'erstellt' => $this->erstellt,
            'zuletzt_geaendert' => $this->zuletzt_geaendert,
        ];
    }
}
