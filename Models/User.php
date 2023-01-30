<?php

namespace Models;

use BubbleORM\Attributes\Table;
use BubbleORM\Attributes\Key;
use BubbleORM\Attributes\MysqlType;
use BubbleORM\Enums\MysqlTypeEnum;

#[Table("users")]
class User{
    #[Key] public int $id;

    public function __construct(
        public string $email,
        public string $password,
        public string $firstName,
        public string $lastName,
        #[MysqlType(MysqlTypeEnum::LongBlob)] public ?array $img
    ) {}
}