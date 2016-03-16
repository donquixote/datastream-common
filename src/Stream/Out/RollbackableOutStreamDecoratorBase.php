<?php

namespace Donquixote\DataStream\Stream\Out;

abstract class RollbackableOutStreamDecoratorBase implements RollbackableOutStreamCommonInterface {

  /**
   * @var \Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface
   */
  private $decorated;

  /**
   * @param \Donquixote\DataStream\Stream\Out\RollbackableOutStreamCommonInterface $decorated
   */
  protected function __construct(RollbackableOutStreamCommonInterface $decorated) {
    $this->decorated = $decorated;
  }

  /**
   * Closes the output stream, and writes any buffered data to its destination.
   *
   * @throws \e4btc\VarTools\Exception\StreamOutCloseException
   */
  function close() {
    $this->decorated->close();
  }

  /**
   * Attempts to discard all data written to the stream, and closes the stream.
   *
   * @throws \e4btc\VarTools\Exception\StreamOutCloseException
   * @throws \e4btc\VarTools\Exception\StreamOutRollbackException
   */
  function rollbackAndClose() {
    $this->decorated->rollbackAndClose();
  }
}
