<?php

namespace Infernobass7\PrintNode;

class Computer extends Entity
{
    protected $uri = 'computers';
    protected $foreignObjects = [
		'printer' => Printer::class
    ];

    public function getPrinters()
    {
        return collect($this->client->get("{$this->uri}/{$this->id}/printers"))->map(function ($item) {
            return (new PrintJob())->setAttributes($item);
        });
    }
}
