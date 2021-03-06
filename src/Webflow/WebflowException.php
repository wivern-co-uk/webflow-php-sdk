<?php

namespace Webflow;

class WebflowException extends Exception {
   public function __construct(string $argument){
     $this->message = "Argument '{$argument}' is required but was not present";
     return $this;
   }
}
