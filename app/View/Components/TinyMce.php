<?php

namespace App\View\Components;

use Filament\Forms\Components\Concerns\HasMaxHeight;
use Filament\Forms\Components\Concerns\HasMinHeight;
use Filament\Forms\Components\Concerns\InteractsWithToolbarButtons;
use Filament\Forms\Components\Field;
use Filament\Forms\Components\Contracts\CanBeLengthConstrained;
use Filament\Forms\Components\Contracts\HasFileAttachments;
use Filament\Support\Concerns\HasExtraAlpineAttributes;
use Filament\Support\Concerns\HasPlaceholder;


class TinyMce extends Field implements CanBeLengthConstrained, HasFileAttachments
{
    use \Filament\Forms\Components\Concerns\HasFileAttachments;
    use \Filament\Forms\Components\Concerns\CanBeLengthConstrained;
    use HasPlaceholder;
    use InteractsWithToolbarButtons;
    use HasExtraAlpineAttributes;
    protected string $view = 'filament.components.tiny-mce';
    public $tinymce_config = [
        'plugins' => 'autoresize code',
        'min_height' => 100,
        'statusbar' => false,
        'toolbar' => 'bold italic code | quicklink h2 h3 blockquote | alignleft aligncenter alignright alignjustify | removeformat | quickimage quicktable',
        'quickbars_selection_toolbar' => 'bold italic link',
    ];


}
