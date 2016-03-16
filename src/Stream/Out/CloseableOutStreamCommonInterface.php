<?php

namespace Donquixote\DataStream\Stream\Out;

interface CloseableOutStreamCommonInterface {

  /**
   * Closes the output stream, and writes any buffered data to its destination.
   *
   * @throws \e4btc\VarTools\Exception\StreamOutCloseException
   */
  function close();

}
