<?php

namespace App\Http\Resources\Produto;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdutoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'nome' => $this->nome,

            'descricao' => $this->detalhe,

            'preco' => $this->armazem,

            'desconto' => $this->desconto

        ];
    }
}
