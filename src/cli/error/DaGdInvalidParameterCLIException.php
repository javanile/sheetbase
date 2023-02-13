<?php

final class DaGdInvalidParameterCLIException extends DaGdCLIException {
  private $parameter;

  public function __construct($parameter) {
    parent::__construct();
    $this->parameter = $parameter;
  }

  public function getCliMessage() {
    return 'Unknown parameter or flag: '.
      $this->getProgram()->blue($this->parameter);
  }
}
