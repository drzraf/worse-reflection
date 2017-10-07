<?php

namespace Phpactor\WorseReflection\Core\Reflection;

use Phpactor\WorseReflection\Core\Position;
use Phpactor\WorseReflection\Core\ClassName;
use Phpactor\WorseReflection\Core\SourceCode;
use Phpactor\WorseReflection\Core\Docblock;
use Phpactor\WorseReflection\Core\Reflection\Collection\ReflectionPropertyCollection;

interface ReflectionTrait extends ReflectionClassLike
{
    public function docblock(): Docblock;

    public function properties(): ReflectionPropertyCollection;
}
