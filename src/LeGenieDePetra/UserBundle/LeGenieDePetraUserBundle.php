<?php

namespace LeGenieDePetra\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LeGenieDePetraUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
