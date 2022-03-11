<?php

namespace App\Tests\Entity;

use App\Entity\InvitationCode;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class InvitationCodeTest extends KernelTestCase
{
    public function testValidEntity (){
        $code = (new InvitationCode())
          ->setCode('12345')
          ->setDescription('Description de test')
          ->setExpireAt(new \DateTime());
        self::bootKernel();
        $error = self::$container->get('validator')->validate($code);
        $this->assertCount(0, $error);
    }

}