<?php

namespace App\View\Components;

use App\Models\TgUser;
use Illuminate\Http\Client\Request;
use Illuminate\View\Component;
use ReflectionClass;
namespace App\View\Components;


class laravelAppendGrid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $url;
    public $ctrlOptions;
    public string $name;
    public string $display;
    public function __construct(string $url,$ctrlOptions, string $name, string $display)
    {
        $this->url = $url;
        $this->name = $name;
        $this->display = $display;
        $this->ctrlOptions = $ctrlOptions;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.AppendGrid');
    }
}
