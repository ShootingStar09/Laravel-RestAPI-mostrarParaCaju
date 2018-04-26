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

            'preco' => $this->preco,

            'desconto' => $this->desconto,

            'precoTotal' => round((1 - ($this->desconto/100)) * $this->desconto,2),

            'armazem' => $this->armazem==0 ? 'estoque Vazio' : $this->armazem,

            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('estrela')/$this->reviews->count(),2) : 'sem rating',

            'href' => [
              'reviews' => route('reviews.index',$this->id)
            ]

        ];
    }
}
