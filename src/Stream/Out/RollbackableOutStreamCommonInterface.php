<?php

namespace Donquixote\DataStream\Stream\Out;

interface RollbackableOutStreamCommonInterface extends CloseableOutStreamCommonInterface {

  /**
   * Attempts to discard all data written to the stream, and closes the stream.
   *
   * @throws \e4btc\VarTools\Exception\StreamOutCloseException
   *   If the rollback was ok, but the stream could not be closed.
   * @throws \e4btc\VarTools\Exception\StreamOutRollbackException
   *   If the rollback fails.
   */
  function rollbackAndClose();

}
