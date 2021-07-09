<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\JsonRpc\GoServiceConsumer;

class IndexController extends AbstractController
{


    public function index(GoServiceConsumer $goServiceConsumer)
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();
        $num = $goServiceConsumer->Sub(55,34);
        return [
            'method' => $method,
            'message' => "Hello {$user}.{$num}",
        ];
    }
}
